@extends ('layout')

@section ('content')
    <h1><?php echo 'Hello World' ?></h1>
    <p>{{ $post->body }}</p>
@endsection
