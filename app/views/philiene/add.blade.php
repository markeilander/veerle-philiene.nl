@extends('admin.layout')

@section('content')
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bericht voor Philiene toevoegen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(array('files'=> true, 'action' => array('PhilieneController@add', $type) ,'class' => 'form-horizontal')) }}
                    @include('baby.forms.'.$type)
                    {{ Form::close() }}
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
@stop