<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
/**
 * @property integer $id
 * @property integer $age_id
 * @property integer $category_id
 * @property integer $moviestatus_id
 * @property string $titleEng
 * @property string $trailer
 * @property string $titleViet
 * @property string $description
 * @property string $image
 * @property string $imageThumb
 * @property string $duration
 * @property string $pubDay
 * @property string $director
 * @property integer $IMDB
 * @property float $rateOfMovie
 * @property string $created_at
 * @property string $updated_at
 * @property Age $age
 * @property Category $category
 * @property Moviestatus $moviestatus
 * @property Rating[] $ratings
 * @property Schedule[] $schedules
 */
class Movie extends Model
{

    use CrudTrait;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'movie';

    /**
     * @var array
     */
    protected $fillable = ['age_id', 'category_id', 'moviestatus_id', 'titleEng',
	'trailer', 'titleViet', 'description', 'image', 'imageThumb', 'duration', 'pubDay', 'rateOfMovie', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function age()
    {
        return $this->belongsTo('App\Models\Age');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moviestatus()
    {
        return $this->belongsTo('App\Models\Moviestatus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany('App\Models\Schedule');
    }
}
