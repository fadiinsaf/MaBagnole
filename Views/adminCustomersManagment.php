<?php
require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Admin.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/Car.php";
require_once __DIR__ . "/../Models/Reservation.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsAdmin.php";

session_start();

IsAuthed::handle();
IsAdmin::handle();

$admin = $_SESSION["user"];
$users = Admin::getAllUsers();
?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Customers Management</title>
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Customers Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">View, search, and manage all your
                            registered customers.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Customers</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white"><?= count($users) ?></p>
                        <div class="mt-2 flex items-center text-xs text-green-600">
                            <span class="material-symbols-outlined !text-[14px] mr-1">trending_up</span>
                            +12% from last month
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">New This Week</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">48</p>
                        <div class="mt-2 flex items-center text-xs text-green-600">
                            <span class="material-symbols-outlined !text-[14px] mr-1">trending_up</span>
                            +5% from last week
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Active Rentals</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">856</p>
                        <div class="mt-2 flex items-center text-xs text-slate-500">
                            Current active users
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Verified Accounts</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">94%</p>
                        <div class="mt-2 flex items-center text-xs text-blue-600">
                            <span class="material-symbols-outlined !text-[14px] mr-1">verified</span>
                            High verification rate
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <div class="flex items-center gap-2">
                            <button
                                class="flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700">
                                <span class="material-symbols-outlined !text-[18px] mr-2">filter_list</span>
                                Filter
                            </button>
                            <div class="relative">
                                <input
                                    class="h-9 w-64 rounded-lg border-slate-200 bg-slate-50 pl-9 pr-4 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white"
                                    placeholder="Search..." type="text" />
                                <span
                                    class="absolute left-2.5 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[18px]">search</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-slate-500 dark:text-slate-400">Sort by:</span>
                            <select
                                class="h-9 rounded-lg border-slate-200 bg-slate-50 py-1 pl-3 pr-8 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                                <option>Newest First</option>
                                <option>Oldest First</option>
                                <option>Name (A-Z)</option>
                                <option>Highest Spending</option>
                            </select>
                        </div>
                    </div>

                    <div class="overflow-x-auto">

                        <table class="w-full text-left text-sm">

                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">
                                        <div
                                            class="flex items-center gap-1 cursor-pointer hover:text-slate-700 dark:hover:text-slate-200">
                                            Customer
                                            <span class="material-symbols-outlined !text-[14px]">unfold_more</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 font-semibold">Contact Info</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold">Registration Date</th>
                                    <th class="px-6 py-3 font-semibold">Total Spent</th>
                                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">

                            <?php foreach($users as $user) :?>

                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white"><?= $user["name"] ?></p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">ID: <?= $user["id"] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex items-center text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined !text-[16px] mr-2 text-slate-400">mail</span>
                                                <?= $user["email"] ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full <?= $user["is_active"] ? "bg-green-300" : "bg-red-300" ?> px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                            <?= $user["is_active"] ? "Active" : "Blocked" ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                       <?= $user["created_at"] ?>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                        <?= random_int(300,30000) ?> DH
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div
                                            class="flex items-center justify-end gap-3 group-hover:opacity-100 transition-opacity">
                                            <?php if(!$user['is_active']) : ?>
                                                    <a
                                                        href="../Controllers/user_activation.php?id=<?= $user['id']?>&action=activate"
                                                        class="px-1 py-1 rounded-lg font-sm text-white bg-green-500 hover:bg-green-700 transition"
                                                    >
                                                        Activate
                                                    </a> 
                                            <?php else : ?>   
                                                
                                                    <a
                                                        href="../Controllers/user_activation.php?id=<?= $user['id']?>&action=deactivate"
                                                        class="px-1 py-1 rounded-lg font-sm text-white bg-red-500 hover:bg-red-700 transition"
                                                    >
                                                        Deactivate
                                                    </a> 

                                            <?php endif ; ?>   
                                            
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach;?>

                            </tbody>

                        </table>
                    </div>

                    <div
                        class="flex items-center justify-between border-t border-slate-200 px-6 py-4 dark:border-slate-700">
                        <p class="text-sm text-slate-500 dark:text-slate-400">
                            Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span
                                class="font-medium text-slate-900 dark:text-white">5</span> of <span
                                class="font-medium text-slate-900 dark:text-white"><?= count($users) ?></span> results
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="rounded-lg border border-slate-200 px-3 py-1 text-sm font-medium text-slate-500 hover:bg-slate-50 disabled:opacity-50 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-800"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="rounded-lg border border-slate-200 px-3 py-1 text-sm font-medium text-slate-500 hover:bg-slate-50 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-800">
                                Next
                            </button>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>
</body>

</html>