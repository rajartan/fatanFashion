<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('welcome', [
            'barangs' => Barang::paginate(5),
            "categories" => Category::all()
        ]);
    }
}
