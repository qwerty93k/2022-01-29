<?php

namespace App\Http\Controllers;

use App\Models\ArticleImage;
use App\Http\Requests\StoreArticleImageRequest;
use App\Http\Requests\UpdateArticleImageRequest;
use Illuminate\http\Request;

class ArticleImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleimages = ArticleImage::all();
        return view('articleimages.index', ['articleimages' => $articleimages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articleimages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articleimage = new ArticleImage;

        $articleimage->alt = $request->alt;
        $articleimage->src = $request->src;
        $articleimage->width = $request->width;
        $articleimage->height = $request->height;
        $articleimage->class = $request->class;

        $articleimage->save();
        return redirect()->route('articleimage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleImage $articleImage)
    {
        return view('articleimages.show', ['articleimage' => $articleImage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleImage $articleImage)
    {
        return view('articleimages.edit', ['articleimage' => $articleImage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleImageRequest  $request
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleImage $articleImage)
    {
        $articleImage->alt = $request->alt;
        $articleImage->src = $request->src;
        $articleImage->width = $request->width;
        $articleImage->height = $request->height;
        $articleImage->class = $request->class;

        $articleImage->save();
        return redirect()->route('articleimage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleImage $articleImage)
    {
        $articleImage->delete();
        return redirect()->route('articleimage.index');
    }
}
