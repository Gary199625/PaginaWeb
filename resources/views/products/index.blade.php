@extends('layouts.admin')
@section('contenido')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="box-header with-border">
                <h3 class="box-title" style="color: #9f191f">Administra tus productos</h3>
                <div class="box-tools pull-right" style="margin-right: -300px">
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: -20px; margin-left: 0px;">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group">
                    <h3> <button type="button" class="btn btn-success " style="margin-left: 850px" onclick="nuevo();"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo </button></h3>

                </div>
            </div>

            <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" >
                        <div class="modal-header" style="background-color: #308DCC">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel" style="color: white">Nuevo Modelo</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    @if (count($errors)>0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>



                            {!!Form::open(array('url'=>'products','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                            {{Form::token()}}

                            <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Categoria</label>

                                    <select name="categoria_id" id="categoria_id" class="form-control">

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nombre del producto</label>
                                    <input type="text" class="form-control" required name="title" value="{{old('title')}}" id="title" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Descripción</label>
                                    <input type="text" class="form-control" required id="description" name="description" value="{{old('description')}}" placeholder="descripcion">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Precio</label>
                                    <input type="number" class="form-control" required id="pricing" name="pricing" value="{{old('pricing')}}" placeholder="Precio">
                                </div>
                                <div class="form-group">
                                    <label for="imagen">Imagen</label>
                                    <input type="file" name="img" id="img" class="form-control" required>

                                </div>



                            <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                            {!!Form::close()!!}
                        </div>
                    </div>







                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover" style="text-align: center">
                    <thead class="thead-inverse">
                    <th style="text-align: center">Id</th>
                    <th style="text-align: center">Producto</th>
                    <th style="text-align: center">Descripción</th>
                    <th style="text-align: center">Precio</th>
                    <th style="text-align: center">Categoria</th>
                    <th style="text-align: center">img</th>
                    <th style="text-align: center">Estado</th>
                    <th style="text-align: center">Opciones</th>
                    </thead>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->pricing}}</td>
                            <td>{{$product->categoria_id}}</td>
                            <td>
                            <img src="{{asset('images/projects/'.$product->img)}}"alt="{{ $product->title}}"height="50px" width="50px" class="img-thumbnail">
                            </td>
                            <td>{{$product->estado}}</td>
                            <td>
                                <button type="button" onclick="modificar({{$product->id}});" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>
                                <a href="{{url('/products/create')}}"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a>

                                <a href="" data-target="#modal-delete-{{$product->id}}" data-toggle="modal"><button class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a>
                            </td>

                        </tr>
                        @endforeach

                </table>

            </div>
            {{$products->render()}}
        </div>
    </div>





@endsection

<script>
    function nuevo() {

        var urlraiz=$("#url_raiz_proyecto").val();
        $.getJSON(urlraiz+"/products/upload",function (data) {
            var datos = eval(data.categorias);
            html = "<option value=''>SELECCIONE . . .</option>";
            for (i = 0; i < datos.length; i++) {
                html += "<option value='" + datos[i]["id"] + "'>" + datos[i]["descripcion"] + "</option>";
            }
            $("#categoria_id").empty().html(html);

            $("#exampleModal").modal("show");
        });


    }
</script>
