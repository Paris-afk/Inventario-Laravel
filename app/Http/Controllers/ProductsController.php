<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['products']=Products::paginate();
        if($data['products']->categories_id=1){
            $data['products']->categories_id='Potable';
        }
         return view('products.index',$data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('products.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dataProducts=request()->all();
        $dataProducts=request()->except('_token');
        //Products::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        //$dataProducts=request()->Nombre;
        Products::insert($dataProducts);
        // return response()->json($dataProducts);
         return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //
        $product= Products::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //   $dataProducts=request()->all();
        $dataProducts=request()->except('_token','_method');
        Products::where('id','=',$id)->update($dataProducts);
        // $product= Products::findOrFail($id);
        // return view('products.edit',compact('product'));
         return redirect('products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

        Products::destroy($id);

        return redirect('products');
        //
    }
}
