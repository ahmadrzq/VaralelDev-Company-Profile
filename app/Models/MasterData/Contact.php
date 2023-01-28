<?php

namespace App\Models\MasterData;

use Database\Factories\MasterData\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //use factory
    use HasFactory;
    protected static function newFactory()
    {
        return ContactFactory::new();
    }

    //declare table
    // public $table = 'intro';

    //this type data must be yyyy-mm-dd
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    //declare fillable
    protected $fillable = [
        'email',
        'phone',
        'address',
        'created_at',
        'updated_at'
    ];
}
