<h1>Cadastrar Funcionario</h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    {{-- <input type="number" name="cod_func" id="codigo" placeholder="Código"> --}}
    <input type="text" name="nome_func" id="nome_func" placeholder="Nome">
    <input type="number" name="idade_func" id="idade" placeholder="Idade">
    <input type="text" name="telefone_func" id="telefone" placeholder="Telefone">
    <textarea name="end_func" id="endereco" cols="30" rows="1" placeholder="Endereço"></textarea>

    <button type="submit">Enviar</button>
</form>
