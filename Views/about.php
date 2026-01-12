<?php
require_once __DIR__ . "/../Models/Admin.php";
require_once __DIR__ . "/../Models/Client.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Middlewares/IsAuthed.php";
require_once __DIR__ . "/../Middlewares/IsClient.php";

session_start();

IsAuthed::handle();
IsClient::handle();

?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - About Us</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
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
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white transition-colors duration-200">
<?php require_once __DIR__ . "/../Components/header.php" ?>
    <div class="relative w-full bg-background-light dark:bg-background-dark py-12 lg:py-20 overflow-hidden">
        <div
            class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-blue-100/50 to-transparent dark:from-blue-900/10 pointer-events-none">
        </div>
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white leading-tight tracking-tight mb-6">
                    Redefining Your <br /><span class="text-primary">Journey on the Road.</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-600 dark:text-slate-300 font-medium mb-8 leading-relaxed">
                    At MaBagnole, we believe that renting a car should be as enjoyable as driving one. We're on a
                    mission to simplify mobility with transparent service and premium vehicles.
                </p>
            </div>
        </div>
    </div>
    <div class="w-full bg-white dark:bg-slate-900 py-16 lg:py-24">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="relative rounded-2xl overflow-hidden aspect-[4/3] shadow-2xl">
                    <div class="absolute inset-0 bg-cover bg-center"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCo3JTHNF7YDcgobTFbsy40AdZvf6ieocQowXKxK6ZCSERaK2Y4HD4-doAA_bNPrc1QjGXfDR7ebQqUlY3Cu8pv0dl6iKZmY3MmYh5sIwdDaGEx1mkH5eiNvgUnzNMdHHP-WlszKz-EYcQPhvXx5YEP-eeLgiijxDqwPcLoYkO3CJSgVX2ky4LS-xzH5S0SwqIS3liq2XeG6XsBNL2iYwzPFZiLmb9r3c64wTXamg2x831R1egMASrnOLXfk97VTCh-WkQtogSEUg4");'>
                    </div>
                </div>
                <div>
                    <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Our Mission</span>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">Driven by Excellence, Fueled by
                        Trust</h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">
                        Founded with a simple idea: car rental shouldn't be complicated. We stripped away the hidden
                        fees, the confusing paperwork, and the waiting lines to create a seamless experience that puts
                        you in the driver's seat faster.
                    </p>
                    <p class="text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                        Whether you need a compact car for city driving or a spacious SUV for a family adventure, our
                        diverse fleet is maintained to the highest safety standards.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 size-12 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">verified_user</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">Reliability</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Cars you can trust, service you
                                    can depend on.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 size-12 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">Transparency</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400">No hidden costs. What you see is
                                    what you pay.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-primary py-16">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                <div class="flex flex-col gap-2">
                    <span class="text-4xl md:text-5xl font-black">50+</span>
                    <span class="text-blue-100 font-medium text-sm md:text-base">Cities Covered</span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-4xl md:text-5xl font-black">12k+</span>
                    <span class="text-blue-100 font-medium text-sm md:text-base">Happy Customers</span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-4xl md:text-5xl font-black">500+</span>
                    <span class="text-blue-100 font-medium text-sm md:text-base">Premium Cars</span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-4xl md:text-5xl font-black">24/7</span>
                    <span class="text-blue-100 font-medium text-sm md:text-base">Customer Support</span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-background-light dark:bg-background-dark py-16 lg:py-24">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center text-center">
                <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Leadership</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-10">Operations Management
                </h2>
                <div
                    class="group relative bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 max-w-lg w-full border border-slate-100 dark:border-slate-700">
                    <div
                        class="absolute top-0 left-0 w-full h-32 bg-gradient-to-r from-blue-500/10 to-primary/10 rounded-t-2xl">
                    </div>
                    <div class="relative flex flex-col items-center">
                        <div
                            class="size-32 rounded-full ring-4 ring-white dark:ring-slate-800 bg-slate-200 dark:bg-slate-700 overflow-hidden shadow-lg mb-6 flex items-center justify-center text-slate-400">
                            <img src="https://avatars.githubusercontent.com/u/229927291?v=4" alt="Manager">
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Fadi Insaf</h3>
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 text-primary text-sm font-bold mb-6">
                            General Manager
                        </span>
                        <p class="text-slate-600 dark:text-slate-400 text-center leading-relaxed mb-8">
                            "Overseeing our operations with a focus on efficiency and customer satisfaction. Dedicated
                            to maintaining the high standards MaBagnole is known for."
                        </p>
                        <div
                            class="w-full border-t border-slate-100 dark:border-slate-700 pt-6 flex justify-center gap-6">
                            <a class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2 text-sm font-medium"
                                href="mailto:fadiinsafff.com">
                                <span class="material-symbols-outlined text-lg">mail</span>
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-slate-50 dark:bg-slate-800/50 py-16 lg:py-24 border-t border-slate-200 dark:border-slate-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-6">Ready to Experience the
                Difference?</h2>
            <p class="text-lg text-slate-600 dark:text-slate-400 mb-8 max-w-2xl mx-auto">
                Join thousands of satisfied customers who have chosen MaBagnole for their travel needs. Book your
                perfect car today.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="fleet.php"
                    class="inline-flex items-center justify-center h-12 px-8 text-base font-bold text-white bg-primary rounded-lg hover:bg-blue-700 transition-all shadow-lg shadow-blue-900/20">
                    Browse Fleet
                </a>
                <a href="tel:+212568293044"
                    class="inline-flex items-center justify-center h-12 px-8 text-base font-bold text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 dark:bg-slate-800 dark:text-white dark:border-slate-700 dark:hover:bg-slate-700 rounded-lg transition-all">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
<?php require_once __DIR__ . "/../Components/footer.php" ?>

</body>

</html>