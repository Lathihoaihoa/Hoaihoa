<?php

namespace App\Controllers\Modules;

class ContentCenter
{
    public function dataModule($module)
    {
        $test = 'test';
        return (object) [
            'module' => $module,
            'test' => $test
        ];
    }
}
