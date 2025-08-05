<div class="bg-primary ml-4 mr-4 fading-in p-4 lg:p-12 mb-8 menuCard  shadow">
    <div class="flex flex-col space-y-4 items-center">
        <!-- Überprüfung, ob das Datum nicht null ist -->
        @if ($dateMenu)
            <h5 class="text-xl text-center font-bold">{{ \Carbon\Carbon::parse($dateMenu)->locale('de')->isoFormat('dddd, D. MMMM YYYY') }}</h5>
        @endif
        
        <!-- Überprüfung, ob die Suppe nicht null ist -->
        @if ($soup)
            <p class="lg:text-lg text-center font-thin">{{ $soup }}</p>
        @endif
        
        <!-- Separator -->
        @if ($soup && $mainCourse)
        <p class="lg:text-lg font-thin">***</p>
        @endif
        
        <!-- Überprüfung, ob das Hauptgericht nicht null ist -->
        @if ($mainCourse)
            <p class="lg:text-lg text-center font-thin">{{ $mainCourse }}</p>
        @endif

         <!-- Separator -->
         @if ($mainCourse && $dessert)
         <p class="lg:text-lg font-thin">***</p>
        @endif

        <!-- Überprüfung, ob das Dessert nicht null ist -->
        @if ($dessert)
            <p class="lg:text-lg text-center font-thin">{{ $dessert }}</p>
        @endif
        
        <!-- Trennlinie mit Bild -->
        <div class="flex w-full items-center mt-4 justify-center flex-row space-x-2">
            <div class="h-0.5 bg-black w-full"></div>
            <img src="{{ asset('images/Kastanienblatt_black.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
            <div class="h-0.5 bg-black w-full"></div>
        </div>
    </div>
</div>
