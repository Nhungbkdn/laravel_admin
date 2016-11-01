<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $imageThumb
 * @property string $dayPost
 * @property User $user
 */
class News extends Model
{
     use CrudTrait;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'title', 'content', 'image', 'imageThumb', 'dayPost'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
