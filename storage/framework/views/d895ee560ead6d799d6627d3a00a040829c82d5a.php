<!DOCTYPE html>
<!-- saved from url=(0024)https://www.cnblogs.com/ -->
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script async="" src="<?php echo e(asset('js/analytics.js')); ?>"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>博客园 - 开发者的网上家园</title>
    <meta name="keywords" content="开发者,博客园,开发者,程序猿,程序媛,极客,编程,代码,开源,IT网站,Developer,Programmer,Coder,Geek,技术社区">
    <meta name="description"
          content="博客园是一个面向开发者的知识分享社区。自创建以来，博客园一直致力并专注于为开发者打造一个纯净的技术交流社区，推动并帮助开发者通过互联网分享知识，从而让更多开发者从中受益。博客园的使命是帮助开发者用代码改变世界。">
    <link rel="shortcut icon" href="https://common.cnblogs.com/favicon.ico" type="image/x-icon">
    <link rel="Stylesheet" type="text/css" href="<?php echo e(asset('css/aggsite.css')); ?>">
    <link id="RSSLink" title="RSS" type="application/rss+xml" rel="alternate"
          href="http://feed.cnblogs.com/blog/sitehome/rss">
    <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/aggsite.js')); ?>" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
    <div id="hd_info">
    
	
        <div id="cnts">
            <div id="site_nav_top">代码改变世界</div>
            <div id="login_area">
         
			<span id="span_userinfo"><a href=""></a>
        
			<a id="user_nav_blog_link" href="http://www.cnblogs.com/ryn521/">我的博客</a>	
			<span id="user_nav_blog_split">·</span><a href="<?php echo e(url('home/user')); ?>">注册
			<span id="msg_count"></span></a>·<a href="http://home.cnblogs.com/set/">登录</a>·
			<a href="/home" onclick="logout();return false">退出</a>
			<span id="current_spaceId" style="display:none">1187366</span></span></div>
			
            <div class="clear"></div>
			
        </div>
        </div>
		 
    </div>
    <div id="header">
        <p class="h_r_3"></p>
        <p class="h_r_2"></p>
        <p class="h_r_1"></p>
        <div id="header_block">
            <div id="logo">
                <h1>
                    <a href="https://www.cnblogs.com/" title="开发者的网上家园"><img src="<?php echo e(asset('imges/logo_small.gif')); ?>"
                                                                             alt="博客园Logo" width="142" height="55"></a>
                </h1>
            </div>

            <div class="clear"></div>
        </div>
        <p class="h_r_1"></p>
        <p class="h_r_2"></p>
        <p class="h_r_3"></p>
    </div>
	
    <div id="nav_menu">
        <a href="https://home.cnblogs.com/">园子</a>
        <a href="https://wz.cnblogs.com/">收藏</a>
        <a href="http://kb.cnblogs.com/">知识库</a>
        <a href="http://zzk.cnblogs.com/">找找看</a>
    </div>
						
    <div id="main">
        <div class="post_nav_block_wrapper">
          
            <div class="clear"></div>
        </div>
        <div class="rss_link" id="rss_block">
            <span id="posts_refresh_tips"></span>
            <a id="posts_refresh" href="https://www.cnblogs.com/#" class="refresh" title="刷新博文列表" onclick="aggSite.loadCategoryPostList();return false">刷新</a> 
            <a  href="http://feed.cnblogs.com/blog/sitehome/rss">
            <img src="<?php echo e(asset('imges/icon_rss.gif')); ?>" alt="点击订阅" style="position:relative;top:2px;" title="订阅博客园文章"></a>
        </div>
       


        <div id="pager_top" style="display:none"></div>
        <div id="post_list_tips" class="hide"></div>

        <div id="post_list">

     

                <?php $__currentLoopData = $art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post_item_body">
                    <h3><a class="titlelnk" href="http://www.cnblogs.com/onepixel/p/7078617.html" target="_blank"><?php echo e($v->title); ?></a></h3>
                    <p class="post_item_summary">
                        <a href="http://www.cnblogs.com/onepixel/" target="_blank">
                        <img width="48" height="48" class="pfs" src="<?php echo e(asset('imges/20151205235751.png')); ?>" alt=""></a>
                        
                    </p>
                    <div class="post_item_foot">
                        <a href="http://www.cnblogs.com/onepixel/" class="lightblue">作者:<?php echo e($v->author); ?></a>
                        发布于:<?php echo e($v->addtime); ?>

                        <span class="article_comment"><a
                                href="http://www.cnblogs.com/onepixel/p/7078617.html#commentform" title="" class="gray">
                       </a></span><span class="article_view"></span>
					   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					   
					   <a href="<?php echo e(url('/home/discusstab')); ?>">评论</a>
					    
					   </div>
                </div>
                <div class="clear"></div>
            </div>
      

        </div>
        <script>editorPickStat();
        aggSite.user.getUserInfo();</script>
        <script type="text/javascript">
            var aggSiteModel = {
                "CategoryType": "SiteHome",
                "ParentCategoryId": 0,
                "CategoryId": 808,
                "PageIndex": 1,
                "TotalPostCount": 4000,
                "ItemListActionName": "PostList"
            };
        </script>
        <div id="pager_bottom">
            <div id="paging_block">
                <div class="pager"><a href="https://www.cnblogs.com/" class="p_1 current"
                                      onclick="aggSite.loadCategoryPostList(1,20);buildPaging(1);return false;">1</a><a
                        href="https://www.cnblogs.com/sitehome/p/2" class="p_2 middle"
                        onclick="aggSite.loadCategoryPostList(2,20);buildPaging(2);return false;">2</a><a
                        href="https://www.cnblogs.com/sitehome/p/3" class="p_3 middle"
                        onclick="aggSite.loadCategoryPostList(3,20);buildPaging(3);return false;">3</a><a
                        href="https://www.cnblogs.com/sitehome/p/4" class="p_4 middle"
                        onclick="aggSite.loadCategoryPostList(4,20);buildPaging(4);return false;">4</a><a
                        href="https://www.cnblogs.com/sitehome/p/5" class="p_5 middle"
                        onclick="aggSite.loadCategoryPostList(5,20);buildPaging(5);return false;">5</a><a
                        href="https://www.cnblogs.com/sitehome/p/6" class="p_6 middle"
                        onclick="aggSite.loadCategoryPostList(6,20);buildPaging(6);return false;">6</a><a
                        href="https://www.cnblogs.com/sitehome/p/7" class="p_7 middle"
                        onclick="aggSite.loadCategoryPostList(7,20);buildPaging(7);return false;">7</a><a
                        href="https://www.cnblogs.com/sitehome/p/8" class="p_8 middle"
                        onclick="aggSite.loadCategoryPostList(8,20);buildPaging(8);return false;">8</a><a
                        href="https://www.cnblogs.com/sitehome/p/9" class="p_9 middle"
                        onclick="aggSite.loadCategoryPostList(9,20);buildPaging(9);return false;">9</a><a
                        href="https://www.cnblogs.com/sitehome/p/10" class="p_10 middle"
                        onclick="aggSite.loadCategoryPostList(10,20);buildPaging(10);return false;">10</a><a
                        href="https://www.cnblogs.com/sitehome/p/11" class="p_11 middle"
                        onclick="aggSite.loadCategoryPostList(11,20);buildPaging(11);return false;">11</a><span
                        class="ellipsis">···</span><a href="https://www.cnblogs.com/sitehome/p/200" class="p_200 last"
                                                      onclick="aggSite.loadCategoryPostList(200,20);buildPaging(200);return false;">200</a><a
                        href="https://www.cnblogs.com/sitehome/p/2"
                        onclick="aggSite.loadCategoryPostList(2,20);buildPaging(2);return false;">Next &gt;</a></div>
            </div>
            <script type="text/javascript">var pagingBuider = {
                "OnlyLinkText": false,
                "TotalCount": 4000,
                "PageIndex": 1,
                "PageSize": 20,
                "ShowPageCount": 5,
                "SkipCount": 0,
                "UrlFormat": "/sitehome/p/{0}",
                "OnlickJsFunc": "aggSite.loadCategoryPostList()",
                "FirstPageLink": "/",
                "AjaxUrl": "/mvc/ToolkitPaging/load.aspx",
                "AjaxCallbak": null,
                "TopPagerId": "pager_top",
                "IsRenderScript": true
            };
            function buildPaging(pageIndex) {
                pagingBuider.PageIndex = pageIndex;
                $.ajax({
                    url: pagingBuider.AjaxUrl,
                    data: JSON.stringify(pagingBuider),
                    type: 'post',
                    dataType: 'text',
                    contentType: 'application/json; charset=utf-8',
                    success: function (data) {
                        $('#paging_block').html(data);
                        var pagerTop = $('#pager_top');
                        if (pageIndex > 1) {
                            $(pagerTop).html(data).show();
                        } else {
                            $(pagerTop).hide();
                        }
                    }
                });
            }</script>
        </div>
        <div id="side_nav">

            <div id="cate_title_block">
                <div id="cate_title_title">
                    <div class="cate_title">网站分类</div>
                </div>
                <ul id="cate_item">
                    <li id="cate_item_108698" onmouseover="cateShow(108698)" onmouseout="cateHidden(108698)">
                        <a href="https://www.cnblogs.com/cate/108698/">.NET技术(5)</a>
                    </li>
                    <li id="cate_item_2" onmouseover="cateShow(2)" onmouseout="cateHidden(2)">
                        <a href="https://www.cnblogs.com/cate/2/">编程语言(11)</a>
                    </li>
                    <li id="cate_item_108701" onmouseover="cateShow(108701)" onmouseout="cateHidden(108701)">
                        <a href="https://www.cnblogs.com/cate/108701/">软件设计(2)</a>
                    </li>
                    <li id="cate_item_108703" onmouseover="cateShow(108703)" onmouseout="cateHidden(108703)">
                        <a href="https://www.cnblogs.com/cate/108703/">Web前端(9)</a>
                    </li>
                    <li id="cate_item_108704" onmouseover="cateShow(108704)" onmouseout="cateHidden(108704)">
                        <a href="https://www.cnblogs.com/cate/108704/">企业信息化(0)</a>
                    </li>
                    <li id="cate_item_108705" onmouseover="cateShow(108705)" onmouseout="cateHidden(108705)">
                        <a href="https://www.cnblogs.com/cate/108705/">手机开发(3)</a>
                    </li>
                    <li id="cate_item_108709" onmouseover="cateShow(108709)" onmouseout="cateHidden(108709)">
                        <a href="https://www.cnblogs.com/cate/108709/">软件工程(0)</a>
                    </li>
                    <li id="cate_item_108712" onmouseover="cateShow(108712)" onmouseout="cateHidden(108712)">
                        <a href="https://www.cnblogs.com/cate/108712/">数据库技术(2)</a>
                    </li>
                    <li id="cate_item_108724" onmouseover="cateShow(108724)" onmouseout="cateHidden(108724)">
                        <a href="https://www.cnblogs.com/cate/108724/">操作系统(1)</a>
                    </li>
                    <li id="cate_item_4" onmouseover="cateShow(4)" onmouseout="cateHidden(4)">
                        <a href="https://www.cnblogs.com/cate/4/">其他分类(3)</a>
                    </li>
                    <li id="cate_item_0" onmouseover="cateShow(0)" onmouseout="cateHidden(0)">
                        <a href="https://www.cnblogs.com/cate/all/">所有随笔(1185)</a>
                    </li>
                    <li id="cate_item_-1" onmouseover="cateShow(-1)" onmouseout="cateHidden(-1)">
                        <a href="https://www.cnblogs.com/comment/">所有评论(364)</a>
                    </li>
                </ul>
                <div class="cate_bottom"></div>
                <div id="cate_sub_block">
                    <div id="cate_content_block_108698" onmouseover="cateShow(108698)" onmouseout="cateHidden(108698)"
                         class="cate_content_block_wrapper" style="top:30px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/beginner/">.NET新手区(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/aspnet/">ASP.NET(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/csharp/">C#(2)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/dotnetcore/">.NET Core(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/winform/">WinForm(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/silverlight/">Silverlight(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/wcf/">WCF(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/clr/">CLR(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/wpf/">WPF(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/xna/">XNA(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/vs2010/">Visual Studio(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/mvc/">ASP.NET MVC(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/control/">控件开发(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/ef/">Entity Framework(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/nhibernate/">NHibernate(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/winrt_metro/">WinRT/Metro(1)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_2" onmouseover="cateShow(2)" onmouseout="cateHidden(2)"
                         class="cate_content_block_wrapper" style="top:58px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/java/">Java(5)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/cpp/">C++(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/php/">PHP(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/delphi/">Delphi(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/python/">Python(2)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/ruby/">Ruby(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/c/">C语言(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/erlang/">Erlang(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/go/">Go(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/swift/">Swift(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/scala/">Scala(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/r/">R语言(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/verilog/">Verilog(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/otherlang/">其它语言(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108701" onmouseover="cateShow(108701)" onmouseout="cateHidden(108701)"
                         class="cate_content_block_wrapper" style="top:86px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/design/">架构设计(2)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/108702/">面向对象(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/dp/">设计模式(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/ddd/">领域驱动设计(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108703" onmouseover="cateShow(108703)" onmouseout="cateHidden(108703)"
                         class="cate_content_block_wrapper" style="top:114px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/web/">Html/Css(3)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/javascript/">JavaScript(6)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/jquery/">jQuery(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/html5/">HTML5(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108704" onmouseover="cateShow(108704)" onmouseout="cateHidden(108704)"
                         class="cate_content_block_wrapper" style="top:142px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/bpm/">BPM(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/sharepoint/">SharePoint(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/gis/">GIS技术(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/sap/">SAP(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/OracleERP/">Oracle ERP(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/dynamics/">Dynamics CRM(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/infosec/">信息安全(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/3/">企业信息化其他(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108705" onmouseover="cateShow(108705)" onmouseout="cateHidden(108705)"
                         class="cate_content_block_wrapper" style="top:170px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/android/">Android开发(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/ios/">iOS开发(2)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/wp/">Windows Phone(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/wm/">Windows Mobile(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/mobile/">其他手机开发(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108709" onmouseover="cateShow(108709)" onmouseout="cateHidden(108709)"
                         class="cate_content_block_wrapper" style="top:198px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/agile/">敏捷开发(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/pm/">项目与团队管理(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/Engineering/">软件工程其他(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108712" onmouseover="cateShow(108712)" onmouseout="cateHidden(108712)"
                         class="cate_content_block_wrapper" style="top:226px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/sqlserver/">SQL Server(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/oracle/">Oracle(2)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/mysql/">MySQL(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/nosql/">NoSQL(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/bigdata/">大数据(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/database/">其它数据库(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_108724" onmouseover="cateShow(108724)" onmouseout="cateHidden(108724)"
                         class="cate_content_block_wrapper" style="top:254px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/win7/">Windows(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/winserver/">Windows Server(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/linux/">Linux(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/osx/">OS X(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/eos/">嵌入式(0)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                    <div id="cate_content_block_4" onmouseover="cateShow(4)" onmouseout="cateHidden(4)"
                         class="cate_content_block_wrapper" style="top:282px">
                        <div class="cate_content_top"></div>
                        <div class="cate_content_block">
                            <ul>
                                <li><a href="https://www.cnblogs.com/cate/life/">非技术区(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/testing/">软件测试(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/software/">代码与软件发布(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/cg/">计算机图形学(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/gamedev/">游戏开发(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/codelife/">程序人生(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/job/">求职面试(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/book/">读书区(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/quoted/">转载区(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/wince/">Windows CE(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/translate/">翻译区(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/opensource/">开源研究(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/flex/">Flex(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/cloud/">云计算(0)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/algorithm/">算法与数据结构(1)</a></li>
                                <li><a href="https://www.cnblogs.com/cate/misc/">其他技术区(1)</a></li>
                            </ul>
                        </div>
                        <div class="cate_content_bottom"></div>
                    </div>
                </div>
                <script type="text/javascript">var cateIdList = '108698,2,108701,108703,108704,108705,108709,108712,108724,4';
                aggSite.loadSubCategories();</script>
            </div>
          
                

        </div>
        <div id="side_right">
            <div id="search_block">
                <div class="side_search">
                    <input type="text" id="zzk_q" class="search_input" onkeydown="return zzk_go_enter(event);"
                           tabindex="3"><input onclick="zzk_go()" type="button" class="search_btn" value="找找看">
                </div>
                <div id="google_search" class="side_search">
                    <input type="text" id="google_search_q" class="search_input"
                           onkeydown="return google_search_enter(event);"><input type="button" value="Google"
                                                                                 class="search_btn"
                                                                                 onclick="return google_search();">
                </div>
            </div>

            </div>
                    
        </div>
                
    </div>
    
    <div id="footer">
        <div class="footer_block">
            <p class="r_b_3"></p>
            <p class="r_b_2"></p>
            <p class="r_b_1"></p>
           
            <p class="r_b_1"></p>
            <p class="r_b_2"></p>
            <p class="r_b_3"></p>
        </div>
    </div>
    <div id="footer_bottom">
        <div><a href="https://www.cnblogs.com/AboutUS.aspx">关于博客园</a><a href="https://www.cnblogs.com/ContactUs.aspx">联系我们</a>©2004-2017<a
                href="http://www.cnblogs.com/">博客园</a>保留所有权利<a href="http://www.miitbeian.gov.cn/" target="_blank">沪ICP备09004260号</a>
        </div>
        <div>
            <a href="https://ss.knet.cn/verifyseal.dll?sn=e131108110100433392itm000000&amp;ct=df&amp;a=1&amp;pa=0.25787803245785335"
               rel="nofollow" target="_blank"><img id="cnnic_img" src="<?php echo e(asset('imges/cnnic.png')); ?>" alt=""
                                                   width="64" height="23"></a><a target="_blank"
                                                                                 href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011502001144"
                                                                                 style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img
                src="<?php echo e(asset('imges/ghs.png')); ?>" alt=""><span
                style="float:left;height:20px;line-height:20px;margin: 0 5px 0 5px; color:#939393;">沪公网安备 31011502001144号</span></a>
        </div>
    </div>
</div>


</body>
</html>