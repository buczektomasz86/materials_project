@extends('include.main')

@section('content')
      
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Grupy materiałów</h1>

                <p><a href="/grupy_materialow/dodaj" class="btn btn-primary">Dodaj nową grupę materiałów</a></p>

                @if($groups->isNotEmpty())

                <ol class="list-group">
                    @foreach($groups as $value)
                        <li class="list-group-item">{{$value->name}} <a href="/grupy_materialow/edytuj/{{$value->id}}" class="btn btn-info">edytuj grupę</a></li>
                    @endforeach
                </ol>

                @else

                <div class="alert alert-dark" role="alert">
                    Brak dodanych grup materiałów
                </div>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection
