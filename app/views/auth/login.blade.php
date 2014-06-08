@extends('auth.layout')

@section('content')
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inloggen</h3>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(array('url'=>'login')) }}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'E-mail')) }}
                             </div>
                            <div class="form-group">
                                {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
                            </div>
                            {{ Form::submit('Login', array('class'=>'btn btn-lg btn-success btn-block'))}}
                        </fieldset>
                        {{ Form::close() }}
                        @if(Session::has('message'))
                            <div class="alert">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
@stop