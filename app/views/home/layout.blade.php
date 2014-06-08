
<!DOCTYPE html>
<html>
	<!-- Header -->
    @include('home.partial.header')
	<body>
	    @if(Session::has('message'))
            <div class="alert">{{ Session::get('message') }}</div>
        @endif
		<!-- Static navbar -->
        @include('home.partial.menu')
		<!-- Pages -->
		@yield('content')		
		<!-- Footer -->
        @include('home.partial.footer')
	</body>
</html>