<!DOCTYPE HTML>
<HTML>

    <head>
    <title>Waiver Sign Up</title>
    <?php
        require "connect.php";
    ?>
    </head>

    <body id="waiver-body">

        <div id="waiver-container">

            <h1>MetroROCK Waiver Form</h1>

            <img id="header-logo" src="img/metrorock-logo.png"/>
            
            <form action="waiverSubmit.php">
                <div class="basicWaiver waiverDiv">
                    <h2>Basic Information</h2>
                    <div class="nameWaiver flexWaiver">
                        <p>
                            <input placeholder="First Name..." name="wfirstName" />
                        </p>
                        <p>
                            <input placeholder="Last Name..." name="wlastName" />
                        </p>
                    </div>
                    <div class="dateWaiver flexWaiver">
                        <p>
                            <label for="wDate">Date of Birth: </label>
                            <input type="date" name="wDate" class="wDate"/>
                        </p>
                    </div>
                    <div class="genderWaiver flexWaiver">
                        <p>
                            <label for="wGender">Choose Gender: </label>
                            <select name="wGender" id="wGender">
                                <option selected="true" disabled="disabled">-- Choose Gender --</option>
                                <option value="0">Male</option>
                                <option value="1">Female</option>
                                <option value="2">Other</option>
                            </select>
                        </p>
                    </div>
                    <div class="pictureWaiver flexWaiver">
                        <p>
                            <input placeholder="Enter Picture..." name="wPicture" />
                        </p>
                    </div>
                </div>

                <div class="addressWaiver waiverDiv">
                    <h2>Participants Address</h2>
                    <div class="streetWaiver flexWaiver">
                        <p>
                            <input placeholder="Enter Address..." name="wStreet" />
                        </p>
                    </div>
                    <div class="cityWaiver flexWaiver">
                        <p>
                            <input placeholder="Enter City Name..." name="wCity" />
                        </p>
                        <p>
                            <input placeholder="Enter Zip Code..." name="wZip" />
                        </p>
                    </div>
                    <div class="countryWaiver flexWaiver">
                        <p>
                            <label for="wState">Choose State: </label>
                            <select id="wState">
                                <option value="VT">VT</option>
                                <option value="AL">AL</option>
                                <option value="AK">AK</option>
                                <option value="AR">AR</option>	
                                <option value="AZ">AZ</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DC">DC</option>
                                <option value="DE">DE</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="HI">HI</option>
                                <option value="IA">IA</option>	
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="MA">MA</option>
                                <option value="MD">MD</option>
                                <option value="ME">ME</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MO">MO</option>	
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="NC">NC</option>	
                                <option value="NE">NE</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>			
                                <option value="NV">NV</option>
                                <option value="NY">NY</option>
                                <option value="ND">ND</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VA">VA</option>
                                <option value="WA">WA</option>
                                <option value="WI">WI</option>	
                                <option value="WV">WV</option>
                                <option value="WY">WY</option>
                            </select>
                        </p>
                        <p>
                            <label for="wCountry">Choose Country: </label>
                            <select id="wCountry">
                                <option value="US">United States</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia, Plurinational State of</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </p>
                    </div>
                </div>

                <div class="emailWaiver waiverDiv">
                    <h2>Participants Email</h2>
                    <div class="email1Waiver flexWaiver">
                        <p>
                            <input placeholder="Enter Email Address..." name="wEmail" />
                        </p>
                    </div>
                </div>

                <div class="emergencyWaiver waiverDiv">
                    <h2>Emergency Contact</h2>
                    <div class="emNameWaiver flexWaiver">
                        <p>
                            <input placeholder="Emergency Contact's Name..." name="wEmName" />
                        </p>
                    </div>
                    <div class="emNumberWaiver flexWaiver">
                        <p>
                            <input placeholder="Emergency Contact's Number..." name="wEmNumber" />
                        </p>
                    </div>
                </div>

                <div class="termsWaiver waiverDiv">
                    <h2>Terms and Agreements</h2>
                    <div class="flexWaiver">
                        <p class="terms">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, maxime fuga eligendi, perspiciatis non placeat ipsam laboriosam, delectus ea enim repellendus. Aperiam maxime, nihil libero quibusdam ea, officia vitae minus sint vel eligendi doloribus quisquam nobis quas cupiditate ratione velit! Pariatur magni nemo expedita reiciendis, vero a blanditiis dicta dignissimos? Excepturi corrupti iure distinctio voluptatem qui ut, doloremque reprehenderit exercitationem beatae, quo tempora veniam natus temporibus assumenda maxime eius soluta provident illum. Assumenda voluptates, magnam dicta eligendi ab repudiandae rem accusamus maiores impedit, dolores dolorum? Natus excepturi minima, et inventore impedit nesciunt adipisci quis blanditiis quam ipsam officia numquam tempore delectus amet nihil sunt saepe consectetur tempora consequuntur eaque eveniet fugit expedita necessitatibus? Error doloremque delectus quae nisi? Accusantium ipsa eos ullam illum mollitia neque ex velit. Ipsam reiciendis suscipit corrupti dolorem laudantium fugit nisi accusantium sapiente quis eum facilis soluta ab nobis eos, ea iure consequuntur rerum temporibus, nam in. Omnis corporis illum officia? Rem harum corrupti molestiae, debitis incidunt veritatis aut placeat optio sit et nostrum sapiente qui dolor suscipit, beatae eius cupiditate distinctio inventore explicabo dolore repellendus magni. Repellendus facere, suscipit dolore fugiat inventore vero porro ea cum repudiandae quisquam fugit officia quia eius expedita tempora accusantium exercitationem! Nesciunt esse nemo, porro ullam officia sit ipsa eos corporis, omnis, incidunt delectus suscipit est error. Velit, dolor nemo? Eos esse laborum ex earum dolore veniam voluptatibus incidunt nisi non obcaecati, praesentium repellendus sint iste minima veritatis dolorum, explicabo animi voluptate officiis nam officia consectetur et! Maiores eligendi quos culpa, praesentium architecto atque suscipit quis molestiae porro eum asperiores minima reprehenderit iure, officiis inventore, quam accusamus mollitia quae libero. Optio blanditiis corporis temporibus minima eaque possimus, maxime odio rem voluptas pariatur voluptatem sapiente autem minus consequuntur culpa soluta iure libero recusandae natus rerum. Maxime ea at totam quod. Corporis nulla error adipisci aspernatur nesciunt debitis aperiam qui eos ex! Possimus saepe eum laboriosam! Tenetur obcaecati laboriosam dolores assumenda voluptates et laudantium aut ut unde quis quos soluta, explicabo, dolore deleniti nisi dicta exercitationem autem eligendi. Quia odit est corporis fugiat neque veniam suscipit in modi. Voluptates cupiditate nobis velit quidem iste possimus numquam minima neque esse architecto, id nulla sint temporibus molestiae aut eos beatae officia incidunt impedit laborum? Optio, ad! Non qui impedit nulla sapiente ipsam neque repellat consequuntur provident enim ex optio adipisci facilis laboriosam fugiat, nobis perspiciatis fuga odit voluptate excepturi! Velit a, voluptatum rem deserunt similique nulla incidunt. Fugiat quod magnam doloremque fugit quam doloribus tempore nisi possimus velit sunt autem ipsa officia exercitationem nihil, aperiam, libero itaque quis repellendus nobis, ratione eligendi similique vel? Hic deleniti debitis nemo beatae, ea laudantium assumenda aliquid eaque quia, corporis deserunt non cupiditate amet? Enim quod voluptas magni ratione architecto id cupiditate, atque nihil ab deserunt quam natus suscipit eaque, porro possimus cumque ipsam! Atque, impedit repellendus sunt natus distinctio odio deleniti, at adipisci esse voluptate ex sed nemo. Veritatis ex distinctio illo id dolores fuga dignissimos porro assumenda ipsa error repellat suscipit facilis tempore saepe aliquid sequi architecto, adipisci iste blanditiis inventore minima provident nisi dolore recusandae? Voluptatem, distinctio deleniti deserunt similique quasi nostrum ratione aut! Hic ratione nulla sapiente architecto porro, ea quisquam atque alias quo distinctio consequatur qui quas fuga quos, sunt vitae quia, dolore voluptas sint vero amet quam minus error? Odio, laboriosam totam quis in voluptatibus veniam est laborum cumque soluta, doloremque nesciunt qui minus explicabo? Voluptas delectus fugit cupiditate ratione voluptates accusantium necessitatibus sunt eius, dignissimos quam maiores rerum veniam architecto sit accusamus voluptate dolore, repudiandae, esse aspernatur! Nisi culpa voluptatibus impedit nesciunt, tempora quam rerum praesentium ex repudiandae vero ratione deleniti cum quasi provident ipsam perferendis? Hic voluptatum maiores, id alias eligendi nesciunt sint rerum quidem. Asperiores culpa sed praesentium at sit dolorem quae dolorum necessitatibus reprehenderit est eius, fugit ab ipsum esse perferendis soluta fuga architecto quia quam numquam eveniet dolore voluptates voluptatem aut. Sit adipisci iusto impedit explicabo aliquid velit est, perspiciatis iure repellat sint unde id dolorem eligendi. Quibusdam, vitae sit illo ad dolorem qui voluptates natus consectetur molestias harum, earum laboriosam. Nam labore reprehenderit saepe! Mollitia atque repellat facere earum, impedit blanditiis ratione quibusdam fugiat quos velit commodi tempore pariatur aut odit sed enim illum ipsum iure dignissimos accusantium molestiae suscipit natus. Quasi totam placeat quam aliquam dignissimos? Earum animi possimus vel! Maiores fuga illum molestias cupiditate nihil quaerat temporibus debitis ad quasi in, blanditiis voluptatum hic culpa, atque nulla recusandae similique. Qui, quos odio recusandae doloribus mollitia praesentium, maiores pariatur architecto iste sunt doloremque, distinctio ab sapiente facere vero repellendus delectus non ullam quisquam perspiciatis cum nobis blanditiis aut! Porro doloremque corrupti, et velit culpa quidem tenetur autem obcaecati natus accusantium placeat quo reiciendis ducimus expedita amet nostrum? Ab incidunt voluptas cupiditate excepturi, nulla consequuntur adipisci maxime minus modi amet ducimus id obcaecati molestias. Autem exercitationem expedita a fugit doloremque iusto eum quod dignissimos dolorum deserunt itaque recusandae nihil impedit, dolorem corporis unde amet voluptatem atque molestiae iure esse pariatur delectus. Ea quisquam quam optio harum expedita, delectus blanditiis quibusdam voluptatibus facilis ipsam quidem, assumenda voluptates commodi eius adipisci, maiores quasi earum. Omnis vitae exercitationem facere, minus sint obcaecati, fugiat cum aliquid magnam at officiis reprehenderit quidem necessitatibus praesentium velit doloremque natus laudantium ipsam dignissimos dicta commodi earum saepe voluptas. Quae, eos rem, nobis, in minus sequi voluptas eveniet esse vel a assumenda culpa doloribus fuga perferendis tempore voluptatem. Quas distinctio ea quia labore quisquam dicta, expedita beatae laborum in sunt sit ducimus? Quisquam sunt eligendi nemo eum debitis, sequi cum dolores recusandae ut. Tempora ex suscipit, atque, saepe totam architecto error sunt sapiente optio dolorem aliquam doloremque eius et consectetur laborum tenetur repellat delectus, placeat itaque. Eius consequatur debitis, in est ratione ea magnam. Autem eos amet, quisquam cum facere temporibus voluptates similique veritatis soluta in obcaecati iusto error aspernatur totam ipsa. Veniam molestiae consequuntur corrupti repellat, excepturi placeat, ipsum repellendus quidem quibusdam accusantium impedit non recusandae obcaecati dolore inventore enim aliquid qui repudiandae rerum, ad velit. Provident eaque magni, ullam consectetur nisi maxime maiores!
                        </p>
                    </div>
                    <div class="flexWaiver">
                        <p>
                            <label>I agree to the terms and agreements</label>
                            <input type="checkbox" name="agreement" value="agreed">
                        </p>
                    </div>
                    <input type="submit" value="Submit">
                </div>

            </form>

        </div>

    </body>

    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/app.js"></script>
</HTML>