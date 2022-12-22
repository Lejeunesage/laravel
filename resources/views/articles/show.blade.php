@extends('layouts.master')

@section('content')
    <h2>{{$article['title']}}</h2>
    <p>{{$article['body']}}</p>
    <p>{{$article['user_id']}}</p>

    <a href="/article/{{ $article->id }}/edit">Éditer l'article</a>

    <h3 style="color:green">Lire les Commentaires</h3>

    @foreach($article->comments as $comment)
    <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
    <p>{{ $comment->comment }}</p>
    <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach


    <a href="/articles">Retour</a>  
@endsection


