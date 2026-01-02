<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Fleet Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "primary-hover": "#0e4bca",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-white antialiased overflow-hidden">
    <div class="flex h-screen overflow-hidden">

        <?php require_once __DIR__ . "/../Components/aside.php" ?>

        <div class="flex flex-1 flex-col overflow-hidden relative">
            <header
                class="flex h-16 w-full items-center justify-between border-b border-slate-200 bg-white px-6 dark:border-slate-800 dark:bg-[#151b2b]">
                <button class="mr-4 text-slate-500 hover:text-slate-700 md:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="flex items-center gap-4 ml-auto">
                    <div class="flex items-center gap-3">
                        <div class="hidden text-right md:block">
                            <p class="text-sm font-medium text-slate-900 dark:text-white">Admin User</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Super Admin</p>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-background-light dark:bg-background-dark p-6">
                <div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Fleet Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Manage your vehicle inventory, track
                            status, and update details.</p>
                    </div>
                    <div class="flex gap-3">
                        <button
                            class="inline-flex items-center justify-center gap-2 rounded-lg bg-white border border-slate-200 px-4 py-2 text-sm font-medium text-slate-700 shadow-sm hover:bg-slate-50 dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:hover:bg-slate-700">
                            <span class="material-symbols-outlined !text-[20px]">download</span>
                            Export
                        </button>
                        <button onclick="openAddCarModal()"
                            class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                            <span class="material-symbols-outlined !text-[20px]">add_circle</span>
                            Add New Car
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Vehicles</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">45</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-300">
                                <span class="material-symbols-outlined">directions_car</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Available</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">28</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-green-50 text-green-600 dark:bg-green-900/20 dark:text-green-400">
                                <span class="material-symbols-outlined">check_circle</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Rented Out</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">12</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined">key</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">In Maintenance</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">5</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400">
                                <span class="material-symbols-outlined">build</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">All Vehicles</h3>
                        <div class="flex gap-2 w-full sm:w-auto">
                            <div class="relative flex-1 sm:flex-none">
                                <span
                                    class="absolute left-2 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[18px]">filter_list</span>
                                <select
                                    class="h-9 rounded-lg border-slate-200 bg-slate-50 pl-8 pr-4 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white w-full">
                                    <option>All Statuses</option>
                                    <option>Available</option>
                                    <option>Rented</option>
                                    <option>Maintenance</option>
                                </select>
                            </div>
                            <div class="relative flex-1 sm:flex-none">
                                <span
                                    class="absolute left-2 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[18px]">sort</span>
                                <select
                                    class="h-9 rounded-lg border-slate-200 bg-slate-50 pl-8 pr-4 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white w-full">
                                    <option>Newest First</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Vehicle Info</th>
                                    <th class="px-6 py-3 font-semibold">License Plate</th>
                                    <th class="px-6 py-3 font-semibold">Daily Rate</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-16 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Tesla Model 3 car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDliqAJSnaDbrWFrRyvHh5ej2KQxqAHBDmENdBDo-uqqsmlyVZmw-H4eiEkcHO9RL_1kUmzac2ILxioIXCTjEzWs93csje5JVvD_7_qjHOidjJ0KMwgpsEmpFOYSmOwt7t1TKYFhfloIElGaHL65FFvIVUr2l87OzC8nIVRvmloehfoV4Lv33n8e4KOukYmQHFRwLzpHoZ-IbrhzP5UFhrTSrNLOABxlF9uvkA8kVIFTF8nnlLxEugbUxb64I7eDdWkwd7JGic2pAY')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Tesla Model 3</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">Electric • 2023
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400 font-mono">ABC-123</td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">$150.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Available
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-1">
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                                                title="Edit Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                                                title="Delete Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-16 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="BMW X5 car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjab56HFsT7S7Z0pIelDj0-4KEwK63lFDiGJ6eRtX7GU7RTEPSjO0ru4B4wW5qINCYisL7XoZjiVrR1fka4gHs9Lwu25DnLeUArdXCe1GMKi4ffQAl5aUVo9ZkeqJYz9K7UL3q87v4Fb5_pEGwea__gJ6iNAGsPwq5PBgNxLEvwd3Ckf2kC42_peuGahMZkwkC1EZFqYPI5b64af8fwHnvbmVq4cr-oh9P72lx8Jhfdq0D9k_vx7fLUThj10gCrs62vlJsT-ZlUTs')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">BMW X5</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">SUV • 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400 font-mono">XYZ-789</td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">$200.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                            Rented
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-1">
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                                                title="Edit Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                                                title="Delete Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-16 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Renault Clio car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDMld1SvqCISaHJKFh_wxWoACbdkrXKPLvQWnnzQ_t_4Horf4MNmTcnONwFLY88EVvuh3unRnCq__nowSk6NZ-Lf2bKKjVJT_UCzXstwPf3186t_9ON-NiuwdmrEs7o7uVFTJNfJChOFSbtCxBEWuVyn-cua0ix8HFhM1NRHSGa96YavOo8dlWYwUMQc1OEmgq-buitrg6zWgEqHIwM4EXm0bfE7OHfqTbnrblAcj4Sj69HJgXe3U02iX9SrMxdiFXvl4Rn2Dv8lR0')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Renault Clio</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">Compact • 2021</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400 font-mono">JKL-456</td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">$45.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900/30 dark:text-red-300">
                                            Maintenance
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-1">
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                                                title="Edit Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                                                title="Delete Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-16 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Ford Fiesta car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDMld1SvqCISaHJKFh_wxWoACbdkrXKPLvQWnnzQ_t_4Horf4MNmTcnONwFLY88EVvuh3unRnCq__nowSk6NZ-Lf2bKKjVJT_UCzXstwPf3186t_9ON-NiuwdmrEs7o7uVFTJNfJChOFSbtCxBEWuVyn-cua0ix8HFhM1NRHSGa96YavOo8dlWYwUMQc1OEmgq-buitrg6zWgEqHIwM4EXm0bfE7OHfqTbnrblAcj4Sj69HJgXe3U02iX9SrMxdiFXvl4Rn2Dv8lR0')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Ford Fiesta</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">Economy • 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400 font-mono">FOR-992</td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">$65.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Available
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-1">
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                                                title="Edit Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                                                title="Delete Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-16 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Toyota RAV4 car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjab56HFsT7S7Z0pIelDj0-4KEwK63lFDiGJ6eRtX7GU7RTEPSjO0ru4B4wW5qINCYisL7XoZjiVrR1fka4gHs9Lwu25DnLeUArdXCe1GMKi4ffQAl5aUVo9ZkeqJYz9K7UL3q87v4Fb5_pEGwea__gJ6iNAGsPwq5PBgNxLEvwd3Ckf2kC42_peuGahMZkwkC1EZFqYPI5b64af8fwHnvbmVq4cr-oh9P72lx8Jhfdq0D9k_vx7fLUThj10gCrs62vlJsT-ZlUTs')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Toyota RAV4</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">SUV • 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400 font-mono">TOY-884</td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">$110.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                            Rented
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-1">
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                                                title="Edit Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                                                title="Delete Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-16 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Audi A4 car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDliqAJSnaDbrWFrRyvHh5ej2KQxqAHBDmENdBDo-uqqsmlyVZmw-H4eiEkcHO9RL_1kUmzac2ILxioIXCTjEzWs93csje5JVvD_7_qjHOidjJ0KMwgpsEmpFOYSmOwt7t1TKYFhfloIElGaHL65FFvIVUr2l87OzC8nIVRvmloehfoV4Lv33n8e4KOukYmQHFRwLzpHoZ-IbrhzP5UFhrTSrNLOABxlF9uvkA8kVIFTF8nnlLxEugbUxb64I7eDdWkwd7JGic2pAY')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Audi A4</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">Sedan • 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400 font-mono">AUD-221</td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">$180.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Available
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-1">
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                                                title="Edit Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                                                title="Delete Vehicle">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="flex items-center justify-between border-t border-slate-200 bg-white px-6 py-4 dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="text-sm text-slate-500 dark:text-slate-400">
                            Showing <span class="font-medium text-slate-900 dark:text-white">1-6</span> of <span
                                class="font-medium text-slate-900 dark:text-white">45</span> vehicles
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-sm font-medium text-slate-500 hover:bg-slate-50 disabled:opacity-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-sm font-medium text-slate-500 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Add Car Modal -->
    <div id="addCarModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="fixed inset-0 bg-black/50 transition-opacity" onclick="closeModal()"></div>

            <div
                class="relative w-full max-w-2xl transform rounded-xl bg-white shadow-xl transition-all dark:bg-[#151b2b] dark:border dark:border-slate-700">
                <!-- Modal Header -->
                <div
                    class="flex items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Add New Car(s)</h3>
                    <button onclick="closeModal()"
                        class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-slate-700">
                        <span class="material-symbols-outlined !text-[20px]">close</span>
                    </button>
                </div>

                <!-- Form Container -->
                <form id="carForm" class="p-6">
                    <div id="carFormsContainer">
                        <!-- Car forms will be dynamically added here -->
                        <div class="car-form mb-6 p-4 border border-slate-200 rounded-lg dark:border-slate-700">
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="font-medium text-slate-900 dark:text-white">Car #1</h4>
                                <span class="text-sm text-slate-500 dark:text-slate-400">Required form</span>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Brand -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Brand
                                        *</label>
                                    <input type="text" name="brand[]" required
                                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                        placeholder="e.g., Tesla">
                                </div>

                                <!-- Model -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Model
                                        *</label>
                                    <input type="text" name="model[]" required
                                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                        placeholder="e.g., Model 3">
                                </div>

                                <!-- Category -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Category
                                        *</label>
                                    <select name="id_category[]" required
                                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary">
                                        <option value="">Select Category</option>
                                        <option value="1">Economy</option>
                                        <option value="2">Compact</option>
                                        <option value="3">Sedan</option>
                                        <option value="4">SUV</option>
                                        <option value="5">Luxury</option>
                                        <option value="6">Electric</option>
                                        <option value="7">Sports</option>
                                    </select>
                                </div>

                                <!-- Availability -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Status
                                        *</label>
                                    <select name="availability[]" required
                                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary">
                                        <option value="1">Available</option>
                                        <option value="0">Rented</option>
                                        <option value="0">Maintenance</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mt-4 space-y-2">
                                <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Description
                                    *</label>
                                <textarea name="description[]" rows="3" required
                                    class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                    placeholder="Enter car description..."></textarea>
                            </div>

                            <!-- Image URL -->
                            <div class="mt-4 space-y-2">
                                <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Image URL
                                    *</label>
                                <input type="url" name="image[]" required
                                    class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                    placeholder="https://example.com/car-image.jpg">
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 flex flex-col sm:flex-row justify-between gap-3">
                        <button type="button" onclick="addAnotherCar()"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700">
                            <span class="material-symbols-outlined !text-[20px]">add</span>
                            Add Another Car
                        </button>

                        <div class="flex gap-3">
                            <button type="button" onclick="closeModal()"
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700">
                                Cancel
                            </button>
                            <button type="submit"
                                class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                                <span class="material-symbols-outlined !text-[20px]">save</span>
                                Save All Cars
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        let carFormCount = 1;


        function openAddCarModal() {
            const modal = document.getElementById('addCarModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }


        function closeModal() {
            const modal = document.getElementById('addCarModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }


        function addAnotherCar() {
            carFormCount++;
            const container = document.getElementById('carFormsContainer');

            const newForm = document.createElement('div');
            newForm.className = 'car-form mb-6 p-4 border border-slate-200 rounded-lg dark:border-slate-700';
            newForm.innerHTML = `
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-medium text-slate-900 dark:text-white">Car #${carFormCount}</h4>
                <button type="button" onclick="removeCarForm(this)" class="text-red-500 hover:text-red-700 text-sm flex items-center gap-1">
                    <span class="material-symbols-outlined !text-[16px]">delete</span>
                    Remove
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Brand -->
                <div class="space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Brand *</label>
                    <input type="text" name="brand[]" required
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                        placeholder="e.g., Tesla">
                </div>
                
                <!-- Model -->
                <div class="space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Model *</label>
                    <input type="text" name="model[]" required
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                        placeholder="e.g., Model 3">
                </div>
                
                <!-- Category -->
                <div class="space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Category *</label>
                    <select name="id_category[]" required
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary">
                        <option value="">Select Category</option>
                        <option value="1">Economy</option>
                        <option value="2">Compact</option>
                        <option value="3">Sedan</option>
                        <option value="4">SUV</option>
                        <option value="5">Luxury</option>
                        <option value="6">Electric</option>
                        <option value="7">Sports</option>
                    </select>
                </div>
                
                <!-- Availability -->
                <div class="space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Status *</label>
                    <select name="availability[]" required
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary">
                        <option value="1">Available</option>
                        <option value="0">Rented</option>
                        <option value="0">Maintenance</option>
                    </select>
                </div>
            </div>
            
            <!-- Description -->
            <div class="mt-4 space-y-2">
                <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Description *</label>
                <textarea name="description[]" rows="3" required
                    class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                    placeholder="Enter car description..."></textarea>
            </div>
            
            <!-- Image URL -->
            <div class="mt-4 space-y-2">
                <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Image URL *</label>
                <input type="url" name="image[]" required
                    class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                    placeholder="https://example.com/car-image.jpg">
            </div>
        `;

            container.appendChild(newForm);


            newForm.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }


        function removeCarForm(button) {
            const form = button.closest('.car-form');
            const allForms = document.querySelectorAll('.car-form');


            if (form && allForms.length > 1) {
                form.remove();
                updateCarNumbers();
            }
        }


        function updateCarNumbers() {
            const forms = document.querySelectorAll('.car-form');
            forms.forEach((form, index) => {
                const title = form.querySelector('h4');
                if (title) {
                    title.textContent = `Car #${index + 1}`;
                }
            });
            carFormCount = forms.length;
        }


        document.getElementById('carForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const brands = formData.getAll('brand[]');
            const models = formData.getAll('model[]');
            const availabilities = formData.getAll('availability[]');
            const images = formData.getAll('image[]');
            const descriptions = formData.getAll('description[]');
            const categories = formData.getAll('id_category[]');


            for (let i = 0; i < brands.length; i++) {
                const carData = {
                    brand: brands[i],
                    model: models[i],
                    availability: availabilities[i] === '1' ? true : false,
                    image: images[i],
                    description: descriptions[i],
                    id_category: categories[i]
                };


                console.log('Car data to save:', carData);


                /*
                fetch('/api/cars', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(carData)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
                */
            }


            alert(`Successfully added ${brands.length} car(s) to the system!`);


            this.reset();
            closeModal();


            const container = document.getElementById('carFormsContainer');
            const forms = container.querySelectorAll('.car-form');
            for (let i = 1; i < forms.length; i++) {
                forms[i].remove();
            }
            carFormCount = 1;
        });


        document.addEventListener('DOMContentLoaded', function () {
            const addCarBtn = document.querySelector('button:has(span.material-symbols-outlined:contains("add_circle"))');
            if (addCarBtn) {
                addCarBtn.addEventListener('click', openAddCarModal);
            }


            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
        });
    </script>
</body>

</html>