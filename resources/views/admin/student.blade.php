@php
    $students = [
        [
            'nis' => '240001',
            'name' => 'ABELLIAN YODA',
            'classroom' => 'X PPLG 1',
            'status' => 'Active'
        ],
        [
            'nis' => '240002',
            'name' => 'Adista Raka Pramudya',
            'classroom' => 'X PPLG 1',
            'status' => 'Active'
        ],
        [
            'nis' => '240003',
            'name' => 'Ahmad Kenzie Javas Niscala',
            'classroom' => 'X PPLG 1',
            'status' => 'Inactive'
        ],
        [
            'nis' => '240004',
            'name' => 'Al Fatih Diar Hanif',
            'classroom' => 'X PPLG 1',
            'status' => 'Active'
        ],
        [
            'nis' => '240005',
            'name' => 'Anisa Mutiara Tunggadewi',
            'classroom' => 'X PPLG 1',
            'status' => 'Inactive'
        ],
        [
            'nis' => '240006',
            'name' => 'Arga Pramudya Yusuf',
            'classroom' => 'X PPLG 1',
            'status' => 'Active'
        ],
        [
            'nis' => '240007',
            'name' => 'Athallah Bayanaka Montazar',
            'classroom' => 'X PPLG 1',
            'status' => 'Active'
        ],
        [
            'nis' => '240008',
            'name' => 'Bhumi Aqiel Magrabhi',
            'classroom' => 'X PPLG 1',
            'status' => 'Inactive'
        ],
        [
            'nis' => '240009',
            'name' => 'Canezares Keandre Arkana Totiro',
            'classroom' => 'X PPLG 1',
            'status' => 'Active'
        ],
        [
            'nis' => '240010',
            'name' => 'DANEAL RAHMAT MAGRABI',
            'classroom' => 'X PPLG 1',
            'status' => 'Active'
        ],
    ];
@endphp

<x-admin.layout>

    <div class="p-6">

        <div class="flex items-center justify-between mb-6">

            <h1 class="text-3xl font-bold text-white">
                Student
            </h1>

            <button type="button"
                class="bg-blue-600 hover:bg-blue-700 text-white text-base font-medium px-5 py-2.5 rounded-lg shadow-lg">

                Tambah Student

            </button>

        </div>


        <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md">

            <div class="flex items-center justify-end px-5 py-4">

                <input type="text" placeholder="Cari Siswa"
                    class="w-60 bg-gray-700 border border-gray-600 text-gray-200 text-sm rounded-lg px-4 py-2.5 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400">

            </div>


            <div class="overflow-x-auto">

                <table class="w-full text-base text-left text-gray-400">

                    <thead class="text-sm uppercase bg-gray-700 text-gray-300">

                        <tr>

                            <th scope="col" class="px-5 py-4">
                                No
                            </th>

                            <th scope="col" class="px-5 py-4">
                                Name
                            </th>

                            <th scope="col" class="px-5 py-4">
                                NIS
                            </th>

                            <th scope="col" class="px-5 py-4">
                                Class
                            </th>

                            <th scope="col" class="px-5 py-4">
                                Status
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach ($students as $index => $student)
                            <tr class="border-b border-gray-700 hover:bg-gray-700/60">

                                <td class="px-5 py-4 font-medium text-white">
                                    {{ $index + 1 }}
                                </td>

                                <td class="px-5 py-4 font-medium text-white">
                                    {{ $student['name'] }}
                                </td>

                                <td class="px-5 py-4">
                                    {{ $student['nis'] }}
                                </td>

                                <td class="px-5 py-4">
                                    {{ $student['classroom'] }}
                                </td>

                                <td class="px-5 py-4">

                                    @if ($student['status'] == 'Active')
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-900 text-green-300">
                                            Active
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-900 text-red-300">
                                            Inactive
                                        </span>
                                    @endif

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>


            <div class="flex items-center justify-between px-5 py-4">


                <div class="flex items-center">

                    <button type="button"
                        class="px-4 py-2.5 text-sm font-medium text-gray-400 bg-gray-700 border border-gray-600 rounded-l-lg hover:bg-gray-600">

                        Previous

                    </button>

                    <button type="button"
                        class="px-4 py-2.5 text-sm font-medium text-white bg-gray-600 border-t border-b border-gray-600">

                        1

                    </button>

                    <button type="button"
                        class="px-4 py-2.5 text-sm font-medium text-gray-400 bg-gray-700 border border-gray-600 rounded-r-lg hover:bg-gray-600">

                        Next

                    </button>

                </div>

            </div>

        </div>

    </div>

</x-admin.layout>
