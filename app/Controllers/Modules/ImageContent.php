<?php

namespace App\Controllers\Modules;

class ImageContent
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
