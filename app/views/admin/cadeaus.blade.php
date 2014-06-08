@extends('admin.layout')

@section('content')
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadeau's</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-sm-12">
                    <a href="{{ action('CadeauController@add') }}">
                        <button type="button" class="btn btn-default pull-right">
                            <i class="fa fa-plus"></i> Toevoegen
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Titel</th>
                                    <th>Aantal</th>
                                    <th>Winkel</th>
                                    <th>Prijs</th>
                                    <th style="width: 70px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cadeaus as $cadeau)
                                @if ($cadeau->besteld === $cadeau->aantal)
                        		<tr class="success">
                        		@else
                        		<tr>
                        		@endif
                        			<td>{{{ $cadeau->titel }}}</td>
                        			<td>{{{ $cadeau->besteld }}}/{{{ $cadeau->aantal }}}</td>
                        			<td>{{{ $cadeau->winkel }}}</td>
                        			<td>{{{ Html::euroFormat($cadeau->prijs) }}}</td>
                        			<td>
                        			    <a href="{{ action('CadeauController@edit', $cadeau->id) }}">
                            			    <button class="btn btn-primary btn-xs">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="{{ action('CadeauController@delete', $cadeau->id) }}">
                                            <button class="btn btn-danger btn-xs">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </button>
                                        </a>
                        			</td>
                        		</tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <?php echo $cadeaus->links(); ?>
                </div>
            </div>
        </div>
@stop