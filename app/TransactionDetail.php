<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{

    // protected $table = 'travel_packages';
    protected $fillable = [
        'transaction_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];
    use SoftDeletes;
    protected $hidden = [];

    // Membuat Relasi 
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
