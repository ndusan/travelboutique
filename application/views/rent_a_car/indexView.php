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
                                <input class="inputSmall j_required" type="text" name="rent_a_car[state_take]" value="" />
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
                                <label><?php echo $html->translate('Rental lokacija');?></label>
                                <select class="selectSmall j_required" name="rent_a_car[location]">
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
                                <label><?php echo $html->translate('Datum preuzimanja');?></label>
                                <input class="inputSmall j_datepicker j_required" type="text" name="rent_a_car[date_take]" value="" />
                            </td>
                            <td>
                                <label><?php echo $html->translate('Datum vracanja');?></label>
                                <input class="inputSmall j_datepicker j_required" type="text" name="rent_a_car[date_return]" value="" />
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
    </div>
    <div class="bottom"></div>
</div>

