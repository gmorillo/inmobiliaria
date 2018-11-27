<div class="property-details">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-5 col-xs-12">
			<div class="info">
				<h3 class="badge rent bg-primary text-white d-xl-none d-lg-none d-md-block d-sm-block d-block text-center w-100">{%$propertyprice.priceBunddle.property.equipment_id%} </h3>
				<span class="h3">
					<strong>
						 {%$propertyprice.priceBunddle.property.negotiation.name%} de {%$propertyprice.priceBunddle.property.housingtype.name%} en {%$propertyprice.priceBunddle.property.address%}, {%$propertyprice.priceBunddle.property.city.name%}
					</strong> 
				</span> 
				<span class="badge rent bg-primary text-white ">
					<p class="d-xl-block d-lg-block d-md-none d-sm-none d-none m-0" >{%$propertyprice.priceBunddle.property.equipment.name%} </p>
				</span>
				<hr class="float-left" style="width: 45%">
			</div>
		</div>
		<div class="col-md-7 col-xs-12 d-xl-none d-lg-none d-md-block d-sm-block d-block">
			<div class="others">
				<h1 class="text-md-right text-sm-left">{%$propertyprice.priceBunddle.property.price%}  <i class="fas fa-euro-sign"></i></h1>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
			<div class="info">
				 <p class="room-type"><strong>{%$propertyprice.priceBunddle.property.propertytype.name%} | {%$propertyprice.priceBunddle.property.housingtype.name%}</strong></p>
				<p class="address"><i class="fas fa-map-marker-alt"></i> {%$propertyprice.priceBunddle.property.address%}, {%$propertyprice.priceBunddle.property.number%}</p>
			</div>
		</div>
		<div class="col-xl-5 col-lg-5 col-md-6 col-xs-12">
			<div class="row">
				<div class="col no-gutters text-center"><h3><i class="fas fa-bed"></i></h3>  <strong>{%$propertyprice.priceBunddle.property.habs%}</strong></div>
				<div class="col no-gutters text-center"><h3><i class="fas fa-bath"></i></h3> <strong>{%$propertyprice.priceBunddle.property.bath%}</strong></div>
				<div class="col no-gutters text-center"><h3><i class="fas fa-arrows-alt-h"></i></h3><strong>{%$propertyprice.priceBunddle.property.area%}m<sup>2</sup></strong></div>
				<div class="col no-gutters text-center"><h3><i class="fas fa-building"></i></h3> <strong title="Planta {%$propertyprice.priceBunddle.property.floor%}">{%$propertyprice.priceBunddle.property.floor%}</strong></div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-12 col-xs-12 d-xl-block d-lg-block d-md-none d-sm-none d-none">
			<div class="others">
				<h1 class="text-center"><strong>{%$propertyprice.priceBunddle.property.price%}</strong>  <i class="fas fa-euro-sign"></i></h1>
			</div>
		</div>
	</div>
</div>
