<html>
	<head>
		<title>Laravel</title>
		
		<?php /**<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>**/?>
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,700,400&subset=cyrillic,cyrillic-ext,latin' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{URL::asset("css/app.css")}}">
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5 анхны вэб</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				@foreach($news as $n)
					<h2>{{$n->title}}</h2>
					<div>{{$n->created_at}}</div>
					<p>{{$n->content}}</p>
				@endforeach

				<?php //var_dump($news);?>

			</div>
		</div>
	</body>
</html>
