<html>
    <head>
        <title>Devsor - @yield('title')</title>

		<link rel="stylesheet" type="text/css" href="{{URL::asset("css/app.css")}}">
        <link href='http://fonts.googleapis.com/css?family=Jura:500,400,300,600&subset=cyrillic,cyrillic-ext,latin' 
        		rel='stylesheet' type='text/css'>
		
    </head>
    <body>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
			        @section('sidebar')
			            This is the master sidebar.
			        @show
			    </div>
        		<div class="col-md-8">
           			 @yield('content')
       			</div>
       		</div>
       	</div>
    </body>
</html>