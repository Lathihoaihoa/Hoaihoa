<?php

namespace App\Controllers\Modules;

class ColColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
