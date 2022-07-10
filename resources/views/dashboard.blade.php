<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="pt-5 pb-5">
        <div class="container">
            @if(Auth::user()->userType == 0)
            <!-- server side -->
            @elseif(Auth::user()->userType == 1)
            <!-- client side -->
            @endif
        </div>
    </section>
</x-app-layout>