<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit.prevent="saveNews" class="flex flex-col items-center p-8">
        <h2 class="text-center text-3xl m-4 mt-8">aktuelle Neuigkeiten</h2>

        <x-form-label for="title"></x-form-label>
        <x-form-input wire:model="title" name="title" id="title" placeholder="Titel" class="lg:w-1/2 mx-auto"></x-form-input>
        <x-form-error name="title" />
        <div class="flex items-start flex-col w-full lg:w-1/2 justify-between mt-2 mb-6">
            <x-form-label for="content"></x-form-label>
            <textarea id="content" name="content" rows="10" placeholder="Hier die Neuigkeiten" wire:model="content"
                class="block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6"></textarea>
        </div>
        <x-form-error name="content" />
        <div class="flex justify-center space-x-8">
            <x-form-button class="bg-primary p-2 px-6 " type="submit">Neuigkeiten Speichern</x-form-button>
        </div>
    </form>
    @if(session()->has('message'))
        <div class="bg-success-green p-4 text-center mx-auto">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-xl text-center font-bold mt-8">aktuelle Neuigkeiten</h2>

    @foreach($currentNews as $news)
    <div class="w-full lg:w-1/2 mx-auto bg-primary/40 p-4 m-4">
        <h2>{{ $news->title }}</h2>
        <p>{!! nl2br(e($news->content)) !!}</p>
        <button wire:click="deleteNews({{ $news->id }})" wire:confirm="Willst du wirklich die News löschen?" class="bg-red-300 mt-2 p-1 pl-4 pr-4 border border-red-500 hover:bg-red-100">Neuigkeit löschen</button>
    </div>
    @endforeach
</div>
