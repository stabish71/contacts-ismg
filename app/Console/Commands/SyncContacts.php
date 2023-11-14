<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use Carbon\Carbon;
use DB;

class SyncContacts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-contacts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        $filePath = public_path('users.csv');

        if (file_exists($filePath)) {
            // Read CSV file
            $csv = array_map('str_getcsv', file($filePath));
            
            $header = array_shift($csv);

            $users = [];

            $now = Carbon::now();

            foreach ($csv as $row) {
                
                array_push($users, [
                    'name' => $row[0]." ".$row[1],
                    'email' => $row[2],
                    'title_id' => rand(1, 5),
                    'dates' => $row[3],
                    'created_at' => $now,
                    'updated_at' => $now
                ]); 
            }

            $chunks = array_chunk($users, 10000);

            foreach ($chunks as $chunk) {
                
                //DB::beginTransaction();

                DB::table('contacts')->insert($chunk);

                //DB::commit();
            }

            return '1 million contacts added';
        } else {

            return 'File not found';
        }
    }
}
