<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends BaseController
{
    public function getCategories(): JsonResponse
    {
        $category = Category::all();
        return $this->sendResponse($category->toArray(), 'Category retrieved successfully');
    }
}
