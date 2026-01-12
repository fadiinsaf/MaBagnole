<?php
require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Admin.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsAdmin.php";

session_start();

IsAuthed::handle();
IsAdmin::handle();

$categories = Category::getAllCategories();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $price = $_POST["price"];
    $availability = (int)$_POST["availability"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    $id = (int)$_POST["id"];
    $id_category = (int)$_POST["id_category"];

}
else{
        header("Location: /Views/adminFleetManagment.php");
        exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Fleet Management</title>
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

<body>
    <form id="carForm" class="p-6" action="../Controllers/edit_car.php" method="POST">
        <div id="carFormsContainer">

            <!-- Car forms will be dynamically added here -->
            <div class="car-form mb-6 p-4 border border-slate-200 rounded-lg dark:border-slate-700">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-sm text-slate-500 dark:text-slate-400">update form</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Brand -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Brand
                            *</label>
                        <input type="text" value="<?= $brand ?>" name="brand" required
                            class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                            placeholder="e.g., Tesla">
                    </div>

                    <!-- Model -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Model
                            *</label>
                        <input type="text" value="<?= $model ?>" name="model" required
                            class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                            placeholder="e.g., Model 3">
                    </div>


                        <div class="space-y-2">
                        <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Category
                            *</label>

                        <select name="availability" required
                            class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary">
                            <option value="">change availability</option>
                            <option value="1" <?= $availability?"selected":"" ?> >Available</option>
                            <option value="0" <?= !$availability?"selected":"" ?> >Rented</option>
                    
                            </select>
                        </div>


                    <div class="space-y-2">
                        <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Price Per Day
                            *</label>
                        <input type="number" value="<?=$price?>" name="pricePerDay" required
                            class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                            placeholder="e.g., 300 DH">
                    </div>

                    <!-- Category -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Category
                            *</label>

                        <select name="id_category" required
                            class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary">
                            <option value="">Select Category</option>

                            <?php foreach ($categories as $catigory): ?>

                                <option <?= $catigory["id"] === $id_category?"selected":"" ?> value="<?= $catigory["id"] ?>"><?= $catigory["name"] ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>

                <!-- Description -->
                <div class="mt-4 space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Description
                        *</label>
                    <textarea name="description" rows="3" required
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                        placeholder="Enter car description..."><?= $description ?></textarea>
                </div>

                <input type="hidden" value="<?= $id ?>" name="id">

                <!-- Image URL -->
                <div class="mt-4 space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Image URL
                        *</label>
                    <input type="url" value="<?= $image ?>" name="image" required
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                        placeholder="https://example.com/car-image.jpg">
                </div>
            </div>          
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex flex-col sm:flex-row justify-between gap-3">

            <div class="flex gap-3">
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                    <span class="material-symbols-outlined !text-[20px]">update</span>
                    Update Car
                </button>
            </div>
        </div>
    </form>
</body>

</html>