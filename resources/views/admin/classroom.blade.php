<x-admin.layout>

    <div class="p-6">

        <div class="flex items-center justify-between mb-6">

            <h1 class="text-3xl font-bold text-white">
                {{ $title ?? 'Classroom' }}
            </h1>

            <button type="button"
                class="bg-blue-600 hover:bg-blue-700 text-white text-base font-medium px-5 py-2.5 rounded-lg shadow-lg">

                Tambah Classroom

            </button>

        </div>


        <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md">

            <div class="flex items-center justify-end px-5 py-4">

                <input type="text" placeholder="Cari Classroom"
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
                                Major
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach ($classrooms as $index => $classroom)
                            <tr class="border-b border-gray-700 hover:bg-gray-700/60">

                                <td class="px-5 py-4 font-medium text-white">
                                    {{ $index + 1 }}
                                </td>

                                <td class="px-5 py-4 font-medium text-white">
                                    {{ $classroom->name }}
                                </td>

                                <td class="px-5 py-4">
                                    {{ $classroom->major }}
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

