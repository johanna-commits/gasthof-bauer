<div class="lg:w-2/3 mx-auto">
    <h1 class="mx-auto text-2xl mt-4 lg:text-4xl lg:mt-8">Newsletter</h1>
    <form wire:submit.prevent="sendNewsletter">
        <div class="mb-4">
            <x-form-label for="title">Titel</x-form-label>
            <x-form-input name="title" id="title" wire:model="title" />
            <x-form-error for="title" name="title" />
            <x-form-label for="newsletter">Newsletter</x-form-label>
            <textarea name="newsletter" id="newsletter" wire:model="newsletter" rows="10" class="block w-full border border-slate-300  bg-transparent py-2 px-2 placeholder:text-gray-400 outline-none active:ring-primary focus:ring-primary focus:ring-1  sm:text-sm sm:leading-6 transition-all duration-300 focus:border-primary focus:bg-primary/10" placeholder="Geben Sie den Inhalt des Newsletters ein..."></textarea>
            <x-form-error for="email" name="email" />
            <x-form-label for="subject">Betreff</x-form-label>
            <x-form-input name="subject" id="subject" wire:model="subject" />
            <x-form-error for="subject" name="subject" />
        </div>
        <div class="mb-4">
            <x-form-button type="submit">Newsletter verschicken</x-form-button>
        </div>
    </form>
    @if(session()->has('newsletterMessage'))
        <div class="bg-success-green p-4 text-center mx-auto">
            {{ session('newsletterMessage') }}
        </div>
    @endif
</div>
