<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadTugas extends Model
{
    /** @use HasFactory<\Database\Factories\UploadTugasFactory> */
    use HasFactory, HasUuids;
    protected $primaryKey = 'tugasID';
}
