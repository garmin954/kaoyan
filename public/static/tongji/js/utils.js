
/**
 * 扩展validatebox 验证方法
 */
$.extend($.fn.validatebox.defaults.rules, {
	eqPwd: {
		validator : function(value, param) {
			return value == $(param[0]).val();
		},
		message : '密码不一致！'
	},
	complexity: {
		validator: function (value, param) {
			return /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/.test(value);
		},
		message: '密码复杂度不够'
	},
	fileType: {
		validator : function(value, param) {
			var starIndex = value.lastIndexOf(".");
			var fileType = value.substr(starIndex+1, value.length-starIndex).toLocaleLowerCase();
			for (var i=0; i<param.length; i++) {
				if (fileType==param[i]) {
					return true;
				}
			}
			return false;
		},
		message : '文件类型不正确!'
	},
	CHS: {
		validator: function (value, param) {
			return /^[\u0391-\uFFE5]+$/.test(value);
		},
		message: '请输入汉字'
	},
	english : {// 验证英语
		validator : function(value) {
			return /^[A-Za-z]+$/i.test(value);
		},
		message : '请输入英文'
	},
	ip : {// 验证IP地址
		validator : function(value) {
			return /\d+\.\d+\.\d+\.\d+/.test(value);
		},
		message : 'IP地址格式不正确'
	},
	postalCode: {
		validator: function (value, param) {
			return /^[0-9]\d{5}$/.test(value);
		},
		message: '邮政编码不存在'
	},
	QQ: {
		validator: function (value, param) {
			return /^[1-9]\d{4,10}$/.test(value);
		},
		message: 'QQ号码不正确'
	},
	mobile: {
		validator: function (value, param) {
			return /^(?:13\d|15\d|18\d)-?\d{5}(\d{3}|\*{3})$/.test(value);
		},
		message: '手机号码不正确'
	},
	tel:{
		validator:function(value,param){
			return /^(\d{3}-|\d{4}-)?(\d{8}|\d{7})?(-\d{1,6})?$/.test(value);
		},
		message:'电话号码不正确'
	},
	mobileAndTel: {
		validator: function (value, param) {
		return /(^([0\+]\d{2,3})\d{3,4}\-\d{3,8}$)|(^([0\+]\d{2,3})\d{3,4}\d{3,8}$)|(^([0\+]\d{2,3}){0,1}13\d{9}$)|(^\d{3,4}\d{3,8}$)|(^\d{3,4}\-\d{3,8}$)/.test(value);
		},
		message: '请正确输入电话号码'
	},
	number: {
		validator: function (value, param) {
			return /^[0-9]+.?[0-9]*$/.test(value);
		},
		message: '请输入数字'
	},
	money:{
		validator: function (value, param) {
			return (/^(([1-9]\d*)|\d)(\.\d{1,2})?$/).test(value);
		},
		message:'请输入正确的金额'

	},
	mone:{
		validator: function (value, param) {
			return (/^(([1-9]\d*)|\d)(\.\d{1,2})?$/).test(value);
		},
		message:'请输入整数或小数'

	},
	integer:{
		validator:function(value,param){
			return /^[+]?[1-9]\d*$/.test(value);
		},
		message: '请输入最小为1的整数'
	},
	integ:{
		validator:function(value,param){
			return /^[+]?[0-9]\d*$/.test(value);
		},
		message: '请输入整数'
	},
	range:{
		validator:function(value,param){
			if(/^[1-9]\d*$/.test(value)){
				return value >= param[0] && value <= param[1];
			}else{
				return false;
			}
		},
		message:'输入的数字在{0}到{1}之间'
	},
	minLength:{
		validator:function(value,param){
			return value.length >= param[0];
		},
		message:'至少输入{0}个字'
	},
	eqLength:{
		validator:function(value,param){
			return value.length == param[0];
		},
		message:'长度必须是{0}个字'
	},
	maxLength:{
		validator:function(value,param){
			return value.length <= param[0];
		},
		message:'最多{0}个字'
	},
	idCode:{
		validator:function(value,param){
			return /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(value);
		},
		message: '请输入正确的身份证号'
	},
	loginName: {
		validator: function (value, param) {
			return /^[a-zA-Z0-9_]{1,}$/.test(value);
		},
		message: '登录名称只允许是文字母、数字及下划线。'
	},
	equalTo: {
		validator: function (value, param) {
			return value == $(param[0]).val();
		},
		message: '两次输入的字符不一至'
	},
	enOrNumUl : {// 只能输入英文、数字、下划线
		validator : function(value) {
			return /^[a-zA-Z0-9_]{1,}$/.test(value);
		},
		message : '请输入英文、数字、下划线'
	},
	enOrNum : {// 只能输入英文、数字
		validator : function(value) {
			return /^[a-zA-Z0-9]{1,}$/.test(value);
		},
		message : '请输入英文或数字'
	},
	xiaoshu:{ 
		validator : function(value){ 
			return /^(([1-9]+)|([0-9]+\.[0-9]{1,2}))$/.test(value);
		}, 
		message : '最多保留两位小数！'	
	},
	ddPrice:{
		validator:function(value,param){
			if(/^[1-9]\d*$/.test(value)){
				return value >= param[0] && value <= param[1];
			}else{
				return false;
			}
		},
		message:'请输入1到100之间正整数'
	},
	jretailUpperLimit:{
		validator:function(value,param){
			if(/^[0-9]+([.]{1}[0-9]{1,2})?$/.test(value)){
				return parseFloat(value) > parseFloat(param[0]) && parseFloat(value) <= parseFloat(param[1]);
			}else{
				return false;
			}
		},
		message:'请输入0到100之间的最多俩位小数的数字'
	},
	rateCheck:{
		validator:function(value,param){
			if(/^[0-9]+([.]{1}[0-9]{1,2})?$/.test(value)){
				return parseFloat(value) > parseFloat(param[0]) && parseFloat(value) <= parseFloat(param[1]);
			}else{
				return false;
			}
		},
		message:'请输入0到1000之间的最多俩位小数的数字'
	},
	mrcskmdm: {
		validator: function (value, param) {
			if (value=='-' || value=='--') {
				return true;
			} else {
				return /^[1-9]\d{2}$/.test(value);
			}
		},
		message: '初试科目代码格式不正确'
	},
});

