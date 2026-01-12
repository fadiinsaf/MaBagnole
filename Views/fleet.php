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

$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
if ($page < 1) $page = 1;

$perPage = 9;
$offset = ($page - 1) * $perPage;

$totalCars = Car::getCarsCount();
$totalPages = ceil($totalCars / $perPage);

$cars = Car::getPaginated($perPage, $offset);

$categories = Category::getAllCategories();
$count = Category::getCarsCountInCategories();

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

                    <?php foreach($categories as $category) : ?>

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input
                                value="<?= $category["id"] ?>"
                                class="category-filter h-5 w-5 rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-primary focus:ring-primary/20"
                                type="checkbox" />
                            <span
                                class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors"><?= $category["name"]?></span>
                            <span class="ml-auto text-xs text-text-secondary dark:text-gray-500">(<?= $count[$category["name"]]?>)</span>
                        </label>

                    <?php endforeach ; ?>


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
                    <p class="text-text-secondary dark:text-gray-400 text-base font-normal leading-normal">Showing <?= count($cars) ?>
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
            
            <div class="flex gap-2 justify-center mt-8">

                <?php if ($page > 1): ?>
                <a href="?page=<?= $page-1 ?>" class="px-4 py-2 border rounded">‹</a>
                <?php endif; ?>

                <?php for ($i=1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?= $i ?>"
                class="px-4 py-2 rounded
                <?= $i == $page ? 'bg-blue-600 text-white' : 'border' ?>">

                <?= $i ?>
                
                </a>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                <a href="?page=<?= $page+1 ?>" class="px-4 py-2 border rounded">›</a>
                <?php endif; ?>

            </div>

        </main>

    </div>

<?php require_once __DIR__ . "/../Components/footer.php" ?>
<script>
document.querySelectorAll(".category-filter").forEach(cb => {
    cb.addEventListener("change", function() {

        let selected = [];

        document.querySelectorAll(".category-filter:checked").forEach(c => {
            selected.push(c.value);
        });

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/Controllers/filter_cars.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (this.status === 200) {
                document.getElementById("carsContainer").innerHTML = this.responseText;
            }
        };
        console.log(selected);
        xhr.send("categories=" + selected.join(","));
    });
});
</script>
</body>

</html>