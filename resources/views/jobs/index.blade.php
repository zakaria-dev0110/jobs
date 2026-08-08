<x-layout>
    <x-slot:content>
        <div class="card">
            <div class="card-header">
                Jobs
            </div>
        @foreach($jobs as $job)
            <div class="card-body">
                <h5 class="card-title">{{ $job['title'] }}</h5>
                <p class="card-text">{{ $job['salary'] }}</p>
            </div>
            @endforeach
        </div>
    </x-slot:content>
</x-layout>