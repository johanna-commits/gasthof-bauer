<div class="flex flex-col mb-24">
    <div class="flex flex-col lg:flex-row lg:h-[80vh] lg:mb-24">
        <div class="lg:relative lg:flex-grow">
            <div class="relative h-full">
                <img src="{{ asset('images/Tisch.jpg') }}" alt="Tisch" class="object-cover w-full h-full lg:w-full"
                    loading="lazy" />
                <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="absolute inset-0 flex flex-col justify-center">
                    <h2
                        class="text-accent text-4xl md:text-7xl lg:text-9xl lg:self-start pl-4 md:pt-10 self-start lg:p-10 font-accent lg:pl-24 text-primary fade-in-delay">
                        Ambiente
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-col flex items-center  lg:grid lg:grid-cols-6 lg:space-y-24">

        <div class="lg:col-span-2 align-middle flex items-center lg:my-auto mt-8 mb-4">
            <div class="text-ambiente w-2/3 mx-auto flex flex-col justify-center items-center zoom-text">
                <h2 class="font-accent text-3xl lg:mt-8 mb-2">Gaststuben</h2>
                <div
                    class="flex w-full items-center mt-2 justify-center flex-row space-x-2 pb-2 pt-2 lg:pb-4 lg:pt-4 mx-auto">
                    <div class="h-0.5 bg-black w-full"></div>
                    <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
                    <div class="h-0.5 bg-black w-full"></div>
                </div>

                <p class="font-thin text-center">Unsere Gaststuben ist gemütlich und traditionell eingerichtet. Hier
                    können Sie
                    in
                    Ruhe speisen und sich wohlfühlen.
                </p>
            </div>
        </div>
        <div class="lg:col-span-4">
            <img src="{{ asset('images/Gaststube.png') }}" alt="Gaststube"
                class="object-cover mx-auto w-11/12 h-11/12 lg:w-full zoom-image z-1" loading="lazy" />
        </div>


        <div class="lg:col-span-2 align-middle flex items-center lg:my-auto mt-8 mb-4">
            <div class="text-ambiente w-2/3 mx-auto flex flex-col justify-center items-center zoom-text">
                <h2 class="font-accent text-3xl lg:mt-8">Saal</h2>
                <div
                    class="flex w-full items-center mt-2 justify-center flex-row space-x-2 pb-2 pt-2 lg:pb-4 lg:pt-4 mx-auto ">
                    <div class="h-0.5 bg-black w-full"></div>
                    <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien"
                        class="w-8 h-auto kastanienimg ">
                    <div class="h-0.5 bg-black w-full"></div>
                </div>
                <p class="font-thin text-center">Beamer <br>
                    Leinwand <br>
                    Tageslicht <br>
                    vollständig verdunkelbar <br>
                    variable Bestuhlung und Tischordnung
                </p>
            </div>
        </div>
        <div class="lg:col-span-4 col-start-1 lg:mt-8">
            <img src="{{ asset('images/Saal.png') }}" alt="Saal"
                class="object-cover mx-auto w-11/12 h-11/12 lg:w-full zoom-image z-1" loading="lazy" />
        </div>


        <div class="lg:col-span-2 align-middle flex items-center lg:my-auto mt-8 mb-4 ">
            <div class="text-ambiente w-2/3 mx-auto my-auto flex flex-col justify-center items-center align-middle zoom-text">
                <h2 class="font-accent text-3xl lg:mt-8">Gastgarten</h2>
                <div
                    class="flex w-full items-center mt-2 justify-center flex-row space-x-2 pb-2 pt-2 lg:pb-4 lg:pt-4 mx-auto">
                    <div class="h-0.5 bg-black w-full"></div>
                    <img src="{{ asset('images/Kastanienblatt.png') }}" alt="Kastanien" class="w-8 h-auto kastanienimg">
                    <div class="h-0.5 bg-black w-full"></div>
                </div>
                <p class="font-thin text-center">Unser uriger Gastgarten versteckt sich unter Kastanienbäumen und
                    lädt zum
                    Verweilen ein.
                </p>
            </div>
        </div>
        <div class="lg:col-span-4 lg:mt-8">
            <img src="{{ asset('images/Gastgarten.jpg') }}" alt="Gastgarten"
                class="object-cover mx-auto w-11/12 h-11/12 lg:w-full zoom-image z-1" loading="lazy" />
        </div>
    </div>
</div>


