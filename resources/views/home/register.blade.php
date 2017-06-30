
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>用户注册 - 博客园</title>
    <!--优先加载字体-->
    <script src="{{asset('homes/js/nav-iconfont.js')}}"></script>
    <!--css-->
    <link rel="shortcut icon" href="//common.cnblogs.com/favicon.ico" type="image/x-icon" />
    <link href="{{asset('homes/css/_layout.min.css')}}" rel="stylesheet" />
    
    <link href="{{asset('homes/css/signup.min.css')}}" rel="stylesheet" />

</head>
<body>
    <!--nav-->
    <nav class="navbar-fixed-top nav-box navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="//cnblogs.com" class="no-style">
                    <svg class="icon-logo">
                        <use xlink:href="#icon-logo"></use>
                    </svg>
                    <svg class="icon-txt-logo">
                        <use xlink:href="#icon-txt-logo"></use>
                    </svg>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right nav-main-icon">
                    <li>
                        <a href="{{url('home')}}" class="no-style">
                            <svg class="icon-home">
                                <use xlink:href="#icon-home"></use>
                            </svg>
                            首 页
                        </a>
                    </li>
                        <li>
                            <a href="{{url('home/login')}}">
                                <svg>
                                    <use xlink:href="#icon-signin"></use>
                                </svg>
                                登 录
                            </a>
                        </li>
                    <li>
                        <a href="{{url('home/register')}}" id="signUpMenu">
                            <svg>
                                <use xlink:href="#icon-signup"></use>
                            </svg>
                            注 册
                        </a>
                    </li>
                    <li>
                        <a href="/assist#" id="assistMenu">
                            <svg>
                                <use xlink:href="#icon-assist"></use>
                            </svg>
                            帮 助
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!---body-->
    <div class="container body-box">
        <!--css-->
