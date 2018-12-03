<!--<section>
	<div class="container-fluid my-5">
		<div class="pt-5">
			<script type="text/javascript" src="{{ asset('js/form-search.js') }}"></script>
			<div class="container bg-light">
				<div class="py-5">
					<form action="" >
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
						<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group"><input type="text" class="form-control"></div>
						</div>
						<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="form-control">
											<option>All Actions</option>
											<option>Rentals (12)</option>
											<option>Sales (17)</option>
										</select>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="form-control">
											<option>All Types</option>
											<option>Apartments (3)</option>
											<option>Houses (2)</option>
											<option>Condos (1)</option>
											<option>Industrial (2)</option>
											<option>Land (3)</option>
											<option>Offices (1)</option>
											<option>Retail (2)</option>
											<option>Villas (1)</option>
										</select>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="form-control">
											<option>All Cities</option>
											<option>New York</option>
											<option>California</option>
											<option>Washington</option>
											<option>Chicago</option>
											<option>Phoenix</option>
											<option>Birmingham</option>
										</select>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="form-control">
											<option>Bedrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
									<div class="form-group">
										<select class="form-control">
											<option>All Area</option>
											<option>San Jose</option>
											<option>Salt Lake City</option>
											<option>Las Vegas</option>
											<option>Boston</option>
											<option>Tampa</option>
											<option>Orlando</option>
										</select>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12">
									<div class="range-slider">
										<input class="range-slider__range" type="range" value="550" min="0" max="3000">
										<span class="range-slider__value">0</span>
									</div> 
								</div>
								<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
									<div class="form-group">
										<button type="button" class="btn btn-outline-primary form-control"><i class="lni-search"></i> Buscar</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>-->

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/form-search.css') }}">
@endsection

@section('scripts')

@endsection