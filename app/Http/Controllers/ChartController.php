<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class ChartController extends Controller
{
    public function index()
    {
        $charts = Table::all();

        $dataPoints1 = [];
        $dataPoints2 = [];
        $dataPoints3 = [];
        $dataPoints4 = [];
        $dataPoints5 = [];
        $dataPoints6 = [];
        $dataPoints7 = [];

        foreach ($charts as $chart) {

            $dataPoints1[] = array(
                    intval($chart['temp_1']),
            );
        }

        foreach ($charts as $chart) {

            $dataPoints2[] = array(
                    intval($chart['temp_2']),
            );
        }

        foreach ($charts as $chart) {

            $dataPoints3[] = array(
                    intval($chart['temp_3']),
            );
        }

        foreach ($charts as $chart) {

            $dataPoints4[] = array(
                    intval($chart['ph_1']),
            );
        }

        foreach ($charts as $chart) {

            $dataPoints5[] = array(
                    intval($chart['feeder_distance']),
            );
        }

        foreach ($charts as $chart) {
            $dataPoints6[] = array(
                    intval($chart['water_distance']),
            );
        }

        foreach ($charts as $chart) {
            $dataPoints7[] = array(
                    intval($chart['flow']),
            );
        }

        return view("dashboard", [
            "temp_1" => json_encode($dataPoints1),
            "temp_2" => json_encode($dataPoints2),
            "temp_3" => json_encode($dataPoints3),
            "ph_1" => json_encode($dataPoints4),
            "feeder_distance" => json_encode($dataPoints5),
            "water_distance" => json_encode($dataPoints6),
            "water_flow" => json_encode($dataPoints7),

            // dd($dataPoints)
        ]);
    }
}
