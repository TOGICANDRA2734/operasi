@extends('layouts.app', ['title' => 'Homepage | PT RCI | PMA 2023'])

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16 overflow-hidden">
    <!-- General Report -->
    <div class="grid grid-cols-6 gap-12 xl:grid-cols-1">

        <!-- card -->
        <div class="report-card relative pb-0">
            <img class="w-20 h-auto absolute rounded-full z-10 " src="{{asset('icon/mendung.GIF')}}" style="right: -2rem; top: -1.5rem;" alt="Asset">
            <a href="{{route('data-prod.show', 1)}}">
                <div class="card border-red-100 pb-0">
                    <div class="card-body flex flex-col border pb-0">
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
                                    <h1 class="text-xl font-bold num-4"></h1>
                                </div>
                                <div class="rounded-full text-white badge bg-teal-400 text-xs h-5">
                                    12%
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-3">
                                <div class="flex flex-col">
                                    <p>Coal <span class="text-xs opacity-80">(mt)</span></p>
                                    <h1 class="text-xl font-bold num-4"></h1>
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
            </a>
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


    <!-- Sales Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Month To Date</h1>

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

            <div class="p-8">
                <h2 class="h5 text-gray-700">Overburden</h2>
                <h1 class="h2">5,337</h1>
                <p class="text-black font-medium">BCM</p>

                <div class="mt-20 mb-2 flex items-center">
                    <div class="py-1 px-3 rounded bg-green-200 text-green-900 mr-3">
                        <i class="fa fa-caret-up"></i>
                    </div>
                    <p class="text-black"><span class="num-2 text-green-400"></span><span class="text-green-400">% more sales</span> in comparison to last month.</p>
                </div>

                <div class="flex items-center">
                    <div class="py-1 px-3 rounded bg-red-200 text-red-900 mr-3">
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <p class="text-black"><span class="num-2 text-red-400"></span><span class="text-red-400">% revenue per sale</span> in comparison to last month.</p>
                </div>

                <a href="#" class="btn-shadow mt-6">view details</a>

            </div>

            <div class="">
                <div id="sealsOverview"></div>
            </div>

        </div>
        <!-- end body -->

    </div>
    <!-- end Sales Overview -->

</div>
@endsection