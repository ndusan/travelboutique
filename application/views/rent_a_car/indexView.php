<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            <div class="mainPromo">
                <h1 class="borBot">rent a car</h1>
                <p>
 	Atraktivne cene…..nudimo Vam veliki izbor različitih klasa automobila vodećih rent-a-car kompanija. Reputacija renomiranih kuća kao što su Hertz, Avis, Budget, Alamo, Centauro...garantuje da sigurno nećete pogrešiti ako iznajmite vozilo unapred. Preuzmite vozilo na nekoj od destinacija širom sveta.
                </p>

                <table cellpadding="0" cellspacing="0">
                    <tfoot>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit"><?php echo $html->translate('posali zahtev');?></button>
                                <button type="reset"><?php echo $html->translate('odustani');?></button>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                <label>Ime</label>
                                <input class="inputSmall" type="text" name="rent_a_car[firstname]" value="" />
                            </td>
                            <td>
                                <label>Prezime</label>
                                <input class="inputSmall j_required" type="text" name="rent_a_car[lastname]" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>E-mail</label>
                                <input class="inputSmall j_required" type="text" name="rent_a_car[email]" value="" />
                            </td>
                            <td>
                                <label>Telefon</label>
                                <input class="inputSmall j_required" type="text" name="rent_a_car[tel]" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Adresa</label>
                                <input class="inputBig j_required" type="text" name="rent_a_car[address]" value="" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Grad</label>
                                <input class="inputSmall j_required" type="text" name="rent_a_car[city]" value="" />
                            </td>
                            <td>
                                <label>Drzava</label>
                                <input class="inputSmall j_required" type="text" name="" value="rent_a_car[state]" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Drzava preuzimanja</label>
                                <input class="inputSmall j_required" type="text" name="rent_a_car[state_take]" value="" />
                            </td>
                            <td>
                                <label>Grad preuzimanja</label>
                                <input class="inputSmall" type="text" name="" value="rent_a_car[city_take]" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tip vozila</label>
                                <select class="selectSmall" name="rent_a_car[car_type]">
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
                                <label>Rental lokacija</label>
                                <select class="selectSmall" name="rent_a_car[location]">
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
                                <label>Datum preuzimanja</label>
                                <input class="inputSmall" type="text" name="rent_a_car[date_take]" value="" />
                            </td>
                            <td>
                                <label>Datum vracanja</label>
                                <input class="inputSmall" type="text" name="" value="rent_a_car[date_return]" />
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="sidebar">
                <?php include_once(VIEW_PATH.'home'.DS.'_sidebar.php');?>
            </div>
        </div>
    </div>
    <div class="bottom"></div>
</div>

