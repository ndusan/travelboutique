<div class="entry">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">Add new partner</th>
            </tr>
        </thead>
        <tr>
            <td>Link: </td>
            <td>
                <input type="text" name="link" value="<?php echo @$partner['link']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Image: </td>
            <td>
                <input type="file" name="file" value="" />
                <?php echo (isset($partner['file']) ? "[ ".$partner['file']." ]" : "");?>
            </td>
        </tr>
    </table>
    <br/>
    <button type="submit">
			        Save
    </button>
</div>