<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('dashboard_veiw.manage_category',compact('category'));
    }

    public function showCategory()
    {
        $categories=Category::all();
        $products = Product::all()->take(6);
        return view('public.landingPage',compact('categories','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }

        $name      = request('name');
        $description      = request('description');
        Category::create([
            'name'  => $name,
            'description' => $description,
            'image' => $filename
        ]);
        return redirect('/dashboard/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard_veiw.manage_category_edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $category->image;
        }

        $name      = request('name');
        $description      = request('description');

        $category=Category::find($category->id);
        $category->name =$name;
        $category->description =$description;
        $category->image =$filename;
        $category->save();

        return redirect('/dashboard/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::findOrFail($category->id)->delete();
        return redirect('/dashboard/category');
    }

    public function categoryFind($id){
          $prod = Product::where('category_id', '=', $id)->get();
          $products = Product::where('category_id', '=', $id)->paginate(6);
          $category = Category::where('id', '=', $id)->get();
          $productCount = $prod->count();

        return view('public.cat_products',compact('products','productCount','category'));


    }
    public function navBarCategory(){

        $categories=Category::all();

        return view('layout.layouts',compact('categories'));

    }

    public function header(){
        $categories = Category::all();
        return view('layout.layouts', compact('categories'));
    }
}
