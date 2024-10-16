<?php

namespace RogerthatBe\Like\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;

class LikeController extends Controller
{
    public function storeLike(Request $request)
    {
        dd($request->all());
    }

}