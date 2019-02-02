@extends('layouts.app')

@section('content')

<h1>{{$title}}</h1>
<p>Yaa haaaa Berikut Servicenya:</p>

@if( count($services)>0 )
    <ul class="list-group">
        @foreach ($services as $item)
            <li class="list-group-item">{{$item}}</li>
        @endforeach
    </ul>
@endif

@endsection