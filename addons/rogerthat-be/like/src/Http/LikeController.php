<?php

namespace RogerthatBe\Like\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Statamic\Facades\YAML;


class LikeController extends Controller
{
    public function storeLike(Request $request)
    {
        // dd($request->all());

        $entryId = $request->entry_id;

        // path to /resources/like/likes.yaml
        $likesPath = base_path('resources/like/likes.yaml');

        // get the data from the file
        $likes = YAML::file($likesPath)->parse();

        // add this like to the array
        $likes[$entryId] = $likes[$entryId] + 1;

        // save the data back to the file
        YAML::file($likesPath)->set($likes)->save();

        return response()->json([
            'message' => 'Like added',
            'likes' => $likes[$entryId]
        ]);
    }

}