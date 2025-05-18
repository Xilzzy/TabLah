@extends('layouts.nav')
@section('konten')
<body class="bg-gray-100 text-gray-800">
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tabungan Siswa (Peran Guru)</h1>
    <!-- Ringkasan -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
      <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4">
        <h2 class="text-lg font-semibold">Total Tabungan</h2>
        <p class="text-3xl mt-2">Rp10.000.000</p>
      </div>
      <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4">
        <h2 class="text-lg font-semibold">Transaksi Hari Ini</h2>
        <p class="text-3xl mt-2">5</p>
      </div>
      <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4">
        <h2 class="text-lg font-semibold">Siswa Terdaftar</h2>
        <p class="text-3xl mt-2">150</p>
      </div>
    </div>

    <!-- Form Transaksi -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
      <h2 class="text-xl font-semibold mb-4">Form Transaksi</h2>
      <form id="transactionForm" class="space-y-4">
        <div>
          <label class="block text-sm font-medium mb-1" for="nama">Nama Siswa</label>
          <input type="text" id="nama" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Masukkan nama siswa">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1" for="jumlah">Jumlah (Rp)</label>
          <input type="number" id="jumlah" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Masukkan jumlah">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1" for="jenis">Jenis Transaksi</label>
          <select id="jenis" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
            <option value="setor">Setor</option>
            <option value="tarik">Tarik</option>
          </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 transition shadow">
          Tambah Transaksi
        </button>
      </form>
    </div>

    <!-- Filter dan Tombol Unduh -->
    <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-4">
      <div class="mb-2 md:mb-0">
        <label class="block text-sm font-medium mb-1" for="filterNama">Cari Nama:</label>
        <input type="text" id="filterNama" class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Cari...">
      </div>
      <button id="btnDownload" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition shadow">
        <!-- Download Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
          <path d="M3 14a1 1 0 011-1h3v-2H4a1 1 0 010-2h3V7H4a1 1 0 110-2h3V3a1 1 0 012 0v1h3a1 1 0 011 1v2h3a1 1 0 011 1h-3v2h3a1 1 0 010 2h-3v2h3a1 1 0 010 2h-3v3a1 1 0 11-2 0v-3H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
        </svg>
        Unduh Laporan
      </button>
    </div>

    <!-- Tabel Transaksi -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">No</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Jenis</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Aksi</th>
          </tr>
        </thead>
        <tbody id="transaksiBody" class="bg-white divide-y divide-gray-200">
          <!-- Contoh baris -->
          <tr class="odd:bg-gray-50 hover:bg-gray-100">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">2025-05-01</td>
            <td class="px-4 py-2">Ani</td>
            <td class="px-4 py-2">Setor</td>
            <td class="px-4 py-2">Rp50.000</td>
            <td class="px-4 py-2 text-center">
              <button class="text-blue-500 hover:text-blue-700 focus:outline-none mr-2" title="Edit">
                <!-- Edit Icon (pencil) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                  <path d="M13.828 9.172L6.828 16.171" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M14.707 7.293a1 1 0 010 1.414L8.414 15H6v-2.414l6.293-6.293a1 1 0 011.414 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
              </button>
              <button class="text-red-500 hover:text-red-700 focus:outline-none" title="Hapus">
                <!-- Delete Icon (X) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                  <path d="M6 6L14 14M14 6L6 14" stroke-linecap="round" stroke-width="2"/>
                </svg>
              </button>
            </td>
          </tr>
          <!-- Tambahkan baris lainnya -->
        </tbody>
      </table>
    </div>

    <!-- Pengingat Setoran -->
    <div class="mt-6 text-center">
      <button id="btnPengingat" class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-300 transition shadow">
        Lihat Pengingat Setoran
      </button>
    </div>
  </div>

  <!-- Modal -->
  <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div id="modalContent" class="bg-white rounded-lg p-6 w-11/12 max-w-md transform scale-0 transition-transform duration-200">
      <h2 class="text-xl font-semibold mb-4">Pengingat Setoran</h2>
      <p>Siswa berikut perlu melakukan setor:</p>
      <ul class="list-disc list-inside mt-2 text-left">
        <li>Budi - Rp100.000</li>
        <li>Citra - Rp150.000</li>
      </ul>
      <div class="mt-4 text-right">
        <button id="closeModal" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">Tutup</button>
      </div>
    </div>
  </div>

  <!-- JavaScript (Vanilla) -->
  <script>
    // Validasi Form: cek input tidak kosong
    document.getElementById('transactionForm').addEventListener('submit', function(e) {
      e.preventDefault();
      var nama = document.getElementById('nama');
      var jumlah = document.getElementById('jumlah');
      var valid = true;
      if (nama.value.trim() === '') {
        nama.classList.add('border-red-500');
        valid = false;
      } else {
        nama.classList.remove('border-red-500');
      }
      if (jumlah.value.trim() === '' || isNaN(jumlah.value) || Number(jumlah.value) <= 0) {
        jumlah.classList.add('border-red-500');
        valid = false;
      } else {
        jumlah.classList.remove('border-red-500');
      }
      if (!valid) {
        alert('Nama dan jumlah tidak boleh kosong atau salah.');
        return;
      }
      // Tambah transaksi ke tabel (contoh statis)
      var tbody = document.getElementById('transaksiBody');
      var newRow = document.createElement('tr');
      newRow.className = 'odd:bg-gray-50 hover:bg-gray-100';
      newRow.innerHTML = '<td class="px-4 py-2">*</td>' +
                         '<td class="px-4 py-2">' + new Date().toISOString().slice(0,10) + '</td>' +
                         '<td class="px-4 py-2">' + nama.value + '</td>' +
                         '<td class="px-4 py-2">' + document.getElementById('jenis').value + '</td>' +
                         '<td class="px-4 py-2">Rp' + Number(jumlah.value).toLocaleString() + '</td>' +
                         '<td class="px-4 py-2 text-center">' +
                         '<button class="text-blue-500 hover:text-blue-700 focus:outline-none mr-2" title="Edit">' +
                         '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="none" stroke="currentColor">' +
                         '<path d="M13.828 9.172L6.828 16.171" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>' +
                         '<path d="M14.707 7.293a1 1 0 010 1.414L8.414 15H6v-2.414l6.293-6.293a1 1 0 011.414 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>' +
                         '</svg>' +
                         '</button>' +
                         '<button class="text-red-500 hover:text-red-700 focus:outline-none" title="Hapus">' +
                         '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="none" stroke="currentColor">' +
                         '<path d="M6 6L14 14M14 6L6 14" stroke-linecap="round" stroke-width="2"/>' +
                         '</svg>' +
                         '</button>' +
                         '</td>';
      tbody.appendChild(newRow);
      // Reset form
      nama.value = '';
      jumlah.value = '';
    });

    // Filter Nama Siswa di tabel
    document.getElementById('filterNama').addEventListener('input', function() {
      var filter = this.value.toLowerCase();
      var rows = document.querySelectorAll('#transaksiBody tr');
      rows.forEach(function(row) {
        var namaCell = row.cells[2].textContent.toLowerCase();
        if (namaCell.includes(filter)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });

    // Modal Pengingat: tampilkan / tutup dengan transisi
    var modalOverlay = document.getElementById('modalOverlay');
    var modalContent = document.getElementById('modalContent');
    var btnPengingat = document.getElementById('btnPengingat');
    var closeModal = document.getElementById('closeModal');

    btnPengingat.addEventListener('click', function() {
      modalOverlay.classList.remove('hidden');
      // Jalankan transisi scale
      setTimeout(function() {
        modalContent.classList.remove('scale-0');
      }, 100);
    });
    closeModal.addEventListener('click', function() {
      modalContent.classList.add('scale-0');
      setTimeout(function() {
        modalOverlay.classList.add('hidden');
      }, 200);
    });
  </script>
</body>
</html>
@endsection
