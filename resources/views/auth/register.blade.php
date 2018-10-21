@extends('layouts.app')

@section('content')
<style>
  label{
    color: white;

}
input {

  color: white;
}
input, label, button {
  margin-left: 50%;
}
.field{
  color: white;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


									<div class="field">
										<label for="name">{{ __('Name') }}</label>
										<input type="text" name="name" id="name" />
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
									</div>


                  <div class="field">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input type="text" name="email" id="email" />
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="field" style="color: white;">
                    <label for="name">{{ __('Password') }}</label>
                    <input type="password" name="password" id="name" />
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="field">
                    <label for="name">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" id="name" />

                  </div>
<br />

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