$.fn.tree.defaults.loadFilter = function(data, parent) {
	var opt = $(this).data().tree.options;
	var idFiled, textFiled, parentField;
	if (opt.parentField) {
		idFiled = opt.idFiled || 'id';
		textFiled = opt.textFiled || 'text';
		parentField = opt.parentField;
		var i, l, treeData = [], tmpMap = [];
		for (i = 0, l = data.length; i < l; i++) {
			tmpMap[data[i][idFiled]] = data[i];
		}
		for (i = 0, l = data.length; i < l; i++) {
			if (tmpMap[data[i][parentField]] && data[i][idFiled] != data[i][parentField]) {
				if (!tmpMap[data[i][parentField]]['children'])
					tmpMap[data[i][parentField]]['children'] = [];
				data[i]['text'] = data[i][textFiled];
				tmpMap[data[i][parentField]]['children'].push(data[i]);
			} else {
				data[i]['text'] = data[i][textFiled];
				treeData.push(data[i]);
			}
		}
		return treeData;
	}
	return data;
};

/**
 * @requires jQuery,EasyUI
 * 
 * 防止panel/window/dialog组件超出浏览器边界
 * @param left
 * @param top
 */
var easyuiPanelOnMove = function(left, top) {
	var l = left;
	var t = top;
	if (l < 1) {
		l = 1;
	}
	if (t < 1) {
		t = 1;
	}
	var width = parseInt($(this).parent().css('width')) + 14;
	var height = parseInt($(this).parent().css('height')) + 14;
	var right = l + width;
	var buttom = t + height;
	var browserWidth = $(window).width();
	var browserHeight = $(window).height();
	if (right > browserWidth) {
		l = browserWidth - width;
	}
	if (buttom > browserHeight) {
		t = browserHeight - height;
	}
	$(this).parent().css({/* 修正面板位置 */
		left : l,
		top : t
	});
};
$.fn.dialog.defaults.onMove = easyuiPanelOnMove;
$.fn.window.defaults.onMove = easyuiPanelOnMove;
$.fn.panel.defaults.onMove = easyuiPanelOnMove;

/**
 * 扩展combobox在自动补全模式时，检查用户输入的字符是否存在于下拉框中，如果不存在则清空用户输入
 * 
 * @requires jQuery,EasyUI
 */
$.extend($.fn.combobox.defaults, {
	onShowPanel : function() {
		var _options = $(this).combobox('options');
		if (_options.mode == 'remote') {/* 如果是自动补全模式 */
			var _value = $(this).combobox('textbox').val();
			var _combobox = $(this);
			if (_value.length > 0) {
				$.post(_options.url, {
					q : _value
				}, function(result) {
					if (result && result.length > 0) {
						_combobox.combobox('loadData', result);
					}
				}, 'json');
			}
		}
	},
	onHidePanel : function() {
		var _options = $(this).combobox('options');
		if (_options.mode == 'remote') {/* 如果是自动补全模式 */
			var _data = $(this).combobox('getData');/* 下拉框所有选项 */
			var _value = $(this).combobox('getValue');/* 用户输入的值 */
			var _b = false;/* 标识是否在下拉列表中找到了用户输入的字符 */
			for (var i = 0; i < _data.length; i++) {
				if (_data[i][_options.valueField] == _value) {
					_b = true;
				}
			}
			if (!_b) {/* 如果在下拉列表中没找到用户输入的字符 */
				$(this).combobox('setValue', '');
			}
		}
	}
});

/**
 * 扩展combogrid在自动补全模式时，检查用户输入的字符是否存在于下拉框中，如果不存在则清空用户输入
 * 
 * @requires jQuery,EasyUI
 */
$.extend($.fn.combogrid.defaults, {
	onHidePanel : function() {
		var _options = $(this).combogrid('options');
		if (_options.mode == 'remote') {/* 如果是自动补全模式 */
			var _selected = $(this).combogrid('grid').datagrid('getSelected');/* 选中的行 */
			if (_selected == null && $(this).combogrid('getValue')!='') {/* 如果在下拉列表中没找到用户输入的字符 */
				alert('请选中一条符合数据');
				$(this).combogrid('setValue', '');
			}
		}
	}
});

/**
 * @requires jQuery
 * 
 * 将form表单元素的值序列化成对象
 * 
 * @result object
 */
serializeObject = function(form) {
	var o = {};
	$.each(form.serializeArray(), function(index) {
		if (o[this['name']]) {
			o[this['name']] = o[this['name']] + "," + this['value'];
		} else {
			o[this['name']] = this['value'];
		}
	});
	return o;
};


/**
 * 生成UUID
 */
UUID = function() {
	var s = [];
	var hexDigits = "0123456789abcdef";
	for (var i = 0; i < 36; i++) {
		s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
	}
	s[14] = "4";  // bits 12-15 of the time_hi_and_version field to 0010
	s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1);  // bits 6-7 of the clock_seq_hi_and_reserved to 01
	s[8] = s[13] = s[18] = s[23] = "-";

	var uuid = s.join("");
	return uuid;
};
