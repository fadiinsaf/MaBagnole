<?php
require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Admin.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/Car.php";
require_once __DIR__ . "/../Models/Comment.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsClient.php";

session_start();

IsAuthed::handle();
IsClient::handle();

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $id = (int) $_GET["id"];

    $car = Car::getCar($id);
    $comments = Comment::getCarComments($id);
    if (!isset($car) && !isset($comments)) {
        header("Location: /Views/fleet.php");
        exit();
    }

    $colors = [
        "red",
        "green",
        "blue",
        "yellow",
        "orange",
        "purple",
        "pink",
        "violet"
    ];

    $uniquePageId = $_SESSION["uniqueCommentId"];
} else {
    header("Location: /Views/fleet.php");
    exit();
}
?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= $car["model"] ?> - MaBagnole</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap"
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
                        "primary-dark": "#0f4bbd",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1e293b",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display transition-colors duration-200">

    <?php require_once __DIR__ . "/../Components/header.php" ?>

    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <main class="layout-container flex flex-col flex-1 px-4 lg:px-40 py-6 lg:py-10">

            <div class="layout-content-container flex flex-col w-full max-w-[1280px] mx-auto flex-1">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    <div class="lg:col-span-8 flex flex-col gap-8">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-wrap justify-between items-start gap-4">
                                <div>
                                    <div class="flex items-center gap-3 mb-1">
                                        <span
                                            class="px-2 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider rounded">
                                            <?= $car["name"] ?></span>
                                        <div class="flex items-center gap-1 text-yellow-500">
                                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            <span
                                                class="text-slate-700 dark:text-slate-300 text-sm font-semibold"><?= $comments ? number_format(array_sum(array_column($comments, "rating")) / count($comments), 1) : "0.0" ?>
                                                <span class="text-slate-400 font-normal"> (<?= count($comments) ?>
                                                    reviews)</span></span>
                                        </div>
                                    </div>
                                    <h1
                                        class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-tight">
                                        <?= $car["brand"] ?> <?= $car["model"] ?>
                                    </h1>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center justify-center size-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                                        <span class="material-symbols-outlined">favorite</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div
                                class="w-full bg-slate-200 dark:bg-slate-800 aspect-video rounded-xl overflow-hidden relative group cursor-pointer">
                                <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Red Tesla Model 3 front view parked on a modern street"
                                    style='background-image: url("<?= $car["image"] ?>");'>
                                </div>
                            </div>

                            <div class="grid grid-cols-4 gap-3">
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity"
                                    data-alt="Tesla Model 3 interior dashboard view"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA3IqZB1lwjv12EBLalBMowSbQN3CEiDew7uvF4fbaCOordh6mqSYmNy8GcDlvhoSQBeDQ2KiFtdAjsoIKF40IL5FEj-oa76SdrZKh8M35BWut2mp01S5M0UqM0NxuoVNfPuWxpRkOQOquVD5jWxJp8R6y0uMUolkFQ90mO23Yep1c_dvofLIdOoKyOIrr2leky70-cmN670NnEi0aZ7yMPl0yhl9KpN0g-w63o7PJhLG0NLQsQFx5leIwl8CEtu8DKFdYVeKi_SYU");'>
                                </div>
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity"
                                    data-alt="Tesla Model 3 steering wheel detail"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCMb8Smc_XZ2oz_Ye1iE8VkIQAIUeHpJSAYg7D5QzB2MOjgGaIK8u4rJUY_gDET2MXlWTBt6O6xsN47XZOKv3o0d1TZvtKSvi0DluX7yuFByIiWub1_LeYpbdvI6Y-d5UzRQWPXeEYMEAnydcIkHvLQjQdYWT-DlcE18I9UT6YveEbtuaCELHPTFoOFsVnOFRBD0xgCdROx8aNWLqHA55tpBvTU71f8es_r4xxXbUfp4Binl0vtxS3_5OmEsvFkUOcyKRBvJyNl4SY");'>
                                </div>
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity"
                                    data-alt="Tesla Model 3 back seat view"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSwD3UjMNfzIm1Q6aZ2VJCtjTPX8AVcYW7i2JWSdwq-SEanbBgFB0aFjgVmiXRGd6nfUPTFbgEC29vh0hxxfiBUYUn3JacI_yrTgsycf9SgRErSElvY91DPLUO-My__Ze_HaQtaRInD-ZyWED5pZn4V960nHnBuhjd0lNk3aOes3zTVexsxbl3yFUrXl3cy6_srn-1b--ty_OXfV8kAj0LlpfI9L4fiyadJrtK-AEE_MwbST8uIvFdcxEglRNJduLRJE_QBCBQSQ8");'>
                                </div>
                                <div class="bg-slate-200 dark:bg-slate-800 aspect-[4/3] rounded-lg bg-center bg-cover cursor-pointer hover:opacity-90 transition-opacity relative"
                                    data-alt="Tesla Model 3 charging port detail"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBkZ-fwkoP6stxN20tKIUJnFbCA6PH3rhsoE1ArfEUPNvMqcu45jlZG1t0AJjbXZDD40-PIuB-CfvViKPAGlz_0q65BMZETaPzoH0r15-FJJtcwKvEu4X9V1Av5qnUTPTNbzwXlHQvWzBsqMjhFnmXhRccGloPD-q9HGUQt1BvAcGw0UGRCuIFQ0VVd4VGm-zw5qU0oFPBBZcZi4gX-iUZbAl3bcEgYszlHwnBD6uNIvWfTuRYG3y5fOCnv6UmKek10vBrUW4_tJUA");'>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span class="material-symbols-outlined text-primary text-3xl">speed</span>
                                <div class="flex flex-col">
                                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wide">0-60
                                        mph</span>
                                    <span class="text-slate-900 dark:text-white font-bold">3.1s</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span
                                    class="material-symbols-outlined text-primary text-3xl">airline_seat_recline_normal</span>
                                <div class="flex flex-col">
                                    <span
                                        class="text-xs text-slate-500 uppercase font-semibold tracking-wide">Seats</span>
                                    <span class="text-slate-900 dark:text-white font-bold">5 Adults</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span class="material-symbols-outlined text-primary text-3xl">ev_station</span>
                                <div class="flex flex-col">
                                    <span
                                        class="text-xs text-slate-500 uppercase font-semibold tracking-wide">Range</span>
                                    <span class="text-slate-900 dark:text-white font-bold">315 mi</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-4 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-800 rounded-xl gap-2 text-center">
                                <span class="material-symbols-outlined text-primary text-3xl">settings_suggest</span>
                                <div class="flex flex-col">
                                    <span
                                        class="text-xs text-slate-500 uppercase font-semibold tracking-wide">Gear</span>
                                    <span class="text-slate-900 dark:text-white font-bold">Auto</span>
                                </div>
                            </div>
                        </div>

                        <div class="h-px w-full bg-slate-200 dark:bg-slate-800"></div>
                        <section class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Car Description</h3>
                            <div class="text-slate-600 dark:text-slate-300 leading-relaxed space-y-4">
                                <p>
                                    <?= $car["car_description"] ?>"
                                </p>
                            </div>
                        </section>

                        <section class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Features &amp; Amenities</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-8">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Autopilot Included</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Premium Connectivity</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Heated Seats (All)</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Wireless Phone Charging</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">Bluetooth &amp; USB-C</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-500 text-xl">check_circle</span>
                                    <span class="text-slate-700 dark:text-slate-300">15-inch Touchscreen</span>
                                </div>
                            </div>
                        </section>

                        <div class="h-px w-full bg-slate-200 dark:bg-slate-800"></div>

                        <div class="h-px w-full bg-slate-200 dark:bg-slate-800"></div>

                        <section class="flex flex-col gap-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Reviews</h3>
                                    <span
                                        class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-xs font-bold px-2 py-0.5 rounded-full"><?= count($comments) ?></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-sm font-bold text-slate-900 dark:text-white"><?= $comments ? number_format(array_sum(array_column($comments, "rating")) / count($comments), 1) : "0.0" ?></span>
                                    <div class="flex text-yellow-500 text-sm">
                                        <span class="material-symbols-outlined text-base fill-current">star</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-5 border border-slate-100 dark:border-slate-800">
                                <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-4">Leave a review</h4>

                                <div class="flex gap-4">
                                    <div class="hidden sm:block size-10 rounded-full bg-center bg-cover border border-slate-200 dark:border-slate-700"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDOt8SjZndY1WG_wMp0IkpaH6i_M5_z-uv88x5MYX5tl_-LTprU5l3bl2J9zBnqxuadXKp4Xo3ZSJnvTmGeZZ74QR1BkxaekfmfzshIGHEEwaz8w_W9UMp5exO11lVZsbSUDptfZhovuuXKCBc1LcISuVTZLBFZKxI1C8xICUAjnqbzJzPOEQ-sxl432rnikiB-uQit6UqU4AJazFdVLzFG6dR3gmRg1YGHkStsK9ViKqzScApTb4BYLkKUuyXWiOFo-wYUNunszdI");'>
                                    </div>
                                    <!-- comment -->
                                    <div class="flex-1 flex flex-col gap-3">

                                        <form action="../Controllers/add_comment.php" method="POST">
                                            <textarea name="comment_text"
                                                class="w-full bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-3 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none resize-none h-24 placeholder:text-slate-400"
                                                placeholder="Share your experience with this car..."></textarea>

                                            <div class="flex flex-wrap justify-between items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <span class="text-xs font-medium text-slate-500 mr-2">Your
                                                        rating:</span>

                                                    <button type="button" data-rating="1"
                                                        class="star-btn text-slate-300 dark:text-slate-600 hover:text-yellow-400">
                                                        <span class="material-symbols-outlined">star</span>
                                                    </button>
                                                    <button type="button" data-rating="2"
                                                        class="star-btn text-slate-300 dark:text-slate-600 hover:text-yellow-400">
                                                        <span class="material-symbols-outlined">star</span>
                                                    </button>
                                                    <button type="button" data-rating="3"
                                                        class="star-btn text-slate-300 dark:text-slate-600 hover:text-yellow-400">
                                                        <span class="material-symbols-outlined">star</span>
                                                    </button>
                                                    <button type="button" data-rating="4"
                                                        class="star-btn text-slate-300 dark:text-slate-600 hover:text-yellow-400">
                                                        <span class="material-symbols-outlined">star</span>
                                                    </button>
                                                    <button type="button" data-rating="5"
                                                        class="star-btn text-slate-300 dark:text-slate-600 hover:text-yellow-400">
                                                        <span class="material-symbols-outlined">star</span>
                                                    </button>

                                                    <input type="hidden" name="rating" id="ratingValue" value="0">
                                                    <input type="hidden" name="id_car" value="<?= $car["car_id"] ?>">
                                                </div>

                                                <button type="submit"
                                                    class="bg-primary hover:bg-primary-dark text-white font-medium py-2 px-5 rounded-lg text-sm transition-colors shadow-sm shadow-primary/20">
                                                    Post Review
                                                </button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>

                            <div class="flex flex-col gap-6">

                                <?php foreach ($comments as $comment): ?>

                                    <?php $tempColor = $colors[array_rand($colors)]; ?>

                                    <div class="flex gap-4 items-start group relative"
                                        id="<?= $uniquePageId[$comment["id_comment"]] ?>">

                                        <div
                                            class="size-10 rounded-full bg-<?= $tempColor ?>-100 dark:bg-<?= $tempColor ?>-900/30 text-<?= $tempColor ?>-600 dark:text-<?= $tempColor ?>-300 flex items-center justify-center font-bold text-sm flex-shrink-0">
                                            <?= str_split($comment["name"], 2)[0] ?>
                                        </div>

                                        <div class="flex flex-col gap-1 w-full">

                                            <div class="flex justify-between items-start">
                                                <div>
                                                    <h5 class="font-bold text-slate-900 dark:text-white text-sm">
                                                        <?= htmlspecialchars($comment["name"]) ?>
                                                        <?= $_SESSION["user"]->getUserId() === $comment["id_client"]
                                                            ?
                                                            "<sub class='text-slate-500 dark:text-slate-400'>You</sub>"
                                                            :
                                                            ""
                                                            ?>

                                                    </h5>
                                                    <span
                                                        class="text-xs text-slate-500"><?= explode(" ", $comment["commented_at"])[0] ?></span>
                                                </div>

                                                <div class="flex items-center gap-2">
                                                    <div class="flex text-yellow-500 text-xs">

                                                        <?php for ($i = 0; $i < $comment["rating"]; $i++): ?>
                                                            <span
                                                                class="material-symbols-outlined text-sm fill-current">star</span>
                                                        <?php endfor; ?>

                                                        <?php for ($i = $comment["rating"]; $i < 5; $i++): ?>
                                                            <span
                                                                class="material-symbols-outlined text-sm text-slate-300 dark:text-slate-600">star</span>
                                                        <?php endfor; ?>

                                                    </div>

                                                    <div
                                                        class="flex gap-1 opacity-0 <?= $_SESSION["user"]->getUserId() === $comment["id_client"] ? "group-hover:opacity-100" : "" ?> transition-opacity duration-200">
                                                        <button type="button"
                                                            class="p-1.5 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors"
                                                            title="Edit Comment">
                                                            <span class="material-symbols-outlined text-sm">edit</span>
                                                        </button>

                                                        <button type="button"
                                                            class="p-1.5 text-slate-500 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                                                            title="Delete Comment">
                                                            <a href="../Controllers/delete_comment.php?id=<?= $comment["id_comment"] ?>&idcar=<?= $car["car_id"] ?>" class="material-symbols-outlined text-sm">delete</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mt-1">
                                                <?= nl2br(htmlspecialchars($comment["comment_text"])) ?>
                                            </p>

                                        </div>
                                    </div>


                                    <div class="h-px w-full bg-slate-100 dark:bg-slate-800 my-4"></div>

                                <?php endforeach; ?>

                            </div>

                            <?= count($comments) > 3
                                ?
                                "<button
                                    class='self-center text-primary font-medium text-sm border border-primary/30 rounded-lg px-6 py-2.5 hover:bg-primary/5 transition-colors mt-2'>
                                    Show all reviews
                                </button>"
                                :
                                ""
                                ?>

                        </section>

                    </div>

                    <div class="lg:col-span-4 relative">

                        <!-- form -->
                        <form action="../Controllers/add_reservation.php" method="POST">
                            <div
                                class="sticky top-24 flex flex-col gap-0 shadow-xl rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark border border-slate-200 dark:border-slate-800">
                                <div
                                    class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-end">
                                    <div>
                                        <span class="text-3xl font-black text-slate-900 dark:text-white"><?= $car["pricePerDay"]?> DH</span>
                                        <span class="text-slate-500 dark:text-slate-400">/ day</span>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <span
                                            class="inline-flex items-center rounded-full <?= $car["availability"] ? "bg-green-100 border-green-200 text-green-700" : "bg-red-100 border-red-200 text-red-700" ?> dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-semibold text-green-700 dark:text-green-400 border dark:border-green-800">
                                            <span
                                                class="mr-1.5 h-1.5 w-1.5 rounded-full <?= $car["availability"] ? "bg-green-500" : "bg-red-500" ?>"></span>
                                            <?= $car["availability"] ? "Available Now" : "Rented" ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col gap-5">
                                    <div class="flex flex-col gap-4">
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex flex-col gap-1.5">
                                                <label
                                                    class="text-xs font-bold uppercase tracking-wide text-slate-500">Pick-up</label>
                                                <div class="relative">
                                                    <input name="reservationDateStart" required
                                                        class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                                        type="date" />
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-1.5">
                                                <label
                                                    class="text-xs font-bold uppercase tracking-wide text-slate-500">Return</label>
                                                <div class="relative">
                                                    <input name="reservationDateEnd" required
                                                        class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                                        type="date" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-1.5">
                                            <label
                                                class="text-xs font-bold uppercase tracking-wide text-slate-500">Pick-up Location</label>
                                            <div class="relative">
                                                <select name="departureLocation"
                                                    class="w-full appearance-none bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                                                    <option>Casablanca Corporate Office</option>
                                                    <option>Casablanca Conference</option>
                                                    <option>Casablanca Mohammed V Airport</option>
                                                </select>
                                                <span
                                                    class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 pointer-events-none text-lg">expand_more</span>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-1.5">
                                            <label
                                                class="text-xs font-bold uppercase tracking-wide text-slate-500">Return Location</label>
                                            <div class="relative">
                                                <select name="returnLocation"
                                                    class="w-full appearance-none bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                                                    <option>Casablanca Corporate Office</option>
                                                    <option>Casablanca Conference</option>
                                                    <option>Casablanca Mohammed V Airport</option>
                                                </select>
                                                <span
                                                    class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 pointer-events-none text-lg">expand_more</span>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" name="car_id" value="<?= $car["car_id"] ?>">
                                    <button type="submit" <?= !$car["availability"] ? "disabled" : "" ?> class="w-full bg-primary hover:bg-primary-dark text-white 
                                                    font-bold py-3.5 px-4 rounded-xl shadow-lg 
                                                    shadow-primary/30 transition-all active:scale-[0.98]
                                                    <?= !$car["availability"]
                                                        ? '!bg-gray-300 !text-gray-500 !cursor-not-allowed 
                                                            !shadow-none hover:!bg-gray-300 dark:!bg-gray-700 
                                                            dark:!text-gray-400'
                                                        : '' ?>">
                                        Reserve Now
                                    </button>
                                </div>
                                <div
                                    class="bg-slate-50 dark:bg-slate-800/50 p-4 border-t border-slate-100 dark:border-slate-800">
                                    <div class="flex items-center justify-center gap-6">
                                        <div class="flex flex-col items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-slate-400 text-xl">verified_user</span>
                                            <span class="text-[10px] text-slate-500 uppercase font-bold">Secure</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-slate-400 text-xl">event_available</span>
                                            <span class="text-[10px] text-slate-500 uppercase font-bold">Free
                                                Cancel</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-slate-400 text-xl">support_agent</span>
                                            <span class="text-[10px] text-slate-500 uppercase font-bold">24/7
                                                Help</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </main>

        <?php require_once __DIR__ . "/../Components/footer.php" ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('.star-btn');
            const ratingInput = document.getElementById('ratingValue');

            stars.forEach(star => {
                star.addEventListener('click', function () {
                    const rating = parseInt(this.getAttribute('data-rating'));

                    ratingInput.value = rating;

                    updateStars(rating);
                });
            });

            stars.forEach(star => {
                star.addEventListener('mouseover', function () {
                    const hoverRating = parseInt(this.getAttribute('data-rating'));
                    updateStars(hoverRating, true);
                });
            });

            document.querySelector('.flex.items-center.gap-1').addEventListener('mouseleave', function () {
                const currentRating = parseInt(ratingInput.value);
                updateStars(currentRating);
            });

            function updateStars(rating, isHover = false) {
                stars.forEach(star => {
                    const starRating = parseInt(star.getAttribute('data-rating'));
                    const icon = star.querySelector('.material-symbols-outlined');

                    if (starRating <= rating) {
                        star.classList.remove('text-slate-300', 'dark:text-slate-600');
                        star.classList.add('text-yellow-400');
                        icon.textContent = 'star';
                        icon.classList.add('fill-current');
                    } else {
                        star.classList.remove('text-yellow-400');
                        star.classList.add('text-slate-300', 'dark:text-slate-600');
                        icon.textContent = 'star';
                        icon.classList.remove('fill-current');
                    }

                    if (isHover) {
                        star.classList.add('scale-110', 'transition-transform');
                    } else {
                        star.classList.remove('scale-110');
                    }
                });
            }
        });
    </script>


</body>

</html>