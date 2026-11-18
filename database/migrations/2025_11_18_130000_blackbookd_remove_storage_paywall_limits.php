<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * BlackBookd: existing accounts created with Monica's default 50MB cap get unlimited storage.
 * Only runs meaningful updates when BLACKBOOKD_NO_PAYWALLS is enabled at migrate time.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! (bool) env('BLACKBOOKD_NO_PAYWALLS', true)) {
            return;
        }

        DB::table('accounts')->update(['storage_limit_in_mb' => 0]);
    }

    public function down(): void
    {
        // Non-reversible; limits were a SaaS policy, not user data.
    }
};