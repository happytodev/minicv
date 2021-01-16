<?php

it('has dashboardpage page', function () {
    $response = $this->get('/dashboard');

    $response->assertStatus(200);
})->group('dashboard');
