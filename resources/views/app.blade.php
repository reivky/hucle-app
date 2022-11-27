<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    @vite('resources/css/app.css')
</head>

<body>
    <header class="shadow-md absolute top-0 w-full">
        <div class="w-full flex items-center justify-between px-10 py-6 bg-white">
            <div class="font-bold text-2xl">Hucle App.</div>
            <div>
                <img src="/img/profile.jpg" class="inline-block rounded-full w-[46px] shadow-md mr-4"
                    alt="Avatar" /><span class="mr-3">Rifqi
                    Ainun Niam</span><i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </header>
    <div class="grid grid-cols-12 mt-[98px]">
        <aside class="col-span-2 bg-white border-r  border-slate-300 min-h-[100vh]">
            <div>
                <span class="block text-sm px-7 text-slate-500 mt-5 mb-3">Home</span>
                <a href="#" class="block">
                    <div
                        class="sidebar-active w-full px-7 py-2 grid grid-cols-12 hover:bg-green-300 active:bg-green-200">
                        <i class="fad fa-clipboard-list col-span-2 self-center"></i>
                        <span class="col-span-10 w-full block self-center">Presensi</span>
                    </div>
                </a>
                <span class="block text-sm px-7 text-slate-500 mt-6 mb-3">Master Data</span>
                <a href="#" class="block">
                    <div class="w-full px-7 py-2 grid grid-cols-12 hover:bg-green-300 active:bg-green-200">
                        <i class="fad fa-user-tie col-span-2 self-center"></i>
                        <span class="col-span-10 w-full block self-center">Karyawan</span>
                    </div>
                </a>
                <a href="#" class="block">
                    <div class="w-full px-7 py-2 grid grid-cols-12 hover:bg-green-300 active:bg-green-200">
                        <i class="fad fa-clock col-span-2 self-center"></i>
                        <span class="col-span-10 w-full block self-center">Shift</span>
                    </div>
                </a>
            </div>
        </aside>
        <main class="col-span-10 bg-slate-100 min-h-[100vh] pb-10">
            <div class="flex justify-between px-10 py-5 items-center bg-white border-b border-slate-300">
                <h3 class="block bold text-xl">Data Presensi</h3>
                <ol class="list-reset flex">
                    <li class="text-gray-500">Home / Presensi</li>
                </ol>
            </div>
            <div class="mx-10 mt-5">
                <div class="w-full px-2 py-2 bg-white">
                    <button data-bs-toggle="modal" data-bs-target="#modalTambah"
                        class="rounded-lg px-4 py-2 text-white bg-green-500 hover:bg-green-600"><i
                            class="fal fa-plus mr-3"></i>Tambah
                        Presensi</button>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full shadow-md">
                                    <thead class="bg-white border-b">
                                        <tr>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Nama Karyawan
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Jabatan
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Tanggal
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Jam Masuk
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Jam Pulang
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Shift
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Jumlah Jam Kerja
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @for ($i = 0; $i <= 100; $i++) --}}
                                        <tr
                                            class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                1
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                Mark
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                Otto
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                @mdo
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                Mark
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                Otto
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                Mark
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                Otto
                                            </td>
                                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                                <button title="Edit"
                                                    class="rounded-md bg-blue-500 hover:bg-blue-600 px-2 py-1 text-white"
                                                    data-bs-toggle="modal" data-bs-target="#modalEdit"><i
                                                        class="fas fa-edit"></i></button>
                                                <button title="Hapus"
                                                    class="rounded-md bg-red-500 hover:bg-red-600 px-2 py-1 text-white"
                                                    data-bs-toggle="modal" data-bs-target="#modalHapus"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        {{-- @endfor --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    {{-- Tambah Data --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalTambah" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        Tambah Presensi
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/" method="">
                    @csrf
                    <div class="modal-body relative p-4">
                        <div class="form-group mb-6">
                            <label for="nama" class="form-label inline-block mb-2 text-gray-700">Nama
                                Karyawan</label>
                            <div class="mb-3">
                                <select name="nama" id="nama"
                                    class="form-select appearance-none
                                      block
                                      w-full
                                      px-3
                                      py-1.5
                                      text-base
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding bg-no-repeat
                                      border border-solid border-gray-300
                                      rounded
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="shift" class="form-label inline-block mb-2 text-gray-700">Shift</label>
                            <div class="mb-3">
                                <select name="shift" id="shift"
                                    class="form-select appearance-none
                                      block
                                      w-full
                                      px-3
                                      py-1.5
                                      text-base
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding bg-no-repeat
                                      border border-solid border-gray-300
                                      rounded
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="jam_masuk" class="form-label inline-block mb-2 text-gray-700">Jam
                                Masuk</label>
                            <input type="time"
                                class="form-control
                              block
                              w-full
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="jam_masuk" name="jam_masuk">
                        </div>
                        <div class="form-group mb-6">
                            <label for="jam_pulang" class="form-label inline-block mb-2 text-gray-700">Jam
                                Pulang</label>
                            <input type="time"
                                class="form-control
                              block
                              w-full
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="jam_pulang" name="jam_pulang">
                        </div>
                    </div>
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button"
                            class="inline-block px-6 py-2.5 bg-gray-100 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out"
                            data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit"
                            class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out ml-1">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Edit Data --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalEdit" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        Edit Presensi
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/" method="">
                    @csrf
                    <div class="modal-body relative p-4">
                        <div class="form-group mb-6">
                            <label for="nama" class="form-label inline-block mb-2 text-gray-700">Nama
                                Karyawan</label>
                            <div class="mb-3">
                                <select name="nama" id="nama"
                                    class="form-select appearance-none
                                  block
                                  w-full
                                  px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding bg-no-repeat
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="shift" class="form-label inline-block mb-2 text-gray-700">Shift</label>
                            <div class="mb-3">
                                <select name="shift" id="shift"
                                    class="form-select appearance-none
                                  block
                                  w-full
                                  px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding bg-no-repeat
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="jam_masuk" class="form-label inline-block mb-2 text-gray-700">Jam
                                Masuk</label>
                            <input type="time"
                                class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="jam_masuk" name="jam_masuk">
                        </div>
                        <div class="form-group mb-6">
                            <label for="jam_pulang" class="form-label inline-block mb-2 text-gray-700">Jam
                                Pulang</label>
                            <input type="time"
                                class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="jam_pulang" name="jam_pulang">
                        </div>
                    </div>
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button"
                            class="inline-block px-6 py-2.5 bg-gray-100 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out"
                            data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit"
                            class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out ml-1">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalHapus" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-center p-4 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        Apakah anda yakin ?
                    </h5>
                </div>
                <div class="modal-body relative p-4 text-center">
                    <p class="text-gray-500">Data yang dihapus tidak bisa dikembalikan</p>
                </div>
                <form action="/" method="">
                    @csrf
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md bg-slate-50">
                        <button type="button"
                            class="inline-block px-6 py-2.5 bg-gray-100 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out"
                            data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit"
                            class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                            Ya, Hapus
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>
