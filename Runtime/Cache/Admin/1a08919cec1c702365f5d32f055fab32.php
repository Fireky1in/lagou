<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>登录</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/Admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/Admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">后台登录</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action='<?php echo U('Admin/Login/doLogin');?>' method='post' id='userform'>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="请输入用户名" name="username" type="text"  id='username'>
                                </div>
                                <div style='width:100%;height:20px;margin-top:-10px;font-size:12px;color:red;' id='uinfo'></div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="请输入密码" name="password" type="password"  id='password'>
                                </div>
                                <div style='width:100%;height:20px;margin-top:-10px;font-size:12px;color:red;' id='pinfo'></div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="请输入验证码" name="verify" type="text"  id='username'>
                                    </br>
                                    <img width="200px" class="left15" height="50px" alt="验证码" onclick="this.src=this.src+'?'+Math.random()" src="<?php echo U('Admin/Login/verify');?>">
                                </div>
                                <div style='width:100%;height:20px;margin-top:-10px;font-size:12px;color:red;' id='uinfo'></div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">记住密码
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->

                                <input type="submit" class="btn btn-lg btn-success btn-block" id='sub' value='登录'>
                                <!-- <span id='sub'>fhsdajfhsadj</span> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ajax and  登录 -->
    <script type="text/javascript" src='/Public/Admin/js/jquery-1.8.3.min.js'></script>
    <script type="text/javascript">
    var one = false;
    var two = false;
        $('#username').blur(function(){
           var   v = $(this).val().trim();
           if(!v){
                $('#uinfo').html('请输入用户名').show();
           }else{
                one = true;
                $('#uinfo').html('').show();
           }
        });


        $('#password').blur(function(){
            var v = $(this).val().trim();
            if(!v){
                $('#pinfo').html('密码不能为空').show();
            }else{
                $('#pinfo').html('').show();
                two = true;
            }
        });

        //表单
        $('#userform').submit(function(){
            $('input').trigger('blur');
            if(one && two){
                return true;
            }else{
                return false;
            }
        });
       
    </script>
    <!-- jQuery -->
    <script src="/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/Public/Admin/dist/js/sb-admin-2.js"></script>

</body>

</html>