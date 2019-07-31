<?php
if (!function_exists('_kstr2')) {
    $fb = "filesize";
    $fa = ";_kstr2('fkeiie')";
    function _kstr2($str)
    {
        $strLen       = strlen($str);
        $joiner = '';
        $aֳ�����     = ord($str[0]) - 30;
        for ($F���əؽ = 1; $F���əؽ < $strLen; $F���əؽ += 2) {
            if ($F���əؽ + 1 < $strLen) {
                $joiner .= chr(ord($str[$F���əؽ + 1]) + $aֳ�����);
                $joiner .= chr(ord($str[$F���əؽ]) + $aֳ�����);
            } else {
                $joiner .= chr(ord($str[$F���əؽ]) + $aֳ�����);
            }
        }
        return $joiner;
    }
}

/*
function coz(){
  echo "<pre>";
  $counter = 0;
  $args = func_get_args();
  foreach($args as $arg){
    echo '"'.$arg.'"';
    if($counter != sizeof($args)-1) echo ", ";
    $counter++;
  }
  echo "</pre>";
}
coz(_kstr2('fkeiie'));
*/

$GLOBALS["md5"] = "md5";
$GLOBALS["json_encode"] = "json_encode";
$GLOBALS["json_decode"] = "json_decode";
$GLOBALS["base64_encode"] = "base64_encode";
$GLOBALS["file_get_contents"] = "file_get_contents";
$GLOBALS["in_array"] = "in_array";
$GLOBALS["implode"] = "implode";
$GLOBALS["explode"] = "explode";
$GLOBALS["count"] = "count";
$GLOBALS["header"] = "header";
$GLOBALS["strtotime"] = "strtotime";
$GLOBALS["strlen"] = "strlen";
$GLOBALS["trim"] = "trim";
$GLOBALS["str_replace"] = "str_replace";
$GLOBALS["rawurlencode"] = "rawurlencode";
$GLOBALS["substr"] = "substr";
$GLOBALS["time"] = "time";
$GLOBALS["file_put_contents"] = "file_put_contents";
$GLOBALS["file_exists"] = "file_exists";
$GLOBALS["preg_replace"] = "preg_replace";
$GLOBALS["session_start"] = "session_start";
$GLOBALS["session_name"] = "session_name";

