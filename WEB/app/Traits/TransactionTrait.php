<?php

namespace App\Traits;

use App\Models\UserCredit;
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
    public function newTransaction($vendor, $type, $amount, $wallet) {
        $t_id = Str::random(32);
        $transaction = new Transaction();
        $transaction->id = $t_id;
        $transaction->type_id = $type;
        $transaction->vendor_id = $vendor;
        $transaction->amount = $amount;
        $transaction->save();

        $this->registerTransaction($transaction, $wallet);
    }

    public function registerTransaction($transaction, $walletid) {
        $wallet = UserCredit::findOrFail($walletid);
        $type = Transaction_type::findOrFail($transaction->type);
        if($type->increase) {
            $wallet->credit = $wallet->credit + $transaction->amount;
        }
        else {
            $wallet->credit = $wallet->credit - $transaction->amount;
        }
        $wallet->save();
    }
}
