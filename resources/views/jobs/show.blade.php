<x-layout>
    <x-slot:content>
        <div class="card m-4">
            <div class="card-header">
                {{ $job['title'] }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $job['salary'] }}</h5>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="/jobs" class="btn btn-secondary m-2">Back</a>
            </div>
        </div>
    </x-slot:content>
</x-layout>