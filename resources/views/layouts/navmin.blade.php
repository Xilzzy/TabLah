<!doctype html>
<html class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="h-full bg-[#050A24]">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            {{-- Konten navigasi Anda --}}
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                {{-- Mengembalikan ke grid untuk layout desktop --}}
                <div class="grid grid-cols-3 items-center h-16">
                    {{-- Kolom 1: Logo (Kiri) --}}
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="{{ asset('images/2.png') }}" alt="Logo" class="h-15 w-auto">
                            {{-- Tinggi logo 40px, lebar auto --}}
                        </div>
                    </div>

                    {{-- Kolom 2: Menu Navigasi (Tengah) --}}
                    <div class="hidden md:flex justify-center">
                        <div class="flex space-x-4">
                            <a href="/home-admin"
                                class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                aria-current="page">Dashboard</a>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-white rounded-sm hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Akun
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="dropdownNavbar"
                                class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/akun-admin" class="block px-4 py-2 hover:bg-gray-100">Akun
                                            siswa</a>
                                    </li>
                                    <li>
                                        <a href="/akunGuru-admin" class="block px-4 py-2 hover:bg-gray-100">Akun
                                            guru</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="/kelas-admin"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelas</a>
                            <a href="/audit-admin"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Monitoring</a>
                            <button data-modal-target="crudNotif-modal" data-modal-toggle="crudNotif-modal"
                                type="button" aria-label="Atur pengingat"
                                class="text-gray-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded-md p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor" class="block">
                                    <path
                                        d="M4 19v-2h2v-7q0-2.075 1.25-3.687T10.5 4.2v-.7q0-.625.438-1.062T12 2t1.063.438T13.5 3.5v.7q2 .5 3.25 2.113T18 10v7h2v2zm8 3q-.825 0-1.412-.587T10 20h4q0 .825-.587 1.413T12 22M2 10q0-2.5 1.113-4.587T6.1 1.95l1.175 1.6q-1.5 1.1-2.387 2.775T4 10zm18 0q0-2-.888-3.675T16.726 3.55l1.175-1.6q1.875 1.375 2.988 3.463T22 10z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Kolom 3: Tombol Menu Mobile (Kanan) --}}
                    <div class="flex justify-end items-center md:hidden"> {{-- md:hidden agar hanya muncul di mobile, justify-end untuk ke kanan di kolomnya --}}
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                            aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Menu Mobile --}}
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="/home-admin"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Dashboard</a>

                    <div>
                        <button id="dropdownMobileNavbarLink" data-dropdown-toggle="dropdownMobileNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white text-base font-medium">
                            Akun
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownMobileNavbar"
                            class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-full mt-1">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMobileNavbarLink">
                                <li><a href="/akun-admin" class="block px-4 py-2 hover:bg-gray-100">Akun siswa</a>
                                </li>
                                <li><a href="/akunGuru-admin" class="block px-4 py-2 hover:bg-gray-100">Akun guru</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a href="/kelas-admin"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelas</a>
                    <a href="/audit-admin"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Monitoring</a>
                    <button data-modal-target="crudNotif-modal" data-modal-toggle="crudNotif-modal" type="button"
                        aria-label="Atur pengingat"
                        class="w-full text-left block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                        Atur Pengingat
                    </button>
                </div>
            </div>
        </nav>

        @yield('konten')
        {{-- MODAL ATUR PENGINGAT / NOTIFIKASI --}}
        <div id="crudNotif-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow-sm">
                    {{-- Header Modal --}}
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Atur Pengingat & Notifikasi
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="crudNotif-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    {{-- Form Pengaturan Notifikasi --}}
                    <form class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-1">

                            {{-- Judul Notifikasi --}}
                            <div class="col-span-1">
                                <label for="notification_title"
                                    class="block mb-2 text-sm font-medium text-gray-900">Judul Pengingat</label>
                                <input type="text" name="notification_title" id="notification_title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Contoh: Pengingat Tugas Matematika" required="">
                            </div>

                            {{-- Isi Notifikasi --}}
                            <div class="col-span-1">
                                <label for="notification_content"
                                    class="block mb-2 text-sm font-medium text-gray-900">Isi Pesan
                                    Notifikasi</label>
                                <textarea id="notification_content" name="notification_content" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-600 focus:border-primary-600"
                                    placeholder="Contoh: Jangan lupa kumpulkan tugas Matematika Bab 3 paling lambat besok pukul 17.00."></textarea>
                            </div>

                            {{-- Target Penerima --}}
                            <div class="col-span-1">
                                <label for="recipient_target"
                                    class="block mb-2 text-sm font-medium text-gray-900">Penerima
                                    Notifikasi</label>
                                <select id="recipient_target" name="recipient_target"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    required>
                                    <option value="">Pilih Penerima</option>
                                    <option value="all_students">Semua Siswa</option>
                                    <option value="all_teachers">Semua Guru</option>
                                    <option value="all_users">Semua Pengguna (Siswa & Guru)</option>
                                    <option value="specific_class">Siswa Kelas Tertentu</option> {{-- Ini akan memicu pilihan kelas, lalu pilihan siswa --}}
                                    <option value="specific_teacher">Guru Tertentu</option>
                                </select>
                            </div>

                            {{-- Input tambahan jika "specific_class" dipilih --}}
                            <div id="class_selection_container" class="col-span-1 hidden">
                                <label for="selected_class" class="block mb-2 text-sm font-medium text-gray-900">Pilih
                                    Kelas</label>
                                <select id="selected_class" name="selected_class"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                    <option value="">-- Pilih Kelas --</option>
                                    <option value="class_xirpl1">Kelas XI RPL 1</option>
                                    <option value="class_xirpl2">Kelas XI RPL 2</option>
                                    <option value="class_xirpl3">Kelas XI RPL 3</option>
                                </select>
                            </div>

                            {{-- BARU: Input tambahan untuk memilih siswa dari kelas yang dipilih --}}
                            <div id="student_from_class_selection_container" class="col-span-1 hidden">
                                <label for="selected_student_from_class"
                                    class="block mb-2 text-sm font-medium text-gray-900">Pilih Siswa dari Kelas
                                    Terpilih</label>
                                <select id="selected_student_from_class" name="selected_student_from_class"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                    <option value="">-- Pilih Siswa --</option>
                                    {{-- Opsi siswa akan diisi oleh JavaScript --}}
                                </select>
                            </div>


                            <div id="teacher_selection_container" class="col-span-1 hidden">
                                <label for="selected_teacher"
                                    class="block mb-2 text-sm font-medium text-gray-900">Pilih Guru</label>
                                <select id="selected_teacher" name="selected_teacher"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                    <option value="">-- Pilih Guru --</option>
                                    <option value="teacher_man">Bapak Maman S.Kom</option>
                                    <option value="teacher_kom">Ibu Komariah S.Kom</option>
                                </select>
                            </div>

                            {{-- Jadwal Pengiriman --}}
                            <div class="col-span-1">
                                <label for="send_time" class="block mb-2 text-sm font-medium text-gray-900">Waktu
                                    Pengiriman</label>
                                <input type="datetime-local" name="send_time" id="send_time"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    required="">
                                <p class="mt-1 text-xs text-gray-500">Pilih tanggal dan waktu notifikasi akan
                                    dikirim.</p>
                            </div>

                            {{-- Opsi Pengulangan (Opsional) --}}
                            <div class="col-span-1">
                                <label for="repeat_frequency"
                                    class="block mb-2 text-sm font-medium text-gray-900">Ulangi Notifikasi?</label>
                                <select id="repeat_frequency" name="repeat_frequency"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                    <option value="never">Tidak Ulangi</option>
                                    <option value="daily">Setiap Hari</option>
                                    <option value="weekly">Setiap Minggu</option>
                                    <option value="monthly">Setiap Bulan</option>
                                </select>
                            </div>

                        </div>

                        {{-- Tombol Submit --}}
                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Simpan Pengaturan
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const recipientTarget = document.getElementById('recipient_target');
        const classSelectionContainer = document.getElementById(
            'class_selection_container'); // Ganti ID pembungkus
        const teacherSelectionContainer = document.getElementById(
            'teacher_selection_container'); // Ganti ID pembungkus
        const studentFromClassSelectionContainer = document.getElementById(
            'student_from_class_selection_container'); // BARU

        const selectedClassDropdown = document.getElementById('selected_class');
        const selectedTeacherDropdown = document.getElementById('selected_teacher');
        const selectedStudentFromClassDropdown = document.getElementById('selected_student_from_class'); // BARU

        // Data simulasi siswa per kelas (Anda akan mengganti ini dengan data dari server)
        const studentsByClass = {
            "class_xirpl1": [{
                    id: "siswa_rpl1_1",
                    name: "Agus Setiawan (XI RPL 1)"
                },
                {
                    id: "siswa_rpl1_2",
                    name: "Budi Hartono (XI RPL 1)"
                },
                {
                    id: "siswa_rpl1_3",
                    name: "Citra Lestari (XI RPL 1)"
                }
            ],
            "class_xirpl2": [{
                    id: "siswa_rpl2_1",
                    name: "Dewi Anggraini (XI RPL 2)"
                },
                {
                    id: "siswa_rpl2_2",
                    name: "Eka Kurniawan (XI RPL 2)"
                }
            ],
            "class_xirpl3": [{
                id: "siswa_rpl3_1",
                name: "Fajar Nugraha (XI RPL 3)"
            }]
            // Tambahkan data kelas dan siswa lainnya jika perlu
        };

        function resetAndHideAllSpecificSelections() {
            classSelectionContainer.classList.add('hidden');
            teacherSelectionContainer.classList.add('hidden');
            studentFromClassSelectionContainer.classList.add('hidden'); // Sembunyikan dropdown siswa juga

            selectedClassDropdown.removeAttribute('required');
            selectedClassDropdown.value = ""; // Reset pilihan kelas
            selectedTeacherDropdown.removeAttribute('required');
            selectedTeacherDropdown.value = ""; // Reset pilihan guru
            selectedStudentFromClassDropdown.removeAttribute('required');
            selectedStudentFromClassDropdown.innerHTML =
                '<option value="">-- Pilih Siswa --</option>'; // Reset pilihan siswa
        }

        recipientTarget.addEventListener('change', function() {
            resetAndHideAllSpecificSelections(); // Sembunyikan semua dulu

            if (this.value === 'specific_class') {
                classSelectionContainer.classList.remove('hidden');
                selectedClassDropdown.setAttribute('required', 'required');
                // Dropdown siswa akan muncul setelah kelas dipilih
            } else if (this.value === 'specific_teacher') {
                teacherSelectionContainer.classList.remove('hidden');
                selectedTeacherDropdown.setAttribute('required', 'required');
            }
        });

        selectedClassDropdown.addEventListener('change', function() {
            // Sembunyikan dan reset dropdown siswa dulu setiap kali pilihan kelas berubah
            studentFromClassSelectionContainer.classList.add('hidden');
            selectedStudentFromClassDropdown.removeAttribute('required');
            selectedStudentFromClassDropdown.innerHTML = '<option value="">-- Pilih Siswa --</option>';

            const classId = this.value;
            if (classId && studentsByClass[classId]) {
                studentFromClassSelectionContainer.classList.remove('hidden');
                selectedStudentFromClassDropdown.setAttribute('required', 'required');

                const students = studentsByClass[classId];
                students.forEach(student => {
                    const option = document.createElement('option');
                    option.value = student.id;
                    option.textContent = student.name;
                    selectedStudentFromClassDropdown.appendChild(option);
                });
            }
        });

        // Panggil sekali untuk inisialisasi jika ada nilai awal (misalnya saat edit form)
        // Namun untuk form baru, ini akan memastikan semua tersembunyi dengan benar.
        resetAndHideAllSpecificSelections();
    });
</script>

</html>
