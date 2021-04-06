<?php

namespace App\Http\Controllers;

use Spatie\RouteAttributes\Attributes\Get;

class AccountController extends Controller
{
    #[Get('/accounts', name:'accounts.index')]
    public function index()
    {
        return view('accounts.index');
    }
}
