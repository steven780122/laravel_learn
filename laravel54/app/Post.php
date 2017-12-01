<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Post 就會對應到表>> posts
class Post extends Model
{
    // 如果沒有對應到要這樣寫:
    // protected $table = "XXXXXXXX";   //目前我命Post有對應到就不用了!  建議大家都用Laravel建議

}
