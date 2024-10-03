<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Livewire Polling Configuration
    |--------------------------------------------------------------------------
    |
    | This value determines whether Livewire polling is enabled globally.
    | You can enable or disable polling, and set the polling frequency.
    | Polling allows Livewire components to automatically fetch data
    | from the backend at specified intervals without user interaction.
    |
    */

    'poll' => [
        'enabled' => true,
        'frequency_in_seconds' => 3, // Set the polling interval globally
    ],

];
