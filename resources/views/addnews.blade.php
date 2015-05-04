
@extends('layouts.master')

@section('title', $pagetitle)

@section('sidebar')
    @parent
	<ul>
		<li>Add News</li>
		<li>Edit News</li>
		<li>Remove News</li>
	</ul>
@stop

@section('content')
	@if( isset($message) && !empty($message))
		{{$message}}
	@else
		{!!	Form::open([ ]) !!}
			<div class="form-group">
				<label for="title">News Title</label>
			{!!	Form::text('title', Request::old('title'), array('class'=>'form-control')) !!}
			</div>	
						
			<div class="form-group">
				<label for="content">Content</label>
			{!!	Form::textarea('content', Request::old('content'), array('class'=>'form-control')) !!}
			</div>
			{!!	Form::submit('Хадгалах', array('class'=>'btn btn-default')) !!}
		{!!	Form::close( ) !!}
	@endif
@stop