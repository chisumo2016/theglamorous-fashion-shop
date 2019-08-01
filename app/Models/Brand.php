<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
   /**
    * Class Brand
    * @package App\Models
    */

   protected  $table = 'brands';

    /**
     * @var array
     */
    protected  $fillable = ['name', 'slug', 'logo'];

    /**
     * @param $value
     */

    /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}