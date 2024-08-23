<?php

namespace App\Http\Controllers\Web\V1;

use Inertia\Inertia;
use App\Services\UserServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as RequestData;
use Illuminate\Support\Facades\Request;

class UsersController extends Controller
{

    public function __construct(
        protected UserServices $services
    )
    {
    }

    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => $this->services->Users(Request::input('search')),
            'filters' => Request::only(['search'])
        ]);
    }
}
