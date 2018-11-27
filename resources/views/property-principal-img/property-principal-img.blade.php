<div id="popular" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="img-quantity"><i class="far fa-images"> {%$propertyprincipalimg.priceBunddle.photos.length%}</i> </div>
		<div class="label-inner pl-2 rent-flag bg-primary">
			<span>{%$propertyprincipalimg.priceBunddle.property.negotiation.name%}</span>
		</div>
		<div class="carousel-item active">
			<a href="{%$propertyprincipalimg.priceBunddle.photos[0].img%}" class="fancybox" rel="ligthbox">
				<img class="d-block w-100 img-fluid img-rule" ng-src="{%$propertyprincipalimg.priceBunddle.photos[0].img%}" alt="{%$propertyprincipalimg.priceBunddle.photos[0].id%}">
			</a>
		</div>

		<div class="carousel-item" ng-repeat="photos in $propertyprincipalimg.priceBunddle.photos">
			<a href="{%photos.img%}" class="fancybox" rel="ligthbox">
				<img class="d-block w-100 img-fluid img-rule" ng-src="{%photos.img%}" alt="{%photos.id%}">
			</a>
		</div>
		<!--<div class="carousel-item">
			<img class="d-block w-100 img-fluid img-rule" src="https://www.modernhomesworldwide.com/p/w480/h320/aoe/zc/wp-content/uploads/2018/02/pga-catalunya-oak-villas-5.jpg" alt="Third slide">
		</div>-->
	</div>
  	<a class="carousel-control-prev" href="#popular" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#popular" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>