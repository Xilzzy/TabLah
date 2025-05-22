@extends('layouts.navmin') {{-- Atau layout admin Anda yang sesuai --}}

@section('konten')
<div class="bg-gray-100 min-h-screen">
    {{-- Header Konten Monitoring Transaksi --}}
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <h1 class="text-2xl font-semibold text-gray-800">
                Monitoring & Audit Transaksi Tabungan
            </h1>
            <p class="text-sm text-gray-600">Lihat dan kelola semua riwayat transaksi tabungan siswa.</p>
        </div>
    </header>

    <main class="container mx-auto p-4 sm:p-6 lg:p-8">
        {{-- Filter dan Pencarian --}}
        <div class="mb-6 p-4 bg-white rounded-lg shadow">
            <form id="filterTransaksiForm">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div>
                        <label for="search_siswa" class="block text-sm font-medium text-gray-700 mb-1">Cari Siswa (Nama/NISN)</label>
                        <input type="text" name="search_siswa" id="search_siswa" placeholder="Masukkan Nama atau NISN"
                               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="filter_kelas" class="block text-sm font-medium text-gray-700 mb-1">Filter Kelas</label>
                        <select id="filter_kelas" name="filter_kelas"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="">Semua Kelas</option>
                            {{-- Loop daftar kelas di sini --}}
                            <option value="1">X RPL 1</option>
                            <option value="2">XI TKJ 2</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter_jenis_transaksi" class="block text-sm font-medium text-gray-700 mb-1">Jenis Transaksi</label>
                        <select id="filter_jenis_transaksi" name="filter_jenis_transaksi"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="">Semua Jenis</option>
                            <option value="setoran">Setoran</option>
                            <option value="penarikan">Penarikan</option>
                            <option value="koreksi_masuk">Koreksi (Masuk)</option>
                            <option value="koreksi_keluar">Koreksi (Keluar)</option>
                            {{-- Tambah jenis lain jika ada, misal: biaya admin, bunga --}}
                        </select>
                    </div>
                    <div>
                        <label for="filter_tanggal" class="block text-sm font-medium text-gray-700 mb-1">Rentang Tanggal</label>
                        <input type="text" name="filter_tanggal" id="filter_tanggal" placeholder="Pilih rentang tanggal"
                               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm flatpickr-range">
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg">
                        Terapkan Filter
                    </button>
                     <button type="reset" id="resetFilter" class="ml-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-lg">
                        Reset Filter
                    </button>
                </div>
            </form>
        </div>

        {{-- Ringkasan (Opsional) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-green-50 p-4 rounded-lg shadow">
                <h4 class="text-sm font-medium text-green-700">Total Setoran (Bulan Ini)</h4>
                <p class="text-2xl font-bold text-green-600">Rp 15.500.000</p> {{-- Data dinamis --}}
            </div>
            <div class="bg-red-50 p-4 rounded-lg shadow">
                <h4 class="text-sm font-medium text-red-700">Total Penarikan (Bulan Ini)</h4>
                <p class="text-2xl font-bold text-red-600">Rp 3.350.000</p> {{-- Data dinamis --}}
            </div>
            <div class="bg-blue-50 p-4 rounded-lg shadow">
                <h4 class="text-sm font-medium text-blue-700">Total Transaksi (Bulan Ini)</h4>
                <p class="text-2xl font-bold text-blue-600">125</p> {{-- Data dinamis --}}
            </div>
        </div>

        {{-- Tabel Daftar Transaksi Tabungan --}}
        <div class="bg-white p-6 rounded-lg shadow-lg overflow-x-auto">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-700">Riwayat Semua Transaksi</h3>
                <a href="#" {{-- route('admin.reports.export_transactions') --}} class="mt-3 sm:mt-0 bg-gray-700 hover:bg-gray-800 text-white font-medium py-2 px-4 rounded-lg text-sm flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Ekspor Data (CSV/Excel)
                </a>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID Trans.</th>
                        <th scope="col" class="px-6 py-3">Tanggal & Waktu</th>
                        <th scope="col" class="px-6 py-3">Nama Siswa</th>
                        <th scope="col" class="px-6 py-3">Kelas</th>
                        <th scope="col" class="px-6 py-3">Jenis</th>
                        <th scope="col" class="px-6 py-3 text-right">Jumlah (Rp)</th>
                        <th scope="col" class="px-6 py-3 text-right">Saldo Akhir Siswa (Rp)</th>
                        <th scope="col" class="px-6 py-3">Dicatat Oleh</th>
                        <th scope="col" class="px-6 py-3">Keterangan</th>
                        <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Contoh Baris Data Transaksi --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-mono text-xs">T20250521001</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse('2025-05-21 10:30:00')->translatedFormat('d M Y, H:i') }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900">Ahmad Subagja</td>
                        <td class="px-6 py-4">X RPL 1</td>
                        <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Setoran</span></td>
                        <td class="px-6 py-4 text-right font-medium text-green-600">50.000</td>
                        <td class="px-6 py-4 text-right">150.000</td>
                        <td class="px-6 py-4">Guru A</td>
                        <td class="px-6 py-4 text-xs">Tabungan rutin</td>
                        <td class="px-6 py-4 text-center">
                            <button data-modal-target="modalDetailTransaksi" data-modal-toggle="modalDetailTransaksi" data-id="T20250521001"
                                    class="font-medium text-blue-600 hover:text-blue-800 mr-2" title="Lihat Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>
                            </button>
                             <button data-modal-target="modalTandaiTransaksi" data-modal-toggle="modalTandaiTransaksi" data-id="T20250521001"
                                    class="font-medium text-yellow-500 hover:text-yellow-700" title="Tandai untuk Tinjauan">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V17m0 4v-4m0 0H5m14 0h-7m0 0l3-3m-3 3l-3-3m-5.5-5.5A1.5 1.5 0 015.5 8H7m0 0a1.5 1.5 0 001.5-1.5V5" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    {{-- Akhir Contoh Baris Data --}}
                </tbody>
            </table>
            <div class="mt-6">
                {{-- Placeholder untuk pagination --}}
                {{-- $transactions->links() --}}
            </div>
        </div>
    </main>
</div>

{{-- Modal Detail Transaksi --}}
<div id="modalDetailTransaksi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Detail Transaksi #<span id="detailIdTransaksi"></span>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modalDetailTransaksi">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                    <span class="sr-only">Tutup modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5 space-y-3 text-sm">
                <p><strong>Tanggal:</strong> <span id="detailTanggal"></span></p>
                <p><strong>Nama Siswa:</strong> <span id="detailNamaSiswa"></span></p>
                <p><strong>Kelas:</strong> <span id="detailKelas"></span></p>
                <p><strong>Jenis Transaksi:</strong> <span id="detailJenis"></span></p>
                <p><strong>Jumlah:</strong> <span id="detailJumlah" class="font-semibold"></span></p>
                <p><strong>Saldo Akhir Saat Itu:</strong> <span id="detailSaldoAkhir"></span></p>
                <p><strong>Dicatat Oleh:</strong> <span id="detailPetugas"></span></p>
                <p><strong>Keterangan:</strong> <span id="detailKeterangan" class="italic"></span></p>
                 <p><strong>Status Tinjauan:</strong> <span id="detailStatusTinjauan" class="font-medium">Belum Ditinjau</span></p>
            </div>
             <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button data-modal-hide="modalDetailTransaksi" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Tandai Transaksi untuk Tinjauan --}}
