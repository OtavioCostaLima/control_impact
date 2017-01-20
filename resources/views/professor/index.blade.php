@extends('templates.template')

@section('content')
<table>
    <thead><th>Nome</th>
</thead>
<tbody>

    @foreach($professores as $professor)
<th>$professor->nome</th>
@endforeach

</tbody>
</table>
@endsection