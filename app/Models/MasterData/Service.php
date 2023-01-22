<?php

namespace App\Models\MasterData;

use Database\Factories\MasterData\ServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //use factory
    use HasFactory;
    protected static function newFactory()
    {
        return ServiceFactory::new();
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
        'title',
        'description',
        'icon',
        'created_at',
        'updated_at'
    ];
}
