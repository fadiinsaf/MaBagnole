<?php
require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Admin.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Car.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsClient.php";

session_start();

IsAuthed::handle();
IsClient::handle();


if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["model"])) {
    $model = $_GET["model"];

    $cars = Car::searchCarByModel($model);


} else {
    header("Location: /Views/home.php");
    exit();
}


?>

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
        <main class="flex-1 p-6 lg:p-10">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div class="flex flex-col gap-2">
                    <h1
                        class="text-text-main dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">
                        Resault</h1>
                    <p class="text-text-secondary dark:text-gray-400 text-base font-normal leading-normal">Found <?= count($cars) ?>
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

            <div id="carsContainer"  class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-12">

                <?php foreach($cars as $car) : ?>
                        <article
                            class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
                            <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                                <div class="absolute top-3 right-3 z-10">
                                    <span
                                        class="inline-flex items-center rounded-full <?= $car["availability"] ? "bg-green-100 border-green-200 text-green-700" : "bg-red-100 border-red-200 text-red-700" ?> dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border dark:border-green-800">
                                        <span class="mr-1.5 h-1.5 w-1.5 rounded-full <?= $car["availability"] ? "bg-green-500" : "bg-red-500" ?>"></span> <?= $car["availability"] ? "Available" : "Rented" ?>
                                    </span>
                                </div>
                                <img alt="<?= $car["image"]?>"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="<?= $car["image"]?>"
                                    src="<?= $car["image"]?>" />
                            </div>
                            <div class="flex flex-col flex-1 p-5">
                                <div class="mb-4">
                                    <div
                                        class="text-text-secondary dark:text-primary/80 text-xs font-bold uppercase tracking-wide mb-1">
                                        <?= $car["name"]?></div>
                                    <h3 class="text-text-main dark:text-white text-xl font-bold"><?= $car["model"]?></h3>
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
                                        <span class="text-xl font-black text-text-main dark:text-white"><?= $car["pricePerDay"]?> DH</span>
                                        <span class="text-sm text-text-secondary dark:text-gray-400 font-medium">/day</span>
                                    </div>
                                    <a href="carDetails.php?id=<?= $car["car_id"]?>"
                                        class="bg-white dark:bg-gray-700 border border-border-light dark:border-border-dark hover:border-primary hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:border-primary text-primary dark:text-blue-400 dark:hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-all duration-200">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </article>
                <?php endforeach; ?>
            </div>
            
            <div class="flex flex-col sm:flex-row items-center justify-between border-t border-border-light dark:border-border-dark pt-8 gap-4">
                
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