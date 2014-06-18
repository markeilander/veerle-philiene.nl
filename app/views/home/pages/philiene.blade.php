    <div class="slide story" id="philiene" data-slide="4">
		<div class="container">
        <div class="page-header">
            <h1 id="timeline" class="font-thin">Philiene</h1>
        </div>
        <div class="timeline centered">
            @foreach ($philieneList as $datum=>$berichten)
                <div class="tl-header">{{{$datum}}}</div>
                
                @foreach ($berichten as $tijd=>$bericht)
                    <div class="tl-entry {{ HTML::oddeven('veerle', 'left', '') }}">
                        <div class="tl-time">
        					{{{ $tijd }}}
        				</div>
                        @include('home.pages.timeline.'.$bericht['type'])
                    </div>
                @endforeach
            @endforeach
		</div> <!-- / .timeline -->
		</div><!-- /container -->
	</div><!-- /philiene -->