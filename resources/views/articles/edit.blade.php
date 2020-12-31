@extends ('simplework')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
        <h1>Edit Article</h1>

        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" value="{{ $article->title }}">
                </div>

                @error('title')
                    <p class="help if-danger">{{ $errors->first('title') }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" type="text" name="excerpt" value="{{ $article->excerpt }}"></textarea>
                </div>

                @error('excerpt')
                    <p class="help if-danger">{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" type="text" name="body" value="{{ $article->body }}"></textarea>
                </div>

                @error('body')
                    <p class="help if-danger">{{ $errors->first('body') }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('DELETE')

            <button class="button" type="submit" >Delete</button>
        </form>

    </div>
</div>

@endsection
