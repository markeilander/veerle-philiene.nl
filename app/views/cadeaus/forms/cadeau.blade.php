                    @if($errors->has('volgorde'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('volgorde', 'Volgorde') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapNumeric('volgorde', '', 'Volgorde') }}
                        </div>
                    </div>
                    @if($errors->has('titel'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('titel', 'Titel') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapText('titel', '', 'Titel van cadeau') }}
                        </div>
                    </div>
                    @if($errors->has('omschrijving'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('omschrijving', 'Omschrijving') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapTextarea('omschrijving', '','Omschrijving van cadeau') }}
                        </div>
                    </div>
                    @if($errors->has('winkel'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('winkel', 'Winkel') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapText('winkel', '', 'Waar te koop?') }}
                        </div>
                    </div>
                    @if($errors->has('url'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('url', 'Website') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapUrl('url', '', 'Website van de winkel') }}
                        </div>
                    </div>
                    @if($errors->has('afbeelding'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('afbeelding', 'Afbeelding') }}
                        <div class="col-sm-10">
                            {{ Form::file('afbeelding') }}
                        </div>
                    </div>
                    @if($errors->has('prijs'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('prijs', 'Prijs') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapText('prijs', '', 'Prijs') }}
                        </div>
                    </div>
                    @if($errors->has('aantal'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('aantal', 'Aantal beschikbaar') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapNumeric('aantal', '', 'Aantal beschikbaar') }}
                        </div>
                    </div>
                    @if(isset($cadeau))
                        @if($errors->has('besteld'))
                        <div class="form-group has-error">
                        @else
                        <div class="form-group">
                        @endif
                            {{ Form::bootstrapLabel('besteld', 'Aantal besteld') }}
                            <div class="col-sm-10">
                                {{ Form::bootstrapNumeric('besteld', 0, 'Aantal besteld') }}
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            @if(isset($cadeau))
                                <button type="submit" class="btn btn-default">Wijzigen</button>
                            @else
                                <button type="submit" class="btn btn-default">Toevoegen</button>
                            @endif
                        </div>
                    </div>