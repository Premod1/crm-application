<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    protected $fillable = [
        'project_name',
        'project_description',
        'Assign_user',
        'Assign_client'.
        'deadline',
        'file_path'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'Assign_client', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'Assign_user', 'id');
    }

}
