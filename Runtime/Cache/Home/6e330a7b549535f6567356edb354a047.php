<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="expires" content="Tue, 01 Jan 1999 1:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<meta property="qc:admins" content="23635710066417756375">
	<meta name="baidu-site-verification" content="QIQ6KC1oZ6">

	<meta charset="UTF-8">

		<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">
	
		<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
	
		<title>我的简历-拉勾网-最专业的互联网招聘平台</title>
	
	<!-- common -->
	<meta name="baidu-site-verification" content="QIQ6KC1oZ6">
    

<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script src="/Public/Home/resume/v.htm" charset="utf-8"></script><script src="/Public/Home/resume/analytics.js" async=""></script><script src="/Public/Home/resume/a.js" async=""></script><script type="text/javascript">
var ctx = "http://www.our.com";
var rctx = "http://hr.lagou.com";
var pctx = "http://passport.lagou.com";
var crctx = "http://www.lagou.com";
var sctx = "http://suggest.lagou.com";
var chrctx = "http://c.hr.lagou.com";

var frontLogin = "http://www.lagou.com/frontLogin.do";
var frontLogout = "http://www.lagou.com/frontLogout.do";
var frontRegister = "http://www.lagou.com/frontRegister.do";

</script>

	<!-- header/global_domain -->
	
<script type="text/javascript">
var GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
	ctx : "http://www.our.com",
	rctx : "http://hr.lagou.com",
	pctx : "http://passport.lagou.com",
	actx : "http://account.lagou.com",
	paictx : "http://pai.lagou.com",
	sctx : "http://suggest.lagou.com"
};
</script>

	<link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">

	<!-- 主头部样式 -->
	<link href="/Public/Home/resume/header.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/Public/Home/resume/style_002.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/resume/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/resume/external.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/resume/popup.css">

	<script type="text/javascript" src="/Public/Home/resume/jquery-1.js"></script>

	<script type="text/javascript" src="/Public/Home/resume/jquery_003.js"></script>

	<script type="text/javascript" src="/Public/Home/resume/ajaxfileupload.js"></script>

	<script type="text/javascript" src="/Public/Home/resume/timeCountDown.js"></script>

		<script type="text/javascript" src="/Public/Home/resume/additional-methods.js"></script>
	
	<!--[if lte IE 8]>
    <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.6_2015111112"></script>
	<![endif]-->

	
<script defer="defer" id="_lgpassport_" data-css-site="0" data-css-popup="0" src="/Public/Home/resume/passport.js" onload="passportInit()"></script>

<script type="text/javascript">
	function passportInit(){

		        //}else{
	    	noticeInit();
                //}

	}
</script>

	<!--copy帐号系统的passport.html-->
<script type="text/javascript">
	function noticeInit(){
        var urls = {
            //调用C端用户的notice数字
            getPushNoticeOfC : "http://www.lagou.com/common/getPushNoticeOfC.json",
            //清除C端用户的notice
            clearPushNoticeOfC : "http://www.lagou.com/common/clearPushNoticeOfC.json"
        }

        //调用C端用户的notice数字
        PASSPORT.util.rpc({
            params:{},
            url: urls.getPushNoticeOfC,
            succ:function(data){
                var result = data.content.data;
                if(data.state == "1"){
                    var wraperNoticeObj = $('#lg_tbar .inner');
                    var noticePopTip = ['<div id="noticeTip">',/*'<span class="bot"></span>','<span class="top"></span>',*/'<a href="javascript:;" class="closeNT"></a>'];

                    //推送投递反馈数
                    if(result.isShowPushNotice){
                        var counter = result.pushNoticeEntity;
                        if(counter && counter > 0 ){
                            noticePopTip.push('<a href="http://www.lagou.com/mycenter/delivery.html?tag=0&r=0" data-noticetype="0" class="notice_tip" target="_blank" data-lg-tj-id="7m00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="header_c,新投递反馈数,number"><strong>'+counter+'</strong>条新投递反馈</a>');

                            //投递箱红点
                            $("#noticeDot_delivery").removeClass('dn');
                        }
                    }

                    //推送plus邀约
                    if(result.isShowPlusTips){
                        noticePopTip.push('<a href="http://www.lagou.com/mycenter/invitation.html" data-noticetype="1" class="notice_tip" target="_blank" data-lg-tj-id="7n00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="header_c,新职位邀请数,number"><strong>'+result.plusTipsCount+'</strong>条新职位邀请</a>');
                        //邀约红点
                        $(".user_dpdown .noticeDot").removeClass('dn')

                    }

                    noticePopTip.push('</div>');

                    if(result.isShowPushNotice || result.isShowPlusTips){
                        //弹出tip
                        wraperNoticeObj.append(noticePopTip.join(''));
                    }

                    //全部已读
                    $('#noticeTip a.closeNT').click(function(){
                        //与后台交互，消息标识为已读
                        //clearNoticeTip(urls.clearPushNoticeOfC);
                        PASSPORT.util.rpc({
                            params:{},
                            url:urls.clearPushNoticeOfC,
                            succ:function(data){
                                $('#noticeTip').remove();
                                $(".noticeDot").addClass("dn");
                            },
                            fail:function(data){
                                 console.log('fail:' + data);
                            }
                        });
                    });
                }

                //C端消息绑定单击事件
                //弹窗部分
                var notice_tip = $("#noticeTip .notice_tip");
                notice_tip.bind("click",function(){
                    var _this = $(this);
                    //获取当前点击的消息类型
                    var type = _this.data("noticetype");
                    //告诉后台哪种类型的消息一经被查看
                    PASSPORT.util.rpc({
                        params:{"type":type},
                        url:urls.clearPushNoticeOfC,
                        succ:function(data){
                            _this.remove();
                            if(type == 0){
                                $("#noticeDot_delivery").addClass('dn');
                            }else if(type == 1){
                                $(".user_dpdown .noticeDot").addClass('dn')
                            }
                            if($("#noticeTip .notice_tip").length <= 0){
                                $('#noticeTip').remove();
                            }
                        },
                        fail:function(data){
                             console.log('fail:' + data);
                        }
                    });
                });
                //红点链接
                var deliveryLink = $("#deliveryLink");
                deliveryLink.click(function(event){
                    var aimTips = $("#noticeTip .notice_tip[data-noticetype='0']")
                    if(aimTips){
                        aimTips.trigger('click');
                    }
                    event.stopPropagation();
                });

                var invitationLink = $("#invitationLink");
                invitationLink.click(function(event){
                    var aimTips = $("#noticeTip .notice_tip[data-noticetype='1']")
                    if(aimTips){
                        aimTips.trigger('click');
                    }
                    event.stopPropagation();
                });

            },
            fail:function(data){
                console.log('fail:' + data);
            }
        });

    }

</script>

<script charset="utf-8" class="lazyload" src="/Public/Home/resume/lagou.js"></script><script charset="utf-8" class="lazyload" src="/Public/Home/resume/stringifyJSON.js"></script><script charset="utf-8" class="lazyload" src="/Public/Home/resume/md5.js"></script><link href="/Public/Home/resume/ui.css" rel="stylesheet"><link href="/Public/Home/resume/window.css" rel="stylesheet"><style class="firebugResetStyles" type="text/css" charset="utf-8">/* See license.txt for terms of usage */
/** reset styling **/
.firebugResetStyles {
    z-index: 2147483646 !important;
    top: 0 !important;
    left: 0 !important;
    display: block !important;
    border: 0 none !important;
    margin: 0 !important;
    padding: 0 !important;
    outline: 0 !important;
    min-width: 0 !important;
    max-width: none !important;
    min-height: 0 !important;
    max-height: none !important;
    position: fixed !important;
    transform: rotate(0deg) !important;
    transform-origin: 50% 50% !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    background: transparent none !important;
    pointer-events: none !important;
    white-space: normal !important;
}
style.firebugResetStyles {
    display: none !important;
}

.firebugBlockBackgroundColor {
    background-color: transparent !important;
}

