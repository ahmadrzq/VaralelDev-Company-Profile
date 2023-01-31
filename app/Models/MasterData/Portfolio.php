<?php

namespace App\Models\MasterData;

use Database\Factories\MasterData\PortfolioFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //use factory
    use HasFactory;
    protected static function newFactory()
    {
        return PortfolioFactory::new();
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
        'category_id',
        'name',
        'photo',
        'created_at',
        'updated_at'
    ];
}
