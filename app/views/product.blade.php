@extends("layout")
@section("title")
    <h1>product</h1>
@endsection
@section("content")
    @if($list_product)
        @foreach($list_product as $product)
            <p>{{$product->id}}|{{$product->name}}|{{$product->price}}
                <form method="get" style="display:inline-block">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="action" value="delete">
                    <button>delete</button>
                </form>
                <form method="get" style="display:inline-block">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="action" value="edit">
                    <button>edit</button>
                </form>
                <form method="get" style="display:inline-block">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="action" value="view">
                    <button>view</button>
                </form>
            </p>
        @endforeach
    @endif
@endsection