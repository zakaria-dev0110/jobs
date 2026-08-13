<x-layout>
    <x-slot:content>
        <form id='delete' method='POST' action='/jobs/{{ $job['id'] }}' hidden>
            @csrf
            @method('DELETE')
        </form>
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
            <div class="d-flex align-items-center mt-4">
                <div class='flex-grow-1'></div>
                <div class='d-flex gap-2 justify-content-center'>
                    <button type='submit' class='btn btn-success m-2'>Update</button>
                    <a href="/jobs" class='btn btn-secondary m-2'>Cancel</a>
                </div>
                <div class='flex-grow-1 d-flex justify-content-end'>
                    <button form='delete' type='submit' class='btn btn-danger m-2'>DELETE</button>
                </div>
            </div>
        </form>
    </x-slot:content>
</x-layout>