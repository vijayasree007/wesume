@extends('layouts.navbar')

@section('title')
{{ __('Edit Password') }}
@endsection

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-12 col-xl-6">
        <h1 class="text-dark fs-4 ff-days-one">Update Password</h1>

        {{-- messages/alerts --}}
        @if($errors->hasBag('updatePassword'))
            <ul>
                @foreach ($errors->updatePassword->all() as $message)
                    <li class="fw-bold alert alert-danger ff-montserrat small">{{ $message }}</li>
                @endforeach
            </ul>
        @endif        

        {{-- update password --}}
        @if(session('status'))         
            <div class="fw-bold alert alert-success ff-montserrat small">{{ __('Your password has been updated.') }}</div>
        @endif
        <div class="justify-content-center mt-5">
            <form action="{{ route('user-password.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="main-container justify-content-center">
                    <div class="form-group mt-4">
                        <label for="inputPassword" class="text-dark ff-days-one"><small>Current Password</small></label>
                        <input type="password" class="form-control main-input ff-montserrat small" id="inputCurrentPassword" name="current_password" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="inputPassword" class="text-dark ff-days-one"><small>New Password</small></label>
                        <input type="password" class="form-control main-input ff-montserrat small" id="inputPassword" name="password" value="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="inputConfirmPassword" class="text-dark ff-days-one"><small>Confirm Password</small></label>
                        <input type="password" class="form-control main-input ff-montserrat small" id="inputConfirmPassword" name="password_confirmation" required>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-5 flex-column flex-md-row">
                        <button type="submit" class="btn  btn-dark rounded-pill btn-width m-2 text-white"><small>{{ __('Update') }}</small></button>
                        <a href="{{ route('profile.edit') }}" class="m-2">
                            <button type="button" class="btn  btn-dark rounded-pill btn-width text-white"><small>{{ __('Back') }}</small></button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection