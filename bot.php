<?php

// Include BotMan
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Video;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

// Library
require_once 'vendor/autoload.php';
require_once(dirname(__FILE__).'/includes/library.php');
require_once(dirname(__FILE__).'/includes/ticker.php');
require_once(dirname(__FILE__).'/includes/depth.php');
require_once(dirname(__FILE__).'/includes/trades.php');
require_once(dirname(__FILE__).'/command/infomenu.php');

// Token Telegram
$configs = [
    "telegram" => [
        "token" => file_get_contents("private/token.txt")
    ]
];

// Membuat Class
DriverManager::loadDriver(TelegramDriver::class);
$botman = BotManFactory::create($configs); 

// Command no @ to bot
$botman->hears("/start", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $lastname = $user->getLastName();
    $id_user = $user->getId();

    $bot->reply("Hai Cryptoman 👋👋\nSelamat datang di cryptodax_bot\n\nBot ini diciptakan agar anda dapat mengetahui harga terbaru dari Cryptocurrency saat ini.\n\nYang terhormat :\n👤 $firstname $lastname\n🆔 $id_user\n\nSilahkan klik atau ketik /help untuk mengetahui menu yang tersedia");
});

$botman->hears("/help", function (Botman $bot) {
    $bot->reply("🙋‍♂️ Menu Yang Tersedia 💁‍♂️\n\n/hargacrypto 🌟 Harga Crypto\n/depthcrypto 🌏 Depth Crypto\n/tradescrypto 💗 Trades Crypto");
});


// ---------------------------MENU 1----------------------------------//
$botman->hears("/hargacrypto", function (Botman $bot) {
    include "command/infomenu.php";
    $bot->reply("$menu1");
});

