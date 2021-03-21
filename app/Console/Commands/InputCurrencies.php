<?php

namespace App\Console\Commands;

use App\Models\Currency;
use App\Services\CryptoService;
use Illuminate\Console\Command;

class InputCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:currencies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add all currencies to db';

    protected CryptoService $cryptoService;
    /**
     * Create a new command instance.
     *
     * @return void
     */

    /**
     * variable.
     *
     * @var CryptoService  $cryptoService
     */
    public function __construct(CryptoService $cryptoService)
    {
        parent::__construct();
        $this->cryptoService = $cryptoService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currenciesArray = explode(',', Currency::CURRENCIES);

        $this->cryptoService->inputCurrencies($currenciesArray);

        return 0;
    }
}
