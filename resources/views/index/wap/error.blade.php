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
<div id="app" class="yzwb-ksxx">
    <div class="yzwb-header">2020年部分考生初试成绩查询</div>
    <div class="yzwb-alert"><i class="yzwb-alert-icon yzwb-warn van-icon van-icon-warn"><!----></i>
        <div class="yzwb-alert-msg">无查询结果</div>
        <div class="yzwb-alert-des">请检查您报考的招生单位是否已开通初试成绩查询功能</div>
    </div>
    <div class="yzwb-bg van-cell-group van-hairline--top-bottom">
        <div class="van-cell van-hairline"><!----><!---->
            <div class="van-cell__value van-cell__value--alone"><a
                    class="van-button van-button--primary van-button--large" href="/apply/cjcx/" target="_self">
                    <!----><span class="van-button__text">返回重新查询</span></a></div><!----></div>
    </div>
    <div class="yzwb-ksxx-footer">
        <div class="footer-copy">中国研究生招生信息网</div>
    </div>
</div>
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
                    if (this.formErrors[i].name == '') {
                        this.str += this.formErrors[i].message + '<br>';
                    } else {
                        this.str += this.formErrors[i].message + '<br>';
                        this.errors.add(this.prefix + this.formErrors[i].name, this.formErrors[i].message)
                    }
                }
                this.setglogalError();
            },
            setglogalError: function () { //全局错误弹出
                if (this.str !== "") {
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
                if (byteLength < _length) {
                    this.errors.add(target, title + "最大输入" + byteLength + "个字节（相当于" + byteLength / 2 + "个汉字）！");
                }
            },
            changeQuot: function (target, value) { //输入引号自动转化成全角
                // this[target] = value.replace(/\'/g,"＇").replace(/\"/g,"＂");
            },
            delSpace: function (target, value) { //去除学历和学位的空格
                this[target] = value.replace(/\s/g, "");
                this.changeQuot(target, value);
            },
            submit: function () {
                var _this = this;
                this.$validator.validateAll().then(function (result) {
                    if (result) {
                        _this.repForm();
                        _this.$nextTick().then(function () {
                            if (typeof _this.validateAllMsg === 'function') {
                                if (_this.validateAllMsg().list.length > 0) {
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
                                        }).then(function () {
                                            _this.$dialog.close();
                                            _this.$refs['form'].submit();
                                        }).catch(function () {
                                            _this.$dialog.close();
                                        });
                                    } else {
                                        _this.$dialog.alert({
                                            title: '错误',
                                            message: str,
                                            confirmButtonText: '返回修改'
                                        }).then(function () {
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
                        window.scrollTo(0, document.getElementsByName(_this.errors.items[0].field)[0].getBoundingClientRect().top + document.documentElement.scrollTop - 20)
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
