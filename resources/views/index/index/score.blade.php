<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <title>全国硕士研究生统一招生考试部分考生初试成绩查询系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <link rel="icon" href='/favicon.ico' type="image/x-icon"/>
    <link rel="stylesheet" href='{{asset('static/yanzhaowan')}}/css/iconfont.css'>
    <link rel="stylesheet" href="{{asset('static/yanzhaowan')}}/css/yz.min.css">
    <script src="{{asset('static/yanzhaowan')}}/js/jquery.min.js"></script>
    <script src="{{asset('static/yanzhaowan')}}/js/showchsi_m.js"></script>
    <style type="text/css">
        .cjcx-box {margin-top: 24px; margin-bottom: 20px; border: 1px solid #e5e5e5; padding: 48px 82px;position: relative;}
        .cjxx-info-title {text-align: right;width: 100px;color: #999;vertical-align: top;}
        .cjxx-info-content {text-align: left;;padding-left: 10px;vertical-align: top;word-break: break-all;}
        .cjxx-info {width: 540px;}
        .cjxx-info tr {height: 36px}
        .cjxx-info tr.cjxx-info-cut {height: 15px;}
        .cjcx-bz {position: absolute;width: 300px;padding: 25px;top: 48px;right: 110px;background: #f7f9fa;}
        .cjcx-bz-title {font-size: 16px; line-height: 1;margin-bottom: 15px;font-weight: 400;color:#666;}
        .cjcx-bz-content {text-indent: 0;color:#666;word-break: break-all;}
        .cjcx-bz-content .ch-paragraph14{margin-bottom: 0;}
        .cjcx-tip {margin-top: 20px;margin-bottom: 30px;}
        .cjcx-tip .ch-paragraph14{text-indent: 0;color: #999;}
        .cjcx-noresult {color: #999;font-size: 14px;}
    </style>

    <script src="{{asset('static/yanzhaowan')}}/js/boomerang-min-20141211.js" type="text/javascript"></script>
    <script type="text/javascript">
        BOOMR.init({
            beacon_url: "https://www.chsi.com.cn/images/perf.gif",
            log: null,
            DNS:{
                base_url: "http://*.chdi.com.cn/images/"
            }
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-100524-7']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body class="ch-sticky">
<div class="main-wrapper">
    <!-- 硕士成绩查询主体-首页 -->




    <!-- 1：吊顶区域 -->
    <style>
        /**
         * description: top-nav-wrapper: 吊顶;
         * author: myx;
         * date: 2017-08;
         */
        .top-nav-wrapper {
            width: 100%;
            height: 40px;
            line-height: 40px;
            background: #f7f9fa;
            border-bottom: 1px solid #d6d6d6;
            font-size: 12px;
        }
        .top-nav-wrapper a {
            color: #333;
        }
        .top-nav-wrapper a.hot {
            color: #ee6464;
        }
        .top-nav-wrapper a:hover {
            text-decoration: underline;
        }
        .top-nav-wrapper .top-nav {
            width: 1180px;
            margin: 0 auto;
        }
        .top-nav-wrapper .top-nav-list {
            float: left;
            width: 980px;
            height: 40px;
        }
        .top-nav-wrapper .top-nav-list a {
            margin: 0 10px;
        }
        .top-nav-wrapper .top-nav-list a.top-nav-home {
            display: inline-block;
            width: 45px;
            height: 40px;
            padding-left: 50px;
            margin-right: 15px;
            margin-left: 0px;
            margin-top: -1px;
            background-image: url('{{asset('static/yanzhaowan')}}/images/logo-min.png');
            background-image: -webkit-image-set(url('https://t2.chei.com.cn/yz/assets/images/logo-min.png') 1x, url('https://t4.chei.com.cn/yz/assets/images/logo-min2x.png') 2x);
            background-repeat: no-repeat;
            background-position: 0 11px;
            color: #1787e0;
            font-weight: bold;
            vertical-align: middle;
        }
        .top-nav-wrapper .top-nav-list a.top-nav-home:hover{
            text-decoration: none;
        }
        .top-nav-wrapper .top-nav-load {
            float: right;
            width: 200px;
            height: 40px;
            text-align: right;
        }
        .top-nav-wrapper .top-nav-load a {
            margin: 0 5px;
        }
        .top-nav-hide {
            position: relative;
            margin-left: 10px;
            cursor: pointer;
            color: #999;
        }
        .top-nav-hide:hover {
            color: #333;
        }
        .top-nav-hide:hover .top-nav-pop {
            display: block;
        }
        .top-nav-hide .iconfont {
            font-size: 12px;
            margin-right: -5px;
        }
        .top-nav-pop{
            display: none;
            position: absolute;
            left: 0px;
            top: 12px;
            padding-top: 14px;
            z-index: 9999;
        }
        .top-nav-hide ul {
            width: 135px;
            padding: 6px 0;
            border: 1px solid #e5e5e5;
            border-bottom: none;
            background: #fff;
            box-shadow: 2px 2px 8px #cdcdcd;
        }
        .top-nav-hide li {
            line-height: 35px;
        }
        .top-nav-wrapper .top-nav-hide li a {
            display: block;
            margin: 0 10px;
            border-bottom: 1px dashed #e5e5e5;
        }
        .top-nav-wrapper .top-nav-hide li.last a {
            border-bottom: none;
        }
        .top-nav-wrapper .top-nav-hide li a:hover {
            background: #f2f2f2;
            margin: 0;
            padding: 0 10px;
            border-bottom: 1px dashed #f2f2f2;
            font-weight: 700;
            text-decoration: none;
        }
        .top-nav-wrapper .top-nav-hide li.last a:hover {
            border-bottom: none;
        }
        .top-nav-point {
            font-family: tahoma, arial, 'Microsoft YaHei', "Hiragino Sans GB", SimSun, sans-serif;
        }
    </style>
    <div class="top-nav-wrapper">
        <div class="top-nav clearfix">
            <div class="top-nav-list">
                <a href="/" class="top-nav-home">&ensp;</a>
                <a href="/kyzx/zcdh/" target="_self">政策</a>
                <a href="/kyinfo/" target="_self">资讯</a>
                <a href="/sch/" target="_self">院校库</a>
                <a href="/zyk/" target="_self">专业库</a>
                <a href="/zsml/zyfx_search.jsp" target="_self">硕士目录</a>
                <a href="/sswbgg/" target="_self">网报公告</a>
                <a href="/yzwb/" target="_self">统考网报</a>
                <a href="/tm/" target="_blank">推免服务</a>
                <a href="/yztj/" target="_self">网上调剂</a>
                <a href="/zsgs/" target="_self">信息公开</a>
                <a href="/zxdy/" target="_self">在线咨询</a>
                <span class="top-nav-hide">
                <span class="top-nav-point">• • •</span>
                <div class="top-nav-pop">
                    <ul>
                        <li><a href="/z/yzzyss/" target="_self">专业学位</a></li>
                        <li><a href="/yzzt/zyqmjx/" target="_self">专业解析</a></li>
                        <li><a href="/yzzt/kyfs2017/" target="_self">复试分数线</a></li>
                        <li><a href="/bsmlcx/index.jsp" target="_self">博士目录</a></li>
                        <li class="last"><a href="/bsbm/" target="_self">博士网报</a></li>
                    </ul>
                </div>
            </span>
            </div>
            <div class="top-nav-load">


                <a href="https://yz.chsi.com.cn/user/?entrytype=yzgr">登录</a>
                |
                <a href="https://account.chsi.com.cn/account/preregister.action?from=yz-home">注册</a>



                |
                <a href="/help/">帮助中心</a>
            </div>
        </div>
    </div>

    <div class="header-wrapper ch-simple">
        <div class="ch-header-second clearfix">
            <h1>硕士初试成绩查询</h1>
            <div class="ch-sub-title">本系统所有数据均为招生单位提供，招生单位对查询结果负责解释</div>
            <div class="ch-search-box">
                <!-- 共用站内搜索代码 -->


                <style>

                    .ch-search-form span,.ch-search-form .ch-search-input {
                        font-size: 14px;
                        vertical-align: middle;
                        font-family: "Helvetica Neue",Helvetica,"PingFang SC","Microsoft YaHei","Hiragino Sans GB","WenQuanYi Micro Hei",Arial,sans-serif;
                    }

                    .ch-search-form input[type="button"]::-moz-focus-inner{ border:none;padding:0;}
                    .ch-search-input {
                        float: left;
                        width: 205px;
                        height: 38px;
                        line-height: 38px;
                        border: 1px solid #d6d6d6;
                        padding: 0 8px;
                        outline: 0;
                        box-sizing: content-box;
                    }

                    .ch-search-btn {
                        float: left;
                        width: 56px;
                        height: 40px;
                        border: none;
                        background: #1787e0;
                        cursor: pointer;
                        vertical-align: middle
                    }

                    .ch-search-btn .iconfont {
                        font-size: 18px;
                        color: #fff
                    }
                </style>
                <!-- 共用站内搜索代码 -->
                <form class="ch-search-form clearfix" method="get" action="http://yz.chsi.com.cn/result.jsp" target="_blank" name="searchinfo" onSubmit="return searchSubmit()">
                    <input class="ch-search-input" id="sbi" name="q" type="text" placeholder="站内搜索" maxlength="40">
                    <button class="ch-search-btn" id="sbb" name="sa" type="submit"><i class="iconfont" title="站内搜索">&#xe6a9;</i></button>
                    <input name="searchType" type="hidden" value="baidu">
                    <input name="sitesearch" type="hidden" value="yz.chsi.com.cn">
                </form>
                <script>
                    String.prototype.trim = function () {
                        return this.replace(/(^\s*)|(\s*$)/g, "");
                    }

                    function searchSubmit() {
                        var y = document.getElementById('sbi').value.trim();
                        if (y == null || y == '' || y == '站内搜索') {
                            alert('搜索关键字不能为空');
                            return false;
                        } else if (y.length < 2) {
                            alert('请至少输入2个文字');
                            return false
                        } else if (y.length > 40) {
                            alert('最多可输入40个文字');
                            return false
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="container clearfix">

        <div class="cjcx-box">
            <table class="cjxx-info">
                <tr>
                    <td class="cjxx-info-title">姓名：</td>
                    <td class="cjxx-info-content">{{$info->name}}</td>
                </tr>
                <tr>
                    <td class="cjxx-info-title">报名号：</td>
                    <td class="cjxx-info-content">2014{{rand(11111,99999)}}</td>
                </tr>
                <tr>
                    <td class="cjxx-info-title">准考证号：</td>
                    <td class="cjxx-info-content">{{$info->ticket}}</td>
                </tr>
                <tr class="cjxx-info-cut">
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td class="cjxx-info-title">总分：</td>
                    <td class="cjxx-info-content">{{$total}}</td>
                </tr>

                @foreach($score as $key => $scores)
                <tr>
                    <td class="cjxx-info-title">第{{$zh_number[$key]}}门：</td>
                    <td class="cjxx-info-content">（{{$scores['code']}}）{{$scores['name']}}:{{$scores['score']}}</td>
                </tr>
                @endforeach

                <tr class="cjxx-info-cut">
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td class="cjxx-info-title">备注：</td>
                    <td class="cjxx-info-content">
                        {{$info->memo?:'无'}}</td>
                </tr>
                <tr class="cjxx-info-cut">
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td class="cjxx-info-title"></td>
                    <td class="cjxx-info-content">
                        <a class="ch-btn" onclick="window.history.back()">返回</a>
                    </td>
                </tr>
            </table>

            <div class="cjcx-bz">
                <h2 class="cjcx-bz-title">招生单位说明</h2>
                <p class="ch-paragraph14 cjcx-bz-content">我校初步定于3 月底或4 月上旬进行2020年硕士研究生招生考试复试，具体复试办法、时间、资格审查、体检等相关安排均在研究生院网站公布。</p>
            </div>

        </div>
        <div class="cjcx-tip">
            <p class="ch-paragraph14">注：若查询的成绩为负值，表示有缺考、违纪等情况。若仍对查询结果有疑问，请咨询相应的招生单位。</p>
        </div>

    </div>
</div>



<!-- 4: 底部区域 -->
<style>
    /**
     * description: footer 共用底部;
     * author:myx;
     * date:2017-07;
     */

    .footer-wrapper {
        line-height: 30px;
        background: #282828;
        color: #ababab;
    }

    .footer-wrapper a {
        color: #ababab;
    }

    .footer-wrapper .footer {
        position: relative;
        width: 1180px;
        height: 198px;
        margin: 0 auto;
    }

    .footer-wrapper .footer-list {
        position: absolute;
        top: 32px;
        left: 0px;
    }

    .footer-wrapper .footer-list a {
        margin-right: 15px;
    }

    .footer-wrapper .footer-units {
        position: absolute;
        top: 75px;
        left: 0px;
    }

    .footer-wrapper .footer-media {
        position: absolute;
        top: 32px;
        left: 844px;
    }

    .footer-wrapper .footer-media a {
        display: inline-block;
        margin-right: 30px;
        vertical-align: top;
    }

    .footer-wrapper .footer-media a:hover {
        text-decoration: none;
    }

    .footer-wrapper .footer-media .iconfont {
        margin-right: 5px;
        font-size: 20px;
        vertical-align: middle;
    }

    .footer-wrapper .footer-msg {
        position: absolute;
        top: 75px;
        left: 844px;
    }
</style>
<div class="footer-wrapper">
    <div class="footer">
        <div class="footer-list">
            <a href="http://www.chsi.com.cn/" target="_blank">学信网</a>
            <a href="http://chesicc.moe.edu.cn/zxgw/zxjs/201604/20160418/1529506207.html" target="_blank">中心简介</a>
            <a href="/doc/about.jsp" target="_blank">关于我们</a>
            <a href="/doc/copyright.jsp" target="_blank">版权声明</a>
            <a href="/help/" target="_blank">帮助中心</a>
            <a href="/sitemap.jsp" target="_blank">网站地图</a>
            <a href="/doc/adv.jsp" target="_blank">宣传代理</a>
        </div>
        <div class="footer-units">
            主管单位：<a href="http://www.moe.edu.cn/s78/A15/" target="_blank">教育部高校学生司</a><br>
            主办单位：<a href="http://chesicc.moe.edu.cn/" target="_blank">全国高等学校学生信息咨询与就业指导中心</a><br>
            承办单位：<a href="http://www.chsi.com.cn/" target="_blank">学信网</a>
        </div>
        <div class="footer-media">
            <a href="/kyzx/kp/wbwx.shtml" target="_blank"><i class="iconfont" title="官方微信">&#xe694;</i>官方微信</a>
            <a href="/kyzx/kp/wbwx.shtml" target="_blank"><i class="iconfont" title="官方微博">&#xe693;</i>官方微博</a>
        </div>
        <div class="footer-msg">
            服务热线：010-82199588<br>
            客服邮箱：kefu#chsi.com.cn（将#替换为@）<br>
            <a href="http://www.miibeian.gov.cn/" target="_blank">京ICP证030485号</a>
        </div>
    </div>
</div>
</body>
</html>
