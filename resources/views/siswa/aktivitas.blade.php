@extends('layouts.nav')
@section('konten')
<body class="bg-[#050A24] font-sans">
  

    <!-- Filters -->
    <div class="flex justify-end gap-4 px-6 py-4 bg-white 50">
      <select class="border border-gray-300 rounded px-3 py-1">
        <option>Bulan</option>
        <option>Januari</option>
        <option>Februari</option>
      </select>
      <select class="border border-gray-300 rounded px-3 py-1">
        <option>Semua</option>
        <option>Menabung</option>
        <option>Keluar</option>
      </select>
    </div>
  
    <!-- Aktivitas List -->
    <div class="px-6">
      <!-- Februari Section -->
      <div class="bg-white 50 text-sm font-semibold px-2 py-1 w-full">Februari <span class="float-right pr-4">Rp200.000 ➤</span></div>
  
      <div class="space-y-2 py-2">
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-blue-500 text-white flex items-center justify-center text-sm">+</div>
            <div>
              <div class="font-medium">Menabung</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-blue-600 font-semibold">+Rp100.000</div>
        </div>
  
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-sm">-</div>
            <div>
              <div class="font-medium">Keluar</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-red-500 font-semibold">-Rp100.000</div>
        </div>
  
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-blue-500 text-white flex items-center justify-center text-sm">+</div>
            <div>
              <div class="font-medium">Menabung</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-blue-600 font-semibold">+Rp100.000</div>
        </div>
  
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-sm">-</div>
            <div>
              <div class="font-medium">Keluar</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-red-500 font-semibold">-Rp100.000</div>
        </div>
      </div>
  
      <!-- Januari Section -->
      <div class="bg-[#cbbaba] text-sm font-semibold px-2 py-1 w-full mt-4">Januari <span class="float-right pr-4">Rp200.000 ➤</span></div>
  
      <div class="space-y-2 py-2">
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-blue-500 text-white flex items-center justify-center text-sm">+</div>
            <div>
              <div class="font-medium">Menabung</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-blue-600 font-semibold">+Rp100.000</div>
        </div>
  
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-sm">-</div>
            <div>
              <div class="font-medium">Keluar</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-red-500 font-semibold">-Rp100.000</div>
        </div>
  
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-blue-500 text-white flex items-center justify-center text-sm">+</div>
            <div>
              <div class="font-medium">Menabung</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-blue-600 font-semibold">+Rp100.000</div>
        </div>
  
        <div class="flex justify-between items-center bg-white rounded px-4 py-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-sm">-</div>
            <div>
              <div class="font-medium">Keluar</div>
              <div class="text-xs text-gray-500">01 Feb 2025</div>
            </div>
          </div>
          <div class="text-red-500 font-semibold">-Rp100.000</div>
        </div>
      </div>
    </div>
  </body>
  </html>
@endsection
