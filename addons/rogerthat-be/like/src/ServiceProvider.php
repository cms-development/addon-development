<?php

namespace RogerthatBe\Like;

use Statamic\Facades\CP\Nav;
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

    public function bootAddon() {
        $this->extendCPNav();
    }

    private function extendCPNav() {
        Nav::extend(function ($nav) {
            $nav->content('Like')->section('Tools')
                ->route('like.index')
                ->icon('like')
                ->children([
                    'Like' => "#", // cp_route('like.index'),
                    'Settings' => "#", //cp_route('like.settings'),
                ]);
        });
    }


}
