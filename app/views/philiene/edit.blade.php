@extends('admin.layout')

@section('content')
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bericht van Philiene wijzigen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::model($baby, array('files'=> true, 'action' => array('PhilieneController@edit', $baby->id, $type) ,'class' => 'form-horizontal')) }}
                    @if ($type == 'child')
                        @include('baby.forms.born')
                    @elseif ($type == 'pencil-square-o')
                        @include('baby.forms.text')
                    @elseif ($type == 'picture-o')
                        @include('baby.forms.image')
                    @endif
                    {{ Form::close() }}
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
@stop