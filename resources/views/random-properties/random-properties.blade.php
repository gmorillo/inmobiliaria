<!-- LATEST-->
<div class="container-fluid my-5">
	<h1 class="text-center pt-5">Viviendas disponibles</h1>
	<hr style="width: 5%">
	<div class="row pt-5 pb-3" >
		<div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4" ng-repeat="rp in $randomproperties.randomproperties">
			<a href="">
				<div class="card" >
					<div class="img-quantity"><i class="far fa-images"></i> 5</div>
					<div id="{%rp.id%}" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="label-inner pl-2 {%rp.negotiation.name%}-flag flag-{%rp.negotiation.id%}">
								<span ng-click="$randomproperties.negotiationList()">{%rp.negotiation.name%}</span>
							</div>
							<div class="carousel-item active">
								<img class="d-block w-100 img-fluid img-rule" src="https://www.ebrosa.com/sites/default/files/styles/imagen_blog_full_480px/public/live-in-home-staging.jpg?itok=y4pM8NKX" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100 img-fluid img-rule" src="http://preview.uideck.com/items/brittville-demo/assets/img/property/house-1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100 img-fluid img-rule" src="https://www.modernhomesworldwide.com/p/w480/h320/aoe/zc/wp-content/uploads/2018/02/pga-catalunya-oak-villas-5.jpg" alt="Third slide">
							</div>
						</div>
					  	<a class="carousel-control-prev" href="#{%rp.id%}" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#{%rp.id%}" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>
					
					<div class="card-body">
						<h6 class="card-title truncate-title"><strong>{%rp.negotiation.name%} {%rp.housingtype.name%} en {%rp.address%}, {%rp.number%}</strong></h6>
						<small class="text-dark"><i class="fas fa-map-marker-alt"></i> {%rp.city%}, {%rp.cp%} </small>
						<hr>
						<p class="card-text truncate-description">{%rp.description%}</p>
						<div class="d-flex justify-content-between">
							<div ><h3 class="text-right">{%rp.price%} &euro;</h3></div>
							<div ><a href="/properties/detail/{%rp.id%}" class="btn btn-outline-primary btn-sm">Ver más</a></div>
						</div>
						<hr>
						<div class="row">
							<div class="col"><i class="fas fa-bed"></i> <strong>{%rp.habs%}</strong></div>
							<div class="col"><i class="fas fa-bath"></i> <strong>{%rp.bath%}</strong></div>
							<div class="col"><strong>{%rp.area%}m<sup>2</sup></strong></div>
							<div class="col"><i class="fas fa-building"></i> <strong>{%rp.floor%}</strong></div>
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
				<button class="btn btn-outline-primary btn-lg center">Ver todos</button>
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
