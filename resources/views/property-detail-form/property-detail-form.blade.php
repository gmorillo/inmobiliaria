<form name="propertyDetailForm" method="post" role="form" ng-submit="$propertydetailform.sendForm($event,propertyDetailForm)">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<div class="widget mt3 d-xl-block d-lg-block d-md-block d-sm-none d-none">
		<div class="agent-inner">
			<div class="agent-title">
				<div class="agent-photo">
					<img src="http://preview.uideck.com/items/brittville-demo/assets/img/productinfo/agent.jpg" alt="">
				</div>
				<div class="agent-details">
					<h4 class="text-primary">{%$propertydetailform.priceBunddle.property.user.name%}</h4>
					<span style="letter-spacing: 0.1rem;" class="text-uppercase"><i class="fas fa-phone fa-rotate-90"></i> {%$propertydetailform.priceBunddle.property.user.phone%}</span>
				</div>
			</div>
			<div class="mt-3">

				<input ng-model="$propertydetailform.priceBunddle.property.user.id" name="user_id" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.user.name" name="agent-name" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.id" name="propertyid" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.price" name="propertyPrice" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.address" name="address" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.number" name="addressNumber" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.city.name" name="city" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.cp" name="cp" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.habs" name="habs" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.bath" name="bath" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.description" name="description" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.equipment.name" name="equipment" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.user.phone" name="agent_phone" type="text" class="form-control" hidden="hidden">
				<input ng-model="$propertydetailform.priceBunddle.property.user.email" name="email-agent" type="text" class="form-control" hidden="hidden">

				<input ng-model="$propertydetailform.name" name="name" type="text" class="form-control" placeholder="Nombre y apellido">
				<input ng-model="$propertydetailform.emailcontact" name="emailcontact" type="text" class="form-control" placeholder="Correo electrónico">
				<input ng-model="$propertydetailform.phone" name="phone" type="text" class="form-control" placeholder="Móvil">
			</div>
			<textarea ng-model="$propertydetailform.message" name="message" class="w-100 form-control" rows="8" placeholder="Escriba su mensaje"></textarea>
			<div class="g-recaptcha" data-sitekey="6LejyzIUAAAAAF6AxcSKsulsDiHMc-YJC-HeldIh"></div>
			<input type="submit" class="btn btn-outline-primary w-100 mt-4" ></input>
		</div>
	</div>

</form>



<div class="fixed-bottom d-xl-none d-lg-block d-md-block d-sm-block d-block">
	<a href="tel:{%$propertydetailform.priceBunddle.property.user.phone%}" class="btn btn-primary w-100 btn-lg"><i class="fas fa-phone fa-rotate-90"></i> Contactar</a>
</div>


