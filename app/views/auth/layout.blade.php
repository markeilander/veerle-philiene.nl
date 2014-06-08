<!DOCTYPE html>
<html>
	<!-- Header -->
    @include('admin.partial.header')
	<body>
	    <div class="container">
    		<!-- Pages -->
    		@yield('content')		
    		<!-- Footer -->
            @include('admin.partial.footer')
        </div>
        <!-- /#wrapper -->
	</body>
</html>