<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Symfony\Contracts\Service\Attribute\Required;

Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function() {
    return view('jobs.create');
});

Route::get('/jobs/{id}/edit', function($id){
    $jobs = Job::all();
    $job = $jobs->find($id);
    return view('jobs.update', ['job' => $job]);
});

Route::patch('/jobs/{id}', function($id) {
    $jobs = Job::all();
    $job = $jobs->find($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    
    // $job['title'] = request('title');
    // $job['salary'] = request('salary');
    
    $job->save();
    return redirect('/jobs/'.$id);
});

Route::delete('/jobs/{id}', function($id) {
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});

Route::get('/jobs/{id}', function($id){
    $jobs = Job::all();
    $job = $jobs->find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function() {
    $new = new Job();

    $data = request()->validate(['title' => 'required', 'salary' => 'required']);

    $new->title = $data['title'];
    $new->salary = $data['salary'];

    $new->save();

    return redirect('/jobs');
});

