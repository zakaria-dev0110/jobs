<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Symfony\Contracts\Service\Attribute\Required;

Route::get('/', function () {
    $jobs = Job::all();
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function() {
    return view('jobs.create');
});

Route::post('/jobs', function() {
    $new = new Job();

    $data = request()->validate(['title' => 'required', 'salary' => 'required']);

    $new->title = $data['title'];
    $new->salary = $data['salary'];

    $new->save();

    return redirect('/');
});
