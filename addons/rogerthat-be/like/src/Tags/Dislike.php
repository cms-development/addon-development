<?php

namespace RogerthatBe\Like\Tags;

use Statamic\Tags\Tags;

class Dislike extends Tags {
    /**
     * The {{ dislike }} tag.
     */
    public function index() {
        return '<button>dislike</button>'; // {{ dislike }}
    }
}