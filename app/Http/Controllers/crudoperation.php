<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class crudoperation extends Controller
{
    function productview()
    {
        return view('addproduct');
    }
    function insertproduct(Request $request)
    {
        // value acess
        //$procode = $request->input("productcode");
        //$procode = $_POST["productcode"];`
        $procode = $request->productcode;
        $proname = $request->productname;
        $proprice = $request->productprice;
        $protype = $request->producttype;
        $procatagery = $request->productcatagery;

        //model - insert code
        $obj = new Products;
        $obj->code = $procode;
        $obj->name = $proname;
        $obj->price = $proprice;
        $obj->category =  $procatagery;
        $obj->type = $protype;
        $obj->save();

        return redirect("/viewproduct")->with("message","Data inserted");

    }
    function viewproduct()
    {
        // data lavva mate  
        $allproducts = Products::all();
        return view('viewproduct',compact('allproducts'));
    }

    function deleteproduct($id)
    {
        Products::where('pid', $id)->delete();
        return redirect("/viewproduct")->with("message","Data Deleted");
    }
    function editproduct($id)
    {
        $data = Products::where('pid', $id)-> first();
        return view('editproduct',compact('data'));
    }
    function updateproduct(Request $request,$id)
    {
        // form value acess
        $procode = $request->productcode;
        $proname = $request->productname;
        $proprice = $request->productprice;
        $protype = $request->producttype;
        $procatagery = $request->productcatagery;

        //model - insert code
        $obj = Products::where('pid', $id)-> first();
        $obj->code = $procode;
        $obj->name = $proname;
        $obj->price = $proprice;
        $obj->category =  $procatagery;
        $obj->type = $protype;
        $obj->save();

        return redirect("/viewproduct")->with("message","Data Updated 👍");
    }
}    
