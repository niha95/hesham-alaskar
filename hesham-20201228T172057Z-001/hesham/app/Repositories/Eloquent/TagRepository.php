<?php
namespace App\Repositories\Eloquent;

use App\Models\BlogCategory;
use App\Models\Tag;
use App\Repositories\Contracts\TagRepositoryInterface;
/**
 * summary
 */
class TagRepository implements TagRepositoryInterface
{
    public function getAll()
    {
        return Tag::paginate(5);
    }
    // to get data
    public function get(Tag $tag)
    {
        return $tag;
    }
    public function update(Tag $tag)
    {
        return $tag;
    }
    public function store($data)
    {
        return Tag::create($data);
    }

    public function delete(Tag $tag)
    {
        return $tag->delete();
    }



}
