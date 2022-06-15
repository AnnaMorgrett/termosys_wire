<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
class Table extends Model
{
    use HasFactory;
    // use softDeletes;
    use Sortable;


    public $sortable = [
        'id', 'temp_1', 'ph_1', 'water_distance', 'water_flow',
        ];
}

