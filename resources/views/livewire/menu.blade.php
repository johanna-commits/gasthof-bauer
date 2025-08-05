<div>
    <div class="flex flex-col items-center mb-12 justify-center space-y-4 pt-8 lg:pt-24">
        <h1 class="text-3xl lg:text-5xl text:lg font-accent mb-4">Mittagsmenü</h1>
        @php
            $allDatesNull = collect($menus)->every(fn($item) => is_null($item['date']));
        @endphp

        @if($allDatesNull)
            <p class="my-4">Kein Menü diese Woche</p>
        @else
    @if(!empty($menus[1]['date']) && !empty($menus[3]['date']))
        <h4 class="text-3xl font-accent font-thin pl-4">{{ $menus[1]['date'] ?? '' }} - {{ $menus[3]['date'] ?? '' }}
        </h4>
        @endif
        <div class="flex flex-wrap lg:flex-row lg:space-x-8 lg:pl-12 lg:pr-12 justify-center">
            @foreach ($menus as $menu)
            @if(!empty($menu['date']))
            <x-menu-card :date_menu="$menu['date']" :soup="$menu['soup']" :mainCourse="$menu['main_course']"
                :dessert="$menu['dessert']" />
                @endif
            @endforeach
        </div>
        @endif
        <p class="text-xl text-center font-sans font-thin pl-4">{!! nl2br(e($price)) !!}</p>
    </div>
</div>
