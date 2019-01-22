<?php
namespace App\Repositories;
​
use App\Models\Post;
​
class PostRepository implements CategoryRepositoryInterface
{
{
    //override thiết kế sau
    public function list()
    {
        return Post::paginate(5);
    }
}