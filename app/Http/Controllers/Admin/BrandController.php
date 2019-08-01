<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Contracts\BrandContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends BaseController
{
    /**
     * @var BrandContract
     */

    protected  $brandRepository;

    /**
     * CategoryController constructor.
     * @param BrandContract $brandRepository
     */

    public  function  __construct($brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }
    
}
