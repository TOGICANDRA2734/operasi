@extends('../layouts.app', ['title' => 'Homepage | PT RCI | PMA 2023'])

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16 overflow-hidden">
    <!-- Title -->
    <h1 class="font-bold text-xl">Detail Site {{$data[0]->namasite}}</h1>


    <!-- carts -->
    <div class="flex flex-col mt-6">

        <!-- charts -->
        <div class="grid grid-cols-2 gap-6 h-full">

            <div class="bg-white">
                <div class="py-3 px-4 flex flex-row justify-between">
                    <h1 class="h6">
                        Overburden
                        <p>bcm</p>
                    </h1>

                    <div class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                        <i class="fad fa-eye"></i>
                    </div>
                </div>
                <div class="">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="overburden"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white">
                <div class="py-3 px-4 flex flex-row justify-between">
                    <h1 class="h6">
                        Coal
                        <p>Mt</p>
                    </h1>

                    <div class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                        <i class="fad fa-users-crown"></i>
                    </div>
                </div>
                <div class="">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="coal"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- charts    -->
    </div>
    <!-- end charts -->

    <!-- Filter -->
    <form action="#" method="GET" class="mt-3 flex justify-end items-center">
        <select class="p-1 border border-gray-100 rounded-md w-full mr-2" name="pit" id="pit">
            <option value="" selected>Semua Pit</option>
            @foreach($pit as $pt)
                <option value="{{$pt->ket}}">{{$pt->ket}}</option>
            @endforeach
        </select>
        <button class="px-3 py-1 text-sm font-medium leading-5 bg-black text-white transition-colors duration-150 border border-transparent rounded-md active:bg-stone-600 hover:bg-stone-700 focus:outline-none focus:shadow-outline-purple">
            Refresh
        </button>
    </form>
    <!-- End Filter -->

    <!-- Table -->
    <div class="w-full my-3 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full ">
                <thead class="bg-black sticky top-0 z-20">
                    <tr class="text-xs font-semibold tracking-wide text-center text-white uppercase">
                        <th rowspan="2" class="px-4 py-3 border">Tanggal</th>
                        <th colspan="2" class="px-4 py-3 border">Overburden</th>
                        <th colspan="2" class="px-4 py-3 border">Coal</th>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-center text-white uppercase">
                        <th class="px-4 py-3 border">Plan</th>
                        <th class="px-4 py-3 border">ACT</th>
                        <th class="px-4 py-3 border">Plan</th>
                        <th class="px-4 py-3 border">ACT</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($data as $dt)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-center">
                            {{date('d-m-Y', strtotime($dt->tgl))}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->ob_plan}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->ob_act}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->coal_plan}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->coal_act}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table -->

    <!-- Start Kendala -->
    <div class="w-full my-3 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full ">
                <thead class="bg-black sticky top-0 z-20">
                    <tr class="text-xs font-semibold tracking-wide text-center text-white uppercase">
                        <th rowspan="2" class="px-4 py-3 border">Tanggal</th>
                        <th rowspan="2" class="px-4 py-3 border">Nom Unit</th>
                        <th rowspan="2" class="px-4 py-3 border">Shift</th>
                        <th colspan="2" class="px-4 py-3 border">Waktu</th>
                        <th rowspan="2" class="px-4 py-3 border">Keterangan</th>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-center text-white uppercase">
                        <th class="px-4 py-3 border">Awal</th>
                        <th class="px-4 py-3 border">Akhir</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($kendala as $dt)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-center">
                            {{date('d-m-Y', strtotime($dt->tgl))}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->unit}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->shift}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->awal}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->akhir}}
                        </td>
                        <td class="px-4 py-3 text-center">
                            {{$dt->ket}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Kendala -->

</div>


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
                label: 'Actual',
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
                label: 'Actual',
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