
<?php if (strpos($_SERVER['HTTP_HOST'],'angulargrid.com') !== false) { ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60553231-1', 'auto');
        ga('send', 'pageview');

    </script>

<?php } else { ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60553231-2', 'auto');
        ga('send', 'pageview');

        // workaround script for Google Site Search
        _gaq = {}; 
        _gaq.push = function () { 
            ga('send', 'pageview', arguments[0][1]); 
        };

    </script>

<?php } ?>

<img style="width: 1px; height: 1px; position: fixed; top: 0px; left: 0px;" height="1px" width="1px" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/873243008/?guid=ON&amp;script=0"/>