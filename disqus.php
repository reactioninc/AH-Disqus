<div id="disqus_thread"></div>
<script>
window.addEventListener('message', receiveMessage, false);
function receiveMessage(event)
{
    if (event.data) {
        var msg;
        try {
            msg = JSON.parse(event.data);
        } catch (err) {
            // Do nothing
        }
        if (!msg)
            return false;

        if (msg.name === 'resize') {
            window.parent.postMessage({
              sentinel: 'amp',
              type: 'embed-size',
              height: msg.data.height
            }, '*');
        }
    }
}
</script>
<script>
    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if(pair[0] == variable){return pair[1];}
        }
        return(false);
    }
    var disqus_config = function () {
        this.page.url = decodeURIComponent(getQueryVariable("url"));  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = decodeURIComponent(getQueryVariable("identifier")); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');

        s.src = '//androidheadlines.disqus.com/embed.js';

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>