<x-layout>
    <x-slot:content>
        <form method='POST' action='/jobs'>
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="e.g. Software Engineer">
            </div>
            <div class="mb-3">
                <label class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" placeholder="50,000">
            </div>
            <div class='d-flex justify-content-center'>
                <button type='submit' class='btn btn-success m-2'>Submit</button>
                <button type='reset' class='btn btn-secondary m-2'>Reset</button>
            </div>
        </form>
    </x-slot:content>
</x-layout>