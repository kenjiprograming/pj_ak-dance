<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return Inertia::render(
            'Template/Top',
            [
                'news' => $news,
            ]
        );
    }

    public function news()
    {
        $news = News::all();
        return Inertia::render(
            'Template/News/Index',
            [
                'news' => $news,
            ]
        );
    }

    public function newsDetail(News $news)
    {
        return Inertia::render(
            'Template/News/Detail',
            [
                'news' => $news,
            ]
        );
    }

    public function price()
    {
        return Inertia::render(
            'Template/Price/Index',
            []
        );
    }
}