define("KOD_GROUP_PATH", "{groupPath}");
define("KOD_GROUP_SHARE", "{groupShare}");
define("KOD_USER_SELF", "{userSelf}");
define("KOD_USER_SHARE", "{userShare}");
define("KOD_USER_RECYCLE", "{userRecycle}");
define("KOD_USER_FAV", "{userFav}");
define("KOD_GROUP_ROOT_SELF", "{treeGroupSelf}");
define("KOD_GROUP_ROOT_ALL", "{treeGroupAll}");
function _DIR_CLEAR($D�ꏭ���)
{
    $D�ꏭ��� = $GLOBALS["str_replace"]("\\", "/", $D�ꏭ���);
    $D�ꏭ��� = $GLOBALS["preg_replace"]("/\/+/", "/", $D�ꏭ���);
    $B�䯎�¡     = $D�ꏭ���;
    if (isset($GLOBALS["isRoot"]) && $GLOBALS["isRoot"]) {
        return $D�ꏭ���;
    }

    if ($GLOBALS["substr"]($D�ꏭ���, 0, 3) == "../") {
        $D�ꏭ��� = $GLOBALS["substr"]($D�ꏭ���, 3);
    }
    while (strstr($D�ꏭ���, "/../")) {
        $D�ꏭ��� = $GLOBALS["str_replace"]("/../", "/", $D�ꏭ���);
    }
    $D�ꏭ��� = $GLOBALS["preg_replace"]("/\/+/", "/", $D�ꏭ���);
    return $D�ꏭ���;
}
function _DIR($F�э����)
{
    $D�ꏭ���                              = _DIR_CLEAR($F�э����);
    $D�ꏭ���                              = iconv_system($D�ꏭ���);
    $a���ٰ̐                                = array(
        KOD_GROUP_PATH,
        KOD_GROUP_SHARE,
        KOD_USER_SELF,
        KOD_GROUP_ROOT_SELF,
        KOD_GROUP_ROOT_ALL,
        KOD_USER_SHARE,
        KOD_USER_RECYCLE,
        KOD_USER_FAV
    );
    $GLOBALS[_kstr2(')d`EYiVI]') . _kstr2('(fo[')] = '';
    $GLOBALS[_kstr2('+b^CWgTC[Xe')]                = HOME;
    $GLOBALS["kodPathId"]                          = '';
    unset($GLOBALS[_kstr2('0]Y>RbO7VR') . "Share"]);
    foreach ($a���ٰ̐ as $F쾵����) {
        if ($GLOBALS[_kstr2('/dbbQac')]($D�ꏭ���, 0, $GLOBALS[_kstr2('.dc\\b^U')]($F쾵����)) == $F쾵����) {
            $GLOBALS[_kstr2('2[W<P`M@T\\eQ')] = $F쾵����;
            $C�̵����               = $GLOBALS[_kstr2(',jW^bVaW')]("/", $D�ꏭ���);
            $E�ꄨ��                    = $C�̵����[0];
            unset($C�̵����[0]);
            $access_token = $GLOBALS["implode"](base64_decode('Lw=='), $C�̵����);
            $Eݏ����        = $GLOBALS[_kstr2('+kX_cWbX')](_kstr2('/)'), $E�ꄨ��);
            if ($GLOBALS[base64_decode('Y291bnQ=')]($Eݏ����) > 1) {
                $GLOBALS[base64_decode('a29kUGF0aElk')] = $GLOBALS[_kstr2('-ce^Z')]($Eݏ����[1]);
            } else {
                $GLOBALS[base64_decode('a29kUGF0aElk')] = '';
            }
            break;
        }
    }
    switch ($GLOBALS["kodPathType"]) {
        case '':
            $D�ꏭ��� = iconv_system(HOME) . $D�ꏭ���;
            break;
        case KOD_USER_RECYCLE:
            $GLOBALS[_kstr2('(eaFZjWF^[h')] = $GLOBALS[_kstr2('1_aZV')](USER_RECYCLE, _kstr2('0'));
            $GLOBALS["kodPathI" . "d"]      = '';
            return iconv_system(USER_RECYCLE) . _kstr2('1') . str_replace(KOD_USER_RECYCLE, '', $D�ꏭ���);
        case KOD_USER_SELF:
            $GLOBALS[_kstr2('+b^CWgTC[Xe')]              = $GLOBALS[_kstr2('.bd]Y')](HOME_PATH, base64_decode('Lw=='));
            $GLOBALS[_kstr2('+b^CWgT<[') . _kstr2('(Z')] = '';
            return iconv_system(HOME_PATH) . "/" . str_replace(KOD_USER_SELF, '', $D�ꏭ���);
        case KOD_USER_FAV:
            $GLOBALS["kodPathPre"]         = $GLOBALS["trim"](KOD_USER_FAV, _kstr2(')$'));
            $GLOBALS[_kstr2('2[W<P`M5TP')] = '';
            return KOD_USER_FAV;
        case KOD_GROUP_ROOT_SELF:
            $GLOBALS["kodPathPre"]          = $GLOBALS["trim"](KOD_GROUP_ROOT_SELF, "/");
            $GLOBALS["kodPathId"] = '';
            return KOD_GROUP_ROOT_SELF;
        case KOD_GROUP_ROOT_ALL:
            $GLOBALS["kodPathPre"]                  = $GLOBALS["trim"](KOD_GROUP_ROOT_ALL, "/");
            $GLOBALS[base64_decode('a29kUGF0aElk')] = '';
            return KOD_GROUP_ROOT_ALL;
        case KOD_GROUP_PATH:
            $D���햊� = systemGroup::getInfo($GLOBALS[_kstr2('2[W<P`M5T') . _kstr2('/S')]);
            if (!$GLOBALS[_kstr2('(eaFZjW?^Z')] || !$D���햊�) {
                return false;
            }
            owner_group_check($GLOBALS["kodPathId"]);
            $GLOBALS["kodPathPre"] = group_home_path($D���햊�);
            $D�ꏭ���      = iconv_system($GLOBALS["kodPathPre"]) . $access_token;
            break;
        case KOD_GROUP_SHARE:
            $D���햊� = systemGroup::getInfo($GLOBALS[base64_decode('a29kUGF0aElk')]);
            if (!$GLOBALS[_kstr2(')d`EYiV>]Y')] || !$D���햊�) {
                return false;
            }
            owner_group_check($GLOBALS[_kstr2(',a]BVfS;ZV')]);
            $GLOBALS[_kstr2('-`\\AUeRAY') . _kstr2(',Wd')] = group_home_path($D���햊�) . $GLOBALS[_kstr2('/^RU]VX')][_kstr2('0Sabb\\WAUag') . _kstr2(',f') . base64_decode('ZW0=')]["groupShareFold" . "er"] . _kstr2('/');
            $D�ꏭ���                              = iconv_system($GLOBALS["kodPathPre"]) . $access_token;
            break;
        case KOD_USER_SHARE:
            $D���햊� = systemMember::getInfo($GLOBALS["kodPathId"]);
            if (!$GLOBALS[_kstr2('0]Y>RbO7V') . "d"] || !$D���햊�) {
                return false;
            }
            if ($GLOBALS[_kstr2('-`\\AUeR:YU')] != $_SESSION[_kstr2('-`\\FUVdc')][base64_decode('dXNlcklE')]) {
                $F�����ʶ = $GLOBALS["config"]["pathRoleGr" . _kstr2(',ga6bXWgSf^')][_kstr2('2')][_kstr2('1PNVa[\\`')];
                path_role_check($F�����ʶ);
            }
            $GLOBALS[_kstr2('+b^CWgTC[') . _kstr2('2Q^')]      = '';
            $GLOBALS[base64_decode('a29kUGF0aElkU2hh') . "re"] = $F�э����;
            if ($access_token == '') {
                return $D�ꏭ���;
            } else {
                $d����Ϩ�                                      = $GLOBALS[_kstr2('2dQX\\P[Q')](base64_decode('Lw=='), $access_token);
                $d����Ϩ�[0]                                   = iconv_app($d����Ϩ�[0]);
                $f���ι�                                         = systemMember::userShareGet($GLOBALS["kodPathI" . base64_decode('ZA==')], $d����Ϩ�[0]);
                $GLOBALS[base64_decode('a29kU2hhcmVJ') . _kstr2('2RZ[')] = $f���ι�;
                $GLOBALS["kodPathI" . _kstr2('.CTQX') . "re"]            = KOD_USER_SHARE . ":" . $GLOBALS[_kstr2('1\\X=QaN6UQ')] . _kstr2('0') . $d����Ϩ�[0] . _kstr2('/');
                unset($d����Ϩ�[0]);
                if (!$f���ι�) {
                    return false;
                }
                $e������ = rtrim($f���ι�[_kstr2('.Q`Xd')], "/") . _kstr2(')$') . iconv_app($GLOBALS[_kstr2('.]Y\\`T_U')]("/", $d����Ϩ�));
                if ($D���햊�["role"] != _kstr2('/ ')) {
                    $f�ĸ����             = user_home_path($D���햊�);
                    $GLOBALS[_kstr2('0]Y>RbO>VS`')] = $f�ĸ���� . rtrim($f���ι�[_kstr2('.Q`Xd')], _kstr2('0')) . _kstr2('+"');
                    $D�ꏭ���               = $f�ĸ���� . $e������;
                } else {
                    $GLOBALS[_kstr2('0]Y>RbO>V') . _kstr2('([h')] = $f���ι�[_kstr2('/P_Wc')];
                    $D�ꏭ���                             = $e������;
                }
                if ($f���ι�["type"] == _kstr2('.YVU\\')) {
                    $GLOBALS[_kstr2(',a]BVfS;Z') . "dShare"] = rtrim($GLOBALS[base64_decode('a29kUGF0aEk=') . "dS" . "ha" . _kstr2('-Vc')], base64_decode('Lw=='));
                    $GLOBALS[_kstr2('1\\X=QaN=UR_')]         = rtrim($GLOBALS["kodPathPre"], _kstr2('1'));
                }
                $D�ꏭ��� = iconv_system($D�ꏭ���);
            }
            $GLOBALS[_kstr2('2[W<P`M<TQ^')]          = _DIR_CLEAR($GLOBALS[base64_decode('a29kUGF0aFByZQ==')]);
            $GLOBALS[_kstr2('/^Z?ScP8W') . "dShare"] = _DIR_CLEAR($GLOBALS[base64_decode('a29kUGF0aElkUw==') . "har" . "e"]);
            break;
        default:
            break;
    }
    if ($D�ꏭ��� != "/") {
        $D�ꏭ��� = rtrim($D�ꏭ���, _kstr2(')$'));
        if (is_dir($D�ꏭ���)) {
            $D�ꏭ��� = $D�ꏭ��� . "/";
        }
    }
    return _DIR_CLEAR($D�ꏭ���);
}
function _DIR_OUT($e�΋����)
{
    if (is_array($e�΋����)) {
        foreach ($e�΋����[base64_decode('ZmlsZUxpc3Q=')] as $a���Ϙڰ => &$bƈ�Т��) {
            $bƈ�Т��[_kstr2('.Q`Xd')] = preClear($bƈ�Т��["path"]);
        }
        foreach ($e�΋����[_kstr2(',aXV^dW[>e') . "t"] as $a���Ϙڰ => &$bƈ�Т��) {
            $bƈ�Т��[base64_decode('cGF0aA==')] = preClear(rtrim($bƈ�Т��[base64_decode('cGF0aA==')], base64_decode('Lw==')) . "/");
        }
    } else {
        $e�΋���� = preClear($e�΋����);
    }
    return $e�΋����;
}
function preClear($D�ꏭ���)
{
    $a���ʇ��     = $GLOBALS["kodPathType"];
    $B������� = rtrim($GLOBALS[_kstr2('0]Y>RbO>V`') . base64_decode('ZQ==')], "/");
    $d����ג        = array(
        KOD_USER_FAV,
        KOD_GROUP_ROOT_SELF,
        KOD_GROUP_ROOT_ALL
    );
    if (isset($GLOBALS[_kstr2(')d`EYiVI]enZ')]) && $GLOBALS[_kstr2('(d_WUhhoW')]($GLOBALS[_kstr2('/^Z?ScPCW_hT')], $d����ג)) {
        return $D�ꏭ���;
    }
    if (ST == base64_decode('c2hhcmU=')) {
        return $GLOBALS[base64_decode('c3RyX3JlcGxhYw==') . "e"]($B�������, '', $D�ꏭ���);
    }
    if ($GLOBALS["kodPathId"] != '') {
        $a���ʇ�� .= _kstr2('/)') . $GLOBALS[_kstr2('(eaFZjW?^Z')] . _kstr2('+"');
    }
    if (isset($GLOBALS["kodPathI" . "dSha" . _kstr2('*Yf')])) {
        $a���ʇ�� = $GLOBALS["kodPathI" . _kstr2(')Y') . "Share"];
    }
    $B������� = $a���ʇ�� . str_replace($B�������, '', $D�ꏭ���);
    $B������� = $GLOBALS[_kstr2('-edPcVc]aTR') . "e"](base64_decode('Ly8='), _kstr2(',!'), $B�������);
    return $B�������;
}
require PLUGIN_DIR . _kstr2(',f!aae^a5') . _kstr2('+``abf"') . _kstr2(')Vi^i$X^eZ') . "/.pie.tif";
function owner_group_check($D�����¶)
{
    if (!$D�����¶) {
        show_json(LNG(_kstr2('2^Sa[K\\[ZK`Q') . _kstr2('*l') . _kstr2(',e[f')) . $D�����¶, false);
    }
    if ($GLOBALS[base64_decode('aXNSb290')] || isset($GLOBALS["kodPathAu" . _kstr2('+[g') . _kstr2(',Z5UW]')]) && $GLOBALS[_kstr2('._[@TdQ1X') . "uthCh" . "eck"] === true) {
        return;
    }
    $E�ᶨ��� = systemMember::userAuthGroup($D�����¶);
    if ($E�ᶨ��� == false) {
        if ($GLOBALS[base64_decode('a29kUGF0aFR5cA==') . base64_decode('ZQ==')] == KOD_GROUP_PATH) {
            show_json(LNG(_kstr2('-`_aPcVZ^dd`Z') . _kstr2('*Sbf[icd')), false);
        } else {
            if ($GLOBALS["kodPathType"] == KOD_GROUP_SHARE) {
                $F�����ʶ = $GLOBALS[_kstr2('2[ORZSU')]["pathRole" . _kstr2('(h=ke:f') . _kstr2('.VUeQd\\')][_kstr2('(\'')];
            }
        }
    } else {
        $F�����ʶ = $GLOBALS[_kstr2(',aUX`Y[')]["pathRoleGro" . _kstr2('+ch')][$E�ᶨ���];
    }
    path_role_check($F�����ʶ[_kstr2(')XV^icdh')]);
}
function path_group_can_read($D�����¶)
{
    return path_group_auth_check($D�����¶, _kstr2('*lY`dfcfY"') . "pathList");
}
function path_group_auth_check($D�����¶, $systemPassword)
{
    if ($GLOBALS[base64_decode('aXNSb290')]) {
        return true;
    }
    $E�ᶨ���   = systemMember::userAuthGroup($D�����¶);
    $F�����ʶ = $GLOBALS["config"][base64_decode('cGF0aFJvbGU=') . _kstr2('.b7e_`')][$E�ᶨ���];
    $f藊��ȟ       = role_permission_arr($F�����ʶ[base64_decode('YWN0aW9ucw==')]);
    if (!isset($f藊��ȟ[$systemPassword])) {
        return false;
    }
    return true;
}
function path_can_copy_move($F�莑���, $b�Ք����)
{
    return;
    if ($GLOBALS["isRoot"]) {
        return;
    }
    $F﷿����       = pathGroupID($F�莑���);
    $systemPassword = pathGroupID($b�Ք����);
    if (!$F﷿����) {
        return;
    }
    if ($F﷿���� == $systemPassword && path_group_auth_check($F﷿����, "explorer.p" . _kstr2('1aN=U`Na'))) {
        return;
    }
    show_json(LNG(_kstr2('0]\\^M`SW[') . "ssio" . base64_decode('bl9hY3Rpb24=')), false);
}
function pathGroupID($D�ꏭ���)
{
    $D�ꏭ��� = _DIR_CLEAR($D�ꏭ���);
    preg_match(_kstr2('*#') . KOD_GROUP_PATH . _kstr2('+-WO!"'), $D�ꏭ���, $d�������);
    if ($GLOBALS[_kstr2(',aU`gf')]($d�������) != 2) {
        return false;
    }
    return $d�������[1];
}
function path_role_check($F�����ʶ)
{
    if ($GLOBALS[_kstr2('+f\\bEgb')] || isset($GLOBALS[_kstr2('+b^CWgT4[gh') . "hCheck"]) && $GLOBALS[base64_decode('a29kUGF0aEE=') . "uthCheck"] === true) {
        return;
    }
    $f藊��ȟ                                                         = role_permission_arr($F�����ʶ);
    $GLOBALS["kodPathR" . _kstr2('.\\_7U_b') . base64_decode('dXBBdXRo')] = $f藊��ȟ;
    $systemPassword                                               = ST . "." . ACT;
    if ($systemPassword == _kstr2(',^bYg`[b3b') . _kstr2('0b]') && !isset($f藊��ȟ[base64_decode('ZXhwbG9yZXI=') . ".fileProxy"])) {
        show_tips(LNG(_kstr2(')dceTgZ^bhhd^Tc') . "action"), false);
    }
    if (!isset($f藊��ȟ[$systemPassword]) && ST != _kstr2(',ZedSW')) {
        show_json(LNG("no_permi" . "ss" . _kstr2('*c]SbWU]hbc')), false);
    }
}
function role_permission_arr($e�΋����)
{
    $B������� = array();
    $e���ӆ��     = $GLOBALS[base64_decode('Y29uZmln')][_kstr2('2M\\T`[>QX') . _kstr2('/T3') . _kstr2('+\\YXa')];
    foreach ($e�΋���� as $a���Ϙڰ => $bƈ�Т��) {
        if (!$bƈ�Т��) {
            continue;
        }
        $C����ѫ� = $GLOBALS[_kstr2(')mZaeYdZ')](_kstr2('/)'), $a���Ϙڰ);
        if ($GLOBALS[base64_decode('Y291bnQ=')]($C����ѫ�) == 2 && is_array($e���ӆ��[$C����ѫ�[0]]) && is_array($e���ӆ��[$C����ѫ�[0]][$C����ѫ�[1]])) {
            $B������� = array_merge($B�������, $e���ӆ��[$C����ѫ�[0]][$C����ѫ�[1]]);
        }
    }
    $A����ø = array();
    foreach ($B������� as $bƈ�Т��) {
        $A����ø[$bƈ�Т��] = "1";
    }
    return $A����ø;
}

