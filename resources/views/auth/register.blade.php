<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
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
   
   @section('login')

        <form action="/register" method="post" enctype="multipart/form-data">
        @csrf
            <div>
                <label for="name"> Votre nom</label>
                <input type="text" name="name" id="name" placeholder="Votre nom">
                @error('name')
                <div style="color:red;">{{ $message }}*</div>
                @enderror
            </div>
            <div>
                <label for="email"> Votre email</label>
                <input type="email" name="email" id="email" placeholder="Votre email">
                @error('email')
                <div style="color:red;">{{ $message }}*</div>
                @enderror
            </div>
            <div>
                <label for="password"> Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe">
                @error('password')
                <div style="color:red;">{{ $message }}*</div>
                @enderror
            </div>
            <div>
                <label for="pwdconfirm">Confirmer le mot de passe</label>
                <input type="password" name="pwdconfirm" id="pwdconfirm" placeholder="Confirmer le mot de passe">
                @error('pwdconfirm')
                <div style="color:red;">{{ $message }}*</div>
                @enderror
            </div>
            <input type="submit" value="S'inscrire">
        </form>
   @endsection
   
</body>
</html>







