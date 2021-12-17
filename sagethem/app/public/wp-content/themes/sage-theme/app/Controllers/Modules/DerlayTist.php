<?php

namespace App\Controllers\Modules;

class DerlayTist
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
