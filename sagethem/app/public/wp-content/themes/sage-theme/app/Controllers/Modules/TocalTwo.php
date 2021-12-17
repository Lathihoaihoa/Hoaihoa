<?php

namespace App\Controllers\Modules;

class TocalTwo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
