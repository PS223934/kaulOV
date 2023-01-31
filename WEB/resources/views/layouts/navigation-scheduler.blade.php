<div class="mainNav shrink-0 flex items-center">
    <a href="{{ route('dashboard') }}">
        <div class="backbtn"><x-application-logo class="block w-auto fill-current text-gray-800" /></div>
    </a>
    <div class="navContainer">
        <div onclick="rd('stops')" class="navButton @if (request()->is('scheduler/stops')) navButtonSelected @endif">
            <span class="material-symbols-outlined">edit_location</span>
        </div>
        <div onclick="rd('lines')" class="navButton @if (request()->is('scheduler/lines')) navButtonSelected @endif">
            <span class="material-symbols-outlined">route</span>
        </div>
        <div onclick="rd('schedules')" class="navButton @if (request()->is('scheduler/schedules')) navButtonSelected @endif">
            <span class="material-symbols-outlined">departure_board</span>
        </div>
    </div>
</div>
