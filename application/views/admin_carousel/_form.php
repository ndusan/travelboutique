<div class="entry">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">Carousel</th>
            </tr>
        </thead>
        <tr>
            <td>Link: </td>
            <td>
                <input type="text" name="title" value="<?php echo @$carousel['title']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Image: <b>(300 x 285px)</b></td>
            <td>
                <input type="file" name="file" value="" />
                <?php echo (isset($carousel['file']) ? "[ ".$carousel['file']." ]" : "");?>
            </td>
        </tr>
        <?php if(isset($pages) && !empty($pages)):?>
		<tr>
            <td>To page: </td>
            <td>
                <select name="page">
                	<?php foreach($pages as $page):?>
                	<?php 	if($page['id'] == $carousel['page_id']) $sel="selected='selected'";
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