<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';

    public function values()
    {
        return $this->belongsToMany(PkgValue::class, 'pivot_package_values', 'package_id', 'pkg_value_id');
    }
}
