<?
    $log = '/var/log/wakeonlan/scan.xml';
    if (file_exists($log))
        file_put_contents($log, '');
    $ip = $_POST['ip'];
    $net = substr_replace($ip ,'',-1).'0/24';
    $cmd = "/usr/bin/nmap -sn -oX $log --exclude ".escapeshellarg($ip).' '.escapeshellarg($net);
    shell_exec($cmd);
?>