<div class="flex flex-col">
    <div class="lg:flex flex-col lg:flex-row h-screen lg:mb-12 hidden lg:h-[80vh]">
        <div class="lg:relative lg:flex-grow">
            <div class="relative h-full">
                <img src="{{ asset('images/Schild.png') }}" alt="Tisch" class="object-cover w-full h-full lg:w-full"
                    loading="lazy" />
                <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="absolute inset-0 flex flex-col justify-center">
                    <h1
                        class="text-accent text-3xl md:text-7xl lg:text-9xl lg:self-start p:2 md:pt-10 self-start lg:p-10 font-accent lg:pl-24 text-primary fade-in-delay">
                        Anfahrt
                    </h1>
                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row lg:w-2/3 lg:mx-auto p-4">
        <div class="w-full">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        class="gmap_iframe"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Gasthof Bauer, Josefgasse 7&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>

            <style>
                .mapouter {
                    position: relative;
                    width: 100%;
                    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
                    height: 0;
                    overflow: hidden;
                }

                .gmap_canvas {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }

                .gmap_iframe {
                    width: 100%;
                    height: 100%;
                }
            </style>
               </div>
    </div>
    <div class="lg:w-2/3 lg:mx-auto p-4">
        <h2 class="text-2xl lg:text-5xl font-bold font-accent lg:mt-8 mb-4 ">Anreise</h2>
        <h3 class="text-xl lg:text-2xl font-semibold mb-2">Von Enns</h3>
        <p class="mb-6">Sie folgen der Ennser Straße (B115) nach Steyr und biegen halb rechts in die Franklin-d.-Roosevelt-Straße (B122) ein und fahren weiter geradeaus auf die Voralpen-Bundesstraße (B122), weiter geradeaus in die Seifentruhe (B122) und biegen links in die Sierninger Straße ein. Verlassen Sie die Sierninger Straße und fahren weiter geradeaus auf die Schwimmschulstraße und biegen dann rechts in die Josefgasse ein.</p>
        <h3 class="text-xl lg:text-2xl font-semibold mb-2">Von Bad Hall</h3>
        <p class="mb-6">Sie folgen dem Straßenverlauf der Voralpen-Bundesstraße (B122), passieren die Ortseinfahrt von Steyr, fahren weiter geradeaus auf die Sierninger Straße (B122) und bleiben auf der Sierninger Straße und fahren weiter geradeaus auf die Schwimmschulstraße. Sie verlassen Sie die Schwimmschulstraße und biegen rechts in die Josefgasse ein und folgen dem Straßenverlauf bis zum Gasthof.</p>
        <h3 class="text-xl lg:text-2xl font-semibold mb-2">Vom Zentrum</h3>
        <p class="mb-6">Sie verlassen den Stadtplatz, fahren weiter geradeaus auf die Obere Kaigasse und biegen rechts in den Ennskai ein. Sie fahren weiter geradeaus auf die Bindergasse und weiter auf die Zieglergasse. Sie biegen rechts in die Leopold-Werndl-Straße ein und biegen links in die Tomitzstraße ein und fahren weiter geradeaus auf die Schwimmschulstraße und biegen links in die Straße Josefgasse ein.
    </div>
</div>
