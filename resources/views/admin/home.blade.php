@extends('layouts.navmin')

@section('konten')
    <div class="bg-gray-100 min-h-screen">
        <header class="bg-white shadow-sm">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <h1 class="text-2xl font-semibold text-gray-800">
                    Dashboard Admin Tabungan Sekolah
                </h1>
                <p class="text-sm text-gray-600">Selamat datang kembali, Erland!</p>
            </div>
        </header>

        <main class="container mx-auto p-4 sm:p-6 lg:p-8">
            <section class="mb-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6"> {{-- Mengubah xl:grid-cols-5 menjadi xl:grid-cols-3 agar 6 card pas --}}
                    {{-- Card 1: Total Siswa --}}
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="bg-blue-500 text-white rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.08-.996-.223-1.292M9 12c0 2.21 1.79 4 4 4s4-1.79 4-4H9zM9 12c0-2.21-1.79-4-4-4s-4 1.79-4 4h8z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Total Siswa</p>
                                <p class="text-2xl font-bold text-gray-800">1,250</p> {{-- Data dinamis --}}
                            </div>
                        </div>
                    </div>

                    {{-- Card 2: Total Saldo --}}
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="bg-green-500 text-white rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Total Saldo</p>
                                <p class="text-2xl font-bold text-gray-800">Rp 75M+</p> {{-- Data dinamis --}}
                            </div>
                        </div>
                    </div>

                    {{-- Card 3: Transaksi Hari Ini --}}
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="bg-yellow-500 text-white rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Transaksi Hari Ini</p>
                                <p class="text-2xl font-bold text-gray-800">85</p> {{-- Data dinamis --}}
                            </div>
                        </div>
                    </div>

                    {{-- Card 4: Jumlah Kelas Aktif --}}
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="bg-purple-500 text-white rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M5 6h14M5 9h14M5 12h14M5 15h14M5 18h14M9 21v-5a2 2 0 00-2-2H5a2 2 0 00-2 2v5m14 0v-5a2 2 0 00-2-2h-2a2 2 0 00-2 2v5" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Jumlah Kelas Aktif</p>
                                <p class="text-2xl font-bold text-gray-800">15</p> {{-- Data dinamis --}}
                            </div>
                        </div>
                    </div>

                    {{-- Card 5: Penarikan Pending --}}
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="bg-red-500 text-white rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Penarikan Pending</p>
                                <p class="text-2xl font-bold text-gray-800">5</p> {{-- Data dinamis --}}
                            </div>
                        </div>
                    </div>

                    {{-- Card 6: Total Guru --}}
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="bg-cyan-500 text-white rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Total Guru</p>
                                <p class="text-2xl font-bold text-gray-800">25</p> {{-- Data dinamis --}}
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                {{-- Kolom Akses Cepat --}}
                <div class="lg:col-span-1 bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Akses Cepat & Pengaturan</h3>
                    <ul class="space-y-3">
                        {{-- Baris "Tambah Pengguna Baru" DIHAPUS --}}
                        <li>
                            <a href="/akunGuru-admin" {{-- route('admin.users.index') --}}
                                class="flex items-center text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-3 rounded-md transition-colors duration-200 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-3 text-blue-500 group-hover:text-blue-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Kelola Akun Guru
                            </a>
                        </li>
                        <li>
                            <a href="/akun-admin" {{-- route('admin.users.index') --}}
                                class="flex items-center text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-3 rounded-md transition-colors duration-200 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-3 text-blue-500 group-hover:text-blue-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Kelola Akun Siswa
                            </a>
                        </li>
                        <li>
                            <a href="#" data-modal-target="crudNotif-modal" data-modal-toggle="crudNotif-modal"
                                class="flex items-center text-yellow-600 hover:text-yellow-800 hover:bg-yellow-50 p-3 rounded-md transition-colors duration-200 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-3 text-yellow-500 group-hover:text-yellow-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                Atur Notifikasi & Pengingat
                            </a>
                        </li>
                        <li>
                            <a href="/kelas-admin" {{-- route('admin.classes.index') --}}
                                class="flex items-center text-purple-600 hover:text-purple-800 hover:bg-purple-50 p-3 rounded-md transition-colors duration-200 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-3 text-purple-500 group-hover:text-purple-700" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                Kelola Data Kelas
                            </a>
                        </li>
                        <li>
                            <a href="/audit-admin" {{-- route('admin.reports.savings') --}}
                                class="flex items-center text-green-600 hover:text-green-800 hover:bg-green-50 p-3 rounded-md transition-colors duration-200 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-3 text-green-500 group-hover:text-green-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Monitoring Tabungan & Statistik
                            </a>
                        </li>
                        {{-- Baris "Audit Log Transaksi" DIHAPUS --}}
                        {{-- Baris "Hak Akses & Keamanan" DIHAPUS --}}
                    </ul>
                </div>

                {{-- Kolom Grafik (jika ada) --}}
                <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Grafik Pertumbuhan Total Tabungan</h3>
                    <div class="bg-gray-200 h-80 flex items-center justify-center rounded">
                        <p class="text-gray-500">Data Grafik Akan Tampil Di Sini</p>
                        {{-- Integrasi library chart (Chart.js, ApexCharts, dll.) --}}
                    </div>
                </div>
            </section>

            {{-- Tabel Aktivitas Terbaru (masih relevan) --}}
            <section>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Aktivitas Transaksi Terbaru</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID Transaksi</th>
                                    <th scope="col" class="px-6 py-3">Nama Siswa/Pengguna</th>
                                    <th scope="col" class="px-6 py-3">Jenis</th>
                                    <th scope="col" class="px-6 py-3">Jumlah</th>
                                    <th scope="col" class="px-6 py-3">Tanggal</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">TRX2025001</td>
                                    <td class="px-6 py-4">Siswa Contoh 1</td>
                                    <td class="px-6 py-4">Setoran</td>
                                    <td class="px-6 py-4">Rp 50.000</td>
                                    <td class="px-6 py-4">
                                        {{ \Carbon\Carbon::now()->subDays(1)->translatedFormat('d M Y, H:i') }}</td>
                                    <td class="px-6 py-4"><span
                                            class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Sukses</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">NTF2025005</td>
                                    <td class="px-6 py-4">Semua Siswa Kelas 5A</td>
                                    <td class="px-6 py-4">Notifikasi</td>
                                    <td class="px-6 py-4">-</td>
                                    <td class="px-6 py-4">
                                        {{ \Carbon\Carbon::now()->subHours(2)->translatedFormat('d M Y, H:i') }}</td>
                                    <td class="px-6 py-4"><span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Terkirim</span>
                                    </td>
                                </tr>
                                {{-- Data dinamis lainnya --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 text-right">
                        <a href="#" {{-- route('admin.activities.index') --}}
                            class="text-sm font-medium text-blue-600 hover:underline">Lihat Semua Aktivitas &rarr;</a>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
