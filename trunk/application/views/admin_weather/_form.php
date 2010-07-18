<div class="entry">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">Weather</th>
            </tr>
        </thead>
        <tr>
            <td>City: </td>
            <td>
                <input type="text" name="city" value="<?php echo @$weather['city']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Link: </td>
            <td>
                <input type="text" name="link" value="<?php echo @$weather['link']; ?>"/>
            </td>
        </tr>
    </table>
    <br/>
    <button type="submit">
			        Save
    </button>
</div>