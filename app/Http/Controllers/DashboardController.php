<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        /**
         * Overburden Data
         */

        $bulan = Carbon::now();

        $record_OB_prod = DB::table('pma_dailyprod_tc')
            ->select(DB::raw('RIGHT(tgl,2) as prod_tgl, SUM(OB) as OB'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->groupBy('tgl')
            ->orderBy('tgl')
            ->get();

        $record_OB_plan = DB::table('pma_dailyprod_plan')
            ->select(DB::raw('RIGHT(tgl,2) as prod_tgl, SUM(OB) as OB'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->groupBy('tgl')
            ->orderBy('tgl')
            ->get();

        $data_prod_ob = [];
        $data_plan_ob = [];

        foreach ($record_OB_prod as $row) {
            $data_prod_ob['label'][] = (int) $row->prod_tgl;
            $data_prod_ob['data'][] = $row->OB;
        }

        foreach ($record_OB_plan as $row) {
            $data_plan_ob['label'][] = (int) $row->prod_tgl;
            $data_plan_ob['data'][] = $row->OB;
        }

        $data_prod_ob['chart_data_prod_ob'] = json_encode($data_prod_ob);
        $data_plan_ob['chart_data_plan_ob'] = json_encode($data_plan_ob);


        $data_detail_OB_prod = DB::table('pma_dailyprod_tc')
            ->select(DB::raw('SUM(OB) as OB'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->get();

        $data_detail_OB_plan = DB::table('pma_dailyprod_plan')
            ->select(DB::raw('SUM(OB) as OB'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->get();


        /**
         * Coal Data
         */
        $record_coal_prod = DB::table('pma_dailyprod_tc')
            ->select(DB::raw('RIGHT(tgl,2) as prod_tgl, SUM(coal) as coal'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->groupBy('tgl')
            ->orderBy('tgl')
            ->get();

        $record_coal_plan = DB::table('pma_dailyprod_plan')
            ->select(DB::raw('RIGHT(tgl,2) as prod_tgl, SUM(coal) as coal'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->groupBy('tgl')
            ->orderBy('tgl')
            ->get();

        $data_prod_coal = [];
        $data_plan_coal = [];

        foreach ($record_coal_prod as $row) {
            $data_prod_coal['label'][] = (int) $row->prod_tgl;
            $data_prod_coal['data'][] = $row->coal;
        }

        foreach ($record_coal_plan as $row) {
            $data_plan_coal['label'][] = (int) $row->prod_tgl;
            $data_plan_coal['data'][] = $row->coal;
        }

        $data_prod_coal['chart_data_prod_coal'] = json_encode($data_prod_coal);
        $data_plan_coal['chart_data_plan_coal'] = json_encode($data_plan_coal);

        $data_detail_coal_prod = DB::table('pma_dailyprod_tc')
            ->select(DB::raw('SUM(coal) as coal'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->get();

        $data_detail_coal_plan = DB::table('pma_dailyprod_plan')
            ->select(DB::raw('SUM(coal) as coal'))
            ->whereBetween('tgl', [$bulan->startOfMonth()->copy(), $bulan->endOfMonth()->copy()])
            ->get();


        // Data Detail OB & Coal Per Site
        $totalOBHarian = DB::table('pma_dailyprod_tc')
            ->select(DB::raw('SUM(ob) totalOb, SUM(coal) totalCoal'))
            ->whereDate('tgl', '=', DB::raw('SUBDATE(CURDATE(), 1)'))
            ->where('kodesite', '=', 'I')
            ->get();


        $subquery = "SELECT A.tgl, SUM(A.ob)ob_act,SUM(A.coal)coal_act,SUM(B.ob)ob_plan,SUM(B.coal)coal_plan,
        ((SUM(A.ob)/SUM(B.ob))*100)ob_ach,((SUM(A.coal)/SUM(B.coal))*100)coal_ach
        FROM pma_dailyprod_tc A
        JOIN (SELECT * FROM pma_dailyprod_plan WHERE tgl='2022-07-31' AND kodesite='I' GROUP BY tgl) B 
        ON A.tgl = B.tgl
        WHERE A.tgl='2022-07-31' AND A.kodesite='I'
        GROUP BY A.tgl";

        $persenTotalObHarian = collect(DB::select($subquery));
        
        $site = DB::table('site')
        ->select()
        ->where('status_website', '=', 1)
        ->orderBy('id')
        ->get();
        // dd($site);

        return view('dashboard.index', compact('data_detail_OB_prod', 'data_detail_OB_plan', 'data_prod_ob', 'data_plan_ob', 'data_detail_coal_prod', 'data_detail_coal_plan', 'data_prod_coal', 'data_plan_coal', 'totalOBHarian', 'persenTotalObHarian', 'site'));
        // $data_prod, $data_plan
    }

    public function show($site)
    {
        
        return view('dashboard.show');
    }
}
