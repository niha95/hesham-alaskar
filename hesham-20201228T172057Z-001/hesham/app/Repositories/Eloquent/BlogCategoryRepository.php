<?php
namespace App\Repositories\Eloquent;
use App\Models\BlogCategory;

use App\Repositories\Contracts\BlogCategoryRepositoryInterface;
use Illuminate\Support\Facades\Redis;
/**
 * summary
 */
class BlogCategoryRepository implements BlogCategoryRepositoryInterface
{
    public function getAll()
    {
        return BlogCategory::paginate(5);
    }
    // to get data
    public function get(BlogCategory $blogCategory)
    {
        return $blogCategory;
    }
    public function store($data)
    {
        return BlogCategory::create($data);
    }

    public function delete(BlogCategory $blogCategory)
    {
        return $blogCategory->detete();
    }
    public function update(BlogCategory $blogCategory, $data)
    {
        return $blogCategory->update($data);
    }
}
