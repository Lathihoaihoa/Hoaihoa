<?php

namespace App\Controllers\Modules;

class CenterButton
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
