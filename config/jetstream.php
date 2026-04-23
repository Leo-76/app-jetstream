<?php

use Laravel\Jetstream\Features;

return [
    'stack' => 'livewire',
    'auth_session' => 'auth.session',
    'guard' => 'web',
    'passwords' => 'users',
    'username' => 'email',
    'email' => 'email',
    'profile_photo_disk' => 'public',
    'middleware' => ['web'],
    'features' => [
        // Features::terms(),
        Features::profilePhotos(),
        // Features::api(),
        // Features::teams(['invitations' => true]),
        Features::accountDeletion(),
    ],
];
