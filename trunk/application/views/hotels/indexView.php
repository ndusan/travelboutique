<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            <div class="mainPromo">
                <h1 class="borBot"><?php echo $getPageInfo['items'][0]['title'];?></h1>
                <?php echo $getPageInfo['items'][0]['content'];?>
                <form id="form-rent_a_car" action="<?php echo BASE_PATH.'rent-a-car'.DS.'submit'.DS;?>" method="post" >
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Ime');?></label>
                                    <input class="inputSmall" type="text" name="rent_a_car[firstname]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Prezime');?></label>
                                    <input class="inputSmall j_required" type="text" name="rent_a_car[lastname]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('E-mail');?></label>
                                    <input class="inputSmall j_required" type="text" name="rent_a_car[email]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Telefon');?></label>
                                    <input class="inputSmall j_required" type="text" name="rent_a_car[tel]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label><?php echo $html->translate('Adresa');?></label>
                                    <input class="inputBig j_required" type="text" name="rent_a_car[address]" value="" />
                                </td>

                            </tr>
                            <tr><td colspan="2" class="borBot">&nbsp;</td></tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Grad');?></label>
                                    <input class="inputSmall j_required" type="text" name="rent_a_car[city]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Drzava');?></label>
                                    <input class="inputSmall j_required" type="text" name="rent_a_car[state]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Drzava preuzimanja');?></label>
                                    <select class="inputSmall j_required" name="rent_a_car[state_take]" size="">
                                        <option value="Argentina">Argentina</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austrija">Austrija</option>
                                        <option value="Belgija">Belgija</option>
                                        <option value="Bosna i Hercegovina">Bosna i Hercegovina</option>
                                        <option value="Bugarska">Bugarska</option>
                                        <option value="Češka">Češka</option>
                                        <option value="Čile">Čile</option>
                                        <option value="Danska">Danska</option>
                                        <option value="Dominikanska Republika">Dominikanska Republika</option>
                                        <option value="Egipat">Egipat</option>
                                        <option value="Finska">Finska</option>
                                        <option value="Francuska">Francuska</option>
                                        <option value="Grčka">Grčka</option>
                                        <option value="Holandija">Holandija</option>
                                        <option value="Hrvatska">Hrvatska</option>
                                        <option value="Irska">Irska</option>
                                        <option value="Island">Island</option>
                                        <option value="Italija">Italija</option>
                                        <option value="Izrael">Izrael</option>
                                        <option value="Južna Afrika">Južna Afrika</option>
                                        <option value="Kanada ">Kanada</option>
                                        <option value="Kanasrka Ostrva">Kanasrka Ostrva</option>
                                        <option value="Kipar">Kipar</option>
                                        <option value="Korzika">Korzika</option>
                                        <option value="Kosta Rika">Kosta Rika</option>
                                        <option value="Litvanija">Litvanija</option>
                                        <option value="Luksemburg">Luksemburg</option>
                                        <option value="Mađarska">Mađarska</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Maroko">Maroko</option>
                                        <option value="Mauricius">Mauricius</option>
                                        <option value="Meksiko">Meksiko</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Norveška">Norveška</option>
                                        <option value="Novi Zeland">Novi Zeland</option>
                                        <option value="Poljska">Poljska</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Rumunija">Rumunija</option>
                                        <option value="Slovačka">Slovačka</option>
                                        <option value="Slovenija">Slovenija</option>
                                        <option value="Španija">Španija</option>
                                        <option value="Švajcarska">Švajcarska</option>
                                        <option value="Švedska">Švedska</option>
                                        <option value="Tajland">Tajland</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Turska">Turska</option>
                                        <option value="Ujedinjeni Arapski Emirati">Ujedinjeni Arapski Emirati</option>
                                        <option value="USA">USA</option>
                                        <option value="Velika Britanija">Velika Britanija</option>
                                    </select>
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Grad preuzimanja');?></label>
                                    <input class="inputSmall" type="text" name="rent_a_car[city_take]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Tip vozila');?></label>
                                    <select class="selectSmall j_required" name="rent_a_car[car_type]">
                                        <option>manje vozilo</option>
                                        <option>srednja klasa</option>
                                        <option>visa klasa</option>
                                        <option>terensko vozilo</option>
                                    </select>
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Rental lokacija');?></label>
                                    <select class="selectSmall j_required" name="rent_a_car[location]">
                                        <option>aerodrom</option>
                                        <option>hotel</option>
                                        <option>grad</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Datum preuzimanja');?></label>
                                    <input class="inputSmall j_datepicker j_required" type="text" name="rent_a_car[date_take]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Datum vracanja');?></label>
                                    <input class="inputSmall j_datepicker j_required" type="text" name="rent_a_car[date_return]" value="" />
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
                                    <button type="button" id="rent_a_car"><?php echo $html->translate('posalji zahtev');?></button>
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

