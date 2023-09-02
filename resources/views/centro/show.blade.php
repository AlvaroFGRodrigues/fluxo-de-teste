@extends('layouts.base')
@section('content')
<h1>Show</h1>

<h2>
    <p>

        Total Entradas: R$
        {{$centro->lancamentos()->where('id_tipo',1)->sum('valor')}}
        <br>
        Total Saidas: R$
        {{$centro->lancamentos()->where('id_tipo',2)->sum('valor')}}

        <br>

        Saldo R$
        {{$centro->lancamentos()->where('id_tipo',1)->sum('valor')

        -

        $centro->lancamentos()->where('id_tipo',2)->sum('valor')
    }}

    </p>
</h2>


<div class="table-responsive">
    <table class="table table-striped  table-hover ">
        <thead>
            <caption>Lista de Lançamentos</caption>
            <tr>
                <th class="col-md-1">#</th>
                <th class="col-md-1">ID</th>
                <th>Tipo</th>
                <th>Usuário</th>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>

        </thead>
        <tbody class="table-group-divider">
            @foreach ($centro->lancamentos()->get() as $lancamento)

            <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$lancamento->id_lancamento}}</td>
            <td>{{$lancamento->tipo->tipo}}</td>
            <td>{!!$lancamento->usuario->name!!}</td>
            <td>{{$lancamento->descricao}}</td>
            <td>{{$lancamento->valor}}</td>
        </tr>

            @endforeach



        </tbody>
    </table>

</div>
@endsection
@section('scripts')
@parent

@endsection
