<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base URI for all default Guzzle requests
    |--------------------------------------------------------------------------
    |
    | This is the base URI that will be used for all default Guzzle requests.
    | This value is only consulted when resolving a HandlerGuzzle instance from
    | the HandlerGuzzleFactory class. It will not affect HandlerGuzzle objects
    | that have been instantiated directly.
    |
    | Default is null.
    |
    */
    'base_uri' => env("GUZZLE_BASE_URI", null),

	/*
    |--------------------------------------------------------------------------
    | Should Guzzle verify the server certificate for HTTPS requests?
    |--------------------------------------------------------------------------
    |
    | Should Guzzle verify the server certificate during HTTPS requests? This
    | typically requires the CA cert of the server's chain to be installed on
    | the machine performing the Guzzle request.
    |
    | During development, this can be set to false safely. You may also want to
    | set this to false when using WAMP since WAMP tends to have issues with
    | Guzzle when attempting to verify the server certificate.
    |
    | Default is true.
    |
    */
    'verify_cert' => env("GUZZLE_VERIFY_CERT", true),

];