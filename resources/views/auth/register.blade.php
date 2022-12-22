<form action="/register" method="post">

    <div>
        <label for="name"> Votre nom</label>
        <input type="text" name="name" id="name" placeholder="Votre nom">
        @error('name')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
    </div>
    <div>
        <label for="email"> Votre nom</label>
        <input type="email" name="email" id="email" placeholder="Votre email">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
    </div>
    <div>
        <label for="passwordd"> Mot de passe</label>
        <input type="password" name="passwordd" id="passwordd" placeholder="Mot de passe">
        @error('passwordd')
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