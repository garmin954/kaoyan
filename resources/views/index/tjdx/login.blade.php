<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
    <title>考生平台</title>

    <link href="static/tongji/css/pingtai.css" rel="stylesheet" type="text/css"></link>

    <script type="text/javascript" src="static/tongji/js/jquery.min.js"></script>
    <script type="text/javascript" src="static/tongji/js/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="static/tongji/js/easyui-lang-zh_cn.js"></script>
    <script type="text/javascript" src="static/tongji/js/utils.js"></script>
    <script type="text/javascript" src="static/tongji/js/aes.js"></script>
    <script type="text/javascript" src="static/tongji/js/pad-zeropadding-min.js"></script>
    <script type="text/javascript" src="static/tongji/js/jquery.idcode.js"></script>

    <link rel="stylesheet" href="static/tongji/css/easyui.css" type="text/css"></link>
    <link rel="stylesheet" href="static/tongji/css/icon.css" type="text/css"></link>
    <link rel="stylesheet" href="static/tongji/css/color.css" type="text/css"></link>
    <link rel="stylesheet" href="static/tongji/css/jquery.idcode.css" type="text/css"></link>

</head>
<body style="overflow-x:hidden;overflow-y:hidden" onselect="return false">
<div id="touming" draggable="false"></div>
<div class="all">
    <div id="login_dialog" title="" class="panel-body panel-body-noborder window-body" style="width: 488px; height: 241px;">


        <form id="login_xscx_form" name="input_xscx_form" method="post" action="ssxscx.do">
            <br><h1 align="center">硕士考生查询系统</h1>
            <hr>
            <p id="errorMsg" style="color: red"><font color="red"><b></b></font></p>
            <table align="center">
                <tbody>
                <tr>
                    <td>
                        <input id="input_zjhm" class="easyui-textbox textbox-f" style="width: 300px; height: 25px; display: none;" maxlength="18" data-options="prompt:'证件号码',iconCls:'icon-man',iconWidth:38,required:true" textboxname="input_zjhm">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="input_ksbh" class="easyui-textbox textbox-f" style="width: 300px; height: 25px; display: none;" maxlength="15" data-options="prompt:'考生编号',iconCls:'icon-man',iconWidth:38,required:true" textboxname="input_ksbh">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="Txtidcode" class="easyui-textbox textbox-f" style="display: none;">
                        <span id="idcode" style="display: inline-block;">
                            <div id="ehong-code" class="ehong-idcode-val ehong-idcode-val2" href="#" onblur="return false" onfocus="return false" oncontextmenu="return false" onclick="$.idcode.setCode()">
                                <font color="#BC3087">N</font><font color="#243F5F">6</font><font color="#18975F">s</font><font color="#E69A2A">q</font><font color="#D6A03C">e</font></div><span id="ehong-code-tip-ck" class="ehong-code-val-tip" onclick="$.idcode.setCode()">换个验证码?</span></span>
                    </td>
                </tr>
                <tr height="50px">
                    <td align="center">
                        <a href="#" onclick="javascript:submitxXscxLogin();" class="easyui-linkbutton c8 l-btn l-btn-small" style="width:120px;height:30px" group="" id=""><span class="l-btn-left" style="margin-top: 0px;"><span class="l-btn-text">登  录</span></span></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>

        <script type="text/javascript">
            $.idcode.setCode();

            function encrypt(data) {
                var key  = CryptoJS.enc.Latin1.parse("s0vp9lKSXW4L8CWU");
                var iv   = CryptoJS.enc.Latin1.parse("Wrm7h5DKdRWwds03");
                return CryptoJS.AES.encrypt(data, key, {iv:iv,mode:CryptoJS.mode.CBC,padding:CryptoJS.pad.ZeroPadding}).toString();
            }

            function submitxXscxLogin() {
                var IsBy = $.idcode.validateCode();
                if (!IsBy) {
                    $("#errorMsg").html("验证码填写不正确！");
                    return;
                }


                if($('#_easyui_textbox_input1').next().attr('value') !== '43335894456215784' || $('#_easyui_textbox_input2').next().attr('value') !== '2020156321516321'){
                    $("#errorMsg").html("账号不存在 请核对证件号码和考生编号！");
                    return;
                }


                var isValid = $('#input_xscx_form').form('validate');
                if (isValid) {
                    $("#zjhm").val(encrypt($("#input_zjhm").val()));

                    if ( $("#input_ksbh").length > 0 ) {
                        $("#ksbh").val(encrypt($("#input_ksbh").val()));
                    }
                    $('#login_xscx_form').submit();
                }
            }
        </script>
    </div>
</div>
</body>
</html>

