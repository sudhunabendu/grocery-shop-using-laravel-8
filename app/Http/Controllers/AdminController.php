<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('backend.dashboard');
    }

    

    public function AddCategory(){

        return view('backend.addcategories');
    }
    public function insertCategory(Request $req){
        $req->validate([
            'name' => 'required|max:150',
            'description' => 'required',
        ]);
        $cate = new Category;
        $cate->name = $req->name;
        $cate->description = $req->description;
        $cate->save();
        return redirect('/addcategory');
    }
}

