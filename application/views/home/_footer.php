<div class="boxHolder">
    <div class="tabs">
        <ul>
            <li><a href="javascript:;" class="active" id="link-offer"><?php echo $html->translate('u ponudi');?></a></li>
            <li><a href="javascript:;" id="link-insurance"><?php echo $html->translate('putno osiguranje');?></a></li>
            <li><a href="javascript:;" id="link-voucher"><?php echo $html->translate('poklon vaučeri');?></a></li>
            <li><a href="javascript:;" id="link-weather"><?php echo $html->translate('vremenska prognoza');?></a></li>
            <li><a href="javascript:;" id="link-exchange"><?php echo $html->translate('kursna lista');?></a></li>
        </ul>
    </div>
    <div id="ul">
        <ul id="ul-offer">
            <?php foreach($getPageInfo['banners'] as $banner):?>
            <li class="box">
                <a href="<?php echo BASE_PATH.$banner['parent_link'].DS.(isset($banner['link']) ? $banner['link'].DS : "");?>"><img title="<?php echo $banner['title']; ?>" alt="<?php echo $banner['title']; ?>" src="<?php echo BASE_PATH.UPLOAD_PATH.'banners'.DS.$banner['id']."-".$banner['file']; ?>" /></a>
                <h2><a href="<?php echo BASE_PATH.$banner['parent_link'].DS.(isset($banner['link']) ? $banner['link'].DS : "");?>"><?php echo $banner['title']; ?></a></h2>
            </li>
            <?php endforeach; ?>
        </ul>
        <div id="ul-insurance" style="display: none;">
            <div class="boxBig">
                <label><?php echo $extra['insurance']['title'];?></label>
                <?php echo $extra['insurance']['content'];?>
            </div>
        </div>
        <div id="ul-voucher" style="display: none;">
            <div class="boxBig">
                <label><?php echo $extra['voucher']['title'];?></label>
                <?php echo $extra['voucher']['content'];?>
            </div>
        </div>
        <div id="ul-weather" style="display: none;">
            <div class="boxBig">
                <table>
                    <tr><td colspan="2"><label><?php echo $html->translate('Odaberite zeljenu destinaciju');?></label></td></tr>
                    <tr>
                        <td>
                            <select class="selectSmall j_required" name="rent_a_car[state_take]" size="">
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
                        <td colspan="2" align="left">
                            <button type="button" id="rent_a_car"><?php echo $html->translate('posalji zahtev');?></button>
                            <button type="reset"><?php echo $html->translate('odustani');?></button>
                        </td>
                    </tr>
                </table>
                <?php echo $html->getWeather();?>
            </div>
        </div>
        <div id="ul-exchange" style="display: none;">
            <div class="boxBig">
                <h1 class="borBot">Banca Intesa kursna lista na današnji dan</h1>
                <?php $res = $html->getCurrency(); ?>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td><img style="border: 0px solid ; width: 16px; height: 11px;" src="http://www.bancaintesabeograd.com/upload/images/exchange_rates/RSD.gif"/></td>
                            <td><?php echo $res['EUR']['img'] ?></td>
                            <td><?php echo $res['AUD']['img'] ?></td>
                            <td><?php echo $res['CAD']['img'] ?></td>
                            <td><?php echo $res['DKK']['img'] ?></td>
                            <td><?php echo $res['JPY']['img'] ?></td>
                            <td><?php echo $res['NOK']['img'] ?></td>
                            <td><?php echo $res['SEK']['img'] ?></td>
                            <td><?php echo $res['CHF']['img'] ?></td>
                            <td><?php echo $res['GBP']['img'] ?></td>
                            <td><?php echo $res['USD']['img'] ?></td>
                        </tr>
                        <tr>
                            <td>1 RSD =</td>
                            <td><?php echo $res['EUR']['value'] ?></td>
                            <td><?php echo $res['AUD']['value'] ?></td>
                            <td><?php echo $res['CAD']['value'] ?></td>
                            <td><?php echo $res['DKK']['value'] ?></td>
                            <td><?php echo $res['JPY']['value'] ?></td>
                            <td><?php echo $res['NOK']['value'] ?></td>
                            <td><?php echo $res['SEK']['value'] ?></td>
                            <td><?php echo $res['CHF']['value'] ?></td>
                            <td><?php echo $res['GBP']['value'] ?></td>
                            <td><?php echo $res['USD']['value'] ?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="links">
    <div class="newsletter">
        <div class="letter"></div>
        <h1 class="borBot"><?php echo $html->translate('Dnevne novosti');?></h1>
        <p><?php echo $html->translate('Novosti tekst');?></p>
        <form action="<?php echo BASE_PATH.'ajax-news'.DS;?>" method="post">
            <label><?php echo $html->translate('Vaša el.adresa');?></label>
            <input class="inputSmall" type="text" name="email" value="" />
            <button type="button" id="newsletters"><?php echo $html->translate('Potvrdi');?></button>
        </form>
    </div>
    <div class="details">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td><a href="#"><img src="<?php echo IMAGE_PATH; ?>facebook.png" alt="" title="" /></a></td>
                <td><label>Travel Boutique on<br/> <a href="#">Facebook</a></label></td>
                <td><img src="<?php echo IMAGE_PATH; ?>skype.png" alt="" title="" /></td>
                <td><label>Skype name:<br/> Travel-Boutique</label></td>
            </tr>
        </table>
    </div>
</div>
