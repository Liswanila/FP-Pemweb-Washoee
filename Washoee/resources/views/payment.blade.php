@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Payment Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('payment.process') }}" id="paymentForm">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="card_number" class="col-md-4 col-form-label text-md-right">{{ __('Card Number') }}</label>

                            <div class="col-md-6">
                                <input id="card_number" type="text" class="form-control @error('card_number') is-invalid @enderror" name="card_number" required>

                                @error('card_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expiry_date" class="col-md-4 col-form-label text-md-right">{{ __('Expiry Date') }}</label>

                            <div class="col-md-6">
                                <input id="expiry_date" type="text" class="form-control @error('expiry_date') is-invalid @enderror" name="expiry_date" required>

                                @error('expiry_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cvc" class="col-md-4 col-form-label text-md-right">{{ __('CVC') }}</label>

                            <div class="col-md-6">
                                <input id="cvc" type="text" class="form-control @error('cvc') is-invalid @enderror" name="cvc" required>

                                @error('cvc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="service" class="col-md-4 col-form-label text-md-right">{{ __('Selected Plan') }}</label>
                            <div class="col-md-6">
                                <select id="service" name="service" class="form-control" required>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" @if($service->id == $selectedPlan) selected @endif>
                                            {{ $service->name }} - ${{ $service->price }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Pay Now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var cardNumber = document.getElementById('card_number');
        var expiryDate = document.getElementById('expiry_date');
        var cvc = document.getElementById('cvc');

        // Format card number
        cardNumber.addEventListener('input', function(e) {
            var input = e.target.value.replace(/\D/g, '').substring(0, 16); // Allow only digits, limit to 16 characters
            input = input.replace(/(\d{4})(\d{4})(\d{4})(\d{4})/, '$1-$2-$3-$4');
            e.target.value = input;
        });

        // Validate and format expiry date
        expiryDate.addEventListener('input', function(e) {
            var input = e.target.value.replace(/\D/g, '').substring(0, 4); // Allow only digits, limit to 4 characters
            if (input.length > 2) {
                input = input.substring(0, 2) + '/' + input.substring(2);
            }
            e.target.value = input;
        });

        // Limit CVC to 3 digits
        cvc.addEventListener('input', function(e) {
            var input = e.target.value.replace(/\D/g, '').substring(0, 3); // Allow only digits, limit to 3 characters
            e.target.value = input;
        });
    });
</script>
@endpush
