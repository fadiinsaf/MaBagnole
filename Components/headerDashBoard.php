
            <header
                class="flex h-16 w-full items-center justify-between border-b border-slate-200 bg-white px-6 dark:border-slate-800 dark:bg-[#151b2b]">
                <button class="mr-4 text-slate-500 hover:text-slate-700 md:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="flex items-center gap-4 ml-auto">
                    <div class="flex items-center gap-3 pl-4">
                        <div class="hidden text-right md:block">
                            <p class="text-sm font-medium text-slate-900 dark:text-white"><?= $admin->getUserName() ?></p>
                            <p class="text-xs text-slate-500 dark:text-slate-400"><?= $admin->getUserRole() ?></p>
                        </div>
                    </div>
                </div>
            </header>