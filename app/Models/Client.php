<?php

namespace App\Models;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'description'
    ];

    public function project()
    {
        // return $this->hasMany(Project::class, 'Assign_client', 'id');
    }
    protected static function newFactory(): Factory
    {
        return ClientFactory::new();
    }
}
