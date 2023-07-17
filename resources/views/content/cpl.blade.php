<x-app-layout>
    <div class="grid grid-cols-12">
        <!-- Sidebar -->
        <x-sidebar/>


        <!-- Main Content -->
        <div class="col-span-10 overflow-y-auto mt-8">
            <h2 class="text-2xl font-bold ml-8 mb-2 mt-2"> CPL </h2>
                <!-- Tombol Tambah -->
                <x-add-button type="submit" class="ml-6">
                    Tambah data
                </x-add-button>
            <main class="grid grid-row-5 w-full min-h-screen bg-[#F6F1F1]">

                    <div class="w-full overflow-hidden shadow-sm sm:rounded-lg mt-8">

                            <!-- Tabel Data -->
                            <table class="min-w-full mt-4">
                                <thead class="border-b-2 border-black">
                                    <tr>
                                        <th class="  px-6 py-3 bg-[#F6F1F1] text-center text-xs leading-4 font-medium text-black uppercase tracking-wider">Nama CPL</th>
                                        <th class=" px-6 py-3 bg-[#F6F1F1] text-center text-xs leading-4 font-medium text-black uppercase tracking-wider">Deskripsi</th>
                                        <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                                        <th class="px-6 py-3 bg-[#F6F1F1] text-center text-xs leading-4 font-medium text-blcak uppercase tracking-wider">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Tampilkan data menggunakan loop -->
                                    {{-- @foreach() --}}
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap"></td>
                                        <td class="px-6 py-4 whitespace-no-wrap"></td>
                                        <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                                        <td class="px-4 py-4 whitespace-no-wrap text-center">
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

