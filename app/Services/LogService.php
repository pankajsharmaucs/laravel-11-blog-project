<?php

namespace App\Services;
use Illuminate\Support\Facades\Log;

class LogService
 {
    // Method to log messages to a custom log file
    public function logMessage( $message )
    {
        // Here, we log the message into a custom file named 'custom.log'
        Log::channel( 'custom' )->info( $message );
    }
}