<?php

it('should return products view when access route "/products"')
    ->get('/products')
    ->assertViewIs('products');


it('route products its passing a products list to view products')
    ->get('/products')
    ->assertViewIs('products')
    ->assertViewHas('products');
