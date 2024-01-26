@if (session()->has('message'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed bg-blue-500 text-white p-4 rounded-xl bottom-3 right-3 text-sm"
    >
        <p>{{ session('message') }}</p>
    </div>
@endif