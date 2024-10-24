<?php

namespace RogerthatBe\Like;

class Constants {
    private const ADDON_PATH = __DIR__ . '/..';

    public static function getAddonPath() {
        return self::ADDON_PATH;
    }

    public static function getLikeSettingsPath() {
        return resource_path('like/likes.yaml');
    }
}

