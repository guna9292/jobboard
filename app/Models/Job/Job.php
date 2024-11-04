<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    //
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = [
        'id',
        'job_title',
        'job_region',
        'company',
        'job_type',
        'vacancy',
        'experience',
        'salary',
        'Gender',
        'application_deadline',
        'jobdescription',
        'responsibilities',
        'education_experience',
        'otherbenefits',
        'image',
        'category',
        'url',
        'created_at',
        'updated_at',
    ];
    public $timestamps = false;

}
