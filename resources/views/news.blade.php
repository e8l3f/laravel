@extends('layouts.master')

@section('title', $pagetitle)

@section('sidebar')
    @parent
	<ul>
		<li>Category</li>
	</ul>
@stop

@section('content')
    @foreach($news as $n)
		<h2>{{$n->title}}</h2>
		<div>{{$n->created_at}}</div>
		<p>{{$n->content}}</p>
	@endforeach
@stop