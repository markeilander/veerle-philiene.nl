    <div class="slide story" id="cadeau" data-slide="5">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 intro-cadeau">
                    <p>
                        Vind je het lastig om zelf een cadeautje te bedenken?    
                    </p>
                    <p>
                        Wij helpen je graag! Hieronder staan cadeautjes die wij graag zouden willen hebben.<br />
                        Klik op de knop "Ik koop dit" als je een cadeautje ziet dat je wilt kopen.<br />
                        Dan strepen wij deze af van ons lijstje en krijgen we het niet dubbel.
                    </p>
                    <p>
                        Alvast bedankt!
                    </p>
                    <p>
                        Liefs Veerle en Philiene.
                    </p>
                </div>
            </div>
			<div class="row">
			    @foreach ($cadeaus as $cadeau)
			    @if ($cadeau->besteld != $cadeau->aantal)
			    <div class="col-xs-12 col-sm-6">
                     <div class="well profile">
                        <div class="row" style="height: 220px;">
                            <div class="col-xs-7">
                                <h2>{{{$cadeau->titel}}}</h2>
                                <div class="row">
                                    <div class="col-xs-12 cadeau-text">
                                        <p>&nbsp;</p>
                                        <p><strong>Waar te koop?: </strong> {{{$cadeau->winkel}}} </p>
                                        <p>
                                            {{ nl2br(e($cadeau->omschrijving)) }}
                                        </p>
                                    </div>
                                </div>
                            </div>             
                            <div class="col-xs-5 text-center">
                                <figure>
                                    {{ HTML::image($cadeau->afbeelding, $cadeau->titel, array('class' => 'img-responsive img-rounded', 'height' => 150)) }}
                                </figure>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-xs-12 divider text-center">
                                <div class="col-xs-12 col-sm-6 emphasis">
                                    <h2><span class="fa fa-check"></span></h2>
                                    <p><small>Beschikbaar</small></p>
                                    <button class="buy btn btn-default btn-block" id="{{{$cadeau->id}}}">Ik koop dit </button>
                                </div>
                                <div class="col-xs-12 col-sm-6 emphasis">
                                    <h2>€ <strong>{{{ Html::euroFormat($cadeau->prijs, 2, false) }}}</strong></h2>
                                    <p><small>Prijs</small></p>
                                    @if ($cadeau->url !== '')
                                    <a href="#" onclick="window.open('{{{$cadeau->url}}}','_blank')">
                                        <button class="btn btn-default btn-block"> Naar website </button>
                                    </a>
                                    @else
                                        <button class="btn btn-default btn-block" disabled="disabled"> Naar website </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                     </div>                       
                </div>
                @endif
			    @endforeach
            </div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Cadeau -->