<!DOCTYPE html>
<html>
	<!-- Header -->
    @include('admin.partial.header')
	<body>
	    <div id="wrapper" ng-app='AdminApp'>
    		<!-- Static navbar -->
            @include('admin.partial.menu')
    		<!-- Pages -->
    		<div id="page-wrapper">
        		@if(Session::has('message'))
                    <div class="alert">{{ Session::get('message') }}</div>
                @endif
        		@yield('content')
    		</div>
            <!-- /#page-wrapper -->
    		<!-- Footer -->
            @include('admin.partial.footer')
        </div>
        <!-- /#wrapper -->
	</body>
</html>