.firebugResetStyles:before, .firebugResetStyles:after {
    content: "" !important;
}
/**actual styling to be modified by firebug theme**/
.firebugCanvas {
    display: none !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBox {
    width: auto !important;
    position: static !important;
}

.firebugLayoutBoxOffset {
    opacity: 0.8 !important;
    position: fixed !important;
}

.firebugLayoutLine {
    opacity: 0.4 !important;
    background-color: #000000 !important;
}

.firebugLayoutLineLeft, .firebugLayoutLineRight {
    width: 1px !important;
    height: 100% !important;
}

.firebugLayoutLineTop, .firebugLayoutLineBottom {
    width: 100% !important;
    height: 1px !important;
}

.firebugLayoutLineTop {
    margin-top: -1px !important;
    border-top: 1px solid #999999 !important;
}

.firebugLayoutLineRight {
    border-right: 1px solid #999999 !important;
}

.firebugLayoutLineBottom {
    border-bottom: 1px solid #999999 !important;
}

.firebugLayoutLineLeft {
    margin-left: -1px !important;
    border-left: 1px solid #999999 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBoxParent {
    border-top: 0 none !important;
    border-right: 1px dashed #E00 !important;
    border-bottom: 1px dashed #E00 !important;
    border-left: 0 none !important;
    position: fixed !important;
    width: auto !important;
}

.firebugRuler{
    position: absolute !important;
}

.firebugRulerH {
    top: -15px !important;
    left: 0 !important;
    width: 100% !important;
    height: 14px !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
    border-top: 1px solid #BBBBBB !important;
    border-right: 1px dashed #BBBBBB !important;
    border-bottom: 1px solid #000000 !important;
}

.firebugRulerV {
    top: 0 !important;
    left: -15px !important;
    width: 14px !important;
    height: 100% !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
    border-left: 1px solid #BBBBBB !important;
    border-right: 1px solid #000000 !important;
    border-bottom: 1px dashed #BBBBBB !important;
}

.overflowRulerX > .firebugRulerV {
    left: 0 !important;
}

.overflowRulerY > .firebugRulerH {
    top: 0 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.fbProxyElement {
    position: fixed !important;
    pointer-events: auto !important;
}
</style></head>
<body><iframe style="display: none;"></iframe><style type="text/css">.WPA3-SELECT-PANEL { z-index:2147483647; width:463px; height:292px; margin:0; padding:0; border:1px solid #d4d4d4; background-color:#fff; border-radius:5px; box-shadow:0 0 15px #d4d4d4;}.WPA3-SELECT-PANEL * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none; font-family:Microsoft YaHei,Simsun;}.WPA3-SELECT-PANEL a { cursor:auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-TOP { height:25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE { float:right; display:block; width:47px; height:25px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE:hover { background-position:0 -25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-MAIN { padding:23px 20px 45px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-GUIDE { margin-bottom:42px; font-family:"Microsoft Yahei"; font-size:16px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-SELECTS { width:246px; height:111px; margin:0 auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT { float:right; display:block; width:88px; height:111px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat 0 -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT:hover { background-position:-88px -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-AIO-CHAT { float:left;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ { display:block; width:76px; height:76px; margin:6px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat -50px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ-ANONY { background-position:-130px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-LABEL { display:block; padding-top:10px; color:#00a2e6; text-align:center;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-BOTTOM { padding:0 20px; text-align:right;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-INSTALL { color:#8e8e8e;}</style><style type="text/css">.WPA3-CONFIRM { z-index:2147483647; width:285px; height:141px; margin:0; background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAACNCAMAAAC9pV6+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU5QUIyQzVCNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU5QUIyQzVDNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTlBQjJDNTk1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTlBQjJDNUE1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6QoyAtAAADAFBMVEW5xdCkvtNjJhzf6Ozo7/LuEQEhHifZ1tbv8vaibw7/9VRVXGrR3en4+vuveXwZGCT///82N0prTRrgU0MkISxuEg2uTUqvEwO2tbb2mwLn0dHOiQnExMacpKwoJzT29/n+qAF0mbf9xRaTm6abm5vTNBXJ0tvFFgH/KgD+ugqtra2yJRSkq7YPDxvZGwDk7O//2zfoIgH7/f1GSV6PEAhERUtWWF2EiZHHNix1dXWLk53/ySLppQt/gID9IAH7Mgj0JQCJNTTj4+QaIi0zNDr/0Cvq9f/s+/5eYGrn9fZ0eYXZ5O3/tBD8/f5udHy6naTV2t9obHl8gY9ubW/19fXq8fXN2uT/5z/h7PC2oaVmZWoqJR6mMCL3+f33KQM1Fhr6NRT9///w/v/ftrjJDQby9vpKkcWHc3vh7vvZ5uvpPycrMEHu7/De7fne5+709voyKSTi7PVbjrcuLTnnNAzHFhD7/P3aDwDfNxTj6vHz9fj09vj3///19/ny9PevuMI9PEPw8/bw8vbx9PdhYWHx8/fy9ff19vj19vny9fjw8/fc6fOosbza5/LX5fDV4+/U4u7S4e3R4O3O3uvd6vTe6vTd6fPb6PPb6PLW5PDZ5/HW5O/Z5vHV5O/T4e7T4u7Y5vHY5fHO3evR4OzP3+vP3uvQ3+xGt/9Lg7Dz9vjv8/X7+/3d5+vi6+7g6ezh6u3w9Pbc5+rt8vTl7fDn7vHr8fP2+Pr3+fv6+/zq8PPc5urb5en4+/7Y5epGsvjN3erW4OXf6+/s8/bn8PPk7vLv9fiAyfdHrO6Aorz09vnx9fnz9Pb09/vv8fVHsfd+zP/jwyLdExFekLipYWLN3OjR3Oa0k5n/9fXX6PDh7vDU4ey6fAzV4+5HOSHIoBP+/v3b6OppaGrT4Ovk6/Lw8PE8P1Pz+v/w8/nZ5vDW4erOztL/LgT3+Pn2+PvY5/Ta5/HvuxfZ5Ojm8f6lrrrI1uPw0iZPT1Sps7r19/iqtLzxKgjZ3N9RVFtQSkbL2ujM2+ku4f1qAAAIDklEQVR42uzcC3ATdR7A8S3QhZajm+RSEmxZEhIT2vKvjU1aWqAPWr1IsRTkoRZb4Qoi6XmFYHued5coQe8wFLSoFOXV0oeIShG13ANURBmoeme9Z6dXnbP34OF517MOUo/7JykNySXZjPP/rzPb37d0y7Yz/5n9zP43u9tNmUnqHBcUqpzUakatf2QaFKqz+lQm5931T0KhWv9uDuNavwMK3XoX43oq+koYXemQxem0WLMv/fYp6Yd1Hou2v39RarHzvBLHsnyWbtmOxyRe9Do7DaWWfjmPYVjWu2CzLo0CnaejyzGUmSm3Yx0fjafi3B1PSzqsszOqHJkYx2bz6iiv7j189j93SqnTzZ5l8+mr61hnazQxg5mZ/XhisRw+6CiVHOK8POW5u7ZKqFZt8/DCV5Q6zdZ+Lw7vVCKMg8oH7cjLY78kJZ2tzdpW/G/rNTq7oihX3i+Xy21yxzy1HSmRXV17zom8s2to2S4pdUCrbfCvYZ1nBdtnGLTZMI4yVSbrU+NZpcdfkznf5Mp9Vkp9qNW2+Newzj7hdLzdZrNx/Z/Ikj9OHkLF86bqO5dYULlHx2L4wz7J1KBtOKFtGFnFOvsF+5ZVqeR5O7J2Lsmy6F3IlfqVRd3p8h55lPzU/ZKpSdu0f/8Jz8IX1qkXjHF6zo95ZL2wZLB87sdoSK/WZ1+403dcrindXS+VTl/xLE+cbhxej0Zn34D36kGJnNWyVGfqnaj4XOe8eZ84fTOLz1pWL9WwTqNgOtZ3Dsip+1b2jecR0nuPzsOnPBamvlGiYZ1nBGrcne3DwTtP8o2XMxGHlDOPJg/vOixvYZ6Ralhnt1B/uqfIe4LMsogfcpb3evpKOXy2zNqL79i7W6JhnW0CNS5M9F4+4JnUq4j7868//3z6Z3OSehS9rHdu2SoLDdskWhQ627pVlZiH43p75sxevjw+Pn55xvQFGo2mR8Fx5UVFiebflUhXZ3vk9pwrNKoQp+TjNJqUjPh4r87sBVOmaDRTemqKUKLK2L1dognrbF9oVpnSEKpJSkmaM/2mjIzlGTfNXqCZgm00SeUo0agyTm6Qrs5egRaqVMYv01hUE9ejSEqZjkvxzau4uCLObDIajd17JRrW2SOQI81oTP/y+jEIKTlWkfRZSkqKZk6PAq+gyrQK/DPVPdv3SDOs83jkmuYnpmMC092zxrAcQlyNQqHorUH4f2PSzs9IN6Ybzbapj0szYZ1cnjWn40wVd69bUdhbiV/HucrKyjErrs+vqMDfNpkriyzMHqnqPBGp1gG5HR9dqtJN2KEiPz9/48Yf4Dbm558/P6PAZDLVmdki3r7ov09IMSEdw0Q5PtUpKlRhHJOpoGDGtVUUmKoKeY7l7M4Bqeo0R+iArt+Or6/kzMIVRg9ORcVVmfP4s6BOlWCYiFhOKS/9sFmCYZ3WCP3HKvdcXk08u6rbbMb7T0HeVZ28vNi6tG71pzcvRizeeQaZllbpFVmnxeHZdVg0f+XvZ1UZsY+qqq4uFldXd3/a5ITkW/567GYdvtrilHZdqzR1DkQo13Pfi0XZfdfNqsvDZ8UrEhIme+pOuCO5Y5VM9v0H/j2TxVOL5ecfkGCRdVpLec+NCw7r3B+bZ0rPW1f2nT9+1PHRyVtW/UiGqz1439qZnkt1jrVKVKclQlbvAxdoft93q2JnFOTlrbtOdk19XeNK1uKZ5eHJapFgWKchfE0TfTeUrauwTh7mCdSp/dtfSr6XjWrs2MfaIMEi6zQswjaLM5GzxDOz8AvVuvHX4KzsOnZf/adWtCgX65S2SFOnKUI6JV96ZTHLDtyY8JtY/CL+7aN9/i4ufeAfa5libuoVF8vqmiQY1nFH1SX8EaEv3FIM60R8KvXiRc9i2rQLOLwcZc/kCumM7kAHdEAHdL4BnR9D4QId0AEd0AEd0AEd0BkFOj+FwgU6AjqPQuECHQGdB6FwgQ7ogA7ogA7ogA7ogA7oQKDztXR+CIULdEAHdEAHdEAHdEAHdEAHAp2vpfMzKFygI6DzCBQu0BHQ+QkULtABHdABHdABHdABnTAx2nZCaZnVm/zjljEDNN99zpSF0NlEuFMxa95pI9Q7a2JGxj1rYKplFOurZgxBm0JBZ9OG4+//klDvH99weGRcxwXZrVR71HGWvk572121hLqrrd0/rltWSzn3JlF0nidUkM7zlBNJp5NQQTqdlBNHp2sSoboCdSZRTiSd1wgVpPMa5cTRWf0qoVYH6rxKuRA6m0nX3naG1JvrzrS1+8d1y2i/l88dtCV0dE49R6hTgTrPUU4kHVI3doN0aN9HFkfnzcOEejNQ5zDlxNFZepBQSwN1DlJOJJ0jhArSOUI5cXROvkKok4E6r1AuhM4W0mGdY4TCOv5x3bJjlHMHbQkdnbfGEeqtQJ1xlBNJ5yihgnSOUk4cndtfJtTtgTovU04cnTduINQbgTo3UC6EzkOkwzovEArr+Md1y16gnDtoS+jojH2JUGMDdV6inDg6h14k1KFAnRcpJ45Ox1hCdQTqjKWcODr3HiLUvYE6hygnkk4HoYJ0Oignhs6G997+FaHefu8D/7iOaT+n2+sOEXRi1hwn9Zvi42tizoyMa0j+1y9o9jpTNoG6zpYjMRtIPWXwQUzXyLibNxscVP/GvaPswf/fdx4m3oQJxIbasuXhbzAqOpIJdAR0JkDhAh3QAR3QAR3QAR3QAZ3RrZNzGRTCdPk2JnUu8ITBmatnqlNzXFCobtOP/58AAwA/1aMkKhXCbQAAAABJRU5ErkJggg==) no-repeat;}.WPA3-CONFIRM { *background-image:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/panel.png);}.WPA3-CONFIRM * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none;}.WPA3-CONFIRM * { font-family:Microsoft YaHei,Simsun;}.WPA3-CONFIRM .WPA3-CONFIRM-TITLE { height:40px; margin:0; padding:0; line-height:40px; color:#2b6089; font-weight:normal; font-size:14px; text-indent:80px;}.WPA3-CONFIRM .WPA3-CONFIRM-CONTENT { height:55px; margin:0; line-height:55px; color:#353535; font-size:14px; text-indent:29px;}.WPA3-CONFIRM .WPA3-CONFIRM-PANEL { height:30px; margin:0; padding-right:16px; text-align:right;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON { position:relative; display:inline-block!important; display:inline; zoom:1; width:99px; height:30px; margin-left:10px; line-height:30px; color:#000; text-decoration:none; font-size:12px; text-align:center;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON-FOCUS { width:78px;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON .WPA3-CONFIRM-BUTTON-TEXT { line-height:30px; text-align:center; cursor:pointer;}.WPA3-CONFIRM-CLOSE { position:absolute; top:7px; right:7px; width:10px; height:10px; cursor:pointer;}</style>

	<div id="body">

		<!--C端头部通栏广告位-->
		<!-- <div id="top_bannerC">
    <a class="" href="http://www.lagou.com/topic/shilipai.html" target="_blank"></a>
</div> -->
		<!-- 验证注册邮箱 -->
		
		<link href="/Public/css/header.css" rel="stylesheet">
<!-- 未登录用户头部 -->
<?php if (!session('?user')) :?>
<div id="lg_tbar">
    <div class="inner">
        <!-- 未登录头部 -->
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        
        <ul class="lg_tbar_r reset">
        <li>
            <a href="<?php echo U('Home/Login/topLogin');?>" target='_blank' data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
        </li>
        <li>
            <a href="<?php echo U('Home/Register/register');?>" target='_blank' class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
        </li>
        </ul>
    </div>    
</div>        
<div id="lg_tnav">
    <div class="inner">

        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>普通版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Home/Company/index');?>" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/YiPai/index');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">一拍</a>
            </li>

        </ul>
    </div>
</div>
<?php endif ;?>

<?php if($_SESSION['user']['type'] == 1) :?>
    <!-- 个人用户头部 -->
<div id="lg_tbar">
    <div class="inner">
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        <ul class="lg_tbar_r reset">   
            <li>
                <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
            </li>
            <li>
                <a href="<?php echo U('Home/ResumeSend/index');?>" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                <em class="noticeDot dn" id="noticeDot_delivery"></em>
            </li>
                <li class="user_dpdown">
                <span class="unick bl"><?php echo session('user')['username'];?></span>
                <em class="noticeDot dn" id="noticeDot_name"></em>
                <i></i>
                <ul class="reset">
                    <li>
                        <a href="http://www.lagou.com/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/ResumeHandle/show');?>" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">我要找工作</a>
                        <em class="noticeDot dn" id="noticeDot_invitation"></em>
                    </li>

                    <li>
                        <a href="http://account.lagou.com/account/accountBind.html" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/companyJob/create');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a>
                    </li>
                    <li>
                        <a href="javascript:;" id='logouta' data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                        <script type="text/javascript">
                        $('#logouta').click(function(){
                            $.post('<?php echo U("Home/Login/logout");?>',{},function(data){
                                window.location.reload();
                            });
                            return false;
                        });
                        </script>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>    
<div id="lg_tnav">
    <div class="inner">

        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>普通版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Home/Company/index');?>" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/YiPai/index');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">一拍</a>
            </li>

        </ul>
    </div>
</div>
<?php endif ;?>
                     
<?php if($_SESSION['user']['type'] == 2) :?>
        <!-- 企业用户头部 -->
<div id="lg_tbar">
    <div class="inner">
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        <ul class="lg_tbar_r reset">   
            <li>
                <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
            </li>
            <li>
                <a href="<?php echo U('Home/ResumeSend/index');?>" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                <em class="noticeDot dn" id="noticeDot_delivery"></em>
            </li>
                <li class="user_dpdown">
                <span class="unick bl"><?php echo session('user')['username'];?></span>
                <em class="noticeDot dn" id="noticeDot_name"></em>
                <i></i>
                <ul class="reset">
                    <li>
                        <a href="<?php echo U('Home/CompanyJob/positions');?>" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我发布的职位</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/ResumeHandle/show');?>" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">我收到的简历</a>
                        <em class="noticeDot dn" id="noticeDot_invitation"></em>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/CompanyShow/index');?>" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的公司首页</a>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我要找工作</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我账号设置</a>
                    </li>
                    <li>
                        <a href="javascript:;" id='logouta' data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                        <script type="text/javascript">
                        $('#logouta').click(function(){
                            $.post('<?php echo U("Home/Login/logout");?>',{},function(data){
                                window.location.reload();
                            });
                            return false;
                        });
                        </script>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="lg_tnav">
    <div class="inner">  
        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>企业版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="http://hr.lagou.com/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">工作台</a>
            </li>
            <li>
                <a href="http://hr.lagou.com/interview/unHandlelist.html" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">简历管理</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/companyJob/create');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">职位管理</a>
            </li>
            <li>
                <a href="http://hr.lagou.com/plus/vip.html" data-lg-tj-id="5x00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">PLUS</a>
                <b class="plusNum" id="plusNum"></b>
            </li>
            <li>
                <a href="http://pai.lagou.com/hr/talent.html" data-lg-tj-id="5y00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">一拍</a>
            </li>
        </ul>   
    </div>
</div>
<?php endif ;?>   
                
        <!--end #lg_header-->

		<!-- 数据展示类接口需要版本号 -->
	    <input id="version" value="1.5.6_2015111112" type="hidden">

	    <div id="container">
<link rel="stylesheet" type="text/css" href="/Public/Home/resume/myresume.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/resume/tailoring.css">
<input id="isShowDefault" value="1" type="hidden">
	<div class="clearfixs mr_created">

		<div class="mr_myresume_l">

			<div id="mr_mr_head">
				<div class="mr_top_bg" id="baseinfo">
					<img id="userpic" src="/Uploads/User/image/<?php echo ($data["image"]); ?>" alt="默认头像" class="mr_headimg" height="117" width="117">
					<img src="/Public/Home/resume/tou.png" class="opa" alt="">
					<img src="/Public/Home/resume/shadow_tx.png" alt="" class="shadow">
					<input class="mr_headfile" id="up_txpic" name="headPic" onchange="uploadFile(this);" title="支持jpg、jpeg、gif、png格式，文件小于10M" type="file">
				</div>
                 <script src="/Public/Home/Resume/ajaxfileupload.js" type="text/javascript"></script>
        <script type="text/javascript">

            function uploadFile() {
                 $.ajaxFileUpload({
                    url : '<?php echo U('Home/Resume/upload');?>',
                    secureuri: false,
                    fileElementId: 'up_txpic',
                    dataType: 'json',
                    success: function (data)  //服务器成功响应处理函数
                    {
                        if (data.code > 0) {
                            $('#logo_url').val(data.msg);
                            $('.shadow').hide();
                            data.msg = data.msg + '?' + parseInt(Math.random()*1000);
                            $('#userpic').attr('src', data.msg);
                        } else {
                            alert(data.msg);
                        }
                
                    },
                })
            }


        </script>
				<div class="mr_baseinfo">
					<i class="mr_left_bg"></i>
					<i class="mr_right_bg"></i>
					<div class="mr_my_qr">
						<div class="dropdown_menu">
							<img src="/Public/Home/resume/qrcode_v2.jpg" height="131" width="131">
						</div>						
					</div>	
					<div class="mr_p_name mr_w604 clearfixs">
						<span class="mr_edit dn"><i></i><em>编辑</em></span><span class="mr_name"><?php echo ($data["username"]); ?></span>
					</div>
					<form id="nameForm">
						<div class="mr_name_edit dn">
							<input id="mr_name" name="mr_name" class="ed_name" autocomplete="off" type="text">
							<input class="save" value="保存" type="submit">
							<a href="javascript:;" class="cancel">取消</a>
						</div>
					</form>
					<div class="mr_p_introduce mr_w604 clearfixs">
												<span class="mr_edit dn" data-type="0"><i></i><em>编辑</em></span><span class="mr_intro mr_intro_normal" title="<?php echo ($data["introduction_value"]); ?>。"><?php echo ($data["introduction_value"]); ?></span>
											</div>
					<form id="introduceForm" action="javascript:;">
						<div class="mr_intro_edit dn">
							<input id="mr_intro" name="mr_intro" placeholder="一句话介绍自己，告诉我为什么选择你而不是别人" class="ed_name" autocomplete="off" type="text">
							<a class="save">保存</a>
							<a href="javascript:;" class="cancel">取消</a>
							<span class="mroneError dn"></span>
						</div>
					</form>					
					<div class="mr_p_info mr_infoed mr_w604 clearfixs" id='userbase'>
                    <?php if(is_array($data["history_value"])): $i = 0; $__LIST__ = $data["history_value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["istop"] == 1): ?><div class="info_t">
					<span class="shenfen">
									<i></i>
									<em data-id="2" title="<?php echo ($vo["job"]); ?> · <?php echo ($vo["company"]); ?>"><?php echo ($vo["job"]); ?> · <?php echo ($vo["company"]); ?></em>
								</span>
					</div>
                    <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
						<div class="info_t">
							<span class="base_info"><i></i><em class="s"></em><em class="a"><span class="age"><?php echo ($data["age"]); ?>岁</span><span class="birth_span dn"><?php echo ($data["age"]); ?>岁<em></em></span></em><em class="x"><?php echo ($data["education"]); ?></em><em class="j"><span class="job_span"><?php echo ($data["work_year"]); ?>工作经验</span></em><em class="mr0 d"><?php echo ($data["hope_city"]); ?></em></span>
						</div>
						<div class="info_b">
							<span class="mobile"><i></i><em title="<?php echo ($data["phone"]); ?>"><?php echo ($data["phone"]); ?></em></span>
							<span class="email"><i></i><em title="<?php echo ($data["email"]); ?>"><?php echo ($data["email"]); ?></em></span>						</div>
						<div class="mr_sns dn">
													</div>
						<span class="mr_edit mr_head_r mr_edit_on dn" data-birthyear="1993" data-birthmonth="11" data-sf="<?php echo ($vo["job"]); ?>" data-shenfen="<?php echo ($vo["job"]); ?> · <?php echo ($vo["company"]); ?>" data-sex="" data-xl="<?php echo ($data["education"]); ?>" data-gzjy="<?php echo ($data["work_year"]); ?>" data-city="<?php echo ($data["city"]); ?>" data-mobile="<?php echo ($data["phone"]); ?>" data-email="<?php echo ($data["email"]); ?>"><i></i><em>编辑</em></span>
					</div>	
					<form id="olinfoForm">
						<div class="mr_info_edit mr_info_on dn">
							<div class="mr_showidentity_div">
				   	 			<label>显示身份</label>
				   	 			<div class="form_wrap normal_s" style="*z-index:6;">
				   	 				<input id="shenfen" name="shenfen" title="" class="mr_button" value="" type="button">
				   	 				<i class="mr_sj"></i>
									<div class="xl_list dn">
					   	 				<ul class="ul_shenfen">
                                        <?php if(is_array($data["history_value"])): $i = 0; $__LIST__ = $data["history_value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-id="1" title="<?php echo ($vo["job"]); ?> · <?php echo ($vo["company"]); ?>"><?php echo ($vo["job"]); ?> · <?php echo ($vo["company"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
				   	 				</div>						   	 				
				   	 			</div>	
			   	 			</div>
			   	 			<label>性别</label>  	 			
			   	 			<div class="clearfixs mr_sex"> <!-- 0nv1nan -->
			   	 				<span class="mr_women fl"><i></i><em>男</em></span>						
								<span class="mr_women fl"><i></i><em>女</em></span>
			   	 			</div>

			   	 			<label>最高学历</label>
			   	 			<div class="form_wrap normal_s" style="*z-index:4;">
			   	 				<input id="xl" name="xl" class="mr_button" value="" type="button">
			   	 				<i class="mr_sj"></i>
								<div class="xl_list dn">
				   	 				<ul class="ul_xl">
		                            				   	 					<li>大专</li>
				   	 								   	 					<li>本科</li>
				   	 								   	 					<li>硕士</li>
				   	 								   	 					<li>博士</li>
				   	 								   	 					<li>其他</li>
				   	 								   	 				</ul>
			   	 				</div>						   	 				
			   	 			</div>
			   	 			<label>工作年限</label>
			   	 			<div class="form_wrap normal_s" style="*z-index:3;">
			   	 				<input id="gznx" name="gznx" class="mr_button" value="" type="button">
			   	 				<i class="mr_sj"></i>
								<div class="xl_list dn">
				   	 				<ul class="ul_gznx">
		                            				   	 					<li>应届毕业生</li>
				   	 								   	 					<li>1年</li>
				   	 								   	 					<li>2年</li>
				   	 								   	 					<li>3年</li>
				   	 								   	 					<li>4年</li>
				   	 								   	 					<li>5年</li>
				   	 								   	 					<li>6年</li>
				   	 								   	 					<li>7年</li>
				   	 								   	 					<li>8年</li>
				   	 								   	 					<li>9年</li>
				   	 								   	 					<li>10年</li>
				   	 								   	 					<li>10年以上</li>
				   	 								   	 				</ul>
			   	 				</div>						   	 				
			   	 			</div>
			   	 			<label>所在城市</label>
			   	 			<div class="form_wrap city_s" style="*z-index:2;">
			   	 				<i class="mr_sj"></i>
			   	 				<input id="szcs" name="szcs" class="mr_button" value="<?php echo ($data["city"]); ?>" type="button">
								<div class="xl_list dn">
								 
									<div class="mr_selCity">
					                    <ul class="reset mr_province">
					                        <li><span>热门城市</span>
					                            <ul class="reset dn"><li>北京</li><li>上海</li><li>广州</li><li>深圳</li><li>杭州</li><li>成都</li><li>西安</li><li>南京</li><li>厦门</li><li>武汉</li></ul>
					                        </li>
					                       					                       					                        <li>
					                        	<span>北京</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">北京</li>
					                            						                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>上海</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">上海</li>
					                            						                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>天津</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">天津</li>
					                            						                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>重庆</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">重庆</li>
					                            						                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>河北</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">石家庄</li>
					                            						                                <li>唐山</li>
					                                					                                <li>秦皇岛</li>
					                                					                                <li>邯郸</li>
					                                					                                <li>邢台</li>
					                                					                                <li>保定</li>
					                                					                                <li>张家口</li>
					                                					                                <li>承德</li>
					                                					                                <li>沧州</li>
					                                					                                <li>廊坊</li>
					                                					                                <li>衡水</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>山西</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">太原</li>
					                            						                                <li>大同</li>
					                                					                                <li>阳泉</li>
					                                					                                <li>长治</li>
					                                					                                <li>晋城</li>
					                                					                                <li>朔州</li>
					                                					                                <li>晋中</li>
					                                					                                <li>运城</li>
					                                					                                <li>忻州</li>
					                                					                                <li>临汾</li>
					                                					                                <li>吕梁</li>
					                                					                                <li>永济市</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>内蒙古</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">呼和浩特</li>
					                            						                                <li>包头</li>
					                                					                                <li>乌海</li>
					                                					                                <li>赤峰</li>
					                                					                                <li>通辽</li>
					                                					                                <li>鄂尔多斯</li>
					                                					                                <li>呼伦贝尔</li>
					                                					                                <li>兴安盟</li>
					                                					                                <li>锡林郭勒盟</li>
					                                					                                <li>乌兰察布</li>
					                                					                                <li>巴彦淖尔</li>
					                                					                                <li>阿拉善盟</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>辽宁</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">沈阳</li>
					                            						                                <li>大连</li>
					                                					                                <li>鞍山</li>
					                                					                                <li>抚顺</li>
					                                					                                <li>本溪</li>
					                                					                                <li>丹东</li>
					                                					                                <li>锦州</li>
					                                					                                <li>营口</li>
					                                					                                <li>阜新</li>
					                                					                                <li>辽阳</li>
					                                					                                <li>盘锦</li>
					                                					                                <li>铁岭</li>
					                                					                                <li>朝阳</li>
					                                					                                <li>葫芦岛</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>吉林</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">长春</li>
					                            						                                <li>吉林</li>
					                                					                                <li>四平</li>
					                                					                                <li>辽源</li>
					                                					                                <li>通化</li>
					                                					                                <li>白山</li>
					                                					                                <li>松原</li>
					                                					                                <li>白城</li>
					                                					                                <li>延边朝鲜族自治州</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>黑龙江</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">哈尔滨</li>
					                            						                                <li>齐齐哈尔</li>
					                                					                                <li>鸡西</li>
					                                					                                <li>鹤岗</li>
					                                					                                <li>双鸭山</li>
					                                					                                <li>大庆</li>
					                                					                                <li>伊春</li>
					                                					                                <li>佳木斯</li>
					                                					                                <li>七台河</li>
					                                					                                <li>牡丹江</li>
					                                					                                <li>黑河</li>
					                                					                                <li>绥化</li>
					                                					                                <li>大兴安岭地区</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>江苏</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">南京</li>
					                            						                                <li>苏州</li>
					                                					                                <li>昆山</li>
					                                					                                <li>常熟</li>
					                                					                                <li>张家港</li>
					                                					                                <li>无锡</li>
					                                					                                <li>江阴</li>
					                                					                                <li>徐州</li>
					                                					                                <li>常州</li>
					                                					                                <li>南通</li>
					                                					                                <li>连云港</li>
					                                					                                <li>淮安</li>
					                                					                                <li>盐城</li>
					                                					                                <li>扬州</li>
					                                					                                <li>镇江</li>
					                                					                                <li>泰州</li>
					                                					                                <li>靖江</li>
					                                					                                <li>宿迁</li>
					                                					                                <li>太仓</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>浙江</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">杭州</li>
					                            						                                <li>宁波</li>
					                                					                                <li>温州</li>
					                                					                                <li>海宁</li>
					                                					                                <li>嘉兴</li>
					                                					                                <li>湖州</li>
					                                					                                <li>绍兴</li>
					                                					                                <li>金华</li>
					                                					                                <li>衢州</li>
					                                					                                <li>舟山</li>
					                                					                                <li>台州</li>
					                                					                                <li>丽水</li>
					                                					                                <li>玉环县</li>
					                                					                                <li>方家山</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>安徽</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">合肥</li>
					                            						                                <li>芜湖</li>
					                                					                                <li>蚌埠</li>
					                                					                                <li>淮南</li>
					                                					                                <li>马鞍山</li>
					                                					                                <li>淮北</li>
					                                					                                <li>铜陵</li>
					                                					                                <li>安庆</li>
					                                					                                <li>黄山</li>
					                                					                                <li>滁州</li>
					                                					                                <li>阜阳</li>
					                                					                                <li>宿州</li>
					                                					                                <li>巢湖</li>
					                                					                                <li>六安</li>
					                                					                                <li>亳州</li>
					                                					                                <li>池州</li>
					                                					                                <li>宣城</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>福建</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">福州</li>
					                            						                                <li>厦门</li>
					                                					                                <li>莆田</li>
					                                					                                <li>三明</li>
					                                					                                <li>泉州</li>
					                                					                                <li>泉港区</li>
					                                					                                <li>漳州</li>
					                                					                                <li>南平</li>
					                                					                                <li>龙岩</li>
					                                					                                <li>宁德</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>江西</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">南昌</li>
					                            						                                <li>景德镇</li>
					                                					                                <li>萍乡</li>
					                                					                                <li>九江</li>
					                                					                                <li>新余</li>
					                                					                                <li>鹰潭</li>
					                                					                                <li>赣州</li>
					                                					                                <li>吉安</li>
					                                					                                <li>宜春</li>
					                                					                                <li>抚州</li>
					                                					                                <li>上饶</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>山东</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">济南</li>
					                            						                                <li>青岛</li>
					                                					                                <li>淄博</li>
					                                					                                <li>枣庄</li>
					                                					                                <li>东营</li>
					                                					                                <li>烟台</li>
					                                					                                <li>潍坊</li>
					                                					                                <li>济宁</li>
					                                					                                <li>泰安</li>
					                                					                                <li>威海</li>
					                                					                                <li>日照</li>
					                                					                                <li>莱芜</li>
					                                					                                <li>临沂</li>
					                                					                                <li>德州</li>
					                                					                                <li>聊城</li>
					                                					                                <li>滨州</li>
					                                					                                <li>菏泽</li>
					                                					                                <li>章丘</li>
					                                					                                <li>荣成</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>河南</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">郑州</li>
					                            						                                <li>开封</li>
					                                					                                <li>洛阳</li>
					                                					                                <li>平顶山</li>
					                                					                                <li>安阳</li>
					                                					                                <li>鹤壁</li>
					                                					                                <li>新乡</li>
					                                					                                <li>焦作</li>
					                                					                                <li>濮阳</li>
					                                					                                <li>许昌</li>
					                                					                                <li>漯河</li>
					                                					                                <li>三门峡</li>
					                                					                                <li>南阳</li>
					                                					                                <li>商丘</li>
					                                					                                <li>信阳</li>
					                                					                                <li>周口</li>
					                                					                                <li>驻马店</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>湖北</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">武汉</li>
					                            						                                <li>黄石</li>
					                                					                                <li>十堰</li>
					                                					                                <li>宜昌</li>
					                                					                                <li>襄樊</li>
					                                					                                <li>鄂州</li>
					                                					                                <li>荆门</li>
					                                					                                <li>孝感</li>
					                                					                                <li>荆州</li>
					                                					                                <li>黄冈</li>
					                                					                                <li>咸宁</li>
					                                					                                <li>随州</li>
					                                					                                <li>恩施土家族苗族自治州</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>湖南</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">长沙</li>
					                            						                                <li>株洲</li>
					                                					                                <li>湘潭</li>
					                                					                                <li>衡阳</li>
					                                					                                <li>邵阳</li>
					                                					                                <li>岳阳</li>
					                                					                                <li>常德</li>
					                                					                                <li>张家界</li>
					                                					                                <li>益阳</li>
					                                					                                <li>郴州</li>
					                                					                                <li>永州</li>
					                                					                                <li>怀化</li>
					                                					                                <li>娄底</li>
					                                					                                <li>湘西土家族苗族自治州</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>广东</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">广州</li>
					                            						                                <li>深圳</li>
					                                					                                <li>韶关</li>
					                                					                                <li>珠海</li>
					                                					                                <li>汕头</li>
					                                					                                <li>佛山</li>
					                                					                                <li>南海区</li>
					                                					                                <li>江门</li>
					                                					                                <li>湛江</li>
					                                					                                <li>茂名</li>
					                                					                                <li>肇庆</li>
					                                					                                <li>惠州</li>
					                                					                                <li>梅州</li>
					                                					                                <li>汕尾</li>
					                                					                                <li>河源</li>
					                                					                                <li>阳江</li>
					                                					                                <li>清远</li>
					                                					                                <li>东莞</li>
					                                					                                <li>中山</li>
					                                					                                <li>潮州</li>
					                                					                                <li>揭阳</li>
					                                					                                <li>云浮</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>广西</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">南宁</li>
					                            						                                <li>柳州</li>
					                                					                                <li>桂林</li>
					                                					                                <li>梧州</li>
					                                					                                <li>北海</li>
					                                					                                <li>防城港</li>
					                                					                                <li>钦州</li>
					                                					                                <li>贵港</li>
					                                					                                <li>玉林</li>
					                                					                                <li>百色</li>
					                                					                                <li>贺州</li>
					                                					                                <li>河池</li>
					                                					                                <li>来宾</li>
					                                					                                <li>崇左</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>海南</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">海口</li>
					                            						                                <li>三亚</li>
					                                					                                <li>洋浦市</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>四川</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">成都</li>
					                            						                                <li>自贡</li>
					                                					                                <li>攀枝花</li>
					                                					                                <li>泸州</li>
					                                					                                <li>德阳</li>
					                                					                                <li>绵阳</li>
					                                					                                <li>广元</li>
					                                					                                <li>遂宁</li>
					                                					                                <li>内江</li>
					                                					                                <li>乐山</li>
					                                					                                <li>南充</li>
					                                					                                <li>眉山</li>
					                                					                                <li>宜宾</li>
					                                					                                <li>广安</li>
					                                					                                <li>达州</li>
					                                					                                <li>雅安</li>
					                                					                                <li>巴中</li>
					                                					                                <li>资阳</li>
					                                					                                <li>阿坝藏族羌族自治州</li>
					                                					                                <li>甘孜藏族自治州</li>
					                                					                                <li>凉山彝族自治州</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>贵州</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">贵阳</li>
					                            						                                <li>六盘水</li>
					                                					                                <li>遵义</li>
					                                					                                <li>安顺</li>
					                                					                                <li>铜仁地区</li>
					                                					                                <li>黔西南布依族苗族自治州</li>
					                                					                                <li>毕节地区</li>
					                                					                                <li>黔东南苗族侗族自治州</li>
					                                					                                <li>黔南布依族苗族自治州</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>云南</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">昆明</li>
					                            						                                <li>曲靖</li>
					                                					                                <li>玉溪</li>
					                                					                                <li>保山</li>
					                                					                                <li>昭通</li>
					                                					                                <li>楚雄彝族自治州</li>
					                                					                                <li>红河哈尼族彝族自治州</li>
					                                					                                <li>文山壮族苗族自治州</li>
					                                					                                <li>思茅</li>
					                                					                                <li>西双版纳傣族自治州</li>
					                                					                                <li>德宏傣族景颇族自治州</li>
					                                					                                <li>大理白族自治州</li>
					                                					                                <li>丽江</li>
					                                					                                <li>怒江傈僳族自治州</li>
					                                					                                <li>迪庆藏族自治州</li>
					                                					                                <li>临沧</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>陕西</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">西安</li>
					                            						                                <li>铜川</li>
					                                					                                <li>宝鸡</li>
					                                					                                <li>咸阳</li>
					                                					                                <li>渭南</li>
					                                					                                <li>延安</li>
					                                					                                <li>汉中</li>
					                                					                                <li>榆林</li>
					                                					                                <li>安康</li>
					                                					                                <li>商洛</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>西藏</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">拉萨</li>
					                            						                                <li>昌都</li>
					                                					                                <li>山南</li>
					                                					                                <li>日喀则</li>
					                                					                                <li>那曲</li>
					                                					                                <li>阿里</li>
					                                					                                <li>林芝</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>甘肃</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">兰州</li>
					                            						                                <li>嘉峪关</li>
					                                					                                <li>金昌</li>
					                                					                                <li>白银</li>
					                                					                                <li>天水</li>
					                                					                                <li>武威</li>
					                                					                                <li>张掖</li>
					                                					                                <li>平凉</li>
					                                					                                <li>酒泉</li>
					                                					                                <li>庆阳</li>
					                                					                                <li>定西</li>
					                                					                                <li>陇南</li>
					                                					                                <li>临夏回族自治州</li>
					                                					                                <li>甘南藏族自治州</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>青海</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">西宁</li>
					                            						                                <li>海晏</li>
					                                					                                <li>海东</li>
					                                					                                <li>海北</li>
					                                					                                <li>黄南</li>
					                                					                                <li>海南</li>
					                                					                                <li>果洛</li>
					                                					                                <li>玉树</li>
					                                					                                <li>海西</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>宁夏</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">银川</li>
					                            						                                <li>石嘴山</li>
					                                					                                <li>吴忠</li>
					                                					                                <li>固原</li>
					                                					                                <li>中卫</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>新疆</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">乌鲁木齐</li>
					                            						                                <li>石河子</li>
					                                					                                <li>克拉玛依</li>
					                                					                                <li>吐鲁番</li>
					                                					                                <li>哈密</li>
					                                					                                <li>昌吉</li>
					                                					                                <li>博乐</li>
					                                					                                <li>和田</li>
					                                					                                <li>阿克苏</li>
					                                					                                <li>阿勒</li>
					                                					                                <li>喀什</li>
					                                					                                <li>塔城</li>
					                                					                                <li>库尔勒</li>
					                                					                                <li>伊犁</li>
					                                					                                <li>克州</li>
					                                					                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>香港</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">香港</li>
					                            						                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>澳门</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">澳门</li>
					                            						                            </ul>
					                        </li>
					                         					                        <li>
					                        	<span>台湾</span>
					                            <ul class="reset dn">
					                            	<li class="mr_on">台湾</li>
					                            						                            </ul>
					                        </li>
					                         					                        					                     </ul>
					                 </div>
			   	 				</div>						   	 				
			   	 			</div>			   	 			
							<label>手机号码</label>
			   	 			<div class="form_wrap mobile_s">	
			   	 				<input id="mr_mobile" name="mr_mobile" class="mr_input" type="text">
			   	 				<input id="sess_phone" value="" type="hidden">
			   	 				<i class="mr_locks"><em>在简历中保密，仅投递后对方才可查看<i></i></em></i>
			   	 			</div>					 	 			
			   	 			
							<label>联系邮箱</label>
			   	 			<div class="form_wrap email_s">	
			   	 				<input id="mr_email" name="mr_email" class="mr_input" type="text">
			   	 				<input id="sess_email" value="513709055@qq.com" type="hidden">
			   	 				<i class="mr_locks"><em>在简历中保密，仅投递后对方才可查看<i></i></em></i>
			   	 			</div>	
			   	 			
							<label>社交帐号主页地址</label>
							<div class="sns_empty dn">
								<div class="sns_add_empty">
									<div class="mr_add_m dn">
										<i></i><em></em>
										<ul class="clearfixs">
											<li class="sns1" data-flag="1"><span>Twitter<em></em></span></li>
											<li class="sns2" data-flag="2"><span>Dribbble<em></em></span></li>
											<li class="sns3" data-flag="3"><span>Behance<em></em></span></li>
											<li class="sns4" data-flag="4"><span>LinkedIn<em></em></span></li>
											<li class="sns5" data-flag="5"><span>Quora<em></em></span></li>
											<li class="sns6" data-flag="6"><span>Github<em></em></span></li>
											<li class="sns7" data-flag="7"><span>知乎<em></em></span></li>
											<li class="sns8" data-flag="8"><span>LOFTER<em></em></span></li>
											<li class="sns9" data-flag="9"><span>UI中国<em></em></span></li>
											<li class="sns10" data-flag="10"><span>新浪微博<em></em></span></li>
											<li class="sns11" data-flag="11"><span>SegmentFault<em></em></span></li>
											<li class="sns12" data-flag="12"><span>StackoverFlow<em></em></span></li>
										</ul>
										<div class="mr_add_op clearfixs">
											<a href="http://www.lagoujobs.com/forum.php?mod=viewthread&amp;tid=26499&amp;extra=page%3D1" target="_blank" class="mr_none_my">没有我常用的</a><a href="javascript:;" class="sns_cancel">取消</a><a href="javascript:;" class="sns_save">选好了</a>
										</div>
									</div>									
								</div>
							</div>
							<div class="sns_area">
							</div>
							<div class="mr_add_sns">
								<div class="mr_add_m dn">
									<i></i><em></em>
									<ul class="clearfixs">
										<li class="sns1" data-flag="1"><span>Twitter<em></em></span></li>
										<li class="sns2" data-flag="2"><span>Dribbble<em></em></span></li>
										<li class="sns3" data-flag="3"><span>Behance<em></em></span></li>
										<li class="sns4" data-flag="4"><span>LinkedIn<em></em></span></li>
										<li class="sns5" data-flag="5"><span>Quora<em></em></span></li>
										<li class="sns6" data-flag="6"><span>Github<em></em></span></li>
										<li class="sns7" data-flag="7"><span>知乎<em></em></span></li>
										<li class="sns8" data-flag="8"><span>LOFTER<em></em></span></li>
										<li class="sns9" data-flag="9"><span>UI中国<em></em></span></li>
										<li class="sns10" data-flag="10"><span>新浪微博<em></em></span></li>
										<li class="sns11" data-flag="11"><span>SegmentFault<em></em></span></li>
										<li class="sns12" data-flag="12"><span>StackoverFlow<em></em></span></li>
									</ul>
									<div class="mr_add_op clearfixs">
										<a href="http://www.lagoujobs.com/forum.php?mod=viewthread&amp;tid=26499&amp;extra=page%3D1" target="_blank" class="mr_none_my">没有我常用的</a><a href="javascript:;" class="sns_cancel">取消</a><a href="javascript:;" class="sns_save">选好了</a>
									</div>
								</div>
								<span class="sns_add"><i></i><em>添加更多主页地址</em></span>
							</div>
							<p class="w_tips">电话及邮箱与帐号不一致，是否确认保存？企业会通过它们与您取得联系</p>
							<p class="w_tips">电话与帐号号码不一致，是否确认保存？企业会通过此号码与您取得联系</p>
							<p class="w_tips">邮箱地址与帐号不一致，是否确认保存？企业会通过此邮箱与您取得联系</p>
			   	 			<div class="mr_ope">
								<input class="mr_save" value="保存" type="submit">
								<input class="mr_save" value="确认保存" id="sess_submit" style="display:none" type="button">
								<a href="javascript:;" class="mr_cancel" data-birthyear="1993" data-birthmonth="11" data-sf="php开发工程师" data-shenfen="php开发工程师 · 西安美联网络科技有限公司" data-sex="" data-xl="本科" data-gzjy="1年" data-city="北京" data-mobile="15691718928" data-email="513709055@qq.com">取消</a>			   	 				
			   	 			</div>
						</div>
					</form>		
				</div>
			</div>	
			<div class="mr_content">
				<div id="workExperience" class="item_container_target">
					<div class="mr_moudle_head clearfixs mr_w604">
						<div class="mr_head_l">
							<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 工作经历  </span><span class="mr_title_r"></span>
							</div>
						</div>
						<div class="mr_head_r">
							<i></i><em>添加</em>
						</div>
					</div>
					<div class="mr_moudle_content mr_w604">
						<form class="jobExpForm dn" id="addJobForm">
							<div class="mr_add_work">
								<div class="mr_upload_logo">
									<div>
										<i></i>
										<span>上传公司LOGO</span>
									</div>
									<input id="companyLogo" name="companyLogo" onchange="myresumeCommon.utils.imageUpload(this,myresumeCommon.requestTargets.uploadLogo,uploadCompanyLogo.upSucc,uploadCompanyLogo.upFail);" title="目前仅支持10MB以内的PNG/JPG/JPEG/GIF图片" type="file">
									<img src="/Public/Home/resume/myresume_007.htm" class="logo_u" name="mr_company_logo" alt="">
								</div>
								<label>公司</label>
								<div class="mr_input_div mr_click_flag">
									<input class="mr_btn companyName" id="companyName" name="companyName">
								</div>
								<label>职位</label>
								<div class="mr_input_div mr_click_flag">
									<input class="mr_btn autoPosition" id="positionName" name="positionName">
								</div>
								<label>在职时间</label>
								<div class="clearfixs mr_time_area">
									<div class="mr_timed_div mr_sta_time fl">
										<i class="mr_sj"></i>
										<input class="mr_btn" type="button">
										<input id="startTime" name="startTime" type="hidden">
			 							<div class="mr_calendar_ym clearfixs dn">
			 								<ul class="mr_year">
			 												 									<li class="today">2015</li>
			 												 									<li>2014</li>
			 												 									<li>2013</li>
			 												 									<li>2012</li>
			 												 									<li>2011</li>
			 												 									<li>2010</li>
			 												 									<li>2009</li>
			 												 									<li>2008</li>
			 												 									<li>2007</li>
			 												 									<li>2006</li>
			 												 									<li>2005</li>
			 												 									<li>2004</li>
			 												 									<li>2003</li>
			 												 									<li>2002</li>
			 												 									<li>2001</li>
			 												 									<li>2000</li>
			 												 									<li>1999</li>
			 												 									<li>1998</li>
			 												 									<li>1997</li>
			 												 									<li>1996</li>
			 												 									<li>1995</li>
			 												 									<li>1994</li>
			 												 									<li>1993</li>
			 												 									<li>1992</li>
			 												 									<li>1991</li>
			 												 									<li>1990</li>
			 												 									<li>1989</li>
			 												 								</ul>
			 								<ul class="mr_month clearfixs">
			 									<li><span>1月</span></li>
			 									<li><span>2月</span></li>
			 									<li class="mr0"><span>3月</span></li>
			 									<li><span>4月</span></li>
			 									<li><span>5月</span></li>
			 									<li class="mr0"><span>6月</span></li>
			 									<li><span>7月</span></li>
			 									<li><span>8月</span></li>
			 									<li class="mr0"><span>9月</span></li>
			 									<li class="mb0"><span>10月</span></li>
			 									<li class="mb0"><span class="today">11月</span></li>
			 									<li class="mr0 mb0"><span>12月</span></li>
			 								</ul>
			 							</div>													
									</div>									
									<div class="mr_timed_div fl">
										<i class="mr_sj"></i>
										<input class="mr_btn" type="button">
										<input id="endTime" name="endTime" type="hidden">
										<div class="mr_calendar_ym clearfixs dn">
			 								<ul class="mr_year"><li>至今</li>
			 												 									<li class="today">2015</li>
			 												 									<li>2014</li>
			 												 									<li>2013</li>
			 												 									<li>2012</li>
			 												 									<li>2011</li>
			 												 									<li>2010</li>
			 												 									<li>2009</li>
			 												 									<li>2008</li>
			 												 									<li>2007</li>
			 												 									<li>2006</li>
			 												 									<li>2005</li>
			 												 									<li>2004</li>
			 												 									<li>2003</li>
			 												 									<li>2002</li>
			 												 									<li>2001</li>
			 												 									<li>2000</li>
			 												 									<li>1999</li>
			 												 									<li>1998</li>
			 												 									<li>1997</li>
			 												 									<li>1996</li>
			 												 									<li>1995</li>
			 												 									<li>1994</li>
			 												 									<li>1993</li>
			 												 									<li>1992</li>
			 												 									<li>1991</li>
			 												 									<li>1990</li>
			 												 									<li>1989</li>
			 												 								</ul>
			 								<ul class="mr_month clearfixs">
			 									<li><span>1月</span></li>
			 									<li><span>2月</span></li>
			 									<li class="mr0"><span>3月</span></li>
			 									<li><span>4月</span></li>
			 									<li><span>5月</span></li>
			 									<li class="mr0"><span>6月</span></li>
			 									<li><span>7月</span></li>
			 									<li><span>8月</span></li>
			 									<li class="mr0"><span>9月</span></li>
			 									<li class="mb0"><span>10月</span></li>
			 									<li class="mb0"><span class="today">11月</span></li>
			 									<li class="mr0 mb0"><span>12月</span></li>
			 								</ul>
			 							</div>											
									</div>									
								</div>
								<label>工作内容</label>
								<div id="mr_job_mce" class="mr_click_flag wrap_editor">
									<textarea aria-hidden="true" class="tinymce" id="jobContent" name="jobContent" style="width: 520px; height: 148px; display: none;"></textarea><span id="jobContent_voice" style="display:none;" class="mceVoiceLabel">富文本域</span><table style="width: 520px; height: 148px;" class="mceLayout" id="jobContent_tbl" role="presentation" cellpadding="0" cellspacing="0"><tbody><tr class="mceFirst" role="presentation"><td role="toolbar" class="mceToolbar mceLeft mceFirst mceLast"><div tabindex="-1" id="jobContent_toolbargroup" role="group" aria-labelledby="jobContent_toolbargroup_voice"><span role="application"><span id="jobContent_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">工具栏</span><table aria-pressed="false" aria-disabled="false" id="jobContent_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" role="presentation" tabindex="-1" align="" cellpadding="0" cellspacing="0"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="jobContent_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="jobContent_bullist_voice" title="项目列表"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="jobContent_bullist_voice">项目列表</span></a></td><td style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="jobContent_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="jobContent_numlist_voice" title="编号列表"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="jobContent_numlist_voice">编号列表</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="转到工具按钮 - Alt-Q，转到编辑器 - Alt-Z，转到元素路径 - Alt-X。" onfocus="tinyMCE.getInstanceById('jobContent').focus();"><!-- IE --></a></td></tr><tr class="mceLast"><td class="mceIframeContainer mceFirst mceLast"><iframe style="width: 100%; height: 125px; display: block;" title="富文本域按 ALT-F10 定位到工具栏.按 ALT-0 获取帮助。" allowtransparency="true" src='javascript:""' id="jobContent_ifr" frameborder="0"></iframe></td></tr></tbody></table></span>
								</div>
								<div class="mr_ope clearfixs">
									<input class="mr_save" value="保存" type="submit">
									<a href="javascript:;" class="mr_cancel">取消</a>	
				   	 			</div>								
							</div>	
						</form>						
						<div class="mr_empty_add dn">
							<i></i><span> 添加工作经历  </span>
						</div>
                        <?php if(is_array($data["history_value"])): $i = 0; $__LIST__ = $data["history_value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list_show">
							<div class="mr_jobe_list" rid='<?php echo ($vo["id"]); ?>'>
								<div class="clearfixs">
									<div class="mr_content_l clearfixs">
							         <div class="l2">
											<h4><?php echo ($vo["company"]); ?></h4>
											<span><?php echo ($vo["job"]); ?></span>
									</div>
									</div>
									<div class="mr_content_r">
										<div class="mr_edit mr_c_r_t" data-expid="<?php echo ($vo["id"]); ?>" data-logo="" data-comname="<?php echo ($vo["company"]); ?>" data-posname="<?php echo ($vo["job"]); ?>" data-startime="<?php echo ($vo["begin_yeartime"]); ?>.<?php echo ($vo["begin_monthtime"]); ?>" data-endtime="<?php echo ($vo["end_yeartime"]); ?>.<?php echo ($vo["end_monthtime"]); ?>" data-content="<?php echo ($vo["content"]); ?>">
											<i></i><em>编辑</em>
										</div>
									<span><?php echo ($vo["begin_yeartime"]); ?>.<?php echo ($vo["begin_monthtime"]); ?></span><span> — </span><span><?php echo ($vo["end_yeartime"]); ?>.<?php echo ($vo["end_monthtime"]); ?></span>
									</div>							
								</div>
								<div class="mr_content_m">
                                    <?php echo ($vo["content"]); ?>
								</div>	
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>	
					</div>						
				</div>
				
				<div id="educationalBackground" class="item_container_target">					
					<div class="mr_moudle_head clearfixs mr_w604">
						<div class="mr_head_l">
							<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c">教育经历</span><span class="mr_title_r"></span>
							</div>
						</div>
						<div class="mr_head_r">
							<i></i><em>添加</em>
						</div>
					</div>
					<div class="mr_moudle_content mr_w604">
						<form class="eduExpForm dn" id="addEduForm">
							<!-- <input type="hidden" id="eduId" name="eduId" value="" /> -->
							<div class="mr_add_work">
								<label>学校名称</label>
								<div class="mr_input_div mr_click_flag">
									<input class="mr_btn" name="schoolName" type="text">
								</div>
								<label>所学专业</label>
								<div class="mr_input_div mr_click_flag">
									<input class="mr_btn" name="positionName" type="text">
								</div>
								<label><span>学历</span><span class="label_by_y">毕业年份</span></label>
								<div class="clearfixs mr_time_area">
									<div class="mr_timed_div normal_s mr_sta_time fl">
										<i class="mr_sj"></i>
										<input name="degree_text" type="hidden">
										<input class="mr_btn" name="degree_val" type="button">
										<div class="xl_list dn">
											<ul class="ul_edubg">
																								<li>大专</li>
																								<li>本科</li>
																								<li>硕士</li>
																								<li>博士</li>
																								<li>其他</li>
																							</ul>
										</div>													
									</div>									
									<div class="mr_timed_div normal_s fl">
										<i class="mr_sj"></i>
										<input name="graduate_text" type="hidden">
										<input class="mr_btn" onchange="validateChange(this);" name="graduate" type="button">
										<div class="xl_list dn">
											<ul class="ul_eduy">
																								<li>2017</li>
																								<li>2016</li>
																								<li>2015</li>
																								<li>2014</li>
																								<li>2013</li>
																								<li>2012</li>
																								<li>2011</li>
																								<li>2010</li>
																								<li>2009</li>
																								<li>2008</li>
																								<li>2007</li>
																								<li>2006</li>
																								<li>2005</li>
																								<li>2004</li>
																								<li>2003</li>
																								<li>2002</li>
																								<li>2001</li>
																								<li>2000</li>
																								<li>1999</li>
																								<li>1998</li>
																								<li>1997</li>
																								<li>1996</li>
																								<li>1995</li>
																								<li>1994</li>
																								<li>1993</li>
																								<li>1992</li>
																								<li>1991</li>
																								<li>1990</li>
																								<li>1989</li>
																							</ul>
										</div>											
									</div>									
								</div>
								<div class="mr_ope clearfixs">
									<input class="mr_save" value="保存" type="submit">
									<a href="javascript:;" class="mr_cancel">取消</a>	
					  	 		</div>								
							</div>	
						</form>	
						<div class="mr_empty_add dn">
								<i></i><span>添加教育经历</span>
						</div>
						<div class="list_show">	
                        <?php if(is_array($data["eduction_value"])): $i = 0; $__LIST__ = $data["eduction_value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="clearfixs mb46 mr_jobe_list">
								<div class="mr_content_l">
                				<div class="l2">
										<h4><?php echo ($vo["school"]); ?></h4>
										<span><?php echo ($vo["education"]); ?>· <?php echo ($vo["professional"]); ?></span>
									</div>
								</div>
								<div class="mr_content_r">
									<div class="mr_edit mr_c_r_t" data-eduid="<?php echo ($vo["id"]); ?>" data-schoolname="<?php echo ($vo["school"]); ?>" data-edu="<?php echo ($vo["education"]); ?>" data-pro="<?php echo ($vo["professional"]); ?>" data-date="2015">
										<i></i><em>编辑</em>
									</div>
									<!-- <span>2015年毕业</span> -->
									<span>2015年毕业</span>
								</div>							
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>						
				</div>	

				<div id="worksShow" class="dn item_container_target">
					<div class="mr_moudle_head clearfixs mr_w604">
						<div class="mr_head_l">
							<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c">作品展示</span><span class="mr_title_r"></span>
							</div>
						</div>
						<div class="mr_head_r">
							<i></i><em>添加</em>
						</div>
					</div>
					<div class="mr_moudle_content mr_w604">
						<div id="worksshowForms" class="mr_worksshow_forms dn">
						<!-- 上传图片的form -->
						<form class="add_worksshow_form" id="addWorksShowUploadForm">
							<div class="mr_add_work mr_addwork_online">
								<div class="mr_worksshow_tab">
									<span class="mr_wst_upimage selected">上传图片</span>
									<span class="mr_wst_uponline">在线作品</span>
								</div>
								<!-- 图片上传区域 -->
								<div class="mr_worksshow_upimage">
									<div>
										<i></i>
										<span>上传作品图片</span>
									</div>
									<input name="workPicHidden" class="work-pic-hidden" type="hidden">
									<input class="worksshow_up" id="worksshowUp" name="workPic" title="目前仅支持10MB以内的PNG/JPG/JPEG/GIF图片" onchange="myresumeCommon.utils.imageUpload( this, myresumeCommon.requestTargets.workUpload, worksShowOperator.addUploadSucc, worksShowOperator.addUploadFail );" type="file">
									<img id="worksshowUpShow" src="/Public/Home/resume/myresume_007.htm" alt="" class="worksshow_img">
								</div>
								<label>作品标题</label>
								<div class="mr_input_div mr_click_flag">
									<input class="mr_btn" id="workUploadTitle" name="workTitle">
								</div>
								<label>作品描述</label>
								<div id="workImagesDesc" class="mr_click_flag wrap_editor">
									<textarea aria-hidden="true" class="tinymce" id="workImagesDescContent" name="workDescribe" style="width: 520px; height: 148px; display: none;"></textarea><span id="workImagesDescContent_voice" style="display:none;" class="mceVoiceLabel">富文本域</span><table style="width: 520px; height: 148px;" class="mceLayout" id="workImagesDescContent_tbl" role="presentation" cellpadding="0" cellspacing="0"><tbody><tr class="mceFirst" role="presentation"><td role="toolbar" class="mceToolbar mceLeft mceFirst mceLast"><div tabindex="-1" id="workImagesDescContent_toolbargroup" role="group" aria-labelledby="workImagesDescContent_toolbargroup_voice"><span role="application"><span id="workImagesDescContent_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">工具栏</span><table aria-pressed="false" aria-disabled="false" id="workImagesDescContent_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" role="presentation" tabindex="-1" align="" cellpadding="0" cellspacing="0"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td class="ulolBorder" style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="workImagesDescContent_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="workImagesDescContent_bullist_voice" title="项目列表"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="workImagesDescContent_bullist_voice">项目列表</span></a></td><td class="ulolBorder" style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="workImagesDescContent_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="workImagesDescContent_numlist_voice" title="编号列表"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="workImagesDescContent_numlist_voice">编号列表</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="转到工具按钮 - Alt-Q，转到编辑器 - Alt-Z，转到元素路径 - Alt-X。" onfocus="tinyMCE.getInstanceById('workImagesDescContent').focus();"><!-- IE --></a></td></tr><tr class="mceLast"><td class="mceIframeContainer mceFirst mceLast"><iframe style="width: 100%; height: 125px; display: block;" title="富文本域按 ALT-F10 定位到工具栏.按 ALT-0 获取帮助。" allowtransparency="true" src='javascript:""' id="workImagesDescContent_ifr" frameborder="0"></iframe></td></tr></tbody></table></span>
								</div>
								<div class="mr_ope clearfixs">
									<input class="mr_save" value="保存" type="submit">
									<a href="javascript:;" class="mr_cancel">取消</a>	
				   	 			</div>								
							</div>
						</form>

						<!-- 新增在线作品的foram -->
						<form class="add_worksshow_form dn" id="addWorksShowOnlineForm">
							<div class="mr_add_work mr_addwork_image">
								<div class="mr_worksshow_tab">
									<span class="mr_wst_upimage">上传图片</span>
									<span class="mr_wst_uponline selected">在线作品</span>
								</div>
								<div class="mr_wo_show">
								    <div class="mr_self_site">
										<div class="mr_self_sitelink">
											www.example.com
										</div>
								    </div>
								    <div class="mr_wo_preview">
								     	<p>这里是你的作品描述</p>
								    </div>
								</div>
								<label>作品地址</label>
								<div class="mr_input_div mr_click_flag">
									<input class="mr_btn" id="workOnlineUrl" name="url">
								</div>
								<label>作品描述</label>
								<div id="workOnlineDesc" class="mr_click_flag wrap_editor">
									<textarea aria-hidden="true" class="tinymce" id="workOnlineDescContent" name="workDescribeOnline" style="width: 520px; height: 148px; display: none;"></textarea><span id="workOnlineDescContent_voice" style="display:none;" class="mceVoiceLabel">富文本域</span><table style="width: 520px; height: 148px;" class="mceLayout" id="workOnlineDescContent_tbl" role="presentation" cellpadding="0" cellspacing="0"><tbody><tr class="mceFirst" role="presentation"><td role="toolbar" class="mceToolbar mceLeft mceFirst mceLast"><div tabindex="-1" id="workOnlineDescContent_toolbargroup" role="group" aria-labelledby="workOnlineDescContent_toolbargroup_voice"><span role="application"><span id="workOnlineDescContent_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">工具栏</span><table aria-pressed="false" aria-disabled="false" id="workOnlineDescContent_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" role="presentation" tabindex="-1" align="" cellpadding="0" cellspacing="0"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td class="ulolBorder" style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="workOnlineDescContent_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="workOnlineDescContent_bullist_voice" title="项目列表"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="workOnlineDescContent_bullist_voice">项目列表</span></a></td><td class="ulolBorder" style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="workOnlineDescContent_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="workOnlineDescContent_numlist_voice" title="编号列表"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="workOnlineDescContent_numlist_voice">编号列表</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="转到工具按钮 - Alt-Q，转到编辑器 - Alt-Z，转到元素路径 - Alt-X。" onfocus="tinyMCE.getInstanceById('workOnlineDescContent').focus();"><!-- IE --></a></td></tr><tr class="mceLast"><td class="mceIframeContainer mceFirst mceLast"><iframe style="width: 100%; height: 125px; display: block;" title="富文本域按 ALT-F10 定位到工具栏.按 ALT-0 获取帮助。" allowtransparency="true" src='javascript:""' id="workOnlineDescContent_ifr" frameborder="0"></iframe></td></tr></tbody></table></span>
								</div>
								<div class="mr_ope clearfixs">
									<input class="mr_save" value="保存" type="submit">
									<a href="javascript:;" class="mr_cancel">取消</a>	
				   	 			</div>								
							</div>
						</form>	
						</div>
						<div class="mr_empty_add ">
								<i></i><span>展示我的作品</span>
						</div>
						<!-- 在线作品 -->
						<div class="mr_work_online">
													</div>
						<div class="mr_work_upload">
													</div>		
																				
					</div>	
				</div>	
				
				<div id="selfDescription" class="item_container_target">
					<div>
						<div class="mr_moudle_head clearfixs mr_w604">
							<div class="mr_head_l">
								<div class="mr_title">
									<span class="mr_title_l"></span><span class="mr_title_c">自我描述</span><span class="mr_title_r"></span>
								</div>
							</div>
							<div class="mr_head_r">
								<i></i><em>编辑</em>
							</div>
						</div>
						<div class="mr_moudle_content clearfixs mr_w604">
							<form id="upSelfForm" class="dn">
								<div class="mr_add_work">
									<i></i>
									<img alt="头像" class="mr_headimg" src="/Uploads/User/image/<?php echo ($data["image"]); ?>">
									<div class="self_tip">
										<h3>提供几个思路，试着从这些点描述自己：</h3>
										<p>
											· 你认为值得称道的工作细节；<br>
											· 你曾经克服过的最大挑战；<br>
											· 你在找工作时最看重的方面；<br>
											· 你曾经引以为豪的个人项目或者事迹；<br>
											· 如果你是一位团队领导者，说说你的管理哲学以及独到的行业见解<br>
											· 其它你认为能展示你优势的事情
										</p>
									</div>
									<label>自我描述</label>
									<div id="mr_job_mce" class="mr_click_flag wrap_editor">
										<textarea aria-hidden="true" class="tinymce" style="width: 520px; height: 148px;" id="self" name="self_des"></textarea><span id="self_voice" style="display:none;" class="mceVoiceLabel">富文本域</span><table style="width: 520px; height: 148px;" class="mceLayout" id="self_tbl" role="presentation" cellpadding="0" cellspacing="0"><tbody><tr class="mceFirst" role="presentation"><td role="toolbar" class="mceToolbar mceLeft mceFirst mceLast"><div tabindex="-1" id="self_toolbargroup" role="group" aria-labelledby="self_toolbargroup_voice"><span role="application"><span id="self_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">工具栏</span><table aria-pressed="false" aria-disabled="false" id="self_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" role="presentation" tabindex="-1" align="" cellpadding="0" cellspacing="0"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="self_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="self_bullist_voice" title="项目列表"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="self_bullist_voice">项目列表</span></a></td><td style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="self_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="self_numlist_voice" title="编号列表"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="self_numlist_voice">编号列表</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="转到工具按钮 - Alt-Q，转到编辑器 - Alt-Z，转到元素路径 - Alt-X。" onfocus="tinyMCE.getInstanceById('self').focus();"><!-- IE --></a></td></tr><tr class="mceLast"><td class="mceIframeContainer mceFirst mceLast"><iframe style="width: 100%; height: 125px; display: block;" title="富文本域按 ALT-F10 定位到工具栏.按 ALT-0 获取帮助。" allowtransparency="true" src='javascript:""' id="self_ifr" frameborder="0"></iframe></td></tr></tbody></table></span>
									</div>
									<div class="mr_ope clearfixs">
										<input class="mr_save" value="保存" type="submit">
										<a href="javascript:;" class="mr_cancel">取消</a>	
						  	 		</div>										
								</div>							
							</form>
							<div class="mr_empty_add dn">
								<i></i><span>更新自我描述</span>
							</div>
							
							<div class="self_des_list clearfixs ">
								<div class="mr_self_l">
									<i></i>
									<img class="mr_headimg" src="/Uploads/User/image/<?php echo ($data["image"]); ?>" alt="头像">
								</div>	
								<div class="mr_self_r">
									<?php echo ($data["selfdes"]); ?>	
								</div>	
							</div>
						</div>						
					</div>
				</div>					
				
				<div id="expectJob" class="item_container_target">
					<div>
						<div class="mr_moudle_head clearfixs mr_w604">
							<div class="mr_head_l">
								<div class="mr_title">
									<span class="mr_title_l"></span><span class="mr_title_c">期望工作</span><span class="mr_title_r"></span>
								</div>
							</div>
							<div class="mr_head_r" data-city="北京">
								<i></i><em>编辑</em>
							</div>
						</div>
						<div class="mr_moudle_content clearfixs mr_w604">
							<form class="expJobForm dn" id="upExpJobForm"><!--addProForm js赋值  -->
								<div class="mr_add_work">
									<label>期望职位</label>
									<div class="clearfixs exp_job_mb">
										<div class="mr_expinput_div mr_click_flag">
											<input class="mr_btn autoPosition" id="expjobName" name="expjobName" type="text">
										</div>
										<div class="mr_exp_type normal_s">
											<i class="mr_sj"></i>
											<input class="mr_btn" name="exp_job_type" value="全职" type="button">
											<div class="xl_list  dn">
												<ul class="ul_exptype">
													<li>全职</li>
													<li>兼职</li>
													<li>实习</li>
												</ul>	
											</div>
										</div>
									</div>
									<label><span>期望城市</span><span class="label_yx">期望月薪</span></label>
									<div class="clearfixs exp_job_mb">
										<div class="city_s mr_job_city fl">
											<i class="mr_sj"></i>
											<input class="mr_btn" name="jobCity" type="button">
											<div class="xl_list dn">
												<div class="mr_selCity">
								                    <ul class="reset mr_province">
								                        <li><span>热门城市</span>
								                            <ul class="reset dn"><li>北京</li><li>上海</li><li>广州</li><li>深圳</li><li>杭州</li><li>成都</li><li>西安</li><li>南京</li><li>厦门</li><li>武汉</li></ul>
								                        </li>
								                       								                       								                        <li>
								                        	<span>北京</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">北京</li>
								                            									                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>上海</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">上海</li>
								                            									                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>天津</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">天津</li>
								                            									                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>重庆</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">重庆</li>
								                            									                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>河北</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">石家庄</li>
								                            									                                <li>唐山</li>
								                                								                                <li>秦皇岛</li>
								                                								                                <li>邯郸</li>
								                                								                                <li>邢台</li>
								                                								                                <li>保定</li>
								                                								                                <li>张家口</li>
								                                								                                <li>承德</li>
								                                								                                <li>沧州</li>
								                                								                                <li>廊坊</li>
								                                								                                <li>衡水</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>山西</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">太原</li>
								                            									                                <li>大同</li>
								                                								                                <li>阳泉</li>
								                                								                                <li>长治</li>
								                                								                                <li>晋城</li>
								                                								                                <li>朔州</li>
								                                								                                <li>晋中</li>
								                                								                                <li>运城</li>
								                                								                                <li>忻州</li>
								                                								                                <li>临汾</li>
								                                								                                <li>吕梁</li>
								                                								                                <li>永济市</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>内蒙古</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">呼和浩特</li>
								                            									                                <li>包头</li>
								                                								                                <li>乌海</li>
								                                								                                <li>赤峰</li>
								                                								                                <li>通辽</li>
								                                								                                <li>鄂尔多斯</li>
								                                								                                <li>呼伦贝尔</li>
								                                								                                <li>兴安盟</li>
								                                								                                <li>锡林郭勒盟</li>
								                                								                                <li>乌兰察布</li>
								                                								                                <li>巴彦淖尔</li>
								                                								                                <li>阿拉善盟</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>辽宁</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">沈阳</li>
								                            									                                <li>大连</li>
								                                								                                <li>鞍山</li>
								                                								                                <li>抚顺</li>
								                                								                                <li>本溪</li>
								                                								                                <li>丹东</li>
								                                								                                <li>锦州</li>
								                                								                                <li>营口</li>
								                                								                                <li>阜新</li>
								                                								                                <li>辽阳</li>
								                                								                                <li>盘锦</li>
								                                								                                <li>铁岭</li>
								                                								                                <li>朝阳</li>
								                                								                                <li>葫芦岛</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>吉林</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">长春</li>
								                            									                                <li>吉林</li>
								                                								                                <li>四平</li>
								                                								                                <li>辽源</li>
								                                								                                <li>通化</li>
								                                								                                <li>白山</li>
								                                								                                <li>松原</li>
								                                								                                <li>白城</li>
								                                								                                <li>延边朝鲜族自治州</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>黑龙江</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">哈尔滨</li>
								                            									                                <li>齐齐哈尔</li>
								                                								                                <li>鸡西</li>
								                                								                                <li>鹤岗</li>
								                                								                                <li>双鸭山</li>
								                                								                                <li>大庆</li>
								                                								                                <li>伊春</li>
								                                								                                <li>佳木斯</li>
								                                								                                <li>七台河</li>
								                                								                                <li>牡丹江</li>
								                                								                                <li>黑河</li>
								                                								                                <li>绥化</li>
								                                								                                <li>大兴安岭地区</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>江苏</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">南京</li>
								                            									                                <li>苏州</li>
								                                								                                <li>昆山</li>
								                                								                                <li>常熟</li>
								                                								                                <li>张家港</li>
								                                								                                <li>无锡</li>
								                                								                                <li>江阴</li>
								                                								                                <li>徐州</li>
								                                								                                <li>常州</li>
								                                								                                <li>南通</li>
								                                								                                <li>连云港</li>
								                                								                                <li>淮安</li>
								                                								                                <li>盐城</li>
								                                								                                <li>扬州</li>
								                                								                                <li>镇江</li>
								                                								                                <li>泰州</li>
								                                								                                <li>靖江</li>
								                                								                                <li>宿迁</li>
								                                								                                <li>太仓</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>浙江</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">杭州</li>
								                            									                                <li>宁波</li>
								                                								                                <li>温州</li>
								                                								                                <li>海宁</li>
								                                								                                <li>嘉兴</li>
								                                								                                <li>湖州</li>
								                                								                                <li>绍兴</li>
								                                								                                <li>金华</li>
								                                								                                <li>衢州</li>
								                                								                                <li>舟山</li>
								                                								                                <li>台州</li>
								                                								                                <li>丽水</li>
								                                								                                <li>玉环县</li>
								                                								                                <li>方家山</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>安徽</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">合肥</li>
								                            									                                <li>芜湖</li>
								                                								                                <li>蚌埠</li>
								                                								                                <li>淮南</li>
								                                								                                <li>马鞍山</li>
								                                								                                <li>淮北</li>
								                                								                                <li>铜陵</li>
								                                								                                <li>安庆</li>
								                                								                                <li>黄山</li>
								                                								                                <li>滁州</li>
								                                								                                <li>阜阳</li>
								                                								                                <li>宿州</li>
								                                								                                <li>巢湖</li>
								                                								                                <li>六安</li>
								                                								                                <li>亳州</li>
								                                								                                <li>池州</li>
								                                								                                <li>宣城</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>福建</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">福州</li>
								                            									                                <li>厦门</li>
								                                								                                <li>莆田</li>
								                                								                                <li>三明</li>
								                                								                                <li>泉州</li>
								                                								                                <li>泉港区</li>
								                                								                                <li>漳州</li>
								                                								                                <li>南平</li>
								                                								                                <li>龙岩</li>
								                                								                                <li>宁德</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>江西</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">南昌</li>
								                            									                                <li>景德镇</li>
								                                								                                <li>萍乡</li>
								                                								                                <li>九江</li>
								                                								                                <li>新余</li>
								                                								                                <li>鹰潭</li>
								                                								                                <li>赣州</li>
								                                								                                <li>吉安</li>
								                                								                                <li>宜春</li>
								                                								                                <li>抚州</li>
								                                								                                <li>上饶</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>山东</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">济南</li>
								                            									                                <li>青岛</li>
								                                								                                <li>淄博</li>
								                                								                                <li>枣庄</li>
								                                								                                <li>东营</li>
								                                								                                <li>烟台</li>
								                                								                                <li>潍坊</li>
								                                								                                <li>济宁</li>
								                                								                                <li>泰安</li>
								                                								                                <li>威海</li>
								                                								                                <li>日照</li>
								                                								                                <li>莱芜</li>
								                                								                                <li>临沂</li>
								                                								                                <li>德州</li>
								                                								                                <li>聊城</li>
								                                								                                <li>滨州</li>
								                                								                                <li>菏泽</li>
								                                								                                <li>章丘</li>
								                                								                                <li>荣成</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>河南</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">郑州</li>
								                            									                                <li>开封</li>
								                                								                                <li>洛阳</li>
								                                								                                <li>平顶山</li>
								                                								                                <li>安阳</li>
								                                								                                <li>鹤壁</li>
								                                								                                <li>新乡</li>
								                                								                                <li>焦作</li>
								                                								                                <li>濮阳</li>
								                                								                                <li>许昌</li>
								                                								                                <li>漯河</li>
								                                								                                <li>三门峡</li>
								                                								                                <li>南阳</li>
								                                								                                <li>商丘</li>
								                                								                                <li>信阳</li>
								                                								                                <li>周口</li>
								                                								                                <li>驻马店</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>湖北</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">武汉</li>
								                            									                                <li>黄石</li>
								                                								                                <li>十堰</li>
								                                								                                <li>宜昌</li>
								                                								                                <li>襄樊</li>
								                                								                                <li>鄂州</li>
								                                								                                <li>荆门</li>
								                                								                                <li>孝感</li>
								                                								                                <li>荆州</li>
								                                								                                <li>黄冈</li>
								                                								                                <li>咸宁</li>
								                                								                                <li>随州</li>
								                                								                                <li>恩施土家族苗族自治州</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>湖南</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">长沙</li>
								                            									                                <li>株洲</li>
								                                								                                <li>湘潭</li>
								                                								                                <li>衡阳</li>
								                                								                                <li>邵阳</li>
								                                								                                <li>岳阳</li>
								                                								                                <li>常德</li>
								                                								                                <li>张家界</li>
								                                								                                <li>益阳</li>
								                                								                                <li>郴州</li>
								                                								                                <li>永州</li>
								                                								                                <li>怀化</li>
								                                								                                <li>娄底</li>
								                                								                                <li>湘西土家族苗族自治州</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>广东</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">广州</li>
								                            									                                <li>深圳</li>
								                                								                                <li>韶关</li>
								                                								                                <li>珠海</li>
								                                								                                <li>汕头</li>
								                                								                                <li>佛山</li>
								                                								                                <li>南海区</li>
								                                								                                <li>江门</li>
								                                								                                <li>湛江</li>
								                                								                                <li>茂名</li>
								                                								                                <li>肇庆</li>
								                                								                                <li>惠州</li>
								                                								                                <li>梅州</li>
								                                								                                <li>汕尾</li>
								                                								                                <li>河源</li>
								                                								                                <li>阳江</li>
								                                								                                <li>清远</li>
								                                								                                <li>东莞</li>
								                                								                                <li>中山</li>
								                                								                                <li>潮州</li>
								                                								                                <li>揭阳</li>
								                                								                                <li>云浮</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>广西</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">南宁</li>
								                            									                                <li>柳州</li>
								                                								                                <li>桂林</li>
								                                								                                <li>梧州</li>
								                                								                                <li>北海</li>
								                                								                                <li>防城港</li>
								                                								                                <li>钦州</li>
								                                								                                <li>贵港</li>
								                                								                                <li>玉林</li>
								                                								                                <li>百色</li>
								                                								                                <li>贺州</li>
								                                								                                <li>河池</li>
								                                								                                <li>来宾</li>
								                                								                                <li>崇左</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>海南</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">海口</li>
								                            									                                <li>三亚</li>
								                                								                                <li>洋浦市</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>四川</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">成都</li>
								                            									                                <li>自贡</li>
								                                								                                <li>攀枝花</li>
								                                								                                <li>泸州</li>
								                                								                                <li>德阳</li>
								                                								                                <li>绵阳</li>
								                                								                                <li>广元</li>
								                                								                                <li>遂宁</li>
								                                								                                <li>内江</li>
								                                								                                <li>乐山</li>
								                                								                                <li>南充</li>
								                                								                                <li>眉山</li>
								                                								                                <li>宜宾</li>
								                                								                                <li>广安</li>
								                                								                                <li>达州</li>
								                                								                                <li>雅安</li>
								                                								                                <li>巴中</li>
								                                								                                <li>资阳</li>
								                                								                                <li>阿坝藏族羌族自治州</li>
								                                								                                <li>甘孜藏族自治州</li>
								                                								                                <li>凉山彝族自治州</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>贵州</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">贵阳</li>
								                            									                                <li>六盘水</li>
								                                								                                <li>遵义</li>
								                                								                                <li>安顺</li>
								                                								                                <li>铜仁地区</li>
								                                								                                <li>黔西南布依族苗族自治州</li>
								                                								                                <li>毕节地区</li>
								                                								                                <li>黔东南苗族侗族自治州</li>
								                                								                                <li>黔南布依族苗族自治州</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>云南</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">昆明</li>
								                            									                                <li>曲靖</li>
								                                								                                <li>玉溪</li>
								                                								                                <li>保山</li>
								                                								                                <li>昭通</li>
								                                								                                <li>楚雄彝族自治州</li>
								                                								                                <li>红河哈尼族彝族自治州</li>
								                                								                                <li>文山壮族苗族自治州</li>
								                                								                                <li>思茅</li>
								                                								                                <li>西双版纳傣族自治州</li>
								                                								                                <li>德宏傣族景颇族自治州</li>
								                                								                                <li>大理白族自治州</li>
								                                								                                <li>丽江</li>
								                                								                                <li>怒江傈僳族自治州</li>
								                                								                                <li>迪庆藏族自治州</li>
								                                								                                <li>临沧</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>陕西</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">西安</li>
								                            									                                <li>铜川</li>
								                                								                                <li>宝鸡</li>
								                                								                                <li>咸阳</li>
								                                								                                <li>渭南</li>
								                                								                                <li>延安</li>
								                                								                                <li>汉中</li>
								                                								                                <li>榆林</li>
								                                								                                <li>安康</li>
								                                								                                <li>商洛</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>西藏</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">拉萨</li>
								                            									                                <li>昌都</li>
								                                								                                <li>山南</li>
								                                								                                <li>日喀则</li>
								                                								                                <li>那曲</li>
								                                								                                <li>阿里</li>
								                                								                                <li>林芝</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>甘肃</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">兰州</li>
								                            									                                <li>嘉峪关</li>
								                                								                                <li>金昌</li>
								                                								                                <li>白银</li>
								                                								                                <li>天水</li>
								                                								                                <li>武威</li>
								                                								                                <li>张掖</li>
								                                								                                <li>平凉</li>
								                                								                                <li>酒泉</li>
								                                								                                <li>庆阳</li>
								                                								                                <li>定西</li>
								                                								                                <li>陇南</li>
								                                								                                <li>临夏回族自治州</li>
								                                								                                <li>甘南藏族自治州</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>青海</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">西宁</li>
								                            									                                <li>海晏</li>
								                                								                                <li>海东</li>
								                                								                                <li>海北</li>
								                                								                                <li>黄南</li>
								                                								                                <li>海南</li>
								                                								                                <li>果洛</li>
								                                								                                <li>玉树</li>
								                                								                                <li>海西</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>宁夏</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">银川</li>
								                            									                                <li>石嘴山</li>
								                                								                                <li>吴忠</li>
								                                								                                <li>固原</li>
								                                								                                <li>中卫</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>新疆</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">乌鲁木齐</li>
								                            									                                <li>石河子</li>
								                                								                                <li>克拉玛依</li>
								                                								                                <li>吐鲁番</li>
								                                								                                <li>哈密</li>
								                                								                                <li>昌吉</li>
								                                								                                <li>博乐</li>
								                                								                                <li>和田</li>
								                                								                                <li>阿克苏</li>
								                                								                                <li>阿勒</li>
								                                								                                <li>喀什</li>
								                                								                                <li>塔城</li>
								                                								                                <li>库尔勒</li>
								                                								                                <li>伊犁</li>
								                                								                                <li>克州</li>
								                                								                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>香港</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">香港</li>
								                            									                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>澳门</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">澳门</li>
								                            									                            </ul>
								                        </li>
								                         								                        <li>
								                        	<span>台湾</span>
								                            <ul class="reset dn">
								                            	<li class="mr_on">台湾</li>
								                            									                            </ul>
								                        </li>
								                         								                        								                     </ul>
								                 </div>
						   	 				</div>																								
										</div>									
										<div class="mr_pay_div normal_s fl">
											<i class="mr_sj"></i>
											<input name="monthpay" class="mr_btn" type="button">
											<div class="xl_list dn">
												<ul class="ul_pay">
													<li>2k以下</li>
													<li>2k-5k</li>
													<li>5k-10k</li>
													<li>10k-15k</li>
													<li>15k-25k</li>
													<li>25k-50k</li>
													<li>50k以上</li>
												</ul>
											</div>											
										</div>																	
									</div>
									<label>补充说明（若有）</label>
									<div id="mr_job_mce" class="mr_click_flag mr_time_area wrap_editor">
										<textarea aria-hidden="true" class="tinymce" style="width: 520px; height: 148px;" id="expJobDes" name="expJobDes"></textarea><span id="expJobDes_voice" style="display:none;" class="mceVoiceLabel">富文本域</span><tr class="mceFirst" role="presentation"><td role="toolbar" class="mceToolbar mceLeft mceFirst mceLast"><div tabindex="-1" id="expJobDes_toolbargroup" role="group" aria-labelledby="expJobDes_toolbargroup_voice"><span role="application"><span id="expJobDes_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">工具栏</span><table aria-pressed="false" aria-disabled="false" id="expJobDes_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" role="presentation" tabindex="-1" align="" cellpadding="0" cellspacing="0"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="expJobDes_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="expJobDes_bullist_voice" title="项目列表"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="expJobDes_bullist_voice">项目列表</span></a></td><td style="position: relative"><a aria-pressed="false" tabindex="-1" role="button" id="expJobDes_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="expJobDes_numlist_voice" title="编号列表"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="expJobDes_numlist_voice">编号列表</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="转到工具按钮 - Alt-Q，转到编辑器 - Alt-Z，转到元素路径 - Alt-X。" onfocus="tinyMCE.getInstanceById('expJobDes').focus();"><!-- IE --></a></td></tr><tr class="mceLast"><td class="mceIframeContainer mceFirst mceLast"><iframe style="width: 100%; height: 125px; display: none;" title="富文本域按 ALT-F10 定位到工具栏.按 ALT-0 获取帮助。" allowtransparency="true" src='javascript:""' id="expJobDes_ifr" frameborder="0"></iframe></td></tr></tbody></table></span>
									</div>
									<div class="mr_ope clearfixs">
										<input class="mr_save" value="保存" type="submit">
										<a href="javascript:;" class="mr_cancel">取消</a>	
						  	 		</div>								
								</div>	
							</form>
							<div class="mr_empty_add dn">
								<i></i><span>更新期望工作</span>
							</div>
							<div class="expectjob_list">
								<input id="expHideId" value="2000263" type="hidden">
									
								<div class="mr_job_info" data-id="2000263">
									<ul class="clearfixs">
										<li class="mr_name_li"><i></i><span class="mr_job_name" title="<?php echo ($data["hope_job"]); ?>"><?php echo ($data["hope_job"]); ?></span></li>
										<li class="mr_jobtype_li"><i></i><span class="mr_job_type" title="<?php echo ($data["hope_nature"]); ?>"><?php echo ($data["hope_nature"]); ?></span></li>
										<li class="mr_city_li"><i></i><span class="mr_job_adr" title="<?php echo ($data["hope_city"]); ?>"><?php echo ($data["hope_city"]); ?></span></li>
										<li class="mr_jobrange_li"><i></i><span class="mr_job_range" title="<?php echo ($data["hope_salary"]); ?>"><?php echo ($data["hope_salary"]); ?></span></li>
									</ul>
								</div>	
								<div class="mr_job_des dn">
									<i class="mr_job_t"></i>
									<i class="mr_job_b"></i>
									<div class="mr_expjob_content">
										
									</div>	
								</div>
							</div>										
						</div>						
					</div>
				</div>

				<div id="skillsAssess" class="dn item_container_target">
						<div>
							<div class="mr_moudle_head clearfixs mr_w604">
								<div class="mr_head_l">
									<div class="mr_title">
										<span class="mr_title_l"></span><span class="mr_title_c">技能评价</span><span class="mr_title_r"></span>
									</div>
								</div>
								<div class="mr_head_r">
									<i></i><em>编辑</em>
								</div>
							</div>
							<div class="mr_moudle_content mr_w604">

								<div class="mr_empty_add">
									<i></i><span>展示我的技能</span>
								</div>

								<div class="me_skill_list">
																	</div>

								<div class="mr_skill_add mr_skill_add_button"><span>添加一行</span></div>	

								<div class="mr_skill_add mr_skill_opera">
									<div class="mr_ope clearfixs">
										<span class="error" style="display:none;">error</span>
										<input class="mr_save" value="保存" type="submit">
										<a href="javascript:;" class="mr_cancel">取消</a> 
										
									</div>	
								</div>																								
							</div>						
						</div>
					</div>					
				
				<div class="mr_self_state">
					<div class="form_wrap mr_self_s active">
						<input id="self_state" name="self_state" class="mr_button" value="<?php echo ($data["now_state"]); ?>" type="button">
	   	 				<i class="mr_sj"></i>
						<div class="xl_list dn">
		   	 				<ul class="ul_self_state">
		   	 					<li>我目前已离职，可快速到岗</li>
		   	 					<li>我目前正在职，正考虑换个新环境</li>
		   	 					<li>我暂时不想找工作</li>
		   	 					<li>我是应届毕业生</li>
		   	 				</ul>
	   	 				</div>						   	 				
	   	 			</div>					
				</div>
			</div>	
			
			<div class="mr_bottom clearfixs">
				<div class="mr_bottom_l">
					<div class="mr_down_tip dn">
						<i></i>
						<em></em>
						<ul>
							<li class="active"><a href="http://www.lagou.com/resume/downloadResume?key=2a5f39e2b6500aa5e39e74cf3a1c3bac&amp;type=1" target="_blank">HTML</a></li>
							<li><a href="http://www.lagou.com/resume/downloadResume?key=2a5f39e2b6500aa5e39e74cf3a1c3bac&amp;type=2" target="_blank">DOC</a></li>
							<li><a href="http://www.lagou.com/resume/downloadResume?key=2a5f39e2b6500aa5e39e74cf3a1c3bac&amp;type=3" target="_blank">PDF</a></li>
						</ul>
					</div>
					<div class="mr_down">
						<span><i></i><em>把这份简历保存到本地</em></span>
					</div>
				</div>
				<div class="mr_bottom_r">
					<span>简历更新于</span><span class="upResumeTime"><?php echo ($data["modifty_time"]); ?></span>
				</div>
			</div>
		</div>
		<div class="mr_myresume_r">
			<div class="mr_r_nav">
	<ul class="clearfixs">
		<li>
           <a href="http://www.lagou.com/mycenter/delivery.html" target="_blank" data-lg-tj-id="7e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="resume,投递箱,button">
           	投递箱<i class="td"></i>
                      	           </a>
      		<!-- <a  href="http://www.lagou.com/mycenter/delivery.html" target="_blank">我的投递<i class="td"></i><em class="count2">99</em></a> -->
 		</li>
		<li>
			<a href="http://www.lagou.com/mycenter/invitation.html" target="_blank" data-lg-tj-id="7f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="resume,邀请函,button">邀请函<i class="yq"></i>
			           				</a>
		</li>
		<li>
			<a href="http://www.lagou.com/mycenter/collections.html" target="_blank" data-lg-tj-id="7g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="resume,收藏夹,button">收藏夹<i class="sc"></i></a>
		</li>
		<li class="mr_none">
			<a href="http://www.lagou.com/s/subscribe.html" target="_blank" data-lg-tj-id="7h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="resume,订阅栏,button">订阅栏<i class="dy"></i></a>
		</li>
	</ul>
</div>
<div class="mr_upload dn">
	<i></i><a class="inline cboxElement" href="#uploadFile" title="上传附件简历">我要上传附件简历</a>
</div>

<div class="mr_uploaded clearfixs">
	<a href="javascript:;" class="mr_del"></a>
	<div class="mr_up_main">
		<a href="http://www.lagou.com/nearBy/downloadResume" title="">李梦东(求职简历).docx</a>
		<p></p>
	</div>
	<div class="mr_set_default">
		<div class="set_default_wrap">
  			<input id="default_resume" class="mr_button" value="默认投递：附件简历" type="button">
  			<span><i class="mr_sj"></i></span>
			<div class="xl_list dn">
	 			<ul class="ul_resume_type">
	 				<li data-type="1">默认投递：在线简历</li>
	 				<li data-type="0">默认投递：附件简历</li>
	 			</ul>
 			</div>	
 		</div>					   	 				
	</div>
</div>
			<div class="scroll_fix">
				<div class="mr_integrity">
					<div class="mr_top clearfixs">
						<span class="mr_tip_l"><em class="mr_tip">简历完整度：</em><em class="mr_bfb">77%</em></span>
						<a class="mr_tip_r" target="_blank" href="http://www.lagou.com/resume/preview.html">预览简历</a>
					</div>
					<div class="mr_integrity_m">
						<div style="width: 192.5px;" class="mr_solid"></div>
						<div style="width: 192.5px;" class="mr_dashed"></div>
					</div>
				</div>
				<div class="mr_module">
					<ul>
						<li class="active md_flag" data-md="baseinfo">
							<a class="clearfixs">
								<i class="mr_base_i"></i>
								<span class="mr_m_name">基本信息</span>
							</a>
						</li>
						<li data-md="workExperience" class="md_flag">
							<a class="clearfixs">
								<span class="mr_require flag_work dn">必填</span>
								<i class="mr_works_i"></i>
								<span class="mr_m_name"> 工作经历  </span>
							</a>
						</li>
						<li data-md="educationalBackground" class="md_flag">
							<a class="clearfixs">
								
								<span class="mr_require flag_edu dn">必填</span>
								
								<i class="mr_edu_i"></i>
								<span class="mr_m_name">教育经历</span>
							</a>
						</li>
						<li data-md="projectExperience" class="m_hide md_flag">
							<a class="clearfixs">
								<span class="mr_hide_del"></span>
								<i class="mr_project_i"></i>
								<span class="mr_m_name">项目经验</span>
							</a>
						</li>
						<li data-md="worksShow" class="dn m_hide">
							<a class="clearfixs">
								<span class="mr_hide_del"></span>
								<i class="mr_production_i"></i>
								<span class="mr_m_name">作品展示</span>
							</a>
						</li>
						<li data-md="selfDescription" class="m_hide md_flag">
							<a class="clearfixs">
								<span class="mr_hide_del"></span>						
								<i class="mr_self_i"></i>
								<span class="mr_m_name">自我描述</span>
							</a>
						</li>
						<li data-md="expectJob" class="m_hide md_flag">
							<a class="clearfixs">
								<span class="mr_hide_del"></span>						
								<i class="mr_hopework_i"></i>
								<span class="mr_m_name">期望工作</span>
							</a>
						</li>
						<li data-md="skillsAssess" class="dn m_hide">
							<a class="clearfixs">
								<span class="mr_hide_del"></span>						
								<i class="mr_skill_i"></i>
								<span class="mr_m_name">技能评价</span>
							</a>
						</li>	
						<li data-md="customBlock" class="m_hide md_flag">
							<a class="clearfixs">
								<span class="mr_hide_del"></span>						
								<i class="mr_moudle_i"></i>
								<span class="mr_m_name">自定义板块</span>
							</a>
						</li>					
						<li class="mr_module_add">
							<a>
								<span class="mr_hide_addic"></span>
								<i class="mr_addmd_i"></i>
								<span class="mr_m_name">添加板块</span>
							</a>
						</li>
						<li data-md="projectExperience" class="hide_md mr_hide dn">
							<a class="clearfixs">
								<span class="mr_hide_addic"></span>
								<i class="mr_project_i"></i>
								<span class="mr_m_name">项目经验</span>
							</a>
						</li>
						<li data-md="worksShow" class="hide_md dn">
							<a class="clearfixs">
								<span class="mr_hide_addic"></span>
								<i class="mr_production_i"></i>
								<span class="mr_m_name">作品展示</span>
							</a>
						</li>
						<li data-md="selfDescription" class="hide_md mr_hide dn">
							<a class="clearfixs">
								<span class="mr_hide_addic"></span>						
								<i class="mr_self_i"></i>
								<span class="mr_m_name">自我描述</span>
							</a>
						</li>
						<li data-md="expectJob" class="hide_md mr_hide dn">
							<a class="clearfixs">
								<span class="mr_hide_addic"></span>						
								<i class="mr_hopework_i"></i>
								<span class="mr_m_name">期望工作</span>
							</a>
						</li>
						<li data-md="skillsAssess" class="hide_md dn">
							<a class="clearfixs">
								<span class="mr_hide_addic"></span>						
								<i class="mr_skill_i"></i>
								<span class="mr_m_name">技能评价</span>
							</a>
						</li>	
						<li data-md="customBlock" class="hide_md mr_hide dn">
							<a class="clearfixs">
								<span class="mr_hide_addic"></span>						
								<i class="mr_moudle_i"></i>
								<span class="mr_m_name">自定义板块</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		<!--通过button 设置disable的思路控制按钮是否控制事件解绑与恢复
			<input type="button" style="width:100px;height:20px;background-color: #000;" id="a"/>
			<input type="button" style="width:100px;height:20px;background-color: #999;" onclick="alert(2);" disabled="disabled" />-->
		</div>
	</div> 
<div id="sns_hide" style="display:none;">
	<div class="form_wrap mr_sns_m">
		<i class="sns8"></i>
		<em class="mr_no"></em>
		<a href="javascript:;" class="sns_del"></a>
		<input id="sns8" name="sns8" class="mr_button" type="text">
	</div>
</div>

<div id="job_update_hide" class="dn">
	<form class="jobExpForm" id="">
		<input id="mr_expid" value="" type="hidden">
		<div class="mr_add_work">
<!-- 			<div class="mr_upload_logo">
				<div>
					<i></i>
					<span>上传公司LOGO</span>
				</div>			
				<input id="upcompanyLogo" name="companyLogo" onchange="uploadFile(this);" title="目前仅支持10MB以内的PNG/JPG/JPEG/GIF图片" type="file">
				<img src="/Public/Home/resume/myresume_007.htm" name="mr_company_logo" class="logo_u" alt="">
				<input name="companyLogoHide" value="" type="hidden">
			</div> -->
			<label>公司</label>
			<div class="mr_input_div mr_click_flag">
				<input class="mr_btn companyName" name="companyName">
			</div>
			<label>职位</label>
			<div class="mr_input_div mr_click_flag">
				<input class="mr_btn autoPosition" name="positionName">
			</div>
			<label>在职时间</label>
			<div class="clearfixs mr_time_area">
				<div class="mr_timed_div mr_sta_time fl">
					<i class="mr_sj"></i>
					<input class="mr_btn" type="button">
					<input name="startTime" type="hidden">
					<div class="mr_calendar_ym clearfixs dn">
						<ul class="mr_year">
														<li>2015</li>
														<li>2014</li>
														<li>2013</li>
														<li>2012</li>
														<li>2011</li>
														<li>2010</li>
														<li>2009</li>
														<li>2008</li>
														<li>2007</li>
														<li>2006</li>
														<li>2005</li>
														<li>2004</li>
														<li>2003</li>
														<li>2002</li>
														<li>2001</li>
														<li>2000</li>
														<li>1999</li>
														<li>1998</li>
														<li>1997</li>
														<li>1996</li>
														<li>1995</li>
														<li>1994</li>
														<li>1993</li>
														<li>1992</li>
														<li>1991</li>
														<li>1990</li>
														<li>1989</li>
													</ul>
						<ul class="mr_month clearfixs">
							<li><span>1月</span></li>
							<li><span>2月</span></li>
							<li class="mr0"><span>3月</span></li>
							<li><span>4月</span></li>
							<li><span>5月</span></li>
							<li class="mr0"><span>6月</span></li>
							<li><span>7月</span></li>
							<li><span>8月</span></li>
							<li class="mr0"><span>9月</span></li>
							<li class="mb0"><span>10月</span></li>
							<li class="mb0"><span>11月</span></li>
							<li class="mr0 mb0"><span>12月</span></li>
						</ul>
					</div>													
				</div>									
				<div class="mr_timed_div mr_end_time fl">
					<i class="mr_sj"></i>
					<input class="mr_btn" type="button">
					<input name="endTime" type="hidden">
					<div class="mr_calendar_ym clearfixs dn">
						<ul class="mr_year">
														<li>2015</li>
														<li>2014</li>
														<li>2013</li>
														<li>2012</li>
														<li>2011</li>
														<li>2010</li>
														<li>2009</li>
														<li>2008</li>
														<li>2007</li>
														<li>2006</li>
														<li>2005</li>
														<li>2004</li>
														<li>2003</li>
														<li>2002</li>
														<li>2001</li>
														<li>2000</li>
														<li>1999</li>
														<li>1998</li>
														<li>1997</li>
														<li>1996</li>
														<li>1995</li>
														<li>1994</li>
														<li>1993</li>
														<li>1992</li>
														<li>1991</li>
														<li>1990</li>
														<li>1989</li>
													</ul>
						<ul class="mr_month clearfixs">
							<li><span>1月</span></li>
							<li><span>2月</span></li>
							<li class="mr0"><span>3月</span></li>
							<li><span>4月</span></li>
							<li><span>5月</span></li>
							<li class="mr0"><span>6月</span></li>
							<li><span>7月</span></li>
							<li><span>8月</span></li>
							<li class="mr0"><span>9月</span></li>
							<li class="mb0"><span>10月</span></li>
							<li class="mb0"><span>11月</span></li>
							<li class="mr0 mb0"><span>12月</span></li>
						</ul>
					</div>											
				</div>									
			</div>
			<label>工作内容</label>
			<div id="mr_job_mce" class="mr_click_flag wrap_editor">
				<textarea class="tinymce_replace" style="width:520px;height:148px;" id="mce_jason" name="jobContent"></textarea>
			</div>
			<div class="mr_ope clearfixs">
				<div class="mr_delete">
					<div class="mr_delete_pop dn">
						<p>确定删除本条信息？</p>
						<div>
							<span data-id="" class="mr_del_ok">删除</span>
							<span class="mr_del_cancel">取消</span>													
						</div>
					</div>
					<span>删除本条</span>
				</div>		
				<input class="mr_save" value="保存" type="submit">
				<a href="javascript:;" class="mr_cancel">取消</a>	
  	 		</div>								
		</div>	
	</form>	
</div>
<!--教育经历修改框  -->
<div id="edu_update_hide" class="dn">
	<form class="eduExpForm" id="">
		<input id="eduId" name="eduId" value="" type="hidden">
		<div class="mr_add_work">
			<label>学校名称</label>
			<div class="mr_input_div mr_click_flag">
				<input class="mr_btn" name="schoolName" type="text">
			</div>
			<label>所学专业</label>
			<div class="mr_input_div mr_click_flag">
				<input class="mr_btn" name="positionName" type="text">
			</div>
			<label><span>学历</span><span class="label_by_y">毕业年份</span></label>
			<div class="clearfixs mr_time_area">
				<div class="mr_timed_div normal_s mr_sta_time fl">
					<i class="mr_sj"></i>
					<input name="degree_text" type="hidden">
					<input class="mr_btn" name="degree_val" type="button">
					<div class="xl_list dn">
						<ul class="ul_edubg">
														<li>大专</li>
														<li>本科</li>
														<li>硕士</li>
														<li>博士</li>
														<li>其他</li>
													</ul>
					</div>													
				</div>									
				<div class="mr_timed_div normal_s fl">
					<i class="mr_sj"></i>
					<input name="graduate_text" type="hidden">
					<input class="mr_btn" onchange="validateChange(this);" name="graduate" type="button">
					<div class="xl_list dn">
						<ul class="ul_eduy">
														<li>2017</li>
														<li>2016</li>
														<li>2015</li>
														<li>2014</li>
														<li>2013</li>
														<li>2012</li>
														<li>2011</li>
														<li>2010</li>
														<li>2009</li>
														<li>2008</li>
														<li>2007</li>
														<li>2006</li>
														<li>2005</li>
														<li>2004</li>
														<li>2003</li>
														<li>2002</li>
														<li>2001</li>
														<li>2000</li>
														<li>1999</li>
														<li>1998</li>
														<li>1997</li>
														<li>1996</li>
														<li>1995</li>
														<li>1994</li>
														<li>1993</li>
														<li>1992</li>
														<li>1991</li>
														<li>1990</li>
														<li>1989</li>
													</ul>
					</div>											
				</div>									
			</div>
			<div class="mr_ope clearfixs">
				<div class="mr_delete">
					<div class="mr_delete_pop dn">
						<p>确定删除本条信息？</p>
						<div>
							<span data-id="" class="mr_del_ok">删除</span>
							<span class="mr_del_cancel">取消</span>													
						</div>
					</div>
					<span>删除本条</span>
				</div>		
				<input class="mr_save" value="保存" type="submit">
				<a href="javascript:;" class="mr_cancel">取消</a>	
  	 		</div>								
		</div>	
	</form>	

</div>
<!-- 项目经验 -->
<div id="pro_update_hide" class="dn">
	<form class="proExpForm" id=""><!--upProForm js赋值  -->
		<div class="mr_add_work">
			<label>项目名称</label>
			<div class="mr_input_div mr_click_flag">
				<input class="mr_btn" id="projectName" name="projectName">
			</div>
			<label>你的职责</label>
			<div class="mr_input_div mr_click_flag">
				<input class="mr_btn" id="thePost" name="thePost">
			</div>
			<label>项目起止时间</label>
			<div class="clearfixs mr_time_area">
				<div class="mr_timed_div mr_sta_time fl">
					<i class="mr_sj"></i>
					<input class="mr_btn" type="button">
					<input name="startTime" type="hidden">
					<div class="mr_calendar_ym clearfixs dn">
						<ul class="mr_year">
															<li>2015</li>
															<li>2014</li>
															<li>2013</li>
															<li>2012</li>
															<li>2011</li>
															<li>2010</li>
															<li>2009</li>
															<li>2008</li>
															<li>2007</li>
															<li>2006</li>
															<li>2005</li>
															<li>2004</li>
															<li>2003</li>
															<li>2002</li>
															<li>2001</li>
															<li>2000</li>
															<li>1999</li>
															<li>1998</li>
															<li>1997</li>
															<li>1996</li>
															<li>1995</li>
															<li>1994</li>
															<li>1993</li>
															<li>1992</li>
															<li>1991</li>
															<li>1990</li>
															<li>1989</li>
													</ul>
						<ul class="mr_month clearfixs">
							<li><span>1月</span></li>
							<li><span>2月</span></li>
							<li class="mr0"><span>3月</span></li>
							<li><span>4月</span></li>
							<li><span>5月</span></li>
							<li class="mr0"><span>6月</span></li>
							<li><span>7月</span></li>
							<li><span>8月</span></li>
							<li class="mr0"><span>9月</span></li>
							<li class="mb0"><span>10月</span></li>
							<li class="mb0"><span>11月</span></li>
							<li class="mr0 mb0"><span>12月</span></li>
						</ul>
					</div>													
				</div>									
				<div class="mr_timed_div fl">
					<i class="mr_sj"></i>
					<input class="mr_btn" type="button">
					<input name="endTime" type="hidden">
					<div class="mr_calendar_ym clearfixs dn">
						<ul class="mr_year">
															<li>2015</li>
															<li>2014</li>
															<li>2013</li>
															<li>2012</li>
															<li>2011</li>
															<li>2010</li>
															<li>2009</li>
															<li>2008</li>
															<li>2007</li>
															<li>2006</li>
															<li>2005</li>
															<li>2004</li>
															<li>2003</li>
															<li>2002</li>
															<li>2001</li>
															<li>2000</li>
															<li>1999</li>
															<li>1998</li>
															<li>1997</li>
															<li>1996</li>
															<li>1995</li>
															<li>1994</li>
															<li>1993</li>
															<li>1992</li>
															<li>1991</li>
															<li>1990</li>
															<li>1989</li>
													</ul>
						<ul class="mr_month clearfixs">
							<li><span>1月</span></li>
							<li><span>2月</span></li>
							<li class="mr0"><span>3月</span></li>
							<li><span>4月</span></li>
							<li><span>5月</span></li>
							<li class="mr0"><span>6月</span></li>
							<li><span>7月</span></li>
							<li><span>8月</span></li>
							<li class="mr0"><span>9月</span></li>
							<li class="mb0"><span>10月</span></li>
							<li class="mb0"><span>11月</span></li>
							<li class="mr0 mb0"><span>12月</span></li>
						</ul>
					</div>											
				</div>																	
			</div>
			<label>项目描述</label>
			<div id="mr_job_mce" class="mr_click_flag mr_time_area wrap_editor">
				<textarea class="tinymce_replace" style="width:520px;height:148px;" id="mce_jason" name="mce_jason"></textarea>
			</div>
			<label>项目链接（若有）</label>
			<div class="mr_input_div mr_click_flag mr_prolink">
				<input class="mr_btn" id="yourDuty" name="pro_link">
			</div>									
			<div class="mr_ope clearfixs">
				<div class="mr_delete">
					<div class="mr_delete_pop dn">
						<p>确定删除本条信息？</p>
						<div>
							<span class="mr_del_ok">删除</span>
							<span class="mr_del_cancel">取消</span>													
						</div>
					</div>
					<span>删除本条</span>
				</div>		
				<input class="mr_save" value="保存" type="submit">
				<a href="javascript:;" class="mr_cancel">取消</a>	
  	 		</div>								
		</div>	
	</form>	
</div>
<div id="del_hide_tip" class="dn">
	<div class="mr_md_del">
		<div class="mr_tip_div">
			<span class="mr_ic">?</span><span class="mr_del_tip">确定删除本条信息？</span>
		</div>
		<p>
			删除后，该模块将不在简历中出现；<br>
			同时，该模块内已经填写的信息将被删除
		</p>
		<div class="mr_btn_area">
			<span class="mr_del_btn">删除</span><span class="mr_del_cel">取消</span>
		</div>
	</div>
</div>
<!-- 作品展示 -->
<!-- 上传图片的form -->
<form class="add_worksshow_form dn" id="addWorksShowUploadFormUpdate">
	<div class="mr_add_work mr_addwork_online">
		<div class="mr_worksshow_tab">
			<span class="mr_wst_upimage selected">上传图片</span>
			<span class="mr_wst_uponline disabled">在线作品</span>
		</div>
		<!-- 图片上传区域 -->
		<div class="mr_worksshow_upimage">
			<div>
				<i></i>
				<span>上传作品图片</span>
			</div>
			<!--
			<input type="hidden" name="workPicHidden" class="work-pic-hidden" />
			-->
			<input class="worksshow_up" id="worksshowUpUpdate" name="workPic" title="目前仅支持10MB以内的PNG/JPG/JPEG/GIF图片" onchange="myresumeCommon.utils.imageUpload( this, myresumeCommon.requestTargets.workUpload, worksShowOperator.addUploadSucc, worksShowOperator.addUploadFail );" type="file">
			<img id="worksshowUpUpdateShow" src="/Public/Home/resume/myresume_007.htm" alt="" class="worksshow_img">
		</div>
		<label>作品标题</label>
		<div class="mr_input_div mr_click_flag">
			<input class="mr_btn" id="workUploadTitleUpdate" name="workTitle">
		</div>
		<label>作品描述</label>
		<div id="workImagesDescUpdate" class="mr_click_flag wrap_editor">
			<textarea class="tinymce-update" id="workImagesDescContentUpdate" name="workDescribe" style="width:520px;height:148px;"></textarea>
		</div>
		<div class="mr_ope clearfixs">
			<div class="mr_delete">
				<div class="mr_delete_pop dn">
					<p>确定删除本条信息？</p>
					<div>
						<span class="mr_del_ok">删除</span>
						<span class="mr_del_cancel">取消</span>													
					</div>
				</div>
				<span>删除本条</span>
			</div>	
			<input class="mr_save" value="保存" type="submit">
			<a href="javascript:;" class="mr_cancel">取消</a>	
 			</div>								
	</div>
</form>
<!-- 新增在线作品的foram -->
<form class="add_worksshow_form dn" id="addWorksShowOnlineFormUpdate">
	<div class="mr_add_work mr_addwork_image">
		<div class="mr_worksshow_tab">
			<span class="mr_wst_upimage disabled">上传图片</span>
			<span class="mr_wst_uponline selected">在线作品</span>
		</div>
		<div class="mr_wo_show">
		    <div class="mr_self_site">
				<div class="mr_self_sitelink">
				</div>
		    </div>
		    <div class="mr_wo_preview">
		    </div>
		</div>
		<label>作品地址</label>
		<div class="mr_input_div mr_click_flag">
			<input class="mr_btn" id="workOnlineUrlUpdate" name="url">
		</div>
		<label>作品描述</label>
		<div id="workOnlineDescUpdate" class="mr_click_flag wrap_editor">
			<textarea class="tinymce-update" id="workOnlineDescContentUpdate" name="workDescribeOnline" style="width:520px;height:148px;"></textarea>
		</div>
		<div class="mr_ope clearfixs">
			<div class="mr_delete">
				<div class="mr_delete_pop dn">
					<p>确定删除本条信息？</p>
					<div>
						<span class="mr_del_ok">删除</span>
						<span class="mr_del_cancel">取消</span>													
					</div>
				</div>
				<span>删除本条</span>
			</div>	
			<input class="mr_save" value="保存" type="submit">
			<a href="javascript:;" class="mr_cancel">取消</a>	
 			</div>								
	</div>
</form>	
<div id="del_hide_tip" class="dn">
	<div class="mr_md_del">
		<div class="mr_tip_div">
			<span class="mr_ic">?</span><span class="mr_del_tip">确定删除本条信息？</span>
		</div>
		<p>
			删除后，该模块将不在简历中出现；<br>
			同时，该模块内已经填写的信息将被删除
		</p>
		<div class="mr_btn_area">
			<span class="mr_del_btn">删除</span><span class="mr_del_cel">取消</span>
		</div>
	</div>
</div>

<div style="display:none">
	 <div class="popup" id="cropimageContainer" style="overflow:hidden;width:360px;height:470px;">
		<div id="">
			<div class="crop">
			   <div id="cropzoom_container" style="overflow:hidden;"></div>
			   <div class="page_btn">
			      <input class="btn" id="cropimageEnsure" value="确定" type="button">
			      <input class="cancel" id="cropimageRestore" value="取消" type="button">
			   </div>
			   <div class="clear"></div>
			</div>
		</div>
	</div> 
</div>
<div style="display:none">
	 <div class="popup" id="uploadImages" style="overflow:hidden;width:360px;height:470px;">
		<div class="crop">
		   <div id="cropzoom_container" style="overflow:hidden;"></div>
		   <div class="page_btn">
		      <input class="btn" id="crop" value="确定" type="button">
		      <input class="cancel" id="restore" value="取消" type="button">
		   </div>
		   <div class="clear"></div>
		</div>
	</div> 
</div>	
<div style="display:none">
	 <div class="popup" id="uploadLogos" style="overflow:hidden;width:360px;height:470px;">
		<div class="crop">
		   <div id="cropzoom_container" style="overflow:hidden;"></div>
		   <div class="page_btn">
		      <input class="btn" id="crop" value="确定" type="button">
		      <input class="cancel" id="restore" value="取消" type="button">
		   </div>
		   <div class="clear"></div>
		</div>
	</div> 
</div>
<!-- 确定关闭plus弹窗 by honge -->
<div style="display:none;">
     <div id="closeplus" class="popup" style="overflow:hidden">
          <h3>关闭后将错失许多职业机会</h3>
          <a href="javascript:;" class="btn" data-lg-tj-id="7500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-method="send" data-lg-gatj-msgtype="event" data-lg-gatj-msg="plus,关闭,button">关 闭</a>
     </div>
</div>
<!-------------------------------------弹窗lightbox ----------------------------------------->
<div style="display:none;">
	<!-- 上传简历 -->
	<div id="uploadFile" class="popup">
	    <table width="100%">
	    	<tbody><tr>
	        	<td align="center">
	                <form>
	                    <a href="javascript:void(0);" class="btn_addPic">
	                    	<span>选择上传文件</span>
	                        <input tabindex="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume" id="resumeUpload" class="filePrew" onchange="file_check(this,'http://www.lagou.com/nearBy/updateMyResume.json','resumeUpload')" type="file">
	                    </a>
	                </form>
	            </td>
	        </tr>
	    	<tr>
	        	<td align="left">支持word、pdf、ppt、txt、wps格式文件<br>文件大小需小于10M</td>
	        </tr>
	        <tr>
	        	<td style="color:#dd4a38; padding-top:10px;" align="left">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>
	        </tr>
	    	<tr>
	        	<td align="center"><img src="/Public/Home/resume/loading.gif" id="loadingImg" style="visibility: hidden;" alt="loading" height="16" width="55"></td>
	        </tr>
	    </tbody></table>
	</div><!--/#uploadFile-->
	
	<!-- 简历上传成功 -->
	<div id="uploadFileSuccess" class="popup">
     	<h4>简历上传成功！</h4>
         <table width="100%">
             <tbody><tr>
                 <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
             </tr>
         	<tr>
             	<td align="center"><a href="javascript:;" class="btn_s">确&nbsp;定</a></td>
             </tr>
         </tbody></table>
     </div><!--/#uploadFileSuccess-->
     
	<!-- 没有简历请上传 -->
    <div id="deliverResumesNo" class="popup">
        <table width="100%">
            <tbody><tr>
                <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
            </tr>
        	<tr>
            	<td align="center">
                    <form>
                        <a href="javascript:void(0);" class="btn_addPic">
                        	<span>选择上传文件</span>
                        	<input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume" id="resumeUpload1" class="filePrew" onchange="file_check(this,'http://www.lagou.com/nearBy/updateMyResume.json','resumeUpload1')" type="file">
                        </a>
                    </form>
                </td>
            </tr>
        	<tr>
            	<td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumesNo-->
    
    <!-- 上传附件简历操作说明-重新上传 -->
    <div id="fileResumeUpload" class="popup">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">请上传标准格式的word简历</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		操作说明：<br>
                		打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a class="inline btn cboxElement" href="#uploadFile" title="上传附件简历">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#fileResumeUpload-->
    
    <!-- 上传附件简历操作说明-重新上传 -->
    <div id="fileResumeUploadSize" class="popup">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">上传文件大小超出限制</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		提示：<br>
                		单个附件不能超过10M，请重新选择附件简历！
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a class="inline btn cboxElement" href="#uploadFile" title="上传附件简历">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumeConfirm-->
    
</div>
<!------------------------------------- end -----------------------------------------><script type="text/javascript" src="/Public/Home/resume/jquery.js"></script>
<script>
// 设置全局变量
window.globals =  {
	resumeId: '2167846',
	initRatio: '77',
	token: 'ff14bcfc6ec54d6da96cd332d5594bc2',
	refreshTime: '2015-11-01 12:46',
	skillScore: '18',
	projectExperienceScore: '18',
	workShowScore: '14',
	expectJobsScore: '10',
	myRemarkScore: '9',
	hasProjectExperiences: "true",
	hasWorkShows: "false",
	hasSelf: "true",
	hasExpectJobs: "true",
	hasSkillEvaluates: "false",
	hasUserDefines: "true",
	personIdFlag:'',
	qrImgSrc:'http://www.lagou.com/qr/qrcode.jpg?qrSource=myResume',
	isOpenResume:'1',
	isFirstOpen:"false"
};
</script>
<script type="text/javascript" src="/Public/Home/resume/common.js"></script>
<script type="text/javascript" src="/Public/Home/resume/json.js"></script>
<script type="text/javascript" src="/Public/Home/resume/jquery-migrate-1.js"></script>
<script type="text/javascript" src="/Public/Home/resume/jquery-ui-1.js"></script>
<script type="text/javascript" src="/Public/Home/resume/jquery_002.js"></script>
<script type="text/javascript" src="/Public/Home/resume/components.js"></script>
<script type="text/javascript" src="/Public/Home/resume/new_myresume.js"></script> 
<!-- end -->  
<!-- footer样式 -->
<link href="/Public/css3/style.css" type="text/css" rel="stylesheet">

			<div class="clear"></div>
	    	<div class="main_con_backup">
				<input id="resubmitToken" value="ff14bcfc6ec54d6da96cd332d5594bc2" type="hidden">
				<a style="display: block;" id="backtop" title="回到顶部" rel="nofollow"></a>
				<!--product feedback-->
				<!--我要反馈按钮-->
<div id="product-fk">
	<div id="feedback-icon">
	<div class="fb-icon"></div>
	<span>我要反馈</span>
	<em class="error dn fk-limit">今天已经反馈足够多了，给产品经理点时间消化下吧~<i></i></em>
	<em class="error dn fk-suc">&nbsp;&nbsp;反馈提交成功！</em>
</div>
</div>

<div id="feedback-con">
	<div class="pfb-pho-close">
		<div class="pfb-pho"></div>
		<div class="pfb-close"></div>
	</div>
	<em class="error dn"><span>你还没填任何反馈呢</span><i></i></em>
	<form id="product-fb">
		<div class="pfb-txt">
			<textarea placeholder="我是拉勾的产品经理哈丁，把你遇到的问题，或是想要的功能告诉我吧（200字以内）" maxlength="200"></textarea>
		</div>
		<div class="pfb-email" style="height:60px;">
			<input name="email" placeholder="留下邮箱方便我们沟通（选填）" type="text">
			<span class="ensure">确定</span>
		</div>
	</form>
	<input id="login-email" value="513709055@qq.com" type="hidden">
	<input id="login-phone" value="" type="hidden">
	<input id="login-realUserId" value="2220719" type="hidden">
</div>

<script>
	// 关闭
	//3s tips消失
	window.global = window.global || {};
	global.email = "513709055@qq.com";
	global.usertoken = jQuery.cookie('user_trace_token');
	global.idmd5 = "2220719";

</script>
<script src="/Public/Home/resume/feedback.js"></script>
   			</div>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<link rel="stylesheet" type="text/css" href="/Public/css2/widgets_fec497b.css">

<div id="footer">
        <div class="wrapper">
            <i class="footer_lagou_icon"></i>
            <div class="inner_wrapper">
                <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span></span><i></i></a>
                <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
                <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
                <a href="http://www.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
                <a href="http://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
                <a href="http://www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
                <a id="BizQQWPA" href="javascript:void(0);" rel="nofollow">在线交流</a>
                <span class="tel">服务热线：<em>400-605-9900 (9:00 -19:00)</em></span>
            </div>
            <div class="copy">
                <span><em>©</em>2015 Lagou </span>
                <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
                <span>京公网安备11010802017116号</span>
            </div>
        </div>
    </div>
<script type="text/javascript">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><iframe src="<?php echo U('Home/Login/login');?>" id="auto_login_iframe_0" style="display:none;"></iframe></body></html>