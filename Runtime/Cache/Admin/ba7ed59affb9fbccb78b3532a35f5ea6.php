<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo C('SITE_NAME'); ?>-后台管理中心</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="./Themes/Admin/Public/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="./Themes/Admin/Public/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="./Themes/Admin/Public/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		
		<link type="image/x-icon" href="<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="icon">
		<link type="image/x-icon" href="<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="bookmark">
		
		
		<link rel="stylesheet" href="./Themes/Admin/Public/css/ace.min.css" />
		<link rel="stylesheet" href="./Themes/Admin/Public/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="./Themes/Admin/Public/css/ace-skins.min.css" />
		
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="./Themes/Admin/Public/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="./Themes/Admin/Public/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="./Themes/Admin/Public/js/html5shiv.js"></script>
		<script src="./Themes/Admin/Public/js/respond.min.js"></script>
		<![endif]-->
		
		
			
				
		
	</head>

	<body class="navbar-fixed">
		<div class="navbar navbar-default navbar-fixed-top" id="navbar">
			
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="<?php echo U('Index/index');?>" class="navbar-brand">
						<small>
							<!--
							<i class="icon-leaf"></i>
							-->
							<?php echo C('SITE_NAME'); ?> 后台管理
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">						

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							
								<span class="user-info">
									<?php echo session('user_auth.username'); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li class="divider"></li>

								<li>
									<a target="_blank" href="/theguide/">网站前台</a>
									<a href="<?php echo U('Public/clear');?>">清空缓存</a>
									<a href="<?php echo U('Public/logout');?>">退出系统</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar sidebar-fixed" id="sidebar">					
				
					<?php W('Menu/menu_show');?>
					

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#"><?php echo ($breadcrumb1); ?></a>
							</li>
							<li class="active"><?php echo ($breadcrumb2); ?></li>
							
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						

<div class="page-header">
		<h1>
			前台用户
			<small>
				<i class="icon-double-angle-right"></i>
				<?php echo ($crumbs); ?>
			</small>
		</h1>
	</div>
