<?php
namespace App\Repositories\Contracts;

use App\Models\Tag;


interface TagRepositoryInterface
{
    public function getAll();


    public function get(Tag $tag);


    public function delete(Tag $tag);


    public function update(Tag $tag);



}
