
<div class="btns-title">
                    <center>
                            <h1 >Choisez le types de consultation</h1>
                    </center>
        </div>
        <form onsubmit="requiredpat()" name="formRdvSearch">
            <div class="btns-choix">
                <div class="btns">
                    <table>
                        <tr>
                            <td colspan="3">
                                <center>
                                    <label>
                                    <input type="radio" name="rad" id="" value="Domicile" onclick="img(1)" <?php if($_SESSION['rad-d'] == 'checked') echo 'checked ='.$_SESSION['rad-d']; ?> >
                                    <div class="img-domicile Domicile-radio radio-div"> 
                                        <h1>1</h1>
                                        <svg version="1.1" id="home" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="82px" height="80px" viewBox="394.5 418.584 212 206.25" enable-background="new 394.5 418.584 212 206.25"
                                        xml:space="preserve">
                                   <path d="M600.116,503.301l-88.955-77.062c-0.298-0.254-0.656-0.472-1.059-0.639c-5.693-4.32-13.557-4.119-19.049,0.639
                                       l-88.956,77.053c-6.376,5.519-7.181,15.313-1.784,21.839c3.411,4.128,9.069,4.075,13.408,3.2v82.834
                                       c0,6.253,5.02,11.344,11.195,11.344h53.586c2.414,0,4.374-1.96,4.374-4.373v-72.242h36.471v72.242c0,2.413,1.959,4.373,4.372,4.373
                                       h53.587c6.175,0,11.195-5.091,11.195-11.344v-82.834c4.355,0.857,9.996,0.919,13.407-3.2
                                       C607.297,518.606,606.492,508.802,600.116,503.301z M595.166,519.551c-0.9,1.058-5.563,0.48-9.288-1.146
                                       c-1.355-0.595-2.93-0.454-4.146,0.351c-1.233,0.805-1.985,2.187-1.985,3.655v88.746c0,1.435-1.103,2.598-2.449,2.598h-49.214
                                       v-72.242c0-2.414-1.959-4.373-4.373-4.373h-45.217c-2.414,0-4.373,1.959-4.373,4.373v72.242h-49.214
                                       c-1.347,0-2.449-1.163-2.449-2.598V522.41c0-1.478-0.744-2.859-1.985-3.664c-1.233-0.796-2.799-0.919-4.155-0.342
                                       c-3.306,1.461-8.334,2.283-9.279,1.138c-2.388-2.887-2.046-7.207,0.77-9.647l88.956-77.061c2.432-2.099,5.956-2.099,8.388,0
                                       c0.314,0.28,0.674,0.507,1.05,0.674l88.186,76.405C597.213,512.344,597.553,516.664,595.166,519.551L595.166,519.551z"/>
                                   </svg>
                                   <span>
                                    Domicile
                                </span>
                                </div>
                                    </label>
                                </center>
                            </td>
                            <tr>
                                <td colspan="3">
                                <center>
                                    <label>
                                        <input type="radio" name="rad" id="" value="Appel" onclick="img(2)" <?php if($_SESSION['rad-a'] == 'checked') echo 'checked ='.$_SESSION['rad-a']; ?> >
                                        <div class="Appel-radio radio-div">
                                            <h1>2</h1>
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 56.005 56.005" style="enable-background:new 0 0 56.005 56.005;" xml:space="preserve">
	<path d="M18.683,32.562c-2.396,0-4.407,1.449-5.684,3.213c-1.276-1.764-3.288-3.213-5.684-3.213c-3.819,0-6.871,2.963-7.271,7.052
		c-0.042,0.267-0.145,1.22,0.226,2.709c0.546,2.197,1.801,4.192,3.631,5.77l8.329,7.127c0.223,0.191,0.496,0.287,0.769,0.287
		c0.273,0,0.546-0.096,0.769-0.286l8.331-7.129c1.828-1.575,3.083-3.57,3.629-5.768c0.369-1.49,0.268-2.442,0.226-2.71
		C25.554,35.525,22.502,32.562,18.683,32.562z M23.787,41.842c-0.445,1.794-1.479,3.432-2.99,4.732L13,53.246l-7.795-6.671
		c-1.513-1.303-2.547-2.94-2.992-4.734c-0.302-1.213-0.194-1.897-0.194-1.897l0.016-0.105c0.245-2.621,2.138-5.275,5.282-5.275
		c2.189,0,3.974,1.811,4.77,3.605L13,40.228l0.914-2.061c0.796-1.795,2.58-3.605,4.77-3.605c3.145,0,5.037,2.654,5.295,5.366
		C23.98,39.935,24.09,40.62,23.787,41.842z"/>
	<path d="M55.426,41.409c-2.008-3.796-8.98-7.912-9.287-8.092c-1.278-0.728-2.6-0.957-3.723-0.646
		c-0.844,0.233-1.531,0.767-1.994,1.545c-1.02,1.22-2.285,2.646-2.592,2.867c-2.37,1.604-4.252,1.414-6.295-0.629L20.049,24.969
		c-2.045-2.045-2.233-3.928-0.631-6.292c0.224-0.31,1.649-1.575,2.869-2.595c0.778-0.463,1.312-1.15,1.546-1.995
		c0.307-1.106,0.071-2.463-0.653-3.732c-0.173-0.296-4.289-7.269-8.085-9.276C13.169,0.057,10.84,0.407,9.299,1.95L6.763,4.487
		C0.73,10.519,0.532,17.889,6.19,25.802c0.321,0.448,0.944,0.553,1.396,0.231c0.449-0.321,0.553-0.946,0.231-1.396
		c-5.156-7.21-5.038-13.339,0.36-18.736l2.536-2.537c0.919-0.916,2.304-1.125,3.446-0.519c3.294,1.743,7.256,8.453,7.289,8.51
		c0.449,0.788,0.62,1.609,0.457,2.197c-0.1,0.36-0.323,0.633-0.683,0.835l-0.151,0.104c-0.853,0.712-2.883,2.434-3.308,3.062
		c-0.612,0.904-1.018,1.793-1.231,2.666c-0.711-1.418-1.286-3.061-1.475-4.881c-0.058-0.548-0.543-0.944-1.099-0.892
		c-0.549,0.058-0.948,0.549-0.892,1.099c0.722,6.953,6.13,11.479,6.359,11.668c0.026,0.021,0.056,0.029,0.083,0.047l10.61,10.61
		c0.044,0.044,0.089,0.083,0.134,0.125c0.036,0.053,0.059,0.111,0.106,0.158c0.189,0.187,4.704,4.567,11.599,5.283
		c0.035,0.003,0.07,0.005,0.104,0.005c0.506,0,0.94-0.383,0.994-0.896c0.057-0.55-0.343-1.041-0.892-1.099
		c-2.115-0.219-3.988-0.839-5.549-1.559c0.766-0.229,1.544-0.612,2.334-1.146c0.628-0.425,2.35-2.455,3.062-3.308l0.104-0.151
		c0.202-0.359,0.475-0.583,0.835-0.683c0.587-0.164,1.409,0.008,2.187,0.45c1.879,1.102,7.072,4.559,8.521,7.296
		c0.605,1.145,0.397,2.529-0.519,3.445l-2.537,2.537c-5.393,5.393-11.791,5.446-19.016,0.159c-0.448-0.327-1.072-0.229-1.397,0.216
		c-0.326,0.446-0.229,1.071,0.216,1.397c3.935,2.88,7.733,4.317,11.306,4.317c3.718,0,7.189-1.56,10.306-4.676l2.537-2.537
		C56.095,45.663,56.446,43.334,55.426,41.409z"/>
