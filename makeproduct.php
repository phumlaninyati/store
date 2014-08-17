<div class="form product-create">
		<div class="page-title">
			<h3>Create Product</h3>
		</div>
		<div class="form-content">
			<form method="POST" action="createProductList.php" enctype="multipart/form-data">
				<div class="input-box">
					<label for="name">Product Name :</label>
					<input name="name" title="Product Name" value="<?php echo $productName; ?>" />
				</div>
				<div class="input-box">
					<label for="title">Title :</label>
					<input name="title" title="Product Title" value="<?php echo $productTitle; ?>" />				
				</div>				
				<div class="input-box">
					<label for="Description">Product Description :</label>
					<textarea name='description'><?php echo $productDescription; ?></textarea>			
				</div>
				<div class="input-box">
					<label for="Quantity">Quantity :</label>
					<input name="qty" title="" value="<?php echo $productQty; ?>" />				
				</div>
				<div class="input-box">
					<label for="price">Price :</label>
					<input name="price" title="Price" value="<?php echo $productPrice; ?>" />				
				</div>
				<?php if(empty($productImage)) { ?>
				<div class="input-box">
					<label for="price">Product Image :</label>
					<input class="inputform" type="file" name="userfile" />				
				</div>
				<?php }else{ ?>
					<img src="<?php echo $productImage; ?>" alt="<?php echo $productName; ?>" />
				<?php } ?>	
				<!--<div class="input-box">
					<label for=""></label>
					<input name="" title="" />				
				</div>-->
				<div class="button input">
					<input type="hidden" name="pid" value="<?php echo $pid; ?>" />
					<input class="button" type="submit" value="Create" name="create" />
					<input class="button <?php echo $editClass; ?>" type="submit" <?php echo $editClass; ?> value="Update" name="create" />
					<input class="button" type="submit" value="Delete" name="create" />
					<input class="inputform" type="hidden" name="MAX_FILE_SIZE" value="513024">
				</div>	
			</form>
		</div>