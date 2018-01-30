<?php

namespace App;

use Cviebrock\EloquentTaggable\Taggable;

class Post extends \TCG\Voyager\Models\Post
{
    use Taggable;
}
