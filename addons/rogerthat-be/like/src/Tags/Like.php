<?php

namespace RogerthatBe\Like\Tags;

use Statamic\Tags\Tags;
use RogerthatBe\Like\Constants;
use Statamic\Facades\YAML;

class Like extends Tags {
    /**
     * The {{ like }} tag.
     */
    public function index() {

        // what is the entry id ????
        $entry_id = $this->context->get('id')->value();

        return view('like::tags.likeBtn', [
            'entry_id' => $entry_id
        ]);
    }
    
    /**
     * The {{ like:not }} tag.
     */
    public function not() {
        return '👎🏼'; // {{ like:not }}
    }

    public function show( ) {
        // return base path
        $likePath = Constants::getLikeSettingsPath();

        // parse yaml file
        $likes = YAML::file($likePath)->parse();

        // huidige context: entry id
        $currentId = $this->context->get('id')->value();

        if(isset($likes[$currentId])) {
            return $likes[$currentId] . " likes";
        } else {
            return "geen likes";
        }
    }
}