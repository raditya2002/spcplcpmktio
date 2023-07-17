<x-app-layout>
    <div class="grid grid-cols-12">
        <!-- Sidebar -->

        <x-sidebar/>

        <!-- Main Content -->
        <div class="col-span-10 overflow-y-auto  ">

            <div class="flex justify-between h-16 border-b border-black mt-4">
                <a class="text-2xl font-bold ml-8 mb-2 mt-1"> Buku Panduan Pengguna </a>
                <a class="text-2xl font-bold ml-8 mb-2 mt-1 text-right mr-8">  </a>
                <!-- Tombol Tambah -->
            </div>
            <main class="w-full min-h-screen bg-[#F6F1F1]">

                <div class="grid grid-row-5 w-full overflow-hidden shadow-sm sm:rounded-lg mt-8">
                    <div class="p-6 text-gray-900 flex items-center justify-between">
                        <div class="flex">
                            <!-- Dropdown Jumlah Data -->
                            {{-- <x-dropdown-data/> --}}
                            <!-- Tombol Tambah -->
                            <x-add-button type="submit" class="ml-6">
                                Tambah data
                            </x-add-button>
                        </div>

                        {{-- <div class="flex items-center">

                            <!-- Input Search -->
                            <x-text-input class="block w-50 border border-gray-300 rounded-md px-4 py-2 ml-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari Mata Kuliah" />
                        </div> --}}
                    </div>

                            <!-- Tabel Data -->
                            <table class="min-w-full mt-4">
                                <thead class="border-b-2 border-black">
                                    <tr>
                                        <th class="px-8 py-3 bg-[#F6F1F1] text-center text-xs leading-4 font-medium text-black uppercase tracking-wider">No</th>
                                        <th class="px-12 py-3 bg-[#F6F1F1] text-center text-xs leading-4 font-medium text-black uppercase tracking-wider">Panduan</th>
                                        <th class="px-2 py-3 bg-[#F6F1F1] text-center text-xs leading-4 font-medium text-black uppercase tracking-wider">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Tampilkan data menggunakan loop -->
                                    {{-- @foreach() --}}
                                    <tr>
                                        <td class="px-2 py-4 whitespace-no-wrap"></td>
                                        <td class="px-12 py-4 whitespace-no-wrap"></td>
                                        <td class="px-2 py-4 whitespace-no-wrap text-center space-x-2">

                                            <!-- Tombol Edit -->
                                            <x-edit-button type="submit">
                                                Edit
                                            </x-edit-button>

                                            <!-- Tombol Hapus -->
                                            <form action="" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button type="submit">
                                                    Delete
                                                </x-danger-button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
</x-app-layout>
