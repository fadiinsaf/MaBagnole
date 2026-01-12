<nav
    class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white/90 dark:bg-background-dark/90 backdrop-blur-sm">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="flex size-8 items-center justify-center rounded-xl bg-primary text-white">
                    <span class="material-symbols-outlined">directions_car</span>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">MaBagnole</span>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary transition-colors"
                    href="home.php">Home</a>
                <a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary transition-colors"
                    href="fleet.php">Fleet</a>
                <a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary transition-colors"
                    href="about.php">About</a>
                <!-- My Reservations Link -->
                <a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary transition-colors"
                    href="myReservations.php">My Reservations</a>
            </div>
            <div class="hidden md:flex items-center gap-3">
                <a href="../Controllers/logout.php"
                    class="px-4 py-2 text-sm font-bold text-white bg-primary hover:bg-red-600 rounded-lg transition-colors shadow-sm shadow-blue-500/30">
                    Log out
                </a>
            </div>
            <div class="md:hidden flex items-center">
                <button class="text-slate-700 dark:text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </div>
</nav>