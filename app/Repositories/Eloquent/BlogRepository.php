<?php
namespace App\Repositories\Eloquent;
use App\Models\Blog;

use App\Repositories\Contracts\BlogRepositoryInterface;
use Illuminate\Support\Facades\Redis;
/**
 * summary
 */
class BlogRepository implements BlogRepositoryInterface
{
    public function getAll($number)
    {
        return Blog::paginate($number);
    }
    // to get data
    public function get(Blog $blog)
    {
        return $blog;
    }
    public function store($data)
    {
         $blog = Blog::create($data);
         if($blog && !empty($data['tags'])) $blog->tags()->sync($data['tags']);
         return $blog;
    }

    public function update(Blog $blog)
    {
        return $blog;
    }
    public function delete(Blog $blog)
    {
        return $blog;
    }
}
