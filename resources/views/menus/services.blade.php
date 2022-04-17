@extends('menus.app')
@section('Laraval App')
Services Page
@endsection

@section('Content')
<h1>Welcom to Services page</h1>
<p>Some text</p>
@foreach ($Services as $item)
    <li>{{$item}}</li>
@endforeach
@endsection