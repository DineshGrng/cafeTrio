<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Category;
use App\Models\company;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public $aboutus;
    public $category;
    public $company;
    public $photo;
    public $product;
    public function __construct()
    {
        $aboutus = Aboutus::all();
        $category = Category::all();
        $company = company::all();
        $photos = Photo::all();
        $product = Product::all();

        //select always fasade ones
        View::share([
            'aboutus' => $aboutus,
            'category' => $category,
            'company' => $company,
            'photos' => $photos,
            'product' => $product,

        ]);
    }
}
