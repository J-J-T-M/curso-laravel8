@extends('layouts.app')
@section('title','Editar Tarefa')
@section('content')
    <div class="container mt-5">
        <h1>Editar Tarefa</h1>
        <hr>
        <form action="{{ route('tarefas-update', ['id'=>$tasks->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="my-input">Tarefa:</label>
                    <input id="inputTask" class="form-control" value="{{$tasks->task}}" placeholder="Digite uma Tarefa" type="text" name="task">
                </div>
                <br>
                <div class="form-group">
                    <label for="my-input">Descrição:</label>
                    <input id="inputDescription" class="form-control" value="{{$tasks->description}}" placeholder="Digite uma Descrição" type="text" name="description">
                </div>
                <br>
                <div class="form-group" hidden>
                    <label for="my-input">Data:</label>
                    <input id="inputCreated_date" class="form-control" value="{{$tasks->created_date}}" type="date" name="created_date"  disabled>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="accomplished" id="flexRadioDefault1" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        SIM
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="accomplished" id="flexRadioDefault2" value="0" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        NÃO
                    </label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <input id="my-input" class="btn btn-success" type="submit" name="submit" value="Atualizar">
            </div>
        </form>
    </div>

@endsection