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


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $id = (int)$_POST["id"];

}
else{
        header("Location: /Views/adminCategoriesManagment.php");
        exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Categories Management</title>
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
        <form id="categoryForm" class="p-6" method="POST" action="../Controllers/edit_category.php">
            <div id="categoryFormsContainer">
                <!-- Category forms will be dynamically added here -->
                <div class="category-form mb-6 p-4 border border-slate-200 rounded-lg dark:border-slate-700">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="font-medium text-slate-900 dark:text-white">Category #1</h4>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Required form</span>
                    </div>

                    <div class="grid grid-cols-1 gap-4">
                        <!-- Name -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Category Name
                                *</label>
                            <input type="text" name="name" value="<?=$name?>" required maxlength="50"
                                class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                placeholder="e.g., Electric Vehicles">
                            <p class="text-xs text-slate-500 dark:text-slate-400">Maximum 50 characters</p>
                        </div>

                        <!-- Description -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Description
                                *</label>
                            <textarea name="description" rows="3" required
                                class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                placeholder="Enter category description..."><?=$description?></textarea>
                                <input type="hidden" value="<?=$id?>" name="id">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex flex-col sm:flex-row justify-between gap-3">
                <div class="flex gap-3">
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                        <span class="material-symbols-outlined !text-[20px]">update</span>
                        Update Categories
                    </button>
                </div>
            </div>
        </form>
</body>

</html>