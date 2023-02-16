{{-- Importando o layout, header e footer --}}
@extends('layouts.main')

{{-- Definindo o title --}}
@section('title', 'Learning Laravel')

{{-- Definindo o conteudo (Nescessário fechar a section com '@endsection' ao final do conteudo) --}}
@section('content')

<!-- diretiva do blade, geralmente começa com '@'; -->
    <!-- O nome da variável é o nome da Key passada no arquivo de rotas -->
    @if(10 > 5)
      <p>Eu sou o {{ $nome }}</p>
    @endif

    @if($nome == 'Nahid')
      <p>idade: {{ $idade }} anos</p>
      <p>profissão: {{$profissao}}</p>
    @elseif($nome == 'John')
      <p>Frusciante</p>
    @else
      <p>Sem idade definida</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
      <p>nº {{$arr[$i]}} </p>
      @if($i == 2)
        <strong>Ainnn</strong>
      @endif
    @endfor

    @php
      $nome = 'Frusciante';
      echo '<hr>';
    @endphp

    <h2>mudei o nome para {{$nome}} </h2>

    <!-- esse comentario aparece para o navegador -->
    {{-- Esse não --}}


    @foreach($my_full_name as $nome)
      <h3> {{$loop->index}} - {{$nome}} - {{$loop->index + 1}} </h3>
    @endforeach

{{-- Fechamento da section do conteudo --}}
@endsection