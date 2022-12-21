@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')

    @each('articles.index', $articles, 'article', 'articles.no-articles')

@endsection

