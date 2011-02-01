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
                
                <script type="text/javascript">
                $(document).ready(function(){
                	$("#hotels").addClass("loader");
                	$("#hotels").removeClass("loader").html('<iframe src="http://b2c.travelboutique.rs" style="border:none; background-color:#f5f5f5"idth="100%" height="400px" frameborder="0" scrolling="no"></iframe>');
                });
                </script>
                
                <div id="hotels"><!-- load --></div>
                <?php /*
                <form style="display:none"id="form-hotels" action="<?php echo BASE_PATH.'hotels'.DS.'submit'.DS;?>" method="post" >
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
                                        <option value="0">Select</option>
                                        <option value="144">ALBANIA</option>
                                        <option value="186">ALGERIA</option>
                                        <option value="151">ANDORRA</option>
                                        <option value="197">ANGOLA</option>
                                        <option value="100">ANTIGUA AND BARBUDA</option>
                                        <option value="4">ARGENTINA</option>
                                        <option value="113">ARMENIA</option>
                                        <option value="101">ARUBA</option>
                                        <option value="2">AUSTRALIA</option>
                                        <option value="1">AUSTRIA</option>
                                        <option value="135">AZERBAIJAN</option>
                                        <option value="102">BAHAMAS</option>
                                        <option value="8">BAHRAIN</option>
                                        <option value="139">BANGLADESH</option>
                                        <option value="95">BARBADOS</option>
                                        <option value="117">BELARUS</option>
                                        <option value="5">BELGIUM</option>
                                        <option value="110">BELIZE (EX BRITISH HONDURAS)</option>
                                        <option value="116">BENIN</option>
                                        <option value="195">BERMUDA</option>
                                        <option value="9">BOLIVIA</option>
                                        <option value="243">BONAIRE</option>
                                        <option value="7">BOSNIA HERZEGOVINA</option>
                                        <option value="152">BOTSWANA</option>
                                        <option value="10">BRAZIL</option>
                                        <option value="92">BRITISH VIRGIN ISL</option>
                                        <option value="11">BRUNEI DARUSSALAM</option>
                                        <option value="6">BULGARIA</option>
                                        <option value="114">BURKINA FASO</option>
                                        <option value="115">BURUNDI</option>
                                        <option value="48">CAMBODIA</option>
                                        <option value="119">CAMEROON</option>
                                        <option value="13">CANADA</option>
                                        <option value="187">CAPE VERDE ISLANDS</option>
                                        <option value="104">CAYMAN ISLANDS</option>
                                        <option value="127">CHAD</option>
                                        <option value="15">CHILE</option>
                                        <option value="16">CHINA</option>
                                        <option value="103">COLOMBIA</option>
                                        <option value="201">CONGO</option>
                                        <option value="168">COOK ISLANDS</option>
                                        <option value="18">COSTA RICA</option>
                                        <option value="17">CROATIA</option>
                                        <option value="112">CUBA</option>
                                        <option value="19">CYPRUS</option>
                                        <option value="193">CYPRUS NORTH</option>
                                        <option value="12">CZECH REPUBLIC</option>
                                        <option value="22">DENMARK</option>
                                        <option value="202">DJIBOUTI</option>
                                        <option value="23">DOMINICAN REPUBLIC</option>
                                        <option value="204">EAST TIMOR</option>
                                        <option value="25">ECUADOR</option>
                                        <option value="88">EGYPT</option>
                                        <option value="205">EL SALVADOR</option>
                                        <option value="207">ERITREA</option>
                                        <option value="28">ESTONIA</option>
                                        <option value="208">ETHIOPIA</option>
                                        <option value="30">FIJI</option>
                                        <option value="79">FINLAND</option>
                                        <option value="29">FRANCE</option>
                                        <option value="244">FRENCH GUIANA</option>
                                        <option value="70">FRENCH POLYNESIA</option>
                                        <option value="120">GABON</option>
                                        <option value="209">GAMBIA</option>
                                        <option value="140">GEORGIA</option>
                                        <option value="20">GERMANY</option>
                                        <option value="210">GHANA</option>
                                        <option value="33">GIBRALTAR</option>
                                        <option value="192">GIBRALTAR</option>
                                        <option value="34">GREECE</option>
                                        <option value="153">GREENLAND</option>
                                        <option value="105">GRENADA</option>
                                        <option value="156">GUADELOUPE</option>
                                        <option value="136">GUAM</option>
                                        <option value="122">GUATEMALA</option>
                                        <option value="121">GUINEA</option>
                                        <option value="214">HONDURAS</option>
                                        <option value="36">HONG KONG</option>
                                        <option value="35">HUNGARY</option>
                                        <option value="41">ICELAND</option>
                                        <option value="40">INDIA</option>
                                        <option value="38">INDONESIA</option>
                                        <option value="158">IRAN</option>
                                        <option value="26">IRISH REPUBLIC</option>
                                        <option value="39">ISRAEL</option>
                                        <option value="37">ITALY</option>
                                        <option value="118">IVORY COAST</option>
                                        <option value="43">JAMAICA</option>
                                        <option value="42">JAPAN</option>
                                        <option value="44">JORDAN</option>
                                        <option value="134">KAZAKHSTAN</option>
                                        <option value="47">KENYA</option>
                                        <option value="137">KOSOVO</option>
                                        <option value="49">KUWAIT</option>
                                        <option value="164">KYRGYZSTAN</option>
                                        <option value="50">LAOS</option>
                                        <option value="55">LATVIA</option>
                                        <option value="52">LEBANON</option>
                                        <option value="146">LESOTHO</option>
                                        <option value="141">LIBYA</option>
                                        <option value="31">LIECHTENSTEIN</option>
                                        <option value="53">LITHUANIA</option>
                                        <option value="54">LUXEMBOURG</option>
                                        <option value="60">MACAU</option>
                                        <option value="109">MACEDONIA</option>
                                        <option value="220">MALAWI</option>
                                        <option value="57">MALAYSIA</option>
                                        <option value="142">MALDIVES</option>
                                        <option value="221">MALI</option>
                                        <option value="61">MALTA</option>
                                        <option value="190">MARTINIQUE</option>
                                        <option value="124">MAURITANIA</option>
                                        <option value="138">MAURITIUS</option>
                                        <option value="58">MEXICO</option>
                                        <option value="155">MICRONESIA</option>
                                        <option value="175">MOLDOVA</option>
                                        <option value="177">MONGOLIA</option>
                                        <option value="189">MONTENEGRO</option>
                                        <option value="56">MOROCCO</option>
                                        <option value="148">MOZAMBIQUE</option>
                                        <option value="59">MYANMAR</option>
                                        <option value="145">NAMIBIA</option>
                                        <option value="65">NEPAL</option>
                                        <option value="111">NETHERLAND ANTILLES</option>
                                        <option value="64">NETHERLANDS</option>
                                        <option value="63">NEW CALEDONIA</option>
                                        <option value="66">NEW ZEALAND</option>
                                        <option value="179">NICARAGUA</option>
                                        <option value="224">NIGER</option>
                                        <option value="225">NIGERIA</option>
                                        <option value="123">NORTHERN MARIANA ISL</option>
                                        <option value="62">NORWAY</option>
                                        <option value="67">OMAN</option>
                                        <option value="162">PAKISTAN</option>
                                        <option value="157">PALAU</option>
                                        <option value="106">PANAMA</option>
                                        <option value="226">PAPUA NEW GUINEA</option>
                                        <option value="73">PARAGUAY</option>
                                        <option value="69">PERU</option>
                                        <option value="71">PHILIPPINES</option>
                                        <option value="72">POLAND</option>
                                        <option value="68">PORTUGAL</option>
                                        <option value="132">PUERTO RICO</option>
                                        <option value="21">QATAR</option>
                                        <option value="240">REUNION (FRENCH)</option>
                                        <option value="74">ROMANIA</option>
                                        <option value="76">RUSSIA</option>
                                        <option value="125">RWANDA</option>
                                        <option value="229">SAN MARINO</option>
                                        <option value="80">SAUDI ARABIA</option>
                                        <option value="126">SENEGAL</option>
                                        <option value="96">SERBIA</option>
                                        <option value="150">SEYCHELLES</option>
                                        <option value="230">SIERRA LEONE</option>
                                        <option value="75">SINGAPORE</option>
                                        <option value="82">SLOVAKIA</option>
                                        <option value="81">SLOVENIA</option>
                                        <option value="78">SOUTH AFRICA</option>
                                        <option value="45">SOUTH KOREA</option>
                                        <option value="24">SPAIN</option>
                                        <option value="133">SRI LANKA</option>
                                        <option value="46">ST KITTS AND NEVIS</option>
                                        <option value="51">ST LUCIA</option>
                                        <option value="130">ST MARTIN</option>
                                        <option value="107">ST VINCENT AND GRENADINES</option>
                                        <option value="163">SUDAN</option>
                                        <option value="188">SURINAME</option>
                                        <option value="147">SWAZILAND</option>
                                        <option value="77">SWEDEN</option>
                                        <option value="14">SWITZERLAND</option>
                                        <option value="83">SYRIA</option>
                                        <option value="239">TAHITI(FRENCH POLYNESIA)</option>
                                        <option value="87">TAIWAN</option>
                                        <option value="128">TANZANIA</option>
                                        <option value="84">THAILAND</option>
                                        <option value="234">TOGO</option>
                                        <option value="184">TRINIDAD &amp; TOBAGO</option>
                                        <option value="85">TUNISIA</option>
                                        <option value="86">TURKEY</option>
                                        <option value="129">TURKS &amp; CAICOS ISLANDS</option>
                                        <option value="238">UGANDA</option>
                                        <option value="98">UKRAINE</option>
                                        <option value="27">UNITED ARAB EMIRATES</option>
                                        <option value="32">UNITED KINGDOM</option>
                                        <option value="89">UNITED STATES</option>
                                        <option value="90">URUGUAY</option>
                                        <option value="159">UZBEKISTAN</option>
                                        <option value="94">VANUATU</option>
                                        <option value="91">VENEZUELA</option>
                                        <option value="93">VIETNAM</option>
                                        <option value="108">VIRGIN ISLANDS (US)</option>
                                        <option value="161">YEMEN</option>
                                        <option value="154">ZAMBIA</option>
                                        <option value="97">ZANZIBAR</option>
                                        <option value="99">ZIMBABWE</option>
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
                                    <button type="button" id="hotels"><?php echo $html->translate('poslati');?></button>
                                    <button type="reset"><?php echo $html->translate('odustati');?></button>
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
                */?>
            </div>
            <div class="sidebar">
                <?php include_once(VIEW_PATH.'home'.DS.'_sidebar.php');?>
            </div>
        </div>
        <?php include_once(VIEW_PATH.'home'.DS.'_footer.php');?>
    </div>
    <div class="bottom">
        <?php include_once(VIEW_PATH.'home'.DS.'_copyright.php');?>
    </div>
</div>

