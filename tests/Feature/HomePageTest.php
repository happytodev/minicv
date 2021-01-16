<?php

/** Test if Mini CV Title is present */
it('has home page with mini cv title', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Mini CV');
})->group('homepage');

it('has home page with documentation section', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Documentation');
})->group('homepage');
