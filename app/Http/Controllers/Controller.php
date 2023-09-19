<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index(){
        $collection = collect([
            [
                'name'      =>  'Luke Thomas',
                'job'       =>  'Marketing Manager',
                'salary'    =>  8000
            ],
            [
                'name'      =>  'Liam Coleman',
                'job'       =>  'Web Manager',
                'salary'    =>  7500
            ],
            [
                'name'      =>  'Jacob Hill',
                'job'       =>  'Web Developer',
                'salary'    =>  6500
            ],
            [
                'name'      =>  'Charles Brown',
                'job'       =>  'Web Developer',
                'salary'    =>  5000
            ],
            [
                'name'      =>  'Richard Wilson',
                'job'       =>  'Web Developer',
                'salary'    =>  5400
            ],
            [
                'name'      =>  'Isaac Kelly',
                'job'       =>  'Graphics Designer',
                'salary'    =>  6000
            ]
        ]);

        $filteredCollection = $collection->where('job', 'Web Developer');
        dd($filteredCollection);
    }
}
