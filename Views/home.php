<?php
require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Admin.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/Car.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsClient.php";

session_start();

IsAuthed::handle();
IsClient::handle();
$cars = Car::getAllCars(3);

?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Car Rental</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS with Config -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "sans": ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white transition-colors duration-200">

<?php require_once __DIR__ . "/../Components/header.php" ?>
    <!-- Hero Section -->
    <div class="relative w-full bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
            <div class="@container">
                <div class="relative flex flex-col items-start justify-end min-h-[500px] lg:min-h-[600px] w-full rounded-2xl overflow-hidden bg-cover bg-center group"
                    data-alt="Sleek silver car driving on a scenic coastal road at sunset"
                    style='background-image: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBXf_wy_Dtsi-BagqPOpqBP-dT0DjwVF3Hg0D_ot67xbcQ8DtO2XTnlD2OA2kR-D8ZF3id2Q1Vt5xb30EYu8lIF7B5CcKPKD3OFFAhXoVWjU95XhbiKbjAa7BBOpdDcYkauZEvnbRt6s0C0Kwlajw9WRJQ7yAoTBtwhteN53fdhsQrxtXBk3VXjBaE0uIDV0wsO4ayrqdX_SaWerHWhOsnmx-rT9snvBpdUjo1G1rK8mBvSwz5lRcbLPkirfivop-370STCeLu9UNE");'>
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors duration-500">
                    </div>
                    <div class="relative z-10 p-6 md:p-12 lg:p-16 max-w-3xl">
                        <h1
                            class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight mb-4 drop-shadow-sm">
                            Drive the Experience.<br />Rent with MaBagnole.
                        </h1>
                        <p class="text-lg md:text-xl text-slate-200 font-medium mb-8 max-w-xl drop-shadow-sm">
                            Premium cars at affordable daily rates. Transparent pricing with absolutely no hidden fees.
                        </p>
                        <a href="/Views/fleet.php"
                            class="inline-flex items-center justify-center h-12 px-8 text-base font-bold text-white bg-primary rounded-lg hover:bg-blue-700 transition-all shadow-lg shadow-blue-900/20">
                            Explore Cars
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Widget (Floating) -->

    <div class="relative w-full -mt-8 mb-12 z-20 px-4 sm:px-6 lg:px-8">
        <form action="searchResult.php" method="GET">
            <div
                class="max-w-[1100px] mx-auto bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 p-4 md:p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <div class="flex flex-col gap-1.5">
                        <label
                            class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">model</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary">category</span>
                            <input required
                                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                placeholder="Corrola v8" type="text" name="model" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Pick-up
                            Date</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary">calendar_today</span>
                            <input required
                                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                type="date" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Return
                            Date</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary">event</span>
                            <input required
                                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                type="date" />
                        </div>
                    </div>
                    <button
                        class="w-full h-[42px] bg-primary hover:bg-blue-700 text-white font-bold rounded-lg transition-colors flex items-center justify-center gap-2 shadow-md shadow-blue-500/20">
                        <span class="material-symbols-outlined">search</span>
                        Find a Car
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- How it Works Section -->
    <div class="w-full py-16 bg-white dark:bg-slate-900">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">Rent in 3 Easy Steps</h2>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">We made the rental process seamless so
                    you can get on the road faster.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div
                    class="flex flex-col items-center text-center p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <div
                        class="size-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">location_on</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">1. Choose Location</h3>
                    <p class="text-slate-600 dark:text-slate-400">Select where you want to pick up your car from our
                        wide network of stations.</p>
                </div>
                <!-- Step 2 -->
                <div
                    class="flex flex-col items-center text-center p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <div
                        class="size-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">calendar_month</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">2. Pick a Date</h3>
                    <p class="text-slate-600 dark:text-slate-400">Choose the dates that work best for your trip with
                        flexible cancellation policies.</p>
                </div>
                <!-- Step 3 -->
                <div
                    class="flex flex-col items-center text-center p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <div
                        class="size-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">key</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">3. Book Your Car</h3>
                    <p class="text-slate-600 dark:text-slate-400">Confirm your booking instantly and get ready for your
                        next adventure.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Fleet Section -->
    <div class="w-full py-16 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white">Popular Rentals</h2>
                <a class="text-primary font-semibold hover:underline flex items-center gap-1" href="/Views/fleet.php">
                    View All
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Cards -->
                 <?php foreach($cars as $car):?>
                    <div
                        class="group flex flex-col bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-video bg-cover bg-center"
                            data-alt="White Tesla Model 3 parked in a modern setting"
                            style='background-image: url("<?= $car["image"] ?>");'>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white"><?= $car["model"] ?></h3>
                                <span
                                    class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold px-2 py-1 rounded"><?= $car["name"] ?></span>
                            </div>
                            <div class="flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400 mb-4">
                                <div class="flex items-center gap-1">
                                    <?= $car["car_description"] ?>
                                </div>
                            </div>
                            <div
                                class="mt-auto flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-700">
                                <div>
                                    <span class="text-xl font-bold text-slate-900 dark:text-white"><?= $car["pricePerDay"] ?> DH</span>
                                    <span class="text-slate-500 dark:text-slate-400 text-sm">/day</span>
                                </div>
                                <a href="carDetails.php?id=<?= $car["car_id"] ?>"
                                    class="bg-primary hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-lg transition-colors">
                                    Rent Now
                                </a>
                            </div>
                        </div>
                    </div>
                 <?php endforeach;?>

            </div>
        </div>
    </div>

<?php require_once __DIR__ . "/../Components/footer.php" ?>
</body>

</html>