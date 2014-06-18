    <div class="slide story" id="veerle" data-slide="3">
		<div class="container">
        <div class="page-header">
            <h1 id="timeline" class="font-thin">Veerle</h1>
        </div>
        <div class="timeline centered">
            @foreach ($veerleList as $datum=>$berichten)
                <div class="tl-header">{{{$datum}}}</div>
                
                @foreach ($berichten as $tijd=>$bericht)
                    <div class="tl-entry {{ HTML::oddeven('veerle', '', 'left') }}">
                        <div class="tl-time">
        					{{{ $tijd }}}
        				</div>
                        @include('home.pages.timeline.'.$bericht['type'])
                    </div>
                @endforeach
            @endforeach
		</div> <!-- / .timeline -->
		</div><!-- /container -->
	</div><!-- /veerle -->