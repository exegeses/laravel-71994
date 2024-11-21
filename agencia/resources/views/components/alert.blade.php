
    <div class="max-w-2xl mx-auto m-12 p-3 mb-4
                        border border-{{ session('css') }}-500 bg-{{ session('css') }}-950
                        text-{{ session('css') }}-500 rounded">
        <svg class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.6-8.5h0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
        </svg>
        {{ session('mensaje') }}
    </div>
