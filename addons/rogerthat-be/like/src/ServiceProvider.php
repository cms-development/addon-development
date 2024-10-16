<?php

namespace RogerthatBe\Like;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tags\Like::class,
        Tags\Dislike::class,
    ];

    protected $modifiers = [
        Modifiers\Smile::class,
    ];

    protected $routes = [
        'actions' => __DIR__.'/../routes/actions.php',
    ];
    
    protected $commands = [];

    protected $publishables = [];

    protected $fieldtypes = [];

    protected $widgets = [];

    protected $scripts = [];



    public function bootAddon()
    {
        // dd('Hello from the other side!');
        //
    }
}
