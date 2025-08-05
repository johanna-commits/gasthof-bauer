<div class="flex flex-col bg-kastanie-transparent">
    <div class="lg:flex flex-col lg:flex-row h-screen lg:mb-12 hidden lg:h-[80vh]">
        <div class="lg:relative lg:flex-grow">
            <div class="relative h-full">
                <!-- Bild -->
                <img src="{{ asset('images/Steyr.jpg') }}" alt="Tisch" class="object-cover w-full h-full lg:w-full"
                    loading="lazy" />

                <!-- Schwarzes Overlay mit 70% Transparenz -->
                <div class="absolute inset-0 bg-black opacity-60"></div>

                <!-- Weißer Text über dem Bild -->
                <div class="absolute inset-0 flex flex-col justify-center">
                    <h2
                        class="text-accent text-3xl md:text-7xl lg:text-9xl lg:self-start p:2 md:pt-10 self-start lg:p-10 font-accent lg:pl-24 text-primary fade-in-delay">
                        Kontakt
                    </h2>
                </div>

            </div>
        </div>
    </div>
    <div class="lg:w-2/3 lg:mx-auto w-full">
        <div class="flex flex-col lg:flex-row mt-12 items-center">
            <div class="lg:w-1/2 font-thin">
                <h2 class="text-3xl lg:text-5xl font-semibold font-accent mb-4">Kontaktier uns!</h2>
                <p class="font-semibold text-lg">Gasthof Bauer</p>
                <p class="font-thin">Familie Trauner</p>
                <p class="font-thin">Josefgasse 7</p>
                <p class="font-thin mb-4">4400 Steyr</p>
                <div class="flex justify-between w-full">
                    <p class="font-bold">E-Mail: </p>
                    <a class="hover:underline" href="mailto:r.trauner@bauer-gasthof.at">r.trauner@bauer-gasthof.at</a>
                </div>
                <div class="flex justify-between w-full">
                    <p class="font-bold">Telefonnummer: </p>
                    <a class="hover:underline" href="tel:+437252/54441">+43 7252/54441</a>
                </div>
                <div class="flex justify-between w-full">
                    <p class="font-bold">Handynummer: </p>
                    <a class="hover:underline" href="tel:+436509120977">+43 6509120977</a>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="flex items-center justify-end">
                    <img src="{{ asset('images/Gastgarten.jpg') }}" alt="Gastgarten" class="w-56 mt-4 mb-4 h-auto" />
                </div>
            </div>
        </div>
        <div class="bg-primary">
            <form wire:submit.prevent="contactForm" class="mt-12 mx-auto p-8">
                <h2 class="text-3xl font-semibold font-accent mb-4 ">Kontaktformular</h2>
                <div class="flex flex-col lg:flex-row lg:space-x-4 items-center w-full">
                    <div class="flex flex-col w-full">
                        <x-form-label for="full_name">Name</x-form-label>
                        <x-form-contact-input class=" mb-2" id="full_name" type="text"
                            wire:model="full_name" required />
                        <x-form-error name="full_name" />
                    </div>
                    <div class="flex flex-col w-full">
                        <x-form-label for="contact_mail">E-Mail</x-form-label>
                        <x-form-contact-input class=" mb-2" id="contact_mail" type="email"
                            wire:model="contact_mail" required />
                        <x-form-error name="contact_mail" />
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:space-x-4 items-center w-full">
                    <div class="flex flex-col w-full">
                        <x-form-label for="number">Telefonnummer</x-form-label>
                        <x-form-contact-input class=" mb-2" id="number" type="text"
                            wire:model="number" required />
                        <x-form-error name="number" />
                    </div>
                    <div class="flex flex-col w-full">
                        <x-form-label for="subject">Betreff</x-form-label>
                        <x-form-contact-input class="mb-2" id="subject" type="text"
                            wire:model="subject" required />
                        <x-form-error name="subject" />
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <x-form-label for="message">Nachricht</x-form-label>
                    <textarea
                        class="border border-accent mb-2 bg-white/50 shadow focus:ring-0 focus:border-accent transition-all duration-300 focus:bg-white/80"
                        id="message" wire:model="message" required></textarea>
                    <x-form-error name="message" />
                </div>
                <button id="contactForm" class="bg-white/60 border-accent p-2 px-4 border hover:bg-white/80 cursor-pointer transition-transform duration-300 hover:scale-105" type="submit">
                    Absenden</button>
            </form>
        </div>
        @if(session()->has('contact-form-message'))
            <div class="bg-primary/40 p-2 mt-4 ">
                <p>{{ session('contact-form-message') }}</p>
            </div>
        @endif
    </div>
</div>
