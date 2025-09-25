<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User', function ($user = null) {
    return true; // (int) $user->id === (int) $id;
});

Broadcast::channel('what', function ($user = null) {
    return true; // (int) $user->id === (int) $id;
});
