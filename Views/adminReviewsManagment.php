<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Reviews Management</title>
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Reviews Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Manage and moderate customer feedback
                            for your fleet.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Reviews</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">1,482</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined">reviews</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Average Rating</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <p class="text-3xl font-bold text-slate-900 dark:text-white">4.8</p>
                                    <span class="material-symbols-outlined text-yellow-400 !text-2xl"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-yellow-50 text-yellow-600 dark:bg-yellow-900/20 dark:text-yellow-400">
                                <span class="material-symbols-outlined">hotel_class</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pending Approval</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">24</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-orange-50 text-orange-600 dark:bg-orange-900/20 dark:text-orange-400">
                                <span class="material-symbols-outlined">hourglass_empty</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Flagged</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">5</p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400">
                                <span class="material-symbols-outlined">flag</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Recent Reviews</h3>
                        <div class="flex w-full sm:w-auto gap-3">
                            <div class="relative flex-1 sm:flex-none w-full sm:w-48">
                                <select
                                    class="h-9 w-full rounded-lg border-slate-200 bg-slate-50 pl-3 pr-8 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                                    <option>All Statuses</option>
                                    <option>Published</option>
                                    <option>Pending</option>
                                    <option>Hidden</option>
                                </select>
                            </div>
                            <div class="relative flex-1 sm:flex-none w-full sm:w-48">
                                <select
                                    class="h-9 w-full rounded-lg border-slate-200 bg-slate-50 pl-3 pr-8 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                                    <option>Newest First</option>
                                    <option>Oldest First</option>
                                    <option>Highest Rating</option>
                                    <option>Lowest Rating</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold w-12">
                                        <input
                                            class="rounded border-slate-300 text-primary focus:ring-primary dark:border-slate-600 dark:bg-slate-700"
                                            type="checkbox" />
                                    </th>
                                    <th class="px-6 py-3 font-semibold">Reviewer</th>
                                    <th class="px-6 py-3 font-semibold">Vehicle</th>
                                    <th class="px-6 py-3 font-semibold w-64">Review Content</th>
                                    <th class="px-6 py-3 font-semibold">Rating</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                    <td class="px-6 py-4">
                                        <input
                                            class="rounded border-slate-300 text-primary focus:ring-primary dark:border-slate-600 dark:bg-slate-700"
                                            type="checkbox" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 shrink-0 rounded-full bg-slate-200 bg-cover bg-center"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXRb7YtNmmdddAh1pWQE9hc1PQskru7CcsyXwc99sL8UtAZq8a9CLaCOuHKgLMBp08QIttan19m1VVmUZf50gKD-9okwpRR2ZXPOVSpg3KZmwQJyv7JEmz0b_OAecWDXjQfeMs4AVA13vRM9OSqqhguch2TTdHWcfb1HZj2EhfGpcCu_Tx_QQTA__5fUZan2tvvPNn7bwxyknrRRtV4cyqtvHxmfuHYjcy9342G2YHrgs41CfMl75ByEvOMtbkoEgLJFUYxkJadPE')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">John Doe</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">2 hours ago</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">Tesla Model
                                                3</span>
                                            <span class="text-xs text-slate-500 dark:text-slate-400">Oct 12 - Oct
                                                15</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="line-clamp-2 text-slate-600 dark:text-slate-300">The car was in
                                            perfect condition and the autopilot feature was amazing on the highway. Very
                                            clean interior.</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="ml-1 font-semibold text-slate-700 dark:text-slate-300">5.0</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Published
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <button
                                                class="rounded p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-red-400"
                                                title="Hide Review">
                                                <span
                                                    class="material-symbols-outlined !text-[20px]">visibility_off</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group bg-yellow-50/50 dark:bg-yellow-900/10">
                                    <td class="px-6 py-4">
                                        <input
                                            class="rounded border-slate-300 text-primary focus:ring-primary dark:border-slate-600 dark:bg-slate-700"
                                            type="checkbox" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 shrink-0 rounded-full bg-slate-200 bg-cover bg-center"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDVq8ziec5Df3Q33G81NlKutjHW_RvHSDo5K_2QxzenP5K-2qV73pI6gH8CbjhOnLarWCTgkBfIaL_ijGD7b-9GS2ge1pQs06KSOzE1-11v3Iy3X48-6xsfuV93XUJSZxYo9ammEwfbPYZPcBM9yXo17aixmP6BpFM6Yazzr1aMjUl6XihuK8E_QM9c_OojoiOzc_KMedZ4hMI3Wrf-S9yHZ6x0QM1Uje0Q5pZO2M9hpFPYuw3GQ6SjA-6Ve7lYDTlNLwZttuTmkeY')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Sarah Smith</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">1 day ago</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">Toyota
                                                RAV4</span>
                                            <span class="text-xs text-slate-500 dark:text-slate-400">Oct 14 - Oct
                                                18</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="line-clamp-2 text-slate-600 dark:text-slate-300">Great car for a
                                            family trip, plenty of space. However, the pickup process took a bit longer
                                            than expected.</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="material-symbols-outlined text-slate-300 dark:text-slate-600 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="ml-1 font-semibold text-slate-700 dark:text-slate-300">4.0</span>
                                        </div>
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
                                                class="rounded p-1.5 text-slate-500 hover:bg-slate-100 hover:text-green-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-green-400"
                                                title="Publish">
                                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                                            </button>
                                            <button
                                                class="rounded p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-red-400"
                                                title="Hide / Reject">
                                                <span
                                                    class="material-symbols-outlined !text-[20px]">visibility_off</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                    <td class="px-6 py-4">
                                        <input
                                            class="rounded border-slate-300 text-primary focus:ring-primary dark:border-slate-600 dark:bg-slate-700"
                                            type="checkbox" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 shrink-0 rounded-full bg-slate-200 bg-cover bg-center"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBxgtq92cGcR3fphAregcgUjyYDpXJl6eiUpnR1a5ijThI3n_cIpOmdnR1WjeUnnoOxlZcmPbnim3fyONJi8dMkO1_yLc5EAsZzL6sidCHDwbMwOA-5mvf4evJkXpUBPk2nMbw_jN2rvfZYt4XDqvYirXCED3XBwYYUqbm95jeNSuMxcLrYL8qoTj8W-Cm3sfHyBIh78C0rw_Iu59XWApFKFf2l-7yowKa0tOSaLzBIWHmlWLEzl__hPydixxLx2_rXnsL8RptjDZA')">
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Mike Johnson</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">3 days ago</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">Ford
                                                Fiesta</span>
                                            <span class="text-xs text-slate-500 dark:text-slate-400">Oct 10 - Oct
                                                11</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="line-clamp-2 text-slate-600 dark:text-slate-300">Cheap and cheerful.
                                            Got me from A to B. No complaints for the price.</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="ml-1 font-semibold text-slate-700 dark:text-slate-300">5.0</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            Published
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <button
                                                class="rounded p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-red-400"
                                                title="Hide Review">
                                                <span
                                                    class="material-symbols-outlined !text-[20px]">visibility_off</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                    <td class="px-6 py-4">
                                        <input
                                            class="rounded border-slate-300 text-primary focus:ring-primary dark:border-slate-600 dark:bg-slate-700"
                                            type="checkbox" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="h-10 w-10 shrink-0 rounded-full bg-slate-200 bg-center flex items-center justify-center text-slate-500 font-bold">
                                                EM</div>
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white">Emily Martin</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">4 days ago</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">BMW
                                                X5</span>
                                            <span class="text-xs text-slate-500 dark:text-slate-400">Sep 28 - Oct
                                                05</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="line-clamp-2 text-slate-600 dark:text-slate-300">Found a scratch on
                                            the door that wasn't marked on the initial report. Otherwise good drive.</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="material-symbols-outlined text-slate-300 dark:text-slate-600 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="material-symbols-outlined text-slate-300 dark:text-slate-600 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="ml-1 font-semibold text-slate-700 dark:text-slate-300">3.0</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                            Hidden
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <button
                                                class="rounded p-1.5 text-slate-500 hover:bg-slate-100 hover:text-green-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-green-400"
                                                title="Publish">
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
                        <p class="text-sm text-slate-500 dark:text-slate-400">
                            Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span
                                class="font-medium text-slate-900 dark:text-white">4</span> of <span
                                class="font-medium text-slate-900 dark:text-white">1,482</span> results
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white disabled:opacity-50 disabled:cursor-not-allowed"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">
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