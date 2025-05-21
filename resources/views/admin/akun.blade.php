@extends('layouts.navmin')

@section('konten')
    <main>
        <header class="bg-white w-full h-[50px] shadow-sm">
            <div class="mx-0 max-w-7xl px-4 py-[10px]">
                <h1 class="text-lg font-bold tracking-tight text-gray-900">Akun siswa</h1>
            </div>
        </header>

        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <div class="block max-w-7xl p-5 bg-white border border-gray-200 rounded-lg shadow-sm">

                <h1 class="text-3xl font-bold tracking-tight mb-[20px] text-gray-900 text-center">Akun siswa</h1>

                <div class="flex justify-between items-center mb-4"> <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center">
                        <span>Tambah akun siswa</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24"
                            class="ms-2">
                            <path fill="currentColor"
                                d="M12 21q-.425 0-.712-.288T11 20v-7H4q-.425 0-.712-.288T3 12t.288-.712T4 11h7V4q0-.425.288-.712T12 3t.713.288T13 4v7h7q.425 0 .713.288T21 12t-.288.713T20 13h-7v7q0 .425-.288.713T12 21" />
                        </svg>
                    </button>

                    <form class="max-w-md"> <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"`
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
                                    <a href="#" class="font-medium text-blue-600  hover:underline me-2">Edit</a>
                                    <a href="#" class="font-medium text-red-600  hover:underline">Delete</a>
                                </td>
                            </tr>
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
                                    <a href="#" class="font-medium text-blue-600  hover:underline me-2">Edit</a>
                                    <a href="#" class="font-medium text-red-600  hover:underline">Delete</a>
                                </td>
                            </tr>
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
                                    <a href="#" class="font-medium text-blue-600  hover:underline me-2">Edit</a>
                                    <a href="#" class="font-medium text-red-600  hover:underline">Delete</a>
                                </td>
                            </tr>
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
                                    <a href="#" class="font-medium text-blue-600  hover:underline me-2">Edit</a>
                                    <a href="#" class="font-medium text-red-600  hover:underline">Delete</a>
                                </td>
                            </tr>
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
                                    <a href="#" class="font-medium text-blue-600  hover:underline me-2">Edit</a>
                                    <a href="#" class="font-medium text-red-600  hover:underline">Delete</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
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
@endsection
