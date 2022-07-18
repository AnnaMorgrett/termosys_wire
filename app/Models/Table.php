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
        'id', 'ph_1', 'temp_1', 'temp_2', 'temp_3', 'feeder_distance', 'water_distance', 'water_flow', 'created_at', 'updated_at',
        ];
}

