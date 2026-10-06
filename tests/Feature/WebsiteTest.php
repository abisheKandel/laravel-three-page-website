<?php

test('home page returns successful response', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('Hello. from Home Page');
});

test('jobs page lists all jobs', function () {
    $response = $this->get('/jobs');
    $response->assertStatus(200);
    $response->assertSee('Manager');
    $response->assertSee('Engineer');
    $response->assertSee('Assistant');
});

test('individual job page loads details', function () {
    $response = $this->get('/jobs/1');
    $response->assertStatus(200);
    $response->assertSee('Manager');
    $response->assertSee('$50,000');
});

test('contact page loads', function () {
    $response = $this->get('/contact');
    $response->assertStatus(200);
    $response->assertSee('Hello from Contact Page');
});

test('fruits challenge page loads', function () {
    $response = $this->get('/fruits');
    $response->assertStatus(200);
    $response->assertSee('Mini Challenge');
});
