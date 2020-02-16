<!DOCTYPE html>
<html>
<head>
    <title>全国硕士研究生统一招生考试部分考生初试成绩查询系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <link rel="icon" href='/favicon.ico' type="image/x-icon"/>
    <link rel="stylesheet" href='{{asset('static/yanzhaowan')}}/css/iconfont.css'>
    <link rel="stylesheet" href='{{asset('static/yanzhaowan')}}/css/iview.css'>
    <link rel="stylesheet" href='{{asset('static/yanzhaowan')}}/css/wb-pc.min.css'>
    <style>
        html {
            height: 100%;
        }
        .ch-sticky {
            height: 100%;
            position: relative;
            background: #fff;
        }
        .ch-sticky .main-wrapper-org {
            min-height: 100%;
        }
        .ch-sticky .main-wrapper-org .container {
            padding-bottom: 198px
        }
        .ch-sticky .footer-wrapper {
            margin-top: -198px
        }
        .footer {
            border:none;
        }
        .ch-simple {
            border-bottom: 2px solid #1787e0
        }
        .main-wrapper {
            margin-bottom: 25px;
        }
        .ch-header-second {
            width: 1180px;
            height: 80px;
            margin: 0 auto;
            overflow: hidden
        }
        .ch-header-second h1 {
            float: left;
            line-height: 80px;
            margin-right: 20px;
            font-size: 30px;
            letter-spacing: 2px;
            color: #1787e0
        }
        .ch-header-second .ch-sub-title {
            float: left;
            line-height: 90px
        }
        .ch-header-second .ch-search-box {
            float: right;
            padding-top: 20px;
            width: 280px
        }
        .ch-header-second .ch-search-box span,.ch-header-second .ch-search-input {
            float: left;
            font-size: 14px;
            vertical-align: middle
        }
        .ch-header-second .ch-search-input {
            width: 205px;
            height: 38px;
            line-height: 38px;
            border: 1px solid #d6d6d6;
            padding: 0 8px;
            outline: 0
        }
        .ch-header-second .ch-search-btn {
            float: left;
            width: 56px;
            height: 40px;
            border: none;
            background: #1787e0;
            cursor: pointer;
            vertical-align: middle
        }
        .ch-header-second .ch-search-btn .iconfont {
            font-size: 18px;
            color: #fff
        }
        .ch-header-second .ch-header-link {
            float: right;
            height: 80px;
            line-height: 80px;
            margin-right: 20px
        }
        .top-nav-wrapper .top-nav-list a.top-nav-home {
            box-sizing: content-box;
        }
    </style>
    <script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/polyfill.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/jquery.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/vee-validate.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/zh_cn.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/vue.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/iview.min.js'></script>

    <script src="{{asset('static/yanzhaowan')}}/js/zhuge-1.0.0.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-100524-7', {'sampleRate':8});
        ga('send', 'pageview');
    </script>
