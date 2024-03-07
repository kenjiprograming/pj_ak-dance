<?php

namespace App\Http\Controllers;

use App\Models\News;
use DateTimeImmutable;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return Inertia::render('News/List', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['public_date'] = (new DateTimeImmutable($data['public_date']))->format('Y-m-d H:i:s');
        $news = News::create($data);
        return $news
            ? response()->json($news, 201)
            : response()->json([], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return Inertia::render('News/Detail', [
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $data = $request->all();
        $data['public_date'] = (new DateTimeImmutable($data['public_date']))->format('Y-m-d H:i:s');

        $news = News::find($data['id']);
        $news->status = $data['status'];
        $news->title = $data['title'];
        $news->body = $data['body'];
        $news->public_date = $data['public_date'];

        $news->save();

        return $news
            ? response()->json($news, 201)
            : response()->json([], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
