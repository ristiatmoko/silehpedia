@extends('users.layouts.main', ['title' => 'Register'])

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
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
            <form action="/user" method="post">
                @csrf
{{--                @method('PUT')--}}
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Fullname" id="name" name="name" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="@error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" id="username" name="username" >
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
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
                        <button type="submit" class="site-btn">Register</button>
                    </div>
                    <div class="col-lg-12 text-center">
                        <p>have an account? <a href="{{ route('login') }}">Log in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    @include('users.partials.footer')

@endsection



