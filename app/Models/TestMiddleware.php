<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestMiddleware extends Model
{
    use HasFactory;

    protected $table = 'test_middleware';

    protected $primaryKey = 'TM_ID';

    protected $fillable = [
        'TM_ID','TM_ROUTE','TM_TIME','Created_at'
    ];
}
