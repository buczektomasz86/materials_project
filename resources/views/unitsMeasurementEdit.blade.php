@extends('include.main')

@section('content')
      
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Jednostki miary - edycja</h1>

                <form method="POST" action="/jednostki_miary/edytuj/{{$unit->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">Nazwa</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Wpisz nazwę jednostki miary" value="{{$unit->name}}" required />
                        <small id="nameHelp" class="form-text text-muted">pełna nazwa jednostki miary.</small>
                    </div>
                    <div class="form-group">
                        <label for="short">Skrót</label>
                        <input type="text" class="form-control" name="short" id="short" aria-describedby="shortHelp" placeholder="Wpisz skrót jednostki miary" value="{{$unit->short}}" required />
                        <small id="shortHelp" class="form-text text-muted">skrót jednostki miary.</small>
                    </div>

                    @if ($errors->any())      
                        @include('include.errors')
                    @endif

                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection
