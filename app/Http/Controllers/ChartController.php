<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class ChartController extends Controller
{
    public function index()
    {
        $charts = Table::all();

        $dataPoints = [];

        foreach ($charts as $chart) {

            $dataPoints[] = array(
                "name" => $chart['id'],
                "data" => [
                    intval($chart['temp_1']),
                    intval($chart['temp_2']),
                    intval($chart['temp_3']),
                    intval($chart['ph_1']),
                ],
            );
        }

        return view("line-chart", [
            "data" => json_encode($dataPoints),
            "terms" => json_encode(array(
                "Temp 1",
                "Temp 2",
                "Temp 3",
                "pH 1",
            )),
        ]);
    }
}
