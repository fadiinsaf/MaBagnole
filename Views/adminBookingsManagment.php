<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Bookings Management</title>
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Bookings Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">View and manage all reservations from
                            one place.</p>
                    </div>

                </div>
                <div
                    class="mb-6 grid gap-4 rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-700 dark:bg-[#151b2b] md:grid-cols-4 lg:grid-cols-6">
                    <div class="md:col-span-2 lg:col-span-2 relative">
                        <span
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[20px]">search</span>
                        <input
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 pl-10 pr-4 text-sm text-slate-900 placeholder-slate-500 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:placeholder-slate-400"
                            placeholder="Search bookings..." type="text" />
                    </div>
                    <div class="md:col-span-1">
                        <select
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                            <option value="">All Statuses</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="md:col-span-1">
                        <select
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                            <option value="">Vehicle Type</option>
                            <option value="suv">SUV</option>
                            <option value="sedan">Sedan</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="luxury">Luxury</option>
                        </select>
                    </div>
                    <div class="md:col-span-1 lg:col-span-2 flex items-center gap-2">
                        <input
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white"
                            placeholder="Start Date" type="date" />
                        <span class="text-slate-400">-</span>
                        <input
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white"
                            placeholder="End Date" type="date" />
                    </div>
                </div>
                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">
                                        <div
                                            class="flex items-center gap-1 cursor-pointer hover:text-slate-700 dark:hover:text-slate-300">
                                            Booking ID
                                            <span class="material-symbols-outlined !text-[16px]">unfold_more</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 font-semibold">Customer</th>
                                    <th class="px-6 py-4 font-semibold">Vehicle</th>
                                    <th class="px-6 py-4 font-semibold">
                                        <div
                                            class="flex items-center gap-1 cursor-pointer hover:text-slate-700 dark:hover:text-slate-300">
                                            Pick-up / Drop-off
                                            <span class="material-symbols-outlined !text-[16px]">unfold_more</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 font-semibold text-right">Amount</th>
                                    <th class="px-6 py-4 font-semibold text-center">Status</th>
                                    <th class="px-6 py-4 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        #BK-2023-001
                                    </td>
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
                                            <div class="flex flex-col">
                                                <span class="text-slate-700 dark:text-slate-300 font-medium">Tesla Model
                                                    3</span>
                                                <span class="text-xs text-slate-500 dark:text-slate-500">ABC-123</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span
                                                    class="material-symbols-outlined !text-[14px]">calendar_today</span>
                                                <span>Oct 12, 10:00 AM</span>
                                            </div>
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span class="material-symbols-outlined !text-[14px]">event</span>
                                                <span>Oct 15, 06:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                        $450.00
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300 border border-green-200 dark:border-green-900/50">
                                            Confirmed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white"
                                                title="View Details">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <div class="relative group">
                                                <button
                                                    class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white">
                                                    <span
                                                        class="material-symbols-outlined !text-[20px]">more_vert</span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        #BK-2023-002
                                    </td>
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
                                            <div class="flex flex-col">
                                                <span class="text-slate-700 dark:text-slate-300 font-medium">Toyota
                                                    RAV4</span>
                                                <span class="text-xs text-slate-500 dark:text-slate-500">XYZ-789</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span
                                                    class="material-symbols-outlined !text-[14px]">calendar_today</span>
                                                <span>Oct 14, 09:00 AM</span>
                                            </div>
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span class="material-symbols-outlined !text-[14px]">event</span>
                                                <span>Oct 18, 05:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                        $320.00
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-900/50">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="rounded p-1 text-green-600 hover:bg-green-50 dark:hover:bg-green-900/20"
                                                title="Approve">
                                                <span class="material-symbols-outlined !text-[20px]">check_circle</span>
                                            </button>
                                            <button
                                                class="rounded p-1 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20"
                                                title="Reject">
                                                <span class="material-symbols-outlined !text-[20px]">cancel</span>
                                            </button>
                                            <button
                                                class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white"
                                                title="View Details">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        #BK-2023-003
                                    </td>
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
                                            <div class="flex flex-col">
                                                <span class="text-slate-700 dark:text-slate-300 font-medium">Ford
                                                    Fiesta</span>
                                                <span class="text-xs text-slate-500 dark:text-slate-500">JKL-456</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span
                                                    class="material-symbols-outlined !text-[14px]">calendar_today</span>
                                                <span>Oct 10, 08:00 AM</span>
                                            </div>
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span class="material-symbols-outlined !text-[14px]">event</span>
                                                <span>Oct 11, 08:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                        $85.00
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white"
                                                title="View Details">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white">
                                                <span class="material-symbols-outlined !text-[20px]">more_vert</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        #BK-2023-004
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-slate-200 flex items-center justify-center bg-indigo-100 text-indigo-700 font-bold dark:bg-indigo-900/50 dark:text-indigo-300">
                                                AL
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Anna Lee</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">
                                                    anna.lee@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="h-8 w-12 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="BMW X5 car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDliqAJSnaDbrWFrRyvHh5ej2KQxqAHBDmENdBDo-uqqsmlyVZmw-H4eiEkcHO9RL_1kUmzac2ILxioIXCTjEzWs93csje5JVvD_7_qjHOidjJ0KMwgpsEmpFOYSmOwt7t1TKYFhfloIElGaHL65FFvIVUr2l87OzC8nIVRvmloehfoV4Lv33n8e4KOukYmQHFRwLzpHoZ-IbrhzP5UFhrTSrNLOABxlF9uvkA8kVIFTF8nnlLxEugbUxb64I7eDdWkwd7JGic2pAY')">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-slate-700 dark:text-slate-300 font-medium">BMW
                                                    X5</span>
                                                <span class="text-xs text-slate-500 dark:text-slate-500">BMW-001</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span
                                                    class="material-symbols-outlined !text-[14px]">calendar_today</span>
                                                <span>Oct 20, 11:00 AM</span>
                                            </div>
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span class="material-symbols-outlined !text-[14px]">event</span>
                                                <span>Oct 25, 11:00 AM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                        $850.00
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900/30 dark:text-red-300 border border-red-200 dark:border-red-900/50">
                                            Cancelled
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white"
                                                title="View Details">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white">
                                                <span class="material-symbols-outlined !text-[20px]">more_vert</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        #BK-2023-005
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Portrait of David Kim"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXRb7YtNmmdddAh1pWQE9hc1PQskru7CcsyXwc99sL8UtAZq8a9CLaCOuHKgLMBp08QIttan19m1VVmUZf50gKD-9okwpRR2ZXPOVSpg3KZmwQJyv7JEmz0b_OAecWDXjQfeMs4AVA13vRM9OSqqhguch2TTdHWcfb1HZj2EhfGpcCu_Tx_QQTA__5fUZan2tvvPNn7bwxyknrRRtV4cyqtvHxmfuHYjcy9342G2YHrgs41CfMl75ByEvOMtbkoEgLJFUYxkJadPE')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">David Kim</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">
                                                    david.k@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="h-8 w-12 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Tesla Model S car thumbnail"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDliqAJSnaDbrWFrRyvHh5ej2KQxqAHBDmENdBDo-uqqsmlyVZmw-H4eiEkcHO9RL_1kUmzac2ILxioIXCTjEzWs93csje5JVvD_7_qjHOidjJ0KMwgpsEmpFOYSmOwt7t1TKYFhfloIElGaHL65FFvIVUr2l87OzC8nIVRvmloehfoV4Lv33n8e4KOukYmQHFRwLzpHoZ-IbrhzP5UFhrTSrNLOABxlF9uvkA8kVIFTF8nnlLxEugbUxb64I7eDdWkwd7JGic2pAY')">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-slate-700 dark:text-slate-300 font-medium">Tesla Model
                                                    S</span>
                                                <span class="text-xs text-slate-500 dark:text-slate-500">TSL-999</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span
                                                    class="material-symbols-outlined !text-[14px]">calendar_today</span>
                                                <span>Nov 01, 09:00 AM</span>
                                            </div>
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span class="material-symbols-outlined !text-[14px]">event</span>
                                                <span>Nov 03, 09:00 AM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                        $600.00
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-900/50">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="rounded p-1 text-green-600 hover:bg-green-50 dark:hover:bg-green-900/20"
                                                title="Approve">
                                                <span class="material-symbols-outlined !text-[20px]">check_circle</span>
                                            </button>
                                            <button
                                                class="rounded p-1 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20"
                                                title="Reject">
                                                <span class="material-symbols-outlined !text-[20px]">cancel</span>
                                            </button>
                                            <button
                                                class="rounded p-1 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white"
                                                title="View Details">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="flex items-center justify-between border-t border-slate-200 px-6 py-4 dark:border-slate-700">
                        <div class="flex items-center gap-2">
                            <p class="text-sm text-slate-500 dark:text-slate-400">
                                Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span
                                    class="font-medium text-slate-900 dark:text-white">5</span> of <span
                                    class="font-medium text-slate-900 dark:text-white">128</span> results
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-700 shadow-sm hover:bg-slate-50 disabled:opacity-50 dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:hover:bg-slate-700"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-700 shadow-sm hover:bg-slate-50 dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:hover:bg-slate-700">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>