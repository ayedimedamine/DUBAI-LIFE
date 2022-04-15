<?php
  include 'includes/header.php';
  include 'includes/navbar.php'; 
?>
<!-- Hero -->
<div class="relative z-0 bg-white">
  <div class="relative mx-auto lg:mx-16">
      <img src='../assets/images/v1.0.0/shopHero.png' class="absolute inset-0 object-cover w-full h-full bg-black" alt='The dubai life' />
      <div class="bg-black">
      <div class="flex flex-col mb-16 sm:text-center sm:mb-0">
        <div class="relative max-w-xl mb-10 mx-auto text-center lg:max-w-2xl md:mb-12">
          <img class='h-12 object-cover md:hidden mx-auto my-4' src='../../assets/images/v1.0.0/logo_icon.png' alt='The dubai life' />
          <h2 class="max-w-lg mb-2 md:mt-0 text-5xl font-bold text-white sm:text-6xl mx-auto tracking-wider">
            Jeu Concours
          </h2>
          <span class="border-t border-white md:pt-0 md:border-none text-white font-bold text-lg ">THE NEW LIFE BY DUBAI LIFE</span>
          <p class="italic text-2xl md:text-3xl tracking-wide font-bold text-[#D19F46] my-4">
            Gagnez un <span class="text-[#F3CC94]">appartement</span> sur <span class="text-[#F3CC94]">DUBAI</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- Main -->      
