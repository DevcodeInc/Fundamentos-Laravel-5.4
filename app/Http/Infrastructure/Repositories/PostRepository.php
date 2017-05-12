<?php
namespace App\Http\Infrastructure\Repositories;
/**
 * Created by Juan Carlos Gonzales Q.
 * Email: juangonzaq@gmail.com
 * Date: 4/05/17
 */

//Llamada a la interface
use App\Http\Domain\Contracts\IPost;
use Auth;

class PostRepository implements IPost
{
    protected $model;
    public function __construct($post)
    {
        $this->model = $post;
    }

    public function store($params){

        $model = new $this->model;
        $model->title = $params['title'];
        $model->slug = str_slug($params['title']);
        $model->url = $params['url'];
        //$model->image = $params[''];
        $model->user_id = Auth::user()->id;
        $model->save();

        return $model;
    }

    public function detail($slug){
        return $this->model->where('slug', $slug)->first();
    }

    public function all(){
        return $this->model
            ->select('name', 'title', 'slug', 'url', 'image', 'posts.created_at')
            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->get();
    }
}