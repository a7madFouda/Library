<?php

namespace App\Http\Controllers;
use App\category;

use Illuminate\Http\Request;

class Categories extends Controller
{
    public function manage(){
        $data = category::all();
        return view('admin/categories/categories',compact('data'));
    }
    public function add(){
        return view('admin/categories/add_category');
    }
    public function insert(){
        $insert = new category;
        $insert->name = request('name');
        $insert->description = request('description');
        $insert->save();
        return redirect('/categories');
    }
    public function edit($id){
       $data = category::findOrFail($id);
        return view('admin/categories/edit_category',["data"=>$data]); 
    }
    public function update($id){
        $data = category::findOrFail($id);
        $data->name=request('name');
        $data->description=request('description');
        $data->save();
        return redirect('/categories');
    }
    public function delete($id){
        $del = category::find($id);
        $del->delete();
        return redirect('/categories');
    }
}
