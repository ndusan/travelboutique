<div class="entry">
    <?php if(isset($langs) && !empty($langs)):?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">page</th>
            </tr>
        </thead>
            <?php foreach($langs as $lang):?>
        <tr>
            <td>Page Name: <img src="<?php echo IMAGE_PATH.$lang['name'].'.png'; ?>" /> </td>
            <td>
                <input type="text" name="name[<?php echo $lang['name']; ?>]" value="<?php echo @($page['info'][0]['language_id'] == $lang['id'] ? $page['info'][0]['name'] : ''); ?>"/>
                <input type="hidden" name="language[<?php echo $lang['name']; ?>]" value="<?php echo $lang['id']; ?>" />
            </td>
        </tr>
            <?php endforeach; ?>
        <tr>
            <td>Level: </td>
            <td>
                <select name="level">
                    <option value="0">Parent</option>
                        <?php if(isset($levels) && !empty($levels)):?>
                            <?php foreach($levels as $level):?>
                                <?php if($level['id'] == $page['parent_id']) $sel = "selected='selected'";
                                else $sel = "";
                                ?>
                    <option <?php echo $sel; ?> value="<?php echo $level['id']; ?>">Child of <?php echo $level['link']; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Template: </td>
            <td>
                <input type="radio" name="template" value="tmp1" <?php if((isset($page['template']) && $page['template'] == 'tmp1') || !isset($page['template'])):?>checked="checked"<?php endif;?>/>
                <label>tmp1</label>
                <br/>
                <input type="radio" name="template" value="tmp2" <?php if(isset($page['template']) && $page['template'] == 'tmp2'):?>checked="checked"<?php endif;?>/>
                <label>tmp2</label>
            </td>
        </tr>
		<?php if(isset($partners) && !empty($partners)):?>
        <tr>
            <td>Partners: </td>
			<td>
				<?php foreach($partners as $partner):?>
                <input type="checkbox" name="partner[]" value="<?php echo $partner['id'];?>" <?php echo ((isset($partner['checked']) && $partner['checked'] == 1) ? "checked='checked'" : "");  ?> />
                <label><img src="<?php echo BASE_PATH.UPLOAD_PATH.'partners'.DS.$partner['id']."-".$partner['file']; ?>"  width="100" height="100"/></label><br/>
            	<?php endforeach; ?>
            </td>
        </tr>
        <?php endif;?>
    </table>
    <br/>
    <button type="submit">
			        Save changes
    </button>
    <?php endif; ?>
</div>