@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     <div class="form-group">
                        <label for="sel1">Departamentos:</label>
                        <select class="form-control" id="select_1">
                        @foreach($departamentos as $departamento)
                            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                        @endforeach    
                        </select>

                         <div class="form-group">
                            <label for="sel1">Municipìo:</label>
                            <select class="form-control" id="select_2">

                            </select>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
