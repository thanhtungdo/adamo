﻿<?php
#################################################################
## MyPHPAuction 2009															##
##-------------------------------------------------------------##
## Copyright ©2009 MyPHPAuction. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

  if (!defined('INCLUDED')) {
    die("Access Denied");
  }
?>
<br>
<table width="100%" border="0" cellpadding="3" cellspacing="2" class="border">
  <tr>
    <td colspan="8" class="c7"><b><?php echo MSG_MM_SCHEDULED_AUCTIONS; ?></b> (<?php echo $nb_items; ?> <?php echo MSG_ITEMS; ?>)
    </td>
  </tr>
  <tr>
    <td class="membmenu"><?php echo MSG_AUCTION_ID; ?><br><?php echo $page_order_auction_id; ?></td>
    <td class="membmenu"><?php echo MSG_ITEM_TITLE; ?><br><?php echo $page_order_itemname; ?></td>
    <td class="membmenu" align="center"><?php echo GMSG_START_TIME; ?><br><?php echo $page_order_start_time; ?></td>
    <td class="membmenu" align="center"><?php echo GMSG_END_TIME; ?><br><?php echo $page_order_end_time; ?></td>
    <td class="membmenu" align="center"><?php echo MSG_AUTO_RELIST; ?></td>
    <td class="membmenu" align="center"><?php echo GMSG_OPTIONS; ?></td>
  </tr>
  <tr class="c5">
    <td><img src="themes/<?php echo $setts['default_theme']; ?>/img/pixel.gif" width="60" height="1"></td>
    <td width="100%"><img src="themes/<?php echo $setts['default_theme']; ?>/img/pixel.gif" width="1" height="1"></td>
    <td><img src="themes/<?php echo $setts['default_theme']; ?>/img/pixel.gif" width="80" height="1"></td>
    <td><img src="themes/<?php echo $setts['default_theme']; ?>/img/pixel.gif" width="80" height="1"></td>
    <td><img src="themes/<?php echo $setts['default_theme']; ?>/img/pixel.gif" width="50" height="1"></td>
    <td><img src="themes/<?php echo $setts['default_theme']; ?>/img/pixel.gif" width="140" height="1"></td>
  </tr>
  <?php echo $scheduled_auctions_content; ?>
  <?php if ($nb_items > 0) { ?>
      <tr>
        <td colspan="8" align="center" class="contentfont"><?php echo $pagination; ?></td>
      </tr>
    <?php } ?>
</table>

