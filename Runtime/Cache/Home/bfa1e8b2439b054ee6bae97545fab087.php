<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ((isset($title) && ($title !== ""))?($title):''); echo C('SITE_TITLE'); ?></title>
  <meta name="keywords" content="<?php echo ((isset($meta_keywords) && ($meta_keywords !== ""))?($meta_keywords):''); ?>" />
  <meta name="description" content="<?php echo ((isset($meta_description) && ($meta_description !== ""))?($meta_description):''); ?>" />
  <link type="image/x-icon" href="/theguide/<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="icon">
  <link type="image/x-icon" href="/theguide/<?php echo resize(C('SITE_ICON'),16,16); ?>" rel="bookmark">

  <link href="/theguide/Common/bt/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="/theguide/Themes/Home/default/Public/css/style.css" rel="stylesheet" type="text/css">   -->
  <script src="/theguide/Common/js/jquery/jquery-1.10.2.min.js"></script>
  <script src="/theguide/Common/js/jquery/jquery-migrate-1.2.1.min.js"></script>
  <script src="/theguide/Common/bt/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/theguide/Themes/Home/default/Public/css/style.css"/>
  <link rel="stylesheet" href="/theguide/Themes/Home/default/Public/css/default.css"/>
	<link rel="stylesheet" href="/theguide/Themes/Home/default/Public/css/bootstrap.css">
  <link rel="stylesheet" href="/theguide/Themes/Home/default/Public/css/main.css">
  <link rel="stylesheet" href="/theguide/Themes/Home/default/Public/css/animation.css">

 
</head>
<body>
<header class="navbar navbar-default navbar-fixed-top" style="border-bottom:1px solid red; height:100px;">
  <div class="container" style="padding-right:0;padding-left:0;box-sizing:border-box">
    <nav class="navbar navbar-default">
      <div class="container-fluid" style="padding-right:0;padding-left:0;box-sizing:border-box">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" style="margin-right:15px;margin-left:15px;box-sizing:border-box">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="/theguide/Themes/Home/default/Public/images/logo.png" alt=""></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right" style="margin:0;">
                  <li><a href="/theguide/">首页</a></li>
                  <li><a href="<?php echo U('/profile');?>">公司简介</a></li>
                  <li><a href="<?php echo U('/goods');?>">产品中心</a></li>
                  <li><a href="<?php echo U('/question');?>">常见问题</a></li>
                  <li><a href="<?php echo U('/news');?>">公司公告</a></li>
                  <li><a href="<?php echo U('/contact');?>">联系我们</a></li>

                  <li><strong><a class="btn btn-default" href="<?php echo U('/register');?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>注册</a></strong></li>

                  <?php if(is_login()){ ?>
                  <li><strong><a class="btn btn-default" href="<?php echo U('/information');?>"><?php echo session('user_auth.username') ?></a></strong></li>
                  <?php }else{ ?>

                  <li><strong><a class="btn btn-default" href="<?php echo U('/login');?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>登录</a></strong></li>
                  <?php } ?>
				  <li><strong><a class="btn btn-default" href="<?php echo U('/cart');?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					  <span id="cart-total"> <?php $t=session('cart_total');if(isset($t)){echo $t;}else{echo 0;} ?> </span></a></strong>
				  </li>
              </ul>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</header>





<div id="checkout-box" class="container">
<div class="container">
	<div class="row" style="padding-top:100px;">
		<div class="col-sm-12">
			<h1>商品结算</h1>
		</div>
		<div id="content" class="col-md-12 col-sm-12 col-xs-12">
		  <div class="checkout">
		    <div id="checkout" class="panel panel-default">
		      <div class="checkout-heading panel-heading"><span>步骤1：结算选项</span></div>
		      <div class="checkout-content row panel-body"></div>
		    </div>
		    <?php if(!is_login()){ ?>
		    <div id="account">
			 <div  class="panel panel-default">
				  <div class="checkout-heading panel-heading"><span>步骤2： 账户 &amp; 详细</span></div>
				  <div class="checkout-content"></div>
			 </div>
		    </div>
		     
		     <?php }else{ ?>
		    <div id="account">
				<div  class="panel panel-default">
				  <div class="checkout-heading panel-heading"><span>步骤2： 账户 &amp; 详细</span></div>
				  <div class="checkout-content"></div>
				</div>
		    </div>    
		    <?php } ?>
		    
		    <?php if ($shipping_required) { ?>
		    <div id="shipping-address">
				<div  class="panel panel-default">
				  <div class="checkout-heading panel-heading"><span>步骤3：发票邮寄地址及抬头</span></div>
				  <div class="checkout-content"></div>
				</div>
		    </div>
		    <div id="shipping-method">
				<div  class="panel panel-default">
				  <div class="checkout-heading panel-heading"><span>步骤4：订单备注</span></div>
				  <div class="checkout-content"></div>
				</div>
		    </div>
		    <?php } ?>
		    <div id="payment-method">
				<div  class="panel panel-default">
				  <div class="checkout-heading panel-heading"><span>步骤5：支付方式</span></div>
				  <div class="checkout-content"></div>
				</div>
		    </div>
		    <div id="confirm">
				<div  class="panel panel-default">
				  <div class="checkout-heading panel-heading"><span>步骤6：完成订单</span></div>
				  <div class="checkout-content"></div>
				</div>
		    </div>
		  </div>		
		</div>
		</div>
	</div>
	</div>


