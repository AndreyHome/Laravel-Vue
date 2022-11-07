<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        info('Controller');
        $user = Auth::user();

        return response()->json([
            'data' => 'hello',
            'user' => $user,
        ]);
    }
}
