<div class="relative bg-fuchsia-200">
<div x-data
     x-show="$wire.showModal"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 translate-y-4"
     x-transition:enter-end="opacity-100 translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 translate-y-0"
     x-transition:leave-end="opacity-0 translate-y-4"
     class="absolute fixed bottom-0 bg-black/50 z-50 flex items-end justify-end"
     >
    <div class="bg-background border-2 border-primary p-6 shadow-xl max-w-md text-center">
        <h2 class="text-xl font-semibold mb-4">🍪 Cookie-Zustimmung</h2>
        <p class="mb-6">Wir verwenden Cookies, um deine Nutzererfahrung zu verbessern. Du kannst selbst entscheiden, ob du zustimmen möchtest.</p>
        <div class="flex justify-center gap-4">
            <x-form-button wire:click="decline" class="">Ablehnen</x-form-button>
            <x-form-button wire:click="accept" class="bg-primary">Zustimmen</x-form-button>
        </div>
    </div>
</div>
</div>
