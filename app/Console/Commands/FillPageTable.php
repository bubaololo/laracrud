<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;

class FillPageTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill:page';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill page tables in db with urls from json file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pages')->truncate();
        // DB::table('widget_types')->truncate();
        // DB::table('users_widgets')->truncate();


        $urls = [
                "/download",
                "/promotions",
                "/promotions/giveway",
                "/promotions/promo-daily-aof",
                "/promotions/promo-spin-gold",
                "/promotions/promo-rushcash",
                "/promotions/promo-holdem",
                "/promotions/promo-omaha",
                "/promotions/promo-short-deck",
                "/promotions/promo-flip-n-go",
                "/promotions/promo-battle-royale",
                "/promotions/welcome-bonus",
                "/promotions/honeymoonfornewcomers",
                "/promotions/fish-buffet",
                "/poker-games/rush-cash-friday",
                "/promotions/ggcare-and-ggcheers",
                "/promotions/bubble-protection",
                "/promotions/spin-gold-challenge",
                "/promotions/bad-beat-jackpot",
                "/promotions/aof-jackpot",
                "/promotions/all-in-or-fold-bingo",
                "/casino-promotions",
                "/promotions/lucky-slot-race",
                "/promotions/playtech_bonus",
                "/promotions/drops-wins-slots",
                "/promotions/live-casino-drops-wins",
                "/promotions/gg-challenge",
                "/poker-games",
                "/poker-games/flip-go",
                "/poker-games/battle-royale",
                "/poker-games/all-in-or-fold",
                "/poker-games/aof-sit-go",
                "/poker-games/rush-cash",
                "/poker-games/spin-gold",
                "/splashes",
                "/nft-avatars",
                "/ev-cashout",
                "/poker-games/final-table-betting",
                "/poker-games/bet-on-flop",
                "/poker-games/final-table-features",
                "/poker-games/snapcam",
                "/poker-games/staking-platform",
                "/poker-games/smart-hud",
                "/poker-games/smart-betting",
                "/poker-games/pokercraft",
                "/poker-games/card-squeeze",
                "/poker-games/texas-holdem",
                "/poker-games/short-deck",
                "/poker-games/omaha",
                "/poker-games/plo-5",
                "/tournaments",
                "/tournaments/zodiac-festival-2022",
                "/tournaments/ggmasters",
                "/tournaments/millions",
                "/tournaments/mystery-bounty",
                "/tournaments/saturday-session",
                "/tournaments/daily-guarantees",
                "/tournaments/high-rollers",
                "/tournaments/bounty-hunters",
                "/tournaments/chinese-zodiac",
                "/tournaments/omaholic",
                "/tournaments/t-builder",
                "/tournaments/tournament-types",
                "/blog",
                "/get-started/poker-school",
                "/get-started/poker-school/rules-texas-holdem",
                "/get-started/poker-school/rules-omaha-poker",
                "/poker-games/plo-5",
                "/privacy-policy",
                "/cookie-policy",
                "/withdrawal-policy",
                "/payment-details-policy",
                "/house-rules",
                "/security-ecology-agreement",
                "/responsible-gaming",
                "/security-ecology-agreement",
                "/random-number-generator",
                "/terms-conditions"
        ];
        
        foreach ($urls as $url) {
            DB::table('pages')->insert([
                'url' => $url
            ]);
            echo $url.' added'.PHP_EOL;
        }
 
        echo "success!";
    }
}