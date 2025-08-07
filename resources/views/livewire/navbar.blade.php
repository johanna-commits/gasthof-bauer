
<div class="navbar bg-white shadow sticky top-0 z-50" id="navbar" x-data="{ open: false }">
    <nav
        class="bg-primary flex-no-wrap  flex w-full items-center justify-between sticky top-0 py-2 shadow-dark-mild lg:flex-wrap lg:justify-start lg:py-0">
        <div class="flex w-full flex-wrap items-center justify-between">
            <button
                @click="open = !open"
                class="block border-0 px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0  lg:hidden cursor-pointer"
                type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="[&>svg]:w-7 [&>svg]:stroke-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                              clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <div :class="open ? 'flex' : 'hidden'"
                 class="!visible  flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                 id="navbarSupportedContent1" data-twe-collapse-item>
                <div class="bg-white flex flex-col items-center lg:items-stretch w-full lg:flex-row ">
                    <div class="bg-white w-60 h-auto lg:mb-4 lg:p-8 lg:block py-4 px-12">
                        <a class=" "
                           href="/">
                            <img src="{{ asset('images/logo.png') }}" class=" w-full h-auto" alt="Gasthof Bauer Logo"
                                 loading="lazy" />
                        </a>
                    </div>
                    <div class="flex flex-col flex-grow w-full lg:w-auto bg-primary lg:bg-inherit">
                        <div class="pl-12 lg:pl-0 hidden lg:flex grow flex-1  flex-col lg:flex-row lg:justify-end lg:items-center p-2 lg:space-x-2">
                            <a href="/menü"
                               class="bg-white border border-primary p-1 text-center  lg:pl-4 font-thin pr-4 transition-transform duration-300 hover:scale-105 hover:bg-primary/40">
                                Mittagsmenü
                            </a>
                            <a href="/nächtigen"
                               class="bg-white border border-primary p-1 text-center lg:pl-4 font-thin pr-4 transition-transform duration-300 hover:scale-105 hover:bg-primary/40">
                                Nächtigen
                            </a>
                        </div>

                        <ul class="bg-primary pt-4 lg:pt-0 pl-12 lg:pl-0 items-start lg:items-center font-thin space-x-6 w-full list-style-none me-auto flex-1 flex justify-end flex-col ps-0 lg:flex-row grow"
                            data-twe-navbar-nav-ref>
                            <li class="mb-4 lg:mb-0 lg:pe-2 border-b-2 border-b-white/50 lg:border-0" data-twe-nav-item-ref>
                                <a class=" transition font-light underline-link duration-200 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2 {{ request()->is('/') ? 'underline-link is-active' : '' }}" href="/" data-twe-nav-link-ref>Home</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pe-2 border-b-2 border-b-white/50 lg:border-0" data-twe-nav-item-ref>
                                <a class="transition underline-link duration-200 hover:ease-in-out focus:text-black/80 focus:underline-link active:underline-link active:text-black/80 motion-reduce:transition-none lg:px-2 {{ request()->is('menü') ? 'underline-link is-active' : '' }}"
                                   href="/menü" data-twe-nav-link-ref>Mittagsmenü</a>
                            </li>
                            <li class="relative group ">
                                <a
                                    href="/speisekartenübersicht"
                                    class="inline-flex items-center gap-1 lg:px-2 py-2 mb-4 lg:mb-0 lg:pe-2 border-b-2 border-b-white/50 lg:border-0"
                                >
                                    Speisekarten
                                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </a>
                            <!-- Dropdown-Menü -->
                                <ul
                                    class="absolute left-0 z-50 w-48 bg-white shadow-lg  py-2 border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300"
                                >
                                    <li>
                                        <a href="/speisekarte/normal" class="block px-4 py-2 hover:bg-primary-light">Mittagskarte</a>
                                    </li>
                                    <li>
                                        <a href="/speisekarte/abend" class="block px-4 py-2 hover:bg-primary-light">Abendkarte</a>
                                    </li>
                                    <li>
                                        <a href="/speisekarte/snack" class="block px-4 py-2 hover:bg-primary-light">Jausenkarte</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="mb-4 lg:mb-0 lg:pe-2 outline-b-2 outline-b-white/50 lg:border-0" data-twe-nav-item-ref>
                                <a class=" transition underline-link duration-200 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2 {{ request()->is('nächtigen') ? 'underline-link is-active' : '' }}"
                                   href="/nächtigen" data-twe-nav-link-ref>Nächtigen</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pe-2 border-b-2 border-b-white/50 lg:border-0" data-twe-nav-item-ref>
                                <a class=" transition underline-link duration-200 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none  lg:px-2 {{ request()->is('ambiente') ? 'underline-link is-active' : '' }}"
                                   href="/ambiente" data-twe-nav-link-ref>Ambiente</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pe-2 border-b-2 border-b-white/50 lg:border-0" data-twe-nav-item-ref>
                                <a class=" transition underline-link duration-200 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2 {{ request()->is('anfahrt') ? 'underline-link is-active' : '' }}"
                                   href="/anfahrt" data-twe-nav-link-ref>Anfahrt</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pe-2 border-b-2 border-b-white/50 lg:border-0" data-twe-nav-item-ref>
                                <a class=" transition underline-link duration-200 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none  lg:px-2 {{ request()->is('gutscheine') ? 'underline-link is-active' : '' }}"
                                   href="/gutscheine" data-twe-nav-link-ref>Gutscheine</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pe-2 border-b-2 border-b-white/50 lg:border-0" data-twe-nav-item-ref>
                                <a class=" transition underline-link duration-200 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2 {{ request()->is('kontakt') ? 'underline-link is-active' : '' }}"
                                   href="/kontakt" data-twe-nav-link-ref>Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            navbar.style.top = "-220px";
        } else {
            navbar.style.top = "0";
        }
        lastScrollTop = scrollTop;
    });
</script>
