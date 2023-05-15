<?php
    require_once 'dbkonek.php' ;

    $sql = " SELECT * FROM produk";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

?>

	<?php
        include_once 'template/header.php';
    ?>
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-421575">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-421575" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-421575">
					</li>
					<li data-slide-to="2" data-target="#carousel-421575">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="https://thumbs.dreamstime.com/b/toy-shopping-cart-female-hand-trolley-over-blue-background-copy-space-text-design-shop-seamless-pattern-as-sale-151942207.jpg">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://gbhalloffame.ca/images/canadian-hall-of-fame-grocery-industry.jpg">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://thumbs.dreamstime.com/b/banner-black-sale-shopping-bags-flying-yellow-background-friday-creative-concept-idea-231624369.jpg">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-421575" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-421575" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
	<div class="row mt-5">

		<?php
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
        ?>

		<div class="col-md-3 text-center mt-5 ">
			<div class="card" >
 				<img src="https://www.icontime.com/wp-content/uploads/2018/11/advanced-pack-icon-500x500@2x-01.png" class="card-img-top" alt="...">
  				<div class="card-body mt-5">
    				<h5 class="card-title"> <?=  $row['nama']   ?> </h5>
					<h5 class="card-title"> Rp. <?=  number_format($row['harga_jual'], 0, ',', '.')    ?> </h5>
    				<p class="card-text"> <?=  $row['deskripsi']   ?> </p>
					<p class="card-text"> Stok : <?=  $row['stok']   ?> </p>
    				<a href="order.php?id=<?= $row['id'] ?>" class="btn btn-primary">ORDER</a>
  				</div>
			</div>
		</div>

		<?php    
            endwhile;
        ?>
		
	</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>