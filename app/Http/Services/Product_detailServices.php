<?php
namespace App\Http\Services;
use App\Model\Product_detail;
use Illuminate\Support\Facades\Session;

class Product_detailServices{
    protected function isVaaidSize($request, $id){
        $Size = $request->input('Size');
        dd($Size,$id);
    }
}





?>