</head>
<body class="ch-sticky">
<div class="main-wrapper-org">




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
                        <li><a href="/yzzt/kyfs2019/" target="_self">复试分数线</a></li>
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
        </div>
    </div>
    <div class="container">
        <div class="main-wrapper" id="app" v-cloak>
            <h2 class="yzwb-header">2020年部分考生初试成绩查询</h2>
            <div class="yzwb-ksxx">
                <Alert type="warning" class="zj-tips" style="margin-top:20px;">
                    <p>{{$info}}</p>
                </Alert>
                <form id="command" ref="form" action="/apply/cjcx/cjcx.do" method="post">
                    <input type="hidden" name="xm" :value="formValidate.xm">
                    <input type="hidden" name="zjhm" :value="formValidate.zjhm">
                    <input type="hidden" name="ksbh" :value="formValidate.ksbh">
                    <input type="hidden" name="bkdwdm" :value="formValidate.bkdwdm">
                    <input type="hidden" name="checkcode" :value="formValidate.checkcode">
                </form>
                <i-form ref="formValidate" :model="formValidate" :label-width="220" style="margin-top: 20px;">
                    <Form-item label="姓名：" :class="{'ivu-form-item-required':true,'ivu-form-item-error': errors.has('yzwb_xm')}">
                        <i-input
                            class="large-input"
                            data-vv-as='姓名'
                            v-validate="'required'"
                            maxlength="40"
                            name="yzwb_xm"
                            v-model="formValidate.xm"
                            placeholder="请输入"></i-input>
                        <div class="ivu-form-item-error-tip">@{{errors.first('yzwb_xm')}}</div>
                    </Form-item>
                    <Form-item label="证件号码：" :class="{'ivu-form-item-required':true,'ivu-form-item-error': errors.has('yzwb_zjhm')}">
                        <i-input
                            class="large-input"
                            data-vv-as='证件号码'
                            v-validate="'required'"
                            maxlength="20"
                            name="yzwb_zjhm"
                            v-model="formValidate.zjhm"
                            placeholder="请输入"></i-input>
                        <div class="ivu-form-item-error-tip">@{{errors.first('yzwb_zjhm')}}</div>
                    </Form-item>
                    <Form-item label="准考证号：" :class="{'ivu-form-item-error': errors.has('yzwb_ksbh')}">
                        <i-input
                            class="large-input"
                            data-vv-as='准考证号'
                            maxlength="15"
                            name="yzwb_ksbh"
                            v-model="formValidate.ksbh"
                            @on-change="clearError('yzwb_ksbh')"
                            placeholder="请输入"></i-input>
                        <div class="ivu-form-item-error-tip">@{{errors.first('yzwb_ksbh')}}</div>
                    </Form-item>
                    <Form-item label="报考单位：">
                        <Row>
                            <i-col span="8">
                                <Form-item :class="{'ivu-form-item-error': errors.has('yzwb_zsdwss')}">
                                    <select
                                        class="wb-select"
                                        data-vv-as='请选择省市'
                                        name="yzwb_ssdm"
                                        @change="getBkdw"
                                        v-model="formValidate.zsdwss">
                                        <option value="">请选择省市</option>
                                        <option v-for="province in formValidate.zsdwssList" :key="province.id" :value="province.id" >@{{province.province}}</option>
                                    </select>
                                    <div class="ivu-form-item-error-tip">@{{errors.first('yzwb_ssdm')}}</div>
                                </Form-item>
                            </i-col>
                            <i-col span="1" class="t-center">-</i-col>
                            <i-col span="8">
                                <Form-item :class="{'ivu-form-item-error': errors.has('yzwb_bkdwdm')}">
                                    <select
                                        class="wb-select"
                                        ref="yzwb_bkdwdm"
                                        data-vv-as='报考单位'
                                        name="yzwb_bkdwdm"
                                        @change="clearError('yzwb_bkdwdm')"
                                        v-model="formValidate.bkdwdm">
                                        <option value="">请选择报考单位</option>
                                        <option v-for="item in bkdwdmArray" :value="item.id" :key="item.id">@{{item.dwmc}}</option>
                                    </select>
                                    <template v-if="bkdwdmArray.length===0 && formValidate.zsdwss!==''">
                                        <div class="select-cover">数据加载中... </div>
                                    </template>
                                    <div class="ivu-form-item-error-tip">@{{errors.first('yzwb_bkdwdm')}}</div>
                                </Form-item>
                            </i-col>
                            <i-col span="6">
                                <span class="c-grey" style="font-size: 12px; margin-left: 5px;">（按照单位名称排序）</span>
                            </i-col>
                        </Row>
                        <div class="item-sub-text">仅显示已开通初试成绩查询的报考单位</div>
                    </Form-item>

                    <Form-item label="">
                        <i-button size="large" type="primary" @click="submitFormAll">查询</i-button>
                    </Form-item>
                </i-form>
            </div>
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
            <a href="//www.chsi.com.cn/" target="_blank">学信网</a>
            <a href="http://chesicc.moe.edu.cn/zxgw/zxjs/201604/20160418/1529506207.html" target="_blank">中心简介</a>
            <a href="/doc/about.jsp" target="_blank">关于我们</a>
            <a href="/doc/copyright.jsp" target="_blank">版权声明</a>
            <a href="/help/" target="_blank">帮助中心</a>
            <a href="/sitemap.jsp" target="_blank">网站地图</a>
            <a href="/doc/adv.jsp" target="_blank">宣传代理</a>
        </div>
        <div class="footer-units">
            主办单位：<a href="http://chesicc.moe.edu.cn/" target="_blank">全国高等学校学生信息咨询与就业指导中心</a><br>
            Copyright © 2003-2020 <a href="//www.chsi.com.cn/" target="_blank">学信网</a> All Rights Reserved<br>
            <a href="http://beian.miit.gov.cn" target="_blank">京ICP备19004913号</a>
        </div>
        <div class="footer-media">
            <a href="/kyzx/kp/wbwx.shtml" target="_blank"><i class="iconfont" title="官方微信">&#xe694;</i>官方微信</a>
            <a href="/kyzx/kp/wbwx.shtml" target="_blank"><i class="iconfont" title="官方微博">&#xe693;</i>官方微博</a>
        </div>
        <div class="footer-msg">
            服务热线：010-82199588<br>
            客服邮箱：kefu#chsi.com.cn（将#替换为@）<br>
        </div>
    </div>
