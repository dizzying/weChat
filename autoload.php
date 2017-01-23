<?php

/*
 * This file is part of the Dizzying/Wechat-ent.
 *
 * (c) Dizzying <dev@hun8.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

spl_autoload_register(function ($class) {
    if (false !== stripos($class, 'Dizzying\Wechat-ent')) {
        require_once __DIR__.'/src/'.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 10)).'.php';
    }
});
