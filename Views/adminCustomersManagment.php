<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Customers Management</title>
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
                    <div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-700">
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Customers Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">View, search, and manage all your
                            registered customers.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Customers</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">12,345</p>
                        <div class="mt-2 flex items-center text-xs text-green-600">
                            <span class="material-symbols-outlined !text-[14px] mr-1">trending_up</span>
                            +12% from last month
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">New This Week</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">48</p>
                        <div class="mt-2 flex items-center text-xs text-green-600">
                            <span class="material-symbols-outlined !text-[14px] mr-1">trending_up</span>
                            +5% from last week
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Active Rentals</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">856</p>
                        <div class="mt-2 flex items-center text-xs text-slate-500">
                            Current active users
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Verified Accounts</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">94%</p>
                        <div class="mt-2 flex items-center text-xs text-blue-600">
                            <span class="material-symbols-outlined !text-[14px] mr-1">verified</span>
                            High verification rate
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <div class="flex items-center gap-2">
                            <button
                                class="flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700">
                                <span class="material-symbols-outlined !text-[18px] mr-2">filter_list</span>
                                Filter
                            </button>
                            <div class="relative">
                                <input
                                    class="h-9 w-64 rounded-lg border-slate-200 bg-slate-50 pl-9 pr-4 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white"
                                    placeholder="Search..." type="text" />
                                <span
                                    class="absolute left-2.5 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[18px]">search</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-slate-500 dark:text-slate-400">Sort by:</span>
                            <select
                                class="h-9 rounded-lg border-slate-200 bg-slate-50 py-1 pl-3 pr-8 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                                <option>Newest First</option>
                                <option>Oldest First</option>
                                <option>Name (A-Z)</option>
                                <option>Highest Spending</option>
                            </select>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">
                                        <div
                                            class="flex items-center gap-1 cursor-pointer hover:text-slate-700 dark:hover:text-slate-200">
                                            Customer
                                            <span class="material-symbols-outlined !text-[14px]">unfold_more</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 font-semibold">Contact Info</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold">Registration Date</th>
                                    <th class="px-6 py-3 font-semibold">Total Spent</th>
                                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 rounded-full bg-slate-200 bg-cover bg-center ring-2 ring-white dark:ring-[#151b2b]"
                                                data-alt="Portrait of John Doe"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXRb7YtNmmdddAh1pWQE9hc1PQskru7CcsyXwc99sL8UtAZq8a9CLaCOuHKgLMBp08QIttan19m1VVmUZf50gKD-9okwpRR2ZXPOVSpg3KZmwQJyv7JEmz0b_OAecWDXjQfeMs4AVA13vRM9OSqqhguch2TTdHWcfb1HZj2EhfGpcCu_Tx_QQTA__5fUZan2tvvPNn7bwxyknrRRtV4cyqtvHxmfuHYjcy9342G2YHrgs41CfMl75ByEvOMtbkoEgLJFUYxkJadPE')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">John Doe</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">ID: #CUS-8921</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">mail</span>
                                                john@example.com
                                            </div>
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">phone</span>
                                                +1 (555) 123-4567
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Oct 24, 2023
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $4,250.00
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex items-center justify-end gap-3 group-hover:opacity-100 transition-opacity">
                                            <div
                                                class="flex items-center gap-2 pr-3 border-r border-slate-200 dark:border-slate-700">
                                                <span
                                                    class="text-xs font-medium text-slate-500 dark:text-slate-400 mr-2">Active</span>
                                                <label class="relative inline-flex items-center cursor-pointer"
                                                    title="Deactivate Customer">
                                                    <input checked="" class="sr-only peer" type="checkbox" value="" />
                                                    <div
                                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/20 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                                    </div>
                                                </label>
                                            </div>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white"
                                                title="View Profile">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-blue-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-blue-400"
                                                title="Edit Customer">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-red-400"
                                                title="Delete">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 rounded-full bg-slate-200 bg-cover bg-center ring-2 ring-white dark:ring-[#151b2b]"
                                                data-alt="Portrait of Sarah Smith"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDVq8ziec5Df3Q33G81NlKutjHW_RvHSDo5K_2QxzenP5K-2qV73pI6gH8CbjhOnLarWCTgkBfIaL_ijGD7b-9GS2ge1pQs06KSOzE1-11v3Iy3X48-6xsfuV93XUJSZxYo9ammEwfbPYZPcBM9yXo17aixmP6BpFM6Yazzr1aMjUl6XihuK8E_QM9c_OojoiOzc_KMedZ4hMI3Wrf-S9yHZ6x0QM1Uje0Q5pZO2M9hpFPYuw3GQ6SjA-6Ve7lYDTlNLwZttuTmkeY')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Sarah Smith</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">ID: #CUS-4421</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">mail</span>
                                                sarah@example.com
                                            </div>
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">phone</span>
                                                +1 (555) 987-6543
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                                            Pending Verification
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Nov 02, 2023
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $320.00
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex items-center justify-end gap-3 group-hover:opacity-100 transition-opacity">
                                            <div
                                                class="flex items-center gap-2 pr-3 border-r border-slate-200 dark:border-slate-700">
                                                <span
                                                    class="text-xs font-medium text-slate-500 dark:text-slate-400 mr-2">Activate</span>
                                                <label class="relative inline-flex items-center cursor-pointer"
                                                    title="Activate Customer">
                                                    <input class="sr-only peer" type="checkbox" value="" />
                                                    <div
                                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/20 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                                    </div>
                                                </label>
                                            </div>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white"
                                                title="View Profile">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-blue-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-blue-400"
                                                title="Edit Customer">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-red-400"
                                                title="Delete">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 rounded-full bg-slate-200 bg-cover bg-center ring-2 ring-white dark:ring-[#151b2b]"
                                                data-alt="Portrait of Mike Johnson"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBxgtq92cGcR3fphAregcgUjyYDpXJl6eiUpnR1a5ijThI3n_cIpOmdnR1WjeUnnoOxlZcmPbnim3fyONJi8dMkO1_yLc5EAsZzL6sidCHDwbMwOA-5mvf4evJkXpUBPk2nMbw_jN2rvfZYt4XDqvYirXCED3XBwYYUqbm95jeNSuMxcLrYL8qoTj8W-Cm3sfHyBIh78C0rw_Iu59XWApFKFf2l-7yowKa0tOSaLzBIWHmlWLEzl__hPydixxLx2_rXnsL8RptjDZA')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Mike Johnson</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">ID: #CUS-1102</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">mail</span>
                                                mike.j@example.com
                                            </div>
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">phone</span>
                                                +1 (555) 456-7890
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900/30 dark:text-red-300">
                                            Suspended
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Sep 15, 2023
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $85.00
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex items-center justify-end gap-3 group-hover:opacity-100 transition-opacity">
                                            <div
                                                class="flex items-center gap-2 pr-3 border-r border-slate-200 dark:border-slate-700">
                                                <span
                                                    class="text-xs font-medium text-slate-500 dark:text-slate-400 mr-2">Activate</span>
                                                <label class="relative inline-flex items-center cursor-pointer"
                                                    title="Reactivate Customer">
                                                    <input class="sr-only peer" type="checkbox" value="" />
                                                    <div
                                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/20 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                                    </div>
                                                </label>
                                            </div>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white"
                                                title="View Profile">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-blue-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-blue-400"
                                                title="Edit Customer">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-red-400"
                                                title="Delete">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white ring-2 ring-white dark:ring-[#151b2b]">
                                                EL
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Emma Larson</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">ID: #CUS-3392</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">mail</span>
                                                emma.l@example.com
                                            </div>
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">phone</span>
                                                +1 (555) 222-3333
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Dec 01, 2023
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $1,500.00
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex items-center justify-end gap-3 group-hover:opacity-100 transition-opacity">
                                            <div
                                                class="flex items-center gap-2 pr-3 border-r border-slate-200 dark:border-slate-700">
                                                <span
                                                    class="text-xs font-medium text-slate-500 dark:text-slate-400 mr-2">Active</span>
                                                <label class="relative inline-flex items-center cursor-pointer"
                                                    title="Deactivate Customer">
                                                    <input checked="" class="sr-only peer" type="checkbox" value="" />
                                                    <div
                                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/20 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                                    </div>
                                                </label>
                                            </div>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white"
                                                title="View Profile">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-blue-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-blue-400"
                                                title="Edit Customer">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-red-400"
                                                title="Delete">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 rounded-full bg-slate-200 bg-cover bg-center ring-2 ring-white dark:ring-[#151b2b]"
                                                data-alt="Portrait of David Chen"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjab56HFsT7S7Z0pIelDj0-4KEwK63lFDiGJ6eRtX7GU7RTEPSjO0ru4B4wW5qINCYisL7XoZjiVrR1fka4gHs9Lwu25DnLeUArdXCe1GMKi4ffQAl5aUVo9ZkeqJYz9K7UL3q87v4Fb5_pEGwea__gJ6iNAGsPwq5PBgNxLEvwd3Ckf2kC42_peuGahMZkwkC1EZFqYPI5b64af8fwHnvbmVq4cr-oh9P72lx8Jhfdq0D9k_vx7fLUThj10gCrs62vlJsT-ZlUTs')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">David Chen</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">ID: #CUS-7781</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">mail</span>
                                                david.c@example.com
                                            </div>
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">phone</span>
                                                +1 (555) 777-8888
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                            Inactive
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                        Aug 20, 2023
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        $0.00
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex items-center justify-end gap-3 group-hover:opacity-100 transition-opacity">
                                            <div
                                                class="flex items-center gap-2 pr-3 border-r border-slate-200 dark:border-slate-700">
                                                <span
                                                    class="text-xs font-medium text-slate-500 dark:text-slate-400 mr-2">Activate</span>
                                                <label class="relative inline-flex items-center cursor-pointer"
                                                    title="Activate Customer">
                                                    <input class="sr-only peer" type="checkbox" value="" />
                                                    <div
                                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/20 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                                    </div>
                                                </label>
                                            </div>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-primary dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white"
                                                title="View Profile">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-blue-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-blue-400"
                                                title="Edit Customer">
                                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                                            </button>
                                            <button
                                                class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-red-400"
                                                title="Delete">
                                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="flex items-center justify-between border-t border-slate-200 px-6 py-4 dark:border-slate-700">
                        <p class="text-sm text-slate-500 dark:text-slate-400">
                            Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span
                                class="font-medium text-slate-900 dark:text-white">5</span> of <span
                                class="font-medium text-slate-900 dark:text-white">1,205</span> results
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="rounded-lg border border-slate-200 px-3 py-1 text-sm font-medium text-slate-500 hover:bg-slate-50 disabled:opacity-50 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-800"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="rounded-lg border border-slate-200 px-3 py-1 text-sm font-medium text-slate-500 hover:bg-slate-50 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-800">
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