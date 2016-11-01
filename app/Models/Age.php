<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
/**
 * @property integer $id
 * @property string $name
 * @property integer $limit
 * @property string $created_at
 * @property string $updated_at
 * @property Movie[] $movies
 */
class Age extends Model
{

    use CrudTrait;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'age';

    /**
     * @var array
     */
    protected $fillable = ['name', 'limit', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }
}
