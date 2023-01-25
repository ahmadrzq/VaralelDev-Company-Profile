<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\MasterData\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    //use factory
    use HasFactory;
    protected static function newFactory()
    {
        return ClientFactory::new();
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
        'name',
        'position',
        'message',
        'photo',
        'logo',
        'created_at',
        'updated_at'
    ];
}
