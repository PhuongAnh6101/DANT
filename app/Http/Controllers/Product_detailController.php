<?php

namespace App\Http\Controllers;
use App\Models\Product_detail;
use Illuminate\Http\Request;
use App\Http\Services\Product_detailServices; 
use Illuminate\Support\Facades\Session;

class Product_detailController extends Controller
{
    protected $product_detailServices;
    public function __construct(
        Product_detailServices $product_detailServices
    )
    {
        $this->product_detailServices = $product_detailServices;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product_detail = Product_detail::select() -> where('product_id',$id) -> get();
        return view('Product_detail.list',compact('product_detail','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {  
        return view('Product_detail.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $qty = $request->input('qty');
        if ($qty <= 0 ) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            return redirect()->back();
        }
        $Size = $request->input('Size');
        $count = Product_detail::select()->where('product_id',$id)->where('Size',$Size)->count();
        if($count > 0) {
            $product_detail = Product_detail::select()->where('product_id',$id)->where('Size',$Size)->get();
            echo $product_detail[0]['id'] ;
            $product_qty = $product_detail[0]['qty'];
            $product_id =  $product_detail[0]['id'];
            $product_detail = product_detail::find($product_id);
            $product_detail->qty = ($request->input('qty')) + $product_qty;
            $product_detail->active =$request->input('active');
            $product_detail ->save();
            return redirect('admin/product_detail/'.$product_detail->product_id); 

        }else {
            $product_detail = new product_detail;
            $product_detail->product_id = $id;
            $product_detail->Size = $request -> input('Size');
            $product_detail->qty = $request -> input('qty');
            $product_detail->active = $request -> input('active');
    
            $product_detail -> save();
            return redirect('admin/product_detail/'.$product_detail->product_id)->with('status','product Image Added Successfully');

        }
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
        $product_detail = product_detail::find($id);
        return view('Product_detail.edit',compact('product_detail'));
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
        
        $product_detail = product_detail::find($id);
        $product_detail->qty = $request->input('qty');
        $product_detail->active =$request->input('active');
        $product_detail ->save();
        return redirect('admin/product_detail/'.$product_detail->product_id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_detail = product_detail::find($id);
        $product_detail->delete();
        return redirect('admin/product_detail/'.$product_detail->product_id);

    }
}
