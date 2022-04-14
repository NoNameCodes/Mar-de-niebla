<?php

use Laravel\Jetstream\Features;

return [
    'stack' => 'livewire',

    'middleware' => ['web'],

    'guard' => 'sanctum',

    'features' => [
        Features::accountDeletion(),
    ],
    'profile_photo_disk' => 'public',
];
