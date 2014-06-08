@extends('admin.layout')

@section('content')
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadeau toevoegen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(array('files'=> true, 'action' => 'CadeauController@add','class' => 'form-horizontal')) }}
                    @include('cadeaus.forms.cadeau')
                    {{ Form::close() }}
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
@stop