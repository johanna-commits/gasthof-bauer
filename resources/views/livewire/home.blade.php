<div>
    <div class="flex flex-col lg:flex-row min-h-screen! lg:h-screen">
    <div class="lg:w-60 relative lg:mb-4 flex-shrink-0 lg:p-8 ">
        </div>
        <div class="bg-gray-600 relative flex-grow">
            <div class="relative h-full">
                <img src="{{ asset('images/Schild.png') }}" alt="Schild"
                    class="object-cover w-full h-full" loading="lazy" />
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="absolute inset-0 flex flex-col justify-center">
                    <h2
                        class="text-white text-xl mb-4 self-center lg:text-5xl  lg:pr-56 lg:self-center lg:pt-12 lg:pl-24 font-sans font-thin fade-in">
                        Willkommen
                        im
                    </h2>
                    <h2
                        class="text-accent text-5xl md:text-7xl lg:text-9xl lg:self-center p:2 md:pt-10 self-center lg:p-10 font-accent lg:pl-24 text-primary fade-in-delay">
                        Gasthof Bauer
                    </h2>
                </div>
            </div>
        </div>
        <div class="kastanien-image-container lg:top-1/3 lg:left-24">
            <img src="{{ asset('images/Kastanienblattfull.png') }}" alt="Kastanien" id="kastanien-image-top"
                class="bottom-48 left-8 lg:left-36 p-4 lg:ml-24 kastanien-image">
            <img src="{{ asset('images/Kastanienblattfull.png') }}" alt="Kastanien" id="kastanien-image-middle"
                class="bottom-20 left-8 p-4 lg:left-18 kastanien-image">
            <img src="{{ asset('images/Kastanienblattfull.png') }}" alt="Kastanien" id="kastanien-image-bottom"
                class="bottom-20 left-8 p-4 lg:ml-24 kastanien-image">
        </div>
    </div>
    @if(!$news->isEmpty())
        <div class="w-full flex flex-col items-center pt-8 lg:pt-24">
            <h2 class="text-3xl lg:text-5xl font-accent mb-4 lg:mb-8">Was gibts neues?</h2>
                @foreach($news as $newsItem)
                    <div class="bg-amber-50 border-2 border-primary p-4 mb-6 w-full max-w-xl text-center">
                        <h3 class="text-xl font-bold mb-2">{{ $newsItem->title }}</h3>
                        <p class="mb-4">{!! nl2br(e($newsItem->content)) !!}</p>
                        @if(!empty($newsItem->image))
                            <img src="{{ url('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="mx-auto max-w-full h-auto rounded">
                        @endif
                    </div>
                @endforeach
        </div>
    @endif

    @if(!empty($menus) && $menus ==! null)
    <div class="flex flex-col items-center mb-12 justify-center space-y-4 pt-8 lg:pt-24">
        <h3 class="text-3xl lg:text-5xl font-accent mb-4">Mittagsmenü</h3>

        @if(!empty($menus[1]['date']) && !empty($menus[3]['date']))
        <h4 class="text-3xl font-accent font-thin pl-4">{{ $menus[1]['date'] ?? '' }} - {{ $menus[3]['date'] ?? '' }}
        </h4>
        @endif

        <div class="flex flex-wrap lg:flex-row lg:space-x-8 lg:pl-12 lg:pr-12 justify-center">
            @foreach ([1, 2, 3] as $i)
            @if(!empty($menus[$i]['date']))
            <x-menu-card :date_menu="$menus[$i]['date']" :soup="$menus[$i]['soup']"
                :mainCourse="$menus[$i]['main_course']" :dessert="$menus[$i]['dessert']" />
            @endif
            @endforeach
        </div>

        @if(!empty($menus['menu_price']))
        <p class="text-xl font-thin text-center">
        {!! nl2br(e(($menus['menu_price']))) !!}</p>
        @endif
    </div>
    @else
    <div class="w-full lg:h-16"></div>
    @endif

    <div class="flex flex-col lg:grid lg:grid-rows-12 lg:grid-cols-12 ">
        <div class="lg:row-span-6 lg:col-span-7 pt-8 justify-center flex-col flex bg-primary/5 bg-kastanie ">
            <h3 class="text-3xl mb-4 lg:text-5xl text-primary font-accent text-center lg:mb-12">Was macht uns aus?</h3>
            <div class="text-secondary p-6 lg:pl-24 font-sans flex flex-col space-y-2">
                <p class="">
                    Tradition verpflichtet seit 1880 im Familienbesitz, seit 5 Generationen liegt uns das Wohl
                    unserer
                    Gäste am Herzen.
                </p>
                <p>
                    Wir erwarten Sie in gemütlicher Atmosphäre in unseren traditionellen und modernen Gasträumen
                    und
                    einem urigen Gastgarten inmitten herrlicher Kastanienbäume. 
                </p>
                <p>
                    Genießen Sie die persönliche Betreuung in unserem Familienbetrieb. Elisa Trauner (Tochter
                    des
                    Hauses
                    und Köchin) verwöhnt Sie mit bodenständiger Steyrer Hausmannskost und modernen Schmankerl.
                    Gekocht
                    wird ausschließlich mit Lebensmitteln aus der Region höchster Qualität: bei denen wir
                    wissen, wo
                    sie
                    herkommen.
                </p>
                <p>
                    Für Ihre Familienfeier oder Ihre Firmenveranstaltung stehen wir Ihnen gerne mit festlichem
                    Ambiente
                    und modernster Technik zur Verfügung.
                </p>
                <p>
                    Ihre Fam. Trauner und Erika Bauer
                </p>
            </div>
        </div>
        <div class="lg:row-span-9 lg:col-span-5">
            <div class="gallery  lg:flex-col">
                <div class="gallery-slide  lg:flex-col">
                    <img src="{{ asset('images/food/Spargelcordaun_Arbeit.jpg') }}" alt="Spargelcordaun" class="slider-image">
                    <img src="{{ asset('images/Gastgarten.jpg') }}" alt="Bild 2" class="slider-image">
                    <img src="{{ asset('images/Tisch.jpg') }}" alt="Bild 3" class="slider-image">
                    <img src="{{ asset('images/food/Topfenstrudel_Arbeit4.jpg') }}" alt="Topfenstrudel" class="slider-image">
                    <img src="{{ asset('images/food/Spargelcordaun_Arbeit.jpg') }}" alt="Spargelcordaun" class="slider-image">
                    <img src="{{ asset('images/Gastgarten.jpg') }}" alt="Bild 2" class="slider-image">
                    <img src="{{ asset('images/Tisch.jpg') }}" alt="Bild 3" class="slider-image">
                    <img src="{{ asset('images/food/Topfenstrudel_Arbeit4.jpg') }}" alt="Topfenstrudel" class="slider-image">

                    <!-- Weitere Bilder hier -->
                </div>
                <div class="gallery-slide  lg:flex-col invisible lg:visible">
                    <img src="{{ asset('images/food/Spargelcordaun_Arbeit.jpg') }}" alt="Spargelcordaun" class="slider-image">
                    <img src="{{ asset('images/Gastgarten.jpg') }}" alt="Bild 2" class="slider-image">
                    <img src="{{ asset('images/Tisch.jpg') }}" alt="Bild 3" class="slider-image">
                    <img src="{{ asset('images/food/Topfenstrudel_Arbeit4.jpg') }}" alt="Topfenstrudel" class="slider-image">
                    <img src="{{ asset('images/food/Spargelcordaun_Arbeit.jpg') }}" alt="Spargelcordaun" class="slider-image">
                    <img src="{{ asset('images/Gastgarten.jpg') }}" alt="Bild 2" class="slider-image">
                    <img src="{{ asset('images/Tisch.jpg') }}" alt="Bild 3" class="slider-image">
                    <img src="{{ asset('images/food/Topfenstrudel_Arbeit4.jpg') }}" alt="Topfenstrudel" class="slider-image">
                    <!-- Weitere Bilder hier -->
                </div>
            </div>
        </div>
        <div class="lg:row-span-1 lg:col-span-7"></div>

        <div class="lg:row-span-5 bg-primary lg:col-span-7 flex items-center justify-center flex-col ">
            <div class="bg-primary p-12 pl-0">
                <h3 class="lg:text-5xl text-3xl  font-accent text-center mb-4 lg:mb-12">Öffnungszeiten</h3>
                <div class="p-4 lg:pl-24 font-sans flex flex-col space-y-2">
                    <p> Montag & Dienstag Ruhetag </br>
                        Mittwoch - Samstag 10.00 - 22.00 Uhr </br>
                        Sonntag: 10.00 bis 15.00 Uhr
                    </p>
                    <p>Küche von </br>
                        11.30 bis 13.30 Uhr (letzte Bestellung) </br>
                        17.30 Uhr bis 19.30 (letzte Bestellung) </br>
                        Bitte beachteen Sie auch unsere Öffnungszeiten, welche variabel sind, und nach unseren
                        Geschäftgang
                        richten

                    </p>
                </div>
            </div>
        </div>
        <div class="lg:row-span-1 lg:col-span-5"></div>
        <div class="lg:row-span-2 lg:col-span-5 flex flex-col justify-end">
            <div class="bg-primary p-12 pt-10 pb-0 mx-10 lg:mb-0 h-full mt-10 lg:mt-0">
                <p>Wir akzeptieren auch "Steyrer Gutscheine", sowie natürlich auch "Steyrer Wirtsleut Gutscheine" </p>
                <div class="flex justify-center content-end mt-4 mb-4 lg:mb-0">
                    <img src="{{ asset('images/Kastanienblatt_black.png') }}" alt="Kastanien"
                        class="w-8 h-auto kastanienimg">
                    <img src="{{ asset('images/Kastanienblatt_black.png') }}" alt="Kastanien"
                        class="w-8 h-auto kastanienimg">
                    <img src="{{ asset('images/Kastanienblatt_black.png') }}" alt="Kastanien"
                        class="w-8 h-auto kastanienimg">
                </div>
            </div>
        </div>
    </div>
</div>