</div>
<script>
    var mixin = {
        data:function () {
            return {
                firstLoad:true,
                bkdwdmArray: [],
                imgUrl: '/apply/cjcx/image.do?trnd=f0ef6cb6-b0d3-404c-86ab-2dcc1c76b5b3',
                spinShow: false,
                formValidate: {
                    xm: '',
                    zjhm: '',
                    ksbh: '',
                    zsdwss: '',
                    bkdwdm: '',
                    checkcode: ''
                },
                zsdwssList:[],
            }
        },
        methods: {
            getSs: function() {
                var _this = this;
                _this.loading = true;
                _this.ssList = [];

                $.ajax({
                    type: "get",
                    url: "/apply/code/cjcxss.do",
                    cache: true,
                    traditional: true,//防止深度序列化
                    success: function (response) {
                        _this.bkdwdmArray = response.dms;
                        response.dms.map(function(item){
                            _this.$set(item,'value',item.id);
                            _this.$set(item,'name',item.province);
                            _this.ssList.push(item);
                        })
                        _this.formValidate.zsdwssList = _this.ssList;

                        console.log(_this.formValidate.zsdwssList);
                    }
                })
            },
            getBkdw:function () {
                var _this = this;

                if (_this.formValidate.zsdwss!=='') {
                    $.ajax({
                        type: "get",
                        url: "/apply/code/cjcxdw.do",
                        data: {'ssdm':_this.formValidate.zsdwss,'ts':new Date().getTime()},
                        cache:true,
                        traditional: true,//防止深度序列化
                        success: function(response){
                            _this.bkdwdmArray = response.dms;
                            if(!_this.firstLoad){
                                _this.formValidate.bkdwdm = '';
                            }else {
                                _this.firstLoad = false;
                            }
                        }
                    });
                } else {
                    _this.formValidate.bkdwdm = '';
                    _this.bkdwdmArray = [];
                }
            },
            submitFormAll: function () {
                if (this.formValidate.ksbh==='' && this.formValidate.bkdwdm==='') {
                    this.errors.add('yzwb_ksbh','准考证号或报考单位至少填一项');
                    this.errors.add('yzwb_bkdwdm','准考证号或报考单位至少填一项');
                } else {
                    this.submitForm();
                }
            },
            clearError: function (name) {
                this.errors.remove(name);
            },
            refresh: function () {
                var _this = this,
                    cacheUrl = _this.imgUrl;
                _this.imgUrl = '';
                _this.spinShow = true;
                setTimeout(function () {
                    _this.imgUrl = cacheUrl;
                },200);
            }
        },
        mounted:function() {
            if (this.formValidate.zsdwss=='') {
                this.getSs();
            }
        }
    }
</script>






