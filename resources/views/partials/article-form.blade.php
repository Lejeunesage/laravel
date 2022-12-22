    
    <div class="div">
        <label for="title">Insérer le titre</label>
        <input type="text" name="title" id="title" value="{{old('title', isset($article->title) ? $article->title : null) }}">
        @error('title')
            <div style="color:red;">{{ $message }}*</div>
        @enderror
    </div>
    <div class="div">
        <label for="file">Insérer une image</label>
        <input type="file" name="image" id="file" >
        @error('image')
            <div style="color:red;">{{ $message }}*</div>
        @enderror
    </div>
    <div class="div">
        <label for="body">Insérer votre article</label>
        <textarea name="body" id="body" cols="30" rows="10">{{old('body', isset($article->body) ? $article->body : null) }}</textarea>
        @error('body')
            <div style="color:red;">{{ $message }}*</div>
        @enderror
    </div>
    <input type="submit" value="Soumettre l'article">


   