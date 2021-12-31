<?php

namespace App\Controllers\Modules;

class FooterNhom
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
