@extends('layouts.navmin') {{-- Atau layout admin Anda, misal layouts.navmin jika masih sama --}}

@section('konten')
<div class="bg-gray-100 min-h-screen">
    {{-- Header Konten Manajemen Kelas --}}
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-800 mb-2 sm:mb-0">
                Manajemen Data Kelas
            </h1>
            <button data-modal-target="modalTambahEditKelas" data-modal-toggle="modalTambahEditKelas" data-action="add"
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Tambah Kelas Baru
            </button>
        </div>
    </header>

    <main class="container mx-auto p-4 sm:p-6 lg:p-8">
        {{-- Filter dan Pencarian (Opsional) --}}
        <div class="mb-6 p-4 bg-white rounded-lg shadow">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="search_nama_kelas" class="block text-sm font-medium text-gray-700 mb-1">Cari Nama Kelas</label>
                    <input type="text" name="search_nama_kelas" id="search_nama_kelas" placeholder="Contoh: X RPL 1"
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="filter_tingkat" class="block text-sm font-medium text-gray-700 mb-1">Filter Tingkat</label>
                    <select id="filter_tingkat" name="filter_tingkat"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="">Semua Tingkat</option>
                        <option value="X">X (Sepuluh)</option>
                        <option value="XI">XI (Sebelas)</option>
                        <option value="XII">XII (Dua Belas)</option>
                        {{-- Tambahkan opsi tingkat lainnya sesuai kebutuhan --}}
                    </select>
                </div>
                <div>
                    <label for="filter_wali_kelas" class="block text-sm font-medium text-gray-700 mb-1">Filter Wali Kelas</label>
                    <select id="filter_wali_kelas" name="filter_wali_kelas"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="">Semua Guru</option>
                        {{-- Loop daftar guru di sini --}}
                        <option value="1">Bapak Maman S.Kom</option>
                        <option value="2">Ibu Komariah S.Kom</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Tabel Daftar Kelas --}}
        <div class="bg-white p-6 rounded-lg shadow-lg overflow-x-auto">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Daftar Kelas Terdaftar</h3>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>
                        <th scope="col" class="px-6 py-3">Nama Kelas</th>
                        <th scope="col" class="px-6 py-3">Tingkat</th>
                        <th scope="col" class="px-6 py-3">Jurusan</th>
                        <th scope="col" class="px-6 py-3">Wali Kelas</th>
                        <th scope="col" class="px-6 py-3 text-center">Jumlah Siswa</th>
                        <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Contoh Baris Data Kelas (Idealnya dari loop data dinamis) --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4 font-medium text-gray-900">X RPL 1</td>
                        <td class="px-6 py-4">X (Sepuluh)</td>
                        <td class="px-6 py-4">Rekayasa Perangkat Lunak</td>
                        <td class="px-6 py-4">Bapak Maman S.Kom</td>
                        <td class="px-6 py-4 text-center">32</td>
                        <td class="px-6 py-4 text-center">
                            <button data-modal-target="modalTambahEditKelas" data-modal-toggle="modalTambahEditKelas" data-action="edit" data-id="1" {{-- Ganti dengan ID kelas dinamis --}}
                                    class="font-medium text-blue-600 hover:text-blue-800 mr-2" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button data-modal-target="modalHapusKelas" data-modal-toggle="modalHapusKelas" data-id="1" {{-- Ganti dengan ID kelas dinamis --}}
                                    class="font-medium text-red-600 hover:text-red-800" title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4 font-medium text-gray-900">XI TKJ 2</td>
                        <td class="px-6 py-4">XI (Sebelas)</td>
                        <td class="px-6 py-4">Teknik Komputer Jaringan</td>
                        <td class="px-6 py-4">Ibu Komariah S.Kom</td>
                        <td class="px-6 py-4 text-center">30</td>
                        <td class="px-6 py-4 text-center">
                            <button data-modal-target="modalTambahEditKelas" data-modal-toggle="modalTambahEditKelas" data-action="edit" data-id="2" class="font-medium text-blue-600 hover:text-blue-800 mr-2" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" /><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" /></svg>
                            </button>
                            <button data-modal-target="modalHapusKelas" data-modal-toggle="modalHapusKelas" data-id="2" class="font-medium text-red-600 hover:text-red-800" title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                            </button>
                        </td>
                    </tr>
                    {{-- Akhir Contoh Baris Data --}}
                </tbody>
            </table>
            {{-- Navigasi Paginasi (jika diperlukan) --}}
            <div class="mt-6">
                {{-- Placeholder untuk pagination jika data banyak --}}
                {{-- $daftarKelas->links() --}}
            </div>
        </div>
    </main>
