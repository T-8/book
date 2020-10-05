@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">{{ __('新規登録') }}</div>
=======
                <div class="card-header">{{ __('Register') }}</div>
>>>>>>> 36911ca15942e3fc4ef5905348824477533c2610

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>
=======
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
>>>>>>> 36911ca15942e3fc4ef5905348824477533c2610

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Eメールアドレス') }}</label>
=======
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
>>>>>>> 36911ca15942e3fc4ef5905348824477533c2610

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
>>>>>>> 36911ca15942e3fc4ef5905348824477533c2610

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('再パスワード') }}</label>
=======
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
>>>>>>> 36911ca15942e3fc4ef5905348824477533c2610

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    {{ __('登録') }}
=======
                                    {{ __('Register') }}
>>>>>>> 36911ca15942e3fc4ef5905348824477533c2610
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
