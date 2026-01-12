<?php

require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Admin.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/Comment.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsAdmin.php";

session_start();

IsAuthed::handle();
IsAdmin::handle();

$admin = $_SESSION["user"];
$comments = Comment::getAllUsersComments();

?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Reviews Management</title>
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Reviews Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Manage and moderate customer feedback
                            for your fleet.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Reviews</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white"><?= count($comments) ?></p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined">reviews</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Average Rating</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <p class="text-3xl font-bold text-slate-900 dark:text-white">
                                        
                                    <?=
                                        array_sum(array_column($comments, "rating")) / count($comments);
                                    ?>

                                    </p>
                                    <span class="material-symbols-outlined text-yellow-400 !text-2xl"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-yellow-50 text-yellow-600 dark:bg-yellow-900/20 dark:text-yellow-400">
                                <span class="material-symbols-outlined">hotel_class</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Published Comments</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">
                                    <?= 
                                        count(array_filter($comments, function($c)
                                        {
                                            return $c["visibility"] == 1;
                                        }   ))
                                    ?>
                                </p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-green-50 text-green-600 dark:bg-orange-900/20 dark:text-orange-400">
                                <span class="material-symbols-outlined">visibility</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Hidden Comments</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">

                                    <?= 
                                        count(array_filter($comments, function($c)
                                        {
                                            return $c["visibility"] == 0;
                                        }   ))
                                    ?>

                                </p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400">
                                <span class="material-symbols-outlined">visibility_off</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    
                <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Recent Reviews</h3>
                        <div class="flex w-full sm:w-auto gap-3">
                            <div class="relative flex-1 sm:flex-none w-full sm:w-48">
                                <select
                                    class="h-9 w-full rounded-lg border-slate-200 bg-slate-50 pl-3 pr-8 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                                    <option>All Statuses</option>
                                    <option>Published</option>
                                    <option>Hidden</option>
                                </select>
                            </div>
                            <div class="relative flex-1 sm:flex-none w-full sm:w-48">
                                <select
                                    class="h-9 w-full rounded-lg border-slate-200 bg-slate-50 pl-3 pr-8 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                                    <option>Newest First</option>
                                    <option>Oldest First</option>
                                    <option>Highest Rating</option>
                                    <option>Lowest Rating</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">

                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold w-12">
                                    </th>
                                    <th class="px-6 py-3 font-semibold">Reviewer</th>
                                    <th class="px-6 py-3 font-semibold">Vehicle</th>
                                    <th class="px-6 py-3 font-semibold w-64">Review Content</th>
                                    <th class="px-6 py-3 font-semibold">Rating</th>
                                    <th class="px-6 py-3 font-semibold">Visibility</th>
                                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">

                                <?php foreach($comments as $comment) : ?>

                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                    <td class="px-6 py-4">

                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white"><?= $comment["name"] ?></p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400"><?= $comment["commented_at"] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white"><?= $comment["brand"] ?>
                                                3</span>
                                            <span class="text-xs text-slate-500 dark:text-slate-400"><?= $comment["model"] ?>
                                                15</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="line-clamp-2 text-slate-600 dark:text-slate-300"><?= $comment["comment_text"] ?></p>
                                    </td>
                                    <td class="px-6 py-4">

                                        <div class="flex items-center gap-1">
                                            <?php for($i = 0; $i < $comment["rating"]; $i++) : ?>

                                            <span class="material-symbols-outlined text-yellow-400 !text-[18px]"
                                                style="font-variation-settings: 'FILL' 1;">star</span>

                                            <?php endfor; ?>    
                                        </div>
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center rounded-full <?= $comment["visibility"] ? "bg-green-200" : "bg-red-200" ?> px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                             <?= $comment["visibility"] ? "Published" : "Hidden" ?>
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            
                                                <?php if(!$comment["visibility"]) : ?>

                                                    <a href="../Controllers/Comments_hidding_toggle.php?visibility=<?= $comment["visibility"]?>&id=<?= $comment["id_comment"]?>"
                                                        class="rounded p-1.5 text-slate-500 hover:bg-slate-100 hover:text-green-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-green-400"
                                                        title="Hide Review">
                                                        <span
                                                            class="material-symbols-outlined !text-[20px]">visibility</span>
                                                    </a>

                                                <?php else : ?>
                                            
                                                    <a href="../Controllers/Comments_hidding_toggle.php?visibility=<?= $comment["visibility"]?>&id=<?= $comment["id_comment"]?>"
                                                        class="rounded p-1.5 text-slate-500 hover:bg-slate-100 hover:text-red-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-red-400"
                                                        title="Hide Review">
                                                        <span
                                                            class="material-symbols-outlined !text-[20px]">visibility_off</span>
                                                    </a>

                                                <?php endif; ?>
   
                                        </div>
                                    </td>
                                </tr>

                                <?php endforeach ; ?>

                            </tbody>

                        </table>
                    </div>

                    <div
                        class="flex items-center justify-between border-t border-slate-200 px-6 py-4 dark:border-slate-700">
                        <p class="text-sm text-slate-500 dark:text-slate-400">
                            Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span
                                class="font-medium text-slate-900 dark:text-white">4</span> of <span
                                class="font-medium text-slate-900 dark:text-white"><?=count($comments)?></span> results
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white disabled:opacity-50 disabled:cursor-not-allowed"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-500 hover:bg-slate-50 hover:text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">
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