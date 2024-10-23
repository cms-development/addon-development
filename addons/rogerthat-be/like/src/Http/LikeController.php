<?php

namespace RogerthatBe\Like\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Statamic\Facades\YAML;


class LikeController extends Controller
{
    public function storeLike(Request $request)
    {
        $entryId = $request->entry_id;

        // path to /resources/like/likes.yaml
        $likesPath = base_path('resources/like/likes.yaml');

        // if file not exists, create
        if(!file_exists($likesPath)) {
            file_put_contents($likesPath, '');
        }

        // get the data from the file
        $likes = YAML::file($likesPath)->parse();

        if(!isset($likes[$entryId])) {
            $likes[$entryId] = 0;
        }

        // add this like to the array
        $likes[$entryId] = $likes[$entryId] + 1;

        // save the data back to the file
        $yamlData = YAML::dump($likes);
        file_put_contents($likesPath, $yamlData);

        return back();
    }

}