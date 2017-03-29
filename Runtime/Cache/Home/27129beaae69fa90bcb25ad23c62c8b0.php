<?php if (!defined('THINK_PATH')) exit(); if (!isset($redirect)) { ?>
<div class="table-responsive checkout-product">
  <table class="table table-bordered">
    <thead>
      <tr>
        <td class="name text-center">名称</td>
        <td class="model text-center">描述</td>
        <td class="quantity text-center">数量</td>
        <td class="price text-center">价格</td>
        <td class="total text-center">总计</td>
      </tr>
    </thead>
    <tbody>
    	<?php $t=0; ?>
      <?php foreach ($products as $product) { ?>
 	  <?php $t+=$product['total']; ?>
      <tr>
        <td class="name text-center">
        	<img src="/theguide/<?php echo ($product["image"]); ?>" />
   <!--      	<div>
				<?php foreach ($product['option'] as $option) { ?>
				<small><?php echo $option['name']; ?>: <?php echo $option['value']; ?></small><br />
				<?php } ?>

		 	 </div>-->

        </td>
        <td class="text-center"><a href="<?php echo U('/goods/'.$product['goods_id']);?>"><?php echo $product['name']; ?></a></td>
        <!--<td class="model"><?php echo $product['ms']; ?></td>-->
        <td class="quantity text-center"><?php echo $product['quantity']; ?></td>
        <td class="price text-center"><div class="price"><?php echo $product['price']; ?></div></td>
        <td class="total text-center"><div class="price"><?php echo $product['total']; ?></div></td>
      </tr>
      <?php } ?>

    </tbody>
    <tfoot>


 		<tr>
        <td colspan="4" class="price text-center"><h2 style="color: #C30005;">商品总价:</h2></td>
        <td class="total text-center"><div class="price"><?php echo '￥'.$t; ?></div></td>
      </tr>

      <!-- <tr>
        <td colspan="4" class="price"><b style="color: #C30005;">运费:</b></td>
        <td class="total"><div class="price"><?php echo '￥'.$sm['price']; ?></div></td>
      </tr> -->

      <tr>
        <td colspan="4" class="price text-center"><h2 style="color: #C30005;">总计:</h2></td>
        <td class="total"><div class="price text-center"><?php echo '￥'.($t+$sm['price']) ?></div></td>
      </tr>

    </tfoot>
  </table>
</div>
<div class="payment">
	<div class="buttons">
		<div class="right text-center" style="padding-bottom:10px;">
			<button onclick="window.location = '<?php echo U('Payment/pay',array('token'=>$token)); ?>'" class="btn btn-primary">下单</button>

		</div>
	</div>
</div>
<?php } else { ?>
<script type="text/javascript">
location = '<?php echo $redirect; ?>';
</script>
<?php } ?>