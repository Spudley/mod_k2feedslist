<?php
/**
 * @package     mod_k2tagfilter
 *
 * @copyright   Copyright (C) 2016 SFW Ltd
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="k2feedslist">
    <?php
    foreach ($feedList as $feed) {
        print "<div><a class='ubUserFeedIcon' href='{$feed['link']}' title='Subscribe to this RSS feed'><span>Subscribe to this RSS feed</span></a> <a href='{$feed['link']}'>{$feed['name']}</a></div>";
    }
    ?>
</div>
