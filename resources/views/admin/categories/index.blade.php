@extends('app')

@section('content')
    <div class="container">
        <h3>Categorias</h3>

        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Nova categoria</a>
        <br/><br/>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($categoies as $categoy)
            <tr>
                <td>{{ $categoy->id }}</td>
                <td>{{ $categoy->name }}</td>
                <td>
                    <a href="{{route('admin.categories.edit', ['id'=>$categoy->id])}}" class="btn btn-default btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $categoies->render() !!}
    </div>

@endsection