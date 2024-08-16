<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LpPackage extends Model
{
    use HasFactory;
    protected $table = 'lp_packages';

    public function values()
    {
        return $this->belongsToMany(LpPkgValue::class, 'pivot_lp_package_values', 'lp_package_id', 'lp_value_id');
    }
}
