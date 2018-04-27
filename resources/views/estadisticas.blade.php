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
    
    .wrapperel {
	width: 100%; /* arbitary for demo only */
	white-space: nowrap;
	overflow-y: hidden;
	overflow-x: scroll;
	-webkit-overflow-scrolling: touch;
}

.internal {
	display: inline;
}
</style>
    <div class="container containerform">




    <div class="row">
        <div class="col s12">
        <div class="card ">
            
                
            <div class="card-content white-text">
            
            
            <div class="row red-text text-darken-4" style="margin-top: 30px; height: 350px; ">
            <div class="row">
            <div class="col m3 l3 center"></div>
            
            <div class="col s12 m6 l6 center">
               <form action="/supervisor/estadisticas" method="GET">
                    <div class="input-field col s10">
                        <i class="material-icons prefix" style="left:0%;">save</i>
                        <select name="id">
                            @foreach($bodegas as $bodega)
                                <option value="{{$bodega->id}}" selected>{{$bodega->nombre}}</option>
                            @endforeach
                        </select>
                        <label>Bodegas</label>
                    </div>

                    <div class="col s2 center">
                        <button class="btn waves-effect waves-light btn-floating red darken-4" style="margin-top: 12px;" type="submit" name="action">
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>

            

           </div>

                    <table class=" responsive-table highlight"  >
                            <thead>
                                <tr >
                                    <th>Name</th>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Item Price</th>
                                    <th>Item Price</th>
                                    <th>Item Price</th>
                                
                                </tr>
                            </thead>
                    
                            <tbody>
                                <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                
                                </tr>

                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                        <td>$0.87</td>
                                        <td>$0.87</td>
                                        <td>$0.87</td>
                                        
                           
                            </tbody>
                    </table>

        

            </div>
            </div> 

         

            <div style="display: block; position: relative; padding-top: 10px;">

            <div class="row">
                    <div class="col  m2 center"></div>
                <div class="col s12 m8 center">
                
                <div class="card-panel z-depth-0 white center ">
                    
                        <ul class="pagination wrapperel">
                            <li class="disabled internal"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active internal"><a href="#!">1</a></li>
                            <li class="waves-effect internal"><a href="#!">2</a></li>
                            <li class="waves-effect internal "><a href="#!">3</a></li>
                            <li class="waves-effect internal"><a href="#!">4</a></li>
                            <li class="waves-effect internal"><a href="#!">5</a></li>
                          
                            <li class="waves-effect internal"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div>
                
                </div>
                </div>
            </div>

            


        </div>
        
    </div>
    </div>
    
    



    </div>
    @section('ini-scripts')
<script>
// $(document).ready(function() {
//     $.get("/api/municipios/"+event.target.value+"", function(response, departamento){
//         $("#select_3").empty();
//         for(i=0; i<response.length; i++){
//             $(next_id).append($("<option></option>").attr("value", response[i].id).text(response[i].nombre));
//         }
//         $(next_id).material_select();
//     });
// });
</script>
@endsection
</main>
@endsection