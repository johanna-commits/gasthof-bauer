<div class="flex flex-center flex-col items-center">

    <form wire:submit.prevent="saveFood" class="w-full lg:w-2/3 mx-auto p-8">
        <div class="flex flex-col lg:flex-row justify-center items-center lg:p-8 w-full">
            <div class="lg:p-8 space-x-2 mb-8 w-full flex-grow justify-self-center">
                {{-- Menü 1 --}}
                <h3 class="text-xl font-bold mt-8 text-center mb-4">Gericht hinzufügen</h3>

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="nameFood">Name des Gerichts</x-form-label>
                    <x-form-input wire:model="nameFood" name="nameFood" id="nameFood" placeholder="Name" />
                </div>
                <x-form-error name="nameFood" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="description">Beschreibung des Gerichts</x-form-label>
                    <x-form-input wire:model="description" name="description" id="description"
                        placeholder="Beschreibung" />
                </div>
                <x-form-error name="description" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="price">Preis</x-form-label>
                    <x-form-input wire:model="price" name="price" id="price" placeholder="Preis" />
                </div>
                <x-form-error name="price" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="category">Kategorie</x-form-label>
                    <select
                        class="block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6"
                        id="category" wire:model="category" required>
                        <option value="">Bitte wählen</option>
                        <option value="soup">Suppe</option>
                        <option value="main">Hauptspeise</option>
                        <option value="dessert">Dessert</option>
                    </select>
                </div>
                <x-form-error name="category" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="cardType">Welche Speisekarte?</x-form-label>
                    <select
                        class="block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6"
                        id="cardType" wire:model="cardType" required>
                        <option value="">Bitte wählen</option>
                        <option value="regular">Normale Karte</option>
                        <option value="evening">Abendkarte</option>
                        <option value="snack">Jausenkarte</option>
                    </select>
                </div>
                <x-form-error name="cardType" />

                <x-form-button class="mt-4" id="saveFood" type="submit">Speise hinzufügen</x-form-button>
                @if(session()->has('newDishMessage'))
                <div class="bg-success-green p-2 mt-4 w-2/3 mx-auto">
                    {{ session('newDishMessage') }}
                </div>
                @endif
            </div>
        </div>
    </form>

    <h2 class="text-xl font-bold mt-8 text-center mb-4">alle Gerichte</h2>

    @foreach($dishes as $dish)
        <div class="border-2 border-primary p-2 w-full lg:w-2/3 mb-4">
    <form wire:submit.prevent="updateFood({{ $dish->id }})" class="  mx-auto p-8" id="foodform-{{ $dish->id }}">
        <div class="mb-4">
            <label for="food-name-{{ $dish->id }}" class="block text-sm font-medium text-gray-700">Speisenname</label>
            <x-form-input wire:model="changeFoodName.{{ $dish->id }}" name="changeFoodName"
                id="food-name-{{ $dish->id }}" value="{{ $dish->name }}" class="mt-1" />
            <x-form-error name="changeFoodName.{{ $dish->id }}" />
        </div>

        <div class="mb-4">
            <label for="food-description-{{ $dish->id }}"
                class="block text-sm font-medium text-gray-700">Beschreibung</label>
            <x-form-input wire:model="changeFoodDescription.{{ $dish->id }}" name="changeFoodDescription"
                id="food-description-{{ $dish->id }}" value="{{ $dish->description }}" class="mt-1" />
            <x-form-error name="changeFoodDescription.{{ $dish->id }}" />
        </div>

        <div class="mb-4">
            <x-form-label for="food-price-{{ $dish->id }}" class="block text-sm font-medium text-gray-700">Preis (€)</x-form-label>
            <x-form-input wire:model="changeFoodPrice.{{ $dish->id }}" name="changeFoodPrice"
                id="food-price-{{ $dish->id }}" value="{{ $dish->price }}" class="mt-1" />
            <x-form-error name="changeFoodPrice.{{ $dish->id }}" />
        </div>

        <div class="mb-4">
            <x-form-label for="change-category-{{ $dish->id }}">Kategorie</x-form-label>
            <select
                class="block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6"
                id="change-category-{{ $dish->id }}" wire:model="changeCategory.{{ $dish->id }}" required>
                <option value="">Bitte wählen</option>
                <option value="soup" {{ $dish->category === 'soup' ? 'selected' : '' }}>Suppe</option>
                <option value="main" {{ $dish->category === 'main' ? 'selected' : '' }}>Hauptspeise</option>
                <option value="dessert" {{ $dish->category === 'dessert' ? 'selected' : '' }}>Dessert</option>
            </select>
            <x-form-error name="changeCategory.{{ $dish->id }}" />
        </div>

        <div class="mb-4">
            <x-form-label for="change-cardType-{{ $dish->id }}">Welche Karte</x-form-label>
            <select
                class="block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6"
                id="change-cardType-{{ $dish->id }}" wire:model="changeCardType.{{ $dish->id }}" required>
                <option value="">Bitte wählen</option>
                <option value="regular" {{ $dish->cardType === 'regular' ? 'selected' : '' }}>Normale Karte</option>
                <option value="evening" {{ $dish->cardType === 'evening' ? 'selected' : '' }}>Abendkarte</option>
                <option value="snack" {{ $dish->cardType === 'snack' ? 'selected' : '' }}>Jausenkarte</option>
            </select>
            <x-form-error name="changeCardType.{{ $dish->id }}" />
        </div>

        <x-form-button class="mt-2" id="updateFood-{{ $dish->id }}" type="submit">Speise ändern</x-form-button>
    </form>
        @if(session()->has('dishMessage.' . $dish->id))
            <div class="bg-success-green p-2 mt-4">
                {{ session('dishMessage.' . $dish->id) }}
            </div>
        @endif
            <div class="flex w-full justify-end flex-end  mx-auto pr-8 pb-4">  <button wire:click="deleteFood({{ $dish->id }})" wire:confirm="Willst du wirklich die Speise löschen?" class="bg-red-400 p-1 pl-4 pr-4 border border-red-500 hover:bg-red-100">Gericht löschen</button>
            </div>
        @if(session()->has('dishDeleteMessage.' . $dish->id))
            <div class="bg-success-green p-2 mt-4">
                {{ session('dishDeleteMessage.' . $dish->id) }}
            </div>
        @endif
        </div>
    @endforeach
</div>
