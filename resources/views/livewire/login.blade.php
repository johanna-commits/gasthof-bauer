<div>
    <div class="lg:w-2/3 lg:mx-auto p-8">
        <form wire:submit.prevent="login">
            <div class="mb-4">
                <x-form-label for="email">Email</x-form-label>
                <x-form-input type="email" name="email" id="email" wire:model="email" />
                <x-form-error for="email" name="email"/>
            </div>
            <div class="mb-4">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input type="password" name="password" id="password" wire:model="password" />
                <x-form-error for="password" name="password"/>
            </div>
            <div class="mb-4">
                <x-form-button type="submit">Login</x-form-button>
            </div>
        </form>
    </div>
</div>