<script>
//登录选项
<?php if (!is_login()) { ?> 
//未登录
$(document).ready(function() {
		$.ajax({
			url: '<?php echo U("/c_login");?>',
			dataType: 'html',
			success: function(html) {
			//	alert(html);
				$('#checkout .checkout-content').html(html);
					
				$('#checkout .checkout-content').slideDown('slow');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});	

});		
<?php } else { ?>
//已经登录
$(document).ready(function() {	
		$.ajax({
			url: '<?php echo U("/shipping_address");?>',
			dataType: 'html',
			success: function(html) {
				$('#shipping-address .checkout-content').html(html);
				
			//	$('#payment-address .checkout-content').slideUp('slow');
				
				$('#shipping-address .checkout-content').slideDown('slow');
				
				$('#checkout .checkout-heading a').remove();
			//$('#payment-address .checkout-heading a').remove();
				$('#shipping-address .checkout-heading a').remove();
				$('#shipping-method .checkout-heading a').remove();
				$('#payment-method .checkout-heading a').remove();							

			//$('#payment-address .checkout-heading').append('<a>修改</a>');	
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});		
});
<?php } ?>	
//div下滑效果
$('.checkout-heading a').live('click', function() {
	$('.checkout-content').slideUp('slow');
	
	$(this).parent().parent().find('.checkout-content').slideDown('slow');
});
//结算选择
$('#button-account').live('click', function() {
	
	$.ajax({
		url: "<?php echo U('/c_user','',''); ?>"+'/' + $('input[name=\'account\']:checked').attr('value'),
		dataType: 'html',
		beforeSend: function() {
			$('#button-account').attr('disabled', true);
			$('#button-account').after('<span class="wait">&nbsp;<img src="/theguide/Themes/Home/default/Public/images/loading2.gif" alt="" /></span>');
		},		
		complete: function() {
			$('#button-account').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(html) {
			$('.warning, .error').remove();
			
			$('#account .checkout-content').html(html);
				
			$('#checkout .checkout-content').slideUp('slow');
				
			$('#account .checkout-content').slideDown('slow');
				
			$('.checkout-heading a').remove();
				
			$('#checkout .checkout-heading').append('<a>更新 &raquo;</a>');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

// 登录
$('#button-login').live('click', function() {
	$.ajax({
		url: '<?php echo U("/validate_login");?>',
		type: 'post',
		data: $('#checkout #login :input'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-login').attr('disabled', true);
			$('#button-login').after('<span class="wait">&nbsp;<img src="/theguide/Themes/Home/default/Public/images/loading2.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-login').attr('disabled', false);
			$('.wait').remove();
		},				
		success: function(json) {
			$('.warning, .error').remove();
			$('.usering, .error').remove();
			$('.codeing, .error').remove();
			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				if(json['error']['warning']){
					$('#login').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '</div>');
					$('.warning').fadeIn('slow');
				}else{
					$('#login').prepend('<div class="warning" style="display: none;">' + '' + '</div>');
				}
				if(!json['error']['usering']){
					$('#login').prepend('<div class="warning" style="display: none;">' + ''+ '</div>');
				}else{
					$('#login').prepend('<div class="warning" style="display: none;">' + json['error']['usering'] + '</div>');
					$('.warning').fadeIn('slow');
				}
				if(!json['error']['codeing']){
					$('#login').prepend('<div class="warning" style="display: none;">' + ''+ '</div>');
				}else{
					$('#login').prepend('<div class="warning" style="display: none;">' + json['error']['codeing'] + '</div>');
					$('.warning').fadeIn('slow');
				}
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});


//注册
$('#button-register').live('click', function() {

	var select2_chosen_1=$('#select2-chosen-1').html(); //省份
    var select2_chosen_2=$('#select2-chosen-2').html(); //城市
    var select2_chosen_3=$('#select2-chosen-3').html(); //区县

    // $('#loc_province_ok').val(select2_chosen_1);
    // $('#loc_city_ok').val(select2_chosen_2);
    // $('#loc_town_ok').val(select2_chosen_3);

    $("input[name='loc_province']").val(select2_chosen_1);
    $("input[name='loc_city']").val(select2_chosen_2);
    $("input[name='loc_town']").val(select2_chosen_3);

	$.ajax({
		url: '<?php echo U("/c_register");?>',
		type: 'post',
		data: $('#account input[type=\'text\'], #account input[type=\'password\'], #account input[type=\'checkbox\']:checked, #account input[type=\'radio\']:checked, #account input[type=\'hidden\'], #account select'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-register').attr('disabled', true);
			$('#button-register').after('<span class="wait">&nbsp;<img src="/theguide/Themes/Home/default/Public/images/loading2.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-register').attr('disabled', false); 
			$('.wait').remove();
		},			
		success: function(json) {
			$('.warning, .error').remove();
						
			if (json['redirect']) {
				location = json['redirect'];				
			} else if (json['error']) {
				if (json['error']['warning']) {
					$('#account .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="/theguide/Themes/Home/default/Public/images/close.png" alt="" class="close" /></div>');
					
					$('.warning').fadeIn('slow');
				}
				
				if (json['error']['uname']) {
					$('#account input[name=\'uname\']').parent().next().append('<span class="error">' + json['error']['uname'] + '</span>');
				}
				if (json['error']['name']) {
					$('#account input[name=\'name\']').parent().next().append('<span class="error">' + json['error']['name'] + '</span>');
				}	
				if (json['error']['id_card']) {
					$('#account input[name=\'id_card\']').parent().next().append('<span class="error">' + json['error']['id_card'] + '</span>');
				}		
				if (json['error']['email']) {
					$('#account input[name=\'email\']').parent().next().append('<span class="error">' + json['error']['email'] + '</span>');
				}
				
				if (json['error']['telephone']) {
					$('#account input[name=\'telephone\']').parent().next().append('<span class="error">' + json['error']['telephone'] + '</span>');
				}		


				if (json['error']['loc_province']) {
					$('#account input[name=\'address\']').parent().next().append('<span class="error">' + json['error']['loc_province'] + '</span>');
				}
				if (json['error']['loc_city']) {
					$('#account input[name=\'address\']').parent().next().append('<span class="error">' + json['error']['loc_city'] + '</span>');
				}
				if (json['error']['loc_town']) {
					$('#account input[name=\'address\']').parent().next().append('<span class="error">' + json['error']['loc_town'] + '</span>');
				}														
				if (json['error']['address']) {
					$('#account input[name=\'address\']').parent().next().append('<span class="error">' + json['error']['address'] + '</span>');
				}					
		
				if (json['error']['password']) {
					$('#account input[name=\'password\']').parent().next().append('<span class="error">' + json['error']['password'] + '</span>');
				}	
				
				if (json['error']['confirm']) {
					$('#account input[name=\'confirm\']').parent().next().append('<span class="error">' + json['error']['confirm'] + '</span>');
				}	

				if (json['error']['idcadeimage1']) {
					$('.account_error').append('<span class="error">' + json['error']['idcadeimage1'] + '</span>');
				}

				if (json['error']['mobile_code']) {
                    $('#account input[name=\'mobile_code\']').parent().next().next().append('<span class="error">' + json['error']['mobile_code'] + '</span>');
                }
				// if (json['error']['area']) {
				// 	$('#area + br').after('<span class="error">' + json['error']['area'] + '</span>');
				// }
																																			
			} else {
				//需要送货的商品
				<?php if ($shipping_required) { ?>				
				//送货地址
					$.ajax({
						url: '<?php echo U("/shipping_address");?>',
						dataType: 'html',
						success: function(html) {
							$('#shipping-address .checkout-content').html(html);
							
							$('#account .checkout-content').slideUp('slow');
							
							$('#shipping-address .checkout-content').slideDown('slow');
							
							$('#checkout .checkout-heading a').remove();
							$('#account .checkout-heading a').remove();
							$('#shipping-address .checkout-heading a').remove();
							$('#shipping-method .checkout-heading a').remove();
							$('#payment-method .checkout-heading a').remove();							

						//$('#payment-address .checkout-heading').append('<a>修改</a>');	
						},
						
						error: function(xhr, ajaxOptions, thrownError) {
							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
						}
					});			
				
				//不需要送货的商品
				<?php } else { ?>
				$.ajax({
					url: "<?php echo U('/payment_method');?>",
					dataType: 'html',
					success: function(html) {
						$('#payment-method .checkout-content').html(html);
						
						$('#account .checkout-content').slideUp('slow');
						
						$('#payment-method .checkout-content').slideDown('slow');
						
						$('#checkout .checkout-heading a').remove();
						$('#account .checkout-heading a').remove();
						$('#payment-method .checkout-heading a').remove();								
						
						$('#account .checkout-heading').append('<a>修改</a>');	
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});					
				<?php } ?>

			}	 
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});
//收货地址
$('#button-shipping-address').live('click', function() {
	$.ajax({
		url: '<?php echo U("/validate_shipping_address");?>',
		type: 'post',
		data: $('#shipping-address input[type=\'text\'],#shipping-address input[type=\'hidden\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-shipping-address').attr('disabled', true);
			$('#button-shipping-address').after('<span class="wait">&nbsp;<img src="/theguide/Themes/Home/default/Public/images/loading2.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-shipping-address').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(json) {
			$('.warning, .error').remove();
			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				if (json['error']['warning']) {
					$('#shipping-address .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="/theguide/Themes/Home/default/Public/images/close.png" alt="" class="close" /></div>');
					
					$('.warning').fadeIn('slow');
				}
								
				if (json['error']['name']) {
					$('#shipping-address input[name=\'name\']').after('<span class="error">' + json['error']['name'] + '</span>');
				}				
				
				if (json['error']['telephone']) {
					$('#shipping-address input[name=\'telephone\']').after('<span class="error">' + json['error']['telephone'] + '</span>');
				}		
										
				if (json['error']['address']) {
					$('#shipping-address input[name=\'address\']').after('<span class="error">' + json['error']['address'] + '</span>');
				}	
				if (json['error']['invoice']) {
					$('#shipping-address input[name=\'invoice\']').after('<span class="error">' + json['error']['invoice'] + '</span>');
				}	
			
				
			} else {
				$.ajax({
					url: '<?php echo U("/shipping_method");?>',
					dataType: 'html',
					success: function(html) {
						$('#shipping-method .checkout-content').html(html);
						
						$('#shipping-address .checkout-content').slideUp('slow');
						
						$('#shipping-method .checkout-content').slideDown('slow');
						
						$('#shipping-address .checkout-heading a').remove();
						$('#shipping-method .checkout-heading a').remove();
						$('#payment-method .checkout-heading a').remove();
						
						$('#shipping-address .checkout-heading').append('<a>修改</a>');							
						
						$.ajax({
							url: '<?php echo U("/shipping_address");?>',
							dataType: 'html',
							success: function(html) {
								$('#shipping-address .checkout-content').html(html);
							},
							error: function(xhr, ajaxOptions, thrownError) {
								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
							}
						});
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});	
					
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});
//订单备注
$('#button-shipping-method').live('click', function() {
	$.ajax({
		url: '<?php echo U("/validate_shipping_method");?>',
		type: 'post',
		data: $('#shipping-method input[type=\'radio\']:checked, #shipping-method textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-shipping-method').attr('disabled', true);
			$('#button-shipping-method').after('<span class="wait">&nbsp;<img src="/theguide/Themes/Home/default/Public/images/loading2.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-shipping-method').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(json) {
			$('.warning, .error').remove();
			
			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				if (json['error']['warning']) {
					$('#shipping-method .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="/theguide/Themes/Home/default/Public/images/close.png" alt="" class="close" /></div>');
					
					$('.warning').fadeIn('slow');
				}			
			} else {
				$.ajax({
					url: '<?php echo U("/payment_method");?>',
					dataType: 'html',
					success: function(html) {
						$('#payment-method .checkout-content').html(html);
						
						$('#shipping-method .checkout-content').slideUp('slow');
						
						$('#payment-method .checkout-content').slideDown('slow');

						$('#shipping-method .checkout-heading a').remove();
						$('#payment-method .checkout-heading a').remove();
						
						$('#shipping-method .checkout-heading').append('<a>修改</a>');	
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});					
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});
//支付方式
$('#button-payment-method').live('click', function() {
	$.ajax({
		url: '<?php echo U("/validate_payment_method");?>', 
		type: 'post',
		data: $('#payment-method input[type=\'radio\']:checked, #payment-method input[type=\'checkbox\']:checked'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-payment-method').attr('disabled', true);
			$('#button-payment-method').after('<span class="wait">&nbsp;<img src="/theguide/Themes/Home/default/Public/images/loading2.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-payment-method').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(json) {
			$('.warning, .error').remove();
			
			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				if (json['error']['warning']) {
					$('#payment-method .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="/theguide/Themes/Home/default/Public/images/close.png" alt="" class="close" /></div>');
					
					$('.warning').fadeIn('slow');
				}			
			} else {
				$.ajax({
					url: '<?php echo U("/confirm");?>',
					dataType: 'html',
					success: function(html) {
						$('#confirm .checkout-content').html(html);
						
						$('#payment-method .checkout-content').slideUp('slow');
						
						$('#confirm .checkout-content').slideDown('slow');
						
						$('#payment-method .checkout-heading a').remove();
						
						$('#payment-method .checkout-heading').append('<a>修改</a>');	
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});	
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});
</script>