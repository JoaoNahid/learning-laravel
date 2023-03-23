@extends('layouts.main')

@section('title', 'Product')

@section('content')

@if($category != null)
<h1>Produto {{$id}} - categoria {{$category}} </h1>
@else
<h2>Produto {{$id}} </h2>
@endif

@if($query)
<p>query: {{$query}} </p>
@endif

@endsection