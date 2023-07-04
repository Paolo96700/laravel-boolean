@extends('layouts.base')

@section('contents')
    <div class="offset-2 container-sm pt-4">

        <button type="button" class="btn btn-outline-primary mb-3"><a class="text-decoration-none text-dark" style="font-weight:700" href="{{ '/todolists/create' }}">Crea un nuovo promemoria</a></button>

        
        @foreach ($arrTodos as $todo)
            <div class="card container-fluid flex-row align-items-center">
                <div class="col-10">
                    <h2>{{ $todo->title }}</h2>
                    <span @style(['color: red' => $todo['expire_date'] >= date('Y-m-d')])>{{ $todo->expire_date }}</span>
                </div>
                
                <div class="btn-group col-2" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="collapse">Espandi</button>
                    <button type="button" class="btn btn-outline-primary"><a href="{{ route('todolists.edit', ['todolist' => $todolist->id]) }}" class="card-link text-decoration-none" style="font-weight: 700;">Modifica</a></button>
                </div>
            </div>

            <div class="collapse">
                <h2></h2>
                <div>
                    <span>{{ $todo->expire_date }}</span>
                    <button type="button" class="btn btn-outline-primary"><a href="" class="card-link text-decoration-none" style="font-weight: 700;">Modifica</a></button>
                    <button type="button" class="btn btn-outline-primary">Comprimi</button>
                </div>
                <div>
                    <span>{{ $todo->details }}</span>
                </div>
                <img src="" alt="">
            </div>
        @endforeach

        
    </div>
@endsection

