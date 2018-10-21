@extends('layouts.app')

@section('content')

<style>
  label{
    color: white;
  margin-left: 50%;
}
input {
  margin-left: 50%;
  color: white;
}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">




                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                          <label for="email">{{ __('E-Mail Address') }}</label>
                          <input type="text" name="email" id="email" />
                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="field">
                          <label for="name">{{ __('Password') }}</label>
                          <input type="password" name="password" id="name" />
                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>

<br />



                                <input type="submit" class="btn btn-primary" style="border: 2px solid;">
                                    {{ __('Login') }}



                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
