<div class="mt-1 w-full flex bg-slate-50/30">
    <select {{ $attributes->merge([
        'class' => 'block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6'
    ]) }}>
        <option value="" class="text-gray-400">Bitte wählen...</option>
        <option value="option1" class="text-gray-800">Option 1</option>
        <option value="option2" class="text-gray-800">Option 2</option>
        <option value="option3" class="text-gray-800">Option 3</option>
    </select>
</div>
