@extends('users.layouts.main', ['title' => 'Login'])

@section('content')

    {{--    @include('users.partials.preloder')--}}

{{--    @include('users.partials.responsive')--}}

{{--    @include('users.partials.header')--}}

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if(session()->has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" id="email" name="email" >
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="password" class="@error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password" id="password" name="password" >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Login</button>
                    </div>
                    <div class="col-lg-12 text-center">
                        <p>new in silehpedia? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Contact Form Begin -->
{{--    <div class="contact-form spad">--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="contact__form__title">--}}
{{--                        <h2>Register</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="checkout__form">--}}
{{--                <h4></h4>--}}
{{--                <form action="#">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-8 col-md-6">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="checkout__input">--}}
{{--                                        <input type="text" placeholder="Your name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="checkout__input">--}}
{{--                                        <input type="text" placeholder="Your name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="checkout__input">--}}
{{--                                        <input type="text" placeholder="Your name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="checkout__input">--}}
{{--                                        <input type="text" placeholder="Your name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="checkout__input">--}}
{{--                                        <button type="submit" class="site-btn">Register</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="checkout__input__checkbox">--}}
{{--                                <label for="acc">--}}
{{--                                    Create an account?--}}
{{--                                    <input type="checkbox" id="acc">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <p>have an account? <a href="">Log in</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="checkout__order">--}}
{{--                                <h4>Your Order</h4>--}}
{{--                                <div class="checkout__order__products">Products <span>Total</span></div>--}}
{{--                                <ul>--}}
{{--                                    <li>Vegetable’s Package <span>$75.99</span></li>--}}
{{--                                    <li>Fresh Vegetable <span>$151.99</span></li>--}}
{{--                                    <li>Organic Bananas <span>$53.99</span></li>--}}
{{--                                </ul>--}}
{{--                                <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>--}}
{{--                                <div class="checkout__order__total">Total <span>$750.99</span></div>--}}
{{--                                <div class="checkout__input__checkbox">--}}
{{--                                    <label for="acc-or">--}}
{{--                                        Create an account?--}}
{{--                                        <input type="checkbox" id="acc-or">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt--}}
{{--                                    ut labore et dolore magna aliqua.</p>--}}
{{--                                <div class="checkout__input__checkbox">--}}
{{--                                    <label for="payment">--}}
{{--                                        Check Payment--}}
{{--                                        <input type="checkbox" id="payment">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="checkout__input__checkbox">--}}
{{--                                    <label for="paypal">--}}
{{--                                        Paypal--}}
{{--                                        <input type="checkbox" id="paypal">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <button type="submit" class="site-btn">PLACE ORDER</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <!-- Contact Form End -->



    @include('users.partials.footer')

@endsection



