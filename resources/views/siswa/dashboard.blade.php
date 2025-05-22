@extends('layouts.navmin') {{-- Menggunakan layout utama Anda --}}

@section('konten')
<div class="bg-gray-100 min-h-screen">
    {{-- Header Konten Dasbor Pengguna --}}
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <h1 class="text-2xl font-semibold text-gray-800">
                Dasbor Tabungan Saya
            </h1>
            <p class="text-sm text-gray-600">Selamat Datang, [Nama Siswa/Pengguna]!</p> {{-- Ganti dengan nama pengguna dinamis --}}
        </div>
    </header>

    <main class="container mx-auto p-4 sm:p-6 lg:p-8">
        {{-- Ringkasan Saldo & Informasi Penting --}}
        <section class="mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Card 1: Saldo Saat Ini --}}
                <div class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-6 rounded-xl shadow-lg flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold">Saldo Saat Ini</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <p class="text-4xl font-bold mb-1">Rp 1.250.000</p> {{-- Data dinamis --}}
                        <p class="text-sm opacity-80">Terakhir update: {{ \Carbon\Carbon::now()->translatedFormat('d M Y, H:i') }}</p>
                    </div>
                    <a href="#" {{-- route('user.transactions.history') --}} class="mt-6 text-center bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                        Lihat Riwayat Transaksi
                    </a>
                </div>

                {{-- Card 2: Target Tabungan (Jika ada fitur ini) --}}
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-3">
                        <div class="bg-yellow-100 text-yellow-600 rounded-full p-2 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.414-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-700">Target Tabungan Aktif</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-1">Membeli Sepeda Baru</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 75%"></div> {{-- Persentase dinamis --}}
                    </div>
                    <p class="text-sm text-gray-500 text-right mb-3">Rp 750.000 / Rp 1.000.000 (75%)</p>
                    <a href="#" {{-- route('user.goals.index') --}} class="text-sm font-medium text-yellow-600 hover:text-yellow-700 hover:underline">Kelola Target Tabungan &rarr;</a>
                </div>

                {{-- Card 3: Total Setoran Bulan Ini --}}
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                     <div class="flex items-center mb-3">
                        <div class="bg-green-100 text-green-600 rounded-full p-2 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8.433 7.418c.158-.103.358-.103.516 0l3.333 2.167c.158.103.158.334 0 .437l-3.333 2.167a.36.36 0 01-.516 0V7.418z" />
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0 2a10 10 0 100-20 10 10 0 000 20z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-700">Total Setoran Bulan Ini</h3>
                    </div>
                    <p class="text-3xl font-bold text-gray-800 mb-2">Rp 250.000</p> {{-- Data dinamis --}}
                    <p class="text-sm text-gray-500">
                        <span class="text-green-500 font-semibold">+ Rp 50.000</span> dari bulan lalu
                    </p>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            {{-- Kolom Riwayat Transaksi Terbaru --}}
            <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">5 Transaksi Terakhir Saya</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">Tanggal</th>
                                <th scope="col" class="px-4 py-3">Keterangan</th>
                                <th scope="col" class="px-4 py-3">Jenis</th>
                                <th scope="col" class="px-4 py-3 text-right">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Contoh Baris Data Transaksi --}}
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">{{ \Carbon\Carbon::now()->subDays(1)->translatedFormat('d M Y') }}</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Setoran rutin mingguan</td>
                                <td class="px-4 py-3"><span class="text-green-600">Setoran</span></td>
                                <td class="px-4 py-3 text-right font-medium text-green-600">+ Rp 25.000</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">{{ \Carbon\Carbon::now()->subDays(3)->translatedFormat('d M Y') }}</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Beli buku pelajaran</td>
                                <td class="px-4 py-3"><span class="text-red-600">Penarikan</span></td>
                                <td class="px-4 py-3 text-right font-medium text-red-600">- Rp 30.000</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">{{ \Carbon\Carbon::now()->subDays(7)->translatedFormat('d M Y') }}</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Sisa uang jajan</td>
                                <td class="px-4 py-3"><span class="text-green-600">Setoran</span></td>
                                <td class="px-4 py-3 text-right font-medium text-green-600">+ Rp 15.000</td>
                            </tr>
                            {{-- Tambahkan lebih banyak baris data dinamis di sini --}}
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 text-right">
                    <a href="#" {{-- route('user.transactions.history') --}} class="text-sm font-medium text-blue-600 hover:underline">Lihat Semua Transaksi &rarr;</a>
                </div>
            </div>

            {{-- Kolom Pengumuman & Akses Cepat Pengguna --}}
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Pengumuman Sekolah</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="border-b pb-2">
                            <a href="#" class="text-blue-600 hover:underline">Jadwal pengambilan rapor semester ini.</a>
                            <p class="text-xs text-gray-500">{{ \Carbon\Carbon::now()->subDays(2)->translatedFormat('d M Y') }}</p>
                        </li>
                        <li class="border-b pb-2">
                            <a href="#" class="text-blue-600 hover:underline">Program Lomba Menabung Berhadiah!</a>
                             <p class="text-xs text-gray-500">{{ \Carbon\Carbon::now()->subDays(5)->translatedFormat('d M Y') }}</p>
                        </li>
                        <li>
                            <a href="#" {{-- route('user.announcements') --}} class="text-xs font-medium text-blue-600 hover:underline">Lihat semua pengumuman...</a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Tindakan Cepat</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" {{-- route('user.profile.edit') --}} class="block w-full text-left bg-indigo-50 hover:bg-indigo-100 text-indigo-700 font-medium py-2.5 px-4 rounded-lg transition duration-300">
                                Edit Profil Saya
                            </a>
                        </li>
                        <li>
                            <a href="#" {{-- route('user.password.change') --}} class="block w-full text-left bg-gray-50 hover:bg-gray-100 text-gray-700 font-medium py-2.5 px-4 rounded-lg transition duration-300">
                                Ubah Kata Sandi
                            </a>
                        </li>
                         {{-- Jika ada fitur 'Cara Menabung' atau 'FAQ' khusus user --}}
                        <li>
                            <a href="#" {{-- route('faq') --}} class="block w-full text-left bg-gray-50 hover:bg-gray-100 text-gray-700 font-medium py-2.5 px-4 rounded-lg transition duration-300">
                                Bantuan & FAQ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</div>

{{-- Pastikan Carbon di-import jika menggunakan \Carbon\Carbon::now()->... --}}
{{-- atau gunakan helper tanggal dari Laravel seperti `now()->subDays(1)->translatedFormat('d M Y')` --}}
@endsection