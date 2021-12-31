<?php

namespace App\Controllers\Modules;

class Logo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
