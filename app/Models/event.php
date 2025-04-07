<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Model;
class event extends Model
{
    public $table = 'event';
    public $timestamps = false;
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'start' => 'string',
        'end' => 'string',
        'venue' => 'string'
    ];
}