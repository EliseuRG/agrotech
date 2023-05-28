<a href="{{ route('posts.create') }}">Criar Nova Fazenda</a>
<hr>
<h1>Usuários</h1>

@foreach($posts as $post)
    <p>{{ $post->name }}</p>
@endforeach
