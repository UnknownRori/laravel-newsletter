<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return inertia('Dashboard', [
            'news' => News::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
