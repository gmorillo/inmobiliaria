<div id="popular" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="img-quantity"><i class="far fa-images"> {%$propertyprincipalimg.priceBunddle.photos.length%}</i> </div>
		<div class="label-inner pl-2 rent-flag bg-primary">
			<span>{%$propertyprincipalimg.priceBunddle.property.negotiation.name%}</span>
		</div>
		<div class="carousel-item active">
			<img class="d-block w-100 img-fluid img-rule" ng-src="{%$propertyprincipalimg.priceBunddle.photos[0].img%}"  alt="{%$propertyprincipalimg.priceBunddle.photos[0].id%}">
		</div>

		<div class="carousel-item" ng-repeat="photos in $propertyprincipalimg.priceBunddle.photos">
			<img class="d-block w-100 img-fluid img-rule" ng-src="{%photos.img%}" alt="{%photos.id%}">
		</div>
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


