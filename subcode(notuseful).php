<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						
						<?php
	    									$conn=mysqli_connect("localhost","root","","EGroceryStore1");
											if($conn==false)
											{
												die("Error: Could not connect to database.".mysqli_connect_error());
											}
											$sql="SELECT * FROM Products WHERE category_name='Fruits & Vegetables'";
											$result=$conn->query($sql);
											if($result->num_rows>0)
											{
												while($row=$result->fetch_assoc())
											{
											?>
				<div class="agile_top_brands_grids">
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
											
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<!--<form action="single.php?action=sendsingle&product_id=<?php //echo $row["product_id"]?>">
												</form>-->
												<a href="single.php?action=sendsingle&product_id=<?php echo $row["product_id"]?>" type="submit" target="_blank"><?php echo "<img src='ProductImages/".$row['product_image']."'width=232 height=200>"; ?></a>	
												
												<p><?php echo "Product Name:".$row["product_name"]; ?></p>
												<h4><?php echo "Price:".$row["price"]; ?></h4>
												
											</div>
											<div class="snipcart-details top_brand_home_details">
													<form action="cart.php?action=add&id=<?php echo $row["product_id"] ?>&product_name=<?php echo $row["product_name"]?>&price=<?php echo $row["price"] ?>&product_image=<?php echo $row["product_image"] ?>" method="post">
							
													<fieldset>
														
														<input type="submit" name="add_to_cart" value="Add to cart" class="button">
													</fieldset>
													</form>					
											</div>
										</div>
									
									</figure>
								</div>

							</div>
							
							
						</div>

					</div>
				</div>
				<?php
										}
									}
									else
									{
										echo "0 Results";
									}
									?>
						<div class="clearfix"> </div>
					</div>
				</div>
						<div class="clearfix"> </div>
				</div><!--<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>-->