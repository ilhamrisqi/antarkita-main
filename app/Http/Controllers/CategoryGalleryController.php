<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategory_galleryRequest;
use App\Http\Requests\UpdateCategory_galleryRequest;
use App\Models\Category_gallery;

class CategoryGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCategory_galleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory_galleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category_gallery  $category_gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Category_gallery $category_gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_gallery  $category_gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_gallery $category_gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategory_galleryRequest  $request
     * @param  \App\Models\Category_gallery  $category_gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory_galleryRequest $request, Category_gallery $category_gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_gallery  $category_gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_gallery $category_gallery)
    {
        //
    }
}
