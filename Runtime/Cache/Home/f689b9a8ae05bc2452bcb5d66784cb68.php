<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="background: none repeat scroll 0% 0% rgb(0, 179, 138);"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>找工作-互联网招聘求职网-拉勾网</title>
<meta name="baidu-site-verification" content="QIQ6KC1oZ6">


<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script type="text/javascript">
var ctx = "http://www.lagou.com";
var rctx = "http://hr.lagou.com";
var pctx = "http://passport.lagou.com";
var crctx = "http://www.lagou.com";
var sctx = "http://suggest.lagou.com";
var chrctx = "http://c.hr.lagou.com";

var frontLogin = "http://www.lagou.com/frontLogin.do";
var frontLogout = "http://www.lagou.com/frontLogout.do";
var frontRegister = "http://www.lagou.com/frontRegister.do";

</script>
<link rel="stylesheet" type="text/css" href="/Public/Home/regover/myresume.css">
<script src="/Public/Home/regover/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/regover/jquery_002.js"></script>
<script src="/Public/Home/regover/b5m.js" charset="utf-8" id="b5mmain" type="text/javascript"></script><link type="text/css" href="/Public/Home/regover/b5m-plugin.css" rel="stylesheet"><link type="text/css" href="/Public/Home/regover/b5m.css" rel="stylesheet"></head>
<body><script src="/Public/Home/regover/cvt.txt"></script>
    <div id="luodi_wrap">
    
       <div class="main_two">
          <div class="main_content">
                <div class="main_text">
                  <p>你配得上更好的工作，&nbsp;</p>
                  <p class="special">你配得上更好的生活。</p>
                </div>
                <i></i>
                <a href="javascript:;" title="开始" id="mr_start">开始</a>
          </div>
          <img src="/Public/Home/regover/luo_logo.png" height="42" width="245">
        </div>
        <input id="resubmitToken" value="0c5d8cb164854d1d9ddd079d93015e9e" type="hidden">
    </div>
    <script>
        //--参数说明_orderno： 激活邮箱， 或者标识激活用户唯一注册ID值
        var lp_py_usertoken = $.cookie('user_trace_token');
        ! function(w, d, e) {
        var _orderno = lp_py_usertoken; //替换此处!;
        var b = location.href,
            c = d.referrer,
            f, s, g = d.cookie,
            h = g.match(/(^|;)\s*ipycookie=([^;]*)/),
            i = g.match(/(^|;)\s*ipysession=([^;]*)/);
        if (w.parent != w) {
            f = b;
            b = c;
            c = f;
        };
        u = '//stats.ipinyou.com/cvt?a=' + e('ga.dQ.2ctyBJvkW8xfFWMp-dXPn_') + '&c=' + e(h ? h[2] : '') + '&s=' + e(i ? i[2].match(/jump\%3D(\d+)/)[1] : '') + '&u=' + e(b) + '&r=' + e(c) + '&rd=' + (new Date()).getTime() + '&OrderNo=' + e(_orderno) + '&e=';

        function _() {
            if (!d.body) {
                setTimeout(_(), 100);
            } else {
                s = d.createElement('script');
                s.src = u;
                d.body.insertBefore(s, d.body.firstChild);
            }
        }
        _();
    }(window, document, encodeURIComponent);
    </script>
    <script type="text/javascript">
    var body =  document.documentElement;
    body.style.background = "#00b38a";

    var remainTime = 0;
    var timer;
    var token = $("#resubmitToken").val();
    $(function(){
      var startTime = getTime() ;
      timedCount();
      $("#mr_start").on("click",function(event){
        event.preventDefault();
        clearTimeout(timer);
        var endTime = getTime() ;
        $.ajax({
          url:ctx+'/user/userBehavior.json',
          type:'post',
          data: {
            startTime:startTime,
            endTime:endTime,
            remainTime:remainTime,
            resubmitToken:token
          },
          dataType:'json'
        }).done(function(result){
          if(null != result.resubmitToken && '' != result.resubmitToken){
            $('#resubmitToken').val(result.resubmitToken);          
          }
          if(result.success){
             window.location.href=ctx+"/resume/basic.html";
          }else{
            alert(result.msg);
          }
        });
      }) 
    })
    function timedCount(){
      remainTime = remainTime + 1;
      timer=setTimeout("timedCount()",1)
    }
    //获取当前时间
    function getTime(){
      var date = new Date() ;
      var year = date.getFullYear() ;
      var month = date.getMonth() + 1 ;
      var day = date.getDate() ;
      var hour = date.getHours() ;
      var minute = date.getMinutes() ;
      var seconds = date.getSeconds() ;
      var milliseconds = date.getMilliseconds();
      month = month<10 ? '0'+ month : month ;
      day = day<10 ? '0'+ day : day ;
      hour = hour<10 ? '0'+ hour : hour ;
      minute = minute<10 ? '0'+ minute : minute ;
      seconds = seconds<10 ? '0'+seconds : seconds ;
      milliseconds = milliseconds<10 ? '0'+milliseconds : milliseconds;
      return year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + seconds + ':' + milliseconds;
    } 
    </script>



<div style="display: none;" id="cboxOverlay"></div><div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><button id="cboxPrevious" type="button"></button><button id="cboxNext" type="button"></button><button id="cboxSlideshow"></button><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>