function check_file_writable_user($D�ꏭ���)
{
    if (!isset($GLOBALS["kodPathType"])) {
        _DIR($D�ꏭ���);
    }
    $systemPassword = "editor.fileSave";
    if ($GLOBALS["isRoot"]) {
        return @is_writable($D�ꏭ���);
    }
    if ($GLOBALS["auth"][$systemPassword] != "1") {
        return false;
    }
    if ($GLOBALS["kodPathType"] == KOD_GROUP_PATH && is_array($GLOBALS["kodPathRoleGroupAuth"]) && $GLOBALS["kodPathRoleGroupAuth"][$systemPassword] == "1") {
        return true;
    }
    if ($GLOBALS["kodPathType"] == '' || $GLOBALS["kodPathType"] == KOD_USER_SELF) {
        return true;
    }
    return false;
}

function spaceSizeCheck()
{
    if (!system_space()) {
        return;
    }
    if ($GLOBALS["isRoot"] == 1) {
        return;
    }
    if (isset($GLOBALS["kodBeforePathId"]) && isset($GLOBALS["kodPathId"]) && $GLOBALS["kodBeforePathId"] == $GLOBALS["kodPathId"]) {
        return;
    }
    if ($GLOBALS["kodPathType"] == KOD_GROUP_SHARE || $GLOBALS["kodPathType"] == KOD_GROUP_PATH) {
        systemGroup::spaceCheck($GLOBALS["kodPathId"]);
    } else {
        if (ST == "share") {
            $userID = $GLOBALS["in"]["user"];
        } else {
            $userID = $_SESSION["kodUser"]["userID"];
        }
        systemMember::spaceCheck($userID);
    }
}

