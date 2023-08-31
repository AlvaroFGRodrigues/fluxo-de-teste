@extends('layouts.base')
@section('content')
<h1>Show</h1>
<div class="table-responsive">
    <table class="table table-striped  table-hover ">
        <thead>
            <caption>Lista de </caption>
            <tr>
                <th class="col-2">#</th>
                <th>Centro de Custo</th>
                <th>Total de Lançamentos</th>
            </tr>
            <tbody class="table-group-divider">
                @foreach ( as $centro )


                @endforeach


            </tbody>
        </thead>

    </table>

</div>
@endsection
@section('scripts')
@parent

@endsection
