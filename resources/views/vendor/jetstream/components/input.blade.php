@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#FAF3F3] border-[#F8981D] focus:border-[#F8981D] focus:ring focus:ring-[#F8981D] focus:ring-opacity-50 rounded-md shadow-sm caret-[#F8981D]']) !!}>
