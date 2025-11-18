<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    /** @use HasFactory<\Database\Factories\MateriFactory> */
    use HasFactory,HasUuids;
    protected $primaryKey = 'materiID';
}
