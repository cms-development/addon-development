<?php

namespace RogerthatBe\Like\Modifiers;

use Statamic\Modifiers\Modifier;

class Smile extends Modifier {

    /**
     * Modify a value
     * @param mixed $value
     * @param array $params
     * @return mixed
     */
    public function index($value, $params, $context) {
        $emoji = $params[0] ?? '😊';

        // add emoji after every word
        return implode(' ' . $emoji . ' ', explode(' ', $value));
    }
}