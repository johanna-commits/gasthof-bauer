<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Menuform;
use App\Livewire\Menue;
use App\Livewire\Card;
use App\Livewire\Contact;
use App\Livewire\Direction;
use App\Livewire\Rooms;
use App\Livewire\Voucher;
use App\Livewire\Cardform;
use App\Livewire\Ambiente;
use App\Livewire\Login;
use App\Livewire\NewsComponent;
use App\Livewire\Overview;
use App\Livewire\Newsletter;
use App\Livewire\Impressum;
use App\Livewire\Data;
use App\Livewire\Menucards;
use App\Livewire\RoomsForm;

Route::get('/login', Login::class)->name('login');
Route::get('/', Home::class);
Route::get('/menü', Menue::class);
Route::get('/nächtigen', Rooms::class);
Route::get('/kontakt', Contact::class);
Route::get('/anfahrt', Direction::class);
Route::get('/gutscheine', Voucher::class);
Route::get('/ambiente', Ambiente::class);
Route::get('/impressum', Impressum::class);
Route::get('/datenschutz', Data::class);
Route::get('/speisekartenübersicht', Menucards::class);
Route::get('/speisekarte/{cardType}', Card::class);

Route::get('/testmail', function () {
    Mail::raw('🎉 Laravel-Mail über Hetzner funktioniert!', function ($message) {
        $message->to('trauner.jo@gmail.com')
            ->subject('Testmail von GH Bauer');
    });

    return 'Mail wurde gesendet!';
});

Route::middleware(['auth'])->group(function () {
    Route::get('/menüformular', Menuform::class);
    Route::get('/speisekarteformular', Cardform::class);
    Route::get('/newsformular', NewsComponent::class);
    Route::get('/overview' , Overview::class)->name('overview');
    Route::get('/newsletter', Newsletter::class)->name('newsletter');
    Route::get('/zimmerformular', RoomsForm::class)->name('zimmerformular');
    Route::get('/mailable', function () {
        $subject = 'Mittagsmenü vom 9. bis 11. Oktober 2024';
        $title = 'Mittagsmenü diese Woche';
        $content = 'Mittwoch, 09. Oktober 2024

        Tagessuppe

        Panierte Blunzn mit Kartoffeln und Krautsalat

        ***

        Donnerstag, 10. Oktober 2024

        Tagessuppe

        Leberkäse mit Spiegelei,

        Kartoffeln und gemischtem Salat

        Freitag, 11. Oktober  2024

        ***

        Tagessuppe

        Steirisches Krenfleisch mit Kartoffeln

        Menüpreis € 12,50

        Preis ohne Suppe € 11,50

        Wir sind wieder bei der

        SCHMANKERLWAHL

        der Oberösterreichischen Nachrichten
        mit unserer Gefüllten Brust dabei!

        Wäre nett, wenn Ihr uns unterstützt unter
        nachrichten.at/schmankerlwahl

        Man kann täglich bis 23. Oktober voten.
        Danke für Eure Unterstützung!';

        return new App\Mail\NewsletterMail($subject, $title, $content);
    });

});
