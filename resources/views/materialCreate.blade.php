@extends('include.main')

@section('content')
      
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Materiały - dodaj</h1>

                <form method="POST" action="/materialy/dodaj">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">Nazwa materiału</label>
                        <input type="text" class="form-control" name="name" id="name"  placeholder="Wpisz nazwę materiału" required @if(isset($request->name)) value="{{ $request->name }}" @endif />
                    </div>
                    <div class="form-group">
                        <label for="code">Kod materiału</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Wpisz kod materiału" required  @if(isset($request->code)) value="{{ $request->code }}" @endif />
                    </div>
                    <div class="form-group">
                        <label for="parent_group_id">Wybierz jednostę miary</label>
                        <select class="form-control" id="unit_id" name="unit_id" required>
                            <option value="">--jednostka miary--</option>
                            @if($units->isNotEmpty())
                                @foreach($units as $value)
                                    @if(isset($request->unit_id) && $request->unit_id == $value->id)
                                    <option value="{{$value->id}}" selected>{{$value->name}}</option>    
                                    @else
                                    <option value="{{$value->id}}">{{$value->name}}</option> 
                                    @endif                                               
                                @endforeach                           
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="parent_group_id">Wybierz grupę materiałów</label>
                        <select class="form-control" id="group_id" name="group_id" required>
                            <option value="">--grupa materiałów--</option>
                            @if($groups->isNotEmpty())
                                @foreach($groups as $value)                                
                                    @if($value->childs->isEmpty())
                                        @if(isset($request->group_id) && $request->group_id == $value->id)
                                            <option value="{{$value->id}}" selected>{{$value->name}}</option>   
                                        @else
                                            <option value="{{$value->id}}">{{$value->name}}</option> 
                                        @endif
                                    @endif
                                @endforeach                           
                            @endif
                        </select>
                    </div>

                    @if ($errors->any())      
                        @include('include.errors')
                    @endif

                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection
