<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\AdminCategoryModel;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cara manual menggunakan super user admin tanpa fitur middleware

        // Menggunakan guest ""
        // if (auth()->guest() || auth()->user()->username !== 'arditsudhady') {
        //     abort(403);
        // }
        // Menggunakan check ""
        // if (!auth()->check() || auth()->user()->username !== 'arditsudhady') {
        //     abort(403);
        // }

        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminCategoryModel  $adminCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function show(AdminCategoryModel $adminCategoryModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminCategoryModel  $adminCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminCategoryModel $adminCategoryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminCategoryModel  $adminCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminCategoryModel $adminCategoryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminCategoryModel  $adminCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminCategoryModel $adminCategoryModel)
    {
        //
    }
}
