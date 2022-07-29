<?php

namespace App\Http\Controllers;

use App\Models\dataProd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record1 = DB::table('pma_dailyprod_tc')
            ->select(DB::raw('RIGHT(tgl,2) as prod_tgl, SUM(OB) as OB'))
            ->whereBetween('tgl', ['2022-07-01', '2022-07-31'])
            ->groupBy('tgl')
            ->orderBy('tgl')
            ->get();

        $record2 = DB::table('pma_dailyprod_plan')
            ->select(DB::raw('RIGHT(tgl,2) as prod_tgl, SUM(OB) as OB'))
            ->whereBetween('tgl', ['2022-07-01', '2022-07-31'])
            ->groupBy('tgl')
            ->orderBy('tgl')
            ->get();

        $data_prod = [];
        $data_plan = [];

        foreach ($record1 as $row) {
            $data_prod['label'][] = (int) $row->prod_tgl;
            $data_prod['data'][] = $row->OB;
        }

        foreach ($record1 as $row) {
            $data_plan['label'][] = (int) $row->prod_tgl;
            $data_plan['data'][] = $row->OB;
        }

        $data_prod['chart_data_prod'] = json_encode($data_prod);
        $data_plan['chart_data_plan'] = json_encode($data_plan);

        return view('data-prod.index', $data_prod, $data_plan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('data-prod.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
