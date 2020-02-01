/**
 * @description placeholder兼容低版本浏览器方法
 * @author  mayx@chsi.com.cn
 * @date  201709
 */
var placeHolder = {
    //检测
    _check: function () {
        return 'placeholder' in document.createElement('input');
    },
    //初始化
    init: function () {
        if (!this._check()) {
            this.fix();
        }
    },
    //修复
    fix: function () {
        $(':input[placeholder]').each(function (index, element) {
            var self = $(this), txt = self.attr('placeholder');
            self.wrap($('<span></span>').css({
                position: 'relative',
                display: 'inline-block',
                zoom: '1',
                border: 'none',
                background: 'none',
                padding: 'none',
                margin: 'none'
            }));
            var pos = self.position(), h = self.outerHeight(true) + "px", paddingleft = self.css('padding-left');
            var holder = $('<span></span>').text(txt).css({
                position: 'absolute',
                left: pos.left,
                top: pos.top,
                height: h,
                lineHeight: h,
                paddingLeft: paddingleft,
                color: '#aaa'
            }).appendTo(self.parent());
            if(self.val()){
                holder.hide();
            }
            self.focusin(function (e) {
                holder.hide();
            }).focusout(function (e) {
                if (!self.val()) {
                    holder.show();
                }
            });
            holder.click(function (e) {
                holder.hide();
                self.focus();
            });
        });
    }
};
if(window.jQuery){
    $(function (){
        //placeholder兼容调用
        placeHolder.init();
    });
}else{
    console.log('jquery未引入！');
}
