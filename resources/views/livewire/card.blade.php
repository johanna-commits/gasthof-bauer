<div>
    <div  class="p-4 bg-kastanie justify-center font-thin flex flex-col items-center bg-pattern lg:w-2/3 lg:mx-auto border border-yellow-200 bg-primary/10 border-secondary m-4">
        <h2 class="text-3xl lg:text-5xl font-accent font-bold mb-4 mt-14">{{$cardTypeTitle}}</h2>
        @php
            $soupCollection = $dishes->where('category', 'soup');
        @endphp
        @if ($soupCollection->isNotEmpty())
            <h3 class="text-2xl font-semibold mt-6 mb-2">Suppen</h3>
        @endif
        <div class="flex flex-col">
            @foreach($dishes as $dish)
            @if($dish->category == 'soup')
            <div class="flex flex-col items-center p-2 lg:p-4">
                <h4 class="lg:text-lg font-bold text-center">{{ $dish->name }}</h4>
                <p class="text-gray-600 text-center">{{ $dish->description }}</p>
                <p class="">{!! nl2br(e($dish->price)) !!}</p>
            </div>
            @endif
            @endforeach
        </div>
        <div class="flex w-2/3 items-center mt-4 justify-center flex-row space-x-2 lg:pb-12 lg:pt-12">
            <div class="h-0.5 bg-black w-full"></div>
            <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
            <div class="h-0.5 bg-black w-full"></div>
        </div>
        @php
            $mainCollection = $dishes->where('category', 'main');
        @endphp
        @if ($mainCollection->isNotEmpty())
            <h3 class="text-2xl font-semibold mt-6 mb-2">Hauptgerichte</h3>
        @endif
        <div class="flex flex-col">
            @foreach($dishes as $dish)
            @if($dish->category == 'main')
            <div class="flex flex-col items-center p-2 lg:p-4">
                <h4 class="lg:text-lg font-bold text-center">{{ $dish->name }}</h4>
                <p class="text-gray-600 text-center">{{ $dish->description }}</p>
                <p class="">{!! nl2br(e($dish->price)) !!}</p>
            </div>
            @endif
            @endforeach
        </div>
        <div class="flex w-2/3 items-center mt-4 justify-center flex-row space-x-2 lg:pb-12 lg:pt-12">
            <div class="h-0.5 bg-black w-full"></div>
            <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
            <div class="h-0.5 bg-black w-full"></div>
        </div>
        @php
            $dessertCollection = $dishes->where('category', 'dessert');
        @endphp
        @if ($dessertCollection->isNotEmpty())
            <h3 class="text-2xl font-semibold mt-6 mb-2">Desserts</h3>
        @endif
        <div class="flex flex-col">
            @foreach($dishes as $dish)
                @if($dish->category == 'dessert')
                <div class="flex flex-col items-center p-4">
                    <h4 class="lg:text-lg font-bold text-center">{{ $dish->name }}</h4>
                    <p class="text-gray-600 text-center">{{ $dish->description }}</p>
                    <p class="">{!! nl2br(e($dish->price)) !!}</p>
                </div>
               @endif
            @endforeach
        </div>
    </div>
</div>
