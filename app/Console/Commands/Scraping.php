<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;

class Scraping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Scraping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ウェブスクレイピングを実行します。';

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
        echo 'スクリプトを実行します。' . PHP_EOL;
        $html = Goutte::request('GET', 'https://www.google.com/maps/d/u/0/viewer?hl=ja&mid=1UouU5WnP4mOr02IfROGsLbRnAs8&ll=35.724106898144996%2C139.81641912136115&z=17');
        preg_match('/([0-9.-]+).+?([0-9.-]+)/', $html, $matches);
        $lat=(float)$matches[1];
        $long=(float)$matches[2];
        // sleep(1);
        // $urls = $html->filter('a')->extract('href');
        // $title = $html->filter('title')->text();
        // $uniqueUrls = array_unique($urls);
        dump($lat);
        echo 'スクリプトを終了します。' . PHP_EOL;
    }
}
