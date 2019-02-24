@extends('layouts.app')

@section('content')
    <h1>POST</h1>
    @if (count($posts)>0)
        @foreach ($posts as $item)
            <div class="well">
                <h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                <small>Written on {{$item->created_at}} by {{$item->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p> Tidak ada Postingan</p>
    @endif
@endsection
