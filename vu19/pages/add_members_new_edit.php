<?php
require_once './../class/secretary.php';

require_once './../pdoconn/secretaryconfig.php';

  $a = 0;
  if(isset($_GET['m'])){
      $a = $_GET['m'];
  }

?>

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">MEMBERSHIP FORM</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <!-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div> -->

                        </div>
                    </div>
                </div>
                <?php if ($a == 5) { ?>
                <div>
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><i class="icon-user icon-large"></i>&nbsp;Action Completed Sucessfully;  
      </div>
       </div>
         
                <?php } ?>

                <?php if ($a == 6) { ?>
                  <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Alert On Activity</h2>
                          <div class="alert alert-danger" role="alert">
                            <strong>Failed On</strong> Activity!.
                          </div>
                          
                          
                          
                      </div>
                  </div>
              </div>
          </div>
         
                <?php } ?>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

               
                                     
   
                <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Member Form</h5>
                                <div class="card-body">
                                    <form method="post" action="pages/add_members_action_edit" enctype="multipart/form-data">
                                    <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Member ID</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="id" readonly
                                                
                                                value="<?php
                                             $id =  $secretary -> get_all_member_detail_by_id();
                                             echo $id['member_id'];
                                           
                                           
                                           ?>"
                                                
                                                
                                                 required placeholder="Last Name" class="form-control">
                                            </div>
                                        </div>

                                    <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required name="first_name"
                                                  
                                                value="<?php
                                             $first_name =  $secretary -> get_all_member_detail_by_id();
                                             echo $first_name['first_name'];?>"

                                                  placeholder="Enter First Name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Other Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required name="other_name" 
                                                value="<?php
                                             $other_name =  $secretary -> get_all_member_detail_by_id();
                                             echo $other_name['other_name'];?>"
                                                
                                                  placeholder="Enter Other Name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"
                                                value="<?php
                                             $last_name =  $secretary -> get_all_member_detail_by_id();
                                             echo $last_name['last_name'];?>"
                                                
                                                 name="last_name" required placeholder="Enter Last Name" class="form-control">
                                            </div>
                                        </div>
                                        

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tittle</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="tittles" type="text"  class="form-control">
                                                    <option>
                                                    <?php
                                             $tittles =  $secretary -> get_all_member_detail_by_id();
                                             echo $tittles['tittles'];?>
                                                    </option>
                                                    <option>Dr.</option>
                                                    <option>Prof.</option>
                                                    <option>Rev. Fr.</option>
                                                    <option>Rev. Msgr. Dr.</option>
                                                    <option>Rev. Msgr. Prof.</option>
                                                    <option>Justice.</option>
                                                    <option>Esq.</option>
                                                    <option>H.E</option>
                                                </select>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input
                                                value="<?php
                                             $dob =  $secretary -> get_all_member_detail_by_id();
                                             echo $dob['dob'];?>"
                                                
                                                 type="date" required name="dob"  placeholder="Max 6 chars." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Place Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"
                                                value="<?php
                                             $place_of_birth =  $secretary -> get_all_member_detail_by_id();
                                             echo $place_of_birth['place_of_birth'];?>"
                                                
                                                 name="place_of_birth" required placeholder="Enter Place Of Birth" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Region Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="region_of_birth" type="text" required  class="form-control">
                                                    <option>
                                                    <?php
                                             $region_of_birth =  $secretary -> get_all_member_detail_by_id();
                                             echo $region_of_birth['region_of_birth'];?>
                                                    
                                                    </option>
                                                    <option> Ashanti Region</option>
                                                    <option> Eastern Region</option>
                                                    <option> Northen Region</option>
                                                    <option> Volta Region</option>
                                                    <option> Upper East Region</option>
                                                    <option> Upper West Region</option>
                                                    <option> Central Region</option>
                                                    <option> Greater Accra Region</option>
                                                    <option> Ahafo Region</option>
                                                    <option>North East Region</option>
                                                    <option> Oti Region</option>
                                                    <option> Bono East Region</option>
                                                    <option> Bono Region</option>
                                                    <option> North East Region</option>
                                                    <option> Savannah Region</option>
                                                    <option> Western North Region</option>
                                                    <option >Western Region</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Country Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="country_of_birth" type="text" required  class="form-control">
                                                    <option></option>
                                                
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
                                     <option data-countryCode="EG" value="20">Egypt (+20)</option>
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
                                     <option data-countryCode="GH" value="233" selected="selected">Ghana</option>
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
                                      <option data-countryCode="GB" value="44">UK (+44)</option>
                                     <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                     <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                     <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                      <option data-countryCode="US" value="1">USA (+1)</option>
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
                                    
                                                </select>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Profession</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input
                                                value="<?php
                                             $profession =  $secretary -> get_all_member_detail_by_id();
                                             echo $profession['profession'];?>"
                                                
                                                 name="profession" type="text" required placeholder="Enter Profession" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Email ID</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input 
                                                value="<?php
                                             $email_id =  $secretary -> get_all_member_detail_by_id();
                                             echo $email_id['email_id'];?>"
                                                
                                                 name="email_id" type="email" required  placeholder="Enter Email ID" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Phone Number</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"
                                                value="<?php
                                             $phone_number =  $secretary -> get_all_member_detail_by_id();
                                             echo $phone_number['phone_number'];?>"
                                                
                                                 name="phone_number"   required  placeholder="Enter Phone Number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Secondary Phone Number</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" 
                                                value="<?php
                                             $secondary_number =  $secretary -> get_all_member_detail_by_id();
                                             echo $secondary_number['secondary_number'];?>"
                                                
                                                name="secondary_number"   required  placeholder="Enter Phone Number" class="form-control">
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">House Address</label>
                                            <div class="col-12 col-sm-9 col-lg-6">
                                                <table>
                                                    <tr>
                                                        <td><input required style="width:150px;" type="text"
                                                        value="<?php
                                             $street_name_house_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $street_name_house_address['street_name_house_address'];?>"
                                                         name="street_name_house_address"  placeholder="Enter Street No." class="form-control"></td>


                                                        <td><input required style="width:150px;" type="text" 
                                                        value="<?php
                                             $city_house_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $city_house_address['city_house_address'];?>"
                                                        
                                                         name="city_house_address"  placeholder="Enter City" class="form-control"></td>
                                                      
                                                      
                                                        <td>
                                                        <select style="width:150px;" name="region_of_house_address" type="text" required  class="form-control">
                                                    <option>
                                                    <?php
                                             $city_house_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $city_house_address['city_house_address'];?>
                                                    </option>
                                                    <option> Ashanti Region</option>
                                                    <option> Eastern Region</option>
                                                    <option> Northen Region</option>
                                                    <option> Volta Region</option>
                                                    <option> Upper East Region</option>
                                                    <option> Upper West Region</option>
                                                    <option> Central Region</option>
                                                    <option> Greater Accra Region</option>
                                                    <option> Ahafo Region</option>
                                                    <option>North East Region</option>
                                                    <option> Oti Region</option>
                                                    <option> Bono East Region</option>
                                                    <option> Bono Region</option>
                                                    <option> North East Region</option>
                                                    <option> Savannah Region</option>
                                                    <option> Western North Region</option>
                                                    <option >Western Region</option>
                                                </select>
                                                        </td>
                                                   
                                                    </tr>
                                                </table> 
                                            </div> 
                                              
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">How Long Have You Lived There?</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"
                                                value="<?php
                                             $long_lived_house =  $secretary -> get_all_member_detail_by_id();
                                             echo $long_lived_house['long_lived_house'];?>"
                                                
                                                 name="long_lived_house"  placeholder="Enter How Long Have You Lived There?" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Former Residence If Less Than 3 yrs</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" 
                                                value="<?php
                                             $house_less_than_3 =  $secretary -> get_all_member_detail_by_id();
                                             echo $house_less_than_3['house_less_than_3'];?>"
                                                 name="house_less_than_3"  placeholder="Enter Former Residence If Less Than 3 yrs" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Postal Address</label>
                                            <div class="col-12 col-sm-9 col-lg-6">
                                                <table>
                                                    <tr>
                                                        <td><input required style="width:150px;" type="text" 
                                                        value="<?php
                                             $postal_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $postal_address['postal_address'];?>"
                                                         name="postal_address"  placeholder="Enter P.O.Box " class="form-control"></td>
                                                        <td><input required style="width:150px;" type="text"
                                                        value="<?php
                                             $city_postal_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $city_postal_address['city_postal_address'];?>"
                                                        
                                                         name="city_postal_address"  placeholder="Enter City" class="form-control"></td>
                                                        <td>
                                                        <select style="width:150px;" name="region_postal_address" type="text" required  class="form-control">
                                                    <option>
                                                    
                                                    <?php
                                             $region_postal_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $region_postal_address['region_postal_address'];?>
                                                    
                                                    </option>
                                                    <option> Ashanti Region</option>
                                                    <option> Eastern Region</option>
                                                    <option> Northen Region</option>
                                                    <option> Volta Region</option>
                                                    <option> Upper East Region</option>
                                                    <option> Upper West Region</option>
                                                    <option> Central Region</option>
                                                    <option> Greater Accra Region</option>
                                                    <option> Ahafo Region</option>
                                                    <option>North East Region</option>
                                                    <option> Oti Region</option>
                                                    <option> Bono East Region</option>
                                                    <option> Bono Region</option>
                                                    <option> North East Region</option>
                                                    <option> Savannah Region</option>
                                                    <option> Western North Region</option>
                                                    <option >Western Region</option>
                                                </select>
                                                        </td>
                                                   
                                                    </tr>
                                                </table> 
                                            </div> 
                                        </div>

                                       

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Are you married</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select id="areyoumarried" type="text" name="married" required  placeholder="Postal Address" class="form-control">
                                                <option ></option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <div style="display: none;"  class="form-group row rowtypeofmarriageclass">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">What Kind Of Marriage</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select type="text" name="married_type"  placeholder="Postal Address" class="form-control">
                                                    <option>CUSTOMARY</option>
                                                    <option>REGISTRY</option>
                                                    <option>CHURCH</option>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Welfare #</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" 
                                                value="<?php
                                             $welfare_pin =  $secretary -> get_all_member_detail_by_id();
                                             echo $welfare_pin['welfare_pin'];?>" 

                                                 name="welfare_pin"  placeholder="Enter Welfare #" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right">INNITIATION DATA</label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    
                                                    <div id="error-container1"></div>
                                                </div>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Of Initiation</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date" 
                                                value="<?php
                                             $date_of_initiation =  $secretary -> get_all_member_detail_by_id();
                                             echo $date_of_initiation['date_of_initiation'];?>" 
                                                
                                                name="date_of_initiation" required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Council/Court Of Initiation</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input   type="text"
                                                value="<?php
                                             $court_initiation =  $secretary -> get_all_member_detail_by_id();
                                             echo $court_initiation['court_initiation'];?>" 
                                                
                                                
                                                 name="court_initiation" required="" placeholder="Enter Council/Court Of Initiation" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Select House</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select required  name="house" class="form-control">
                                                    <option>
                                                    <?php
                                             $house =  $secretary -> get_all_member_detail_by_id();
                                             echo $house['house_name'];?>  
                                                    </option>
                                                    <?php $secretary->housesdropdown() ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Current Rank</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select required name="rank" type="text"  placeholder="Postal Address" class="form-control">
                                                    
                                                <option>
                                                    <?php
                                             $ranks =  $secretary -> get_all_member_detail_by_id();
                                             echo $ranks['ranks'];?>  
                                                    </option>  
                                                     <option>Bro.</option>
                                                    <option>W/Bro.</option>
                                                    <option>Sir Kt. Bro.</option>
                                                    <option>Sir Kt. Bro.</option>
                                                    <option>Sis.</option>
                                                    <option>RL.</option>
                                                    <option>MRL.</option>
                                                    <option>RL.Sis.</option>
                                                    <option>MRL.Sis.</option>
                                                    <option>Sir.Kt.Bro</option>
                                                    




                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Passed LDE?</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select type="text" name="lde_status"  placeholder="Enter Postal Address" class="form-control">
                                                <option>
                                                <?php
                                             $lde_status =  $secretary -> get_all_member_detail_by_id();
                                             echo $lde_status['lde_status'];?>    
                                                
                                                </option>
                                                    <option>YES</option>
                                                    <option>NO</option>
                                                    <!-- <option>YET TO WRITE</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Proposer's Name(s) NB: Saparate each <br/> with comma (,)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea name="prospers_names"  required=""  class="form-control">
                                                <?php
                                             $prospers_names =  $secretary -> get_all_member_detail_by_id();
                                             echo $prospers_names['prospers_names'];?>    
                                                
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Name Of Parish</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text"
                                                value="<?php
                                             $name_of_parish =  $secretary -> get_all_member_detail_by_id();
                                             echo $name_of_parish['name_of_parish'];?>" 
                                                
                                                 name="name_of_parish" required="" placeholder="Enter Name Of Parish" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Place Of Baptism</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input
                                                value="<?php
                                             $place_of_baptism =  $secretary -> get_all_member_detail_by_id();
                                             echo $place_of_baptism['place_of_baptism'];?>" 
                                                
                                                 name="place_of_baptism"  type="text" required="" placeholder="Enter Place Of Baptism" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right">FAMILY DATA</label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    
                                                    <div id="error-container1"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Is Father Alive?</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select id="isfatheralive" type="text" name="married" required  placeholder="Postal Address" class="form-control">
                                                <option ></option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div style="display: none;" class="form-group row rowtypeoffathersname">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Father's Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  
                                                value="<?php
                                             $fathers_name =  $secretary -> get_all_member_detail_by_id();
                                             echo $fathers_name['fathers_name'];?>" 
                                                
                                                
                                                type="text" name="fathers_name"   placeholder="Enter Father's Name" class="form-control">
                                            </div>
                                        </div>

                                        <div style="display: none;" class="form-group row rowtypeoffatherscontact">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Father's Contact</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input 
                                                
                                                value="<?php
                                             $fathers_contact =  $secretary -> get_all_member_detail_by_id();
                                             echo $fathers_contact['fathers_contact'];?>" 
                                                
                                                  type="text" name="fathers_contact"   placeholder="Enter Father's Contact" class="form-control">
                                            </div>
                                        </div>


                                        <div style="display: none;" class="form-group row rowtypeoffathersaddress">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Father's Address</label>
                                            <div class="col-12 col-sm-9 col-lg-6">
                                            <table>
                                                    <tr>
                                                        <td><input 
                                                        value="<?php
                                             $fathers_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $fathers_address['fathers_address'];?>" 
                                                        
                                                          style="width:150px;" type="text" name="fathers_address"  placeholder="Enter Street No." class="form-control"></td>
                                                        <td><input 
                                                        value="<?php

                                             $fathers_address =  $secretary -> get_all_member_detail_by_id();
                                             echo $fathers_address['fathers_address'];?>" 

                                                          style="width:150px;" type="text"
                                                          
                                                          
                                                           name="fathers_city_address"  placeholder="Enter City" class="form-control"></td>
                                                        <td>
                                                        <select style="width:150px;" name="fathers_region" type="text"   class="form-control">
                                                    <option>
                                                    <?php

                                             $fathers_region =  $secretary -> get_all_member_detail_by_id();
                                             echo $fathers_region['fathers_region'];?>
                                                    
                                                    </option>
                                                    <option> Ashanti Region</option>
                                                    <option> Eastern Region</option>
                                                    <option> Northen Region</option>
                                                    <option> Volta Region</option>
                                                    <option> Upper East Region</option>
                                                    <option> Upper West Region</option>
                                                    <option> Central Region</option>
                                                    <option> Greater Accra Region</option>
                                                    <option> Ahafo Region</option>
                                                    <option>North East Region</option>
                                                    <option> Oti Region</option>
                                                    <option> Bono East Region</option>
                                                    <option> Bono Region</option>
                                                    <option> North East Region</option>
                                                    <option> Savannah Region</option>
                                                    <option> Western North Region</option>
                                                    <option >Western Region</option>
                                                </select>
                                                        </td>
                                                   
                                                    </tr>
                                                </table> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Is Mother Alive?</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select id="ismotheralive" type="text" name="married" required  placeholder="Postal Address" class="form-control">
                                                <option ></option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div style="display: none;" class="form-group row rowtypeofmothersname">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mother's Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input 
                                                value="<?php

                                 $mothers_name =  $secretary -> get_all_member_detail_by_id();
                                 echo $mothers_name['mothers_name'];?>" 
                                                
                                                 type="text"  name="mothers_name"   placeholder="Enter Mother's Name" class="form-control">
                                            </div>
                                        </div>

                                        <div style="display: none;" class="form-group row rowtypeofmotherscontact">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mother's Contact</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text"   value="<?php

                                     $mothers_contact =  $secretary -> get_all_member_detail_by_id();
                                       echo $mothers_contact['mothers_contact'];?>"   
                                name="mothers_contact"   placeholder="Enter Mother's Contact" class="form-control">
                                            </div>
                                        </div>


                                        <div style="display: none;" class="form-group row rowtypeofmothersaddress">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mothers's Address</label>
                                            <div class="col-12 col-sm-9 col-lg-6">
                                            <table>
                                                    <tr>
                                                        <td><input 
                                                        value="<?php

