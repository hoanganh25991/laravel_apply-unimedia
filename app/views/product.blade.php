@extends("layout")
@section("title")
    <h1>product</h1>
@endsection
@section("content")
    @if($list_product)
        @foreach($list_product as $product)
            <p>{{$product->id}}{{$product->name}}{{$product->price}}</p>
        @endforeach
    @endif
@endsection