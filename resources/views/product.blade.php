@extends('layout')

@section('content')
<article>
	<h2>{{ $product->product_name }}</h2>
	<p>{!! $product->product_desc !!}</p>

<a href="/">Go to Home</a>
</article>
	
@endsection


	