$mothers_address =  $secretary -> get_all_member_detail_by_id();
  echo $mothers_address['mothers_address'];?>"
                                                        
                                                        
                                                         style="width:150px;" type="text" name="mothers_address"  placeholder="Enter Street No." class="form-control"></td>
                                                        <td><input 
                                                        value="<?php

$mothers_city_address =  $secretary -> get_all_member_detail_by_id();
  echo $mothers_city_address['mothers_city_address'];?>"
                                                        
                                                         style="width:150px;" type="text" name="mothers_city_address"  placeholder="Enter City" class="form-control"></td>
                                                        <td>
                                                        <select style="width:150px;" name="mothers_region" type="text"   class="form-control">
                                                    <option>
                                                    
                                                    <?php

$mothers_region =  $secretary -> get_all_member_detail_by_id();
  echo $mothers_region['mothers_region'];?> 
                                                    
                                                    </option>
                                                    <option> Ashanti Region</option>
                                                    <option> Eastern Region</option>
                                                    <option> Northen Region</option>
                                                    <option> Volta Region</option>
                                                    <option> Upper East Region</option>
                                                    <option> Upper West Region</option>
                                                    <option> Central Region</option>
                                                    <option> Greater Accra Region</option>
                                                    <option> Ahafo Region</option>
                                                    <option>North East Region</option>
                                                    <option> Oti Region</option>
                                                    <option> Bono East Region</option>
                                                    <option> Bono Region</option>
                                                    <option> North East Region</option>
                                                    <option> Savannah Region</option>
                                                    <option> Western North Region</option>
                                                    <option >Western Region</option>
                                                </select>
                                                        </td>
                                                   
                                                    </tr>
                                                </table> 
                                            </div>
                                        </div>



                                        <div style="display: none;" class="form-group row nameofspouse">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Name of Spouse</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" 
                                                value="<?php

