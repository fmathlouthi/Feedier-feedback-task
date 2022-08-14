<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Http;

class FeedbacksImportCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feedbacks:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        info("Cron Job running at " . now());

        $file = public_path("/feedier/reviews_import.csv");
        $csv_data = Helpers::import_CSV($file);

        if (!empty($csv_data)) {
            $response = Http::withToken(env('FEEDIER_API_KEY'))
                ->get(env('FEEDIER_BASE_UEL').'/feedbacks', $csv_data);
        }

        return 0;
    }
}
