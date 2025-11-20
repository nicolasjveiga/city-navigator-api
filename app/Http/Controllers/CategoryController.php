<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->index();

        return CategoryResource::collection($categories);
    }

    public function show($id)
    {
        //TODO: Logic to show a specific category
    }

    public function store(CreateCategoryRequest $request)
    {
        $validated = $request->validated();

        $category = $this->categoryService->create($validated);

        return new CategoryResource($category);
    }

    public function update(Request $request, $id)
    {
        // TODO: Logic to update a specific category
    }

    public function destroy($id)
    {
        // TODO: Logic to delete a specific category
    }
}