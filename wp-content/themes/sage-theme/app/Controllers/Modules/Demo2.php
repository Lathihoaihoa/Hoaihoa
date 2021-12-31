<?php

namespace App\Controllers\Modules;

// use App\Services\Queries;

class Demo2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            
            //'example' => $this->getExample(),
        ];
    }

    // // Example lấy data trước khi xuất ra view
    // protected function getExample()
    // {
    //     return Queries::testExample();
    // }
}
