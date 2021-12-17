<?php

namespace App\Controllers\Modules;

class RepeaterContent
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
