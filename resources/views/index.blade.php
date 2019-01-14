@extends('include.main')

@section('content')
      
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">

            <h3>Grupy materiałów - struktura</h3>
            <p><em>Kliknij w nazwę grupy aby rozwinąć listę</em></p>
           
            @if($groups->isNotEmpty())

            <ul id="groups-material">
                @foreach($groups as $group)
                    <li>
                        {{ $group->name }}

                        @if(!$group->childs->isEmpty())
                            @include('manageChild',['childs' => $group->childs])                       
                        @endif

                        @if(!$group->materials->isEmpty())
                            <ul>
                            @foreach($group->materials as $material)
                                <li>
                                    {{ $material->name }} 
                                </li>
                            @endforeach
                            </ul>
                        @endif
                        
                    </li>
                @endforeach
            </ul>

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