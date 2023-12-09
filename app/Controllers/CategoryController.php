<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;


class CategoryController extends BaseController
{
    public function index()
    {
        $category = new CategoryModel();
        $data['items'] = $category->findAll();
        $data['title'] = 'category list';
        return view('category/index', $data);
    }

    public function create()
    {
        
    }

    public function store()
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update($id)
    {
        
    }

    public function delete($id)
    {
        
    }
}
