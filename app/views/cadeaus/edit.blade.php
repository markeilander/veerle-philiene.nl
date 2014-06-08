@extends('admin.layout')

@section('content')
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadeau <strong>{{{$cadeau->titel}}}</strong> wijzigen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::model($cadeau, array('files'=> true, 'action' => array('CadeauController@edit', $cadeau->id) ,'class' => 'form-horizontal')) }}
                    @include('cadeaus.forms.cadeau')
                    {{ Form::close() }}
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
@stop