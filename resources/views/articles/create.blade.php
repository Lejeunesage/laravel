<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
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
</head>
<body>
   @extends('layouts.master')
   
   @section('formulaire')
   
      <form  action="/articles/create" method="POST" enctype="multipart/form-data">

         @csrf
      
         @include('partials.article-form')

      </form>
   
   @endsection
   
</body>
</html>

