<?php
/**
* Plugin Name: Blue Sky Chat
* Plugin URI: https://www.blueskychat.com
* Description: This plugin is a Sky Chat modification for multisite wordpress websites
* Version: 1.3
* Author: Blue Sky Chat
* Author URI: https://www.blueskychat.com
* License: GPL12
*/

add_action( 'wp_footer', 'blueskychat_scripts', 500 );

function blueskychat_scripts() { ?>


    <!-- Start of Blue Sky Chat Plugin (https:<span class="code-comments">//www.blueskychat.com) code -->
    </span><script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 8653536;
        window.__lc.chat_between_groups = false;
        (function() {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
    </script>
    <!-- End of Blue Sky Chat code -->



<?php
}
?>