<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <x-guest.head/>
    </head>
    <body>
        <x-guest.navbar/>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <x-guest.footer/>

    </body>
</html>
