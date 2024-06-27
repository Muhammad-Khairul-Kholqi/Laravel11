<a 
    {{ $attributes }} 
    class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'text-gray-300 text-sm hover:bg-gray-700 px-3 py-2 rounded-md' }}" 
    aria-current="{{  $active ? 'page' : false }}"
>   
    {{ $slot }}
</a>
