@extends('layouts.adminlayout')

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Change Password</li>
</ol>
<div class="container">
    <div class="card p-3">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="current-password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                    <div class="col-md-6">
                        <input id="current-password" type="password" class="form-control @error('current-password') is-invalid @enderror" name="current-password" required autocomplete="current-password">

                        @error('current-password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Change password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
