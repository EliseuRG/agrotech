<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        //dd($posts);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all(); // Obter todos os dados do request
        //Tratar Telefone
        $data['telefone_func'] = preg_replace('/[^0-9]/', '', $data['telefone_func']);
        
        // Remover acentuação
        $data['nome_func'] = str_replace(
            ['á', 'à', 'â', 'ã', 'ä', 'é', 'è', 'ê', 'ë', 'í', 'ì', 'î', 'ï', 'ó', 'ò', 'ô', 'õ', 'ö', 'ú', 'ù', 'û', 'ü', 'ç'],
            ['a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'c'],
            $data['nome_func']
        );

        // Transformar em maiúsculo
        $data['nome_func'] = strtoupper($data['nome_func']);

        //dd($data);
        $post = Post::create($data); // Criar um novo registro na tabela "funcionarios"

        //return 'Cadastro Realizado com Sucesso!';
        return redirect()->route('posts.index');
    }

}
