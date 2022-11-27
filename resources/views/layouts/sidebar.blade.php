<aside class="col-span-2 bg-white dark:bg-gray-800 border-r border-slate-300 dark:border-gray-900 min-h-[100vh]">
    <div>
        <span class="block text-sm px-7 text-slate-500 mt-[20.5px] mb-3 dark:text-slate-300">Home</span>
        <a href="data-presensi" class="block">
            <div
                class="{{ Request::is('data-presensi') ? 'sidebar-active' : 'hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 active:bg-gray-200 dark:active:bg-gray-600' }} w-full px-7 py-2 grid grid-cols-12">
                <i class="fad fa-clipboard-list col-span-2 self-center"></i>
                <span class="col-span-10 w-full block self-center">Presensi</span>
            </div>
        </a>
        <span class="block text-sm px-7 text-slate-500 mt-6 mb-3 dark:text-slate-300">Master Data</span>
        <a href="/karyawan" class="block">
            <div
                class="{{ Request::is('karyawan') ? 'sidebar-active' : 'hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 active:bg-gray-200 dark:active:bg-gray-600' }} w-full px-7 py-2 grid grid-cols-12">
                <i class="fad
                fa-user-tie col-span-2 self-center"></i>
                <span class="col-span-10 w-full block self-center">Karyawan</span>
            </div>
        </a>
        <a href="/master-shift" class="block">
            <div
                class="{{ Request::is('master-shift') ? 'sidebar-active' : 'hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 active:bg-gray-200 dark:active:bg-gray-600' }} w-full px-7 py-2 grid grid-cols-12">
                <i class="fad fa-clock col-span-2 self-center"></i>
                <span class="col-span-10 w-full block self-center">Shift</span>
            </div>
        </a>
    </div>
</aside>
