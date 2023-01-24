@extends('layouts.dashboard')

@section('content')
    <script>
        function amountchange(element) {
            const elements = document.getElementsByClassName('paymentamount');
            const input = document.getElementById('paymentamountinput');
            const data = element.dataset.eur;

            for (let i = 0; i < elements.length; i++) {
                $(elements[i]).removeClass('paymentamountselected');
            }

            $(element).addClass('paymentamountselected');
            $(input).addClass('hidden');
            if(data == "custom") {
                $(input).val('');
                $('#paymentmethodcontainer').addClass('hidden')
                $(input).removeClass('hidden');
                return;
            }
            $(input).val(data);
            inputchange(input);
        }

        function inputchange(input) {
            $(input).val($(input).val().replace(/[^0-9]/g, ''));
            const inputvalue = parseInt($(input).val());
            console.log(inputvalue);
            $('#paymentmethodcontainer').addClass('hidden')
            if(inputvalue >= 5) {
                $('#paymentmethodcontainer').removeClass('hidden')
            }
        }
    </script>
    <div class="p-6 text-gray-900">
        <h1>Top up your balance</h1>
        <form>
            @csrf
            <div class="topupamountcontainer">
                <h2 class="mb-2">select your payment amount:</h2>
                <div class="paymentamountcontainer">
                    <div onclick="amountchange(this)" data-eur="5" class="paymentamount">
                        <p>&euro;5</p>
                    </div>
                    <div onclick="amountchange(this)" data-eur="10" class="paymentamount">
                        <p>&euro;10</p>
                    </div>
                    <div onclick="amountchange(this)" data-eur="20" class="paymentamount">
                        <p>&euro;20</p>
                    </div>
                    <div onclick="amountchange(this)" data-eur="50" class="paymentamount">
                        <p>&euro;50</p>
                    </div>
                    <div onclick="amountchange(this)" data-eur="100" class="paymentamount">
                        <p>&euro;100</p>
                    </div>
                    <div onclick="amountchange(this)" data-eur="200" class="paymentamount">
                        <p>&euro;200</p>
                    </div>
                    <div onclick="amountchange(this)" data-eur="custom" id="customamountbtn" class="paymentamount">
                        <p>custom</p>
                    </div>
                </div>
                <input onsubmit="e.preventDefault();" oninput="inputchange(this)" name="amount" type="number" min="5" id="paymentamountinput" class="r-input hidden"/>
            </div>

            <div id="paymentmethodcontainer" class="paymentmethodcontainer hidden">
                <h2 class="mb-2">select your payment method:</h2>

                <button class="paymentmethodconfirm">
                    <p>ideal</p>
                    <img src="https://www.ideal.nl/cms/themes/ideal_nl/img/ideal_logo.svg" alt="iDEAL" width="81" height="70">
                </button>
            </div>
        </form>
    </div>
@endsection
