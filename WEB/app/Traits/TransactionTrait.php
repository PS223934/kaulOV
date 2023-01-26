<?php

namespace App\Traits;

use App\Models\UserCredit;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Person;
use App\Models\Transaction;
use App\Models\Transaction_type;

trait TransactionTrait {

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function newTransaction($vendor, $type, $amount, $walletid) {
        $t_id = Str::lower(Str::random(32));
        $transaction = new Transaction();
        $transaction->id = $t_id;
        $transaction->type_id = $type;
        $transaction->vendor_id = $vendor;
        $transaction->amount = $amount;
        $transaction->save();

        Log::channel('UserPaymentActivity')->info(\Auth::user()->name.'('.\Auth::id().', '.\Auth::user()->roles[0]->name.') new transaction '. $t_id .' through ' . Vendor::findOrFail($vendor)->name);

        $this->registerTransaction($transaction, $walletid, $t_id);
    }

    public function registerTransaction($transaction, $walletid, $t_id) {
        $wallet = UserCredit::findOrFail($walletid);
        $type = Transaction_type::findOrFail($transaction->type_id);
        if($type->increase) {
            Log::channel('UserPaymentActivity')->info(\Auth::user()->name.'('.\Auth::id().', '.\Auth::user()->roles[0]->name.') registered '. $t_id .' '. $transaction->amount .' credits to wallet '.$wallet->id.'. |' . $wallet->credit . ' -> '. $wallet->credit+$transaction->amount . '| type: '. $type->name);
            $wallet->credit = $wallet->credit + $transaction->amount;
        }
        else {
            Log::channel('UserPaymentActivity')->info(\Auth::user()->name.'('.\Auth::id().', '.\Auth::user()->roles[0]->name.') registered '. $t_id .' '. $transaction->amount .' credits to wallet '.$wallet->id.'. |' . $wallet->credit . ' -> '. $wallet->credit-$transaction->amount . '| type: '. $type->name);
            $wallet->credit = $wallet->credit - $transaction->amount;
        }
        $wallet->save();
    }

    public function refreshWallet($walletid) {

    }
}
