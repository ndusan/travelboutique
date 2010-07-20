<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            <div class="mainPromo">
                <h1 class="borBot"><?php echo $getPageInfo['items'][0]['title'];?></h1>
                <?php echo $getPageInfo['items'][0]['content'];?>
                <form id="form-avio_karte" action="<?php echo BASE_PATH.'avio-karte'.DS.'submit'.DS; ?>" method="post">
                    <table cellpadding="0" cellspacing="0">

                        <tbody>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Ime');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[firstname]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Prezime');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[lastname]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('E-mail');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[email]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Telefon');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[tel]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label><?php echo $html->translate('Adresa')?></label>
                                    <input class="inputBig j_required" type="text" name="avio_karte[address]" value="" />
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Grad');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[city]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Drzava');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[state]" value="" />
                                </td>
                            </tr>
                            <tr><td colspan="2">&nbsp;</td></tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Polazak iz');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[start]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Dolazak u');?></label>
                                    <input class="inputSmall j_required" type="text" name="avio_karte[end]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Datum od');?></label>
                                    <input class="inputSmall j_required j_datepicker" type="text" name="avio_karte[date_from]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Datum do');?></label>
                                    <input class="inputSmall j_required j_datepicker" type="text" name="avio_karte[date_to]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Broj putnika odraslih');?></label>
                                    <select class="selectSmall j_required" name="avio_karte[passangers]">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Broj putnika senior');?></label>
                                    <select class="selectSmall j_required" name="avio_karte[seniors]">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Broj putnika deca');?></label>
                                    <select class="selectSmall j_required" name="avio_karte[children]">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </td>
                                <td>
                                    <label><?php echo $html->translate('broj putnika INF');?></label>
                                    <select class="selectSmall j_required" name="avio_karte[inf]">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Klasa');?></label>
                                    <select class="selectSmall j_required" name="avio_karte[class]">
                                        <option>ekonomska klasa</option>
                                        <option>biznis klasa</option>
                                        <option>prva klasa</option>
                                    </select>
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Vrsta karte');?></label>
                                    <select class="selectSmall j_required" name="avio_karte[ticket]">
                                        <option>jedan pravac</option>
                                        <option>povratna</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label><?php echo $html->translate('Napomena')?></label>
                                    <textarea class="inputBig" name="contact[text]" rows="4" cols="20"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="button" id="avio_karte"><?php echo $html->translate('posalji zahtev');?></button>
                                    <button type="reset"><?php echo $html->translate('odustani');?></button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
                <script type="text/javascript" charset="utf=8">
                    $(document).ready(function(){
                        $(".j_datepicker").datepicker();
                    });
                </script>
            </div>
            <div class="sidebar">
                <?php include_once(VIEW_PATH.'home'.DS.'_sidebar.php');?>
            </div>
        </div>
        <?php include_once(VIEW_PATH.'home'.DS.'_footer.php');?>
    </div>
    <div class="bottom"></div>
</div>
