<?php
require_once "../Database/Database.php";
require_once "../Models/Car.php";

$category = $_POST['categories'] ?? '';

if ($category == '') {
    $cars = Car::getAllCars();
} else {
    $cars = Car::getByCategory((int)$category);
}

foreach ($cars as $car) {
?>
        <article class="flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-border-light dark:border-border-dark group hover:shadow-lg dark:hover:border-primary/50 transition-all duration-300">
          
            <div class="relative h-48 w-full overflow-hidden bg-gray-100 dark:bg-gray-700">

                <div class="absolute top-3 right-3 z-10">

                    <span class="inline-flex items-center rounded-full <?= $car["availability"] ? "bg-green-100 border-green-200 text-green-700" : "bg-red-100 border-red-200 text-red-700" ?> dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border dark:border-green-800">
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
<?php } ?>

 