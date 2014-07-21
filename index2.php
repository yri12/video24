<html>
<script language="JavaScript" src="http://j.maxmind.com/app/geoip.js"></script>
<script type="text/javascript">var $_GET = {};document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {function decode(s){return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});var title= $_GET['title']; var mbi= $_GET['mbi'];  var uid= $_GET['uid'];</script>

<script>
var country= geoip_country_code();

if(country  == "US")
{
              window['location'] = 'wtfvidsosusa.php?title=' + title +'&mbi=' + mbi + '&uid=' + uid;
}
else {
              window['location'] = 'wtfvidsos5.php?title=' + title +'&mbi=' + mbi + '&uid=' + uid;
}    
</script>

</html>