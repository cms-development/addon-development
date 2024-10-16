<?php

namespace RogerthatBe\Like;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tags\Like::class,
    ];

    protected $modifiers = [];

    protected $commands = [];

    protected $publishables = [];

    protected $fieldtypes = [];

    protected $widgets = [];

    protected $scripts = [];

    protected $routes = [];


    public function bootAddon()
    {
        // dd('Hello from the other side!');
        //
    }
}