$botman->hears("/m1_atom", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/atom_idr/ticker'; 
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ATOM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol atom = $volatom\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_att", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/att_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ATT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol att = $volatt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bal", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bal_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BAL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bal = $volbal\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bat", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bat_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BAT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bat = $volbat\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bcd", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bcd_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BCD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bcd = $volbcd\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bch", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bch_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BCH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bch = $volbch\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bsv", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bsv_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BSV\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bsv = $volbsv\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bnb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bnb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BNB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bnb = $volbnb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btg = $volbtg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bts", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bts_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bts = $volbts\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btt", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btt_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btt = $volbtt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_cel", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cel_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CEL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol cel = $volcel\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_celo", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/celo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CELO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol celo = $volcelo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ckb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ckb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CKB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ckb = $volckb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_coal", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coal_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - COAL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol coal = $volcoal\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_coti", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coti_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - COTI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol coti = $volcoti\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_comp", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/comp_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - COMP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol comp = $volcomp\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_cro", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cro_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CRO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol cro = $volcro\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dad", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dad_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DAD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dad = $voldad\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dai", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dai_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DAI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dai = $voldai\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dash", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dash_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DASH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dash = $dash\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dax", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dax_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DAX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dax = $voldax\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dep", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dep_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DEP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dep = $voldep\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dgx", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dgx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DGX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dgx = $voldgx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_doge", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/doge_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DOGE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol doge = $voldoge\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dot_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DOT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dot = $voldot\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_egld", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/egld_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EGLD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol egld = $volegld\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_em", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/em_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol em = $volem\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eos", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eos_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EOS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eos = $voleos\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_etc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/etc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ETC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol etc = $voletc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eth", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eth_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ETH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eth = $voleth\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eurs", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eurs_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EURS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eurs = $voleurs\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_fil", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/fil_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - FIL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol fil = $volfil\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_gsc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gsc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - GSC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol gsc = $volgsc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_gxc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gxc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - GXC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol gxc = $volgxc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hedg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hedg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HEDG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hedg = $volhedg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hive", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hive_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HIVE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hive = $volhive\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hnst", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hnst_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HNST\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hnst = $volhnst\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hpb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hpb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HPB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hpb = $volhpb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_idk", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/idk_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IDK\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol idk = $volidk\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ignis", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ignis_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IGNIS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ignis = $volignis\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_iost", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iost_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IOST\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol iost = $voliost\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_iota", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iota_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IOTA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol iota = $voliota\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_jst", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/jst_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - JST\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol jst = $voljst\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_kdag", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/kdag_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - KDAG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol kdag = $volkdag\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_let", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/let_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LET\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol let = $vollet\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_link", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/link_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LINK\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol link = $vollink\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ltc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ltc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LTC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ltc = $volltc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_lyfe", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/lyfe_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LYFE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol lyfe = $vollyfe\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_mbl", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mbl_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - MBL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol mbl = $volmbl\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_mkr", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mkr_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - MKR\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol mkr = $volmkr\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_matic", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/matic_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - MATIC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol matic = $volmatic\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_neo", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/neo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - NEO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol neo = $volneo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_nrg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nrg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - NRG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol nrg = $volnrg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_nxt", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nxt_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - NXT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol nxt = $volnxt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_okb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/okb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - OKB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol okb = $volokb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_omg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/omg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - OMG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol omg = $volomg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ont", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ont_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ONT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ont = $volont\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_paxg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/paxg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - PAXG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol paxg = $volpaxg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_qtum", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/qtum_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - QTUM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol qtum = $volqtum\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ren", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ren_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - REN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ren = $volren\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_repv2", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rep_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - REPV2\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol repv2 = $volrepv2\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_rvn", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rvn_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - RVN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol rvn = $volrvn\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xdc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xdc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XDC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xdc = $volxdc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xmr", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xmr_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XMR\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xmr = $volxmr\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xrp", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xrp_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XRP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xrp = $volxrp\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xtz", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xtz_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XTZ\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xtz = $volxtz\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xzc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xzc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XZC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xzc = $volxzc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_yfi", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfi_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - YFI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol yfi = $volyfi\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_yfii", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfii_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - YFII\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol yfii = $volyfii\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_zec", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zec_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ZEC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol zec = $volzec\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_zil", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zil_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ZIL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol zil = $volzil\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});


$botman->hears("/m1_snx", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/snx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SNX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol snx = $volsnx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_sumo", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sumo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SUMO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol sumo = $volsumo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_sushi", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sushi_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SUSHI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol sushi = $volsushi\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_tfuel", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/tfuel_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TFUEL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol tfuel = $voltfuel\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_theta", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/theta_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - THETA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol theta = $voltheta\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_titan", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/titan_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TITAN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol titan = $voltitan\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_trx", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/trx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TRX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol trx = $voltrx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_uma", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uma_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - UMA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol uma = $voluma\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_uni", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uni_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - UNI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol uni = $voluni\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_usdc", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - USDC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol usdc = $volusdc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_usdt", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdt_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - USDT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol usdt = $volusdt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_vex", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vex_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - VEX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol vex = $volvex\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_vidy", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vidy_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - VIDY\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol vidy = $volvidy\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_vsys", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vsys_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - VSYS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol vsys = $volvsys\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_waves", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/waves_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - WAVES\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol waves = $volwaves\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_wnxm", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/wnxm_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XNXM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol wnxm = $volwnxm\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xlm", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xlm_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XLM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xlm = $volxlm\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xem", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xem_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XEM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xem = $volxem\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btcidr", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ATOM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btc idr = $volbtcidr\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ten", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ten_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TEN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ten = $volten\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_aave", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aave_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - AAVE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol aave = $volaave\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_abyss", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/abyss_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ABYSS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol abyss = $volabyss\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_act", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/act_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ACT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol act = $volact\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ada", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ada_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ADA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ada = $volada\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_algo", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/algo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ALGO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol algo = $volalgo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_aoa", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aoa_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - AOA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol aoa = $volaoa\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_zrx", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/zrx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ZRX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ZRX = $volzrx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btcus", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTC USDT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btc usdt = $volbtcusdt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btt", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btt_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btt = $volbtt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eth", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/eth_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ETH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eth = $voleth\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_gard", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/gard_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - GARD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol gard = $volgard\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_npxs", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/npxs_usdt/ticker';
    include "includes/ticker.php";    
    $bot->reply("💰 Harga Crypto - NPXS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol npxs = $volnpxs\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_pxg", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/pxg_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - PXG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol pxg = $volpxg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ssp", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ssp_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SSP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ssp = $volssp\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});


// ---------------------------MENU 2----------------------------------//
$botman->hears("/depthcrypto", function (BotMan $bot) {
    include "command/infomenu.php";
    $bot->reply("$menu2");
});

$botman->hears("/m2_atom", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/atom_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ATOM\n\n♻️ BUY = \nIDR $buy\n\n🏷️ SELL = \nIDR $sell");
});

$botman->hears("/m2_att", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/att_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ATT\n\n♻️ BUY = \nIDR $buy\n\n🏷️ SELL = \nIDR $sell");
});

$botman->hears("/m2_bal", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bal_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BAL\n\n♻️ BUY = \nIDR $buy\n\n🏷️ SELL = \nIDR $sell");
});

