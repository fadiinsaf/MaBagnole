<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Available Cars</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
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
                        "background-light": "#f8f9fc",
                        "background-dark": "#101622",
                        "text-main": "#0d121b",
                        "text-secondary": "#4c669a",
                        "border-light": "#e7ebf3",
                        "border-dark": "#2d3748",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #475569;
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-text-main dark:text-white antialiased transition-colors duration-200">

<?php require_once __DIR__ . "/../Components/header.php" ?>

    <div class="flex flex-col lg:flex-row max-w-7xl mx-auto w-full min-h-screen">
        <aside
            class="w-full lg:w-72 flex-shrink-0 p-6 lg:border-r border-border-light dark:border-border-dark bg-white/50 dark:bg-background-dark/50">
            <div class="lg:hidden flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Filters</h3>
                <span class="material-symbols-outlined">filter_list</span>
            </div>
            <div class="flex flex-col gap-6">
                <div>
                    <h3 class="text-text-main dark:text-white tracking-tight text-lg font-bold leading-tight pb-3">
                        Catigories</h3>
                    <div class="flex flex-col gap-2">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input checked=""
                                class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-primary focus:ring-primary/20"
                                type="checkbox" />
                            <span
                                class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">SUV</span>
                            <span class="ml-auto text-xs text-text-secondary dark:text-gray-500">(12)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input
                                class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-primary focus:ring-primary/20"
                                type="checkbox" />
                            <span
                                class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Sedan</span>
                            <span class="ml-auto text-xs text-text-secondary dark:text-gray-500">(8)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input
                                class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-primary focus:ring-primary/20"
                                type="checkbox" />
                            <span
                                class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Economy</span>
                            <span class="ml-auto text-xs text-text-secondary dark:text-gray-500">(4)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input
                                class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-primary focus:ring-primary/20"
                                type="checkbox" />
                            <span
                                class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Luxury</span>
                            <span class="ml-auto text-xs text-text-secondary dark:text-gray-500">(2)</span>
                        </label>
                    </div>
                </div>
            </div>
        </aside>
        <main class="flex-1 p-6 lg:p-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div class="flex flex-col gap-2">
                    <h1
                        class="text-text-main dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">
                        Our Fleet</h1>
                    <p class="text-text-secondary dark:text-gray-400 text-base font-normal leading-normal">Showing 24
                        available cars ready for your journey</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm font-medium text-text-secondary dark:text-gray-400 whitespace-nowrap">Sort
                        by:</span>
                    <div class="relative group">
                        <button
                            class="flex items-center gap-2 bg-white dark:bg-gray-800 border border-border-light dark:border-border-dark px-3 py-2 rounded-lg text-sm font-medium text-text-main dark:text-white shadow-sm hover:border-primary transition-colors">
                            Recommended
                            <span class="material-symbols-outlined text-[20px]">expand_more</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-12">
                <article
                    class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
                    <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border border-green-200 dark:border-green-800">
                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-green-500"></span> Available
                            </span>
                        </div>
                        <img alt="Toyota Camry"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Red Toyota sedan side profile on asphalt"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6U-O-kHux08GSL-U1wVH4d-SLQTG5xpjaEWjxUX-W95HFcXk5Zp57DTWCBEvsHPdeHFMHgW6k7JRSiAJku5y30jc_enY1sgCuSfobeoFeiGqMfVLgzoMTQbKnrHKcwBRY1UOhjR17o57GgpSLn1_pPTkM5mSWaGrZSuyIZX5zm1a3RQ6a1n9bH0GkxG4wTShcVPRthej_MkITBmea9PoHkFQZBrZBojDVjU6C0YWZ30US1yAKKBQkE-x3ZntcOu7QoclM6dmoTvc" />
                    </div>
                    <div class="flex flex-col flex-1 p-5">
                        <div class="mb-4">
                            <div
                                class="text-text-secondary dark:text-primary/80 text-xs font-bold uppercase tracking-wide mb-1">
                                Sedan</div>
                            <h3 class="text-text-main dark:text-white text-xl font-bold">Toyota Camry</h3>
                        </div>
                        <div
                            class="flex items-center gap-4 text-text-secondary dark:text-gray-400 text-sm mb-6 border-b border-border-light dark:border-border-dark pb-4">
                            <div class="flex items-center gap-1.5" title="Passengers">
                                <span class="material-symbols-outlined text-[18px]">group</span>
                                <span>5</span>
                            </div>
                            <div class="flex items-center gap-1.5" title="Transmission">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span>Auto</span>
                            </div>
                            <div class="flex items-center gap-1.5" title="Fuel">
                                <span class="material-symbols-outlined text-[18px]">local_gas_station</span>
                                <span>Hybrid</span>
                            </div>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-black text-text-main dark:text-white">$55</span>
                                <span class="text-sm text-text-secondary dark:text-gray-400 font-medium">/day</span>
                            </div>
                            <button
                                class="bg-white dark:bg-gray-700 border border-border-light dark:border-border-dark hover:border-primary hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:border-primary text-primary dark:text-blue-400 dark:hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-all duration-200">
                                View Details
                            </button>
                        </div>
                    </div>
                </article>
                <article
                    class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
                    <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border border-green-200 dark:border-green-800">
                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-green-500"></span> Available
                            </span>
                        </div>
                        <img alt="Mercedes C-Class"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Silver luxury sports car front view"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuATfeJjupvrFai_mlKxD-iBUYq8il85PfJYFVBGbWXey761Iq1FVd0efSEc7vcxEL3hHlWuuV5nQejMNZIP4OW6_FU7WQL-Ez-xfkBtgDbg1N2irzj1DVtf8Fsr3BC6VDc9GhsStUE0PVeWLrfBe9HnWpen5neD_U19vcRjgAthKKElUApBA0PvEIStJENSxcq9lRkvBPZc8wBG54WG94QSlCa7PvnaFQOZoz1TLpwSgAjYDhK_nOCe59B9tCVF1n32VL8ZiBgHM9I" />
                    </div>
                    <div class="flex flex-col flex-1 p-5">
                        <div class="mb-4">
                            <div
                                class="text-text-secondary dark:text-primary/80 text-xs font-bold uppercase tracking-wide mb-1">
                                Luxury</div>
                            <h3 class="text-text-main dark:text-white text-xl font-bold">Mercedes C-Class</h3>
                        </div>
                        <div
                            class="flex items-center gap-4 text-text-secondary dark:text-gray-400 text-sm mb-6 border-b border-border-light dark:border-border-dark pb-4">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">group</span>
                                <span>4</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span>Auto</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">speed</span>
                                <span>Sport</span>
                            </div>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-black text-text-main dark:text-white">$120</span>
                                <span class="text-sm text-text-secondary dark:text-gray-400 font-medium">/day</span>
                            </div>
                            <button
                                class="bg-white dark:bg-gray-700 border border-border-light dark:border-border-dark hover:border-primary hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:border-primary text-primary dark:text-blue-400 dark:hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-all duration-200">
                                View Details
                            </button>
                        </div>
                    </div>
                </article>
                <article
                    class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
                    <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center rounded-full bg-yellow-100 dark:bg-yellow-900/30 px-2.5 py-0.5 text-xs font-semibold text-yellow-700 dark:text-yellow-400 border border-yellow-200 dark:border-yellow-800">
                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-yellow-500"></span> Low Stock
                            </span>
                        </div>
                        <img alt="Honda CR-V"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="White SUV driving on a road"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_xrljV1PuwNTmOTJdKz96GoAObQh_YlnnIenyhVr6vFuijZROm_wke9sNgDVj58aWzACDpVbFaan9bEarHES3ZZvkelQAZNzBuR5syoHhhYLruShTGnsDYBqNPZ9zYkSkJFwlczkM3DT8hk_yqE3FkMHgGNcuh9TbtKMleUWbXub20nRcb5iRoohDLL9-uQdc19U3PFnZKigWCOaLGtvVUKNRMAW3D-yWMH05oTWNWI2O7LPD5drPssQg_SYsU0l1HIDVVRHzgb4" />
                    </div>
                    <div class="flex flex-col flex-1 p-5">
                        <div class="mb-4">
                            <div
                                class="text-text-secondary dark:text-primary/80 text-xs font-bold uppercase tracking-wide mb-1">
                                SUV</div>
                            <h3 class="text-text-main dark:text-white text-xl font-bold">Honda CR-V</h3>
                        </div>
                        <div
                            class="flex items-center gap-4 text-text-secondary dark:text-gray-400 text-sm mb-6 border-b border-border-light dark:border-border-dark pb-4">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">group</span>
                                <span>5</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span>Auto</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">ac_unit</span>
                                <span>A/C</span>
                            </div>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-black text-text-main dark:text-white">$75</span>
                                <span class="text-sm text-text-secondary dark:text-gray-400 font-medium">/day</span>
                            </div>
                            <button
                                class="bg-white dark:bg-gray-700 border border-border-light dark:border-border-dark hover:border-primary hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:border-primary text-primary dark:text-blue-400 dark:hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-all duration-200">
                                View Details
                            </button>
                        </div>
                    </div>
                </article>
                <article
                    class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
                    <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border border-green-200 dark:border-green-800">
                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-green-500"></span> Available
                            </span>
                        </div>
                        <img alt="Tesla Model 3"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Blue compact electric car"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVZq_x5vTya2fHWjkGbJ2IxH410Kbg-G1SfALbizQgaCuo6u1ixzfjUAaq6TN-iq4Q7GSQmoxF0DO4Rs2rLFl2V335-tswQE5oYurqjwkVUn7792t3ETY-yO4GJJ4qimQIxPGUU77cy3bx8qIO_mLCHY6vPYapf_muEm8WoGsvFSppfl2xvcMxaqk4E5QcY0v6Dgnam6_nbCjCcBkUl43XgR3gsmP8Y0Ir5dutJLdJ9JHATcDM9Lme6F84MPrU6vl4aQ-Wvb5VRdo" />
                    </div>
                    <div class="flex flex-col flex-1 p-5">
                        <div class="mb-4">
                            <div
                                class="text-text-secondary dark:text-primary/80 text-xs font-bold uppercase tracking-wide mb-1">
                                Electric</div>
                            <h3 class="text-text-main dark:text-white text-xl font-bold">Tesla Model 3</h3>
                        </div>
                        <div
                            class="flex items-center gap-4 text-text-secondary dark:text-gray-400 text-sm mb-6 border-b border-border-light dark:border-border-dark pb-4">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">group</span>
                                <span>5</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span>Auto</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">bolt</span>
                                <span>Electric</span>
                            </div>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-black text-text-main dark:text-white">$95</span>
                                <span class="text-sm text-text-secondary dark:text-gray-400 font-medium">/day</span>
                            </div>
                            <button
                                class="bg-white dark:bg-gray-700 border border-border-light dark:border-border-dark hover:border-primary hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:border-primary text-primary dark:text-blue-400 dark:hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-all duration-200">
                                View Details
                            </button>
                        </div>
                    </div>
                </article>
                <article
                    class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
                    <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border border-green-200 dark:border-green-800">
                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-green-500"></span> Available
                            </span>
                        </div>
                        <img alt="BMW X5"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Black luxury SUV front view"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6lglIN4w4iA7wEpvDE0aMp2xy8uJwZjFSxLRfZq_gptuxIEWGs9iswyT0QVncJWZxcrwp1IXs9DoJEObd5-9HWWD7jR6lDBoNmFy2PXAUugP4ofLWemfrRlKEJVevFOL09YqhJM5MV2pUbVy7nJ8Bx9vrfmb4E56jnC9L4aGyFmOn4r9JbXTC7aY8ig0FaUyivzntvrUmRJk3eHdciSbg-fBZF3gpr786zN3Fki1y9doSi8oZrn6W2z32oLlc7y0y5HOMG8Fc3gI" />
                    </div>
                    <div class="flex flex-col flex-1 p-5">
                        <div class="mb-4">
                            <div
                                class="text-text-secondary dark:text-primary/80 text-xs font-bold uppercase tracking-wide mb-1">
                                SUV</div>
                            <h3 class="text-text-main dark:text-white text-xl font-bold">BMW X5</h3>
                        </div>
                        <div
                            class="flex items-center gap-4 text-text-secondary dark:text-gray-400 text-sm mb-6 border-b border-border-light dark:border-border-dark pb-4">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">group</span>
                                <span>5</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span>Auto</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
                                <span>Premium</span>
                            </div>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-black text-text-main dark:text-white">$145</span>
                                <span class="text-sm text-text-secondary dark:text-gray-400 font-medium">/day</span>
                            </div>
                            <button
                                class="bg-white dark:bg-gray-700 border border-border-light dark:border-border-dark hover:border-primary hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:border-primary text-primary dark:text-blue-400 dark:hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-all duration-200">
                                View Details
                            </button>
                        </div>
                    </div>
                </article>
                <article
                    class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
                    <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border border-green-200 dark:border-green-800">
                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-green-500"></span> Available
                            </span>
                        </div>
                        <img alt="Ford Fiesta"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Red small hatchback car"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvL2XcZF9M1fkMu0eOhzpqkk5KLzDjlXuKMsniGWhZ64q6V9iJRNRBtjK_YQ_w7hf1AQPKpC3DtOSANF-2C49Fsdu3WsAlNUx1-Uz4ZAo5V03-mGj2-oicMMbdXqqwsJtS6DxGmlUMNJtC5iLwGPWggEoR3lAOh0SkwOvJgp11R29U6w2RdoBftkNPoT4JmbBEQ6CQCVPZlOPo4lkD26NMKVEIl8agU8Nc91gdEDl3SRHQMy13afwtCncQ17rSSUuJeUEPVwKRaPo" />
                    </div>
                    <div class="flex flex-col flex-1 p-5">
                        <div class="mb-4">
                            <div
                                class="text-text-secondary dark:text-primary/80 text-xs font-bold uppercase tracking-wide mb-1">
                                Economy</div>
                            <h3 class="text-text-main dark:text-white text-xl font-bold">Ford Fiesta</h3>
                        </div>
                        <div
                            class="flex items-center gap-4 text-text-secondary dark:text-gray-400 text-sm mb-6 border-b border-border-light dark:border-border-dark pb-4">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">group</span>
                                <span>4</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span>Manual</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">luggage</span>
                                <span>2 Bags</span>
                            </div>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-black text-text-main dark:text-white">$35</span>
                                <span class="text-sm text-text-secondary dark:text-gray-400 font-medium">/day</span>
                            </div>
                            <button
                                class="bg-white dark:bg-gray-700 border border-border-light dark:border-border-dark hover:border-primary hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:border-primary text-primary dark:text-blue-400 dark:hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-all duration-200">
                                View Details
                            </button>
                        </div>
                    </div>
                </article>
            </div>
            <div
                class="flex flex-col sm:flex-row items-center justify-between border-t border-border-light dark:border-border-dark pt-8 gap-4">
                <span class="text-sm text-text-secondary dark:text-gray-400">Showing <span
                        class="font-bold text-text-main dark:text-white">1-6</span> of <span
                        class="font-bold text-text-main dark:text-white">24</span> results</span>
                <div class="flex items-center gap-2">
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-gray-800 text-text-secondary dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors disabled:opacity-50"
                        disabled="">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg bg-primary text-white font-bold transition-colors">
                        1
                    </button>
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-gray-800 text-text-secondary dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-primary dark:hover:text-primary transition-colors">
                        2
                    </button>
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-gray-800 text-text-secondary dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-primary dark:hover:text-primary transition-colors">
                        3
                    </button>
                    <span class="text-text-secondary dark:text-gray-400 px-1">...</span>
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-gray-800 text-text-secondary dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-primary dark:hover:text-primary transition-colors">
                        5
                    </button>
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-gray-800 text-text-secondary dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-primary dark:hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </main>
    </div>

<?php require_once __DIR__ . "/../Components/footer.php" ?>
</body>

</html>