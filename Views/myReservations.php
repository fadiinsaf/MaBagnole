<?php
require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/Car.php";
require_once __DIR__ . "/../Models/Reservation.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsClient.php";

session_start();

IsAuthed::handle();
IsClient::handle();

$reservations = Reservation::getUserReservations($_SESSION["user"]->getUserId());

?>

<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>My Reservations - MaBagnole</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "sans": ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
        .status-active {
            background-color: #10b981;
            color: white;
        }
        .status-completed {
            background-color: #6b7280;
            color: white;
        }
        .status-cancelled {
            background-color: #ef4444;
            color: white;
        }
        .status-pending {
            background-color: #f59e0b;
            color: white;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white transition-colors duration-200 min-h-screen">

<?php require_once __DIR__ . "/../Components/header.php" ?>

<div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">My Reservations</h1>
        <p class="text-slate-600 dark:text-slate-400">View and manage your car rental bookings</p>
    </div>

    <!-- Success/Error Message -->
    <?php if (isset($message)): ?>
    <div class="mb-6 p-4 rounded-lg <?= $messageType === 'success' ? 'bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400' : 'bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400' ?>">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined">
                <?= $messageType === 'success' ? 'check_circle' : 'error' ?>
            </span>
            <span><?= htmlspecialchars($message) ?></span>
        </div>
    </div>
    <?php endif; ?>

    <!-- Reservations List -->
    <?php if (empty($reservations)): ?>

    <div class="text-center py-12 bg-white dark:bg-slate-800 rounded-xl shadow-sm">
        <span class="material-symbols-outlined text-6xl text-slate-300 dark:text-slate-600 mb-4">calendar_today</span>
        <h3 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-2">No reservations found</h3>
        <p class="text-slate-500 dark:text-slate-400 mb-6">You haven't made any reservations yet.</p>
        <a href="fleet.php"
            class="inline-flex items-center gap-2 bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
            <span class="material-symbols-outlined">directions_car</span>
            Browse Cars
        </a>
    </div>
    <?php else: ?>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <?php foreach($reservations as $reservation): ?>

        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 overflow-hidden">
            <!-- Reservation Header -->
            <div class="p-5 border-b border-slate-100 dark:border-slate-700">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white"><?= htmlspecialchars($reservation['model']) ?></h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">Reservation #<?= htmlspecialchars($reservation['reservation_id']) ?></p>
                    </div>
                    <span class="px-3 py-1 text-xs font-bold rounded-full 
                        <?php
                        $status = strtolower($reservation['STATUS']);

                        if ($status === 'confirmed') echo 'status-active';
                        elseif ($status === 'completed') echo 'status-completed';
                        elseif ($status === 'cancelled') echo 'status-cancelled';

                        else echo 'status-pending';
                        ?>">
                        <?= htmlspecialchars(ucfirst($reservation['STATUS'])) ?>
                    </span>
                </div>
            </div>

            <!-- Reservation Details -->
            <div class="p-5">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Pick-up Date</p>
                        <p class="font-semibold text-slate-900 dark:text-white"><?= date('M d, Y', strtotime($reservation['reservationDateStart'])) ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Return Date</p>
                        <p class="font-semibold text-slate-900 dark:text-white"><?= date('M d, Y', strtotime($reservation['reservationDateEnd'])) ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Total Price</p>
                        <p class="font-semibold text-slate-900 dark:text-white"><?= htmlspecialchars($reservation['pricePerDay']) ?> DH</p>
                    </div>
                </div>

                <!-- Car Info -->
                <div class="mb-4 p-3 bg-slate-50 dark:bg-slate-900/50 rounded-lg">
                    <div class="flex items-center gap-3">
                        <?php if (!empty($reservation['image'])): ?>
                        <img src="<?= htmlspecialchars($reservation['image']) ?>" 
                             alt="<?= htmlspecialchars($reservation['model']) ?>"
                             class="w-16 h-12 object-cover rounded">
                        <?php else: ?>
                        <div class="w-16 h-12 bg-slate-200 dark:bg-slate-700 rounded flex items-center justify-center">
                            <span class="material-symbols-outlined text-slate-400">directions_car</span>
                        </div>
                        <?php endif; ?>
                        <div>
                            <p class="font-semibold text-slate-900 dark:text-white"><?= htmlspecialchars($reservation['car_model']) ?></p>
                            <p class="text-sm text-slate-500 dark:text-slate-400"><?= htmlspecialchars($reservation['category_name']) ?></p>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex gap-3">
                    <?php if (in_array(strtolower($reservation['STATUS']), ['confirmed', 'pending'])): ?>
                    <a href="../Controllers/cancel_reservation.php?id=<?= $reservation['reservation_id'] ?>"
                        onclick="return confirm('Are you sure you want to cancel this reservation?')"
                        class="flex-1 flex items-center justify-center gap-2 px-4 py-2 text-sm font-bold text-white bg-red-500 hover:bg-red-600 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-sm">close</span>
                        Cancel Reservation
                    </a>
                    <?php endif; ?>
                    
                    <a href="carDetails.php?id=<?= $reservation['car_id'] ?>"
                        class="flex-1 flex items-center justify-center gap-2 px-4 py-2 text-sm font-bold text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-slate-700 hover:bg-slate-200 dark:hover:bg-slate-600 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-sm">visibility</span>
                        View Details
                    </a>
                </div>

            </div>
        </div>
        <?php endforeach; ?>

    </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . "/../Components/footer.php" ?>

</body>
</html>