@extends('layouts.navmin')

@section('konten')
    <main>

        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <div class="flex justify-center mb-5"> {{-- Wrapper untuk memusatkan card judul --}}
                <div class="bg-white shadow-md rounded-4xl px-20 py-2.5 w-fit"> {{-- Card judul dengan w-fit --}}
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center">Akun siswa</h1>
                </div>
            </div>
            <div class="block max-w-7xl p-5 bg-white border border-gray-200 rounded-lg shadow-sm">


                <div class="flex justify-between items-center mb-4"> <button data-modal-target="crudAdd-modal"
                        data-modal-toggle="crudAdd-modal"
                        class="flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="mr-1 mt-[1px]">
                            <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                        </svg>
                        Tambah akun siswa
                    </button>
                    {{-- TOMBOL SEARCH --}}
                    <form class="max-w-md"> {{-- Anda mungkin ingin menghapus max-w-md jika ingin form lebih fleksibel dalam flex container, atau biarkan jika ingin membatasi lebarnya --}}
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-[300px] p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." required />
                            <button type="submit"
                                class="text-white absolute end-[5px] bottom-[5px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                        </div>
                    </form>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    NAMA
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    NISN
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    EMAIL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Muhammad Erland Rafif
                                </th>
                                <td class="px-6 py-4">
                                    0089301197
                                </td>
                                <td class="px-6 py-4">
                                    erland@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    {{-- TOMBOL EDIT --}}
                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
                                        class="inline-flex items-center justify-center p-1 text-blue-600 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 rounded-md"
                                        aria-label="Ubah data">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h8.925l-2 2H5v14h14v-6.95l2-2V19q0 .825-.587 1.413T19 21zm4-6v-4.25l9.175-9.175q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4t-.137.738t-.438.662L13.25 15zM21.025 4.4l-1.4-1.4zM11 13h1.4l5.8-5.8l-.7-.7l-.725-.7L11 11.575zm6.5-6.5l-.725-.7zl.7.7z" />
                                        </svg>
                                    </button>
                                    {{-- <a href="#" class="font-medium text-blue-600  hover:underline me-2">Edit</a> --}}
                                    {{-- <a href="#" class="font-medium text-red-600  hover:underline">Delete</a> --}}

                                    {{-- TOMBOL DELETE --}}
                                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button"
                                        class="inline-flex items-center justify-center p-1 text-red-600 hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500 rounded-md"
                                        aria-label="Hapus data">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8t-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8t-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- MODAL TAMBAH AKUN SISWA --}}
                <div id="crudAdd-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow-sm">
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-900">
                                    Tambah Akun Siswa
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-toggle="crudAdd-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <form class="p-4 md:p-5">
                                <div class="grid gap-4 mb-4 grid-cols-1">
                                    <div class="col-span-1">
                                        <label for="nama_siswa"
                                            class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                        <input type="text" name="nama_siswa" id="nama_siswa"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            placeholder="Masukkan nama siswa" required="">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="nisn_siswa"
                                            class="block mb-2 text-sm font-medium text-gray-900">NISN</label>
                                        <input type="text" name="nisn_siswa" id="nisn_siswa"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            placeholder="Masukkan NISN siswa" required="">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="email_siswa"
                                            class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                        <input type="email" name="email_siswa" id="email_siswa"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            placeholder="Masukkan email siswa" required="">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Tambah Akun
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- MODAL EDIT AKUN SISWA --}}
                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow-sm">
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-900">
                                    Edit Akun Siswa
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <form class="p-4 md:p-5">
                                <div class="grid gap-4 mb-4 grid-cols-1">
                                    <div class="col-span-1">
                                        <label for="nama_siswa"
                                            class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                        <input type="text" name="nama_siswa" id="nama_siswa"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            placeholder="Masukkan nama siswa" required="">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="nisn_siswa"
                                            class="block mb-2 text-sm font-medium text-gray-900">NISN</label>
                                        <input type="text" name="nisn_siswa" id="nisn_siswa"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            placeholder="Masukkan NISN siswa" required="">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="email_siswa"
                                            class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                        <input type="email" name="email_siswa" id="email_siswa"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            placeholder="Masukkan email siswa" required="">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">

                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- MODAL DELETE --}}
                <div id="popup-modal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow-sm">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="popup-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Tutup modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda yakin ingin menghapus Akun
                                    ini?</h3>
                                <button data-modal-hide="popup-modal" type="button"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Ya, saya yakin
                                </button>
                                <button data-modal-hide="popup-modal" type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                                    batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>

                

                <nav aria-label="Page navigation example">
                    <ul class="flex items-center -space-x-px h-10 text-base mt-3.5">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Previous</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Next</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <script>
        // JavaScript untuk menampilkan/menyembunyikan input kelas/guru berdasarkan pilihan penerima
        document.addEventListener('DOMContentLoaded', function() {
            const recipientTarget = document.getElementById('recipient_target');
            const classSelection = document.getElementById('class_selection');
            const teacherSelection = document.getElementById('teacher_selection');
            const selectedClass = document.getElementById('selected_class');
            const selectedTeacher = document.getElementById('selected_teacher');

            recipientTarget.addEventListener('change', function() {
                classSelection.classList.add('hidden');
                teacherSelection.classList.add('hidden');
                selectedClass.removeAttribute('required'); // Hapus required saat disembunyikan
                selectedTeacher.removeAttribute('required'); // Hapus required saat disembunyikan

                if (this.value === 'specific_class') {
                    classSelection.classList.remove('hidden');
                    selectedClass.setAttribute('required', 'required'); // Tambah required saat ditampilkan
                } else if (this.value === 'specific_teacher') {
                    teacherSelection.classList.remove('hidden');
                    selectedTeacher.setAttribute('required',
                        'required'); // Tambah required saat ditampilkan
                }
            });
        });
    </script>
@endsection
