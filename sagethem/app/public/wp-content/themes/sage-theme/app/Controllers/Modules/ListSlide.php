<?php

namespace App\Controllers\Modules;

class ListSlide
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
