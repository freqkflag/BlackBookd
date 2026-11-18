<?php

return [

    /*
    |--------------------------------------------------------------------------
    | No paywalls (BlackBookd self-host default)
    |--------------------------------------------------------------------------
    |
    | When true, storage caps and SaaS-style upgrade messaging are disabled.
    | Uploads are always allowed; new accounts get unlimited storage (0 = none).
    |
    */

    'no_paywalls' => (bool) env('BLACKBOOKD_NO_PAYWALLS', true),

];