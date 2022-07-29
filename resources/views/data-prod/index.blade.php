@extends('layouts.app', ['title' => 'Homepage | PT RCI | PMA 2023'])

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16 overflow-hidden">
    <!-- Tanggal Produksi -->
    <h2 class="font-bold mb-3 text-xl text-center">Jumat, 28 Juli 2022</h2>
    <hr class="mb-10">

    <!-- General Report -->
    <div class="grid grid-cols-6 gap-12 xl:grid-cols-1">

        <!-- card -->
        <div class="report-card relative">
            <img class="w-20 h-auto absolute right-0 rounded-full z-10" src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <a href="">
                <div class="card border-red-100 ">
                    <div class="card-body flex flex-col border ">
                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex items-center">
                                <img class="w-10 h-10" src="{{asset('/icon_company/ABK.jpg')}}" class="h6 text-indigo-700 fad fa-shopping-cart"></img>
                                <p class="ml-3 font-bold text-black">ABK</p>
                            </div>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8 ">
                            <div class="flex justify-between items-center">
                                <div class="flex flex-col">
                                    <p>OB <span class="text-xs opacity-80">(bcm)</span></p>
                                    <h4 class="font-bold text-xl">{{$totalOBHarian[0]->totalOb}}</h4>
                                </div>
                                <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                    {{$persenTotalObHarian[1]->ob / $persenTotalObHarian[0]->ob * 100}}%
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-3">
                                <div class="flex flex-col">
                                    <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                    <h1 class="font-bold text-xl">{{$totalOBHarian[0]->totalCoal}}</h1>
                                </div>
                                <div class="rounded-full text-white badge bg-teal-400 text-xs h-5 align-middle">
                                    {{$persenTotalObHarian[1]->coal / $persenTotalObHarian[0]->coal * 100}}%
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


        <!-- card -->
        <div class="report-card relative">
            <img class="w-20 h-auto absolute right-0 rounded-full z-10" src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <div class="card border-red-100 ">
                <div class="card-body flex flex-col border ">
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex items-center">
                            <img class="w-10 h-10" src="{{asset('/icon_company/ABN.png')}}" class="h6 text-indigo-700 fad fa-shopping-cart"></img>
                            <p class="ml-3 font-bold text-black">ABN</p>
                        </div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8 ">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col">
                                <p>OB <span class="text-xs opacity-80">(bcm)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-3">
                            <div class="flex flex-col">
                                <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <!-- end bottom -->


                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->

        <!-- card -->
        <div class="report-card relative">
            <img class="w-20 h-auto absolute right-0 rounded-full z-10" src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <div class="card border-red-100 ">
                <div class="card-body flex flex-col border ">
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex items-center">
                            <img class="w-10 h-10" src="{{asset('/icon_company/IM.png')}}" class="h6 text-indigo-700 fad fa-shopping-cart"></img>
                            <p class="ml-3 font-bold text-black">IM</p>
                        </div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8 ">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col">
                                <p>OB <span class="text-xs opacity-80">(bcm)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-3">
                            <div class="flex flex-col">
                                <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <!-- end bottom -->


                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->

        <!-- card -->
        <div class="report-card relative">
            <img class="w-20 h-auto absolute right-0 rounded-full z-10" src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <div class="card border-red-100 ">
                <div class="card-body flex flex-col border ">
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex items-center">
                            <img class="w-10 h-10" src="{{asset('/icon_company/KE.png')}}" class="h6 text-indigo-700 fad fa-shopping-cart"></img>
                            <p class="ml-3 font-bold text-black">KE</p>
                        </div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8 ">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col">
                                <p>OB <span class="text-xs opacity-80">(bcm)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-3">
                            <div class="flex flex-col">
                                <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <!-- end bottom -->


                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="report-card relative">
            <img class="w-20 h-auto absolute right-0 rounded-full z-10" src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <div class="card border-red-100 ">
                <div class="card-body flex flex-col border ">
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex items-center">
                            <img class="w-10 h-10" src="{{asset('/icon_company/GDM.jpg')}}" class="h6 text-indigo-700 fad fa-shopping-cart"></img>
                            <p class="ml-3 font-bold text-black">GDM</p>
                        </div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8 ">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col">
                                <p>OB <span class="text-xs opacity-80">(bcm)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-3">
                            <div class="flex flex-col">
                                <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <!-- end bottom -->


                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="report-card relative">
            <img class="w-20 h-auto absolute right-0 rounded-full z-10" src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <div class="card border-red-100 ">
                <div class="card-body flex flex-col border ">
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex items-center">
                            <img class="w-10 h-10" src="{{asset('/icon_company/dummy.png')}}" class="h6 text-indigo-700 fad fa-shopping-cart"></img>
                            <p class="ml-3 font-bold text-black">ACL</p>
                        </div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8 ">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col">
                                <p>OB <span class="text-xs opacity-80">(bcm)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-3">
                            <div class="flex flex-col">
                                <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                <h1 class="font-bold text-xl num-4"></h1>
                            </div>
                            <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <!-- end bottom -->


                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->

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
                        <h1 class="h3">{{number_format($data_detail_OB_prod[0]->OB / $data_detail_OB_plan[0]->OB * 100)}}</h1>
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
                        <h1 class="h3">{{number_format($data_detail_coal_prod[0]->coal / $data_detail_coal_plan[0]->coal * 100)}}</h1>
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