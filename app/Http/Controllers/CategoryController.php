<?php

namespace App\Http\Controllers;

use App\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('portfolios')
            ->with(['portfolios' => function($query) {
                $query->orderBy('id', 'desc');
            }])
            ->paginate(10);

        return view('home.categories.index', compact('categories'));
    }

    public function show($slug, Category $category)
    {
        $previousCategories = Category::withCount('portfolios')->where('id', '<', $category->id)->take(1)->get();
        $nextCategories = Category::withCount('portfolios')->where('id', '>', $category->id)->take(1)->get();
        $category->loadCount('portfolios');

        $portfolios = $category->portfolios()
            ->paginate(5);


        return view('home.categories.show', compact(['category', 'portfolios','previousCategories', 'nextCategories']));
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->input('name',''));

        return response()->json(['slug' => $slug]);
    }
}
