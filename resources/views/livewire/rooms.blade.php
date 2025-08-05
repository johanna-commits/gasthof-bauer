<div>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative h-56 overflow-hidden  md:h-96 lg:h-[600px] ">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/rooms/Gaestezimmer1.jpg') }}"
                    class="absolute block size-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Fremdenzimmer">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/rooms/Gaestehaus.jpg') }}"
                    class="absolute block size-full object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Fremdenzimmer">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/rooms/Gaestezimmer2.jpg') }}"
                    class="absolute block size-full object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Fremdenzimmer">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/rooms/Bad.jpg') }}"
                    class="absolute block size-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Fremdenzimmer">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/rooms/Gaestezimmer3.jpg') }}"
                    class="absolute block size-full object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Fremdenzimmer">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <div class="absolute z-40 inset-0 bg-black h-56 md:h-96 opacity-40 lg:h-[600px] "></div>
        <div class="absolute inset-0 z-50 flex flex-col justify-center">
            <h1
                class="text-background text-3xl md:text-7xl lg:text-9xl lg:self-start p:2 md:pt-14 self-center lg:p-10 font-accent lg:pl-24 text-primary fade-in-delay">
                Nächtigen
            </h1>
            <h2
                class="text-background text-2xl md:text-4xl lg:text-4xl lg:self-start p:2 md:pt-8 self-center lg:p-10 font-accent lg:pl-24 text-white fade-in-delay">
                in einer gemütlichen Ecke Steyrs
            </h2>
        </div>
    </div>
    <div class="grid grid-cols-6">
        <div class="col-span-0 hidden lg:block lg:col-span-1 bg-primary">
            <livewire:detail-navigation />
        </div>
        <div class="col-span-6 lg:col-span-5">

            <div class="flex flex-col items-center content-center justify-center">
                <section id="rooms" class="mx-auto content-center flex flex-col items-center">
                    <h2 class="text-2xl mt-8 md:text-4xl lg:text-6xl lg:pt-12 font-accent lg:mb-12">Zu den Zimmern</h2>
                    <p class="lg:leading-10 p-8 text-center md:w-2/3"> In den 11 Doppelzimmern und 3 Einbettzimmern erwartet
                        Sie eine wohnliche, gemütliche Atmosphäre. Alle Zimmer sind mit Dusche, WC, gratis WLAN und
                        Fernseher mit SAT-Receiver ausgestattet. Jeden Morgen wird ein echtes Wiener Frühstück mit
                        Schinken. Wurst, Käse, Marmelade, Semmerl, Kaffee, Tee oder Kakao aufgetischt.Die gepflegten
                        Zimmer mitten in Steyr bestechen durch Ihre besonders ruhige Lage und die Nähe zum Steyrer
                        Stadtzentrum, zur Steyrer Museumsbahn und zur Fachhochschule. Für Ihren PKW steht ein
                        eigener Parkplatz (in der Karolinengasse) bereit. Versperrbare Garage für Ihre Fahrräder. Keine
                        Tiere erlaubt.
                    </p>
                </section>
                <div class="flex w-2/3 items-center lg:mt-4 justify-center flex-row space-x-2 lg:pb-12 lg:pt-12">
                    <div class="h-0.5 bg-black w-full"></div>
                    <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
                    <div class="h-0.5 bg-black w-full"></div>
                </div>
                <section id="prices" class="flex flex-col w-full items-center justify-center">
                    <h3 class="text-2xl pt-4 font-bold pb-4 lg:pb-8">Preise</h3>
                    <table class="table-auto mb-4 lg:w-2/3 border-collapse justify-center">
                        <thead class="bg-primary-200">
                            <tr>
                                <th class="border-b border-primary px-4 py-2 text-sm md:text-lg font-semibold">
                                    Zimmerkategorie</th>
                                <th class="border-b border-primary  px-4 py-2 text-sm md:text-lg font-semibold">
                                    Zimmerpreise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border-r bg-primary/20 text-center border-primary  px-8 py-4">Einbettzimmer
                                    normal</td>
                                <td class="text-center bg-primary/20 px-4 py-2">ab € {{$room_prices->single_room_regular_price ?? '51,--'}}</td>
                            </tr>
                            <tr class="hover:bg-gray-100 text-center justify-center">
                                <td class="border-r border-primary px-8 py-4">Zweibettzimmer normal</td>
                                <td class="text-center px-4 py-2">ab € {{$room_prices->double_room_regular_price ?? '43,--'}}</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border-r text-center bg-primary/20 border-primary  px-8 py-4">Einbettzimmer
                                    Advent</td>
                                <td class="text-center bg-primary/20 px-4 py-2">ab € {{$room_prices->single_room_christmas_price ?? '55,--'}}</td>
                            </tr>
                            <tr class="hover:bg-gray-100 text-center justify-center">
                                <td class="border-r border-primary px-8 py-4">Zweibettzimmer Advent</td>
                                <td class="text-center px-4 py-2">ab € {{$room_prices->double_room_christmas_price ?? '44,--'}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="lg:w-2/3">
                    <p class="lg:pt-12 px-4 text-center pb-2 lg:leading-10 ">
                        Zustellbett für Kinder bis 12 Jahren (ohne Frühstück) € 15,-- <br>
                        Preise verstehen sich pro Person/pro Nacht.
                    </p>
                    <p class="lg:pt-12 px-4 pb-2  text-center lg:leading-10 ">
                        Zuschlag für eine Nacht pro Person € 2,-- </br>
                        Anreise von 15.00 bis 20.00 Uhr<br>
                        Abreise 10.30 Uhr <br>
                    </p>
                    <p class="lg:pt-12 px-4 text-center lg:leading-10">
                        zuzüglich € 2,40 Tourismusabgabe pro Person/pro Nacht
                    </p>
                    </div>
                </section>
                <div class="flex w-2/3 items-center mt-4 justify-center flex-row space-x-2 lg:pb-8 lg:pt-8 mx-auto">
                    <div class="h-0.5 bg-black w-full"></div>
                    <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
                    <div class="h-0.5 bg-black w-full"></div>
                </div>
                <section id="information" class="flex flex-col w-full items-center justify-center">
                    <p class="lg:pt-12 pt-4 px-4 lg:leading-10 sm:w-2/3 text-center">Unsere Zimmergäste erhalten bereits ab 1 Nächtigung die
                        kostenlose Gästekarte 2024. </br>
                        Mit der Gästekarten können Sie zahlreiche Angebote und Ausflugsziele in der Region zu
                        vergünstigen Preisen nutzen.
                    </p>
                </section>
            </div>

            <div class="flex w-2/3 items-center mt-4 justify-center flex-row space-x-2 lg:pb-8 lg:pt-8 mx-auto">
                <div class="h-0.5 bg-black w-full"></div>
                <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
                <div class="h-0.5 bg-black w-full"></div>
            </div>
            <section id="gallery">
                <h3 class="text-2xl font-bold lg:pb-2 mx-auto text-center mt-4">Galerie</h3>
                <div class="pswp-gallery grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-8 w-4/5 mx-auto mt-4 mb-16"
                    id="roomgallery">
                    <a href="{{ asset('images/rooms/Gaestezimmer1.jpg') }}" data-pswp-width="1024" data-pswp-height="681"
                       target="_blank"
                       class="block overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        <img src="{{ asset('images//rooms/Gaestezimmer1.jpg') }}" alt="Fremdenzimmer" class="w-full h-64 object-cover" />
                    </a>
                    <a href="{{ asset('images/Zimmerküche.jpg') }}" data-pswp-width="1280" data-pswp-height="857"
                        target="_blank"
                        class="block overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        <img src="{{ asset('images/Zimmerküche.jpg') }}" alt="Küche im Fremdenzimmer"
                            class="w-full h-64 object-cover" />
                    </a>
                    <a href="{{ asset('images/rooms/Gaestezimmer2.jpg') }}" data-pswp-width="790" data-pswp-height="621"
                        target="_blank"
                        class="block overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        <img src="{{ asset('images/rooms/Gaestezimmer2.jpg') }}" alt="Fremdenzimmer" class="w-full h-64 object-cover" />
                    </a>
                    <a href="{{ asset('images/Zimmer4.jpg') }}" data-pswp-width="1024" data-pswp-height="681"
                        target="_blank"
                        class="block overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        <img src="{{ asset('images/Zimmer4.jpg') }}" alt="Fremdenzimmer" class="w-full h-64 object-cover" />
                    </a>
                    <a href="{{ asset('images/rooms/Waschbecken.jpg') }}" data-pswp-width="1024" data-pswp-height="681"
                        target="_blank"
                        class="block overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        <img src="{{ asset('images/rooms/Waschbecken.jpg') }}" alt="Fremdenzimmer" class="w-full h-64 object-cover" />
                    </a>
                    <a href="{{ asset('images/rooms/Bad.jpg') }}" data-pswp-width="1280" data-pswp-height="857"
                       target="_blank"
                       class="block overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        <img src="{{ asset('images/rooms/Bad.jpg') }}" alt="Fremdenzimmer" class="w-full h-64 object-cover" />
                    </a>
                </div>
            </section>
        </div>

    </div>


</div>
