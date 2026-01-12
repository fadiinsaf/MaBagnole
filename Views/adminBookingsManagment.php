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
$reservations = Reservation::getAllReservations();
?>



<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Bookings Management</title>
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Bookings Management</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">View and manage all reservations from
                            one place.</p>
                    </div>

                </div>
                <div
                    class="mb-6 grid gap-4 rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-700 dark:bg-[#151b2b] md:grid-cols-4 lg:grid-cols-6">
                    <div class="md:col-span-2 lg:col-span-2 relative">
                        <span
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined !text-[20px]">search</span>
                        <input
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 pl-10 pr-4 text-sm text-slate-900 placeholder-slate-500 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:placeholder-slate-400"
                            placeholder="Search bookings..." type="text" />
                    </div>
                    <div class="md:col-span-1">
                        <select
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                            <option value="">All Statuses</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="md:col-span-1">
                        <select
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                            <option value="">Vehicle Type</option>
                            <option value="suv">SUV</option>
                            <option value="sedan">Sedan</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="luxury">Luxury</option>
                        </select>
                    </div>
                    <div class="md:col-span-1 lg:col-span-2 flex items-center gap-2">
                        <input
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white"
                            placeholder="Start Date" type="date" />
                        <span class="text-slate-400">-</span>
                        <input
                            class="h-10 w-full rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm text-slate-700 focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white"
                            placeholder="End Date" type="date" />
                    </div>
                </div>
                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div class="overflow-x-auto">

                        <table class="w-full text-left text-sm">

                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">Customer</th>
                                    <th class="px-6 py-4 font-semibold">Vehicle</th>
                                    <th class="px-6 py-4 font-semibold">
                                        <div
                                            class="flex items-center gap-1 cursor-pointer hover:text-slate-700 dark:hover:text-slate-300">
                                            Pick-up / Drop-off
                                            <span class="material-symbols-outlined !text-[16px]">unfold_more</span>
                                        </div>
                                    </th>
                                    <th class="px-6 py-4 font-semibold text-right">Amount</th>
                                    <th class="px-6 py-4 font-semibold text-center">Status</th>
                                    <th class="px-6 py-4 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">


                            <?php foreach($reservations as $reservation):?>

                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium text-slate-900 dark:text-white"><?= $reservation["name"] ?></p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400"><?= $reservation["email"] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="h-8 w-12 rounded bg-slate-100 bg-cover bg-center"
                                                data-alt="Toyota RAV4 car thumbnail"
                                                style="background-image: url('<?= $reservation["image"] ?></div>')">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-slate-700 dark:text-slate-300 font-medium"><?= $reservation["brand"] ?></span>
                                                <span class="text-xs text-slate-500 dark:text-slate-500"><?= $reservation["model"] ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span
                                                    class="material-symbols-outlined !text-[14px]">calendar_today</span>
                                                <span><?= $reservation["reservationDateStart"] ?></span>
                                            </div>
                                            <div
                                                class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-400">
                                                <span class="material-symbols-outlined !text-[14px]">event</span>
                                                <span><?= $reservation["reservationDateEnd"] ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium text-slate-900 dark:text-white">
                                        <?= $reservation["pricePerDay"] ?> DH
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="inline-flex items-center rounded-full <?=match($reservation["STATUS"]){"pending" => "bg-yellow-200", "confirmed" => "bg-green-200", "rejected" => "bg-red-100", "cancelled" => "bg-red-300", default => "bg-blue-200"}?> px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-900/50">
                                            <?= $reservation["STATUS"] ?>
                                        </span>
                                    </td>
                                    
                                    <?php if($reservation["STATUS"] === "pending"): ?>

                                        <td class="px-6 py-4 text-right">
                                            <div class="flex items-center justify-end gap-2">

                                                <a href="../Controllers/approve_reservation.php?id=<?= $reservation["id_reservation"] ?>"
                                                    class="rounded p-1 text-green-600 hover:bg-green-50 dark:hover:bg-green-900/20"
                                                    title="Approve">
                                                    <span class="material-symbols-outlined !text-[20px]">check_circle</span>
                                                </a>

                                                <a href="../Controllers/reject_reservation.php?id=<?= $reservation["id_reservation"] ?>"
                                                    class="rounded p-1 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20"
                                                    title="Reject">
                                                    <span class="material-symbols-outlined !text-[20px]">cancel</span>
                                                </a>
                                            </div>
                                        </td>
                                    <?php endif; ?>

                                    </tr>

                                <?php endforeach;?>


                            </tbody>

                        </table>
                        
                    </div>
                    <div
                        class="flex items-center justify-between border-t border-slate-200 px-6 py-4 dark:border-slate-700">
                        <div class="flex items-center gap-2">
                            <p class="text-sm text-slate-500 dark:text-slate-400">
                                Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span
                                    class="font-medium text-slate-900 dark:text-white">5</span> of <span
                                    class="font-medium text-slate-900 dark:text-white"><?= count($reservations) ?></span> results
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-700 shadow-sm hover:bg-slate-50 disabled:opacity-50 dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:hover:bg-slate-700"
                                disabled="">
                                Previous
                            </button>
                            <button
                                class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-700 shadow-sm hover:bg-slate-50 dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:hover:bg-slate-700">
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