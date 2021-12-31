<?php

namespace App\Controllers\Modules;

class Content
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
