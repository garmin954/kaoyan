<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>全国硕士研究生统一招生考试部分考生初试成绩查询系统</title>
    <link rel="icon" href='//t1.chei.com.cn/yz/favicon.ico' type="image/x-icon"/>
    <link rel="stylesheet" href='{{asset('static/yanzhaowan/wap')}}/css/app.css'>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/vue.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/vant.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/vee-validate.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/zh_cn.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/moment.min.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/es-checker.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/manifest.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/vendor.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/app.js'></script>
    <script type="text/javascript" src='{{asset('static/yanzhaowan/wap')}}/js/validator-1.0.1.js'></script>

    <script src="{{asset('static/yanzhaowan/wap')}}/js/zhuge-1.0.0.js"></script>
{{--    <script>--}}
{{--        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}

{{--        ga('create', 'UA-100524-7', {'sampleRate':8});--}}
{{--        ga('send', 'pageview');--}}
{{--    </script>--}}

    <style>
        .yzwb-notice-bar {
            background: #fffaeb;
            padding: .24rem .32rem;
            line-height: .48rem;
            color: #666;
            font-size: .373rem;
        }
    </style>
</head>
<body>
<div class="yzwb-ksxx" id="app" v-cloak>
    <div class="yzwb-header">2020年部分考生初试成绩查询</div>
    <div class="yzwb-notice-bar">
        姓名、证件号码必填，准考证号和报考单位至少填一项。
    </div>
    <form id="command" ref="form" action="/apply/cjcx/cjcx.do" method="post">
        <input type="hidden" name="xm" :value="xm">
        <input type="hidden" name="zjhm" :value="zjhm">
        <input type="hidden" name="ksbh" :value="ksbh">
        <input type="hidden" name="bkdwdm" :value="bkdwdm">
        <input type="hidden" name="checkcode" :value="checkcode">
    </form>
    <van-panel>
        <van-field
            v-model="xm"
            label="姓名"
            autosize
            required
            rows="1"
            maxlength="40"
            data-vv-as="姓名"
            v-validate="'required'"
            placeholder="请输入"
            name="yzwb_xm"
            :class="{'van-field--error': errors.has('yzwb_xm')}"
            :error-message="errors.first('yzwb_xm')"
            type="textarea">
        </van-field>
        <van-field
            v-model="zjhm"
            label="证件号码"
            autosize
            required
            rows="1"
            maxlength="20"
            data-vv-as="证件号码"
            v-validate="'required'"
            placeholder="请输入"
            name="yzwb_zjhm"
            :class="{'van-field--error': errors.has('yzwb_zjhm')}"
            :error-message="errors.first('yzwb_zjhm')"
            type="textarea">
        </van-field>
        <van-field
            v-model="ksbh"
            label="准考证号"
            autosize
            rows="1"
            maxlength="15"
            placeholder="请输入"
            name="yzwb_ksbh"
            :class="{'van-field--error': errors.has('yzwb_ksbh')}"
            :error-message="errors.first('yzwb_ksbh')"
            type="textarea">
        </van-field>
        <van-field
            :value="zsdwssmc"
            label="报考单位"
            autosize
            disabled
            rows="1"
            placeholder="请选择省市"
            name="yzwb_zsdwss"
            :class="{'van-field--error': errors.has('yzwb_zsdwss')}"
            :error-message="errors.first('yzwb_zsdwss')"
            @click.native="openPicker('zsdwss')"
            type="textarea">
        </van-field>
        <van-field
            class="yzwb-field"
            :value="bkdwdmmc"
            label="报考单位"
            autosize
            disabled
            rows="1"
            data-vv-as="报考单位"
            placeholder="请选择报考单位"
            name="yzwb_bkdwdm"
            :class="{'van-field--error': errors.has('yzwb_bkdwdm')}"
            :error-message="errors.first('yzwb_bkdwdm')"
            @click.native="openPicker('bkdwdm')"
            type="textarea">
        </van-field>
        <van-cell-group class="tip">
            <van-cell>
                <template slot="title">
                    <span class="van-cell-text yzwb-des">仅显示已开通初试成绩查询的报考单位，按照单位名称排序。</span>
                </template>
            </van-cell>
        </van-cell-group>

    </van-panel>
    <van-cell-group class="yzwb-bg">
        <van-cell>
            <div class="van-cell-text yzwb-des">
                <p>本系统所有数据均为招生单位提供，招生单位对查询结果负责解释。</p>
            </div>
        </van-cell>
        <van-cell>
            <van-button size="large" type="primary" @click="submitFormAll">提交</van-button>
        </van-cell>
    </van-cell-group>

    <div class="yzwb-ksxx-footer">
        <div class="footer-copy">中国研究生招生信息网</div>
    </div>
    <!-- 选择器插件 -->
    <van-popup v-model="Picker.isShow" position="bottom">
        <yzwb-select-picker :loading="loading" @confirm="confirm" @cancel="cancel" :default-value="Picker.value" :name="Picker.name"></yzwb-select-picker>
    </van-popup>
</div>
<script>
    var mixin = {
        data: function() {
            return {
                xm: '',
                zjhm: '',
                ksbh: '',
                imgUrl: '/apply/cjcx/image.do?trnd=587f98ac-1faa-47b6-8095-0f60d9aa3c44',
                zsdwss: '',
                zsdwssmc: '',
                bkdwdm: '',
                bkdwdmmc: '',
                checkcode: '',
                loading: false,
                Picker: {
                    isShow: false,
                    value: '',
                    name: ''
                },
                ssList: [],
                spinShow: true,
                dwList: []
            }
        },
        components: {
            yzwbSelectPicker
        },
        methods: {
            confirm: function(picker) {
                this[picker.name] = picker.item.code;
                this[picker.name+'mc'] = picker.item.name;
                this.Picker.isShow = false;
                if (picker.name === 'zsdwss') {
                    this.bkdwdm = '';
                    this.bkdwdmmc = '';
                    this.getBkdw();
                }
            },
            cancel: function() {
                this.Picker.isShow = false;
            },
            openPicker: function(name) {
                if (this.zsdwss==='' && name === 'bkdwdm') {
                    this.$toast('请选择省市');
                    return;
                }
                this.Picker = {
                    isShow: true,
                    name: name
                };
                if (name === 'bkdwdm') {
                    this.$set(this.Picker, 'value', this.dwList);
                } else {
                    this.$set(this.Picker, 'value', this.ssList);
                }
            },
            getBkdw: function() {
                var _this = this,
                    params = {
                        'ssdm': _this.zsdwss
                    };
                _this.loading = true;
                _this.dwList = [];
                api.asyncAjax('get', '/apply/code/cjcxdw.do',{'params': params }).then(function(data){
                    _this.loading = false;
                    data.dms.map(function(item){
                        _this.$set(item,'code',item.id);
                        _this.$set(item,'name',item.dwmc);
                        _this.dwList.push(item);
                    })
                }).catch();
            },
            getSs: function() {
                var _this = this;
                _this.loading = true;
                _this.ssList = [];
                api.asyncAjax('get', '/apply/code/cjcxss.do').then(function(data){
                    _this.loading = false;
                    data.dms.map(function(item){
                        _this.$set(item,'code',item.id);
                        _this.$set(item,'name',item.province);
                        _this.ssList.push(item);
                    })
                }).catch();
            },
            submitFormAll: function () {
                if (this.ksbh==='' && this.bkdwdm==='') {
                    this.errors.add('yzwb_ksbh','准考证号或报考单位至少填一项');
                    this.errors.add('yzwb_bkdwdm','准考证号或报考单位至少填一项');
                } else {
                    this.submit();
                }
            },
            refresh: function () {
                var _this = this,
                    cacheUrl = _this.imgUrl;
                _this.imgUrl = '';
                _this.spinShow = false;
                setTimeout(function () {
                    _this.imgUrl = cacheUrl;
                    _this.spinShow = true;
                },200);
            }
        },
        mounted: function() {
            this.getSs();
        }
    }
</script>



<script type="text/javascript">
    window.zhuge.load('adfb574f9c54457db21741353c3b0aa7', {
        autoTrack: typeof autoTrack != 'undefined' ? autoTrack : false
    });
    new Vue({
        el: '#app',
        mixins: typeof mixin != 'undefined' ? [mixin] : {},
        data: function () {
            return {
                str: '',
                prefix: 'yzwb_',
                formErrors: []
            }
        },
        methods: {
            setError: function () {  //页面错误回显
                for (var i = 0; i < this.formErrors.length; i++) {
                    if (this.formErrors[i].name=='') {
                        this.str += this.formErrors[i].message + '<br>';
                    } else {
                        this.str += this.formErrors[i].message + '<br>';
                        this.errors.add(this.prefix+this.formErrors[i].name,this.formErrors[i].message)
                    }
                }
                this.setglogalError();
            },
            setglogalError: function () { //全局错误弹出
                if(this.str !== ""){
                    this.$dialog.alert({
                        title: '提示',
                        message: this.str,
                        confirmButtonText: '关闭'
                    });
                }
            },
            repForm: function () {
                var _obj = this.$refs['form'].children;
                for (var i = 0; i < _obj.length; i++) {
                    // _obj[i].value =  repenter(rep(_obj[i].value.trim()));
                    _obj[i].value = _obj[i].value.trim();
                }
            },
            limitLength: function (value, byteLength, target, title) {
                var newvalue = value.replace(/[^\x00-\xff]/g, "**"), //匹配双字节字符，计算长度
                    _length = newvalue.length;
                if (byteLength<_length) {
                    this.errors.add(target,title + "最大输入" + byteLength + "个字节（相当于" + byteLength / 2 + "个汉字）！");
                }
            },
            changeQuot: function(target,value) { //输入引号自动转化成全角
                // this[target] = value.replace(/\'/g,"＇").replace(/\"/g,"＂");
            },
            delSpace: function(target,value) { //去除学历和学位的空格
                this[target] = value.replace(/\s/g,"");
                this.changeQuot(target,value);
            },
            submit: function () {
                var _this =this;
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
                                        _this.$dialog.confirm({
                                            title: '提示',
                                            message: str,
                                            confirmButtonText: '继续提交',
                                            cancelButtonText: '返回修改'
                                        }).then(function(){
                                            _this.$dialog.close();
                                            _this.$refs['form'].submit();
                                        }).catch(function(){
                                            _this.$dialog.close();
                                        });
                                    } else {
                                        _this.$dialog.alert({
                                            title: '错误',
                                            message: str,
                                            confirmButtonText: '返回修改'
                                        }).then(function(){
                                            _this.$dialog.close();
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
                        window.scrollTo(0,document.getElementsByName(_this.errors.items[0].field)[0].getBoundingClientRect().top+document.documentElement.scrollTop-20)
                    }
                })
            }
        },
        mounted: function () {
            this.setError();
        }
    });
</script>
</body>
</html>
