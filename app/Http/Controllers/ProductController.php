<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
use Validator;
// use Illuminate\Support\Facades\DB;
use File;


// use Intervention\Image\Facades\Image as Image;




class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('frontend.products', ['product' => $data]);
    }

    // public function show()
    // {
    //     $data = Product::all();
    //     return view('frontend.ourproducts', ['product' => $data]);
    // }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|max:150',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'weight' => 'required',
            'slug' => 'required',
            'category_id'=>'required',
            'offer_price'=>'required',
        ]);
        $this->validate($req, [
            'filenames' => 'required',
            'filenames.*' => 'image'
    ]);

        $product = new Product;
        $product->name = $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->quantity = $req->quantity;
        $product->weight = $req->weight;
        $product->slug = $req->slug;
        $product->category_id =$req->category_id;
        $product->offer_price = $req->offer_price;
        // $product->save();

        // if (count($req->product_img) > 0) {
        //     foreach ($req->product_img as $image) {
        //         $img = time() . '.' . $image->getClientOriginalExtension();
        //         $location = public_path('/images/home/' . $img);
        //         Image::make($image)->save($location);
        //         $product_image = new Image;
        //         $product_image->product_id = $product->id;
        //         $product_image->image = $img;
        //         $product_image->save();
        //     }
        // }

        // $images = $req->file('product_img');
        // if ($req->hasFile('product_img')) :
        //         foreach ($images as $item):
        //             $var = date_create();
        //             $time = date_format($var, 'YmdHis');
        //             $imageName = $time . '-' . $item->getClientOriginalName();
        //             $item->move(base_path() . '/uploads/file/', $imageName);
        //             $arr[] = $imageName;
        //         endforeach;
        //         $image = implode(",", $arr);
        // else:
        //         $image = '';
        // endif;
        
        
        
        //         DB::table('images')->insert(
        //         array(
        //             'product_img' => $image
        //            )
        //        );
        $files = [];
        if($req->hasfile('filenames'))
         {
            foreach($req->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
         }
  
        //  $file= new File();
        $product->filenames = $files;
        $product->save();
        session()->flash('success', 'Product Addes successfully!!');
        return redirect('/addproducts');
    }

    public function OpenForm(){
        return view('backend.addproducts');
    }
}