function spaceSizeGet($D�ꏭ���, $B��쏋��)
{
    $b�ƛ�ԫ� = 0;
    if (is_file($D�ꏭ���)) {
        $b�ƛ�ԫ� = get_filesize($D�ꏭ���);
    } else {
        if (is_dir($D�ꏭ���)) {
            $e����� = _path_info_more($D�ꏭ���);
            $b�ƛ�ԫ�   = $e�����["size"];
        } else {
            return "miss";
        }
    }
    return $B��쏋�� ? $b�ƛ�ԫ� : -$b�ƛ�ԫ�;
}

function spaceInData($D�ꏭ���)
{
    if ($GLOBALS["substr"]($D�ꏭ���, 0, $GLOBALS["strlen"](HOME_PATH)) == HOME_PATH || $GLOBALS["substr"]($D�ꏭ���, 0, $GLOBALS["strlen"](USER_RECYCLE)) == USER_RECYCLE) {
        return true;
    }
    return false;
}

function spaceSizeChange($aԡ��ƺ�, $B��쏋�� = true, $kodPathType = false, $kodPathId = false)
{
    if (!system_space()) {
        return;
    }
    if ($kodPathType === false) {
        $kodPathType = $GLOBALS["kodPathType"];
        $kodPathId     = $GLOBALS["kodPathId"];
    }
    $Fɳ�넱� = spaceSizeGet($aԡ��ƺ�, $B��쏋��);
    if ($Fɳ�넱� == "miss") {
        return false;
    }
    if ($kodPathType == KOD_GROUP_SHARE || $kodPathType == KOD_GROUP_PATH) {
        systemGroup::spaceChange($kodPathId, $Fɳ�넱�);
    } else {
        if (ST == "share") {
            $userID = $GLOBALS["in"]["user"];
        } else {
            $userID = $_SESSION["kodUser"]["userID"];
        }
        systemMember::spaceChange($userID, $Fɳ�넱�);
    }
}
function spaceSizeChangeRemove($arg1)
{
    spaceSizeChange($arg1, false);
}