</div>

{{-- Modal Tambah/Edit Kelas --}}
<div id="modalTambahEditKelas" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900" id="modalKelasTitle">
                    Tambah Kelas Baru
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modalTambahEditKelas">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Tutup modal</span>
                </button>
            </div>
            <form class="p-4 md:p-5" id="formKelas">
                <input type="hidden" name="kelas_id" id="kelas_id"> {{-- Untuk mode edit --}}
                <div class="grid gap-4 mb-4 grid-cols-1">
                    <div>
                        <label for="nama_kelas" class="block mb-2 text-sm font-medium text-gray-900">Nama Kelas <span class="text-red-500">*</span></label>
                        <input type="text" name="nama_kelas" id="nama_kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Contoh: X RPL 1, VII A" required>
                    </div>
                    <div>
                        <label for="tingkat_kelas" class="block mb-2 text-sm font-medium text-gray-900">Tingkat Kelas <span class="text-red-500">*</span></label>
                        <select name="tingkat_kelas" id="tingkat_kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="">Pilih Tingkat</option>
                            <option value="I">I (Satu)</option>
                            <option value="II">II (Dua)</option>
                            <option value="III">III (Tiga)</option>
                            <option value="IV">IV (Empat)</option>
                            <option value="V">V (Lima)</option>
                            <option value="VI">VI (Enam)</option>
                            <option value="VII">VII (Tujuh)</option>
                            <option value="VIII">VIII (Delapan)</option>
                            <option value="IX">IX (Sembilan)</option>
                            <option value="X">X (Sepuluh)</option>
                            <option value="XI">XI (Sebelas)</option>
                            <option value="XII">XII (Dua Belas)</option>
                        </select>
                    </div>
                    <div>
                        <label for="jurusan_kelas" class="block mb-2 text-sm font-medium text-gray-900">Jurusan (Opsional)</label>
                        <input type="text" name="jurusan_kelas" id="jurusan_kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Contoh: IPA, IPS, RPL, Umum">
                    </div>
                     <div>
                        <label for="wali_kelas_id" class="block mb-2 text-sm font-medium text-gray-900">Wali Kelas <span class="text-red-500">*</span></label>
                        <select name="wali_kelas_id" id="wali_kelas_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="">Pilih Wali Kelas</option>
                            {{-- Loop daftar guru di sini --}}
                            <option value="1">Bapak Maman S.Kom</option>
                            <option value="2">Ibu Komariah S.Kom</option>
                            <option value="3">Bapak Agus Prayitno S.Pd</option>
                        </select>
                    </div>
                </div>
                <button type="submit" id="btnSimpanKelas" class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Simpan Data Kelas
                </button>
            </form>
        </div>
    </div>
</div>

