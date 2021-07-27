<?php

namespace App\Http\Controllers;

use App\Models\Backportfolio;
use App\Models\PortfolioArticle;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Backportfolio::paginate(15);
        $portfolioarticles = PortfolioArticle::all();
        return view("pages.portfolio", compact('portfolios', 'portfolioarticles'));
    }
}