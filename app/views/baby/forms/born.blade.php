                    @if($errors->has('titel'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('titel', 'Geboren op') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapText('titel', '', 'Op 16 juli om 12:38 is geboren: Veerle Maud') }}
                        </div>
                    </div>
                    @if($errors->has('gewicht'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('gewicht', 'Gewicht') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapNumeric('gewicht', '', 'Gewicht') }}
                        </div>
                    </div>
                    @if($errors->has('lengte'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('lengte', 'Lengte') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapNumeric('lengte', '', 'Lengte') }}
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