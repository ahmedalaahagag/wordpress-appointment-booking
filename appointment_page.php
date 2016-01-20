<?php
/*
Template Name: appointment page
*/
?>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/validationEngine.jquery.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validationEngine-en.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validationEngine.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/moment.js"></script>
<style>

    input[type="text"] , input[type="email"]{
        border :1px solid #D3D3D3 !important;
        width: 100% !important;
        margin-top : 20px;
    }
    .form-control{
        height: 36px ;
        margin-top : 12px;
    }
   .control-label , .radiocontrol{
        margin-top : 20px;
    }
    body{
        max-width: 100%;
        overflow-x: hidden;
    }
</style>
<body>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="top-banner">
                <div class="col-xs-12 col-md-4">
                    <img id="clientlogo" style="display: none;" src="" class="img-responsive" style="
    margin-left: -94px;
">
                </div>
                <div class="col-xs-12 col-md-4" >
                    <img id="insurancelogo" style="display: none;" src="" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-4" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" class="img-responsive" alt="Responsive image" style="
    margin-left: 125px;
">
                </div>
            </div>
        </div></div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner.png"  class="img-responsive" alt="Responsive image">
        </div>
    </div>
    <script>

    </script>
    <div class="row">
        <form id="book_appointment">
        <div class="container" id="step1">
            <div class="col-xs-12 col-md-6 register">
                <form class="form-horizontal">
                    <input type="hidden" value="" id="program_id">
                    <div class="form-group">
                        <label for="inputname3" class="col-sm-4 control-label pull-left">First Name*</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control validate[required]" placeholder="Insert your Name" id="firstname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputname3" class="col-sm-4 control-label pull-left">Last Name*</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control validate[required]" placeholder="Insert your Name" id="lastname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputphone3" class="col-sm-4 control-label pull-left">Mobile number*</label>
                        <div class="col-sm-8">
                            <select name="countryCode" id="countryCode" class="form-control" style="width:120px;">
                                <option data-countryCode="AE" value="971" Selected>UAE(+971)</option>
                                <option data-countryCode="EG" value="20">Egypt(+20)</option>
                                <option data-countryCode="GB" value="44" >UK(+44)</option>
                                <option data-countryCode="US" value="1">USA(+1)</option>
                                <optgroup label="Other countries">
                                    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                    <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                    <option data-countryCode="AO" value="244">Angola (+244)</option>
                                    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                    <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                    <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                    <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                    <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                    <option data-countryCode="AU" value="61">Australia (+61)</option>
                                    <option data-countryCode="AT" value="43">Austria (+43)</option>
                                    <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                    <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                    <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                    <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                    <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                    <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                    <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                    <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                    <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                    <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                    <option data-countryCode="CA" value="1">Canada (+1)</option>
                                    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                    <option data-countryCode="CL" value="56">Chile (+56)</option>
                                    <option data-countryCode="CN" value="86">China (+86)</option>
                                    <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                    <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                    <option data-countryCode="CG" value="242">Congo (+242)</option>
                                    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                    <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                    <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                    <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                    <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                    <option data-countryCode="FI" value="358">Finland (+358)</option>
                                    <option data-countryCode="FR" value="33">France (+33)</option>
                                    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                    <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                    <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                    <option data-countryCode="DE" value="49">Germany (+49)</option>
                                    <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                    <option data-countryCode="GR" value="30">Greece (+30)</option>
                                    <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                    <option data-countryCode="GU" value="671">Guam (+671)</option>
                                    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                    <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                    <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                    <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                    <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                    <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                    <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                    <option data-countryCode="IN" value="91">India (+91)</option>
                                    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                    <option data-countryCode="IR" value="98">Iran (+98)</option>
                                    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                    <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                    <option data-countryCode="IL" value="972">Israel (+972)</option>
                                    <option data-countryCode="IT" value="39">Italy (+39)</option>
                                    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                    <option data-countryCode="JP" value="81">Japan (+81)</option>
                                    <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                    <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                    <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                    <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                    <option data-countryCode="LA" value="856">Laos (+856)</option>
                                    <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                    <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                    <option data-countryCode="LY" value="218">Libya (+218)</option>
                                    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                    <option data-countryCode="MO" value="853">Macao (+853)</option>
                                    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                    <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                    <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                    <option data-countryCode="ML" value="223">Mali (+223)</option>
                                    <option data-countryCode="MT" value="356">Malta (+356)</option>
                                    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                    <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                    <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                    <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                    <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                    <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                    <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                    <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                    <option data-countryCode="NE" value="227">Niger (+227)</option>
                                    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                    <option data-countryCode="NU" value="683">Niue (+683)</option>
                                    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                    <option data-countryCode="NO" value="47">Norway (+47)</option>
                                    <option data-countryCode="OM" value="968">Oman (+968)</option>
                                    <option data-countryCode="PW" value="680">Palau (+680)</option>
                                    <option data-countryCode="PA" value="507">Panama (+507)</option>
                                    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                    <option data-countryCode="PE" value="51">Peru (+51)</option>
                                    <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                    <option data-countryCode="PL" value="48">Poland (+48)</option>
                                    <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                    <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                    <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                    <option data-countryCode="RO" value="40">Romania (+40)</option>
                                    <option data-countryCode="RU" value="7">Russia (+7)</option>
                                    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                    <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                    <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                    <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                    <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                    <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                    <option data-countryCode="ES" value="34">Spain (+34)</option>
                                    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                    <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                    <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                    <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                    <option data-countryCode="SI" value="963">Syria (+963)</option>
                                    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                    <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                    <option data-countryCode="TG" value="228">Togo (+228)</option>
                                    <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                    <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                    <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                    <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                    <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                </optgroup>
                            </select>
                            <input type="text" class="form-control validate[required,custom[phone]]" placeholder="Insert your mobile number" id="mobile" style="margin-left: 125px;margin-top: -35px;width: 175px !important;">

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label pull-left">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control validate[custom[email]]" id="email" placeholder="Email">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputgender3" class="col-sm-4 control-label pull-left">Gender</label>
                        <div class="col-sm-8 radiocontrol">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio3" value="male" checked="checked"> Male
                            </label>
                        </div>
                    </div>

                    <div class="form-group pull-left" style="display:flex;">
                        <label for="inputdate3" class="col-sm-3 control-label">Birth Date</label>
                        <div class="col-sm-3" style="margin-left: 50px">
                            <select class="form-control" placeholder="Day">
                            <option value=" ">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" placeholder="Month" >
                                <option value=" ">Month</option>
                                <option value="1" >January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4" >April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" placeholder="Year" >
                                <option value=" ">Year</option>
                                <?PHP
                                for($i=1920 ; $i<=2050; $i++)
                                    if($year == $i)
                                        echo "<option value='$i' selected>$i</option>";
                                    else
                                        echo "<option value='$i'>$i</option>";
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-10 col-md-12">
                            <div class="checkbox" style="margin-left: -129px;width: 100%;">
                                <label>
                                    <input type="checkbox" class="validate[required]" data-errormessage-value-missing="You must accept the terms" id="agree" name="agree">
                                    I hereby request & authorize Mobile Doctors 24 - 7 FZ LLC or any of its affiliate and their staff to conduct any diagnostic examinations, tests and procedures and to provide medications, treatment or therapy necessary to effectively assess and maintain my health, and to assess, diagnose and treat my illness or injuries. I understand that it is the responsibility of my healthcare providers to explain the reasons for any particular diagnostic examination, test or procedure, the available treatment options, the common risks, anticipated benefits associated with these options and alternative courses of treatments
                                </label>
                            </div>
                        </div>
                    </div>
                    </div>
        </div>
                    <div class="container calendar" id="step2" style="display: none;">
                        <div class="col-md-12">
                            <label >
                                Choose the available date and time slots :
                            </label>
                            </br>
                            </br>
                            <label for="inputname3" class="col-sm-2 control-label" style="margin-top:8px;margin-left: -12px">I'm available on :</label>
                            <div class="container" id="sandbox-container" style="margin-left: -15px; margin-top: 40px;">
                                <div class="input-group date col-md-5">
                                    <input type="text"  id="datepickercalender" data-date-format="yyyy-mm-dd" class="form-control" style="margin-top: 0px !important;">
                                    <span class="input-group-addon">
	                                <i class="glyphicon glyphicon-th"></i></span>
                                </div>
                            </div>
                            <div class="input-group col-md-6" style="display: inline-flex; margin-left: -233px;">
                            <div class="form-group"style="margin-left: 55px;">
                                <label for="inputEmail3" class="col-sm-4 control-label pull-left" style="margin-left: 166px;">From:</label>
                                <div class="col-sm-3">
                                <select id="from"  class="form-control" style="width: 117px; margin-top: 9px; margin-left: 162px;">
                                    <option value="01:00">1:00</option>
                                    <option value="02:00">2:00</option>
                                    <option value="03:00">3:00</option>
                                    <option value="04:00">4:00</option>
                                    <option value="05:00">5:00</option>
                                    <option value="06:00">6:00</option>
                                    <option value="07:00">7:00</option>
                                    <option value="08:00">8:00</option>
                                    <option value="09:00">9:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                    <option value="24:00">24:00</option>
                            </select>
                        </div>
                        </div>
                            <div class="form-group" style="margin-left: 169px;">
                                <label for="inputEmail3" class="col-sm-4 control-label pull-left" style="width: 117px; margin-top: 16px;">To:</label>
                                <div class="col-sm-3">
                                    <select id="to" class="form-control" style="margin-top: 13px; width: 128px; margin-left: -3px;">
                                        <option value="01:00">1:00</option>
                                        <option value="02:00">2:00</option>
                                        <option value="03:00">3:00</option>
                                        <option value="04:00">4:00</option>
                                        <option value="05:00">5:00</option>
                                        <option value="06:00">6:00</option>
                                        <option value="07:00">7:00</option>
                                        <option value="08:00">8:00</option>
                                        <option value="09:00">9:00</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="13:00">13:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                        <option value="19:00">19:00</option>
                                        <option value="20:00">20:00</option>
                                        <option value="21:00">21:00</option>
                                        <option value="22:00">22:00</option>
                                        <option value="23:00">23:00</option>
                                        <option value="24:00">24:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="container calendar" id="step3" class="step3div" style="display: none;">

                    </div>
                <div class="row" id="thanks" style="display:none;">
                <div class="container">
                    <div class="col-xs-12 col-md-6 ">

                        <h1 style=" font-size: 42px;">Thanks for registration</h1><br/>
                        <h2 style=" font-size: 23px;">Confirmation email will be sent shortly</h2>

                    </div>
                    </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <button type="button" id="step2btn" class="btn btn-default submit">Book Appointment</button>
                            <button type="button" id="submitbtn" style="display: none;" class="btn btn-default submit">Register</button>
                            <?php
                            if($_REQUEST['program_id']){
                                $program_id = $_REQUEST['program_id'];
                            }
                            else
                            {
                                header('Location : https://youclickwecare.com/');
                            }
                            ?>
                            <script>
                               $(document).on('ready',function(){

                                    // Get program info and logo
                                    var url ='https://youclickwecare.com/admin/web_services/get_program';
                                    var startdate;
                                    var enddate;
                                    $('#datepickercalender').datepicker({
                                        format: "yyyy-mm-dd",
                                        orientation: "bottom left",
                                        startDate:startdate,
                                        endDate:enddate,
                                        autoclose: true
                                    })
                                    $.post(url , {
                                        id:<?php echo $program_id; ?> ,
                                        access_token:'!!9FaB3^7*.@zu{oxbHac#'} , function(data) {
                                        data = JSON.parse(data);
                                        if(data['success']){
                                            $("#program_id").val(<?php echo $program_id; ?>);
                                            if(data['program']['client_logo']){
                                            $("#insurancelogo").attr("src",data['program']['client_logo']);
                                            $("#insurancelogo").show();
                                            }
                                            else
                                                $("#insurancelogo").remove();
                                            if(data['program']['insurance_logo']){
                                            $("#clientlogo").attr("src",data['program']['insurance_logo']);
                                            $("#clientlogo").show();
                                            }
                                            else
                                                $("#clientlogo").remove();
                                            length = data['program']['slot_length'];
                                            var starttime =  data['program']['time_from'];
                                            var endtime =  data['program']['time_to'];
                                            starttime = moment(starttime,'HH:mm');
                                            endtime = moment(endtime,'HH:mm');
                                            var html="";
                                            while (!starttime.isAfter(endtime)==true)
                                            {
                                                html+="<option value='"+starttime.format('HH:mm')+"'>"+starttime.format('HH:mm')+"</option>";
                                               starttime = starttime.add(length , 'minutes');
                                            }
                                            $("#from").html(html);
                                            $("#to").html(html);
                                            enddate = data['program']['date_to'];
                                            startdate = data['program']['date_from'];
                                            $('#datepickercalender').datepicker('setStartDate', startdate);
                                            $('#datepickercalender').datepicker('setEndDate', enddate);
                                            $('#datepickercalender').attr('data-date-start-date', startdate);
                                            $('#datepickercalender').attr('data-date-end-date', enddate);

                                        }
                                        else{
                                            alert(data['message']);
                                            location.reload();
                                        }

                                    });


                                    // binds form submission and fields to the validation engine

                                  $("#book_appointment").validationEngine(
                                        {
                                        autoHidePrompt: true,
                                        // Delay before auto-hide
                                        autoHideDelay: 3000,
                                        // Fade out duration while hiding the validations
                                        fadeDuration: 0.
                                        })

                                });


                                $("#step2btn").on('click',function(){
                                    var valid = $("#book_appointment").validationEngine('validate');
                                    if(valid == true){
                                    $("#step1").hide();
                                    $("#step2").show();
                                    $("#mob").css('margin-top','-202px');
                                    }
                                });

                                $("#submitbtn").on('click',function(){
                                    var time = $("input[type='radio'][name='timeslot']:checked").val();
                                    var gender = $("input[type='radio'][name='gender']:checked").val();
                                    var datetime = date+" "+time;
                                    var firstname = $("#firstname").val();
                                    var lastname = $("#lastname").val();
                                    var countryCode = $("#countryCode").val();
                                    var mobile = $("#mobile").val();
                                    mobile = countryCode+mobile;
                                    var program_id = $("#program_id").val();
                                    var gender = gender;
                                    var email = $("#email").val();
                                    var url ='https://youclickwecare.com/admin/web_services/book_program_appointment';
                                    $.post(url , {
                                        date:datetime ,
                                        program_id:program_id ,
                                        first_name:firstname ,
                                        last_name:lastname ,
                                        email:email ,
                                        mobile:mobile ,
                                        gender:gender ,
                                        access_token:'!!9FaB3^7*.@zu{oxbHac#'
                                    } , function(data) {
                                        data = JSON.parse(data);
                                        if(data['success']){
                                            $("#step2").hide();
                                            $("#step3").hide();
                                            $("#submitbtn").hide();
                                            $("#thanks").show();
                                        }
                                        else{
                                            alert(data['message']);
                                            location.reload();
                                        }
                                    })
                                    });

                                var date;
                                $('#datepickercalender').datepicker().on('changeDate', function (ev) {
                                    date =ev.format('yyyy-mm-dd');
                                });
                                $('#from').on('change', function (ev) {
                                    getAppointments(date);
                                });
                                $('#to').on('change', function (ev) {
                                    getAppointments(date);
                                });
                                function getAppointments(date){
                                    var html = "";
                                    var from = $( "#from" ).val();
                                    var to = $( "#to" ).val();
                                    var newdate = new Date(date);
                                    var options = {
                                        weekday: "long", year: "numeric", month: "short", day: "numeric"
                                    };
                                    var titledate  = newdate.toLocaleTimeString("en-us", options);
                                    titledate = titledate.slice(0, -12);
                                    var url ='https://youclickwecare.com/admin/web_services/get_appointment_dates';
                                    $.post(url , {program_id:$("#program_id").val(),date:date,from:from,to:to ,access_token:'!!9FaB3^7*.@zu{oxbHac#'} , function(data){
                                        data = JSON.parse(data);
                                        if(data['success']){
                                            html+='<div class="col-md-10 "><button type="button" class="btn btn-primary date" style="margin-left: -76px; width: 720px;">'+titledate+'</button></div>' +
                                                '<div class="col-md-8"   id="radioncontainer">';
                                            for(i=0;i<data['times'].length;i++){
                                                html+="<div class='col-md-2' id='timeslotradio'><div class='col-md-2'>";
                                                if(data['times'][i]['isValid']==true)
                                                    html+="<button type='button' class='btn btn-default time' id='timeslotbtn'>" ;
                                                else
                                                    html+="<button type='button' class='btn btn-default time' disabled>" ;
                                                html+="<span>" +
                                                    "<div class='radio' id='radiodiv'>" +
                                                    "<label>" +
                                                    "<input type='radio' id='radio"+i+"' name='timeslot' value ="+data['times'][i]['time']+"><label class='control-label timeslotlabel' for='radio"+i+"'>"+data['times'][i]['time']+"</label>" +
                                                    "</div>" +
                                                    "</span>" +
                                                    "</button>" +
                                                    "</div>"+
                                                    "</div>";
                                            }
                                            html+="</div>";
                                            $("#step3").html(html);
                                            $("#step3").show();
                                            $("#step2btn").remove();
                                            $("#submitbtn").show();
                                        }
                                        else{
                                            alert(data['message']);
                                            location.reload();
                                        }
                                    })
                                }
                            </script>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-md-12 mob">
                <img id="mob" src="<?php echo get_template_directory_uri(); ?>/images/mobile.png" style="margin-top:-586px;position: relative"/>

            </div>
        </div>

    </div>
</div>




</div>
<div class="row footer">
    <div class="container">
        <div class="col-md-12 ">

            <div class="ftext">
                <h3 style="
    font-family: roboto;
    font-size: 13px;
    font-weight: 400;
    color: white;
    line-height: 19px;
">

                    Mobile Doctors provides a state of the art 24-7 Physician Control Center, staffed with western trained Family Medicine Specialists, General Practitioners, Nurses, Nutritionists and Wellness Advisors available worldwide all based on Evidence Based Medicine.      		<br>
                    <center><a href="www.youclickwecare.com">													www.youclickwecare.com </a><center>



                        </center></center></h3>
            </div>

        </div>	</div>
</div>
</div>

</body>