<script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/bz-1.0.2.min.js'></script>
<script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/codelist-1.0.1.min.js'></script>
<script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/sslist-1.0.3.min.js'></script>
<script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/validator-1.0.1.js'></script>
<template id="wbgg-template">
    <div class="wbgg-con">
        <div class="wbgg-title">
            <template v-if="dwdm==='' && !dwdm">省招办网报公告
                <span v-html="ssmcStr"></span>
            </template>
            <template v-else>@{{bkdName}}网报公告
                <span v-html="dwmcStr"></span>
            </template>
            <span class="sub-text"></span>
        </div>
        <ul class="wbgg-list">
            <template v-if="wbggFlag">
                <li>数据加载中...</li>
            </template>
            <template v-else>
                <template v-if="wbggData.length > 0">
                    <template v-for="item in wbggData">
                        <li><a href="###" @click="getwbggDetail(((dwdm==='')?ssdm:dwdm),item.id)">@{{item.bt}}</a><span class="time">@{{item.fbsj}}</span></li>
                    </template>
                </template>
                <template v-else>
                    <li>无网报公告！</li>
                </template>
            </template>
        </ul>
        <Modal
            v-model="modal"
            title="网报公告"
            width="780">
            <h4 class="wbgg-modal-title">@{{modalTitle}}</h4>
            <div v-html="modalCon"></div>
            <div slot="footer" class="t-center">
                <i-button type="primary" size="large" @click="modal=false">阅读完毕</i-button>
            </div>
        </Modal>
    </div>
