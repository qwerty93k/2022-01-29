<?php

namespace App\Http\Controllers;

use App\Models\ArticleImage;
use App\Http\Requests\StoreArticleImageRequest;
use App\Http\Requests\UpdateArticleImageRequest;
use Illuminate\Http\Request;

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

        $imagename = 'src' . time() . '.' . $request->src->extension();
        $request->src->move(public_path('images'), $imagename);
        $articleimage->src = $imagename;

        $articleimage->width = $request->width;
        $articleimage->height = $request->height;
        $articleimage->class = $request->class;

        $articleimage->save();
        return redirect()->route('articleimages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleimage
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleImage $articleimage)
    {
        return view('articleimages.show', ['articleimage' => $articleimage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleImage $articleimage)
    {
        return view('articleimages.edit', ['articleimage' => $articleimage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleImageRequest  $request
     * @param  \App\Models\ArticleImage  $articleimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleImage $articleimage)
    {
        $articleimage->alt = $request->alt;

        $imagename = 'src' . time() . '.' . $request->src->extension();
        $request->src->move(public_path('images'), $imagename);
        $articleimage->src = $imagename;

        $articleimage->width = $request->width;
        $articleimage->height = $request->height;
        $articleimage->class = $request->class;

        $articleimage->save();
        return redirect()->route('articleimages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleImage  $articleimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleImage $articleimage)
    {
        $articleimage->delete();
        return redirect()->route('articleimages.index');
    }
}
