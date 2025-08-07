<div class="max-w-xl mx-auto mt-10 p-6 bg-white shadow rounded">
    <h1 class="text-xl font-bold mb-4">Newsletter-Abmeldung</h1>

    @if($statusMessage)
        <div class="p-4 bg-gray-100 text-gray-800 rounded">
            {{ $statusMessage }}
        </div>
    @else
        <div class="p-4 text-gray-600">Bitte warte einen Moment…</div>
    @endif
</div>

