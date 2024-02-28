<?php

it('Session has complet informations', function () {
    $response = $this->get('/sessions');

    $response->assertStatus(200);
});

// it('has a name attribute', function () {
//     $session = new Session([
//         'name' => 'Product 1',
//         'price' => 100
//     ]);
//     expect($session->name)->toBe('Product 1');
//     expect($session->price)->toBe(100);
// });
it('Session has complete information', function () {
    // Crée une nouvelle session
    $session = Session::create([
        'name' => 'Product 1',
        'price' => 100
    ]);

    expect($session->name)->toBe('Product 1');
    expect($session->price)->toBe(100);
});