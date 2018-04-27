@extends('layouts.app')
@section('content')
<main>
<style>
.containerform{
    margin-top: 20px;
}

.logoadmin{
    width: 120px;
}

.formcomponents{
    margin: 20px;
}
</style>
    <div class="container containerform">




    <div class="row">
        <div class="col s12">
        <div class="card"> 
            <div class="card-content white-text">
            <span class="card-title">Ventas</span>
            <div class="row red-text text-darken-4" style="margin-top: 30px; ">

                <div class="col s12 m6 l6 ">
                    <div class="input-field center  ">
                        <i class="material-icons prefix">shopping_cart</i>
                        <input  id="icon_prefix" type="text" class="validate">
                        <label  name="numFactura" for="icon_prefix">Numero de factura</label>
                        </div>
                </div>
    
    <div class="col s12 m6 l6">
    <div class="row">
        <ul class="collapsible expandable  hoverable">
    
            <li class="active">
                <div class="collapsible-header"><span >Cliente Registrado?</span></div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Buscar Cliente</label>
                        </div>
                    </div>
                </div>
            </li>
            
            </ul>
        </div>
    </div>     
    
    
        <div class="col s12 m6 l6">
    
            <ul class="collapsible expandable  hoverable">
        
                <li class="active">
                    <div class="collapsible-header">
                    
                    <span >Cliente no registrado?</span>

                    </div>

                    <div class="collapsible-body">
                        <div class="row">
                            <div class="col s12 m12 l6 center">
                                <div class="input-field center ">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <input id="icon_prefix" type="text" class="validate" >
                                    <label for="icon_prefix">Cedula</label>
                                </div>
                            </div>
                
                            <div class="col s12 m12 l6 center">
                                <div class="input-field center ">
                                    <i class="material-icons prefix">person</i>
                                    <input id="icon_prefix" type="text" class="validate" >
                                    <label for="icon_prefix">Nombre completo</label>
                                </div>
                            </div>
                
                            <div class="col s12 m12 l6 center">
                                <div class="input-field center ">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_prefix" type="text" class="validate" >
                                    <label for="icon_prefix">Telefono</label>
                                </div>
                            </div>
                
                            <div class="col s12 m12 l6 center">
                                <div class="input-field center ">
                                    <i class="material-icons prefix">add_location</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Direccion</label>
                                </div>
                            </div>
                
                            <div class="col s12 m12 l6 center">
                                <div class="input-field center ">
                                    <i class="material-icons prefix">location_city</i>
                                    <input id="icon_prefix" type="text" class="validate" >
                                    <label for="icon_prefix">Barrio</label>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </li>
                
                </ul>
        
            </div> 
                        
        
                    <div class="col s12 m6 l6 center">
                        
                        <div class="input-field col s12">
                            <i class="material-icons prefix" style="left:0%;">shopping_cart</i>
                            <select id="select_1">
                            @foreach($departamentos as $departamento)
                                <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                            @endforeach
                            </select>
                            <label>Departamento</label>
                        </div>
        
                    </div>
        
                    <div class="col s12 m6 l6 center">
        
                        <div class="input-field col s12">
                            <i class="material-icons prefix" style="left:0%;">shopping_cart</i>
                            <select name="ciudad" id="select_3">
                                <option value="" disabled selected>Seleccione una opcion</option>
                                <option></option>
                            </select>
                            <label>Ciudad</label>
                            </div>
                    
                    </div>
        
            
            <div class="col s12 m6 l6 center">
        
                <div class="input-field col s12">
                    <i class="material-icons prefix" style="left:0%;">perm_device_information</i>
                    <select>
                        <option value="" disabled selected>Seleccione una opcion</option>
        
                    </select>
                    <label>Marca</label>
                    </div>
        
            </div>
        
        <div class="col s12 m6 l6 center">
        
            <div class="input-field col s12">
                <i class="material-icons prefix" style="left:0%;">perm_device_information</i>
                <select>
                    <option value="" disabled selected>Seleccione una opcion</option>
        
                </select>
                <label>Modelos</label>
                </div>
        
        </div>
        
            <div class="col s12 m6 l6 center">
        
                <div class="input-field col s12">
                    <i class="material-icons prefix" style="left:0%;">perm_device_information</i>
                    <select>
                        <option value="" disabled selected>Seleccione una opcion</option>
            
                    </select>
                    <label>Lista de IMEI</label>
                    </div>
        </div>

    </div>
    </div>

    <div class="card-action">
        <button class="btn waves-effect waves-light btn-large red darken-4 " style="display: block; margin: auto; border-radius: 5px" type="submit" name="action">Registrar venta
            <i class="material-icons right">send</i>
        </button>
    </div>


    </div>
        
    </div>
    </div>
    
    



    </div>
@section('ini-scripts')
<script>
var next_id = $("#select_3");
next_id.empty();
$("#select_1").change(function(event){
    $.get("/api/municipios/"+event.target.value+"", function(response, departamento){
        $("#select_3").empty();
        for(i=0; i<response.length; i++){
            $(next_id).append($("<option></option>").attr("value", response[i].id).text(response[i].nombre));
        }
        $(next_id).material_select();
    });
});
</script>
@endsection
</main>
@endsection