<div class="row">
	<div class="col-xs-12">	
		<form class="form-horizontal"  id="validation-form" method="post" action='<?php echo U("Member/add");?>'>
			
				
			<div class="form-group required">
				<label class="col-sm-2 control-label">用户名：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="用户名" name="uname"  value="" />
				</div>
		
			</div>			
			
			<div class="form-group required">
				<label class="col-sm-2 control-label">密码：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="密码" name="pwd"  value="888888" />
				</div>
			</div>
									
			<div class="form-group required">
				<label class="col-sm-2 control-label">邮箱：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="邮箱" name="email"  value="" />
				</div>
			</div>
			
			<div class="form-group required">
				<label class="col-sm-2 control-label">手机号码：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="手机号码" name="telephone"  value="" />
				</div>
			</div>


			
			<div class="form-group required">
				<label class="col-sm-2 control-label">个人邀请码：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="个人邀请码" name="invite_code"  value="" />
				</div>
			</div>

			<div class="form-group required">
				<label class="col-sm-2 control-label">推荐人邀请码：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="推荐人邀请码" name="referee_code"  value="" />
				</div>
			</div>

			<div class="form-group required">
				<label class="col-sm-2 control-label">姓名：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="姓名" name="name"  value="" />
				</div>
			</div>

			<div class="form-group required">
				<label class="col-sm-2 control-label">身份证号：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="身份证号" name="id_card"  value="" />
				</div>
			</div>

			<link href="/theguide/Common/css/select2.css" rel="stylesheet"/>
			<script type="text/javascript" src="/theguide/Common/js/jquery.js"></script>
      		<script type="text/javascript" src="/theguide/Common/js/area/area.js"></script>
      		<script type="text/javascript" src="/theguide/Common/js/area/location.js"></script>
      		<script type="text/javascript" src="/theguide/Common/js/area/select2.js"></script>
      		<script type="text/javascript" src="/theguide/Common/js/area/select2_locale_zh-CN.js"></script>
			<div class="form-group required">
				<label class="col-sm-2 control-label">通信地址：</label>
				<div class="col-sm-10">
					<select id="loc_province"  style="width:120px;"></select>&nbsp;&nbsp;
                    <select id="loc_city"  style="width:120px; margin-left: 10px"></select>&nbsp;&nbsp;
                    <select id="loc_town"  style="width:120px;margin-left: 10px"></select>

                    <!-- <input type="hidden" name="loc_province" id="loc_province_ok"> -->
                    <!-- <input type="hidden" name="loc_city" id="loc_city_ok"> -->
                    <!-- <input type="hidden" name="loc_town" id="loc_town_ok"> -->

                    <input type="hidden" name="loc_province">
                    <input type="hidden" name="loc_city" >
                    <input type="hidden" name="loc_town" >
				</div>
			</div>

			<div class="form-group required">
				<label class="col-sm-2 control-label">具体地址：</label>
				<div class="col-sm-10">
					<input  class="form-control" type="text" placeholder="具体地址" name="address"  value="" />
				</div>
			</div>

			<style>
		        div.spot {
		            float: left;
		            margin: 0 20px 0 0;
		            width: 220px;
		            min-height: 160px;
		            border: 2px dashed #ddd;
		        }
		        .droparea {
		            position: relative;
		            text-align: center;
		        }
		        .droparea .instructions {
		            opacity: 0.8;
		            background-color: #cccccc;
		            height: 25px;
		            z-index: 10;
		            zoom: 1;
		            background-position: initial initial;
		            background-repeat: initial initial;
		            cursor: pointer;
		        }
		        .droparea div, .droparea input {
		            position: absolute;
		            top: 0;
		            width: 100%;
		            height: 100%;
		        }
		        .droparea input {
		            cursor: pointer;
		            opacity: 0;
		        }
		        .droparea div, .droparea input {
		            position: absolute;
		            top: 0;
		            width: 100%;
		            height: 100%;
		        }
		        #uparea1,#uparea2,#uparea3{
		            height: 170px;
		            cursor: pointer;
		        }
		        ul,li{list-style: none}
		        #people-id ul{width: 220px;display: inline-block;}
		        #people-id ul li p{width: 220px;text-align: center;font-weight: bold;}
		    </style>

	    	<div class="form-group required">
				<label class="col-sm-2 control-label">证件上传：</label>
				<div class="col-sm-10" id="people-id">
					<ul>
                		<li style="text-decoration:none">
                			<p>身份证正面</p>
                			<div>
                				<div class="droparea spot" id="image1" style="background-image: url('/theguide/uploads/image/regimage/<?php echo ($data["info"]["idcadeimage1"]); ?>');background-size: 220px 160px;" >
		                            <div class="instructions" onclick="del_image('1')">删除</div><div id="uparea1"></div>
		                            <input type="hidden" name="idcadeimage1" id="image_1" value="<?php echo ($data["info"]["idcadeimage1"]); ?>" />
		                        </div>
                			</div>
                		</li>
                	</ul>
                    
                    <ul>
                    	<li>
                    		<p>身份证反面</p>
                    		<div>
                    			<div class="droparea spot" id="image2" style="background-image: url('/theguide/uploads/image/regimage/<?php echo ($data["info"]["idcadeimage2"]); ?>');background-size: 220px 160px;" >
	                            <div class="instructions" onclick="del_image('2')">删除</div><div id="uparea2"></div>
	                            <input type="hidden" name="idcadeimage2" id="image_2" value="<?php echo ($data["info"]["idcadeimage2"]); ?>" />
	                        </div>
                    		</div>
                    	</li>
                    </ul>
                     
                    <ul>
                     	<li>
                     		<p>居住地址证明</p>
                     		<div>
                     			<div class="droparea spot" id="image3" style="background-image: url('/theguide/uploads/image/regimage/<?php echo ($data["info"]["addressimage"]); ?>');background-size: 220px 160px;" >
		                            <div class="instructions" onclick="del_image('3')">删除</div><div id="uparea3"></div>
		                            <input type="hidden" name="addressimage" id="image_3" value="<?php echo ($data["info"]["addressimage"]); ?>" />
		                        </div>
                     		</div>
                     	</li>
                    </ul>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-1 control-label no-padding-left"> </label>	
				<div class="col-sm-11">
					<input name="send" type="submit" id="btnQuery" value="提交" class="btn btn-primary" />
				</div>
				<script>
	                $(function () {
	                    $('#btnQuery').click(function () {
	                        var select2_chosen_1=$('#select2-chosen-1').html(); //省份
	                        var select2_chosen_2=$('#select2-chosen-2').html(); //城市
	                        var select2_chosen_3=$('#select2-chosen-3').html(); //区县

	                        // $('#loc_province_ok').val(select2_chosen_1);
	                        // $('#loc_city_ok').val(select2_chosen_2);
	                        // $('#loc_town_ok').val(select2_chosen_3);

	                        $("input[name='loc_province']").val(select2_chosen_1);
	                        $("input[name='loc_city']").val(select2_chosen_2);
	                        $("input[name='loc_town']").val(select2_chosen_3);
	                    });
	                })
	            </script>
			</div>
		</form>

	</div>