<div>
    <div class='grid grid-cols-12 gap-2 mt-8 items-start justify-center'>
        <div class='border-t-2 border-[#D19F46] mt-4 col-span-2 md:col-span-4'></div>
        <div class='mx-auto text-center col-span-8 md:col-span-4'>
            <h1 class='font-bold text-lg md:text-xl md:tracking-wider'>
            Formulaire de téléchargement
            </h1>
        </div>
        <div class='border-t-2 border-[#D19F46] mt-4 col-span-2 md:col-span-4'></div>
    </div>
    <div class="notification">
          <div class="notifCard">
            <img src="../assets/images/logo.png" alt="logo" />
            <i class="fa-solid fa-xmark" id="closeModel"></i>
            <p class="notifMsg"></p>
          </div>
        </div>
            <div class="spinnercard">
             <div class="spincircle">
               <div class="spin"></div>
            </div>
    </div>
    <div class='px-16 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-8 lg:py-20'>
    <form autocomplete="off" action="/checkout" method="POST" name="myForm">
        <div class='grid w-full gap-10 row-gap-8 sm:row-gap-10 lg:grid-cols-3  sm:mx-auto'>
            <!-- Customer Infos section -->
            <div class='flex flex-col'>
                <div class="space-y-3">
                    <input
                    placeholder="Prénpm & nom"
                    name="Nom"
                    required=""
                    type="text"
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]" 
                    />
                    <input
                    placeholder="E-mail"
                    name="email"
                    required=""
                    type="email"
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]"
                    />
                    <!-- International Phone Number  -->
                    <input 
                    placeholder="06 12 34 56 78"
                    country="france"
                    type="tel" 
                    id="tel"
                    name="tel"
                    th:field="*{mobileNumber}"
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]"
                    />

                    <input
                    placeholder="Adresse de la Rue"
                    name=adress
                    required
                    type="text"
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]"
                    />
                    <input
                    placeholder="Cité"
                    name="city"
                    required
                    type="text"
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]"
                    />
                    <input
                    placeholder="Etat / Provenance"
                    type="text"
                    name="state"
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]"
                    />
                    <input
                    placeholder="Code Postale"
                    required
                    name="zipCode"
                    type="text"
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]"
                    />
                    <select 
                    id="country"
                    name="country"
                    required 
                    class="py-4 w-full border-[#D19F46] rounded-xl shadow-sm focus:border focus:border-[#D19F46] focus:ring-[#D19F46]">
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">
                            British Indian Ocean Ter
                        </option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">
                            Central African Republic
                        </option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France" selected>France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">
                            Republic of Montenegro
                        </option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">
                            St Vincent & Grenadines
                        </option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">
                            United States of America
                        </option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">
                            Virgin Islands (Brit)
                        </option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
            </div>
            <!-- Product Image section -->
            <div class='flex flex-col justify-center rounded-3xl border-2 border-[#D19F46] py-4 md:py-0'>
                <img src='../assets/images/v1.0.0/ebook.png' class="mx-auto"alt="E-BOOK" />
                <p class="tracking-wider text-2xl text-center">1 <span class="font-bold">E-BOOK</span> <span class="font-bold text-[#D19F46]">=</span> 1 <span class="font-bold">TICKET</span></p>
            </div>
            <!-- Order section -->
            <div class='flex flex-col'>
                <div class='relative w-full flex items-center justify-center  rounded-3xl border-2 border-[#D19F46]'>
                    <img src='../assets/images/v1.0.0/ticketGif.gif' class="w-auto h-56"alt="TICKET" />
                </div>
                <!-- Order Quantity controls -->
                <div class="relative z-10 flex bg-[#D19F46] mx-auto w-1/2 items-center justify-around h-12 -mt-6 rounded-full">
                    <div class="text-white p-2 cursor-pointer" id="minus"><i class="fa fa-minus fa-lg" ></i></div>
                    <input
                    type="number" name="quantity" id="quantity" min="1" value="1" required 
                    class="w-16 text-center text-white text-3xl font-bold bg-[#D19F46] border-none focus:[#D19F46] focus:ring-[#D19F46] py-0 focus:outline-none focus:shadow-outline"
                    />
                    <div class="text-white p-2 cursor-pointer" id="plus"><i class="fa fa-plus fa-lg" ></i></div>
                </div>
                <!-- Order price -->
                <div class="mt-6 ml-2 grid grid-cols-5 h-12 items-center justify-start border-2 border-[#D19F46] rounded-full">
                    <p class="col-span-2">
                    <span class="font-bold text-2xl tracking-wider text-white bg-[#D19F46] rounded-full px-8 py-[10px] -ml-2">Prix</span>
                    </p>
                    <div class="flex items-center justify-center col-span-3 text-center font-bold text-2xl">
                    <input
                        id="priceT" 
                        type="text"
                        value="29.90"
                        disabled 
                        class="text-center w-full font-bold text-2xl bg-transparent border-none py-0"
                    />
                    </div>
                </div>
                <!-- Order Call To Action Button-->
                <div class="mt-6 grid grid-cols-4  items-center justify-start">
                    <button
                    type="submit"
                    id="submitBtn"
                    class="font-bold text-2xl bg-black text-white tracking-wider col-start-2 col-span-3 rounded-full h-12 transition duration-300">Acheter</button>
                </div>
                <!-- Order Discount -->
                <div class="mt-6  grid-cols-8 h-12 items-center justify-start hidden">
                    <div class="col-span-1 border border-black w-8 h-8 p-2 rounded-full flex items-center justify-center"><i class="fa fa-info"></i></div>
                    <p class="col-span-7">
                    Achetez <span id="showPresent" class="font-bold">3</span> autres tickets </br>
                    pour avoir <span id="listTick" class="font-bold">1</span> ticket bonus </br>
                    et économisez <input class="font-bold bg-transparent w-24 text-center p-0 border-none" type="text" value="29.90" disabled id="priceT" /> <span class="font-bold">€</span>.
                    <p>
                </div>
                 <p class="oldP hidden"></p>
                  <div class="popover__wrapper icon">
                    <i class="fa-solid fa-circle-info" id="popover__title"></i>
                    <div class="popover__content">
                      <p class="message"></p>
                    </div>
                  </div>
            </div>
        </div>
        </div>
    </form>
</div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>
<script src="../assets/js/shop.js"></script>
