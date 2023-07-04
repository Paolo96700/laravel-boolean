@extends('layouts.base')

@section('contents')
<div class="bg-dark text-light py-2 mb-3">
    <h1 class="ms-4" style="font-weight: 700">Modifica Comic</h1>
</div>
<div class="p-5" style="margin-inline: 10rem">
    
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id] )}}" class="m-5">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label" style="font-weight:700; font-size:20px">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>

        <div class="mb-3">
            <label for="expire_date" class="form-label" style="font-weight:700; font-size:20px">Data di scadenza</label>
            <input type="text" class="form-control" id="expire_date" name="expire_date" value="{{old('expire_date')}}">
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label" style="font-weight:700; font-size:20px">Immagine</label>
            <input type="text" class="form-control" id="image" name="image" value="{{old('image')}}">
        </div>
        <div class="mb-3">
            <label for="details" class="form-label" style="font-weight:700; font-size:20px">Dettagli</label>
            <input type="text" class="form-control" id="details" name="details" value="{{old('details')}}">
        </div>
        <button class="btn btn-primary" style="font-size: 20px">Aggiorna</button>
    </form>
</div>
    
@endsection

{{-- {{ route('todolists.update', ['comic' => $comic->id] )}} --}}