</div>

<script type="text/javascript" src="/theguide/Common/kindeditor/kindeditor.js"></script><script type="text/javascript" src="/theguide/Common/kindeditor/lang/zh_CN.js"></script>

<script type="text/javascript">
    function del_image(num) {
        $('#image' + num).css('background-image', '');
        $('#image_' + num).val('');
    }
    $(function() {

        // var content;
        // KindEditor.ready(function(K) {
        //     content = K.create('#content', {
        //         allowFileManager: true,
        //         uploadJson: '/theguide/Common/kindeditor/php/upload_json.php?dirname=joinmessage'
        //     });
        // });

        KindEditor.ready(function(K) {
            K.create();
            var editor = K.editor({
                allowFileManager: true,
                uploadJson: '/theguide/Common/kindeditor/php/upload_json.php?dirname=regimage'
            });
            K('#uparea1').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        imageUrl: K('#image_1').val(),
                        clickFn: function(url, title, width, height, border, align) {
                            $('#image1').css('background-image', 'url(' + url + ')').css('background-size', '220px 160px');
                            K('#image_1').val(url);
                            // K('#getImgUrl').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#uparea2').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        imageUrl: K('#image_2').val(),
                        clickFn: function(url, title, width, height, border, align) {
                            $('#image2').css('background-image', 'url(' + url + ')').css('background-size', '220px 160px');
                            K('#image_2').val(url);
                            // K('#getImgUrl').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#uparea3').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        imageUrl: K('#image_3').val(),
                        clickFn: function(url, title, width, height, border, align) {
                            $('#image3').css('background-image', 'url(' + url + ')').css('background-size', '220px 160px');
                            K('#image_3').val(url);
                            // K('#getImgUrl').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
        // $("#checkNewsTitle").click(function() {
        //     if ($('#title').val() == '') {
        //         popup.error('标题不能为空！');
        //         return false;
        //     }
        //     $.getJSON("/theguide/admin.php?s=/Member/checkProductTitle", {title: $("#title").val(), id: "<?php echo ($info["id"]); ?>"}, function(json) {
        //         $("#checkNewsTitle").css("color", json.status == 1 ? "#0f0" : "#f00").html(json.info);
        //     });
        // });
        // $(".submit").click(function() {
        //     if ($('#title').val() == '') {
        //         popup.error('标题不能为空！');
        //         return false;
        //     }
        //     content.sync();
        //     commonAjaxSubmit("<?php echo ($action_url); ?>");
        //     return false;
        // });
    });
</script>

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				
				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
		<!-- <script src="/theguide/Common/js/jquery/jquery-2.0.3.min.js"></script> -->
		<script src="/theguide/Common/js/jquery/jquery-migrate-1.2.1.min.js"></script>
			
		<!-- <![endif]-->

		<!--[if IE]>
		<script src="/theguide/Common/js/jquery/jquery-1.10.2.min.js"></script>
		<script src="/theguide/Common/js/jquery/jquery-migrate-1.2.1.min.js"></script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='./Themes/Admin/Public/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="./Themes/Admin/Public/js/bootstrap.min.js"></script>
		<script src="./Themes/Admin/Public/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="./Themes/Admin/Public/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="./Themes/Admin/Public/js/ace-elements.min.js"></script>
		<script src="./Themes/Admin/Public/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script src="/theguide/Common/js/oscshop_common.js"></script>
		
								
				
	</body>
</html>