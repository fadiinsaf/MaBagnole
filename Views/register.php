<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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

<body class="bg-background-light dark:bg-background-dark font-display text-[#0d121b] dark:text-white antialiased">
    <div class="flex min-h-screen w-full flex-row overflow-hidden">
        <div class="relative hidden w-0 flex-1 lg:block">
            <img alt="Sleek grey sports car parked on a modern city street" class="absolute inset-0 h-full w-full object-cover" data-alt="Sleek grey sports car parked on a modern city street" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1kFzk6QgYHnkCsIiWu-DhTEZ-eAOT6sQYwSuWwAMC2pmhgqI_npBd2lzesmBmNN_VNgnaUr8K4Wdlz_oyxIEnOjioSgcE0AGUIYH2_c6i83_LQ-iEyfii9eWrO7-gfA24zLt7ptZj4_Ej2isO-iO6Y9dmvRjdYbkOlyzaYkTeRSV8U0ACM9SY5LwdYww0lUFtHSsMyDcs_kYj1zqAP_QJdtHCbvyMEEYdThtTa7wT2MrPHBbXrc799XTqOewvrFW7HVNU8hxa4lA" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 via-background-dark/40 to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-16 text-white max-w-2xl">
                <div class="mb-6 size-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-white" style="font-size: 28px;">electric_car</span>
                </div>
                <h2 class="text-4xl font-bold leading-tight mb-4">Start your journey with premium comfort.</h2>
                <p class="text-lg text-white/80">Join thousands of users who trust MaBagnole for their daily commute and weekend getaways.</p>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24 bg-background-light dark:bg-background-dark overflow-y-auto">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div class="flex items-center gap-3 mb-10">
                    <div class="flex size-10 items-center justify-center rounded-xl bg-primary text-white">
                        <span class="material-symbols-outlined">directions_car</span>
                    </div>
                    <h2 class="text-2xl font-bold tracking-tight text-[#0d121b] dark:text-white">MaBagnole</h2>
                </div>
                <div class="mb-8">
                    <h2 class="text-3xl font-bold leading-tight tracking-tight text-[#0d121b] dark:text-white">Create your account</h2>
                    <p class="mt-2 text-sm text-[#4c669a] dark:text-gray-400">Join us to find the perfect ride for your next journey.</p>
                </div>
                <form action="#" class="space-y-5" method="POST">
                    <div>
                        <label class="block text-sm font-medium leading-6 text-[#0d121b] dark:text-gray-200 mb-2" for="name">Full Name</label>
                        <div class="relative">
                            <input class="block w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-white dark:bg-[#1A2230] py-3 px-4 text-[#0d121b] dark:text-white placeholder:text-[#4c669a] dark:placeholder:text-gray-500 focus:border-primary focus:ring-1 focus:ring-primary sm:text-base outline-none transition-colors" id="name" name="name" placeholder="John Doe" type="text" />
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="material-symbols-outlined text-[#4c669a]" style="font-size: 20px;">person</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium leading-6 text-[#0d121b] dark:text-gray-200 mb-2" for="email">Email Address</label>
                        <div class="relative">
                            <input class="block w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-white dark:bg-[#1A2230] py-3 px-4 text-[#0d121b] dark:text-white placeholder:text-[#4c669a] dark:placeholder:text-gray-500 focus:border-primary focus:ring-1 focus:ring-primary sm:text-base outline-none transition-colors" id="email" name="email" placeholder="john@example.com" type="email" />
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="material-symbols-outlined text-[#4c669a]" style="font-size: 20px;">mail</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium leading-6 text-[#0d121b] dark:text-gray-200 mb-2" for="password">Password</label>
                        <div class="relative">
                            <input class="block w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-white dark:bg-[#1A2230] py-3 px-4 text-[#0d121b] dark:text-white placeholder:text-[#4c669a] dark:placeholder:text-gray-500 focus:border-primary focus:ring-1 focus:ring-primary sm:text-base outline-none transition-colors" id="password" name="password" placeholder="Minimum 8 characters" type="password" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium leading-6 text-[#0d121b] dark:text-gray-200 mb-2" for="confirm_password">Confirm Password</label>
                        <div class="relative">
                            <input class="block w-full rounded-lg border border-[#cfd7e7] dark:border-gray-700 bg-white dark:bg-[#1A2230] py-3 px-4 text-[#0d121b] dark:text-white placeholder:text-[#4c669a] dark:placeholder:text-gray-500 focus:border-primary focus:ring-1 focus:ring-primary sm:text-base outline-none transition-colors" id="confirm_password" name="confirm_password" placeholder="Re-enter password" type="password" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input class="h-4 w-4 rounded border-[#cfd7e7] text-primary focus:ring-primary bg-white dark:bg-background-dark dark:border-gray-600" id="terms" name="terms" type="checkbox" />
                            <label class="ml-2 block text-sm text-[#4c669a]" for="terms">I agree to the <a class="font-medium text-primary hover:text-primary/80" href="#">Terms</a> and <a class="font-medium text-primary hover:text-primary/80" href="#">Privacy Policy</a></label>
                        </div>
                    </div>
                    <div>
                        <button class="flex w-full justify-center rounded-lg bg-primary px-3 py-3.5 text-sm font-bold leading-6 text-white shadow-sm hover:bg-primary/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-all" type="submit">
                            Create Account
                        </button>
                    </div>
                </form>
                <p class="mt-8 text-center text-sm text-[#4c669a]">
                    Already have an account?
                    <a class="font-bold leading-6 text-primary hover:text-primary/80 transition-colors" href="../index.php">Log In</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>