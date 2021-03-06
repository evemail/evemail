<?php

namespace EVEMail\Console\Commands;

use Carbon\Carbon;
use EVEMail\Queue;
use Illuminate\Console\Command;


class ProcessQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:process_queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Processes The Queue';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $queue = Queue::get();
        if ($queue->count() > 0) {
            $job = (new \EVEMail\Jobs\ProcessQueue())
                    ->delay(Carbon::now()->addSeconds(5));
            dispatch($job);
        }
    }
}