$botman->hears("/m2_bat", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bat_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BAT\n\n♻️ BUY = \nIDR $buy\n\n🏷️ SELL = \nIDR $sell");
});

$botman->hears("/m2_bcd", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bcd_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BCD\n\n♻️ BUY = \nIDR $buy\n\n🏷️ SELL = \nIDR $sell");
});

$botman->hears("/m2_bch", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bch_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BCH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bsv", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bsv_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BSV\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bnb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bnb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BNB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bts", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bts_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btt", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btt_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_cel", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cel_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CEL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_celo", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/celo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CELO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ckb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ckb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CKB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_coal", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coal_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - COAL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_coti", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coti_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - COTI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_comp", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/comp_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - COMP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_cro", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cro_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CRO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dad", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dad_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DAD\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dai", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dai_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DAI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dash", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dash_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DASH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dax", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dax_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DAX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dep", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dep_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DEP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dgx", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dgx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DGX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_doge", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/doge_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DOGE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dot_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DOT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_egld", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/egld_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EGLD\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_em", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/em_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eos", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eos_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EOS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_etc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/etc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ETC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eth", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eth_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ETH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eurs", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eurs_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EURS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_fil", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/fil_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - FIL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_gsc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gsc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - GSC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_gxc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gxc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - GXC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hedg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hedg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HEDG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hive", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hive_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HIVE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hnst", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hnst_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HNST\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hpb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hpb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HPB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_idk", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/idk_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IDK\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ignis", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ignis_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IGNIS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_iost", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iost_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IOST\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_iota", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iota_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IOTA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_jst", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/jst_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - JST\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_kdag", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/kdag_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - KDAG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_let", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/let_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LET\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_link", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/link_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LINK\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ltc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ltc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LTC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_lyfe", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/lyfe_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LYFE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_mbl", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mbl_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - MBL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_mkr", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mkr_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - MKR\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_matic", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/matic_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - MATIC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_neo", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/neo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NEO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_nrg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nrg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NRG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_nxt", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nxt_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NXT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_okb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/okb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - OKB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_omg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/omg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - OMG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ont", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ont_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ONT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_paxg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/paxg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - PAXG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_qtum", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/qtum_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - QTUM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ren", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ren_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - REN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_repv2", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rep_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - REPV2\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_rvn", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rvn_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - RVN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xdc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xdc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XDC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xmr", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xmr_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XMR\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xrp", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xrp_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XRP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xtz", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xtz_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XTZ\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xzc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xzc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XZC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_yfi", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfi_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - YFI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_yfii", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfii_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - YFII\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_zec", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zec_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ZEC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_zil", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zil_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ZIL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_snx", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/snx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SNX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_sumo", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sumo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SUMO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_sushi", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sushi_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SUSHI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_tfuel", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/tfuel_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TFUEL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_theta", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/theta_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - THETA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_titan", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/titan_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TITAN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_trx", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/trx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TRX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_uma", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uma_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - UMA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_uni", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uni_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - UNI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_usdc", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - USDC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_usdt", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdt_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - USDT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_vex", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vex_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - VEX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_vidy", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vidy_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - VIDY\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_vsys", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vsys_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - VSYS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_waves", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/waves_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - WAVES\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_wnxm", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/wnxm_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - WNXM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xlm", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xlm_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XLM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xem", function (BotMan $bot) {
    $curl = my_curl_get('https://indodax.com/api/xem_idr/depth');
    $apicoin = 'https://indodax.com/api/xem_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XEM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btcidr", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTC IDR\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ten", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ten_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TEN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_aave", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aave_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - AAVE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_abyss", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/abyss_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ABYSS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_act", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/act_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ACT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ada", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ada_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ADA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_algo", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/algo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ALGO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_aoa", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aoa_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - AOA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_zrx", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/zrx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ZRX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btcus", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTC USDT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btt", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btt_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eth", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/eth_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ETH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_gard", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/gard_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - GARD\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_npxs", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/npxs_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NPXS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_pxg", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/pxg_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - PXG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ssp", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ssp_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SSP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});



// ---------------------------MENU 3----------------------------------//
$botman->hears("/tradescrypto", function (Botman $bot) {
    include "command/infomenu.php";
    $bot->reply("$menu3");
});

$botman->hears("/m3_atom", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/atom_idr/trades'; 
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ATOM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_att", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/att_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ATT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bal", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bal_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BAL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bat", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bat_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BAT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bcd", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bcd_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BCD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bch", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bch_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BCH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bsv", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bsv_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BSV\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bnb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bnb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BNB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bts", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bts_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btt", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btt_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_cel", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cel_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_celo", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/celo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CELO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ckb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ckb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CKB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_coal", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coal_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - COAL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_coti", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coti_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - COTI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_comp", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/comp_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - COMP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_cro", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cro_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CRO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dad", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dad_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DAD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dai", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dai_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DAI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dash", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dash_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DASH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dax", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dax_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DAX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dep", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dep_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DEP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dgx", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dgx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DGX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_doge", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/doge_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DOGE\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dot_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DOT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_egld", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/egld_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EGLD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_em", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/em_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eos", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eos_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EOS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_etc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/etc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ETC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eth", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eth_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ETH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eurs", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eurs_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EURS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_fil", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/fil_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - FIL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_gsc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gsc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - GSC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_gxc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gxc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - GXC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hedg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hedg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HEDG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hive", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hive_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HIVE\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hnst", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hnst_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HNST\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hpb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hpb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HPB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_idk", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/idk_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IDK\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ignis", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ignis_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IGNIS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_iost", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iost_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IOST\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_iota", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iota_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IOTA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_jst", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/jst_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - JST\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_kdag", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/kdag_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - KDAG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_let", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/let_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - LET\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_link", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/link_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - LINK\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ltc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ltc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - LTC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_lyfe", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/lyfe_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_mbl", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mbl_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_mkr", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mkr_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - MKR\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_matic", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/matic_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - MATIC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_neo", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/neo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NEO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_nrg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nrg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NRG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_nxt", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nxt_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NXT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_okb", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/okb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - OKB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_omg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/omg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - OMG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ont", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ont_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ONT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_paxg", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/paxg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - PAXG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_qtum", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/qtum_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - QTUM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ren", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ren_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - REN\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_repv2", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rep_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - REPV2\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_rvn", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rvn_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xdc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xdc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XDC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xmr", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xmr_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XMR\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xrp", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xrp_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XRP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xtz", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xtz_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XTZ\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xzc", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xzc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XZC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_yfi", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfi_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - YFI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_yfii", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfii_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - YFII\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_zec", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zec_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ZEC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_zil", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zil_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ZIL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_snx", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/snx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SNX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_sumo", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sumo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SUMO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_sushi", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sushi_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SUSHI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_tfuel", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/tfuel_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TFUEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_theta", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/theta_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - THETA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_titan", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/titan_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TITAN\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_trx", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/trx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TRX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_uma", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uma_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - UMA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_uni", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uni_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - UNI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_usdc", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - USDC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_usdt", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdt_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - USDT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_vex", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vex_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - VEX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_vidy", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vidy_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - VIDY\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_vsys", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vsys_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - VSYS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_waves", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/waves_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - WAVES\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_wnxm", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/wnxm_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - WNXM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xlm", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xlm_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XLM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xem", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xem_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XEM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btcidr", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTC IDR\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ten", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ten_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TEN\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_aave", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aave_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - AAVE\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_abyss", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/abyss_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ABYSS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_act", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/act_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ACT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ada", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ada_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ADA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_algo", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/algo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ALGO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_aoa", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aoa_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - AOA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_zrx", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/zrx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ZRX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btcus", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTC USDT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btt", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btt_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eth", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/eth_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ETH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_gard", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/gard_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - GARD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_npxs", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/npxs_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NPXS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_pxg", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/pxg_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - PXG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ssp", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ssp_usdt/ticker';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SSP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});





// --------------------------------------------------------------------------------------------------------------- //
// -------------------------------------------------PEMBATAS KHUSUS----------------------------------------------- //
// --------------------------------------------------------------------------------------------------------------- //
// Command with @ to bot
$botman->hears("/start@cryptodax_bot", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $lastname = $user->getLastName();
    $id_user = $user->getId();

    $bot->reply("Hai Cryptoman 👋👋\nSelamat datang di cryptodax_bot\n\nBot ini diciptakan agar anda dapat mengetahui harga terbaru dari Cryptocurrency saat ini.\n\nYang terhormat :\n👤 $firstname $lastname\n🆔 $id_user\n\nSilahkan klik atau ketik /help untuk mengetahui menu yang tersedia");
});

$botman->hears("/help@cryptodax_bot", function (Botman $bot) {
    $bot->reply("🙋‍♂️ Menu Yang Tersedia 💁‍♂️\n\n/hargacrypto 🌟 Harga Crypto\n/depthcrypto 🌏 Depth Crypto\n/tradescrypto 💗 Trades Crypto");
});


// ---------------------------MENU 1----------------------------------//
$botman->hears("/hargacrypto@cryptodax_bot", function (Botman $bot) {
    include "command/infomenu.php";
    $bot->reply("$menu1");
});

$botman->hears("/m1_atom@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/atom_idr/ticker'; 
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ATOM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol atom = $volatom\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_att@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/att_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ATT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol att = $volatt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bal@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bal_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BAL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bal = $volbal\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bat@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bat_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BAT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bat = $volbat\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bcd@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bcd_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BCD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bcd = $volbcd\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bch@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bch_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BCH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bch = $volbch\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bsv@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bsv_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BSV\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bsv = $volbsv\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bnb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bnb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BNB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bnb = $volbnb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btg = $volbtg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_bts@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bts_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol bts = $volbts\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btt@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btt_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btt = $volbtt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_cel@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cel_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CEL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol cel = $volcel\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_celo@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/celo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CELO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol celo = $volcelo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ckb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ckb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CKB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ckb = $volckb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_coal@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coal_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - COAL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol coal = $volcoal\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_coti@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coti_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - COTI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol coti = $volcoti\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_comp@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/comp_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - COMP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol comp = $volcomp\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_cro@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cro_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - CRO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol cro = $volcro\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dad@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dad_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DAD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dad = $voldad\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dai@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dai_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DAI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dai = $voldai\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dash@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dash_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DASH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dash = $dash\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dax@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dax_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DAX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dax = $voldax\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dep@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dep_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DEP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dep = $voldep\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dgx@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dgx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DGX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dgx = $voldgx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_doge@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/doge_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DOGE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol doge = $voldoge\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_dot@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dot_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - DOT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol dot = $voldot\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_egld@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/egld_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EGLD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol egld = $volegld\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_em@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/em_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol em = $volem\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eos@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eos_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EOS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eos = $voleos\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_etc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/etc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ETC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol etc = $voletc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eth@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eth_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ETH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eth = $voleth\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eurs@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eurs_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - EURS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eurs = $voleurs\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_fil@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/fil_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - FIL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol fil = $volfil\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_gsc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gsc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - GSC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol gsc = $volgsc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_gxc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gxc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - GXC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol gxc = $volgxc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hedg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hedg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HEDG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hedg = $volhedg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hive@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hive_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HIVE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hive = $volhive\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hnst@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hnst_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HNST\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hnst = $volhnst\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_hpb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hpb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - HPB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol hpb = $volhpb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_idk@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/idk_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IDK\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol idk = $volidk\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ignis@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ignis_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IGNIS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ignis = $volignis\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_iost@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iost_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IOST\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol iost = $voliost\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_iota@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iota_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - IOTA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol iota = $voliota\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_jst@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/jst_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - JST\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol jst = $voljst\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_kdag@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/kdag_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - KDAG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol kdag = $volkdag\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_let@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/let_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LET\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol let = $vollet\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_link@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/link_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LINK\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol link = $vollink\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ltc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ltc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LTC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ltc = $volltc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_lyfe@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/lyfe_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - LYFE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol lyfe = $vollyfe\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_mbl@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mbl_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - MBL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol mbl = $volmbl\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_mkr@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mkr_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - MKR\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol mkr = $volmkr\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_matic@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/matic_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - MATIC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol matic = $volmatic\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_neo@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/neo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - NEO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol neo = $volneo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_nrg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nrg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - NRG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol nrg = $volnrg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_nxt@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nxt_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - NXT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol nxt = $volnxt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_okb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/okb_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - OKB\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol okb = $volokb\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_omg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/omg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - OMG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol omg = $volomg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ont@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ont_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ONT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ont = $volont\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_paxg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/paxg_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - PAXG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol paxg = $volpaxg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_qtum@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/qtum_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - QTUM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol qtum = $volqtum\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ren@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ren_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - REN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ren = $volren\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_repv2@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rep_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - REPV2\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol repv2 = $volrepv2\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_rvn@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rvn_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - RVN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol rvn = $volrvn\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xdc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xdc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XDC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xdc = $volxdc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xmr@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xmr_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XMR\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xmr = $volxmr\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xrp@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xrp_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XRP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xrp = $volxrp\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xtz@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xtz_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XTZ\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xtz = $volxtz\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xzc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xzc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XZC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xzc = $volxzc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_yfi@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfi_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - YFI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol yfi = $volyfi\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_yfii@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfii_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - YFII\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol yfii = $volyfii\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_zec@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zec_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ZEC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol zec = $volzec\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_zil@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zil_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ZIL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol zil = $volzil\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});


$botman->hears("/m1_snx@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/snx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SNX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol snx = $volsnx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_sumo@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sumo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SUMO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol sumo = $volsumo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_sushi@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sushi_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SUSHI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol sushi = $volsushi\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_tfuel@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/tfuel_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TFUEL\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol tfuel = $voltfuel\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_theta@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/theta_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - THETA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol theta = $voltheta\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_titan@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/titan_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TITAN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol titan = $voltitan\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_trx@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/trx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TRX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol trx = $voltrx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_uma@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uma_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - UMA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol uma = $voluma\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_uni@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uni_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - UNI\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol uni = $voluni\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_usdc@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - USDC\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol usdc = $volusdc\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_usdt@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdt_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - USDT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol usdt = $volusdt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_vex@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vex_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - VEX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol vex = $volvex\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_vidy@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vidy_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - VIDY\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol vidy = $volvidy\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_vsys@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vsys_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - VSYS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol vsys = $volvsys\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_waves@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/waves_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - WAVES\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol waves = $volwaves\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_wnxm@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/wnxm_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XNXM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol wnxm = $volwnxm\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xlm@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xlm_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XLM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xlm = $volxlm\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_xem@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xem_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - XEM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol xem = $volxem\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btcidr@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ATOM\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btc idr = $volbtcidr\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ten@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ten_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - TEN\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ten = $volten\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_aave@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aave_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - AAVE\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol aave = $volaave\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_abyss@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/abyss_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ABYSS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol abyss = $volabyss\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_act@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/act_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ACT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol act = $volact\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ada@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ada_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ADA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ada = $volada\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_algo@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/algo_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ALGO\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol algo = $volalgo\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_aoa@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aoa_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - AOA\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol aoa = $volaoa\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_zrx@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/zrx_idr/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ZRX\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ZRX = $volzrx\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btcus@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTC USDT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btc usdt = $volbtcusdt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_btt@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btt_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - BTT\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol btt = $volbtt\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_eth@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/eth_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - ETH\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol eth = $voleth\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_gard@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/gard_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - GARD\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol gard = $volgard\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_npxs@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/npxs_usdt/ticker';
    include "includes/ticker.php";    
    $bot->reply("💰 Harga Crypto - NPXS\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol npxs = $volnpxs\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_pxg@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/pxg_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - PXG\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol pxg = $volpxg\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});

$botman->hears("/m1_ssp@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ssp_usdt/ticker';
    include "includes/ticker.php";
    $bot->reply("💰 Harga Crypto - SSP\n\n🏵️ High = IDR $high\n🔰 Low = IDR $low\n🌐 Vol ssp = $volssp\n⚛️ Vol IDR = IDR $volidr\n💠 Last = IDR $last\n♻️ Buy = IDR $buy\n🏷️ Sell = IDR $sell\n⏰ $tserver");
});


// ---------------------------MENU 2----------------------------------//
$botman->hears("/depthcrypto@cryptodax_bot", function (BotMan $bot) {
    include "command/infomenu.php";
    $bot->reply("$menu2");
});

$botman->hears("/m2_atom@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/atom_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ATOM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_att@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/att_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ATT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bal@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bal_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BAL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bat@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bat_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BAT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bcd@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bcd_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BCD\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bch@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bch_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BCH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bsv@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bsv_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BSV\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bnb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bnb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BNB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_bts@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bts_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btt@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btt_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_cel@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cel_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CEL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_celo@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/celo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CELO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ckb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ckb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CKB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_coal@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coal_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - COAL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_coti@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coti_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - COTI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_comp@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/comp_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - COMP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_cro@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cro_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - CRO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dad@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dad_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DAD\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dai@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dai_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DAI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dash@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dash_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DASH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dax@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dax_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DAX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dep@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dep_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DEP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dgx@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dgx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DGX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_doge@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/doge_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DOGE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_dot@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dot_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - DOT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_egld@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/egld_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EGLD\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_em@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/em_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eos@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eos_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EOS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_etc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/etc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ETC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eth@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eth_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ETH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eurs@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eurs_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - EURS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_fil@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/fil_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - FIL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_gsc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gsc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - GSC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_gxc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gxc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - GXC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hedg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hedg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HEDG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hive@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hive_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HIVE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hnst@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hnst_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HNST\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_hpb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hpb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - HPB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_idk@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/idk_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IDK\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ignis@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ignis_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IGNIS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_iost@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iost_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IOST\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_iota@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iota_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - IOTA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_jst@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/jst_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - JST\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_kdag@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/kdag_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - KDAG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_let@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/let_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LET\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_link@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/link_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LINK\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ltc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ltc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LTC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_lyfe@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/lyfe_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - LYFE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_mbl@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mbl_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - MBL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_mkr@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mkr_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - MKR\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_matic@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/matic_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - MATIC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_neo@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/neo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NEO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_nrg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nrg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NRG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_nxt@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nxt_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NXT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_okb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/okb_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - OKB\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_omg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/omg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - OMG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ont@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ont_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ONT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_paxg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/paxg_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - PAXG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_qtum@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/qtum_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - QTUM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ren@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ren_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - REN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_repv2@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rep_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - REPV2\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_rvn@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rvn_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - RVN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xdc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xdc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XDC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xmr@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xmr_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XMR\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xrp@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xrp_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XRP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xtz@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xtz_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XTZ\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xzc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xzc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XZC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_yfi@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfi_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - YFI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_yfii@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfii_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - YFII\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_zec@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zec_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ZEC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_zil@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zil_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ZIL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_snx@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/snx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SNX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_sumo@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sumo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SUMO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_sushi@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sushi_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SUSHI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_tfuel@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/tfuel_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TFUEL\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_theta@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/theta_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - THETA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_titan@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/titan_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TITAN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_trx@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/trx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TRX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_uma@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uma_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - UMA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_uni@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uni_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - UNI\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_usdc@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - USDC\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_usdt@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdt_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - USDT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_vex@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vex_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - VEX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_vidy@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vidy_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - VIDY\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_vsys@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vsys_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - VSYS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_waves@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/waves_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - WAVES\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_wnxm@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/wnxm_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - WNXM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xlm@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xlm_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XLM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_xem@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xem_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - XEM\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btcidr@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTC IDR\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ten@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ten_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - TEN\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_aave@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aave_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - AAVE\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_abyss@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/abyss_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ABYSS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_act@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/act_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ACT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ada@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ada_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ADA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_algo@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/algo_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ALGO\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_aoa@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aoa_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - AOA\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_zrx@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/zrx_idr/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ZRX\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btcus@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTC USDT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_btt@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btt_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - BTT\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_eth@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/eth_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - ETH\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_gard@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/gard_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - GARD\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_npxs@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/npxs_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - NPXS\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_pxg@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/pxg_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - PXG\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});

$botman->hears("/m2_ssp@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ssp_usdt/depth';
    include "includes/depth.php";
    $bot->reply("💰 Depth Crypto - SSP\n\n♻️ BUY = \n$buy\n\n🏷️ SELL = \n$sell");
});


// ---------------------------MENU 3----------------------------------//
$botman->hears("/tradescrypto@cryptodax_bot", function (Botman $bot) {
    include "command/infomenu.php";
    $bot->reply("$menu3");
});

$botman->hears("/m3_atom@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/atom_idr/trades'; 
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ATOM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_att@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/att_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ATT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bal@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bal_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BAL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bat@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bat_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BAT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bcd@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bcd_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BCD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bch@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bch_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BCH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bsv@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bsv_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BSV\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bnb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bnb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BNB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_bts@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/bts_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btt@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/btt_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_cel@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cel_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_celo@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/celo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CELO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ckb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ckb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CKB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_coal@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coal_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - COAL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_coti@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/coti_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - COTI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_comp@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/comp_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - COMP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_cro@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/cro_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CRO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dad@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dad_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DAD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dai@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dai_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DAI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dash@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dash_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DASH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dax@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dax_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DAX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dep@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dep_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DEP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dgx@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dgx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DGX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_doge@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/doge_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DOGE\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_dot@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/dot_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - DOT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_egld@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/egld_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EGLD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_em@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/em_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eos@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eos_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EOS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_etc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/etc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ETC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eth@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eth_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ETH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eurs@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/eurs_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - EURS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_fil@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/fil_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - FIL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_gsc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gsc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - GSC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_gxc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/gxc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - GXC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hedg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hedg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HEDG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hive@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hive_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HIVE\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hnst@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hnst_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HNST\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_hpb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/hpb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - HPB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_idk@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/idk_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IDK\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ignis@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ignis_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IGNIS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_iost@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iost_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IOST\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_iota@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/iota_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - IOTA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_jst@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/jst_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - JST\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_kdag@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/kdag_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - KDAG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_let@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/let_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - LET\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_link@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/link_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - LINK\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ltc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ltc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - LTC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_lyfe@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/lyfe_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_mbl@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mbl_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_mkr@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/mkr_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - MKR\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_matic@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/matic_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - MATIC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_neo@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/neo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NEO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_nrg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nrg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NRG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_nxt@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/nxt_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NXT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_okb@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/okb_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - OKB\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_omg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/omg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - OMG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ont@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ont_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ONT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_paxg@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/paxg_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - PAXG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_qtum@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/qtum_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - QTUM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ren@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/ren_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - REN\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_repv2@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rep_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - REPV2\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_rvn@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/rvn_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - CEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xdc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xdc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XDC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xmr@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xmr_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XMR\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xrp@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xrp_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XRP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xtz@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xtz_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XTZ\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xzc@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/xzc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XZC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_yfi@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfi_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - YFI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_yfii@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/yfii_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - YFII\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_zec@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zec_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ZEC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_zil@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/zil_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ZIL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_snx@cryptodax_bot", function (Botman $bot) {
    $apicoin = 'https://indodax.com/api/snx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SNX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_sumo@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sumo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SUMO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_sushi@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/sushi_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SUSHI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_tfuel@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/tfuel_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TFUEL\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_theta@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/theta_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - THETA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_titan@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/titan_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TITAN\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_trx@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/trx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TRX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_uma@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uma_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - UMA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_uni@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/uni_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - UNI\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_usdc@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - USDC\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_usdt@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/usdt_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - USDT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_vex@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vex_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - VEX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_vidy@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vidy_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - VIDY\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_vsys@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/vsys_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - VSYS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_waves@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/waves_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - WAVES\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_wnxm@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/wnxm_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - WNXM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xlm@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xlm_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XLM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_xem@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/xem_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - XEM\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btcidr@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTC IDR\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ten@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ten_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - TEN\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_aave@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aave_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - AAVE\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_abyss@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/abyss_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ABYSS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_act@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/act_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ACT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ada@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ada_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ADA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_algo@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/algo_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ALGO\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_aoa@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/aoa_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - AOA\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_zrx@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/zrx_idr/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ZRX\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btcus@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btc_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTC USDT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_btt@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/btt_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - BTT\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_eth@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/eth_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - ETH\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_gard@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/gard_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - GARD\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_npxs@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/npxs_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - NPXS\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_pxg@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/pxg_usdt/trades';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - PXG\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});

$botman->hears("/m3_ssp@cryptodax_bot", function (BotMan $bot) {
    $apicoin = 'https://indodax.com/api/ssp_usdt/ticker';
    include "includes/trades.php";
    $bot->reply("💰 Trades Crypto - SSP\n\n🏵️ $price\n🔰 $amount\n🌐 $type\n⚛️ $tid\n⏰ $date");
});


// command not found
$botman->fallback(function (BotMan $bot) {
    $message = $bot->getMessage()->getText();
    $bot->reply("Maaf, perintah '$message' tidak tersedia..");
});

$botman->listen();

?>