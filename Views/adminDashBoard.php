<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                    <div class="flex items-center gap-3 pl-4">
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Dashboard Overview</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Welcome back! Here's what's happening
                            with your fleet today.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Cars</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">45</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined">directions_car</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_up</span>
                                5%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Active Bookings</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">12</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400">
                                <span class="material-symbols-outlined">calendar_month</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_up</span>
                                12%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Users</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">1,205</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-orange-50 text-orange-600 dark:bg-orange-900/20 dark:text-orange-400">
                                <span class="material-symbols-outlined">group</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_up</span>
                                8%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pending Reviews</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">3</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400">
                                <span class="material-symbols-outlined">star_half</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-red-600 dark:text-red-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_down</span>
                                2%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>
                </div>
                <div
                    class="mb-8 rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Recent Reservations</h3>
                        <a class="text-sm font-medium text-primary hover:text-primary-hover" href="#">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Customer</th>
                                    <th class="px-6 py-3 font-semibold">Vehicle</th>
                                    <th class="px-6 py-3 font-semibold">Dates</th>
                                    <th class="px-6 py-3 font-semibold">Amount</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Portrait of John Doe"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXRb7YtNmmdddAh1pWQE9hc1PQskru7CcsyXwc99sL8UtAZq8a9CLaCOuHKgLMBp08QIttan19m1VVmUZf50gKD-9okwpRR2ZXPOVSpg3KZmwQJyv7JEmz0b_OAecWDXjQfeMs4AVA13vRM9OSqqhguch2TTdHWcfb1HZj2EhfGpcCu_Tx_QQTA__5fUZan2tvvPNn7bwxyknrRRtV4cyqtvHxmfuHYjcy9342G2YHrgs41CfMl75ByEvOMtbkoEgLJFUYxkJadPE')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">John Doe</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">john@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="h-8 w-12 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Tesla Model 3 car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDliqAJSnaDbrWFrRyvHh5ej2KQxqAHBDmENdBDo-uqqsmlyVZmw-H4eiEkcHO9RL_1kUmzac2ILxioIXCTjEzWs93csje5JVvD_7_qjHOidjJ0KMwgpsEmpFOYSmOwt7t1TKYFhfloIElGaHL65FFvIVUr2l87OzC8nIVRvmloehfoV4Lv33n8e4KOukYmQHFRwLzpHoZ-IbrhzP5UFhrTSrNLOABxlF9uvkA8kVIFTF8nnlLxEugbUxb64I7eDdWkwd7JGic2pAY')">
                                            </div>
                                            <span class="text-slate-700 dark:text-slate-300">Tesla Model 3</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Oct 12 - Oct 15
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $450.00
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Confirmed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-slate-400 hover:text-primary dark:hover:text-white">
                                            <span class="material-symbols-outlined">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Portrait of Sarah Smith"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDVq8ziec5Df3Q33G81NlKutjHW_RvHSDo5K_2QxzenP5K-2qV73pI6gH8CbjhOnLarWCTgkBfIaL_ijGD7b-9GS2ge1pQs06KSOzE1-11v3Iy3X48-6xsfuV93XUJSZxYo9ammEwfbPYZPcBM9yXo17aixmP6BpFM6Yazzr1aMjUl6XihuK8E_QM9c_OojoiOzc_KMedZ4hMI3Wrf-S9yHZ6x0QM1Uje0Q5pZO2M9hpFPYuw3GQ6SjA-6Ve7lYDTlNLwZttuTmkeY')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Sarah Smith</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">sarah@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="h-8 w-12 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Toyota RAV4 car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjab56HFsT7S7Z0pIelDj0-4KEwK63lFDiGJ6eRtX7GU7RTEPSjO0ru4B4wW5qINCYisL7XoZjiVrR1fka4gHs9Lwu25DnLeUArdXCe1GMKi4ffQAl5aUVo9ZkeqJYz9K7UL3q87v4Fb5_pEGwea__gJ6iNAGsPwq5PBgNxLEvwd3Ckf2kC42_peuGahMZkwkC1EZFqYPI5b64af8fwHnvbmVq4cr-oh9P72lx8Jhfdq0D9k_vx7fLUThj10gCrs62vlJsT-ZlUTs')">
                                            </div>
                                            <span class="text-slate-700 dark:text-slate-300">Toyota RAV4</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Oct 14 - Oct 18
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $320.00
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="rounded p-1 text-green-600 hover:bg-green-50 dark:hover:bg-green-900/20"
                                                title="Approve">
                                                <span class="material-symbols-outlined !text-[20px]">check</span>
                                            </button>
                                            <button
                                                class="rounded p-1 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20"
                                                title="Reject">
                                                <span class="material-symbols-outlined !text-[20px]">close</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Portrait of Mike Johnson"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBxgtq92cGcR3fphAregcgUjyYDpXJl6eiUpnR1a5ijThI3n_cIpOmdnR1WjeUnnoOxlZcmPbnim3fyONJi8dMkO1_yLc5EAsZzL6sidCHDwbMwOA-5mvf4evJkXpUBPk2nMbw_jN2rvfZYt4XDqvYirXCED3XBwYYUqbm95jeNSuMxcLrYL8qoTj8W-Cm3sfHyBIh78C0rw_Iu59XWApFKFf2l-7yowKa0tOSaLzBIWHmlWLEzl__hPydixxLx2_rXnsL8RptjDZA')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Mike Johnson</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">mike.j@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="h-8 w-12 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Ford Fiesta car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDMld1SvqCISaHJKFh_wxWoACbdkrXKPLvQWnnzQ_t_4Horf4MNmTcnONwFLY88EVvuh3unRnCq__nowSk6NZ-Lf2bKKjVJT_UCzXstwPf3186t_9ON-NiuwdmrEs7o7uVFTJNfJChOFSbtCxBEWuVyn-cua0ix8HFhM1NRHSGa96YavOo8dlWYwUMQc1OEmgq-buitrg6zWgEqHIwM4EXm0bfE7OHfqTbnrblAcj4Sj69HJgXe3U02iX9SrMxdiFXvl4Rn2Dv8lR0')">
                                            </div>
                                            <span class="text-slate-700 dark:text-slate-300">Ford Fiesta</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Oct 10 - Oct 11
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $85.00
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-slate-400 hover:text-primary dark:hover:text-white">
                                            <span class="material-symbols-outlined">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Fleet Overview</h3>
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
                            <button
                                class="inline-flex items-center gap-1 rounded-lg bg-primary/10 px-3 py-1.5 text-sm font-medium text-primary hover:bg-primary/20 transition-colors">
                                <span class="material-symbols-outlined !text-[18px]">add</span>
                                Add Car
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Car Model</th>
                                    <th class="px-6 py-3 font-semibold">License Plate</th>
                                    <th class="px-6 py-3 font-semibold">Daily Rate</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold text-right">Edit</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Tesla Model 3</td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">ABC-123</td>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white">$150.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Available
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-slate-400 hover:text-primary dark:hover:text-white">
                                            <span class="material-symbols-outlined !text-[20px]">edit</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">BMW X5</td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">XYZ-789</td>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white">$200.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                            Rented
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-slate-400 hover:text-primary dark:hover:text-white">
                                            <span class="material-symbols-outlined !text-[20px]">edit</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Renault Clio</td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">JKL-456</td>
                                    <td class="px-6 py-4 text-slate-900 dark:text-white">$45.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900/30 dark:text-red-300">
                                            Maintenance
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-slate-400 hover:text-primary dark:hover:text-white">
                                            <span class="material-symbols-outlined !text-[20px]">edit</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>