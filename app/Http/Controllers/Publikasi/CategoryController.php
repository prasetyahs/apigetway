<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return json_decode($this->categoryService->getCategory(), true);
    }

   
    public function store(Request $request)
    {
        return json_decode($this->categoryService->addCategory($request->all()), true);
    }

    public function show($id)
    {
        return json_decode($this->categoryService->showOneCategory($id), true);
    }

    public function update(Request $request, $id)
    {
        return json_decode($this->categoryService->updateCategory($id, $request->all()), true);
    }

    public function destroy($id)
    {
        return json_decode($this->categoryService->deleteCategory($id), true);
    }
}
