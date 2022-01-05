@extends('layouts.menu')
@section('title', 'Blog da alma | adicionar matéria')
@section('content')
<div class="container">
    <div class="add-materia">
        <h1 style="margin-top:100px" class="add-t">Adicionar nova materia ao blog</h1>
        <form method="POST" action="{{route('addmateria.store')}}" class="form" enctype="multipart/form-data">
        @csrf    
            <input type="text" class="form-control add-f" placeholder="Nome da materia" name="nome" id="nome">
            <input type="text" class="form-control add-f" placeholder="Descrição" name="descricao" id="descricao">
            <textarea type="text" class="form-control add-f" placeholder="Materia" name="materia" id="materia"></textarea>
            <input type="text" class="form-control add-f" placeholder="Data de publicação" aria-label="Data de publicação" name="datap" id="data">
            <input type="file" class="form-control-file add-f" name="img" id="img">
            <button type="submit" value="Enviar" class="add-b">Enviar</button>

        </form>
    </div>
</div>
@endsection