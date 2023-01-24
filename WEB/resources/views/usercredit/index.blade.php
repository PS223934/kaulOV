@extends('layouts.dashboard')

@section('content')
    <script>
        function amountchange(element) {
            const input = document.getElementById('paymentamountinput');
            const data = element.dataset.eur;

            if (element.dataset.eur == 'custom' && $(element).hasClass('paymentamountselected')) {return;}
            resetElementGroup('paymentamount');

            $(element).addClass('paymentamountselected');
            $(input).addClass('hidden');
            if(data == "custom") {
                $(input).val('');
                $('#paymentmethodcontainer').addClass('hidden');
                $('#checkoutbtn').addClass('hidden');
                resetElementGroup('paymentmethod');
                $(input).removeClass('hidden');
                return;
            }
            $(input).val(data);
            inputchange(input, 'paymentmethodcontainer');
        }

        function inputchange(input, elementid) {
            $(input).val($(input).val().replace(/[^0-9]/g, ''));
            const inputvalue = parseInt($(input).val());
            $('#'+elementid).addClass('hidden');

            if(inputvalue >= 5 && elementid == "paymentmethodcontainer" || inputvalue <= {{$vendors->count()}} && elementid == "checkoutbtn") {
                $('#'+elementid).removeClass('hidden');
            }
        }

        function vendorchange(element) {
            const input = document.getElementById('paymentmethodinput');
            resetElementGroup('paymentmethod');

            $(element).addClass('paymentmethodselected');
            $(input).val(element.dataset.vendor);
            $('#checkoutbtn').removeClass('hidden');
        }

        function resetElementGroup(groupName) {
            const elements = document.getElementsByClassName(groupName);

            for (let i = 0; i < elements.length; i++) {
                $(elements[i]).removeClass(groupName+'selected');
            }
        }
    </script>
    <div class="p-6 text-gray-900">
        <h1>Top up your balance</h1>
        <form action="{{route('topup.a2bal')}}" method="post">
            @csrf
            <div class="topupamountcontainer">
                <h2 class="mb-2">select your desired payment amount:</h2>
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
                <input onsubmit="e.preventDefault();" oninput="inputchange(this, 'paymentmethodcontainer')" name="amount" type="number" min="5" max="5000" id="paymentamountinput" class="r-input hidden"/>
            </div>

            <div id="paymentmethodcontainer" class="paymentmethodcontainer hidden">
                <h2 class="mb-2">select a payment method:</h2>
                <div class="paymentmethods">
                    @foreach($vendors as $vendor)
                        <div data-vendor="{{$vendor->id}}" onclick="vendorchange(this)" class="paymentmethod">
                            <div class="vendorimgcontainer">
                                <img class="vendorimg" src="{{$vendor->image_url}}" alt="{{$vendor->name}}" width="81" height="70">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <input onsubmit="e.preventDefault();" oninput="inputchange(this, 'checkoutbtn')" name="vendor" id="paymentmethodinput" class="r-input hidden"/>
            <x-primary-button id="checkoutbtn" class="hidden mt-12">checkout</x-primary-button>
        </form>
    </div>
@endsection
