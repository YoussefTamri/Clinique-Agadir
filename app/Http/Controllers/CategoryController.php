<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCtegory;
use App\Models\Category;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
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
        $category = Category::all();
        return view('admin.Category.category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCtegory $request)
    {

        try {

        $category = new Category();


        $category->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $category->Notes = $request->Notes;
        $category->save();



        return redirect()->route('Category.index')->with('message',trans('sessionm.category_added_successfly'));

    }

    catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
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

        $data = $id;
        $doctor = Doctor::where('Category_id', $data)
            ->get();

        return view('admin.Category.category-doctor' , compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCtegory $request)
    {

        try {

            $validated = $request->validated();
            $category = Category::findOrFail($request->id);
            $category->update([
              $category->Name = ['ar' => $request->Name_ar, 'en' => $request->Name_en],
              $category->Notes = $request->Notes,
            ]);

            return redirect()->route('Category.index')->with('message',trans('sessionm.category_updated_successfly'));
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $category = Category::findOrFail($request->id)->delete();

        return redirect()->route('Category.index')->with('message',trans('sessionm.category_deleted_successfly'));
    }
}