<div class="center-block body-content">
    <!--头部提示-->
    <div class="hidden-xs title-top col-sm-12">
        注册新用户
        <hr class="head-hr" />
    </div>
    <!--表单-->
    <form class="form-horizontal col-sm-8 form-padding" role="form" id="registerForm" method="post" action="/">
        <div class="form-space-top hidden-xs"></div>
        <!--每一行-->
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-2" for="Email">邮箱</label>
            </div>
            <div class="col-sm-10 has-feedback">
                <input class="form-control" placeholder="需要通过邮件激活帐户" type="email" data-val="true" data-val-email="邮箱格式错误!" data-val-length="不合要求，邮箱不能超过120个字符!" data-val-length-max="120" data-val-regex="邮箱地址错误或不支持!" data-val-regex-pattern="[\w!#\$%&amp;&#x27;\*\&#x2B;\-\/=\^_`{\|}~.]&#x2B;@([\w-]&#x2B;\.)&#x2B;(com|net|cn|org|me|cc|biz)$" data-val-remote="&#x27;邮箱&#x27; is invalid." data-val-remote-additionalfields="*.Email" data-val-remote-url="/Account/CheckEmail" data-val-required="请输入邮箱地址!" id="Email" name="Email" value="">
                <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-4" for="PhoneNum">手机号码</label>
            </div>
            <div class="col-sm-10 has-feedback">
                <input class="form-control" placeholder="激活帐户需要手机短信验证" type="text" data-val="true" data-val-length="请输入11位手机号码" data-val-length-max="11" data-val-length-min="11" data-val-regex="输入的手机号码有误" data-val-regex-pattern="^1[34578]\d{9}$" data-val-remote="&#x27;手机号码&#x27; is invalid." data-val-remote-additionalfields="*.PhoneNum" data-val-remote-url="/Account/CheckPhoneNum" data-val-required="请输入手机号码!" id="PhoneNum" name="PhoneNum" value="">
                <span class="text-danger field-validation-valid" data-valmsg-for="PhoneNum" data-valmsg-replace="true"></span>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-4" for="LoginName">登录帐号</label>
            </div>
            <div class="col-sm-10 has-feedback">
                <input class="form-control" placeholder="登录用户名，不少于4个字符" type="text" data-val="true" data-val-length="不合要求，至少2个字符，最多30个字符!" data-val-length-max="30" data-val-length-min="2" data-val-nospace="登录用户名不能包含空格!" data-val-remote="&#x27;登录帐号&#x27; is invalid." data-val-remote-additionalfields="*.LoginName" data-val-remote-url="/Account/CheckLoginName" data-val-required="请输入登录用户名!" id="LoginName" name="LoginName" value="">
                <span class="text-danger field-validation-valid" data-valmsg-for="LoginName" data-valmsg-replace="true"></span>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-4" for="DisplayName">显示名称</label>
            </div>
            <div class="col-sm-10 has-feedback">
                <input class="form-control" placeholder="即昵称，不少于2个字符" type="text" data-val="true" data-val-length="不合要求，至少2个字符，最多20个字符!" data-val-length-max="20" data-val-length-min="2" data-val-regex="不能包含空格、@、:和，不能以._结尾!" data-val-regex-pattern="^(?!.*[@:：\s]).*[^._]$" data-val-remote="&#x27;显示名称&#x27; is invalid." data-val-remote-additionalfields="*.DisplayName" data-val-remote-url="/Account/CheckDisplayName" data-val-required="请输入显示名称!" id="DisplayName" name="DisplayName" value="">
                <span class="text-danger field-validation-valid" data-valmsg-for="DisplayName" data-valmsg-replace="true"></span>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <div class="space-line-height hidden-xs"></div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-2" for="Password">密码</label>
            </div>
            <div class="col-sm-10 has-feedback">
                <input class="form-control" placeholder="至少8位，必须包含字母、数字、特殊字符" type="password" data-val="true" data-val-length="不合要求，密码长度要求8-30位!" data-val-length-max="30" data-val-length-min="8" data-val-nospace="密码不能包含空格!" data-val-regex="密码必须包含字母、数字和特殊字符的组合!" data-val-regex-pattern="^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).&#x2B;$" data-val-required="请输入密码!" id="Password" name="Password">
                <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <label class="w4-4" for="ConfirmPassword">确认密码</label>
            </div>
            <div class="col-sm-10 has-feedback">
                <input class="form-control" placeholder="请输入确认密码" type="password" data-val="true" data-val-equalto="确认密码错误!" data-val-equalto-other="*.Password" id="ConfirmPassword" name="ConfirmPassword">
                <span class="text-danger field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="checkWay" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content center-block">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">
                    请完成注册所需验证
                </h4>
            </div>
            <div class="modal-body">
                <div id="showLoading" class="ladda-button" data-style="zoom-in"></div>
                <div id="captchaBox" class="center-block">
                    <span id="geetestLoading"> 验证码组件加载中,请稍后...</span>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--注册按钮-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <span class="col-sm-12 ajax-error"></span>
                <button id="submitBtn" type="submit" class="btn ladda-button center-block cnblogs-btn-blue" data-style="zoom-in"><span class="ladda-label">注册</span></button>
            </div>
        </div>
        <!--协议提示-->
        <div class="col-sm-offset-2 register-sign">
            *点击 “注册” 按钮，即表示您同意并愿意遵守 <a class="look-agreeon" target="_blank" href="//passport.cnblogs.com/agreement.html">用户协议</a>。
        </div>
        <!--hidden-->
        <input type="hidden" id="RegisterFrom" name="RegisterFrom" value="https://passport.cnblogs.com/user/signin" />
        <input type="hidden" id="PublicKey" name="PublicKey" value="MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCp0wHYbg/NOPO3nzMD3dndwS0MccuMeXCHgVlGOoYyFwLdS24Im2e7YyhB0wrUsyYf0/nhzCzBK8ZC9eCWqd0aHbdgOQT6CuFQBMjbyGYvlVYU2ZP7kG9Ft6YV6oc9ambuO7nPZh&#x2B;bvXH0zDKfi02prknrScAKC0XhadTHT3Al0QIDAQAB" />
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8PhlBN8IFxtHhqIV3s0LCDme5Vz7dMJbjFt26eG4SblwQ1VSHhQwlz-IlBSQeXgdvmnOZSNUi0DMxBO2xCyYKtTQsYD4febkKOW5eWG5X1GEIMaSgabrC8yXF4iShIuJpxhQoeN_zx14LmDaJ8lwFgc" /></form>
    <div class="hidden-xs col-sm-4 side-img-box">
        <div class="side-line">
            <div></div>
        </div>
        <img src="{{asset('homes/images/registersideimg.png')}}" />
    </div>
</div>

    </div>
    <!--footer-->
    <br style="clear:both" />
    <div id="footer_bottom" class="text-center">
        <div><a href="//www.cnblogs.com/AboutUS.aspx" class="hidden-xs">关于博客园</a><a href="//www.cnblogs.com/ContactUs.aspx" class="hidden-xs">联系我们</a>©2004-2017<a href="//www.cnblogs.com/">博客园</a><span class="hidden-xs">保留所有权利</span> Powered by ASP.NET Core on Linux</div>
    </div>
    
    
        <script src="{{asset('homes/js/_layout.min.js')}}"></script>
    
    
    <script src="{{asset('homes/gt.js')}}"></script>
    <script src="{{asset('homes/js/signup.min.js')}}"></script>

</body>
</html>
