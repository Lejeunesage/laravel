<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite</title>
    <style>
            form{
                margin-top:2rem;

            }
            .div{
               display:flex;
               flex-direction:column;
               margin-bottom:1rem;
            }

            #title{
               width:50%;
               height:1.5rem;
            }

            #body{
               width:50%;
               height:5rem;
            }

            label{
               margin-bottom:0.5rem;
            }
        </style>
</head>
<body>
    @extends('layouts.master')

    @section('title')
    Editer l'article {{ $article->title}}
    @endsection


    @section('content')
        <form action="/article/{{ $article->id }}/edit" method="Post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            @include('partials.article-form')
        </form>

        <form action="/article/{{ $article->id }}/delete" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Effacer l'article">

        </form>

    @endsection
    
</body>
</html>
