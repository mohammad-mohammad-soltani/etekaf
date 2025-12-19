<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\EtekafUsers;
use Carbon\Carbon;

class DeleteExpiredRequests extends Command
{
    protected $signature = 'requests:delete-expired';
    protected $description = 'حذف درخواست هایی که 30 دقیقه از ثبتشون گذشته و پرداخت نشدن';

    public function handle()
    {
        $threshold = Carbon::now()->subMinutes(1);

        $deleted = EtekafUsers::where('payment_status', 'pending')
            ->where('created_at', '<', $threshold)
            ->delete();

        $this->info("$deleted requests deleted.");
    }
}

