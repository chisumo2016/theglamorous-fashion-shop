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
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function  index()
    {
        $brands = $this->brandRepository->listBrands();

        $this->setPageTitle('Brands', 'List of all brands');
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public  function  create()
    {
        $this->setPageTitle('Brands', 'Create Brand');
        return view('admin.brands.create');
    }
}
