<x-layout>
    <x-slot:content>
        <form method='POST' action='/jobs/{{ $job['id'] }}'>
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value='{{ $job['title'] }}'>
            </div>
            <div class="mb-3">
                <label class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" value='{{ $job['salary'] }}'>
            </div>
            <div class='d-flex justify-content-center'>
                <button type='submit' class='btn btn-success m-2'>Update</button>
                <a href="/jobs" class='btn btn-secondary m-2'>Cancel</a>
            </div>
        </form>
    </x-slot:content>
</x-layout>