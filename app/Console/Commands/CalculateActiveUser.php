<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Log;

class CalculateActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabbs:calculate-active-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成活跃用户';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(User $user)
    {
        Log::info('Begin calculate');
        $this->info('开始计算...');

        $user->calculateAndCacheActiveUsers();

        $this->info('成功生成...');
        Log::info('Finished');
    }
}