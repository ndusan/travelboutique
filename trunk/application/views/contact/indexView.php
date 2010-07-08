<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">

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
                            <label>Telefon</label>
                            <input class="inputSmall" type="text" name="" value="" />
                        </td>
                        <td>
                            <label>Telefon</label>
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
                            <label>Tekst poruke</label>
                            <textarea class="inputBig" name="" rows="4" cols="20"></textarea>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="sidebar">
            <?php include_once(VIEW_PATH.'home'.DS.'_sidebar.php');?>
        </div>
    </div>
    <div class="bottom"></div>
</div>

