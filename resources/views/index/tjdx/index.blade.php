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
    <div id="login_dialog" style="overflow: hidden">

    </div>
    <div class="pt">
        <div class="pt_title">



            <font size="6" color="#097ad8" face="汉仪综艺体简">同济大学</font>
            <font size="5" color="#097ad8" face="汉仪综艺体简">研究生招生管理平台</font>


        </div>
    </div>
    <div class="pt_blue">
        <div class="pt_bluevon" style="white-space:nowrap;">

            <a href="javascript:loginDialog('login_tmbm.jsp');">
                <img src="static/tongji/picture/btn-1.jpg" width="162" height="166" title="硕士推免报名系统"></img>
            </a>




            <a href="masterSignUpFeeSearch.do" >
                <img src="static/tongji/picture/btn-9.jpg" width="162" height="166" title="硕士报名费交费"></img>
            </a>



            <a href="javascript:loginDialog('login_xscx.jsp');">
                <img src="static/tongji/picture/btn-2.jpg" width="162" height="166" title="硕士考生查询系统"></img>
            </a>



            <a href="javascript:loginDialog('login_bsbm.jsp');">
                <img src="static/tongji/picture/btn-8.jpg" width="162" height="166" title="博士报名查询系统"></img>
            </a>

        </div>
    </div>
    <div class="pt_gg">
        <div class="pt_ggcon">
            <div class="pt_ggcon_top">
                <div class="pt_ggcon_top_left">公告</div>
                <div class="pt_ggcon_top_right">
                    <a href="https://yjszs.tongji.edu.cn/moreNotice.jsp" target="_blank">更多&gt;&gt;</a>
                </div>
            </div>
            <div class="pt_ggcon_bottom">
                <ul>

                    <li>
                        <a href="https://yjszs.tongji.edu.cn/showDetial.jsp?noticeId=6e8916ab-27ac-452e-abcb-a8b7b9c061ba" target="_blank">


                            2020年博士生网报公告

                            (2019-11-02)
                        </a>
                    </li>

                    <li>
                        <a href="https://yjszs.tongji.edu.cn/showDetial.jsp?noticeId=74dfa5f3-8800-4643-96a0-3b8626fd1a34" target="_blank">


                            本网站网上报名建议使用火狐浏览器

                            (2017-08-10)
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        if(''!=''){
            var url = location.href;
            if(url.indexOf("sstmbm.do")>0){
                loginDialog('login_tmbm.jsp');
            }else if(url.indexOf("bsbm.do")>0){
                loginDialog('login_bsbm.jsp');
            }else if(url.indexOf("ssxscx.do")>0){
                loginDialog('login_xscx.jsp');
            }else if(url.indexOf("sstjbm.do")>0){
                loginDialog('login_sstjbm.jsp');
            }else if(url.indexOf("xlybm.do")>0){
                loginDialog('login_xlybm.jsp');
            }else if(url.indexOf("ssxcqr.do")>0){
                loginDialog('login_ssxcqr.jsp');
            }else if(url.indexOf("yxydy.do")>0){
                loginDialog('login_yxydy.jsp');
            }
        }
    });

    function loginDialog(page) {
        $('#login_dialog').dialog({
            title:' ',
            top : 100,
            width : 500,
            height : 280,
            modal:true,
            href : page,
            onLoad:function(){
                $("#errorMsg").append('<font color="red"><b></b></font>');
            }
        });
    }
</script>