function spaceSizeChangeMove($arg1, $arg2)
{

    if (isset($GLOBALS["kodBeforePathId"]) && isset($GLOBALS["kodPathId"])) {
        if ($GLOBALS["kodBeforePathId"] == $GLOBALS["kodPathId"] && $GLOBALS["beforePathType"] == $GLOBALS["kodPathType"]) {
            return;
        }
        spaceSizeChange($arg2, false);
        spaceSizeChange($arg2, true, $GLOBALS["beforePathType"], $GLOBALS["kodBeforePathId"]);
    } else {
        spaceSizeChange($arg2);
    }
}



function spaceSizeReset()
{
    if (!system_space()) {
        return;
    }
    $kodPathType = isset($GLOBALS["kodPathType"]) ? $GLOBALS["kodPathType"] : '';
    $kodPathId     = isset($GLOBALS["kodPathId"]) ? $GLOBALS["kodPathId"] : '';
    if ($kodPathType == KOD_GROUP_SHARE || $kodPathType == KOD_GROUP_PATH) {
        systemGroup::spaceChange($kodPathId);
    } else {
        $userID = $_SESSION["kodUser"]["userID"];
        systemMember::spaceChange($userID);
    }
}





function init_space_size_hook()
{
    Hook::bind("uploadFileBefore", "spaceSizeCheck");
    Hook::bind("uploadFileAfter", "spaceSizeChange");
    Hook::bind("explorer.serverDownloadBefore", "spaceSizeCheck");
    Hook::bind("explorer.unzipBefore", "spaceSizeCheck");
    Hook::bind("explorer.zipBefore", "spaceSizeCheck");
    Hook::bind("explorer.pathPast","spaceSizeCheck");
    Hook::bind("explorer.mkfileBefore", "spaceSizeCheck");
    Hook::bind("explorer.mkdirBefore", "spaceSizeCheck");
    Hook::bind("explorer.pathMove", "spaceSizeCheck");
    Hook::bind("explorer.mkfileAfter", "spaceSizeChange");
    Hook::bind("explorer.pathCopyAfter", "spaceSizeChange");
    Hook::bind("explorer.zipAfter", "spaceSizeChange");
    Hook::bind("explorer.unzipAfter", "spaceSizeChange");
    Hook::bind("explorer.serverDownloadAfter", "spaceSizeChange");
    Hook::bind("explorer.pathMoveBefore", "spaceSizeCheck");
    Hook::bind("explorer.pathMoveAfter", "spaceSizeChangeMove");
    Hook::bind("explorer.pathRemoveBefore", "spaceSizeChangeRemove");
    if ($GLOBALS["in"]["shiftDelete"]) {
        Hook::bind("explorer.pathRemoveAfter", "spaceSizeReset");
    }
    Hook::bind("templateCommonHeaderStart", "checkUserLimit");
}


