<div class="flex flex-col lg:flex-row mt-8 justify-around">
    <div class="bg-primary p-12 w-full">
        <p class="font-semibold">Öffnungszeiten</p>
        <p>Montag & Dienstag Ruhetag<br>
            Mittwoch - Samstag 10.00 - 22.00 Uhr </br>
            Sonntag: 10.00 bis 15.00 Uhr</p>
        <div class="mt-4">
        <a class="pt-4 underline hover:text-white/70" href="/impressum">Impressum</a> <br>
        <a class="underline hover:text-white/70" href="/datenschutz">Datenschutz</a> <br>
            <a wire:click="$dispatch('open-cookie-settings')"
                class="underline cursor-pointer hover:text-white/70"
            >
                Cookie-Einstellungen
            </a>
        </div>
    </div>
    <div class="bg-primary p-12 w-full">
        <p class="font-semibold">Gasthof Bauer</p>
        <p>Josefgasse 7 <br>
            4400 Steyr</p>
        <a class="hover:underline" href="mailto:r.trauner@bauer-gasthof.at">r.trauner@bauer-gasthof.at<a/> <br>
        <a class="hover:underline" href="tel:+436509120977">+43 6509120977</a>
        <div class="flex space-x-4 mt-2">
            <a hover="cursor-pointer " href="https://www.facebook.com/people/Gasthof-Bauer/100071095285569/"><img src="{{ asset('images/logos/facebook_icon.png') }}" class="w-8 h-auto pt-2 hover:opacity-50"></img></a>
            <a hover="cursor-pointer " href="https://www.instagram.com/gasthofbauersteyr/"><img src="{{ asset('images/logos/instagram.png') }}" class="w-8 h-auto pt-2 hover:opacity-50"></img></a>
        </div>
    </div>
    <div class="p-12 flex flex-col w-full relative">
        <p class="text-lg font-semibold">Newsletter anfordern</p>
        <form class="flex flex-col" wire:submit.prevent="saveCostumer">
            <label for="title">Anrede</label>
            <div class="relative">
            <select class=" relative appearance-none block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6" id="title" wire:model="title" required>
                <option class="bg-white" value="">Bitte wählen</option>
                <option value="herr">Herr</option>
                <option value="frau">Frau</option>
                <option value="diverse">Divers</option>
            </select>
            <div class="pointer-events-none absolute top-0 mt-4 right-0 flex items-center px-2 text-gray-400">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            </div>
            <x-form-error name="title" />

            <x-form-label for="name">Name</x-form-label>
            <x-form-input class="border border-black mb-2" id="name" type="text" wire:model="name" required />
            <x-form-error name="name" />

            <x-form-label for="email">E-Mail</x-form-label>
            <x-form-input class="border border-black mb-2" id="email" type="email" wire:model="email" required />
            <x-form-error name="email" />

            <x-form-button id="saveCostumer" type="submit" class="cursor-pointer">Absenden</x-form-button>
        </form>
        @if(session()->has('costumerMessage'))
            <div class="bg-success-green p-2 mt-4 ">
               <p>{{ session('costumerMessage') }}</p>
            </div>
        @endif
    </div>
</div>
