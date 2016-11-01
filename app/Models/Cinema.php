<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Backpack\CRUD\CrudTrait;

/**
 * @property integer $id
 * @property string $name
 * @property float $lng
 * @property float $lat
 * @property string $address
 * @property string $phone
 * @property string $created_at
 * @property string $updated_at
 * @property Promotion[] $promotions
 * @property Schedule[] $schedules
 */
class Cinema extends Model
{ 
    use CrudTrait;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cinema';
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'lng', 'lat', 'address', 'phone', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promotions()
    {
        return $this->hasMany('App\Models\Promotion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany('App\Models\Schedule');
    }
}
