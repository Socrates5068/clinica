<div x-data="{ message: '' }" class="intro-x relative mr-3 sm:mr-6">
    <div class="search hidden sm:block">
        <input type="text" class="search__input form-control border-transparent" placeholder="Search..."
            x-model="message" @input="Livewire.emit('updateSearch', message)">
        <i data-feather=" search" class="search__icon dark:text-slate-500"></i>
    </div>
    {{-- <a class="notification sm:hidden" href=""> <i data-feather="search"
            class="notification__icon dark:text-slate-500"></i> </a>
    <div class="search-result">
        <div class="search-result__content">
            <div class="search-result__content__title">Pages</div>
            <div class="mb-5">
                <a href="" class="flex items-center">
                    <div
                        class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                        <i class="w-4 h-4" data-feather="inbox"></i>
                    </div>
                    <div class="ml-3">Mail Settings</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div
                        class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                        <i class="w-4 h-4" data-feather="users"></i>
                    </div>
                    <div class="ml-3">Users & Permissions</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div
                        class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                        <i class="w-4 h-4" data-feather="credit-card"></i>
                    </div>
                    <div class="ml-3">Transactions Report</div>
                </a>
            </div>
            <div class="search-result__content__title">Users</div>
            <div class="mb-5">
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                            src="midone/dist/images/profile-5.jpg">
                    </div>
                    <div class="ml-3">Arnold Schwarzenegger</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                        arnoldschwarzenegger@left4code.com</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                            src="midone/dist/images/profile-4.jpg">
                    </div>
                    <div class="ml-3">Kevin Spacey</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                        kevinspacey@left4code.com</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                            src="midone/dist/images/profile-3.jpg">
                    </div>
                    <div class="ml-3">Kevin Spacey</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                        kevinspacey@left4code.com</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                            src="midone/dist/images/profile-10.jpg">
                    </div>
                    <div class="ml-3">Keanu Reeves</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                        keanureeves@left4code.com</div>
                </a>
            </div>
            <div class="search-result__content__title">Products</div>
            <a href="" class="flex items-center mt-2">
                <div class="w-8 h-8 image-fit">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                        src="midone/dist/images/preview-4.jpg">
                </div>
                <div class="ml-3">Nike Tanjun</div>
                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp;
                    Outdoor</div>
            </a>
            <a href="" class="flex items-center mt-2">
                <div class="w-8 h-8 image-fit">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                        src="midone/dist/images/preview-12.jpg">
                </div>
                <div class="ml-3">Dell XPS 13</div>
                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop
                </div>
            </a>
            <a href="" class="flex items-center mt-2">
                <div class="w-8 h-8 image-fit">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                        src="midone/dist/images/preview-3.jpg">
                </div>
                <div class="ml-3">Nike Air Max 270</div>
                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp;
                    Outdoor</div>
            </a>
            <a href="" class="flex items-center mt-2">
                <div class="w-8 h-8 image-fit">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                        src="midone/dist/images/preview-8.jpg">
                </div>
                <div class="ml-3">Apple MacBook Pro 13</div>
                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop
                </div>
            </a>
        </div>
    </div> --}}
</div>