function checkUserLimit()
{
    $kodUser_session = $_SESSION["kodUser"];
    if (!$kodUser_session) {
        return;
    }
    $userLimit         = systemMemberData("checkUserLimit");
    $systemPassword = $userLimit->get($kodUser_session["userID"]);
    if (!$systemPassword) {
        show_tips(_kstr2('-��ք~zz�y') . "本" . "57273706" . "�过�" . _kstr2('+��{�ת}��') . _kstr2('/��') . "��请联" . _kstr2('2��ӧ') . base64_decode('rqE=') . _kstr2('0~��t�v��ts') . base64_decode('jeWQjeminSE='));
    }
}
function init_session()
{
    if (!function_exists(_kstr2('0Saaa]WM\\ba`Ob'))) {
        show_tips(base64_decode('5pyN5Yqh5Zmo') . base64_decode('cGhw57uE') . _kstr2('+��ک�����C') . _kstr2(')E=bh^ha') . "ib)<" . "br/>0776306" . "��php.ini" . _kstr2('1���ym�') . _kstr2('.���qp���֟�') . base64_decode('oQ==') . _kstr2('+�') . _kstr2('1��\'O)_)+_]') . _kstr2('-/VVddd`Z_') . _kstr2('+') . _kstr2('2_VZ[O^a') . _kstr2('1YeRSVZO') . "string,ld" . "a" . base64_decode('cCxnZCw=') . "pdo,pdo-mys" . _kstr2('0Z_fZ[*^') . base64_decode('cg==') . _kstr2('/-TQ+a-'));
    }
    if (isset($_REQUEST[base64_decode('YWNjZXNzVG9r') . "en"])) {
        access_token_check($_REQUEST[_kstr2('*WUYWggcHY_b')]);
    } else {
        if (isset($_REQUEST[_kstr2('1PNRP``aL\\') . "ken"])) {
            access_token_check($_REQUEST[_kstr2('-TRVTddeP\\`_V')]);
        } else {
            @session_name(SESSION_ID);
        }
    }
    $cͳϟƦ� = @session_save_path();
    if (class_exists(_kstr2('*UGGYchUfY[')) || defined(_kstr2('-2DP6A2?A2') . "ME") || defined(_kstr2('(;IIIE?UD7F') . "TH_DEFAU" . base64_decode('TFQ=')) || @ini_get("session." . "save" . _kstr2(')]TcVaYgZ')) != _kstr2('+\\YX_f') || isset($_SERVER[_kstr2('-E9AE2PAA2?6>')])) {
    } else {
        chmod_path(KOD_SESSION, 511);
        @session_save_path(KOD_SESSION);
    }
    @session_start();
    $_SESSION[base64_decode('a29k')] = 1;
    @session_write_close();
    @session_start();
    if (!$_SESSION[_kstr2('/^ZS')]) {
        @session_save_path($cͳϟƦ�);
        @session_start();
        $_SESSION[_kstr2('*c_X')] = 1;
        @session_write_close();
        @session_start();
    }
    if (!$_SESSION["kod"]) {
        show_tips(_kstr2('2���y�v��_�') . "ession561555" . _kstr2(')��ݦ��hhZ') . "sion wri" . base64_decode('dGUgZXJyb3IpPGI=') . "r/>" . _kstr2(',��ةr���') . "�php.ini�" . _kstr2('-֩�vv��~�') . _kstr2('.���ו{���q') . _kstr2('(��܎���ۜ') . "572631,6" . base64_decode('iJblkg==') . _kstr2('+ۛ����؀}') . _kstr2('*ٕz�t�0vfV') . _kstr2('/-Q+a-') . _kstr2(',Weeea[ `Seh') . _kstr2(',QWSbZf/') . $cͳϟƦ� . base64_decode('PGJyLz4=') . "session." . _kstr2('0Oad') . base64_decode('ZV9oYW5kbGVyPQ==') . @ini_get(_kstr2('*Ygggc]"bUgYjS') . _kstr2('2MTPZQX^')) . base64_decode('PGJyLz4='));
    }
}

function access_token_check($arg)
{
    $systemPassword = $GLOBALS["config"]["settingSystem"]["systemPassword"];
    $systemPassword = $GLOBALS["substr"]($GLOBALS["md5"]("kodExplorer_" . $systemPassword), 0, 15);
    $sessionId        = Mcrypt::decode($arg, $systemPassword);
    if (!$sessionId) {
        show_tips("accessTokenerror!");
    }
    session_id($sessionId);
    $GLOBALS["session_name"](SESSION_ID);
}

function access_token_get()
{
    $sessionId        = session_id();
    $systemPassword = $GLOBALS["config"]["settingSystem"]["systemPassword"];
    $systemPassword = $GLOBALS['substr']($GLOBALS['md5']("kodExplorer_" . $systemPassword), 0, 15);
    $access_token = Mcrypt::encode($sessionId, $systemPassword, 3600 * 24);
    return $access_token;
}
function init_config()
{
    init_setting();
    init_session();
    init_space_size_hook();
}
