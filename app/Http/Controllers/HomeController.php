<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return inertia('Home', [
            'news' => News::with('user')->paginate(5)
        ]);
    }
}
