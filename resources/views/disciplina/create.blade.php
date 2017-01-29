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
            {!! Form::select('tipo', $tipos,null,['class'=>'input-field','required'=>""])!!}

            {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!} 
              {!!Form::close()!!}
        </div>
    </div>
  
</div>

@endsection

@section('scripts')
<script src="{{url("assets/disciplina/js/index.js")}}" type="text/javascript"></script>
@endsection