<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user = null, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('what', function ($user = null) {
    return true; // (int) $user->id === (int) $id;
});
