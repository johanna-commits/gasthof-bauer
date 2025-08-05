<div class="sticky flex justify-center bg-primary top-0 max-w-xs font-accent text-black pr-4 pl-0">
    <ul class="list-none pt-8 text-lg content-center ">
        @foreach($sections as $section)
            <li class="ml-4 mb-2 pl-1 text-accent @if($currentSection == $section['id']) font-bold tex pl-1 @endif">
                <a href="#{{ $section['id'] }}"
                wire:click="updateCurrentSection('{{ $section['id'] }}')"
                class="block hover:underline-offset-8 duration-300 hover:text-secondary/30 text-black @if($currentSection == $section['id']) underline underline-offset-8  @else  @endif">
                    {{ $section['text'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.addEventListener('scroll', function () {
            let currentSection = '';
            document.querySelectorAll('section').forEach((section) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= 150 && rect.bottom >= 150) {
                    currentSection = section.getAttribute('id');
                }
            });
            if (currentSection) {
                Livewire.dispatch('updateCurrentSection', {'currentSection':currentSection});
            }
        });
    });
</script>
