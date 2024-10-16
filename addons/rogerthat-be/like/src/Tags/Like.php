<?php

namespace RogerthatBe\Like\Tags;

use Statamic\Tags\Tags;

class Like extends Tags {
    /**
     * The {{ like }} tag.
     */
    public function index() {
        return view('like::tags.likeBtn', [
            'entry_id' => 12345
        ]);
    }
    
    /**
     * The {{ like:not }} tag.
     */
    public function not() {
        return '👎🏼'; // {{ like:not }}
    }
}