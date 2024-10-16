<?php

namespace RogerthatBe\Like\Tags;

use Statamic\Tags\Tags;

class Like extends Tags {
    /**
     * The {{ like }} tag.
     */
    public function index() {
        return '👍🏼'; // {{ like }}
    }
    
    /**
     * The {{ like:not }} tag.
     */
    public function not() {
        return '👎🏼'; // {{ like:not }}
    }
}