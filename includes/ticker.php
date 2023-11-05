<?php
require_once(dirname(__FILE__).'/library.php');

date_default_timezone_set('Asia/Jakarta');

$curl = my_curl_get($apicoin);

$response = $curl['response'];
if ('' != $response) {
    //decode response
	$response = json_decode($response, true);
    
    //high low
    $high = number_format($response['ticker']['high'], 0, ',', '.');
    $low = number_format($response['ticker']['low'], 0, ',', '.');
    
    //vol coin idr
    $volatom = number_format($response['ticker']['vol_atom'], 8, ',', '.');
    $volatt = number_format($response['ticker']['vol_att'], 8, ',', '.');
    $volbal = number_format($response['ticker']['vol_bal'], 8, ',', '.');
    $volbat = number_format($response['ticker']['vol_bat'], 8, ',', '.');
    $volbcd = number_format($response['ticker']['vol_bcd'], 8, ',', '.');
    $volbch = number_format($response['ticker']['vol_bch'], 8, ',', '.');
    $volbsv = number_format($response['ticker']['vol_bsv'], 8, ',', '.');
    $volbnb = number_format($response['ticker']['vol_bnb'], 8, ',', '.');
    $volbtg = number_format($response['ticker']['vol_btg'], 8, ',', '.');
    $volbts = number_format($response['ticker']['vol_bts'], 8, ',', '.');
    $volbtt = number_format($response['ticker']['vol_btt'], 8, ',', '.');
    $volcel = number_format($response['ticker']['vol_cel'], 8, ',', '.');
    $volcelo = number_format($response['ticker']['vol_celo'], 8, ',', '.');
    $volckb = number_format($response['ticker']['vol_ckb'], 8, ',', '.');
    $volcoal = number_format($response['ticker']['vol_coal'], 8, ',', '.');
    $volcoti = number_format($response['ticker']['vol_coti'], 8, ',', '.');
    $volcomp = number_format($response['ticker']['vol_comp'], 8, ',', '.');
    $volcro = number_format($response['ticker']['vol_cro'], 8, ',', '.');
    $voldad = number_format($response['ticker']['vol_dad'], 8, ',', '.');
    $voldai = number_format($response['ticker']['vol_dai'], 8, ',', '.');
    $voldash = number_format($response['ticker']['vol_dash'], 8, ',', '.');
    $voldax = number_format($response['ticker']['vol_dax'], 8, ',', '.');
    $voldep = number_format($response['ticker']['vol_dep'], 8, ',', '.');
    $voldgx = number_format($response['ticker']['vol_dgx'], 8, ',', '.');
    $voldoge = number_format($response['ticker']['vol_doge'], 8, ',', '.');
    $voldot = number_format($response['ticker']['vol_dot'], 8, ',', '.');
    $volegld = number_format($response['ticker']['vol_egld'], 8, ',', '.');
    $volem = number_format($response['ticker']['vol_em'], 8, ',', '.');
    $voleos = number_format($response['ticker']['vol_eos'], 8, ',', '.');
    $voletc = number_format($response['ticker']['vol_etc'], 8, ',', '.');
    $voleth = number_format($response['ticker']['vol_eth'], 8, ',', '.');
    $voleurs = number_format($response['ticker']['vol_eurs'], 8, ',', '.');
    $volfil = number_format($response['ticker']['vol_fil'], 8, ',', '.');
    $volgsc = number_format($response['ticker']['vol_gsc'], 8, ',', '.');
    $volgxc = number_format($response['ticker']['vol_gxc'], 8, ',', '.');
    $volhedg = number_format($response['ticker']['vol_hedg'], 8, ',', '.');
    $volhive = number_format($response['ticker']['vol_hive'], 8, ',', '.');
    $volhnst = number_format($response['ticker']['vol_hnst'], 8, ',', '.');
    $volhpb = number_format($response['ticker']['vol_hpb'], 8, ',', '.');
    $volidk = number_format($response['ticker']['vol_idk'], 8, ',', '.');
    $volignis = number_format($response['ticker']['vol_ignis'], 8, ',', '.');
    $voliost = number_format($response['ticker']['vol_iost'], 8, ',', '.');
    $voliota = number_format($response['ticker']['vol_iota'], 8, ',', '.');
    $voljst = number_format($response['ticker']['vol_jst'], 8, ',', '.');
    $volkdag = number_format($response['ticker']['vol_kdag'], 8, ',', '.');
    $vollet = number_format($response['ticker']['vol_let'], 8, ',', '.');
    $vollink = number_format($response['ticker']['vol_link'], 8, ',', '.');
    $volltc = number_format($response['ticker']['vol_ltc'], 8, ',', '.');
    $vollyfe = number_format($response['ticker']['vol_lyfe'], 8, ',', '.');
    $volmbl = number_format($response['ticker']['vol_mbl'], 8, ',', '.');
    $volmkr = number_format($response['ticker']['vol_mkr'], 8, ',', '.');
    $volmatic = number_format($response['ticker']['vol_matic'], 8, ',', '.');
    $volneo = number_format($response['ticker']['vol_neo'], 8, ',', '.');
    $volnrg = number_format($response['ticker']['vol_nrg'], 8, ',', '.');
    $volnxt = number_format($response['ticker']['vol_nxt'], 8, ',', '.');
    $volokb = number_format($response['ticker']['vol_okb'], 8, ',', '.');
    $volomg = number_format($response['ticker']['vol_omg'], 8, ',', '.');
    $volont = number_format($response['ticker']['vol_ont'], 8, ',', '.');
    $volpaxg = number_format($response['ticker']['vol_paxg'], 8, ',', '.');
    $volqtum = number_format($response['ticker']['vol_qtum'], 8, ',', '.');
    $volren = number_format($response['ticker']['vol_ren'], 8, ',', '.');
    $volrepv2 = number_format($response['ticker']['vol_repv2'], 8, ',', '.');
    $volrvn = number_format($response['ticker']['vol_rvn'], 8, ',', '.');
    $volxdc = number_format($response['ticker']['vol_xdc'], 8, ',', '.');
    $volxmr = number_format($response['ticker']['vol_xmr'], 8, ',', '.');
    $volxrp = number_format($response['ticker']['vol_xrp'], 8, ',', '.');
    $volxtc = number_format($response['ticker']['vol_xtz'], 8, ',', '.');
    $volxzc = number_format($response['ticker']['vol_xzc'], 8, ',', '.');
    $volyfi = number_format($response['ticker']['vol_yfi'], 8, ',', '.');
    $volyfii = number_format($response['ticker']['vol_yfii'], 8, ',', '.');
    $volzec = number_format($response['ticker']['vol_zec'], 8, ',', '.');
    $volzil = number_format($response['ticker']['vol_zil'], 8, ',', '.');
    $volsnx = number_format($response['ticker']['vol_snx'], 8, ',', '.');
    $volsumo = number_format($response['ticker']['vol_sumo'], 8, ',', '.');
    $volsushi = number_format($response['ticker']['vol_sushi'], 8, ',', '.');
    $voltfuel = number_format($response['ticker']['vol_tfuel'], 8, ',', '.');
    $voltheta = number_format($response['ticker']['vol_theta'], 8, ',', '.');
    $voltitan = number_format($response['ticker']['vol_titan'], 8, ',', '.');
    $voltrx = number_format($response['ticker']['vol_trx'], 8, ',', '.');
    $voluma = number_format($response['ticker']['vol_uma'], 8, ',', '.');
    $voluni = number_format($response['ticker']['vol_uni'], 8, ',', '.');
    $volsnx = number_format($response['ticker']['vol_snx'], 8, ',', '.');
    $volusdc = number_format($response['ticker']['vol_usdc'], 8, ',', '.');
    $volusd = number_format($response['ticker']['vol_usdt'], 8, ',', '.');
    $volvex = number_format($response['ticker']['vol_vex'], 8, ',', '.');
    $volvidy = number_format($response['ticker']['vol_vidy'], 8, ',', '.');
    $volvsys = number_format($response['ticker']['vol_vsys'], 8, ',', '.');
    $volwaves = number_format($response['ticker']['vol_waves'], 8, ',', '.');
    $volwnxm = number_format($response['ticker']['vol_wnxm'], 8, ',', '.');
    $volxlm = number_format($response['ticker']['vol_xlm'], 8, ',', '.');
    $volxem = number_format($response['ticker']['vol_xem'], 8, ',', '.');
    $volbtcidr = number_format($response['ticker']['vol_btc'], 8, ',', '.');
    $volten = number_format($response['ticker']['vol_ten'], 8, ',', '.');
    $volaave = number_format($response['ticker']['vol_lend'], 8, ',', '.');
    $volabyss = number_format($response['ticker']['vol_abyss'], 8, ',', '.');
    $volact = number_format($response['ticker']['vol_act'], 8, ',', '.');
    $volada = number_format($response['ticker']['vol_ada'], 8, ',', '.');
    $volalgo = number_format($response['ticker']['vol_algo'], 8, ',', '.');
    $volaoa = number_format($response['ticker']['vol_aoa'], 8, ',', '.');
    $volzrx = number_format($response['ticker']['vol_zrx'], 8, ',', '.');
    
    //vol coin usdt
    $volbtcusdt = number_format($response['ticker']['vol_btc'], 8, ',', '.');
    $volbtt = number_format($response['ticker']['vol_btt'], 8, ',', '.');
    $voleth = number_format($response['ticker']['vol_eth'], 8, ',', '.');
    $volgard = number_format($response['ticker']['vol_gard'], 8, ',', '.');
    $volnpxs = number_format($response['ticker']['vol_npxs'], 8, ',', '.');
    $volpxg = number_format($response['ticker']['vol_pxg'], 8, ',', '.');
    $volssp = number_format($response['ticker']['vol_ssp'], 8, ',', '.');

    //vol money
    $volidr = number_format($response['ticker']['vol_idr'], 0, ',', '.');
    $volusdt = number_format($response['ticker']['vol_usdt'], 0, ',', '.');
    
    //last buy sell + tserver
    $last = number_format($response['ticker']['last'], 0, ',', '.');
    $buy = number_format($response['ticker']['buy'], 0, ',', '.');
    $sell = number_format($response['ticker']['sell'], 0, ',', '.');
    $tserver = date('r', $response['ticker']['server_time']);
}
?>