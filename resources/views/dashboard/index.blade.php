@extends('layouts.app', ['title' => 'Homepage | PT RCI | PMA 2023'])

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16 overflow-hidden">
    <!-- Tanggal Produksi -->
    <h2 class="font-bold mb-3 text-xl text-center">Periode: {{date('l, d-m-Y', strtotime($data[0]->tgl))}}</h2>
    <hr class="mb-10">

    <!-- General Report -->
    <div class="grid grid-cols-6 gap-12 xl:grid-cols-1">

        @foreach($data as $dt)
        <!-- card -->
        <div class="report-card relative">
            <img class="w-20 h-auto absolute right-0 rounded-full z-10" src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <a href="{{route('dashboard.show', $dt->kodesite)}}">
                <div class="card border-red-100 ">
                    <div class="card-body flex flex-col border ">
                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex items-center">
                                <img class="w-10 h-10" src="http://192.168.20.100/gambar/{{$dt->gambar}}" class="h6 text-indigo-700 fad fa-shopping-cart"></img>
                                <p class="ml-3 font-bold text-black">{{$dt->namasite}}</p>
                            </div>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8 ">
                            <div class="flex justify-between items-center">
                                <div class="flex flex-col">
                                    <p>OB <span class="text-xs opacity-80">(bcm)</span></p>
                                    <h4 class="font-bold text-xl">{{number_format($dt->ob_act)}}</h4>
                                </div>
                                <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                    {{number_format($dt->ob_ach, 1)}}%
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-3">
                                <div class="flex flex-col">
                                    <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                    <h1 class="font-bold text-xl">{{number_format($dt->coal_act)}}</h1>
                                </div>
                                <div class="rounded-full text-white badge bg-teal-400 text-xs h-5 align-middle">
                                    {{number_format($dt->coal_ach, 1)}}%
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <!-- end bottom -->


                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </a>
        </div>
        <!-- end card -->
        @endforeach

    </div>
    <!-- End General Report -->


    <!-- Overburden Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Month To Date - Overburden</h1>

            <div class="flex flex-row justify-center items-center">

                <a href="">
                    <i class="fad fa-chevron-double-down mr-6"></i>
                </a>

                <a href="">
                    <i class="fad fa-ellipsis-v"></i>
                </a>

            </div>

        </div>
        <!-- end header -->

        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

            <div class="p-8 flex flex-col justify-between">
                <div class="grid grid-cols-3 gap-3">
                    <div class="">
                        <h2 class="h6 text-gray-700">Actual</h2>
                        <h1 class="h3">{{number_format($data_detail_OB_prod[0]->OB, 0, '.', ',')}}</h1>
                        <p class="text-black font-medium">BCM</p>
                    </div>
                    <div class="">
                        <h2 class="h6 text-gray-700">Plan</h2>
                        <h1 class="h3">{{number_format($data_detail_OB_plan[0]->OB, 0, '.', ',')}}</h1>
                        <p class="text-black font-medium">BCM</p>
                    </div>
                    <div class="">
                        <h2 class="h6 text-gray-700">ACH</h2>
                        @if($data_detail_OB_plan[0]->OB != 0)
                        <h1 class="h3">{{number_format($data_detail_OB_prod[0]->OB / $data_detail_OB_plan[0]->OB * 100)}}</h1>
                        @else
                        <h1 class="h3">NA</h1>
                        @endif
                        <p class="text-black font-medium">%</p>
                    </div>
                </div>


                <a href="#" class="btn-shadow mt-6">view details</a>
            </div>

            <div class="">
                <div class="chart-container">
                    <div class="pie-chart-container">
                        <canvas id="overburden"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <!-- end body -->

    </div>
    <!-- end Overburden Overview -->


    <!-- Coal Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Month To Date - Coal</h1>

            <div class="flex flex-row justify-center items-center">

                <a href="">
                    <i class="fad fa-chevron-double-down mr-6"></i>
                </a>

                <a href="">
                    <i class="fad fa-ellipsis-v"></i>
                </a>

            </div>

        </div>
        <!-- end header -->

        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

            <div class="p-8 flex flex-col justify-between">
                <div class="grid grid-cols-3 gap-3">
                    <div class="">
                        <h2 class="h6 text-gray-700">Actual</h2>
                        <h1 class="h3">{{number_format($data_detail_coal_prod[0]->coal, 0, '.', ',')}}</h1>
                        <p class="text-black font-medium">BCM</p>
                    </div>
                    <div class="">
                        <h2 class="h6 text-gray-700">Plan</h2>
                        <h1 class="h3">{{number_format($data_detail_coal_plan[0]->coal, 0, '.', ',')}}</h1>
                        <p class="text-black font-medium">BCM</p>
                    </div>
                    <div class="">
                        <h2 class="h6 text-gray-700">ACH</h2>

                        @if($data_detail_coal_plan[0]->coal != 0)
                        <h1 class="h3">{{number_format($data_detail_coal_prod[0]->coal / $data_detail_coal_plan[0]->coal * 100)}}</h1>
                        @else
                        <h1 class="h3">NA</h1>
                        @endif
                        <p class="text-black font-medium">%</p>
                    </div>
                </div>


                <a href="#" class="btn-shadow mt-6">view details</a>

            </div>

            <div class="">
                <div class="chart-container">
                    <div class="pie-chart-container">
                        <canvas id="coal"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- end body -->
    </div>
    <!-- end Coal Overview -->

    <!-- PTY Overview -->
    <!-- Tanggal Produksi -->
    <h2 class="font-bold mb-3 text-xl text-center mt-5">Productivity Report</h2>
    <hr class="my-3">
    <!-- Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5 mb-3">
        <div class="w-full overflow-x-auto max-h-96 md:max-h-[38rem]">
            <table class="w-full whitespace-no-wrap border table-auto">
                <thead class="bg-black sticky top-0 z-20">
                    <tr class="text-xs font-semibold tracking-wide text-center text-white uppercase dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                        <th rowspan="2" class="px-4 py-3 border-b border-r border-stone w-20">No</th>
                        <th rowspan="2" class="px-4 py-3 border-b border-r border-stone  sticky left-0 bg-black">No Unit</th>
                        <th rowspan="2" class="px-4 py-3 text-center border-r">Site</th>
                        <th rowspan="2" class="px-4 py-3 text-center border-r">AVG</th>
                        <th colspan="13" class="px-4 py-3 text-center border-r">Waktu</th>
                        <th rowspan="2" class="px-4 py-3 text-center border-r">Jarak</th>
                        <th rowspan="2" class="px-4 py-3 text-center border-r">Remarks</th>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-center text-white uppercase border-b dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                        @for($i=6; $i<=18; $i++)
                            <th class="px-4 py-3 border">{{$i+1}}</th>
                        @endfor
                    </tr>
                </thead>

                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($dataPty as $key => $dp)
                    <tr class="data-row text-center text-gray-700 dark:text-gray-400 ease-in-out duration-150" onclick="changeColor(this)">
                        <td class="p-2 ">
                            {{$key+1}}
                        </td>
                        @foreach($dp as $d)
                        <td class="p-2  sticky left-0 bg-white">
                            {{$d}}
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- end PTY Overview -->
</div>

