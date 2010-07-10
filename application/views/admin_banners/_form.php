<div class="entry">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">Banners</th>
            </tr>
        </thead>
        <tr>
            <td>Link: </td>
            <td>
                <input type="text" name="title" value="<?php echo @$banner['title']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Image (195 x 85px): </td>
            <td>
                <input type="file" name="file" value="" />
                <?php echo (isset($banner['file']) ? "[ ".$banner['file']." ]" : "");?>
            </td>
        </tr>
        <?php if(isset($pages) && !empty($pages)):?>
		<tr>
            <td>To page: </td>
            <td>
                <select name="page">
                	<?php foreach($pages as $page):?>
                	<?php 	if($page['id'] == $banner['page_id']) $sel="selected='selected'";
                			else $sel = "";
                	?>
                	<option <?php echo $sel; ?> value="<?php echo $page['id'];?>"><?php echo $page['link'];?></option>
                	<?php endforeach;?>
                </select>
            </td>
        </tr>
        <?php endif;?>
    </table>
    <br/>
    <button type="submit">
			        Save
    </button>
</div>