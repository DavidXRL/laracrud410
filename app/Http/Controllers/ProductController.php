<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Products\StoreRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = Product::get(); //obtener todos los datos de la tabla
        $products = Product::paginate(3);
        return view('admin/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::pluck('id', 'brand');
        return view('admin/products/create', compact('brands'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //echo "Registro realizado";
        //dd($request->all());

        $data = $request->all();

        // SI EL CAMPO IMAGEN TIENE INFORMACIÓN
        if(isset($data["imagen"]))
        {
            $data["imagen"] = $filename = time().".".$data["imagen"]->extension(); //EL PUNTO ES PARA CONCATENAR
            // GUARDAR IMAGEN EN LA CARPETA PÚBLICA
            $request->imagen->move(public_path("image/products"), $filename);
            // LOS CORCHETES SIGNIFICAN ARREGLOS
            // PARA ACCEDER A LA IMAGEN SE TIENE QUE PONER ENTRE CORCHETES
        }
        Product::create($data); //ESTA LÍNEA ES PARA ACTUALIZAR LOS DATOS EN LA BASE DE DATOS
        return to_route('products.index') -> with ('status', 'Producto registrado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin/products/show', compact('product')); //retornamos la vista cuando la mandamos a llamar desde el controlador
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::pluck('id', 'brand');
        echo view('admin/products/edit', compact('brands', 'product'));

    }

    /**
     *
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request ->all();

        // SI EL CAMPO IMAGEN TIENE INFORMACIÓN
        if(isset($data["imagen"]))
        {
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension(); //EL PUNTO ES PARA CONCATENAR
            // GUARDAR IMAGEN EN LA CARPETA PÚBLICA
            $request->imagen->move(public_path("image/products"), $filename);
            // LOS CORCHETES SIGNIFICAN ARREGLOS
            // PARA ACCEDER A LA IMAGEN SE TIENE QUE PONER ENTRE CORCHETES
        }
        $product->update($data); //ESTA LÍNEA ES PARA ACTUALIZAR LOS DATOS EN LA BASE DE DATOS
        return to_route('products.index') -> with ('status', 'Producto actualizado.');
    }


    public function delete(Product $product)
    {
        echo view ('admin/products/delete', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index') -> with ('status', 'Producto eliminado');
    }


}
