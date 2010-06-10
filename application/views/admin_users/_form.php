<div class="entry">
    <br/>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="4">Add new user</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="4">
                    <button type="submit"><?php echo (isset($user['id']) ? 'Edit' : 'Add');?></button>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td class="td_title">Name: </td>
                <td><input type="text" name="firstname" id="firstname" value="<?php echo @$user['firstname'];?>"/></td>
                <td class="td_warning" id="r-firstname" style="display: none;">Required field</td>
            </tr>
            <tr>
                <td class="td_title">Surname: </td>
                <td><input type="text" name="lastname" id="lastname" value="<?php echo @$user['lastname'];?>"/></td>
                <td class="td_warning" id="r-lastname" style="display: none;">Required field</td>
            </tr>
            <tr>
                <td class="td_title">Email: </td>
                <td><input type="text" name="email" id="email" value="<?php echo @$user['email'];?>" <?php echo (isset($user['id']) ? "disabled='disabled'": "");?>/></td>
                <td class="td_warning" id="r-email" style="display: <?php echo (isset($emailInUse) ? '' : 'none');?>;" ><?php echo (isset($emailInUse) ? 'Email already in use' : 'Required field');?></td>
            </tr>
            <tr>
                <td class="td_title">Password (min 5 char.): </td>
                <td><input type="text" name="password" id="password" value="<?php echo @$user['passwd'];?>"/></td>
                <td class="td_warning" id="r-password" style="display: none;">Required field</td>
            </tr>
        </tbody>
    </table>

</div>
