<?php

namespace App\Services\Category;

use App\Models\Category;
use App\Services\FileHandlerService;

trait CategoryServices
{
    use FileHandlerService;

    public function categoryAdd($request)
    {
        $path = 'images/category/';
        $image = $this->handleFile($request->image, $path, '');

        return Category::create([
            'name' => $request->name,
            'image' => $image,
            'parent_id' => $request->parent_id ?? null,
            'is_active' => true,
        ]);
    }

    public function categoryModify($request, $category)
    {
        $path = 'images/category/';
        $image = $this->handleFile($request->image, $path, $category->image);

        return $category->update([
            'name' => $request->name,
            'image' => $image,
            'parent_id' => $request->parent_id ?? null,
        ]);
    }
}
