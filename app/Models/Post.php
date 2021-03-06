<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];

    //帖子自定义链接
    public function link(){
        if (empty($this->slug)){
            return route('posts.show', ['post'=>$this]);
        }
        return route('posts.show', ['slug'=>$this->slug]);
    }

    //关联用户
    public function user(){
        return $this->belongsTo(User::class);
    }

    //关联分类
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //关联回复
    public function replies(){
        return $this->hasMany(Reply::class);
    }

    //scope判断是最新回复还是最新发布
    public function scopeWithOrder($query, $order){
        if ($order=='publish'){
            $query->publish();
        }else{
            $query->reply();
        }
        //防止N+1查询数据库
        $query->with('category', 'user');
    }

    //scope最新回复
    public function scopeReply($query){
        return $query->orderBy('updated_at', 'desc');
    }
    //scope最新发布
    public function scopePublish($query){
        return $query->orderBy('created_at', 'desc');
    }
}
