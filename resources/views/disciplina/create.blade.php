@extends('templates.template')
@section('content')
<div class="container">
    <div class="row">
        @if(isset($disciplina))
        {!! Form::model($disciplina,['route'=>['disciplina.update', $disciplina->id],'class'=>'form','method'=>'put'])!!}
        @else
        {!!Form::open(['route'=>'disciplina.store'])!!}
        @endif
        <div class="col s6 l6 m6">
            <label>Disciplina</label>
            {!! Form::text('descricao',null,['class'=>'validate','placeholder'=>'Nome da Disciplina'])!!}

            <label>Tipo</label>
            {!! Form::text('tipo', $tipos,null,['class'=>'input-field','required'=>""])!!}

            {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!} 
        </div>
    </div>

    {!!Form::close()!!}
</div>
<script type="text/javascript">
    //<![CDATA[
    window.onload = function () {
        $(document).ready(function () {
            $('select').material_select();
        });
    }//]]> 

</script>
@endsection