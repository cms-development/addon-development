<?php 

namespace RogerthatBe\Like\Http;

use Statamic\Http\Controllers\Controller;

class LikeCPController extends Controller {
    public function index() {
        return view('like::cp.index');
    }
    public function settings() {
        return view('like::cp.settings');
    }   
}