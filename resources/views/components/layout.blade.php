<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JOBS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <ul class="nav nav-pills p-4">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('jobs/create') ? 'active' : '' }}" href="/jobs/create">Create</a>
        </li>
    </ul>
    <div class="d-flex justify-content-center align-items-center min-vh-10">
        {{ $content }}
    </div>
</html>