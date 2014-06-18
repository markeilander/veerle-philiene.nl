                    @if($errors->has('titel'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('titel', 'Afbeelding tekst') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapText('titel', '', 'Haar eerste foto...') }}
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
                    @if($errors->has('onderschrift'))
                    <div class="form-group has-error">
                    @else
                    <div class="form-group">
                    @endif
                        {{ Form::bootstrapLabel('onderschrift', 'Onderschrift') }}
                        <div class="col-sm-10">
                            {{ Form::bootstrapText('onderschrift', '', 'Wat ligt ze lief te slapen...') }}
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