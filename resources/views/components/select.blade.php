<div>
    <select  id="select" name="select" form="select" {!! $attributes->merge(['placeholder' => '', 'class' => 'bg-white px-4 p-3 text-gray-400  border-2 border-gray-400 text-sm md:text-lg font-medium w-full']) !!}>
        {{ $slot }}
    </select>
</div>
