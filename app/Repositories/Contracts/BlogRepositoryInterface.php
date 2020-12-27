<?php
namespace App\Repositories\Contracts;

use App\Models\Blog;


interface BlogRepositoryInterface
{
    public function getAll($number);
    public function get(Blog $post);
    public function delete(Blog $post);
    public function store($data);
    public function update(Blog $post);



}
