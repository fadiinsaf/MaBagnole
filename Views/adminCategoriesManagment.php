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

$admin = $_SESSION["user"];
$categories = Category::getAllCategories();
$count = Category::getCarsCountInCategories();

?>

<!DOCTYPE html>
<html class="light" lang="en">

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

<body
    class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-white antialiased overflow-hidden">
    <div class="flex h-screen overflow-hidden">
        <?php require_once __DIR__ . "/../Components/aside.php" ?>

        <div class="flex flex-1 flex-col overflow-hidden relative">
            <?php require_once __DIR__ . "/../Components/headerDashBoard.php" ?>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-background-light dark:bg-background-dark p-6">

                <div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Categories Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Create, edit, and organize vehicle
                            categories for your platform.</p>
                    </div>
                    <div class="flex gap-3">
                        <button onclick="openAddCategoryModal()"
                            class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                            <span class="material-symbols-outlined !text-[20px]">add_circle</span>
                            Add Category
                        </button>
                    </div>
                </div>

                <div
                    
                class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">All Categories</h3>
                        <div class="flex gap-2 w-full sm:w-auto">
                            <div class="relative flex-1 sm:flex-none">
                                <span
                                    class="absolute left-2 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[18px]">filter_list</span>
                                <select
                                    class="h-9 rounded-lg border-slate-200 bg-slate-50 pl-8 pr-4 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white w-full">
                                    <option>All Statuses</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                            <div class="relative flex-1 sm:flex-none">
                                <span
                                    class="absolute left-2 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[18px]">sort</span>
                                <select
                                    class="h-9 rounded-lg border-slate-200 bg-slate-50 pl-8 pr-4 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white w-full">
                                    <option>Name (A-Z)</option>
                                    <option>Name (Z-A)</option>
                                    <option>Most Vehicles</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">

                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Category Name</th>
                                    <th class="px-6 py-3 font-semibold">Description</th>
                                    <th class="px-6 py-3 font-semibold">Vehicle Count</th>
                                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                
                                <?php foreach($categories as $category):?>
                                    <form action="editCategory.php" method="post">
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                            <td class="px-6 py-4">
                                                <div>
                                                    <p class="font-medium text-slate-900 dark:text-white"><?= $category["name"] ?>
                                                    <input type="hidden" value="<?= $category["name"] ?>" name="name">
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-slate-600 dark:text-slate-400"><?= $category["description"] ?></td>
                                            <input type="hidden" value="<?= $category["description"] ?>" name="description">
                                            <input type="hidden" value="<?= $category["id"] ?>" name="id">

                                            <td class="px-6 py-4 font-medium text-slate-900 dark:text-white"><?= $count[$category["name"]] ?> vehicles</td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-1">
                                                    
                                                    <button type="submit"
                                                        class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                                                        title="Edit Category">
                                                        <span class="material-symbols-outlined !text-[20px]">edit</span>
                                                    </button>
                                                
                                                    <a href="../Controllers/delete_category.php?id=<?= $category["id"] ?>"
                                                        class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                                                        title="Delete Category">
                                                        <span class="material-symbols-outlined !text-[20px]">delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach;?>

                            </tbody>
                        </table>

                    </div>
                    <div
                        class="flex items-center justify-between border-t border-slate-200 bg-white px-6 py-4 dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="text-sm text-slate-500 dark:text-slate-400">
                            Showing <span class="font-medium text-slate-900 dark:text-white">1-5</span> of <span
                                class="font-medium text-slate-900 dark:text-white"><?= count($categories) ?></span> categories
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-sm font-medium text-slate-500 hover:bg-slate-50 disabled:opacity-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-sm font-medium text-slate-500 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700">
                                Next
                            </button>
                        </div>
                    </div>
                </div>

            </main>

        </div>
    </div>

    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="fixed inset-0 bg-black/50 transition-opacity" onclick="closeCategoryModal()"></div>

            <div
                class="relative w-full max-w-2xl transform rounded-xl bg-white shadow-xl transition-all dark:bg-[#151b2b] dark:border dark:border-slate-700">
                <!-- Modal Header -->
                <div
                    class="flex items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Add New Category(s)</h3>
                    <button onclick="closeCategoryModal()"
                        class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-slate-700">
                        <span class="material-symbols-outlined !text-[20px]">close</span>
                    </button>
                </div>

                <!-- Form Container -->
                <form id="categoryForm" class="p-6" method="POST" action="../Controllers/add_category.php">
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
                                    <input type="text" name="name[]" required maxlength="50"
                                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                        placeholder="e.g., Electric Vehicles">
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Maximum 50 characters</p>
                                </div>

                                <!-- Description -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Description
                                        *</label>
                                    <textarea name="description[]" rows="3" required
                                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                                        placeholder="Enter category description..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 flex flex-col sm:flex-row justify-between gap-3">
                        <button type="button" onclick="addAnotherCategory()"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700">
                            <span class="material-symbols-outlined !text-[20px]">add</span>
                            Add Another Category
                        </button>

                        <div class="flex gap-3">
                            <button type="button" onclick="closeCategoryModal()"
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700">
                                Cancel
                            </button>
                            <button type="submit"
                                class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                                <span class="material-symbols-outlined !text-[20px]">save</span>
                                Save All Categories
                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <script>
        // Global variables for categories
        let categoryFormCount = 1;

        // Open modal function
        function openAddCategoryModal() {
            const modal = document.getElementById('addCategoryModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Close modal function
        function closeCategoryModal() {
            const modal = document.getElementById('addCategoryModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Add another category form
        function addAnotherCategory() {
            categoryFormCount++;
            const container = document.getElementById('categoryFormsContainer');

            const newForm = document.createElement('div');
            newForm.className = 'category-form mb-6 p-4 border border-slate-200 rounded-lg dark:border-slate-700';
            newForm.innerHTML = `
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-medium text-slate-900 dark:text-white">Category #${categoryFormCount}</h4>
                <button type="button" onclick="removeCategoryForm(this)" class="text-red-500 hover:text-red-700 text-sm flex items-center gap-1">
                    <span class="material-symbols-outlined !text-[16px]">delete</span>
                    Remove
                </button>
            </div>
            
            <div class="grid grid-cols-1 gap-4">
                <!-- Name -->
                <div class="space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Category Name *</label>
                    <input type="text" name="name[]" required maxlength="50"
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                        placeholder="e.g., Electric Vehicles">
                    <p class="text-xs text-slate-500 dark:text-slate-400">Maximum 50 characters</p>
                </div>
                
                <!-- Description -->
                <div class="space-y-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Description *</label>
                    <textarea name="description[]" rows="3" required
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm placeholder-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:border-primary"
                        placeholder="Enter category description..."></textarea>
                </div>
            </div>
        `;

            container.appendChild(newForm);

            // Scroll to the new form
            newForm.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        // Remove category form - but not the first one
        function removeCategoryForm(button) {
            const form = button.closest('.category-form');
            const allForms = document.querySelectorAll('.category-form');

            // Don't allow removing if there's only one form
            if (form && allForms.length > 1) {
                form.remove();
                updateCategoryNumbers();
            }
        }

        // Update category numbers after removal
        function updateCategoryNumbers() {
            const forms = document.querySelectorAll('.category-form');
            forms.forEach((form, index) => {
                const title = form.querySelector('h4');
                if (title) {
                    title.textContent = `Category #${index + 1}`;
                }
            });
            categoryFormCount = forms.length;
        }

        // Handle form submission
        document.getElementById('categoryForm').addEventListener('submit', function (e) {


            // Process each category
            // Show success message
            alert(`Successfully added ${names.length} category(s) to the system!`);
            closeCategoryModal();

            // Reset to one form
            for (let i = 1; i < forms.length; i++) {
                forms[i].remove();
            }
            categoryFormCount = 1;
        });

        // Function to add new category to the table (for demo purposes)
        function addCategoryToTable(categoryData) {
            const tbody = document.querySelector('tbody');
            const newRow = document.createElement('tr');
            newRow.className = 'hover:bg-slate-50 dark:hover:bg-slate-800/50';
            newRow.innerHTML = `
            <td class="px-6 py-4">
                <div>
                    <p class="font-medium text-slate-900 dark:text-white">${categoryData.name}</p>
                </div>
            </td>
            <td class="px-6 py-4 text-slate-600 dark:text-slate-400">${categoryData.description}</td>
            <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">0 vehicles</td>
            <td class="px-6 py-4 text-right">
                <div class="flex items-center justify-end gap-1">
                    <button
                        class="rounded p-2 text-slate-400 hover:bg-slate-100 hover:text-primary dark:hover:bg-slate-700 dark:hover:text-white transition-colors"
                        title="Edit Category">
                        <span class="material-symbols-outlined !text-[20px]">edit</span>
                    </button>
                    <button
                        class="rounded p-2 text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-500 transition-colors"
                        title="Delete Category">
                        <span class="material-symbols-outlined !text-[20px]">delete</span>
                    </button>
                </div>
            </td>
        `;
            tbody.appendChild(newRow);
        }

        // Add event listener to the "Add Category" button
        document.addEventListener('DOMContentLoaded', function () {
            const addCategoryBtn = document.querySelector('button:has(span.material-symbols-outlined:contains("add_circle"))');
            if (addCategoryBtn) {
                addCategoryBtn.addEventListener('click', openAddCategoryModal);
            }

            // Close modal on ESC key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeCategoryModal();
                }
            });
        });
    </script>
</body>

</html>