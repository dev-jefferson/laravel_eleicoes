@extends('layouts.tamplate')

@section('conteudo')

<div class="container">

    <h4>Inicio</h4>

    <div class="container">
        @component('components.urna')
            @slot('categoria_candidato')
                {{$categoria_candidato}}
            @endslot
        @endcomponent
    </div>

</div>

@endsection