</template>
<script type="text/javascript">
    window.zhuge.load('adfb574f9c54457db21741353c3b0aa7', {
        autoTrack: typeof autoTrack != 'undefined' ? autoTrack : false
    });
    //ajax全局配置
    $.ajaxSetup({
        cache:false, //加随机数，防止缓存
        error: function(jqXHR, textStatus, errorThrown){
            if (textStatus === 'timeout'){
                vmMain.$Message.error("请求超时，请稍后重试。");
            } else {
                switch (jqXHR.status){
                    case(301):
                        vmMain.$Message.error("会话异常，请重新登录。");
                        break;
                    case(302):
                        vmMain.$Message.error("会话异常，请重新登录。");
                        break;
                    default:
                        vmMain.$Message.error("服务异常，请稍后重试。");
                }
            }
        }
    });
    //网报公告组件
    Vue.component('wbggList', {
        data:function () {
            return {
                modal:false,
                modalTitle:'',
                modalCon:'',
                wbggData:[],
                wbggFlag:false
            }
        },
        props: {
            'ssdm':{
                type:String,
                default: ''
            },
            'ssmc':{
                type:String,
                default: ''
            },
            'dwdm':{
                type:String,
                default: ''
            },
            'dwmc':{
                type:String,
                default: ''
            },
            "bkd": {
                type: Boolean,
                default: false
            }
        },
        watch: {
            ssdm:{
                immediate:true,
                handler:function() {
                    if (this.dwdm===''){
                        this.getwbggList(this.ssdm);
                    }
                }
            },
            dwdm:{
                immediate:true,
                handler:function() {
                    this.getwbggList(this.dwdm);
                }
            }
        },
        computed: {
            bkdName:function(){
                if (this.bkd) {
                    return '报考点'
                } else {
                    return '招生单位'
                }
            },
            ssmcStr:function () {
                if (this.ssmc!=='') {
                    return '<span class="c-red"> '+this.ssmc+' </span>'
                } else {
                    return ''
                }
            },
            dwmcStr:function () {
                if (this.dwmc!=='') {
                    return '<span class="c-red"> '+this.dwmc+' </span>'
                } else {
                    return ''
                }
            }
        },
        methods:{
            getwbggList:function (dwdm) {
                var _this = this;
                if (dwdm!=='') {
                    _this.wbggFlag = true;
                    $.ajax({
                        type: "get",
                        url: "/apply/code/wbggs.do",
                        data: {'dwdm': dwdm },
                        dataType:"json",
                        traditional: true,//防止深度序列化
                        success: function(response){
                            _this.wbggFlag = false;
                            _this.wbggData = response;
                        }
                    });
                }
            },
            getwbggDetail:function (dwdm,id) {
                var _this = this;
                $.ajax({
                    type: "get",
                    url: "/apply/code/wbggdetail.do",
                    data: {'dwdm': dwdm, 'id':id },
                    dataType:"json",
                    traditional: true,//防止深度序列化
                    success: function(response){
                        _this.modal = true;
                        _this.modalTitle = response.bt;
                        _this.modalCon = response.nr;
                    }
                });
            }
        },
        template: '#wbgg-template'
    })
    var vmMain = new Vue({
        el: '#app',
        mixins: typeof mixin != 'undefined' ? [mixin] : {},
        data:function () {
            return {
                str: '',
                errorName:'',
                prefix: 'yzwb_',
                formErrors: []
            }
        },
        methods: {
            setError:function () {
                for (var i = 0; i < this.formErrors.length; i++) {
                    if (this.formErrors[i].name=='') {
                        this.str += this.formErrors[i].message + '<br>';
                    } else {
                        this.str += this.formErrors[i].message + '<br>';
                        this.errorName += this.formErrors[i].name + ((i!==(this.formErrors.length-1))?',':'');
                        this.errors.add(this.prefix+this.formErrors[i].name,this.formErrors[i].message);
                    }
                }
                this.setglogalError();
            },
            setglogalError:function () {
                if(this.str !== ""){
                    this.$Notice.config({
                        top: 50,
                        duration: 60
                    });
                    this.$Notice.error({
//                  title: this.errorName,
                        title: '错误！',
                        desc: this.str
                    });
                }
            },
            repForm:function () {
                var _obj = this.$refs['form'].children;
                for (var i = 0; i < _obj.length; i++) {
                    // _obj[i].value =  repenter(rep(_obj[i].value.trim()));
                    _obj[i].value = _obj[i].value.trim();
                }
            },
            changeQuot:function (target,value) { //输入引号自动转化成全角
                // this.formValidate[target] = value.replace(/\'/g,"＇").replace(/\"/g,"＂");
            },
            changeQuot1:function (target,value) { //输入引号自动转化成全角
                // this[target] = value.replace(/\'/g,"＇").replace(/\"/g,"＂");
            },
            delSpace:function (target,value) { //去除学历和学位的空格
                this.formValidate[target] = value.replace(/\s/g,"");
            },
            submitForm:function (){
                var _this = this;
                this.$validator.validateAll().then(function(result){
                    if (result) {
                        _this.repForm();
                        _this.$nextTick().then(function(){
                            if (typeof _this.validateAllMsg === 'function') {
                                if (_this.validateAllMsg().list.length > 0 ) {
                                    var str = '';
                                    for (var i = 0; i < _this.validateAllMsg().list.length; i++) {
                                        str += _this.validateAllMsg().list[i] + '<br>';
                                    }
                                    if (_this.validateAllMsg().type === '一般') {
                                        _this.$Modal.confirm({
                                            title: '提示',
                                            content: str,
                                            onOk: function () {
                                                _this.$refs['form'].submit();
                                            },
                                            okText: '继续提交',
                                            cancelText: '返回修改'
                                        });
                                    } else {
                                        _this.$Modal.error({
                                            title: '错误',
                                            content: str,
                                            okText: '返回修改'
                                        });
                                    }
                                } else {
                                    _this.$refs['form'].submit();
                                }
                            } else {
                                _this.$refs['form'].submit();
                            }
                        });
                    } else {
                        document.getElementsByName(_this.errors.items[0].field)[0].focus();
                    }
                })
            }
        },
        mounted:function (){
            var _this = this;
            setTimeout(function(){
                _this.setError();
            },500);
            $('#zyck-loading').addClass('hide');
        }
    });
</script>
<script type="text/javascript" src='{{asset('static/yanzhaowan')}}/js/least-ie11.min.js'></script>
</body>
</html>
