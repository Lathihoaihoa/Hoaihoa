<?php

namespace App\Controllers\Modules;

class ContentIcon
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
