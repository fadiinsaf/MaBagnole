<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tesla Model 3 - MaBagnole</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap"
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
                        "primary-dark": "#0f4bbd",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1e293b",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display transition-colors duration-200">

<?php require_once __DIR__ . "/../Components/header.php" ?>
    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <main class="layout-container flex flex-col flex-1 px-4 lg:px-40 py-6 lg:py-10">
            <div class="layout-content-container flex flex-col w-full max-w-[1280px] mx-auto flex-1">
                <div class="flex flex-wrap gap-2 mb-6 text-sm">
                    <a class="text-slate-500 dark:text-slate-400 hover:text-primary font-medium" href="#">Home</a>
                    <span class="text-slate-400 dark:text-slate-600">/</span>
                    <a class="text-slate-500 dark:text-slate-400 hover:text-primary font-medium" href="#">Search</a>
                    <span class="text-slate-400 dark:text-slate-600">/</span>
                    <a class="text-slate-500 dark:text-slate-400 hover:text-primary font-medium" href="#">Electric</a>
                    <span class="text-slate-400 dark:text-slate-600">/</span>
                    <span class="text-slate-900 dark:text-slate-100 font-medium">Tesla Model 3</span>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    <div class="lg:col-span-8 flex flex-col gap-8">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-wrap justify-between items-start gap-4">
                                <div>
                                    <div class="flex items-center gap-3 mb-1">
                                        <span
                                            class="px-2 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider rounded">Luxury
                                            Sedan</span>
                                        <div class="flex items-center gap-1 text-yellow-500">
                                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            <span class="text-slate-700 dark:text-slate-300 text-sm font-semibold">4.9
                                                <span class="text-slate-400 font-normal">(120 reviews)</span></span>
                                        </div>
                                    </div>
                                    <h1
                                        class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-tight">
                                        Tesla Model 3 Performance</h1>
                                    <p class="text-slate-500 dark:text-slate-400 text-lg mt-1">San Francisco, CA • 2023
                                        Model</p>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center justify-center size-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                                        <span class="material-symbols-outlined">favorite</span>
                                    </button>
                                    <button
                                        class="flex items-center justify-center size-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                                        <span class="material-symbols-outlined">share</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div
                                class="w-full bg-slate-200 dark:bg-slate-800 aspect-video rounded-xl overflow-hidden relative group cursor-pointer">
                                <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Red Tesla Model 3 front view parked on a modern street"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6FtnTjrfcgehzmOrAdqPnDLXaor1Q6gQIIbEwwabP1f0-WAqLflUMVWCwaO0he14HXx7kFwHoOlHqpFwrv_cTVVyAZVvRtjRhVPdW6VcLJdil7ZFAUXajfnMIwilf4p52K8oTsGqy1qOsD9ksWf1Kr-nNzVaXqf0rOPlM69OLbRZPnxHFG0qlgq933SdhxmRFXKNA58mPb5ToAHw-kn7bLE8pt263Xt3FGUtd3ehjbQ8yxbcobZYwIo9CrOUVWKOjpjqnBDkDJSs");'>
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 bg-black/70 backdrop-blur-sm text-white px-3 py-1.5 rounded-lg text-sm font-medium flex items-center gap-2">
                                    <span class="material-symbols-outlined text-base">grid_view</span> View all photos
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-3">
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity"
                                    data-alt="Tesla Model 3 interior dashboard view"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA3IqZB1lwjv12EBLalBMowSbQN3CEiDew7uvF4fbaCOordh6mqSYmNy8GcDlvhoSQBeDQ2KiFtdAjsoIKF40IL5FEj-oa76SdrZKh8M35BWut2mp01S5M0UqM0NxuoVNfPuWxpRkOQOquVD5jWxJp8R6y0uMUolkFQ90mO23Yep1c_dvofLIdOoKyOIrr2leky70-cmN670NnEi0aZ7yMPl0yhl9KpN0g-w63o7PJhLG0NLQsQFx5leIwl8CEtu8DKFdYVeKi_SYU");'>
                                </div>
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity"
                                    data-alt="Tesla Model 3 steering wheel detail"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCMb8Smc_XZ2oz_Ye1iE8VkIQAIUeHpJSAYg7D5QzB2MOjgGaIK8u4rJUY_gDET2MXlWTBt6O6xsN47XZOKv3o0d1TZvtKSvi0DluX7yuFByIiWub1_LeYpbdvI6Y-d5UzRQWPXeEYMEAnydcIkHvLQjQdYWT-DlcE18I9UT6YveEbtuaCELHPTFoOFsVnOFRBD0xgCdROx8aNWLqHA55tpBvTU71f8es_r4xxXbUfp4Binl0vtxS3_5OmEsvFkUOcyKRBvJyNl4SY");'>
                                </div>
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity"
                                    data-alt="Tesla Model 3 back seat view"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSwD3UjMNfzIm1Q6aZ2VJCtjTPX8AVcYW7i2JWSdwq-SEanbBgFB0aFjgVmiXRGd6nfUPTFbgEC29vh0hxxfiBUYUn3JacI_yrTgsycf9SgRErSElvY91DPLUO-My__Ze_HaQtaRInD-ZyWED5pZn4V960nHnBuhjd0lNk3aOes3zTVexsxbl3yFUrXl3cy6_srn-1b--ty_OXfV8kAj0LlpfI9L4fiyadJrtK-AEE_MwbST8uIvFdcxEglRNJduLRJE_QBCBQSQ8");'>
                                </div>
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity relative"
                                    data-alt="Tesla Model 3 charging port detail"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBkZ-fwkoP6stxN20tKIUJnFbCA6PH3rhsoE1ArfEUPNvMqcu45jlZG1t0AJjbXZDD40-PIuB-CfvViKPAGlz_0q65BMZETaPzoH0r15-FJJtcwKvEu4X9V1Av5qnUTPTNbzwXlHQvWzBsqMjhFnmXhRccGloPD-q9HGUQt1BvAcGw0UGRCuIFQ0VVd4VGm-zw5qU0oFPBBZcZi4gX-iUZbAl3bcEgYszlHwnBD6uNIvWfTuRYG3y5fOCnv6UmKek10vBrUW4_tJUA");'>
                                    <div
                                        class="absolute inset-0 bg-black/40 flex items-center justify-center rounded-lg">
                                        <span class="text-white font-bold text-lg">+12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span class="material-symbols-outlined text-primary text-3xl">speed</span>
                                <div class="flex flex-col">
                                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wide">0-60
                                        mph</span>
                                    <span class="text-slate-900 dark:text-white font-bold">3.1s</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span
                                    class="material-symbols-outlined text-primary text-3xl">airline_seat_recline_normal</span>
                                <div class="flex flex-col">
                                    <span
                                        class="text-xs text-slate-500 uppercase font-semibold tracking-wide">Seats</span>
                                    <span class="text-slate-900 dark:text-white font-bold">5 Adults</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span class="material-symbols-outlined text-primary text-3xl">ev_station</span>
                                <div class="flex flex-col">
                                    <span
                                        class="text-xs text-slate-500 uppercase font-semibold tracking-wide">Range</span>
                                    <span class="text-slate-900 dark:text-white font-bold">315 mi</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span class="material-symbols-outlined text-primary text-3xl">settings_suggest</span>
                                <div class="flex flex-col">
                                    <span
                                        class="text-xs text-slate-500 uppercase font-semibold tracking-wide">Gear</span>
                                    <span class="text-slate-900 dark:text-white font-bold">Auto</span>
                                </div>
                            </div>
                        </div>
                        <div class="h-px w-full bg-slate-200 dark:bg-slate-800"></div>
                        <section class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Car Description</h3>
                            <div class="text-slate-600 dark:text-slate-300 leading-relaxed space-y-4">
                                <p>
                                    Experience the thrill of driving the Tesla Model 3 Performance. This electric
                                    vehicle combines lightning-fast acceleration with a minimalist, high-tech interior.
                                    Perfect for weekend getaways or business trips in style.
                                </p>
                                <p>
                                    Features include the latest Autopilot software, premium audio system, and a full
                                    glass roof that provides an airy, open feel. The car is kept in pristine condition
                                    and fully charged upon pickup.
                                </p>
                            </div>
                        </section>
                        <section class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Features &amp; Amenities</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-8">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Autopilot Included</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Premium Connectivity</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Heated Seats (All)</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Wireless Phone Charging</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Bluetooth &amp; USB-C</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">15-inch Touchscreen</span>
                                </div>
                            </div>
                        </section>
                        <div class="h-px w-full bg-slate-200 dark:bg-slate-800"></div>
                        <section class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Hosted by Sarah M.</h3>
                            <div class="flex items-start gap-4">
                                <div class="size-16 rounded-full bg-slate-200 dark:bg-slate-700 bg-center bg-cover border-2 border-white dark:border-slate-600 shadow-md"
                                    data-alt="Portrait of the car host Sarah smiling"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBDnDZS9Fr_YcA12IwGL38UtglbavFPBQnrmfCcDMqGlQLWAlQIVKR3-AHJmPyO66-qItd81L66U3YryzJgMP0aB0ikTM1EvjwI1XKmjjp_Lk6YLPErlFnwEcVXPC1G_LsKzTFO7LFtDY_r2knNRcJqXHLs-NHam3HWWzE-ELjLutfWdpmhz42O_OWgvtRXxAE1ur97QDYwoXaWVhRxqPW5zqcN84TqGSG-5J_NDGqu27XKDzNAHpYAzIjPOU7iyivYZ7QT8NYvGa0");'>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-2">
                                        <span class="font-bold text-slate-900 dark:text-white">Sarah M.</span>
                                        <span
                                            class="text-xs bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 px-2 py-0.5 rounded-full">All-Star
                                            Host</span>
                                    </div>
                                    <p class="text-sm text-slate-500">Joined MaBagnole in 2021 • 150+ Trips</p>
                                    <div
                                        class="flex items-center gap-1 text-sm text-slate-600 dark:text-slate-400 mt-1">
                                        <span class="material-symbols-outlined text-base">verified</span>
                                        Identity Verified
                                        <span class="mx-2">•</span>
                                        <span class="material-symbols-outlined text-base">schedule</span>
                                        Response time: 1 hr
                                    </div>
                                    <button
                                        class="mt-3 w-fit text-primary font-medium text-sm border border-primary/30 rounded-lg px-4 py-2 hover:bg-primary/5 transition-colors">
                                        Contact Host
                                    </button>
                                </div>
                            </div>
                        </section>
                        <div class="h-px w-full bg-slate-200 dark:bg-slate-800"></div>
                        <section class="flex flex-col gap-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Reviews</h3>
                                    <span
                                        class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-xs font-bold px-2 py-0.5 rounded-full">120</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm font-bold text-slate-900 dark:text-white">4.9</span>
                                    <div class="flex text-yellow-500 text-sm">
                                        <span class="material-symbols-outlined text-base fill-current">star</span>
                                        <span class="material-symbols-outlined text-base fill-current">star</span>
                                        <span class="material-symbols-outlined text-base fill-current">star</span>
                                        <span class="material-symbols-outlined text-base fill-current">star</span>
                                        <span class="material-symbols-outlined text-base fill-current">star_half</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-5 border border-slate-100 dark:border-slate-800">
                                <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-4">Leave a review</h4>
                                <div class="flex gap-4">
                                    <div class="hidden sm:block size-10 rounded-full bg-center bg-cover border border-slate-200 dark:border-slate-700"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDOt8SjZndY1WG_wMp0IkpaH6i_M5_z-uv88x5MYX5tl_-LTprU5l3bl2J9zBnqxuadXKp4Xo3ZSJnvTmGeZZ74QR1BkxaekfmfzshIGHEEwaz8w_W9UMp5exO11lVZsbSUDptfZhovuuXKCBc1LcISuVTZLBFZKxI1C8xICUAjnqbzJzPOEQ-sxl432rnikiB-uQit6UqU4AJazFdVLzFG6dR3gmRg1YGHkStsK9ViKqzScApTb4BYLkKUuyXWiOFo-wYUNunszdI");'>
                                    </div>
                                    <div class="flex-1 flex flex-col gap-3">
                                        <textarea
                                            class="w-full bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-3 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none resize-none h-24 placeholder:text-slate-400"
                                            placeholder="Share your experience with this car..."></textarea>
                                        <div class="flex flex-wrap justify-between items-center gap-3">
                                            <div class="flex items-center gap-1">
                                                <span class="text-xs font-medium text-slate-500 mr-2">Your
                                                    rating:</span>
                                                <button class="text-yellow-400 hover:text-yellow-500"><span
                                                        class="material-symbols-outlined fill-current">star</span></button>
                                                <button class="text-yellow-400 hover:text-yellow-500"><span
                                                        class="material-symbols-outlined fill-current">star</span></button>
                                                <button class="text-yellow-400 hover:text-yellow-500"><span
                                                        class="material-symbols-outlined fill-current">star</span></button>
                                                <button
                                                    class="text-slate-300 dark:text-slate-600 hover:text-yellow-400"><span
                                                        class="material-symbols-outlined">star</span></button>
                                                <button
                                                    class="text-slate-300 dark:text-slate-600 hover:text-yellow-400"><span
                                                        class="material-symbols-outlined">star</span></button>
                                            </div>
                                            <button
                                                class="bg-primary hover:bg-primary-dark text-white font-medium py-2 px-5 rounded-lg text-sm transition-colors shadow-sm shadow-primary/20">
                                                Post Review
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-6">
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="size-10 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-300 flex items-center justify-center font-bold text-sm flex-shrink-0">
                                        JR
                                    </div>
                                    <div class="flex flex-col gap-1 w-full">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h5 class="font-bold text-slate-900 dark:text-white text-sm">James
                                                    Rodriguez</h5>
                                                <span class="text-xs text-slate-500">October 12, 2023</span>
                                            </div>
                                            <div class="flex text-yellow-500 text-xs">
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            </div>
                                        </div>
                                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mt-1">
                                            Absolutely fantastic experience! The car was clean, fully charged, and drove
                                            like a dream. The acceleration on this Performance model is something else.
                                            Highly recommend Sarah as a host.
                                        </p>
                                    </div>
                                </div>
                                <div class="h-px w-full bg-slate-100 dark:bg-slate-800"></div>
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="size-10 rounded-full bg-teal-100 dark:bg-teal-900/30 text-teal-600 dark:text-teal-300 flex items-center justify-center font-bold text-sm flex-shrink-0">
                                        AL
                                    </div>
                                    <div class="flex flex-col gap-1 w-full">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h5 class="font-bold text-slate-900 dark:text-white text-sm">Anna Lee
                                                </h5>
                                                <span class="text-xs text-slate-500">September 28, 2023</span>
                                            </div>
                                            <div class="flex text-yellow-500 text-xs">
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span
                                                    class="material-symbols-outlined text-sm text-slate-300 dark:text-slate-600">star</span>
                                            </div>
                                        </div>
                                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mt-1">
                                            Great car for a weekend trip to Napa. Spacious enough for 4 adults. The
                                            autopilot made the highway drive very relaxing.
                                        </p>
                                    </div>
                                </div>
                                <div class="h-px w-full bg-slate-100 dark:bg-slate-800"></div>
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="size-10 rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 dark:text-orange-300 flex items-center justify-center font-bold text-sm flex-shrink-0">
                                        DK
                                    </div>
                                    <div class="flex flex-col gap-1 w-full">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h5 class="font-bold text-slate-900 dark:text-white text-sm">David Kim
                                                </h5>
                                                <span class="text-xs text-slate-500">September 15, 2023</span>
                                            </div>
                                            <div class="flex text-yellow-500 text-xs">
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            </div>
                                        </div>
                                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mt-1">
                                            Seamless pickup and drop-off. Car was exactly as described.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="self-center text-primary font-medium text-sm border border-primary/30 rounded-lg px-6 py-2.5 hover:bg-primary/5 transition-colors mt-2">
                                Show all 120 reviews
                            </button>
                        </section>
                    </div>
                    <div class="lg:col-span-4 relative">
                        <div
                            class="sticky top-24 flex flex-col gap-0 shadow-xl rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark border border-slate-200 dark:border-slate-800">
                            <div
                                class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-end">
                                <div>
                                    <span class="text-3xl font-black text-slate-900 dark:text-white">$85</span>
                                    <span class="text-slate-500 dark:text-slate-400">/ day</span>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span
                                        class="text-xs font-bold text-green-600 dark:text-green-400 bg-green-100 dark:bg-green-900/30 px-2 py-1 rounded">Available
                                        now</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col gap-5">
                                <div class="flex flex-col gap-4">
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex flex-col gap-1.5">
                                            <label
                                                class="text-xs font-bold uppercase tracking-wide text-slate-500">Pick-up</label>
                                            <div class="relative">
                                                <input
                                                    class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                                    type="date" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-1.5">
                                            <label
                                                class="text-xs font-bold uppercase tracking-wide text-slate-500">Return</label>
                                            <div class="relative">
                                                <input
                                                    class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                                    type="date" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1.5">
                                        <label
                                            class="text-xs font-bold uppercase tracking-wide text-slate-500">Location</label>
                                        <div class="relative">
                                            <select
                                                class="w-full appearance-none bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                                                <option>San Francisco International Airport (SFO)</option>
                                                <option>Downtown SF - Union Square</option>
                                                <option>Oakland Airport (OAK)</option>
                                            </select>
                                            <span
                                                class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 pointer-events-none text-lg">expand_more</span>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3.5 px-4 rounded-xl shadow-lg shadow-primary/30 transition-all active:scale-[0.98]">
                                    Reserve Now
                                </button>
                                <div class="flex flex-col gap-2 pt-2">
                                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-300">
                                        <span>$85 x 3 days</span>
                                        <span>$255</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-300">
                                        <span>Service fee</span>
                                        <span>$25</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-300">
                                        <span>Insurance</span>
                                        <span>$30</span>
                                    </div>
                                    <div class="h-px bg-slate-200 dark:bg-slate-700 my-1"></div>
                                    <div class="flex justify-between font-bold text-slate-900 dark:text-white text-lg">
                                        <span>Total</span>
                                        <span>$310</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-slate-50 dark:bg-slate-800/50 p-4 border-t border-slate-100 dark:border-slate-800">
                                <div class="flex items-center justify-center gap-6">
                                    <div class="flex flex-col items-center gap-1">
                                        <span
                                            class="material-symbols-outlined text-slate-400 text-xl">verified_user</span>
                                        <span class="text-[10px] text-slate-500 uppercase font-bold">Secure</span>
                                    </div>
                                    <div class="flex flex-col items-center gap-1">
                                        <span
                                            class="material-symbols-outlined text-slate-400 text-xl">event_available</span>
                                        <span class="text-[10px] text-slate-500 uppercase font-bold">Free Cancel</span>
                                    </div>
                                    <div class="flex flex-col items-center gap-1">
                                        <span
                                            class="material-symbols-outlined text-slate-400 text-xl">support_agent</span>
                                        <span class="text-[10px] text-slate-500 uppercase font-bold">24/7 Help</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php require_once __DIR__ . "/../Components/footer.php" ?>
    </div>

</body>

</html>