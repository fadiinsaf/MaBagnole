<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Reports &amp; Analytics</title>
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Reports &amp; Analytics</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Track performance metrics, revenue,
                            and fleet utilization.</p>
                    </div>
                    <div class="flex gap-3">
                        <div class="relative">
                            <button
                                class="inline-flex items-center justify-center gap-2 rounded-lg bg-white border border-slate-200 px-4 py-2 text-sm font-medium text-slate-700 shadow-sm hover:bg-slate-50 dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:hover:bg-slate-700">
                                <span class="material-symbols-outlined !text-[20px]">calendar_today</span>
                                This Month
                                <span class="material-symbols-outlined !text-[16px]">expand_more</span>
                            </button>
                        </div>
                        <button
                            class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                            <span class="material-symbols-outlined !text-[20px]">download</span>
                            Download Report
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-green-50 text-green-600 dark:bg-green-900/20 dark:text-green-400">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded">
                                +12.5%
                            </span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Revenue</p>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">$124,500.00</h3>
                            <p class="mt-1 text-xs text-slate-400">from 320 bookings</p>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined">timelapse</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded">
                                +4.2%
                            </span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Fleet Utilization</p>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">78.5%</h3>
                            <p class="mt-1 text-xs text-slate-400">Average daily active cars</p>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400">
                                <span class="material-symbols-outlined">key</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-red-600 dark:text-red-400 bg-red-50 dark:bg-red-900/20 px-2 py-1 rounded">
                                -1.8%
                            </span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Bookings</p>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">1,450</h3>
                            <p class="mt-1 text-xs text-slate-400">Last 30 days</p>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-50 text-orange-600 dark:bg-orange-900/20 dark:text-orange-400">
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">
                                0.0%
                            </span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Avg. Rating</p>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">4.8/5.0</h3>
                            <p class="mt-1 text-xs text-slate-400">Based on 120 reviews</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div
                        class="lg:col-span-2 rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Revenue Trends</h3>
                            <select
                                class="rounded-lg border-slate-200 bg-slate-50 py-1 pl-3 pr-8 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                                <option>Last 6 Months</option>
                                <option>Last Year</option>
                            </select>
                        </div>
                        <div class="relative h-64 w-full">
                            <div class="absolute inset-0 flex items-end justify-between gap-2 sm:gap-4 px-2">
                                <div class="flex w-full flex-col items-center justify-end group cursor-pointer">
                                    <div class="relative w-full rounded-t bg-primary/20 hover:bg-primary transition-all duration-300"
                                        style="height: 40%">
                                        <div
                                            class="absolute -top-10 left-1/2 -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white opacity-0 transition-opacity group-hover:opacity-100 dark:bg-white dark:text-slate-900">
                                            $40k</div>
                                    </div>
                                    <span class="mt-2 text-xs text-slate-500 dark:text-slate-400">May</span>
                                </div>
                                <div class="flex w-full flex-col items-center justify-end group cursor-pointer">
                                    <div class="relative w-full rounded-t bg-primary/20 hover:bg-primary transition-all duration-300"
                                        style="height: 55%">
                                        <div
                                            class="absolute -top-10 left-1/2 -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white opacity-0 transition-opacity group-hover:opacity-100 dark:bg-white dark:text-slate-900">
                                            $55k</div>
                                    </div>
                                    <span class="mt-2 text-xs text-slate-500 dark:text-slate-400">Jun</span>
                                </div>
                                <div class="flex w-full flex-col items-center justify-end group cursor-pointer">
                                    <div class="relative w-full rounded-t bg-primary/20 hover:bg-primary transition-all duration-300"
                                        style="height: 45%">
                                        <div
                                            class="absolute -top-10 left-1/2 -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white opacity-0 transition-opacity group-hover:opacity-100 dark:bg-white dark:text-slate-900">
                                            $45k</div>
                                    </div>
                                    <span class="mt-2 text-xs text-slate-500 dark:text-slate-400">Jul</span>
                                </div>
                                <div class="flex w-full flex-col items-center justify-end group cursor-pointer">
                                    <div class="relative w-full rounded-t bg-primary/20 hover:bg-primary transition-all duration-300"
                                        style="height: 70%">
                                        <div
                                            class="absolute -top-10 left-1/2 -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white opacity-0 transition-opacity group-hover:opacity-100 dark:bg-white dark:text-slate-900">
                                            $70k</div>
                                    </div>
                                    <span class="mt-2 text-xs text-slate-500 dark:text-slate-400">Aug</span>
                                </div>
                                <div class="flex w-full flex-col items-center justify-end group cursor-pointer">
                                    <div class="relative w-full rounded-t bg-primary/20 hover:bg-primary transition-all duration-300"
                                        style="height: 60%">
                                        <div
                                            class="absolute -top-10 left-1/2 -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white opacity-0 transition-opacity group-hover:opacity-100 dark:bg-white dark:text-slate-900">
                                            $60k</div>
                                    </div>
                                    <span class="mt-2 text-xs text-slate-500 dark:text-slate-400">Sep</span>
                                </div>
                                <div class="flex w-full flex-col items-center justify-end group cursor-pointer">
                                    <div class="relative w-full rounded-t bg-primary hover:bg-primary-hover transition-all duration-300"
                                        style="height: 85%">
                                        <div
                                            class="absolute -top-10 left-1/2 -translate-x-1/2 rounded bg-slate-900 px-2 py-1 text-xs text-white opacity-0 transition-opacity group-hover:opacity-100 dark:bg-white dark:text-slate-900">
                                            $85k</div>
                                    </div>
                                    <span class="mt-2 text-xs font-semibold text-slate-900 dark:text-white">Oct</span>
                                </div>
                            </div>
                            <div
                                class="absolute inset-0 pointer-events-none flex flex-col justify-between text-xs text-slate-300 dark:text-slate-700">
                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 h-0 w-full">
                                </div>
                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 h-0 w-full">
                                </div>
                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 h-0 w-full">
                                </div>
                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 h-0 w-full">
                                </div>
                                <div class="border-b border-slate-200 dark:border-slate-700 h-0 w-full"></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-6">Popular Categories</h3>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-medium text-slate-700 dark:text-slate-300">SUV</span>
                                    <span class="text-slate-500 dark:text-slate-400">45%</span>
                                </div>
                                <div class="h-2 w-full rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                    <div class="h-full rounded-full bg-primary" style="width: 45%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-medium text-slate-700 dark:text-slate-300">Sedan</span>
                                    <span class="text-slate-500 dark:text-slate-400">30%</span>
                                </div>
                                <div class="h-2 w-full rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                    <div class="h-full rounded-full bg-blue-400" style="width: 30%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-medium text-slate-700 dark:text-slate-300">Hatchback</span>
                                    <span class="text-slate-500 dark:text-slate-400">15%</span>
                                </div>
                                <div class="h-2 w-full rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                    <div class="h-full rounded-full bg-purple-400" style="width: 15%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-medium text-slate-700 dark:text-slate-300">Luxury</span>
                                    <span class="text-slate-500 dark:text-slate-400">10%</span>
                                </div>
                                <div class="h-2 w-full rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                    <div class="h-full rounded-full bg-orange-400" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800">
                            <div class="flex items-center gap-4">
                                <div class="flex-1 text-center border-r border-slate-100 dark:border-slate-800">
                                    <p class="text-2xl font-bold text-slate-900 dark:text-white">850</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Total Trips</p>
                                </div>
                                <div class="flex-1 text-center">
                                    <p class="text-2xl font-bold text-slate-900 dark:text-white">32</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">New Cars</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                    <div
                        class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div
                            class="flex items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Top Performing Cars</h3>
                            <a class="text-sm font-medium text-primary hover:text-primary-hover" href="#">View Fleet</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm">
                                <thead
                                    class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                    <tr>
                                        <th class="px-6 py-3 font-semibold">Vehicle</th>
                                        <th class="px-6 py-3 font-semibold text-center">Trips</th>
                                        <th class="px-6 py-3 font-semibold text-right">Revenue</th>
                                        <th class="px-6 py-3 font-semibold text-right">Trend</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="h-10 w-14 shrink-0 rounded bg-slate-100 bg-cover bg-center"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDliqAJSnaDbrWFrRyvHh5ej2KQxqAHBDmENdBDo-uqqsmlyVZmw-H4eiEkcHO9RL_1kUmzac2ILxioIXCTjEzWs93csje5JVvD_7_qjHOidjJ0KMwgpsEmpFOYSmOwt7t1TKYFhfloIElGaHL65FFvIVUr2l87OzC8nIVRvmloehfoV4Lv33n8e4KOukYmQHFRwLzpHoZ-IbrhzP5UFhrTSrNLOABxlF9uvkA8kVIFTF8nnlLxEugbUxb64I7eDdWkwd7JGic2pAY')">
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-900 dark:text-white">Tesla Model 3
                                                    </p>
                                                    <p class="text-xs text-slate-500 dark:text-slate-400">Electric • SUV
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center font-medium">42</td>
                                        <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                            $12,450</td>
                                        <td class="px-6 py-4 text-right text-green-600">
                                            <span
                                                class="material-symbols-outlined !text-[18px] align-middle">trending_up</span>
                                            12%
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="h-10 w-14 shrink-0 rounded bg-slate-100 bg-cover bg-center"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjab56HFsT7S7Z0pIelDj0-4KEwK63lFDiGJ6eRtX7GU7RTEPSjO0ru4B4wW5qINCYisL7XoZjiVrR1fka4gHs9Lwu25DnLeUArdXCe1GMKi4ffQAl5aUVo9ZkeqJYz9K7UL3q87v4Fb5_pEGwea__gJ6iNAGsPwq5PBgNxLEvwd3Ckf2kC42_peuGahMZkwkC1EZFqYPI5b64af8fwHnvbmVq4cr-oh9P72lx8Jhfdq0D9k_vx7fLUThj10gCrs62vlJsT-ZlUTs')">
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-900 dark:text-white">Toyota RAV4
                                                    </p>
                                                    <p class="text-xs text-slate-500 dark:text-slate-400">Hybrid • SUV
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center font-medium">38</td>
                                        <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                            $9,200</td>
                                        <td class="px-6 py-4 text-right text-green-600">
                                            <span
                                                class="material-symbols-outlined !text-[18px] align-middle">trending_up</span>
                                            8%
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="h-10 w-14 shrink-0 rounded bg-slate-100 bg-cover bg-center"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDMld1SvqCISaHJKFh_wxWoACbdkrXKPLvQWnnzQ_t_4Horf4MNmTcnONwFLY88EVvuh3unRnCq__nowSk6NZ-Lf2bKKjVJT_UCzXstwPf3186t_9ON-NiuwdmrEs7o7uVFTJNfJChOFSbtCxBEWuVyn-cua0ix8HFhM1NRHSGa96YavOo8dlWYwUMQc1OEmgq-buitrg6zWgEqHIwM4EXm0bfE7OHfqTbnrblAcj4Sj69HJgXe3U02iX9SrMxdiFXvl4Rn2Dv8lR0')">
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-900 dark:text-white">Ford Fiesta
                                                    </p>
                                                    <p class="text-xs text-slate-500 dark:text-slate-400">Petrol •
                                                        Compact</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center font-medium">25</td>
                                        <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                            $3,150</td>
                                        <td class="px-6 py-4 text-right text-red-500">
                                            <span
                                                class="material-symbols-outlined !text-[18px] align-middle">trending_down</span>
                                            2%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div
                            class="flex items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Available Reports</h3>
                            <button class="text-sm font-medium text-primary hover:text-primary-hover">Generate
                                New</button>
                        </div>
                        <div class="p-4 space-y-3">
                            <div
                                class="flex items-center justify-between p-3 rounded-lg border border-slate-100 hover:bg-slate-50 dark:border-slate-800 dark:hover:bg-slate-800/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded bg-red-50 text-red-600 dark:bg-red-900/20">
                                        <span class="material-symbols-outlined">picture_as_pdf</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Q3 Financial
                                            Summary</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Generated on Oct 01, 2023
                                        </p>
                                    </div>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-primary dark:hover:text-white">
                                    <span class="material-symbols-outlined">download</span>
                                </button>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 rounded-lg border border-slate-100 hover:bg-slate-50 dark:border-slate-800 dark:hover:bg-slate-800/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded bg-green-50 text-green-600 dark:bg-green-900/20">
                                        <span class="material-symbols-outlined">table_view</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">User Activity Log
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Generated on Oct 14, 2023
                                        </p>
                                    </div>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-primary dark:hover:text-white">
                                    <span class="material-symbols-outlined">download</span>
                                </button>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 rounded-lg border border-slate-100 hover:bg-slate-50 dark:border-slate-800 dark:hover:bg-slate-800/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded bg-blue-50 text-blue-600 dark:bg-blue-900/20">
                                        <span class="material-symbols-outlined">description</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Fleet Maintenance
                                            Report</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Generated on Sep 28, 2023
                                        </p>
                                    </div>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-primary dark:hover:text-white">
                                    <span class="material-symbols-outlined">download</span>
                                </button>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 rounded-lg border border-slate-100 hover:bg-slate-50 dark:border-slate-800 dark:hover:bg-slate-800/50 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded bg-red-50 text-red-600 dark:bg-red-900/20">
                                        <span class="material-symbols-outlined">picture_as_pdf</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Annual Growth
                                            Analytics</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Generated on Jan 15, 2023
                                        </p>
                                    </div>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-primary dark:hover:text-white">
                                    <span class="material-symbols-outlined">download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>