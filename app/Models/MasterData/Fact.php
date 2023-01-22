<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\MasterData\FactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fact extends Model
{
    //use factory
    use HasFactory;
    protected static function newFactory()
    {
        return FactFactory::new();
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
        'value',
        'created_at',
        'updated_at'
    ];
}
