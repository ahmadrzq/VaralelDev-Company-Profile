<?php

namespace App\Models\MasterData;

use Database\Factories\IntroFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    //use factory
    use HasFactory;
    protected static function newFactory()
    {
        return IntroFactory::new();
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
        'photo',
        'created_at',
        'updated_at'
    ];
}
