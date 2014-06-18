                    @if($errors->has('titel'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('titel', 'Titel') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapText('titel', '', 'Leuke titel bij bericht') }}
                        </div>
                    </div>
                    @if($errors->has('text'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('bericht', 'Bericht') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapTextarea('bericht', '','Leuk verhaaltje over Veerle') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            @if(isset($baby))
                                <button type="submit" class="btn btn-default">Wijzigen</button>
                            @else
                                <button type="submit" class="btn btn-default">Toevoegen</button>
                            @endif
                        </div>
                    </div>