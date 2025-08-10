<?
$log = '/var/log/scan';
if (file_exists($log)) {
    $xml = new SimpleXMLElement('<nmaprun></nmaprun>');
    $xml->asXML($log);
}
?>
