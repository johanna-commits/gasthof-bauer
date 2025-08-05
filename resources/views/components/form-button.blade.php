<button {{ $attributes->merge(['class' => ' border border-primary w-auto p-1 pl-4 font-thin pr-4 transition-transform cursor-pointer duration-300 hover:scale-105 hover:bg-primary/30', 'type' => 'submit']) }}>
    {{ $slot }}
</button>
