
<div {{ $attributes->merge(['type' => 'submit', 'class' => 'p-5 xl:py-10 xl:px-7 shadow bg-white flex items-center justify-between gap-5']) }}>
    <div class="flex items-center justify-between gap-5 2xl:gap-5">
        {{ $slot }}
        <div class="block">
            <h6 {{ $attributes->merge(['class' => 'text-sm sm:text-lg 2xl:text-xl w-28 sm:w-44 truncate text-zinc-400 mb-1.5 2xl:mb-3 font-medium']) }}> {{ $smolltitle }}</h6>
            <h3 {{ $attributes->merge(['class' => 'text-lg sm:text-xl 2xl:text-2xl text-black font-medium']) }}>{{ $title }}</h3>
        </div>
    </div>
    <a href="#!" >
        {{ $icon }}
    </a>
</div>
