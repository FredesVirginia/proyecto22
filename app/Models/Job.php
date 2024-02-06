<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;


    // experience_type_id
    // job_type_id
    // payment_periodicity_id

    public const EXPERIENCE_TYPES = [

        'no_experience' => 1,
        'less_than_one_year' => 2,
        'one_to_two_years' => 3,
        'two_to_three_years' => 4,
        'three_to_five_years' => 5,
        'five_to_ten_years' => 6,
        'more_than_ten_years' => 7,

    ];

    public const START_TYPES = [

        'immediate' => 1,
        'by_agreement' => 2,
        'by_finished_job' => 3,

    ];

    public const JOB_TYPES = [

        'full_time' => 1,
        'part_time' => 2,
        'freelance' => 3,
        'temporary' => 4,
        'internship' => 5,
        'volunteer' => 6,

    ];
    public const TRANS_JOB_TYPES = [

        1 => 'Tiempo Completo',
        2 => 'Tiempo Parcial',
        3 => 'Freelance',
        4 => 'Temporario',
        5 => 'Pasantía',
        6 => 'Voluntario',

    ];


    public const PAYMENT_PERIODICITY = [

        'hourly' => 1,
        'daily' => 2,
        'weekly' => 3,
        'biweekly' => 4,
        'monthly' => 5,
        'annually' => 6,

        'by_finished_job' => 7,

    ];


}