<!-- javascript -->

<script>
    $(function() {
        // OVERBURDEN
        //get the OB data
        var ob_prod = JSON.parse(`<?php echo $data_prod_ob['chart_data_prod_ob']; ?>`);
        var ob_plan = JSON.parse(`<?php echo $data_plan_ob['chart_data_plan_ob']; ?>`);
        var ctx = $("#overburden");

        //Multi Chart
        var data = {
            labels: ob_prod.label,
            datasets: [{
                type: 'bar',
                label: 'Overburden',
                data: ob_prod.data,
                borderColor: 'rgb(255, 99, 132)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)'
            }, {
                type: 'line',
                label: 'Plan',
                data: ob_plan.data,
                fill: false,
                borderColor: 'rgb(54, 162, 235)'
            }]
        };

        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //   Create Mixed Chart
        var chart1 = new Chart(ctx, {
            type: "bar",
            data: data,
            options: options
        });

        // Coal
        //get the Coal data
        var coal_prod = JSON.parse(`<?php echo $data_prod_coal['chart_data_prod_coal']; ?>`);
        var coal_plan = JSON.parse(`<?php echo $data_plan_coal['chart_data_plan_coal']; ?>`);
        var ctx = $("#coal");

        //Multi Chart
        var data = {
            labels: coal_prod.label,
            datasets: [{
                type: 'bar',
                label: 'Overburden',
                data: coal_prod.data,
                borderColor: 'rgb(255, 99, 132)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)'
            }, {
                type: 'line',
                label: 'Plan',
                data: coal_plan.data,
                fill: false,
                borderColor: 'rgb(54, 162, 235)'
            }]
        };

        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //   Create Mixed Chart
        var chart2 = new Chart(ctx, {
            type: "bar",
            data: data,
            options: options
        });

    });
</script>
@endsection