@extends('templates.template')

@section('content')
@if(isset($disciplina))
{{'tem'}}
@else
{{'nao tem'}}
@endif
<div class="container" id="manage-vue">
    <table class="highlight centered">
        <thead>
            <tr>
                <th>Disciplina</th>
                <th>Tipo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @if(isset($disciplinas))
                @foreach($disciplinas as $disciplin)
                <td> {{$disciplin->descricao}}</td>
                <td> {{$disciplin->tipo}}</td>
                <td> 
                    <button class="btn btn-primary" @click.prevent="editItem(item)"><span class="material-icons">mode_edit</span></button>
                    <a href="{{route('disciplina.show',$disciplin->id)}}"><span class="material-icons">delete</span></a></td>

            </tr>
            @endforeach
            @endif
        </tbody>
    </table>


    <div class="fixed-action-btn">  
        <a class="btn-floating btn-large waves-effect waves-light red" data-target="modal1" href="{{route('disciplina.create')}}"><i class="material-icons">add</i></a>
    </div>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Disciplina</h4>
            <div class="row">
                @if(isset($disciplina))
                {!! Form::model($disciplina,['route'=>['disciplina.update', $disciplina->id],'class'=>'form','method'=>'put'])!!}
                @else
                @endif
                {!!Form::open(['route'=>'disciplina.store'])!!}

                <div class="col s12 l12 m12">
                    <label>Disciplina</label>
                    {!! Form::text('descricao',null,['class'=>'validate','placeholder'=>'Nome da Disciplina'])!!}

                    <label>Tipo</label>
                    {!! Form::select('tipo', $tipos,null,['class'=>'input-field','required'=>""])!!}

                    {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!} 
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    
    <div id="edit-item" class="modal">
        <div class="modal-content">
            <h4>Disciplina</h4>
            <div class="row">
                {!!Form::open(['route'=>'disciplina.store'])!!}
                <div class="col s12 l12 m12">
                    <label>Disciplina</label>
                    {!! Form::text('descricao',null,['class'=>'validate','placeholder'=>'Nome da Disciplina',"v-on:submit.prevent"=>"updateItem(fillItem.id)"])!!}

                    <label>Tipo</label>
                    {!! Form::select('tipo', $tipos,null,['class'=>'input-field','required'=>""])!!}

                    {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!} 
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>
<script src="{{url("assets/disciplina/js/index.js")}}" type="text/javascript"></script>
@endsection