$name_of_spouse =  $secretary -> get_all_member_detail_by_id();
  echo $name_of_spouse['name_of_spouse'];?>"
                                                
                                                
                                                
                                                   name="name_of_spouse" placeholder="Enter Name of Spouse" class="form-control">
                                            </div>
                                        </div>

                                        <div style="display: none;" class="form-group row contactofspouse">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Spouse's Phone number</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="spouse_number" 
                                                
                                                value="<?php

$spouse_number =  $secretary -> get_all_member_detail_by_id();
  echo $spouse_number['spouse_number'];?>"
                                                
                                                  type="text"  placeholder="Enter Spouse's Phone number" class="form-control">
                                            </div>
                                        </div>

                                        <div style="display: none;" class="form-group row addressspouse">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Spouse's Address</label>
                                            <div class="col-12 col-sm-9 col-lg-6">
                                            <table>
                                                    <tr>
                                                        <td><input  style="width:150px;"
                                                        
                                                        value="<?php

$spouse_address =  $secretary -> get_all_member_detail_by_id();
  echo $spouse_address['spouse_address'];?>"
                                               
                                                        
                                                         type="text" 
                                                         
                                                          name="spouse_address"  placeholder="Enter Street No." class="form-control"></td>
                                                        <td><input 
                                                        value="<?php

