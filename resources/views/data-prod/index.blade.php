@extends('layouts.app', ['title' => 'Homepage | PT RCI | PMA 2023'])

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16 overflow-hidden">
    <!-- Title -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Produksi Actual - {{$site[0]->namasite}}
    </h2>
    <hr class="mb-10">

    <!-- Table -->
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full ">
                <thead class="bg-black sticky top-0 z-20">
                    <tr class="text-xs font-semibold tracking-wide text-center text-white uppercase">
                        <th rowspan="2" class="px-4 py-3 border">Tanggal</th>
                        <th colspan="2" class="px-4 py-3 border">Overburden</th>
                        <th colspan="2" class="px-4 py-3 border">Coal</th>
                        <th rowspan="2" class="px-4 py-3 border w-[10rem]">Aksi</th>
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
                                {{date('d-m-Y', strtotime($dt->TGL))}}
                            </td>
                            
                            <td class="px-4 py-3 text-center">
                                {{$dt->OB_PLAN}}
                            </td>
                            <td class="px-4 py-3 text-center">
                                {{$dt->OB_ACTUAL}}
                            </td>
                            
                            <td class="px-4 py-3 text-center">
                                {{$dt->COAL_PLAN}}
                            </td>
                            <td class="px-4 py-3 text-center">
                                {{$dt->COAL_ACTUAL}}
                            </td>
                            <td class="px-4 py-3 text-center">
                                <a href="{{route('edit_data_other.index', [$dt->id, $dt->TGL, $dt->status] )}}" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-400 rounded-md active:bg-yellow-600 hover:bg-yellow-900 sm:mr-1 cursor-pointer">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection