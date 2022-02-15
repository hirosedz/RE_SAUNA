@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="circle"></div>
                <h1 class="logo">
                    <div class="hoge" style="margin-top: -220px;">
                        <span>The best</span><br/><span>Your</span><br/><span>SAUNA</span><br/><span>Experiece</span><br/><span>Return</span><br/>
                    </div>
                </h1>
            </div>
        </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                        <div class="row justify-content-center" style="margin: 10px;">
                            <div class="col-md-6">
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center" style="margin: 10px;">
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center" style="margin: 10px;">
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center" style="margin: 10px;">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row justify-content-center" style="margin: 20px;">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" style="width: 300px;">
                                    {{ __('SIGN UP') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@endsection
