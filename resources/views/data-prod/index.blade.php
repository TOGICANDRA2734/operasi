@extends('layouts.app', ['title' => 'Homepage | PT RCI | PMA 2023'])

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16 overflow-hidden">
    <!-- Title -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Produksi Actual
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
                                <a href="{{route('edit_data_other.index', [$dt->id, $dt->STATUS] )}}" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-400 rounded-md active:bg-yellow-600 hover:bg-yellow-900 sm:mr-1 cursor-pointer">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-between items-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                Showing 21-30 of 100
            </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                1
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                2
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                3
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                4
                            </button>
                        </li>
                        <li>
                            <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                8
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                9
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </nav>
            </span>
        </div>
    </div>
</div>

@endsection