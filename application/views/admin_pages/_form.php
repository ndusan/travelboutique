<div class="entry">
    <br/>
    <?php if(isset($langs) && !empty($langs)):?>
    <table cellpadding="0" cellspacing="0">
        <?php foreach($langs as $lang):?>
        <tr>
            <td>Page Name: <img src="<?php echo IMAGE_PATH.$lang['name'].'.png'; ?>" /> </td>
            <td><input type="text" name="name[<?php echo $lang['name']; ?>" value=""/></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td>Level: </td>
            <td>
            	<select name="level">
            		<?php foreach($levels as $level):?>
            		<option value="0">Parent</option>
            		<option value="<?php $level['id']; ?>">Child of <?php echo $level['name']; ?></option>
            		<?php endforeach; ?>
            	</select>
            </td>
        </tr>
        <tr>
            <td>Template: </td>
            <td>
            	<input type="radio" name="template" value="tmp1" checked="checked"/>
            	<label>tmp1</label>
            	<br/>
            	<input type="radio" name="template" value="tmp1"/>
            	<label>tmp2</label>
            </td>
        </tr>
    </table>
    <br/>
    <button type="submit">
        Create page
    </button>
    <?php endif; ?>
</div>
