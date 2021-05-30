@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-white bg-opacity-40 rounded-md shadow-md border-gray-300 focus:border-gray-300 focus:ring focus:ring-blue-700 focus:ring-opacity-50 transition duration-300']) !!}>
