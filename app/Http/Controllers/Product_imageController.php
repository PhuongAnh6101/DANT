<?php

namespace App\Http\Controllers;
use App\Models\Product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;

class Product_imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product_image = Product_image::select() -> where('product_id',$id)->get();
        return view('Product_image.list',compact('product_image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('Product_image.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        
        if($request->hasfile('image')){
            foreach($request->file('image') as $image){
                $extention = $image->getClientOriginalExtension();
                $filename = time().rand(1,1000).'.'.$extention;
                $image ->move('uploads/Product_image/', $filename);
                $product_image = new product_image;
                $product_image->product_id = $id;
                $product_image->image = $filename;
                $product_image->save();
            }
        }
        return redirect('admin/product_image/'.$product_image->product_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_image = Product_image::find($id);
       // dd($product_image);
        $destination = 'uploads/Product_image/'.$product_image->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $product_image->delete();
        return redirect('admin/product_image/'.$product_image->product_id);
    }
}
