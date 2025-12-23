<?php

namespace App\Console\Commands;

use App\Services\Pay;
use Illuminate\Console\Command;
use App\Models\EtekafUsers;
use Carbon\Carbon;

class DeleteExpiredRequests extends Command
{
    protected $signature = 'requests:delete-expired';
    protected $description = 'حذف درخواست هایی که 30 دقیقه از ثبتشون گذشته و پرداخت نشدن';

    public function handle()
    {
        $threshold = Carbon::now()->subMinutes(30);

        $requests = EtekafUsers::where('payment_status', 'pending')
            ->where('created_at', '<', $threshold)
            ->get();

        $deletedCount = 0;

        foreach ($requests as $request) {

            if (empty($request->track_id)) {
                $request->delete();
                $deletedCount++;
                continue;
            }

            try {
                if (!Pay::verify($request->track_id)) {
                    $request->delete();
                    $deletedCount++;
                } else {
                    $request->update(['payment_status' => 'approved']);
                }
            } catch (\Throwable $e) {
                \Log::error('Payment verify failed', [
                    'request_id' => $request->id,
                    'track_id'   => $request->track_id,
                    'error'      => $e->getMessage(),
                ]);
            }
        }


        $this->info("$deletedCount requests deleted.");
    }

}

