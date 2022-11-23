<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class AdmindataController extends Controller
{
    public function save_data(Request $request){
        $data=array('name'=>$request->username,'email'=>$request->email,'number'=>$request->number,'description'=>$request->desc);
    $getter=Blog::create($data);
    if($getter){
        return back()->with('message','Blogs Created  successfully !!Thank You');
    }
    }
}
