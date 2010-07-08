<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            <div class="mainPromo">
                <h1 class="borBot"><?php echo $html->translate('Avio karte');?></h1>
                <p>
                    Po svim svetskim standardima, tehničkoj opremljenosti i stručnosti nudimo Vam redovne linije svih svetskih avio kompanija. Letite iz Beograda ili sa bilo koje druge tačke na planeti do željene destinacije.Za klijente koji traže best-inn-class pružamo premium uslugu, za klijente koji traže vrednost za novac, nudimo pouzdan service.
                </p>

                <table cellpadding="0" cellspacing="0">
                    <tfoot>
                        <tr>
                            <td colspan="2" align="center">
                                <button>prosledi ups</button>
                                <button>odustani</button>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                <label>Ime</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                            <td>
                                <label>Prezime</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>E-mail</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                            <td>
                                <label>Telefon</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Adresa</label>
                                <input class="inputBig" type="text" name="" value="" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Grad</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                            <td>
                                <label>Drzava</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Polazak iz</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                            <td>
                                <label>Dolazak u</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Datum od</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                            <td>
                                <label>Datum do</label>
                                <input class="inputSmall" type="text" name="" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Broj putnika odraslih</label>
                                <select class="selectSmall" name="">
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
                                <label>Broj putnika senior</label>
                                <select class="selectSmall" name="">
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
                                <label>Broj putnika deca</label>
                                <select class="selectSmall" name="">
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
                                <label>broj putnika INF</label>
                                <select class="selectSmall" name="">
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
                                <label>Klasa</label>
                                <select class="selectSmall" name="">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </td>
                            <td>
                                <label>Vrsta karte</label>
                                <select class="selectSmall" name="">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
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
