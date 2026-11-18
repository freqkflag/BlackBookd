<?php

namespace Tests\Unit\Helpers;

use App\Helpers\PaywallHelper;
use App\Helpers\StorageHelper;
use App\Models\Account;
use App\Models\File;
use App\Models\Vault;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PaywallHelperTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_allows_uploads_over_storage_cap_when_no_paywalls(): void
    {
        config(['blackbookd.no_paywalls' => true]);

        $account = Account::factory()->create([
            'storage_limit_in_mb' => 1,
        ]);
        $vault = Vault::factory()->create(['account_id' => $account->id]);
        File::factory()->create([
            'vault_id' => $vault->id,
            'size' => 2 * 1024 * 1024,
        ]);

        $this->assertTrue(StorageHelper::canUploadFile($account));
        $this->assertSame(0, PaywallHelper::defaultStorageLimitInMb());
    }

    /** @test */
    public function it_still_enforces_storage_when_paywalls_enabled(): void
    {
        config(['blackbookd.no_paywalls' => false]);

        $account = Account::factory()->create([
            'storage_limit_in_mb' => 1,
        ]);
        $vault = Vault::factory()->create(['account_id' => $account->id]);
        File::factory()->create([
            'vault_id' => $vault->id,
            'size' => 1024 * 1024,
        ]);

        $this->assertFalse(StorageHelper::canUploadFile($account));
    }
}