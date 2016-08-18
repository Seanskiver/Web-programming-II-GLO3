@extends('layouts.app')

@section('middle')
<div class="row">
    <div class="col s12 m12 l12</m12>">
        <div class="card">
            <div class="card-content">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>E-Mail Address</label>

                        <div>
                            <input type="email" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>

                        <div>
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span>
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div>
                        <div>
                            <!--<div class="checkbox">-->
                            <!--    <label>-->
                            <!--        <input type="checkbox" name="remember"> Remember Me-->
                            <!--    </label>-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div>
                        <div>

                        </div>
                    </div>
                
            </div>
            
            <div class="card-action">
                <button type="submit" class="btn">login</button>

                <a class="btn" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
            </form> <!-- end for -->
        </div> <!-- end card -->
    </div>
</div>
@endsection