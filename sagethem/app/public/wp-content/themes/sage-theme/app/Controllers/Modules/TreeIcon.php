<?php

namespace App\Controllers\Modules;

class TreeIcon
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
