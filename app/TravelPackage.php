<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{

    // protected $table = 'travel_packages';
    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event',
        'language', 'foods', 'departure_date', 'duration',
        'type', 'price'
    ];
    use SoftDeletes;
    protected $hidden = [];
    public function galleries(){
        return $this->hasMany(Gallery::class,'travel_packages_id','id');
    }

}
