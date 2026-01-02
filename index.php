<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Login</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/carLogo.png">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="font-display bg-background-light dark:bg-background-dark min-h-screen flex flex-col">

    <header class="w-full border-b border-[#e7ebf3] dark:border-[#2a3447] bg-white dark:bg-[#1a202c]">
        <div class="px-8 py-4 flex items-center justify-between max-w-[1440px] mx-auto">
            <a class="flex items-center gap-3 text-[#0d121b] dark:text-white" href="#">
                <div class="size-8 text-primary">
                  <div class="flex size-8 items-center justify-center rounded-xl bg-primary text-white">
                        <span class="material-symbols-outlined">directions_car</span>
                    </div>
                </div>
                <h2 class="text-xl font-bold tracking-tight">MaBagnole</h2>
            </a>
            <div class="hidden sm:flex items-center gap-4">
                <span class="text-sm text-[#4c669a] dark:text-[#94a3b8]">Don't have an account?</span>
                <a class="text-sm font-medium text-primary hover:underline" href="/Views/register.php">Sign up</a>
            </div>
        </div>
    </header>

    <main class="flex flex-1 flex-col items-center justify-center p-4 sm:p-8">
        <div class="w-full max-w-[1000px] bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-[#2a3447] overflow-hidden flex flex-col md:flex-row h-full md:h-[600px]">

            <div class="w-full md:w-1/2 p-8 sm:p-12 flex flex-col justify-center">
                <div class="mb-8">
                    <h1 class="text-[#0d121b] dark:text-white text-3xl font-bold leading-tight mb-2">Welcome back</h1>
                    <p class="text-[#4c669a] dark:text-[#94a3b8] text-sm">Please enter your details to access your account.</p>
                </div>
                <form class="flex flex-col gap-5">

                    <div class="flex flex-col gap-2">
                        <label class="text-[#0d121b] dark:text-gray-200 text-sm font-medium">Email Address</label>
                        <div class="relative">
                            <input class="w-full rounded-lg border border-[#cfd7e7] dark:border-[#4a5568] bg-[#f8f9fc] dark:bg-[#2d3748] text-[#0d121b] dark:text-white h-12 px-4 pl-11 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all placeholder:text-[#4c669a] dark:placeholder:text-[#718096]" placeholder="john@example.com" type="email" />
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#4c669a] dark:text-[#718096] text-xl select-none">mail</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <label class="text-[#0d121b] dark:text-gray-200 text-sm font-medium">Password</label>
                            <a class="text-primary text-xs font-medium hover:underline" href="#">Forgot Password?</a>
                        </div>
                        <div class="relative group">
                            <input class="w-full rounded-lg border border-[#cfd7e7] dark:border-[#4a5568] bg-[#f8f9fc] dark:bg-[#2d3748] text-[#0d121b] dark:text-white h-12 px-4 pl-11 pr-11 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all placeholder:text-[#4c669a] dark:placeholder:text-[#718096]" placeholder="••••••••" type="password" />
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#4c669a] dark:text-[#718096] text-xl select-none">lock</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 pt-2">
                        <input class="h-4 w-4 rounded border-[#cfd7e7] text-primary focus:ring-primary/20 bg-[#f8f9fc] dark:bg-[#2d3748] dark:border-[#4a5568] cursor-pointer" id="remember-me" type="checkbox" />
                        <label class="text-sm text-[#4c669a] dark:text-[#94a3b8] select-none cursor-pointer" for="remember-me">Remember me for 30 days</label>
                    </div>
                    <button class="mt-2 w-full h-12 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg shadow-sm transition-all flex items-center justify-center gap-2">
                        Log In
                    </button>

                    <p class="text-center md:hidden text-sm text-[#4c669a] dark:text-[#94a3b8] mt-4">
                        Don't have an account? <a class="font-medium text-primary hover:underline" href="/Views/register.php">Sign up</a>
                    </p>
                </form>
            </div>

            <div class="hidden md:flex w-1/2 relative bg-[#f1f4f9] dark:bg-[#0f1520] items-center justify-center overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img alt="Modern silver sports car front view with soft lighting" class="h-full w-full object-cover object-center opacity-90 hover:scale-105 transition-transform duration-700" data-alt="Sleek modern silver car in a minimalist studio setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyRd9TE7XkyWbZIfsnCEgeT2us6h7c1U2Nt1u3YJniS1-6asL0Hd3g-OWUBvlwwrWWHjss_rc1-Cemwh4SLQQcRUfR6uw09Ke4S21q5bcYPCwp5ZyDBCpMzYhjRRWgWfPx7B30qV5A-3r_Z2GHno9bPe74Bwzjjk225TFiAmQIn33vGnzS2AN07MJVgxTLUra88xKuZBCqyCtk_03UO12HDls3FDhQa2FVQ1V5FkL7EkKvK5guL9tYTLFliOKlNfEfS6-4zohd80A" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent z-10"></div>
                </div>
                <div class="relative z-20 p-12 text-white mt-auto w-full">
                    <div class="mb-4">
                        <div class="flex gap-1 mb-4">
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                        </div>
                        <p class="text-2xl font-bold leading-tight mb-2">"MaBagnole made renting a car easier than ever. Highly recommended for business trips!"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="size-10 rounded-full bg-white/20 overflow-hidden backdrop-blur-sm">
                            <img alt="Professional woman smiling" class="h-full w-full object-cover" data-alt="Portrait of a smiling professional woman" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvmO1dbMLmuifUodAce19ymjKdSVNIL6GTFd-OaUsYRGNtUvKNxBbe5y0ActUb3TVsamAqKXFGrStp5jbPLBxoglAQxgSW3zRBBreaWlG94K-6jO2Y0EG9bxJBjwfVGFgcEdUAAh29nDDV7Udc3Fa25gcJ7If4eoL72P4ZI2I46gYYN4iQeuAftfLOiz0nibl0t_pZmyOzN4N8q8FGAUsl43KZ_JDP2pqwBOZzL5Qk-j8RnG7tpZZGeoEfcv3Iq4LRFIA07M50mkk" />
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Sophie Martin</p>
                            <p class="text-xs text-gray-300">Product Manager at TechFlow</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mt-8 text-center text-xs text-[#4c669a] dark:text-[#64748b]">
            <p>© 2026 MaBagnole. All rights reserved.</p>
            <div class="flex justify-center gap-4 mt-2">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="hover:text-primary transition-colors" href="#">Help Center</a>
            </div>
        </footer>
    </main>
</body>

</html>