<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use App\Http\Requests\StoreArticleCategoryRequest;
use App\Http\Requests\UpdateArticleCategoryRequest;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articlecategories = ArticleCategory::all();
        return view('articlecategories.index', ['articlecategories' => $articlecategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articlecategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articlecategory = new ArticleCategory;

        $articlecategory->title = $request->title;
        $articlecategory->description = $request->description;

        $articlecategory->save();
        return redirect()->route('articlecategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $articlecategory)
    {
        return view('articlecategories.show', ['articlecategory' => $articlecategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategory $articlecategory)
    {
        return view('articlecategories.edit', ['articlecategory' => $articlecategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleCategoryRequest  $request
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleCategory $articlecategory)
    {
        $articlecategory->title = $request->title;
        $articlecategory->description = $request->description;

        $articlecategory->save();
        return redirect()->route('articlecategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategory $articlecategory)
    {
        $articlecategory->delete();
        return redirect()->route('articlecategories.index');
    }
}