{{-- Modal Konfirmasi Hapus Kelas --}}
<div id="modalHapusKelas" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modalHapusKelas">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                <span class="sr-only">Tutup modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-red-500 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-700">Apakah Anda yakin ingin menghapus kelas <span id="namaKelasHapus" class="font-semibold"></span> ini?</h3>
                <p class="text-sm text-gray-500 mb-5">Tindakan ini tidak dapat dibatalkan. Semua data siswa yang terkait dengan kelas ini mungkin juga akan terpengaruh.</p>
                <button data-modal-hide="modalHapusKelas" type="button" id="btnKonfirmasiHapus" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya, Hapus
                </button>
                <button data-modal-hide="modalHapusKelas" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Batalkan
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Logika untuk Modal Tambah/Edit Kelas
    const modalTambahEditKelas = document.getElementById('modalTambahEditKelas');
    const modalKelasTitle = document.getElementById('modalKelasTitle');
    const formKelas = document.getElementById('formKelas');
    const kelasIdInput = document.getElementById('kelas_id');
    const btnSimpanKelas = document.getElementById('btnSimpanKelas');

    // Menangani klik tombol "Tambah Kelas Baru"
    document.querySelectorAll('[data-modal-target="modalTambahEditKelas"][data-action="add"]').forEach(button => {
        button.addEventListener('click', () => {
            modalKelasTitle.textContent = 'Tambah Kelas Baru';
            formKelas.reset(); // Kosongkan form
            kelasIdInput.value = ''; // Pastikan ID kosong untuk mode tambah
            btnSimpanKelas.innerHTML = `<svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg> Simpan Data Kelas`;
        });
    });

    // Menangani klik tombol "Edit" pada setiap baris tabel
    document.querySelectorAll('[data-modal-target="modalTambahEditKelas"][data-action="edit"]').forEach(button => {
        button.addEventListener('click', () => {
            modalKelasTitle.textContent = 'Edit Data Kelas';
            const kelasId = button.dataset.id;
            kelasIdInput.value = kelasId; // Set ID untuk mode edit
            btnSimpanKelas.innerHTML = 'Update Data Kelas'; // Ubah teks tombol

            // TODO: Ambil data kelas dari server berdasarkan kelasId dan isi form
            // Contoh pengisian data (ganti dengan data aktual):
            // const row = button.closest('tr');
            // document.getElementById('nama_kelas').value = row.cells[1].textContent;
            // document.getElementById('tingkat_kelas').value = row.cells[2].textContent.split(' ')[0]; // Ambil 'X' dari 'X (Sepuluh)'
            // document.getElementById('jurusan_kelas').value = row.cells[3].textContent;
            // document.getElementById('wali_kelas_id').value = '1'; // Ganti dengan ID wali kelas yg sesuai

            console.log('Edit kelas ID:', kelasId);
            // Simulasi pengisian form untuk edit (gantilah dengan fetch data dari server)
            if (kelasId === "1") {
                document.getElementById('nama_kelas').value = "X RPL 1";
                document.getElementById('tingkat_kelas').value = "X";
                document.getElementById('jurusan_kelas').value = "Rekayasa Perangkat Lunak";
                document.getElementById('wali_kelas_id').value = "1"; // Sesuaikan dengan value guru
            } else if (kelasId === "2") {
                 document.getElementById('nama_kelas').value = "XI TKJ 2";
                document.getElementById('tingkat_kelas').value = "XI";
                document.getElementById('jurusan_kelas').value = "Teknik Komputer Jaringan";
                document.getElementById('wali_kelas_id').value = "2"; // Sesuaikan dengan value guru
            }
        });
    });

    // Menangani submit form Tambah/Edit Kelas
    formKelas.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());
        
        if (data.kelas_id) {
            // Mode Edit
            console.log('Mengupdate kelas:', data);
            // TODO: Kirim data ke server untuk update (misalnya via AJAX/Fetch API)
        } else {
            // Mode Tambah
            console.log('Menambah kelas baru:', data);
            // TODO: Kirim data ke server untuk tambah (misalnya via AJAX/Fetch API)
        }
        // Setelah berhasil, tutup modal dan refresh tabel (atau tambahkan baris baru secara dinamis)
        // Flowbite.getInstance('Modal', 'modalTambahEditKelas').hide();
        alert('Data (pura-pura) disimpan! Cek console log.');
    });


    // Logika untuk Modal Hapus Kelas
    const modalHapusKelas = document.getElementById('modalHapusKelas');
    const namaKelasHapusText = document.getElementById('namaKelasHapus');
    const btnKonfirmasiHapus = document.getElementById('btnKonfirmasiHapus');
    let kelasIdToDelete = null;

    document.querySelectorAll('[data-modal-target="modalHapusKelas"]').forEach(button => {
        button.addEventListener('click', () => {
            kelasIdToDelete = button.dataset.id;
            // Ambil nama kelas dari tabel untuk ditampilkan di modal (contoh)
            const row = button.closest('tr');
            const namaKelas = row.cells[1].textContent;
            namaKelasHapusText.textContent = namaKelas;
            console.log('Hapus kelas ID:', kelasIdToDelete, 'Nama:', namaKelas);
        });
    });

    btnKonfirmasiHapus.addEventListener('click', () => {
        if (kelasIdToDelete) {
            console.log('Mengkonfirmasi hapus kelas ID:', kelasIdToDelete);
            // TODO: Kirim request hapus ke server berdasarkan kelasIdToDelete
            // Setelah berhasil, tutup modal dan refresh tabel
            // Flowbite.getInstance('Modal', 'modalHapusKelas').hide();
            alert('Kelas (pura-pura) dihapus! Cek console log.');
            kelasIdToDelete = null; // Reset
        }
    });

    // Pastikan Flowbite diinisialisasi jika Anda menggunakannya untuk modal secara global
    // initFlowbite(); // Jika Anda memanggilnya secara global di layout
});
</script>
@endpush