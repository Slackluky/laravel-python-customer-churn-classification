<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyseModel extends Model
{
    use HasFactory;

    protected $table = 'analytic';

    protected $fillable = [
        'gender',
        'SeniorCitizen',
        'tenure',
        'PhoneService',
        'StreamingTV',
        'InternetService',
        'PaperlessBilling',
        'MonthlyCharges',
        'TotalCharges',
        'Partner',
        'Churn'
    ];
}
