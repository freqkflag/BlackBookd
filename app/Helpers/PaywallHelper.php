<?php

namespace App\Helpers;

use App\Models\Account;

class PaywallHelper
{
    public static function noPaywalls(): bool
    {
        return (bool) config('blackbookd.no_paywalls', true);
    }

    public static function storageIsUnlimited(?Account $account = null): bool
    {
        if (self::noPaywalls()) {
            return true;
        }

        return $account !== null && (int) $account->storage_limit_in_mb === 0;
    }

    public static function defaultStorageLimitInMb(): int
    {
        return self::noPaywalls() ? 0 : (int) config('monica.default_storage_limit_in_mb', 50);
    }
}