@extends('include.main')

@section('content')
      
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">

            <h1>Jednostki miary</h1>

            <p><a href="/jednostki_miary/dodaj" class="btn btn-primary">Dodaj nową jednostkę</a></p>

            @if($units->isNotEmpty())

            <ol class="list-group">
                @foreach($units as $value)
                    <li class="list-group-item">{{$value->name}} [{{$value->short}}] <a href="/jednostki_miary/edytuj/{{$value->id}}" class="btn btn-info">edytuj</a></li>
                @endforeach
            </ol>

            @else

            <div class="alert alert-dark" role="alert">
                Brak dodanych jednostek miary
            </div>

            @endif

            </div>
        </div>
    </div>
</section>

@endsection
