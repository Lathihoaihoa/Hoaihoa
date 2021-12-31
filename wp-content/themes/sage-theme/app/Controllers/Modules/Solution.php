<?php

namespace App\Controllers\Modules;

class Solution
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
