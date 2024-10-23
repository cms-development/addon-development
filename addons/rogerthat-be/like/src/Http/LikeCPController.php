<?php 

namespace RogerthatBe\Like\Http;

use Illuminate\Http\Request;
use Statamic\Facades\Collection;
use Statamic\Http\Controllers\Controller;

class LikeCPController extends Controller {
    public function index() {
        return view('like::cp.index');
    }
    public function settings() {

        $allCollections = Collection::all();

        return view('like::cp.settings', [
            'collections' => $allCollections
        ]);
    }   

    public function addFieldsToCollection(Request $request) {
        dd($request->all());
    }
}