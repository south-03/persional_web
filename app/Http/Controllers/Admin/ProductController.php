<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\thumbnail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(ProductFormRequest $request) 
    {
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);
        $product = $category->products()->create([
            'category_id' =>$validatedData['category_id'],
            'title' =>$validatedData['name'],
            'description' =>$validatedData['description'],
        ]);


        if($request->hasFile('image')){
            $uploadPath = 'uploads/post/';

            $i = 1;
            foreach($request->file('image') as $imageFile){
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $product->productImage()->create([
                    'product_id' => $product->id,
                    'thumbnail' => $finalImagePathName,
                ]);
            }
        }

        return redirect('/admin/products')->with('message', 'Product Added Successfully');
    }

    public function edit(int $product_id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($product_id);
        return view('admin.products.edit', compact('categories', 'product'));
    }

    public function update(ProductFormRequest $request, int $product_id)
    {
        $validatedData = $request->validated();
        $product = Category::findOrFail($validatedData['category_id'])
                            ->products()->where('id',$product_id)->first();
        if($product) {

            $product->update([
                'category_id' =>$validatedData['category_id'],
                'title' =>$validatedData['name'],
                'description' =>$validatedData['description'],
            ]);

            if($request->hasFile('image')){
                $uploadPath = 'uploads/post/';
    
                $i = 1;
                foreach($request->file('image') as $imageFile){
                    $extention = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extention;
                    $imageFile->move($uploadPath,$filename);
                    $finalImagePathName = $uploadPath.$filename;
    
                    $product->productImage()->create([
                        'product_id' => $product->id,
                        'thumbnail' => $finalImagePathName,
                    ]);
                }
            }
    
            return redirect('/admin/products')->with('message', 'Topic Updated Successfully');
        } else {
            return redirect('admin/products')->with('message', 'No such topic ID found');
        }
    }

    public function destroyImage(int $product_image_id)
    {
        $productImage = thumbnail::findOrFail($product_image_id);
        if(File::exists($productImage->thumbnail)) {
            File::delete($productImage->thumbnail);
        }
        $productImage->delete();
        return redirect()->back()->with('message', ' Product Image Deleted');
    }

    public function destroy(int $product_id)        
    {
        $product = Product::findOrFail($product_id);
        if($product->productImage){
            foreach($product->productImage as $image){
                if(File::exists($image->thumbnail)) {
                    File::delete($image->thumbnail);

                }
            }
        }
        $product->delete();
        return redirect()->back()->with('message' , 'Post Deleted with all its image');
    }   
}
