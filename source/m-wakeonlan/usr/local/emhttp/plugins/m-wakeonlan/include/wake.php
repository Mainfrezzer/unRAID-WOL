<?
$ifname = escapeshellarg($_POST['ifname']);
$ipaddress = escapeshellarg($_POST['ip']);
$mac    = escapeshellarg($_POST['mac']);
$cmd = "etherwake -i $ifname $mac && etherwake -b $mac $ipaddress";
shell_exec($cmd);
?>
