@extends("layout")
@section("title")
    <h1>category</h1>
@endsection
@section("content")
    @if($list_category)
        @foreach($list_category as $category)
            <p>{{$category->id}}<a href="/category/{{$category->id}}" >{{$category->name}}</a></p>
        @endforeach
    @endif
@endsection