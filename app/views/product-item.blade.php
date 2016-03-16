@extends("layout")
@section("title")
    <h1>product-item</h1>
@endsection
@section("content")
    @if($product)
        <form action="post">
            <label>id</label>
            <input type="text" name="product_id" value="{{$product->id}}"/>
            <label>name</label>
            <input type="text" name="product_name" value="{{$product->name}}"/>
            <label>price</label>
            <input type="text" name="product_price" value="{{$product->price}}"/>
            <input type="text" name="product_content" value="{{$product->content}}"/>
            <input type="text" name="product_status" value="{{$product->status}}"/>
            <input type="hidden" name="action" value="save"/>
            <button>save</button>
        </form>
    @endif
@endsection