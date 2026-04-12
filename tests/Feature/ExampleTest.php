<?php

test('returns a successful response', function () {
    $response = $this->get(route('dash'));

    $response->assertOk();
});