</svg>
                                            <span>
                                                Appel/Video
                                            </span>
                                        </div>
                                    </label>
                                </center>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                <center>
                                    <label>
                                    <input type="radio" name="rad" id="" value="Cabinet" onclick="img(3)" <?php if($_SESSION['rad-c'] == 'checked') echo 'checked ='.$_SESSION['rad-c']; ?>>
                                    <div class="Cabinet-radio radio-div">
                                        <h1>3</h1>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 229.957 229.957" style="enable-background:new 0 0 229.957 229.957;" xml:space="preserve">
			<path d="M104.706,129.12h24.242v-16.162h16.162V88.715h-16.162V72.554h-24.242v16.162H88.544v24.242h16.162V129.12z
				 M96.625,104.877v-8.081h16.162V80.635h8.081v16.162h16.161v8.08h-16.162v16.162h-8.081v-16.162H96.625z"/>
			<rect x="23.897" y="137.2" width="28.283" height="8.081"/>
			<rect x="23.897" y="153.362" width="28.283" height="8.081"/>
			<rect x="23.897" y="169.523" width="28.283" height="8.081"/>
			<rect x="177.433" y="137.2" width="28.283" height="8.081"/>
			<rect x="177.433" y="153.362" width="28.283" height="8.081"/>
			<rect x="177.433" y="169.523" width="28.283" height="8.081"/>
			<path d="M221.877,197.807L221.877,197.807v-76.768h-52.525V32.15h20.202v-8.081h-20.202H60.261H40.059v8.081h20.202v88.889H7.736
				v76.768H0v8.081h7.736h52.525h8.081h24.242h44.444h24.242h8.081h52.525h8.081v-8.081H221.877z M60.261,197.806H15.817v-68.687
				h44.444V197.806z M128.948,197.806h-28.283v-32.323h28.283V197.806z M161.271,121.039v76.768h-24.242v-0.001v-40.404H92.584
				v40.404H68.342v-76.767V32.15h92.929V121.039z M213.796,197.806h-44.444v-68.687h44.444V197.806z"/>
                <span>
                    Cabinet
                </span>
                                    </div>
                                   </label>
                                </center>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>






            <div class="input1 inputs" id="input1" style="display: <?php echo $_SESSION['form-d']; ?>;">
                    <div class="container-delete">
                    <?php 
                    if ($_SESSION['empty-d'] == 'ok') {
                    echo "<div class='empty-message'> <p class='red-empty'>Au moins un champ doit être rempli </p></div>";
                    }
                    ?>
                        <label>
                        <input type="radio" name="rad" id="4" value="0" onclick="img(4); finlok();">
                        <div class="content-delete">
                            <svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                 .st0{fill:#134563;
                                 }
                                 .st0{width: 50px; height: 50px;}
                             </style><g><g id="Icon-Close-O" transform="translate(378.000000, 278.000000)"><path class="st0" d="M-345.9-222.1c-13.2,0-23.9-10.7-23.9-23.9c0-13.2,10.7-23.9,23.9-23.9     c13.2,0,23.9,10.7,23.9,23.9C-322-232.9-332.7-222.1-345.9-222.1L-345.9-222.1z M-345.9-267.4c-11.7,0-21.3,9.6-21.3,21.3     c0,11.7,9.6,21.3,21.3,21.3s21.3-9.6,21.3-21.3C-324.6-257.8-334.2-267.4-345.9-267.4L-345.9-267.4z" id="Fill-52"/><polyline class="st0" id="Fill-53" points="-356.3,-233.8 -358.2,-235.7 -335.6,-258.3 -333.7,-256.4 -356.3,-233.8    "/><polyline class="st0" id="Fill-54" points="-335.6,-233.8 -358.2,-256.4 -356.3,-258.3 -333.7,-235.7 -335.6,-233.8    "/></g></g></svg>
                         </div>
                    </div>
                    
                </label>
                <div class="box">
                    <label class="text-avant-input">
                        <svg class="svg-input" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z" id="XMLID_223_"/></svg>
                    </label>
                    <input type="text" placeholder="Tapez un symptôme, une spécialité" name="specialiteD">
                </div>
                <div class="box">
                    <label class="text-avant-input">
                        <svg class="svg-input" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M61,20H48V3a1,1,0,0,0-1-1H17a1,1,0,0,0-1,1V20H3a1,1,0,0,0-1,1V61a1,1,0,0,0,1,1H61a1,1,0,0,0,1-1V21A1,1,0,0,0,61,20ZM4,22H16V60H4ZM35,50V60H29V50ZM46,60H37V50h2V48H25v2h2V60H18V4H46Zm14,0H48V22H60Z"/><path d="M51,32h6a1,1,0,0,0,1-1V25a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,32Zm1-6h4v4H52Z"/><path d="M51,42h6a1,1,0,0,0,1-1V35a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,42Zm1-6h4v4H52Z"/><path d="M51,52h6a1,1,0,0,0,1-1V45a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,52Zm1-6h4v4H52Z"/><path d="M13,24H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V25A1,1,0,0,0,13,24Zm-1,6H8V26h4Z"/><path d="M21,28h4a1,1,0,0,0,1-1V23a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,28Zm1-4h2v2H22Z"/><path d="M34,22H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V23A1,1,0,0,0,34,22Zm-1,4H31V24h2Z"/><path d="M38,23v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V23a1,1,0,0,0-1-1H39A1,1,0,0,0,38,23Zm2,1h2v2H40Z"/><path d="M21,36h4a1,1,0,0,0,1-1V31a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,36Zm1-4h2v2H22Z"/><path d="M34,30H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V31A1,1,0,0,0,34,30Zm-1,4H31V32h2Z"/><path d="M43,30H39a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V31A1,1,0,0,0,43,30Zm-1,4H40V32h2Z"/><path d="M21,44h4a1,1,0,0,0,1-1V39a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,44Zm1-4h2v2H22Z"/><path d="M34,38H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V39A1,1,0,0,0,34,38Zm-1,4H31V40h2Z"/><path d="M43,38H39a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V39A1,1,0,0,0,43,38Zm-1,4H40V40h2Z"/><path d="M13,34H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V35A1,1,0,0,0,13,34Zm-1,6H8V36h4Z"/><path d="M13,44H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V45A1,1,0,0,0,13,44Zm-1,6H8V46h4Z"/><path d="M26,16h3v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V16h3a1,1,0,0,0,1-1V11a1,1,0,0,0-1-1H35V7a1,1,0,0,0-1-1H30a1,1,0,0,0-1,1v3H26a1,1,0,0,0-1,1v4A1,1,0,0,0,26,16Zm1-4h3a1,1,0,0,0,1-1V8h2v3a1,1,0,0,0,1,1h3v2H34a1,1,0,0,0-1,1v3H31V15a1,1,0,0,0-1-1H27Z"/><rect height="2" width="2" x="42" y="56"/><rect height="2" width="2" x="42" y="52"/><rect height="2" width="2" x="42" y="48"/></svg>
                    </label>
                    <input type="text" placeholder="Centre" name="centre">
                </div>
                <div class="box">
                    <label class="text-avant-input"><svg class="svg-input" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="16" cy="11" r="4"/><path d="M24 15c-3 7-8 15-8 15s-5-8-8-15s2-13 8-13s11 6 8 13Z"/></g></svg></label>
                    <input type="text" placeholder="Ville ou code postal" name="ville">
                </div>
                <button class="btn" id="landing-search">Rechercher <svg style="display: none;" class="search-btn" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z" id="XMLID_223_"/></svg>
                </button>
            </div>













            <div class="input2 inputs" id="input2" style="display: <?php echo $_SESSION['form-a']; ?>;">
                    <div class="container-delete">
                    <?php 
                    if ($_SESSION['empty-a'] == 'ok') {
                    echo "<div class='empty-message'> <p class='red-empty'>Au moins un champ doit être rempli </p></div>";
                    }
                    ?>
                        <label>
                        <input type="radio" name="rad" id="4" value="0" onclick="img(4); finlok();">
                        <div class="content-delete">
                            <svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                 .st0{fill:#134563;
                                 }
                                 .st0{width: 50px; height: 50px;}
                             </style><g><g id="Icon-Close-O" transform="translate(378.000000, 278.000000)"><path class="st0" d="M-345.9-222.1c-13.2,0-23.9-10.7-23.9-23.9c0-13.2,10.7-23.9,23.9-23.9     c13.2,0,23.9,10.7,23.9,23.9C-322-232.9-332.7-222.1-345.9-222.1L-345.9-222.1z M-345.9-267.4c-11.7,0-21.3,9.6-21.3,21.3     c0,11.7,9.6,21.3,21.3,21.3s21.3-9.6,21.3-21.3C-324.6-257.8-334.2-267.4-345.9-267.4L-345.9-267.4z" id="Fill-52"/><polyline class="st0" id="Fill-53" points="-356.3,-233.8 -358.2,-235.7 -335.6,-258.3 -333.7,-256.4 -356.3,-233.8    "/><polyline class="st0" id="Fill-54" points="-335.6,-233.8 -358.2,-256.4 -356.3,-258.3 -333.7,-235.7 -335.6,-233.8    "/></g></g></svg>
                         </div>
                    </div>
                    
                </label>
                <div class="box">
                    <label class="text-avant-input">
                        <svg class="svg-input" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z" id="XMLID_223_"/></svg>
                    </label>
                    <input type="text" placeholder="Tapez un symptôme, une spécialité" name="specialiteA">
                </div>
                <div class="box">
                    <label class="text-avant-input">
                        <svg class="svg-input" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M61,20H48V3a1,1,0,0,0-1-1H17a1,1,0,0,0-1,1V20H3a1,1,0,0,0-1,1V61a1,1,0,0,0,1,1H61a1,1,0,0,0,1-1V21A1,1,0,0,0,61,20ZM4,22H16V60H4ZM35,50V60H29V50ZM46,60H37V50h2V48H25v2h2V60H18V4H46Zm14,0H48V22H60Z"/><path d="M51,32h6a1,1,0,0,0,1-1V25a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,32Zm1-6h4v4H52Z"/><path d="M51,42h6a1,1,0,0,0,1-1V35a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,42Zm1-6h4v4H52Z"/><path d="M51,52h6a1,1,0,0,0,1-1V45a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,52Zm1-6h4v4H52Z"/><path d="M13,24H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V25A1,1,0,0,0,13,24Zm-1,6H8V26h4Z"/><path d="M21,28h4a1,1,0,0,0,1-1V23a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,28Zm1-4h2v2H22Z"/><path d="M34,22H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V23A1,1,0,0,0,34,22Zm-1,4H31V24h2Z"/><path d="M38,23v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V23a1,1,0,0,0-1-1H39A1,1,0,0,0,38,23Zm2,1h2v2H40Z"/><path d="M21,36h4a1,1,0,0,0,1-1V31a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,36Zm1-4h2v2H22Z"/><path d="M34,30H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V31A1,1,0,0,0,34,30Zm-1,4H31V32h2Z"/><path d="M43,30H39a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V31A1,1,0,0,0,43,30Zm-1,4H40V32h2Z"/><path d="M21,44h4a1,1,0,0,0,1-1V39a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,44Zm1-4h2v2H22Z"/><path d="M34,38H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V39A1,1,0,0,0,34,38Zm-1,4H31V40h2Z"/><path d="M43,38H39a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V39A1,1,0,0,0,43,38Zm-1,4H40V40h2Z"/><path d="M13,34H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V35A1,1,0,0,0,13,34Zm-1,6H8V36h4Z"/><path d="M13,44H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V45A1,1,0,0,0,13,44Zm-1,6H8V46h4Z"/><path d="M26,16h3v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V16h3a1,1,0,0,0,1-1V11a1,1,0,0,0-1-1H35V7a1,1,0,0,0-1-1H30a1,1,0,0,0-1,1v3H26a1,1,0,0,0-1,1v4A1,1,0,0,0,26,16Zm1-4h3a1,1,0,0,0,1-1V8h2v3a1,1,0,0,0,1,1h3v2H34a1,1,0,0,0-1,1v3H31V15a1,1,0,0,0-1-1H27Z"/><rect height="2" width="2" x="42" y="56"/><rect height="2" width="2" x="42" y="52"/><rect height="2" width="2" x="42" y="48"/></svg>
                    </label>
                    <input type="text" placeholder="Centre" name="centre">
                </div>
                <div class="box">
                    <label class="text-avant-input"><svg class="svg-input" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="16" cy="11" r="4"/><path d="M24 15c-3 7-8 15-8 15s-5-8-8-15s2-13 8-13s11 6 8 13Z"/></g></svg></label>
                    <input type="text" placeholder="Ville ou code postal" name="ville">
                </div>
                <button class="btn" id="landing-search">Rechercher <svg style="display: none;" class="search-btn" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z" id="XMLID_223_"/></svg>
                </button>
            </div>


















            <div class="input3 inputs" id="input3" style="display: <?php echo $_SESSION['form-c']; ?>;">
                    <div class="container-delete">
                    <?php 
                    if ($_SESSION['empty-c'] == 'ok') {
                    echo "<div class='empty-message'> <p class='red-empty'>Au moins un champ doit être rempli </p></div>";
                    }
                    ?>
                        <label>
                        <input type="radio" name="rad" id="4" value="0" onclick="img(4); finlok();">
                        <div class="content-delete">
                            <svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                 .st0{fill:#134563;
                                 }
                                 .st0{width: 50px; height: 50px;}
                             </style><g><g id="Icon-Close-O" transform="translate(378.000000, 278.000000)"><path class="st0" d="M-345.9-222.1c-13.2,0-23.9-10.7-23.9-23.9c0-13.2,10.7-23.9,23.9-23.9     c13.2,0,23.9,10.7,23.9,23.9C-322-232.9-332.7-222.1-345.9-222.1L-345.9-222.1z M-345.9-267.4c-11.7,0-21.3,9.6-21.3,21.3     c0,11.7,9.6,21.3,21.3,21.3s21.3-9.6,21.3-21.3C-324.6-257.8-334.2-267.4-345.9-267.4L-345.9-267.4z" id="Fill-52"/><polyline class="st0" id="Fill-53" points="-356.3,-233.8 -358.2,-235.7 -335.6,-258.3 -333.7,-256.4 -356.3,-233.8    "/><polyline class="st0" id="Fill-54" points="-335.6,-233.8 -358.2,-256.4 -356.3,-258.3 -333.7,-235.7 -335.6,-233.8    "/></g></g></svg>
                         </div>
                    </div>
                    
                </label>
                <div class="box">
                    <label class="text-avant-input">
                        <svg class="svg-input" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z" id="XMLID_223_"/></svg>
                    </label>
                    <input type="text" placeholder="Tapez un symptôme, une spécialité" name="specialiteC">
                </div>
                <div class="box">
                    <label class="text-avant-input">
                        <svg class="svg-input" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M61,20H48V3a1,1,0,0,0-1-1H17a1,1,0,0,0-1,1V20H3a1,1,0,0,0-1,1V61a1,1,0,0,0,1,1H61a1,1,0,0,0,1-1V21A1,1,0,0,0,61,20ZM4,22H16V60H4ZM35,50V60H29V50ZM46,60H37V50h2V48H25v2h2V60H18V4H46Zm14,0H48V22H60Z"/><path d="M51,32h6a1,1,0,0,0,1-1V25a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,32Zm1-6h4v4H52Z"/><path d="M51,42h6a1,1,0,0,0,1-1V35a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,42Zm1-6h4v4H52Z"/><path d="M51,52h6a1,1,0,0,0,1-1V45a1,1,0,0,0-1-1H51a1,1,0,0,0-1,1v6A1,1,0,0,0,51,52Zm1-6h4v4H52Z"/><path d="M13,24H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V25A1,1,0,0,0,13,24Zm-1,6H8V26h4Z"/><path d="M21,28h4a1,1,0,0,0,1-1V23a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,28Zm1-4h2v2H22Z"/><path d="M34,22H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V23A1,1,0,0,0,34,22Zm-1,4H31V24h2Z"/><path d="M38,23v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V23a1,1,0,0,0-1-1H39A1,1,0,0,0,38,23Zm2,1h2v2H40Z"/><path d="M21,36h4a1,1,0,0,0,1-1V31a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,36Zm1-4h2v2H22Z"/><path d="M34,30H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V31A1,1,0,0,0,34,30Zm-1,4H31V32h2Z"/><path d="M43,30H39a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V31A1,1,0,0,0,43,30Zm-1,4H40V32h2Z"/><path d="M21,44h4a1,1,0,0,0,1-1V39a1,1,0,0,0-1-1H21a1,1,0,0,0-1,1v4A1,1,0,0,0,21,44Zm1-4h2v2H22Z"/><path d="M34,38H30a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V39A1,1,0,0,0,34,38Zm-1,4H31V40h2Z"/><path d="M43,38H39a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V39A1,1,0,0,0,43,38Zm-1,4H40V40h2Z"/><path d="M13,34H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V35A1,1,0,0,0,13,34Zm-1,6H8V36h4Z"/><path d="M13,44H7a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V45A1,1,0,0,0,13,44Zm-1,6H8V46h4Z"/><path d="M26,16h3v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V16h3a1,1,0,0,0,1-1V11a1,1,0,0,0-1-1H35V7a1,1,0,0,0-1-1H30a1,1,0,0,0-1,1v3H26a1,1,0,0,0-1,1v4A1,1,0,0,0,26,16Zm1-4h3a1,1,0,0,0,1-1V8h2v3a1,1,0,0,0,1,1h3v2H34a1,1,0,0,0-1,1v3H31V15a1,1,0,0,0-1-1H27Z"/><rect height="2" width="2" x="42" y="56"/><rect height="2" width="2" x="42" y="52"/><rect height="2" width="2" x="42" y="48"/></svg>
                    </label>
                    <input type="text" placeholder="Centre" name="centre">
                </div>
                <div class="box">
                    <label class="text-avant-input"><svg class="svg-input" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="16" cy="11" r="4"/><path d="M24 15c-3 7-8 15-8 15s-5-8-8-15s2-13 8-13s11 6 8 13Z"/></g></svg></label>
                    <input type="text" placeholder="Ville ou code postal" name="ville">
                </div>
                <button class="btn" id="landing-search">Rechercher <svg style="display: none;" class="search-btn" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z" id="XMLID_223_"/></svg>
                </button>
            </div>


            







            
            



        </form>
    </div>