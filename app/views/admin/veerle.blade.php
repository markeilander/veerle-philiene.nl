@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Veerle</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-sm-8">
                <?php echo $berichten->links(); ?>
            </div>
            <div class="col-sm-4">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default">
                        <a href="{{ URL::to('/#veerle') }}" target="_blank">
                            Bekijken
                        </a>
                    </button>
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Toevoegen
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ action('VeerleController@add', 'text') }}">
                                    <i class="fa fa-pencil-square-o fa-fw"></i> Bericht
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('VeerleController@add', 'image') }}">
                                    <i class="fa fa-picture-o fa-fw"></i> Afbeelding
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Titel</th>
                                <th class="text-center">Type</th>
                                <th>Datum</th>
                                <th>Tijd</th>
                                <th style="width: 70px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berichten as $bericht)
                    		<tr>
                    			<td>{{{ $bericht->titel }}}</td>
                    			<td class="text-center"><i class="fa fa-{{{ $bericht->type }}}"></i></td>
                    			<td>{{ HTML::dutchDate($bericht->created_at) }}</td>
                    			<td>{{ HTML::dutchTime($bericht->created_at) }}</td>
                    			<td>
                    			    <a href="{{ action('VeerleController@edit', array($bericht->id, $bericht->type)) }}">
                        			    <button class="btn btn-primary btn-xs">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </button>
                                    </a>
                                    <a href="{{ action('VeerleController@delete', $bericht->id) }}">
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
            </div>
        </div>
@stop