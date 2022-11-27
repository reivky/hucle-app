@extends('layouts.main')
@section('content')
    <main class="col-span-10 bg-slate-100 dark:bg-gray-900 min-h-[100vh] pb-10">
        <div
            class="flex justify-between px-10 py-3 items-center bg-white dark:bg-gray-800 border-b border-slate-300 dark:border-gray-900">
            <h3 class="block bold text-xl dark:text-white">Data Presensi</h3>
            <ol class="list-reset flex">
                <li class="text-gray-500 dark:text-white">Home / Presensi</li>
            </ol>
        </div>
        <div class="mx-10 mt-5">
            <div class="flex justify-between w-full px-2 py-2 bg-white dark:bg-gray-800">
                <button data-bs-toggle="modal" data-bs-target="#modalTambah"
                    class="rounded-lg px-4 py-2 text-white bg-green-500 hover:bg-green-600"><i
                        class="fal fa-plus mr-3"></i>Tambah
                    Presensi
                </button>
                @if (session()->has('success'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                        <div
                            class="animate__animated animate__fadeInDown px-4 py-2 relative bg-white dark:bg-gray-900 shadow-md rounded-md text-sm flex items-center text-gray-600 dark:text-white">
                            <span class="block absolute bg-green-500 left-2 h-7 w-[0.2rem] mr-4"></span>
                            <i class="fas fa-check-circle mr-3 ml-2 text-green-500"></i>{{ session('success') }}
                        </div>
                    </div>
                @endif
                @if (session()->has('failed'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                        <div
                            class="animate__animated animate__fadeInDown px-4 py-2 relative bg-white dark:bg-gray-900 shadow-md rounded-md text-sm flex items-center text-gray-600 dark:text-white">
                            <span class="block absolute bg-red-500 left-2 h-7 w-[0.2rem] mr-4"></span>
                            <i class="fas fa-exclamation-circle mr-3 ml-2 text-red-500"></i>{{ session('failed') }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full shadow-md">
                                <thead class="bg-slate-50 dark:bg-gray-800 border-b dark:border-gray-900">
                                    <tr>
                                        <th width="5%" scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-left border-r dark:border-gray-900">
                                            No
                                        </th>
                                        <th width="15%" scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-left border-r dark:border-gray-900">
                                            Nama Karyawan
                                        </th>
                                        <th width="10%" style="width: 10%" scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-left border-r dark:border-gray-900">
                                            Jabatan
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-left border-r dark:border-gray-900">
                                            Tanggal
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-center border-r dark:border-gray-900">
                                            Jam Masuk
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-center border-r dark:border-gray-900">
                                            Jam Pulang
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-center border-r dark:border-gray-900">
                                            Shift
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-center border-r dark:border-gray-900">
                                            Jumlah Jam Kerja
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 dark:text-white px-2 py-4 text-center border-r dark:border-gray-900">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_presensis as $data)
                                        <tr
                                            class="bg-white dark:bg-gray-800 border-b dark:border-gray-900 hover:bg-gray-100">
                                            <td
                                                class="px-2 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white border-r dark:border-gray-900">
                                                {{ $loop->iteration + $data_presensis->firstItem() - 1 }}
                                            </td>
                                            <td
                                                class="text-sm text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                {{ $data->karyawan->nama }}
                                            </td>
                                            <td width="10%" style="width: 10%"
                                                class="text-sm text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                {{ $data->karyawan->jabatan }}
                                            </td>
                                            <td
                                                class="text-sm text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                {{ $data->tanggal }}
                                            </td>
                                            <td
                                                class="text-sm text-center text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                {{ $data->jam_masuk }}
                                            </td>
                                            <td
                                                class="text-sm text-center text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                {{ $data->jam_pulang }}
                                            </td>
                                            <td
                                                class="text-sm text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                {{ $data->master_shift->nama }} ({{ $data->master_shift->jam_masuk }} -
                                                {{ $data->master_shift->jam_pulang }})
                                            </td>
                                            <td
                                                class="text-sm text-center text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                {{ hoursWorked($data->jam_masuk, $data->jam_pulang) }}
                                            </td>
                                            <td
                                                class="text-sm text-center text-gray-900 dark:text-white px-2 py-4 whitespace-nowrap border-r dark:border-gray-900">
                                                <button title="Edit"
                                                    class="rounded-md bg-blue-500 hover:bg-blue-600 px-2 py-1 text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalEdit{{ $data->id }}"><i
                                                        class="fas fa-edit"></i></button>
                                                <button type="button" title="Hapus"
                                                    class="rounded-md bg-red-500 hover:bg-red-600 px-2 py-1 text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalHapus{{ $data->id }}"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                {{ $data_presensis->links('pagination::tailwind') }}
            </div>
        </div>
    </main>

    {{-- Tambah Data --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalTambah" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-gray-900 bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b dark:border-gray-900 border-gray-200 rounded-t-md dark:bg-gray-800">
                    <h5 class="text-xl font-medium leading-normal text-gray-800 dark:text-white"
                        id="exampleModalScrollableLabel">
                        Tambah Presensi
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black dark:text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/data-presensi" method="POST">
                    @csrf
                    <div class="modal-body relative p-4">
                        <div class="form-group mb-6">
                            <label for="id_karyawan" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Nama
                                Karyawan</label>
                            <div class="mb-3">
                                <select name="id_karyawan" id="id_karyawan"
                                    class="form-select appearance-none
                                   block
                                   w-full
                                   px-3
                                   py-1.5
                                   text-base
                                   font-normal
                                   text-gray-700 dark:text-white
                                   bg-white dark:bg-gray-900 bg-clip-padding bg-no-repeat
                                   border border-solid border-gray-300
                                   rounded
                                   transition
                                   ease-in-out
                                   m-0
                                   focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example" required>
                                    <option selected disabled>-- Pilih Karyawan --</option>
                                    @foreach ($karyawans as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="id_master_shift"
                                class="form-label inline-block mb-2 text-gray-700 dark:text-white">Shift</label>
                            <div class="mb-3">
                                <select name="id_master_shift" id="id_master_shift"
                                    class="form-select appearance-none
                                   block
                                   w-full
                                   px-3
                                   py-1.5
                                   text-base
                                   font-normal
                                   text-gray-700 dark:text-white
                                   bg-white dark:bg-gray-900 bg-clip-padding bg-no-repeat
                                   border border-solid border-gray-300
                                   rounded
                                   transition
                                   ease-in-out
                                   m-0
                                   focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example" required>
                                    <option selected disabled>-- Pilih Shift --</option>
                                    @foreach ($master_shifts as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }} ({{ $data->jam_masuk }}
                                            - {{ $data->jam_pulang }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="jam_masuk" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Jam
                                Masuk</label>
                            <input type="time"
                                class="form-control
                           block
                           w-full
                           px-3
                           py-1.5
                           text-base
                           font-normal
                           text-gray-700 dark:text-white
                           bg-white dark:bg-gray-900 bg-clip-padding
                           border border-solid border-gray-300
                           rounded
                           transition
                           ease-in-out
                           m-0
                           focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="jam_masuk" name="jam_masuk" required>
                        </div>
                        <div class="form-group mb-6">
                            <label for="jam_pulang" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Jam
                                Pulang</label>
                            <input type="time"
                                class="form-control
                           block
                           w-full
                           px-3
                           py-1.5
                           text-base
                           font-normal
                           text-gray-700 dark:text-white
                           bg-white dark:bg-gray-900 bg-clip-padding
                           border border-solid border-gray-300
                           rounded
                           transition
                           ease-in-out
                           m-0
                           focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="jam_pulang" name="jam_pulang" required>
                        </div>
                    </div>
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 dark:border-gray-900  dark:bg-gray-800 rounded-b-md">
                        <button type="button"
                            class="inline-block px-6 py-2.5 bg-gray-100 dark:bg-gray-500 dark:hover:bg-gray-600 dark:active:bg-gray-700 text-black dark:text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out"
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

    @foreach ($data_presensis as $data)
        {{-- Edit Data --}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
            id="modalEdit{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-gray-900 bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b dark:border-gray-900 border-gray-200 rounded-t-md dark:bg-gray-800">
                        <h5 class="text-xl font-medium leading-normal text-gray-800 dark:text-white"
                            id="exampleModalScrollableLabel">
                            Edit Presensi
                        </h5>
                        <button type="button"
                            class="btn-close box-content w-4 h-4 p-1 text-black dark:text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/data-presensi/{{ $data->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="modal-body relative p-4">
                            <div class="form-group mb-6">
                                <label for="id_karyawan"
                                    class="form-label inline-block mb-2 text-gray-700 dark:text-white">Nama
                                    Karyawan</label>
                                <div class="mb-3">
                                    <select name="id_karyawan" id="id_karyawan"
                                        class="form-select appearance-none
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700 dark:text-white
                                        bg-white dark:bg-gray-900 bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        required>
                                        @foreach ($karyawans as $karyawan)
                                            <option value="{{ $karyawan->id }}"
                                                {{ $karyawan->id == $data->id_karyawan ? 'selected' : '' }}>
                                                {{ $karyawan->nama }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <label for="id_master_shift"
                                    class="form-label inline-block mb-2 text-gray-700 dark:text-white">Shift</label>
                                <div class="mb-3">
                                    <select name="id_master_shift" id="id_master_shift"
                                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700  dark:text-white bg-white dark:bg-gray-900 bg-clip-padding bg-no-repeat border border-solid border-gray-300
                                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        required>
                                        @foreach ($master_shifts as $shift)
                                            <option value="{{ $shift->id }}"
                                                {{ $shift->id == $data->id_master_shift ? 'selected' : '' }}>
                                                {{ $shift->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <label for="jam_masuk"
                                    class="form-label inline-block mb-2 text-gray-700 dark:text-white">Jam
                                    Masuk</label>
                                <input type="time"
                                    class="form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700 dark:text-white
                                    bg-white dark:bg-gray-900 bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="jam_masuk" name="jam_masuk" value="{{ $data->jam_masuk }}" required>
                            </div>
                            <div class="form-group mb-6">
                                <label for="jam_pulang"
                                    class="form-label inline-block mb-2 text-gray-700 dark:text-white">Jam
                                    Pulang</label>
                                <input type="time"
                                    class="form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700 dark:text-white
                                    bg-white dark:bg-gray-900 bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="jam_pulang" name="jam_pulang" value="{{ $data->jam_pulang }}" required>
                            </div>
                        </div>
                        <div
                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 dark:border-gray-900 dark:bg-gray-800 rounded-b-md">
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-gray-100 dark:bg-gray-500 dark:hover:bg-gray-600 dark:active:bg-gray-700 text-black dark:text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out"
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
    @endforeach

    @foreach ($data_presensis as $data)
        {{-- Delete Modal --}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
            id="modalHapus{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-gray-800 bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header flex flex-shrink-0 items-center justify-center p-4 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800 dark:text-white"
                            id="exampleModalScrollableLabel">
                            Apakah anda yakin ?
                        </h5>
                    </div>
                    <div class="modal-body relative p-4 text-center">
                        <p class="text-gray-500 dark:text-white">Data yang dihapus tidak bisa dikembalikan</p>
                    </div>
                    <form action="data-presensi/{{ $data->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <div
                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200  dark:border-gray-900 rounded-b-md bg-slate-50 dark:bg-gray-800">
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-gray-100 dark:bg-gray-500 dark:hover:bg-gray-600 dark:active:bg-gray-700 text-black dark:text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out"
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
    @endforeach
@endsection
