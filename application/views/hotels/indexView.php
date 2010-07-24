<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            <div class="mainPromo">
            	<!-- breadcrumb -->
                <div class="breadcrumb">
                	<a href="<?php echo BASE_PATH;?>"><?php echo $html->translate('Početna');?></a>
                	&raquo; <?php echo $html->translate('Hoteli');?>
                </div>
                <h1 class="borBot"><?php echo $getPageInfo['items'][0]['title'];?></h1>
                <?php echo $getPageInfo['items'][0]['content'];?>
                <form id="form-hotels" action="<?php echo BASE_PATH.'hotels'.DS.'submit'.DS;?>" method="post" >
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr><th colspan="2"><h3>Vaši detalji:</h3></th></tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Ime');?></label>
                                    <input class="inputSmall" type="text" name="hotels[firstname]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Prezime');?></label>
                                    <input class="inputSmall j_required" type="text" name="hotels[lastname]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('E-mail');?></label>
                                    <input class="inputSmall j_required" type="text" name="hotels[email]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Telefon');?></label>
                                    <input class="inputSmall j_required" type="text" name="hotels[tel]" value="" />
                                </td>
                            </tr>
                            <tr><th colspan="2"><h3>Hotel:</h3></th></tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Drzava');?></label>
                                    <select class="selectSmall j_required" name="hotels[state_take]" size="">
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
                                    <label><?php echo $html->translate('Grad');?></label>
                                    <input class="inputSmall" type="text" name="hotels[city_take]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Datum dolaska');?></label>
                                    <input class="inputSmall j_datepicker j_required" type="text" name="hotels[date_return]" value="" />
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Datum odlaska');?></label>
                                    <input class="inputSmall j_datepicker j_required" type="text" name="hotels[date_take]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Broj dece');?></label>
                                    <select class="selectSmall j_required" name="hotels[child_num]">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Godine dece');?></label>
                                    <select class="j_required" name="hotels[child_from]">
                                        <option>/</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                    </select>
                                    <select class="j_required" name="hotels[child_to]">
                                        <option>/</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><?php echo $html->translate('Kategorija hotela');?></label>
                                    <select class="selectSmall j_required" name="hotels[hotel_category]">
                                        <option>*</option>
                                        <option>**</option>
                                        <option>***</option>
                                        <option>****</option>
                                        <option>*****</option>
                                    </select>
                                </td>
                                <td>
                                    <label><?php echo $html->translate('Tip sobe');?></label>
                                    <select class="selectSmall j_required" name="hotels[room]">
                                        <option>jednokrevetna</option>
                                        <option>dvokrevetna</option>
                                        <option></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label><?php echo $html->translate('Napomena')?></label>
                                    <textarea class="inputBig" name="hotels[text]" rows="4" cols="20"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="button" id="hotels"><?php echo $html->translate('posalji zahtev');?></button>
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

