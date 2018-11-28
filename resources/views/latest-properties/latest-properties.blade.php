<!-- LATEST-->
<div class="container-fluid my-5">
	<h1 class="text-center pt-5">Añadidos reciente</h1>
	<hr style="width: 5%">
	<div class="row pt-5 pb-3" >
		<div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4" ng-repeat="lp in $latestproperties.latestproperties">
			<a href="">
				<div class="card" >
					<!--<div class="img-quantity"><i class="far fa-images"></i> {%lp.photos.length%}</div>-->
					<div id="{%lp.id%}" class="carousel slide" data-ride="carousel">
						
						<div class="carousel-inner">
							<a href="/properties/detail/{%lp.id%}">
								<div class="label-inner pl-2 flag-5">
									<span ng-click="$latestproperties.negotiationList()">{%lp.negotiation.name%}</span>
								</div>
								<div class="carousel-item active">
									<img class="d-block w-100 img-fluid img-rule " ng-src="{%lp.photos.img%}" >
								</div>
								<!--<div class="carousel-item" ng-repeat="photos in lp.photos">
									<img class="d-block w-100 img-fluid img-rule"  ng-src="{%photos.img%}">
								</div>-->
							</a>
						</div>
					  	<!--<a class="carousel-control-prev" href="#{%lp.id%}" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#{%lp.id%}" role="button" data-slide="next" ng-click="$latestproperties.loadOtherImages(lp.id)">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>-->
					</div>
					
					<div class="card-body">
						<h6 class="card-title truncate-title"><a href="/properties/detail/{%lp.id%}"><strong>{%lp.negotiation.name%} {%lp.housingtype.name%} en {%lp.address%}, {%lp.number%}</strong></a></h6>
						<small class="text-dark"><i class="fas fa-map-marker-alt"></i> {%lp.city.name%}, {%lp.cp%} </small>
						<hr>
						<p class="card-text truncate-description">{%lp.description%}</p>
						<div class="d-flex justify-content-between">
							<div ><h3 class="text-right">{%lp.price%} &euro;</h3></div>
							<div ><a href="/properties/detail/{%lp.id%}" class="btn btn-outline-primary btn-sm">Ver más</a></div>
						</div>
						<hr>
						<div class="row">
							<div class="col"><i class="fas fa-bed"></i> <strong>{%lp.habs%}</strong></div>
							<div class="col"><i class="fas fa-bath"></i> <strong>{%lp.bath%}</strong></div>
							<div class="col"><strong>{%lp.area%}m<sup>2</sup></strong></div>
							<div class="col"><i class="fas fa-building"></i> <strong>{%lp.floor%}</strong></div>
						</div>
					</div>
				</div>
			</a>
			<script type="text/javascript">
	        	$('.carousel').carousel({
				    interval: false
			  	})
	        </script>
		</div>
	</div>
	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="">
				<a href="/properties/all-properties" class="btn btn-outline-primary btn-lg center">Ver todos</a>
			</div>
		</div>
	</div>
</div>

<style>
	.truncate-description {
	  -webkit-line-clamp: 5;
	  overflow : hidden;
	  text-overflow: ellipsis;
	  display: -webkit-box;
	  -webkit-box-orient: vertical;
	}
	.truncate-title {
	  -webkit-line-clamp: 2;
	  overflow : hidden;
	  text-overflow: ellipsis;
	  display: -webkit-box;
	  -webkit-box-orient: vertical;
	}
	.carousel-control-next {
    right: 0px;
    max-height: 192px;
}
.carousel-control-prev{
    left: 0px;
    max-height: 192px;
}

.img-rule {
    max-height: 192px!important;
      object-fit: cover;
  }

</style>

@section('scripts')
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        
@endsection
