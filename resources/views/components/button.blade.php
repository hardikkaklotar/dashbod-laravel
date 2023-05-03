<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-sm md:text-lg font-medium inline-flex items-center px-5 md:px-7 py-2 md:py-4 bg-primary border border-transparent  text-lg text-white hover:bg-secondary focus:bg-secondary active:bg-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
