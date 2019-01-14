@extends('include.main')

@section('content')
      
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">
            
                <h1>Materiały</h1>

                <p><a href="/materialy/dodaj" class="btn btn-primary">Dodaj nowy materiał</a></p>

                @if($materials->isNotEmpty())

                <ol class="list-group">
                    @foreach($materials as $value)
                        <li class="list-group-item">
                            {{$value->name}} <b>[{{$value->code}}]</b> 
                            <a href="/materialy/edytuj/{{$value->id}}" class="btn btn-info">edytuj materiał</a>
                        </li>
                    @endforeach
                </ol>

                @else

                <div class="alert alert-dark" role="alert">
                    Brak dodanych materiałów
                </div>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection
