<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Navigation;
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
        $categories = Category::with(['navigation'])->get();
        return view('admin_dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'color' => 'required',
            'slug' => 'unique:categories,slug,',
        ]);
        $save = Category::create([
            'name' => strtolower($request->input('name')),
            'slug' => trim(strtolower($request->input('slug'))) ? trim(strtolower($request->input('slug'))) : strtolower($request->input('name')),
            'description' => trim(strtolower($request->input('description'))),
            'keywords' => trim(strtolower($request->input('keywords'))),
            'color' => trim(strtolower($request->input('color'))),
        ]);
        if ($save) {
            $navigation = new Navigation();
            $navigation->category_id = $save->id;
            $navigation->link = $save->slug;
            $navigation->menu_order = $request->input('menu_order');
            $navigation->menu_status = $request->input('menu_status');
            $navigation->home_status = $request->input('home_status');
            $navigation->block_type = trim(strtolower($request->input('block_type')));
            
            if ($navigation->save()) {
                return redirect()->route('admin.category.view')->with('success', 'Category successfully created');
            } else {
                return redirect()->route('admin.category.view')->with('error', 'Category not created');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin_dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            'slug' => 'required|unique:categories,slug,'.$category->id, 
        ]);
        
        $category->name = strtolower($request->input('name'));
        $category->slug = trim(strtolower($request->input('slug')));
        $category->description = trim(strtolower($request->input('description')));
        $category->keywords = trim(strtolower($request->input('keywords')));
        $category->color = trim(strtolower($request->input('color')));
        
        if ($category->save()) {
            $navigation = Navigation::where('category_id', $category->id)->first();
            $navigation->link = $category->slug;
            $navigation->menu_order = $request->input('menu_order');
            $navigation->menu_status = $request->input('menu_status');
            $navigation->home_status = $request->input('home_status');
            $navigation->block_type = trim(strtolower($request->input('block_type')));
            
            $save = $navigation->save();
            if ($save) {
                return redirect()->route('admin.category.view')->with('success', 'Category successfully updated');
            } else {
                return redirect()->route('admin.category.view')->with('error', 'Category not updated');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $deleted = $category->delete();
        if ($deleted) {
            $category->navigation()->delete();
            return redirect()->route('admin.category.view')->with('success', 'Category successfully deleted');
        } else {
            return redirect()->route('admin.category.view')->with('error', 'Category not deleted');
        }
    }
}
