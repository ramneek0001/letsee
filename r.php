	<script>
    function getURLParameter(sParam) {
    	var sPageURL = window.location.search.substring(1);
    	var sURLVariables = sPageURL.split(&quot;&amp;&quot;);
    	for (var i = 0; i &lt; sURLVariables.length; i++)  {
          var sParameterName = sURLVariables[i].split(&#39;=&#39;);
          if (sParameterName[0] == sParam) {
              return sParameterName[1];
          }
      	}
    	return null;
	}
	window.location.href = &quot;https://www.youtube.com/embed/&quot; + getURLParameter(&quot;videoId&quot;) + &quot;?disablekb=1&amp;playsinline=1&amp;enablejsapi=1&amp;widgetid=1&amp;origin=*&quot;;
	</script>
