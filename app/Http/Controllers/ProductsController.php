<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Categorias;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductFormRequest;
use App\Empresa;

class ProductsController extends Controller
{

    public function index()
    {
        $products  = DB::table('productos')->paginate(3);


        return view("products.index",["products" => $products ]);

    }


    public function create()
    {
        $product = Productos::all();
        $categorias=Categorias::all();
        $empresas=Empresa::all();
        return view("products.create",["product" => $product,'categorias'=>$categorias,'empresas'=>$empresas]);
    }






    public function store(ProductFormRequest $request)
    {
        if($request->get('id')==""){
            $vehiculo=new Productos();
            $vehiculo->user_id=Auth::id();
            $vehiculo->categoria_id=$request->get('categoria_id');
            $vehiculo->title=$request->get('title');
            $vehiculo->description=$request->get('description');
            $vehiculo->pricing=$request->get('pricing');

            if (Input::hasFile('img')){
                $file=Input::file('img');
                $file->move(public_path().'/images/projects/',$file->getClientOriginalName());
                $vehiculo->img=$file->getClientOriginalName();
            }
            $vehiculo->estado='A';
            $vehiculo->save();
            return Redirect::to('product');


        }else{
            $vehiculo= Productos::findOrFail($request->get('id'));
            $vehiculo->user_id=$request->get('placa');
            $vehiculo->categoria_id=$request->get('categoria_id');
            $vehiculo->title=$request->get('title');
            $vehiculo->description=$request->get('description');
            $vehiculo->pricing=$request->get('pricing');

            if (Input::hasFile('img')){
                $file=Input::file('img');
                $file->move(public_path().'/images/projects/',$file->getClientOriginalName());
                $vehiculo->img=$file->getClientOriginalName();
            }

            $vehiculo->estado='A';
            $vehiculo->update();

        }
        return Redirect::to('product')->with('success','Vehiculo creado con exito');


    }

    public function upload(){




        $categorias=DB::table('categorias')->where('estado','=','Activo')->get();
        $data = array();
        $data["categorias"] = $categorias;

        echo json_encode($data);

    }



    public function show($id)
    {
        $product = Productos::find($id);
        $categorias=Categorias::all();
        $empresas=Empresa::all();
        return view("products.show",["product" => $product,'categorias'=>$categorias,'empresas'=>$empresas]);



    }


    public function edit($id)
    {
        $product = Productos::find($id);
        return view("products.edit",["product" => $product]);
    }


    public function update(Request $request, $id)
    {
        $product = Productos::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->pricing = $request->pricing;

        if($product->save()){
            return redirect("/products");
        }else{
            return view("products.edit",["product" => $product]);
        }
    }

    public function destroy($id)
    {
        Productos::destroy($id);

        return redirect('/products');
    }
}
