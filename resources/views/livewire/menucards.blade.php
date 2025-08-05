<div class="flex flex-col mb-24">
    <div class="hidden lg:flex flex-col lg:flex-row lg:h-[80vh] lg:mb-24">
        <div class="lg:relative lg:flex-grow">
            <div class="relative h-full">
                <!-- Bild -->
                <img src="{{ asset('images/Schweinsfilet.png') }}" alt="Schweinsfilet" class="object-cover w-full h-full lg:w-full"
                     loading="lazy" />

                <!-- Schwarzes Overlay mit 70% Transparenz -->
                <div class="absolute inset-0 bg-black opacity-50"></div>

                <!-- Weißer Text über dem Bild -->
                <div class="absolute inset-0 flex flex-col justify-center">
                    <h1
                        class="text-accent text-3xl md:text-7xl lg:text-9xl lg:self-start pl-4 md:pt-10 self-start lg:p-10 font-accent lg:pl-24 text-primary fade-in-delay">
                        Speisen
                    </h1>
                </div>

            </div>
        </div>
    </div>
    <div class="flex flex-col items-start mb-4 justify-center space-y-4 max-w-3xl mx-auto p-8">
        <h2 class="text-3xl lg:text-5xl text:lg font-accent mb-8">Zu unseren Speisen</h2>
        <div class="flex flex-col lg:flex-col justify-between w-full space-y-4">
    <a href="/speisekarte/normal" class="w-max border border-primary  p-1 pl-4 font-thin pr-4 transition-transform duration-300 hover:scale-105 hover:bg-primary/30">
        Speisekarte
    </a>
    <a href="/speisekarte/abend" class="w-max border border-primary p-1 pl-4 font-thin pr-4 transition-transform duration-300 hover:scale-105 hover:bg-primary/30">
        Abendkarte
    </a>
    <a href="/speisekarte/jause" class="w-max border border-primary p-1 pl-4 font-thin pr-4 transition-transform duration-300 hover:scale-105 hover:bg-primary/30">
        Jausenkarte
    </a>
        </div>

    <section class="w-full px-4 py-8 text-gray-800 leading-relaxed text-base bg-primary/20">
        <h2 class="text-2xl font-bold mb-4 text-darkLila">Liebe Gäste und Freunde!</h2>
        <p class="mb-6">
            Es freut uns sehr, dass wir mit dem
            <strong>AMA Genussregion Gastronomie Zertifikat</strong> ausgezeichnet wurden.
        </p>
        <p class="mb-6">
            Wir kochen frisch und verwenden regionale Lebensmittel aus der Umgebung:
        </p>

        <ul class="space-y-2">
            <li><strong>Fleischprodukte:</strong> Fa. Pollhammer, St. Ulrich</li>
            <li><strong>Fische:</strong> Fa. Scheibmeier, St. Marien</li>
            <li><strong>Eier:</strong> Sonnenhof Hutsteiner, Steyr</li>
            <li><strong>Kartoffeln:</strong> Müller, Ernsthofen</li>
            <li><strong>Käse & Gemüse:</strong> Fa. Almauer (nur AMA Produkte)</li>
            <li><strong>Most & Fruchtsäfte:</strong> Rogl, Schiedlberg</li>
            <li><strong>Fruchtsäfte:</strong> Voglsam GmbH, Hofkirchen</li>
            <li><strong>Brot & Gebäck:</strong> Bäckerei Fröhlich, Steyr</li>
            <li><strong>Wild:</strong> Jagdgesellschaft Schiedlberg, Fa. Grims, Steyr</li>
        </ul>
        <a href="https://www.genussregionen.at/" class="cursor-pointer">
        <img src="{{ asset('images/logos/ama_genuss_logo.svg') }}" class="mt-6 w-24 h-auto" alt="Ama Genussregion Logo"
             loading="lazy" />
        </a>
    </section>
    </div>
    <section id="food-gallery" class="mt-12">
            <h3 class="text-3xl lg:text-5xl text:lg font-accent mb-8 text-center">zum Schmökern</h3>
        <div class="pswp-gallery grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-8 w-4/5 mx-auto mt-4 mb-16"
             id="roomgallery">
            <div data-pswp-width="1280" data-pswp-height="857"
               class="block overflow-hidden shadow-lg transition-transform transform hover:scale-120">
                <img src="{{ asset('images/Jause.png') }}" alt="Jause" class="w-full h-64 object-cover" />
            </div>
            <div data-pswp-width="1280" data-pswp-height="857"
               class="block overflow-hidden shadow-lg transition-transform transform hover:scale-120">
                <img src="{{ asset('images/Käsespetzle.png') }}" alt="Käsespetzle"
                     class="w-full h-64 object-cover" />
            </div>
            <div  data-pswp-width="790" data-pswp-height="621"
               class="block overflow-hidden shadow-lg transition-transform transform hover:scale-120">
                <img src="{{ asset('images/Schnitzerl.png') }}" alt="Schnitzerl" class="w-full h-64 object-cover" />
            </div>
            <div  data-pswp-width="1024" data-pswp-height="681"
                  class="block overflow-hidden shadow-lg transition-transform transform hover:scale-120">
                <img src="{{ asset('images/Scholle.png') }}" alt="Scholle" class="w-full h-64 object-cover" />
            </div>
            <div  data-pswp-width="1024" data-pswp-height="681"
               class="block overflow-hidden shadow-lg transition-transform transform hover:scale-120">
                <img src="{{ asset('images/food/Spargelcordaun_fertig.jpg') }}" alt="Spargelcordaun_fertig" class="w-full h-64 object-cover" />
            </div>
            <div data-pswp-width="1024" data-pswp-height="681"
               class="block overflow-hidden shadow-lg transition-transform transform hover:scale-120">
                <img src="{{ asset('images/food/Topfenstrudel_fertig.jpg') }}" alt="Topfenstrudel" class="w-full h-64 object-cover" />
            </div>
        </div>
    </section>
</div>
