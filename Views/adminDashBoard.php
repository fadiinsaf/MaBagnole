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
$reservations = Reservation::getAllReservations(5);
$users = Admin::getAllUsers();
$cars = Car::getAllCars();
?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Dashboard Overview</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Welcome back! Here's what's happening
                            with your fleet today.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">

                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Cars</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white"><?= count($cars) ?>
                                </p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined">directions_car</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_up</span>
                                5%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>

                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">All Bookings</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">
                                    <?= count(Reservation::getAllReservations()) ?></p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400">
                                <span class="material-symbols-outlined">calendar_month</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_up</span>
                                12%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>

                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Users</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white"><?= count($users) ?>
                                </p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-orange-50 text-orange-600 dark:bg-orange-900/20 dark:text-orange-400">
                                <span class="material-symbols-outlined">group</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_up</span>
                                8%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>

                    <div
                        class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pending Reviews</p>
                                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">
                                    <?= count(Reservation::getReservationsByStatus("pending")) ?></p>
                            </div>
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400">
                                <span class="material-symbols-outlined">star_half</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="flex items-center font-medium text-red-600 dark:text-red-400">
                                <span class="material-symbols-outlined !text-[16px] mr-1">trending_down</span>
                                2%
                            </span>
                            <span class="ml-2 text-slate-500 dark:text-slate-400">vs last month</span>
                        </div>
                    </div>

                </div>

                <div
                    class="mb-8 rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Recent Reservations</h3>
                        <a class="text-sm font-medium text-primary hover:text-primary-hover"
                            href="adminBookingsManagment.php">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Customer</th>
                                    <th class="px-6 py-3 font-semibold">Vehicle</th>
                                    <th class="px-6 py-3 font-semibold">Dates</th>
                                    <th class="px-6 py-3 font-semibold">Amount</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                <?php
                                foreach ($reservations as $reservation):?> 
                                        <?php $dateStart = explode(" ", $reservation["reservationDateStart"]);
                                        $dateEnd = explode(" ", $reservation["reservationDateEnd"]);?>
                                            <tr class='hover:bg-slate-50 dark:hover:bg-slate-800/50'>
                                                <td class='px-6 py-4'>
                                                    <div class='flex items-center gap-3'>
                                                        <div>
                                                            <p class='font-medium text-slate-900 dark:text-white'><?= $reservation["name"] ?></p>
                                                            <p class='text-xs text-slate-500 dark:text-slate-400'><?= $reservation["email"] ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class='px-6 py-4'>
                                                    <div class='flex items-center gap-2'>
                                                        <div class='h-8 w-12 rounded bg-slate-100 bg-cover bg-center'
                                                            data-alt='Tesla Model 3 car thumbnail'
                                                            style="background-image: url('<?= $reservation["image"] ?>')">
                                                        </div>
                                                        <span class='text-slate-700 dark:text-slate-300'><?= $reservation["model"] ?></span>
                                                    </div>
                                                </td>
                                                <td class='px-6 py-4 text-slate-500 dark:text-slate-400'>
                                                   <?= $dateStart[0] . "-" . $dateEnd[0] ?>
                                                </td>
                                                <td class='px-6 py-4 font-medium text-slate-900 dark:text-white'>
                                                    <?= $reservation["pricePerDay"] ?> DH
                                                </td>
                                                <td class='px-6 py-4'>
                                                    <span
                                                        class='inline-flex items-center rounded-full <?=match($reservation["STATUS"]){"pending" => "bg-yellow-200", "confirmed" => "bg-green-200", "rejected" => "bg-red-100", "cancelled" => "bg-red-300", default => "bg-blue-200"}?>  px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300'>
                                                            <?= $reservation["STATUS"] ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        
                                <?php endforeach ;?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div
                    class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-[#151b2b]">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between border-b border-slate-200 px-6 py-4 dark:border-slate-700 gap-4">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Fleet Overview</h3>
                        <a class="text-sm font-medium text-primary hover:text-primary-hover"
                            href="adminFleetManagment.php">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead
                                class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Brand</th>
                                    <th class="px-6 py-3 font-semibold">Car Model</th>
                                    <th class="px-6 py-3 font-semibold">Price Per Day</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold">image</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">

                                <?php foreach ($reservations as $reservation): ?>

                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                            <?= $reservation["brand"] ?></td>
                                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                                            <?= $reservation["model"] ?></td>
                                        <td class="px-6 py-4 text-slate-900 dark:text-white">
                                            <?= $reservation["pricePerDay"] . " DH" ?></td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center rounded-full <?= $reservation["availability"] ? "bg-green-300" : "bg-red-300" ?> px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                                <?= $reservation["availability"] ? "Availabile" : "Rented" ?>
                                            </span>
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class='h-8 w-12 rounded bg-slate-100 bg-cover bg-center'
                                                data-alt='Tesla Model 3 car thumbnail'
                                                style="background-image: url('/../Assets/images/<?= $reservation['image'] ?>')">
                                            </div>
                                        </td>


                                    <?php endforeach; ?>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>

</html>