$spouse_city_address =  $secretary -> get_all_member_detail_by_id();
  echo $spouse_city_address['spouse_city_address'];?>"
                                                        
                                                         style="width:150px;" type="text" name="spouse_city_address"  placeholder="Enter City" class="form-control"></td>
                                                        <td>
                                                        <select style="width:150px;" name="spouse_region" type="text"   class="form-control">
                                                    <option>
                                                    <?php

$spouse_region =  $secretary -> get_all_member_detail_by_id();
  echo $spouse_region['spouse_region'];?>  
                                                    
                                                    </option>
                                                    <option> Ashanti Region</option>
                                                    <option> Eastern Region</option>
                                                    <option> Northen Region</option>
                                                    <option> Volta Region</option>
                                                    <option> Upper East Region</option>
                                                    <option> Upper West Region</option>
                                                    <option> Central Region</option>
                                                    <option> Greater Accra Region</option>
                                                    <option> Ahafo Region</option>
                                                    <option>North East Region</option>
                                                    <option> Oti Region</option>
                                                    <option> Bono East Region</option>
                                                    <option> Bono Region</option>
                                                    <option> North East Region</option>
                                                    <option> Savannah Region</option>
                                                    <option> Western North Region</option>
                                                    <option >Western Region</option>
                                                </select>
                                                        </td>
                                                   
                                                    </tr>
                                                </table> 
                                            </div>
                                        </div>

                                     
                                      


                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

              
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        Copyright © 2019 Linutek. All rights reserved. Dashboard by <a href="#">Linutek</a>.
                        </div>

                        <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

          
            
        </div>


    <!-- </div>
   
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="../../../../../cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="../../../../../cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="../../../../../cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html> -->