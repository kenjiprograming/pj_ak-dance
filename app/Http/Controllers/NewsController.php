<?php

namespace App\Http\Controllers;

use App\Models\News;
use DateTimeImmutable;
use Illuminate\Http\RedirectResponse;
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
        return Inertia::render(
            'News/Index',
            [
                'news' => $news,
            ]
        );
    }

    public function all()
    {
        $news = News::all();
        return $news
            ? response()->json($news, 201)
            : response()->json([], 500);
    }

    public function one($id)
    {
        return response()->json($id);
        // $news = News::all();
        // return $news
        //     ? response()->json($news, 201)
        //     : response()->json([], 500);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(
            'News/Create',
            []
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
            'public_date' => 'required|string',
        ]);
        News::create([
            'status' => $request->status,
            'title' => $request->title,
            'body' => $request->body,
            'public_date' => (new DateTimeImmutable($request->public_date))->format('Y-m-d'),
        ]);
        sleep(1);

        return redirect()->route('admin.news.index')->with('message', 'News Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return Inertia::render(
            'News/Show',
            [
                'news' => $news,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return Inertia::render(
            'News/Edit',
            [
                'news' => $news,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $news->id = $request->id;
        $news->status = $request->status;
        $news->title = $request->title;
        $news->body = $request->body;
        $news->public_date = (new DateTimeImmutable($request->public_date))->format('Y-m-d');
        $news->save();
        sleep(1);

        return redirect()->route('admin.news.index')->with('message', 'News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news): RedirectResponse
    {
        $news->delete();
        sleep(1);

        return redirect()->route('admin.news.index')->with('message', 'News Delete Successfully');
    }
}
