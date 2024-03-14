<?php


test('testing status code 200')
    ->get('/')
    ->assertOk();

test('testing status code 400')
    ->get('/404')
    ->assertNotFound();
