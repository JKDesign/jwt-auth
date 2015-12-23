<?php

if ( ! function_exists('random_bytes')) {
    function random_bytes($length)
    {
        return \Illuminate\Support\Str::randomBytes($length);
    }
}
