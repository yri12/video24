<html>
<script language="JavaScript" src="http://j.maxmind.com/app/geoip.js"></script>
<script>
var country= geoip_country_code();

if(country  == "US")
{
              window['location'] = 'wtfvidsosusa.php?title=' + title +'&mbi=' + mbi + '&uid=' + uid;
}
else {
              window['location'] = 'wtfvidsos5.php?title=' + title +'&mbi=' + mbi + '&uid=' + uid;
}              