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


        $subquery = "SELECT A.tgl, SUM(A.ob)ob_act,SUM(A.coal)coal_act,SUM(B.ob)ob_plan,SUM(B.coal)coal_plan,
        ((SUM(A.ob)/SUM(B.ob))*100)ob_ach,((SUM(A.coal)/SUM(B.coal))*100)coal_ach, C.kodesite, C.namasite, C.gambar
        FROM pma_dailyprod_tc A
        JOIN (SELECT * FROM pma_dailyprod_plan WHERE tgl=CURDATE()-1 GROUP BY tgl, kodesite) B 
        ON A.tgl = B.tgl
        JOIN site C
        ON A.kodesite = C.kodesite
        WHERE A.TGL=CURDATE()-1
        GROUP BY A.tgl, A.kodesite
        ORDER BY C.id";

        $data = collect(DB::select($subquery));
        return view('dashboard.index', compact('data_detail_OB_prod', 'data_detail_OB_plan', 'data_prod_ob', 'data_plan_ob', 'data_detail_coal_prod', 'data_detail_coal_plan', 'data_prod_coal', 'data_plan_coal', 'data'));
        // $data_prod, $data_plan
    }

    public function show($site)
    {
        $bulan = Carbon::now();
        $tanggal =  "TGL BETWEEN '" . $bulan->startOfMonth()->copy() . "' AND '" . $bulan->endOfMonth()->copy() . "'";
        $tanggalKedua =  "A.TGL BETWEEN '" . $bulan->startOfMonth()->copy() . "' AND '" . $bulan->endOfMonth()->copy() . "'";

        /**
         * Overburden
         */

        $subquery = "SELECT RIGHT(A.tgl, 2) tgl, SUM(A.OB) ob_act, SUM(B.OB) ob_plan
        FROM pma_dailyprod_tc A
        JOIN (SELECT * FROM pma_dailyprod_plan WHERE ".$tanggal." AND kodesite = '".$site."' GROUP BY tgl ORDER BY tgl) B
        ON A.tgl = B.tgl
        WHERE ".$tanggalKedua."
        AND A.kodesite = '".$site."'
        GROUP BY A.tgl
        ORDER BY A.tgl";

        $record_ob = collect(DB::select($subquery));

        $data_prod_ob = [];
        $data_plan_ob = [];

        foreach ($record_ob as $row) {
            $data_prod_ob['label'][] = (int) $row->tgl;
            $data_prod_ob['data'][] = $row->ob_act;
            $data_plan_ob['label'][] = (int) $row->tgl;
            $data_plan_ob['data'][] = $row->ob_plan;
        }

        $data_prod_ob['chart_data_prod_ob'] = json_encode($data_prod_ob);
        $data_plan_ob['chart_data_plan_ob'] = json_encode($data_plan_ob);

        /**
         * Coal Data
         */
        $subquery = "SELECT RIGHT(A.tgl, 2) tgl, SUM(A.coal) coal_act, SUM(B.coal) coal_plan
        FROM pma_dailyprod_tc A
        JOIN (SELECT * FROM pma_dailyprod_plan WHERE ".$tanggal." AND kodesite = '".$site."' GROUP BY tgl) B
        ON A.tgl = B.tgl
        WHERE ".$tanggalKedua."
        AND A.kodesite = '".$site."'
        GROUP BY A.tgl
        ORDER BY A.tgl";

        $record_coal = collect(DB::select($subquery));

        $data_prod_coal = [];
        $data_plan_coal = [];

        foreach ($record_coal as $row) {
            $data_prod_coal['label'][] = (int) $row->tgl;
            $data_prod_coal['data'][] = $row->coal_act;
            $data_plan_coal['label'][] = (int) $row->tgl;
            $data_plan_coal['data'][] = $row->coal_plan;
        }

        $data_prod_coal['chart_data_prod_coal'] = json_encode($data_prod_coal);
        $data_plan_coal['chart_data_plan_coal'] = json_encode($data_plan_coal);

        /**
         * Data Bulanan
         */
        $subquery = "SELECT A.tgl, A.pit, A.ob ob_act, A.coal coal_act, B.ob ob_plan, B.coal coal_plan,
        ((A.ob / B.ob)*100) ob_ach,((A.coal/B.coal)*100) coal_ach, C.kodesite, C.namasite
        FROM pma_dailyprod_tc A
        JOIN (SELECT * FROM pma_dailyprod_plan WHERE tgl BETWEEN '2022-07-01' AND '2022-07-31' AND kodesite='I' GROUP BY tgl ORDER BY tgl) B 
        ON A.tgl = B.tgl
        JOIN site C
        ON A.kodesite = C.kodesite
        WHERE A.tgl BETWEEN '2022-07-01' AND '2022-07-31' AND A.kodesite='I'
        GROUP BY A.tgl, A.pit
        ORDER BY A.tgl";

        $data = collect(DB::select($subquery));
        return view('dashboard.show', compact('data','data_prod_ob','data_plan_ob','data_prod_coal','data_plan_coal'));
    }
}
