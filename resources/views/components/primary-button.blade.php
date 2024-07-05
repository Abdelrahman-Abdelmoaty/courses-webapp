<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 bg-gray-800 border
    border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700
    focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2
    border-gray-700
    transition ease-in-out duration-150 grid place-items-center']) }}>
    {{ $slot }}
</button>