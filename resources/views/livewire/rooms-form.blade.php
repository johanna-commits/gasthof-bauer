<div>
    <div>
        <div class="flex flex-col items-center mb-12 justify-center space-y-4 pt-8 lg:pt-24">
            <h1 class="text-3xl lg:text-5xl text:lg font-accent mb-2">Zimmerpreise ändern</h1>
            <form wire:submit.prevent="changeRoomPrice" class="w-full lg:w-2/3 mx-auto p-8">
                <div class="flex flex-col lg:flex-row justify-center items-center lg:p-8 w-full">
                    <div class="lg:p-8 space-x-2 w-full flex-grow justify-self-center">
                        <div class="flex items-start flex-col justify-between mt-2 mb-6">
                            <x-form-label for="single_room_price">Einbettzimmer normal Preis</x-form-label>
                            <x-form-input wire:model="single_room_price" name="single_room_price" id="single_room_price" placeholder="Preis Einbettzimmer" />
                        </div>
                        <x-form-error name="single_room_price" />

                        <div class="flex items-start flex-col justify-between mt-2 mb-6">
                            <x-form-label for="double_room_price">Zweibettzimmer normal Preis</x-form-label>
                            <x-form-input wire:model="double_room_price" name="double_room_price" id="double_room_price" placeholder="Preis Zweibettzimmer" />
                        </div>
                        <x-form-error name="double_room_price" />

                        <div class="flex items-start flex-col justify-between mt-2 mb-6">
                            <x-form-label for="single_room_christmas_price">Einbettzimmer Advent Preis</x-form-label>
                            <x-form-input wire:model="single_room_christmas_price" name="single_room_christmas_price" id="single_room_christmas_price" placeholder="Preis Einbettzimmer Advent" />
                        </div>
                        <x-form-error name="single_room_christmas_price" />

                        <div class="flex items-start flex-col justify-between mt-2 mb-6">
                            <x-form-label for="double_room_christmas_price">Einbettzimmer Advent Preis</x-form-label>
                            <x-form-input wire:model="double_room_christmas_price" name="double_room_christmas_price" id="double_room_christmas_price" placeholder="Preis Zweibettzimmer Advent" />
                        </div>
                        <x-form-error name="double_room_christmas_price" />
                    </div>
                </div>
                <div class="flex justify-center space-x-2">
                    <div class="flex justify-center">
                        <x-form-button class="bg-primary p-2 px-6" type="submit">Preise Speichern</x-form-button>
                    </div>
                </div>
            </form>
            @if(session()->has('changePriceMessage'))
                <div class="bg-primary p-2 mt-4 w-2/3 mx-auto">
                    {{ session('changePriceMessage') }}
                </div>
            @endif
        </div>
    </div>
</div>
