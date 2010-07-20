<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            <div style="width:100%" class="mainPromo">
                <h1 class="borBot"><?php echo $getPageInfo['items'][0]['title'];?></h1>
                <iframe style="margin:0 0 30px 0" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=115572436179232016372.00048bd4f13f5f7cc3c00&amp;ll=44.830765,20.461221&amp;spn=0.010652,0.025792&amp;z=15&amp;iwloc=00048bd4f672ac2a41b50&amp;output=embed"></iframe>
                <form id="form-contact" action="<?php echo BASE_PATH.'contact'.DS.'submit'.DS; ?>" method="post">
                    <table cellpadding="0" cellspacing="0">

                        <tbody>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Ime');?></label>
                                    <input class="inputSmall j_required" type="text" name="contact[firstname]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Prezime')?></label>
                                    <input class="inputSmall j_required" type="text" name="contact[lastname]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Telefon');?></label>
                                    <input class="inputSmall j_required" type="text" name="contact[tel]" value="" />
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label><?php echo $html->translate('Tekst poruke')?></label>
                                    <textarea class="inputBig" name="contact[text]" rows="4" cols="20"></textarea>
                                </td>
                                <td rowspan="4">
                                    <?php echo $getPageInfo['items'][0]['content'];?>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="button" id="contact"><?php echo $html->translate('posalji zahtev');?></button>
                                    <button type="reset"><?php echo $html->translate('odustani');?></button>
                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </form>

            </div>
            <!-- div class="sidebar">
            <?php include_once(VIEW_PATH.'home'.DS.'_sidebar.php');?>
            </div -->
        </div>
        <?php include_once(VIEW_PATH.'home'.DS.'_footer.php');?>
    </div>
    <div class="bottom"></div>
</div>


