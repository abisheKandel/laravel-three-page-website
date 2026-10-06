<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Home Route (PT1 & PT2)
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello'
    ]);
});

// Jobs Listing Route (PT2)
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Manager',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Engineer',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title' => 'Assistant',
                'salary' => '$30,000'
            ]
        ]
    ]);
});

// Single Job Dynamic Route (PT2)
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Manager',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Engineer',
            'salary' => '$40,000'
        ],
        [
            'id' => 3,
            'title' => 'Assistant',
            'salary' => '$30,000'
        ]
    ];

    $job = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', ['job' => $job]);
});

// Contact Route (PT1 & PT2)
Route::get('/contact', function () {
    return view('contact');
});

// About Route (PT1 compatibility)
Route::get('/about', function () {
    return view('about');
});

// Mini Challenge: Array Functions & Vowel Filter (PT2)
Route::get('/fruits', function () {
    $fruits = ["apple", "banana", "orange", "grape"];
    array_push($fruits, "pear");
    array_shift($fruits); // removes "apple"
    sort($fruits);

    $vowels = ["a", "e", "i", "o", "u"];
    $vowelFruits = [];
    foreach ($fruits as $fruit) {
        $first_letter = strtolower(substr($fruit, 0, 1));
        if (in_array($first_letter, $vowels)) {
            $vowelFruits[] = $fruit;
        }
    }

    return view('fruits', [
        'allFruits' => $fruits,
        'vowelFruits' => $vowelFruits
    ]);
});
