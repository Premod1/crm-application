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
        'Assign_client',
        'deadline',
        'file_path'
    ];

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'Assign_user'); // Adjust the foreign key column if needed
    }

    public function assignedClient()
    {
        return $this->belongsTo(Client::class, 'Assign_client'); // Adjust the foreign key column if needed
    }




}
