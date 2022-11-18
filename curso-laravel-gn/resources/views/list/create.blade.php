@extends('layouts.app')
@section('title','Nova Tarefa')
@section('content')
    <div class="container mt-5">
        <h1>Crie uma nova Tarefa</h1>
        <hr>
        <form action="{{ route('tarefas-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="my-input">Tarefa:</label>
                    <input id="inputTask" class="form-control" placeholder="Digite uma Tarefa" type="text" name="task">
                </div>
                <br>
                <div class="form-group">
                    <label for="my-input">Descrição:</label>
                    <input id="inputDescription" class="form-control" placeholder="Digite uma Descrição" type="text" name="description">
                </div>
                <br>
                <div class="form-group">
                    <label for="my-input">Data:</label>
                    <input id="inputCreated_date" class="form-control" type="date" name="created_date">
                </div>
                <br>
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
                <input id="my-input" class="btn btn-success" type="submit" name="submit">
            </div>
        </form>
    </div>

@endsection