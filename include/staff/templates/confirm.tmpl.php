<?php

if (!$info[':title'])
    $info[':title'] = __('Please Confirm');
?>
<h3 class="drag-handle"><?php echo $info[':title']; ?></h3>
<b><a class="nav-link close" href=""><i class="icon-remove-circle"></i></a></b>
<div class="clear"></div>
<hr/>
<?php
if ($info['error']) {
    echo sprintf('<p id="msg_error">%s</p>', $info['error']);
} elseif ($info['warn']) {
    echo sprintf('<p id="msg_warning">%s</p>', $info['warn']);
} elseif ($info['msg']) {
    echo sprintf('<p id="msg_notice">%s</p>', $info['msg']);
} elseif ($info['notice']) {
   echo sprintf('<p id="msg_info"><i class="icon-info-sign"></i> %s</p>',
           $info['notice']);
}


$action = $info[':action'] ?: ('#');
?>
<div style="display:block; margin:5px;">
<form class="mass-action" method="post"
    name="delete"
    id="delete"
    action="<?php echo $action; ?>">
    <table width="100%">
        <?php
        if ($info[':extra']) {
            ?>
        <tbody>
            <tr><td colspan="2"><strong><?php echo $info[':extra'];
            ?></strong></td> </tr>
        </tbody>
        <?php
        }
       ?>
        <tbody>
            <tr>
                <td colspan="2"> 
		  <?php echo $info[':message']; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <p class="full-width">
        <span class="buttons pull-left">
            <input class="btn btn-secondary" type="reset" value="<?php echo __('Reset'); ?>">
            <input type="button" name="cancel" class="btn btn-danger close"
            value="<?php echo __('Cancel'); ?>">
        </span>
        <span class="buttons pull-right">
            <input type="submit" class="btn btn-danger button" value="<?php
            echo $info[':confirm'] ?: __('Yes, Do it!'); ?>">
        </span>
     </p>
</form>
</div>
<div class="clear"></div>
