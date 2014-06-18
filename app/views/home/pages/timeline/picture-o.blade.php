				<div class="tl-icon bg-success"><i class="fa fa-picture-o"></i></div>
				<div class="panel tl-body">
					{{{ $bericht['titel'] }}}
					<div class="tl-wide text-center" style="padding: 10px;margin-top:15px;margin-bottom: 15px;background: #f1f1f1">
						{{ HTML::image($bericht['afbeelding'], $bericht['titel'], array('style' => 'max-height: 250px;max-width: 100%;')) }}
					</div>
					<div class="text-muted text-sm">
                        {{{ $bericht['bericht'] }}}
                    </div>
				</div> <!-- / .tl-body -->