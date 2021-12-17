<?php

namespace App\Controllers\Modules;

class Testimonials
{
    public function dataModule($module)
    {
        $pos = 'pos';
        $test = 'pos';
        $test = 'test';
        $ID ='test';
        $ID ='ID';
        $spos= get_field('postion', $test);
        return (object) [
            'module' => $module,
            'test' => $ID,
            'pos' => $pos,
            'pos' => $test,
            'test' => $test
        ];


    }
    
}