<div id="modalTandaiTransaksi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Tandai Transaksi #<span id="tandaiIdTransaksi"></span> untuk Tinjauan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modalTandaiTransaksi">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                </button>
            </div>
            <form class="p-4 md:p-5" id="formTandaiTransaksi">
                <input type="hidden" id="hiddenTandaiIdTransaksi" name="transaction_id">
                <div>
                    <label for="alasan_tinjauan" class="block mb-2 text-sm font-medium text-gray-900">Alasan Peninjauan <span class="text-red-500">*</span></label>
                    <textarea id="alasan_tinjauan" name="alasan_tinjauan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Jelaskan mengapa transaksi ini perlu ditinjau..." required></textarea>
                </div>
                <button type="submit" class="mt-4 text-white inline-flex items-center bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Tandai Transaksi
                </button>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
{{-- Jika menggunakan Flatpickr, pastikan CSS-nya sudah di-load --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script> {{-- Lokalizasi Bahasa Indonesia --}}

<script>
document.addEventListener('DOMContentLoaded', function () {
    flatpickr(".flatpickr-range", {
        mode: "range",
        dateFormat: "d-m-Y",
        locale: "id",
    });

    // Modal Detail Transaksi Logic
    const modalDetail = document.getElementById('modalDetailTransaksi');
    if (modalDetail) {
        document.querySelectorAll('[data-modal-target="modalDetailTransaksi"]').forEach(button => {
            button.addEventListener('click', () => {
                const transactionId = button.dataset.id;
                // TODO: Fetch transaction details from server using transactionId
                // Contoh pengisian data statis:
                document.getElementById('detailIdTransaksi').textContent = transactionId;
                document.getElementById('detailTanggal').textContent = '{{ \Carbon\Carbon::parse('2025-05-21 10:30:00')->translatedFormat('d M Y, H:i') }}';
                document.getElementById('detailNamaSiswa').textContent = 'Ahmad Subagja';
                document.getElementById('detailKelas').textContent = 'X RPL 1';
                document.getElementById('detailJenis').innerHTML = '<span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Setoran</span>';
                document.getElementById('detailJumlah').textContent = 'Rp 50.000';
                document.getElementById('detailSaldoAkhir').textContent = 'Rp 150.000';
                document.getElementById('detailPetugas').textContent = 'Admin A';
                document.getElementById('detailKeterangan').textContent = 'Tabungan rutin';
                document.getElementById('detailStatusTinjauan').textContent = 'Aman'; // atau 'Perlu Tinjauan'
                // Flowbite.getInstance('Modal', 'modalDetailTransaksi').show(); // Jika menggunakan Flowbite instance
            });
        });
    }

    // Modal Tandai Transaksi Logic
    const modalTandai = document.getElementById('modalTandaiTransaksi');
    if(modalTandai) {
        document.querySelectorAll('[data-modal-target="modalTandaiTransaksi"]').forEach(button => {
            button.addEventListener('click', () => {
                const transactionId = button.dataset.id;
                document.getElementById('tandaiIdTransaksi').textContent = transactionId;
                document.getElementById('hiddenTandaiIdTransaksi').value = transactionId;
                document.getElementById('formTandaiTransaksi').reset();
                // Flowbite.getInstance('Modal', 'modalTandaiTransaksi').show(); // Jika menggunakan Flowbite instance
            });
        });

        document.getElementById('formTandaiTransaksi').addEventListener('submit', function(e) {
            e.preventDefault();
            const transactionId = document.getElementById('hiddenTandaiIdTransaksi').value;
            const alasan = document.getElementById('alasan_tinjauan').value;
            console.log(`Transaksi ${transactionId} ditandai untuk tinjauan. Alasan: ${alasan}`);
            // TODO: Kirim data ke server untuk menandai transaksi
            alert('Transaksi (pura-pura) ditandai! Cek console.');
            // Flowbite.getInstance('Modal', 'modalTandaiTransaksi').hide();
        });
    }

    // Reset filter
    const resetFilterButton = document.getElementById('resetFilter');
    if(resetFilterButton) {
        resetFilterButton.addEventListener('click', function() {
            document.getElementById('filterTransaksiForm').reset();
            if (flatpickr.instances) {
                flatpickr.instances.forEach(instance => {
                    if (instance.element.id === 'filter_tanggal') {
                        instance.clear();
                    }
                });
            }
            console.log('Filter direset');
            // TODO: Submit form filter yang kosong atau panggil fungsi untuk load semua data
        });
    }
});
</script>
@endpush