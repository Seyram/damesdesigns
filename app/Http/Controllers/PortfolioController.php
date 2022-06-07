<?php

namespace App\Http\Controllers;

use App\Category;

use App\Http\Requests\MassDestroyPortfolioRequest;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Portfolio;
use App\ProjectStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Cviebrock\EloquentSluggable\Services\SlugService;

class PortfolioController extends Controller
{

    public function index()
    {
        $articles = Portfolio::with('category')
            ->orderBy('id', 'desc')
            ->paginate(100);

        return view('home.portfolios.index', compact('portfolios'));
    }

    public function show($slug, $portfolio)
    {
        $portfolio = Portfolio::with([ 'category'])

            ->whereId($portfolio)
            ->first();

        $portfolio->timestamps = false;
        $portfolio->views_count++;
        $portfolio->save();



        return view('home.portfolios.show', compact('portfolio',));
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Portfolio::class, 'slug', $request->input('title',''));

        return response()->json(['slug' => $slug]);
    }


}
