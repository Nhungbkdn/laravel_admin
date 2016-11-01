<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * @property integer $id
 * @property integer $cinema_id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $imageThumb
 * @property string $created_at
 * @property string $updated_at
 * @property Cinema $cinema
 */
class Promotion extends Model
{
     use CrudTrait;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'promotion';
     protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['cinema_id', 'title', 'content', 'image', 'imageThumb', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cinema()
    {
        return $this->belongsTo('App\Models\Cinema');
    }
}
