                    <div class="row">
                        <div class="col-sm-12">
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
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>&nbsp;</p>
                                        <p><strong>Prijs: </strong>€ <strong>{{{ Html::euroFormat($cadeau->prijs, 2, false) }}}</strong> </p>
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
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-12">
                        @if ($posted && $success)
                            <span class="help-block">
                               De e-mail is naar je verzonden.
                            </span>
                        @else
                            {{{$success}}}
                            <span class="help-block">
                               Vul hieronder je e-mailadres in zodat wij weten dat je dit cadeautje aan ons wilt geven.</br>
                               Wij zullen je een e-mail sturen met daarin alle gegevens van dit cadeautje.
                            </span>
                            {{ Form::model($cadeau, array('action' => array('HomeController@postCadeau', $cadeau->id) ,'class' => 'form-horizontal', 'id' => 'buy-gift')) }}
                            @if(!$posted && !$success)
                            <div class="form-group">
                            @else
                            <div class="alert alert-warning">Ongeldig e-mailadres ingevoerd</div>
                            <div class="form-group has-error">
                            @endif
                                {{ Form::bootstrapLabel('email', 'E-mailadres', 'col-sm-3') }}
                                <div class="col-sm-9">
                                    {{ Form::bootstrapEmail('email', '', 'E-mailadres') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-default" id="send">Verstuur</button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        @endif
                        </div>
                    </div>