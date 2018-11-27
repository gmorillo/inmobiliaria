<div class="sidebar sticky right sidebarfilter-inner" >
	<div class="widget">
		<h6 class="mt-3"><strong>Ciudad</strong></h6>
		<div class="row with-forms">
			<div class="col-md-12">
				<select 
					class="form-control classic"
					name="city"
					ng-options="option.name for option in $filterinlist.datafilter.city track by option.id"
					ng-model="$filterinlist.cityselected"
					ng-change="$filterinlist.filterCity($filterinlist.cityselected)"
	            >
				</select>
				<input type="text"   ng-model="$filterinlist.cityselected.id" name="propertytypeselected">
			</div>
		</div>
		<div class="row">
			<div class="more-search-options col-xl-6 col-lg-4 col-md-4 col-sm-12 col-12">
				<h3 class="sidebar-title text-primary"><strong>Tipo de vivienda</strong></h3>
				<div class="checkboxes one-in-row">
					<span ng-repeat="housingtype in $filterinlist.datafilter.housingtype track by $index">
						<input id="{%housingtype.name%}" type="checkbox" name="selectedhousingtype[]"
								ng-checked="$filterinlist.indexOf[housingtype]" ng-click="$filterinlist.housingTypeSelection(housingtype, $filterinlist.datafilter.housingtype)">
						<label for="{%housingtype.name%}">{%housingtype.name%}</label>
					</span>
				</div>
			</div>
			<div class="more-search-options col-xl-6 col-lg-4 col-md-4 col-sm-12 col-12">
				<h3 class="sidebar-title text-primary"><strong>Negociación</strong></h3>
				<div class="checkboxes one-in-row">
					<span ng-repeat="negotiation in $filterinlist.datafilter.negotiation track by $index">
						<input id="{%negotiation.name%}" type="checkbox" name="selectedNegotiation[]" 
								ng-checked="$filterinlist.indexOf[negotiation]" ng-click="$filterinlist.toggleSelection(negotiation, $filterinlist.datafilter.negotiation)">
						<label for="{%negotiation.name%}">{%negotiation.name%}</label>
					</span>
				</div>
			</div>
			<div class="more-search-options col-xl-12 col-lg-4 col-md-4 col-sm-12 col-12 d-xl-none d-lg-block d-md-block d-sm-none d-none">
				<h3 class="sidebar-title text-primary"><strong>Características</strong></h3>
				<div class="checkboxes one-in-row">
					<input id="Admite-mascotas" type="checkbox" name="check">
					<label for="Admite-mascotas">Admite mascotas</label>
					<input id="Aire-acondicionado" type="checkbox" name="check">
					<label for="Aire-acondicionado">Aire acondicionado</label>
					<input id="Armarios-empotrados" type="checkbox" name="check">
					<label for="Armarios-empotrados">Armarios empotrados</label>
					<input id="Ascensor" type="checkbox" name="check">
					<label for="Ascensor">Ascensor</label>
					<input id="Garaje" type="checkbox" name="check">
					<label for="Garaje">Garaje</label>
					<input id="Piscina" type="checkbox" name="check">
					<label for="Piscina">Piscina</label>
					<input id="Terraza" type="checkbox" name="check">
				 	<label for="Terraza">Terraza</label>
				</div>
			</div>
		</div>
		<h6 class="mt-3"><strong>Tipo de inmueble</strong></h6>
		<div class="row with-forms">
			<div class="col-md-12">
				<select 
					class="form-control classic"
					name="propertytype"
					ng-options="option.name for option in $filterinlist.datafilter.propertytype track by option.id"
					ng-model="$filterinlist.propertytypeselected"
	            >
				</select>
				<input type="text"   ng-model="$filterinlist.propertytypeselected.id" name="propertytypeselected">
			</div>
		</div>
		<div class="row">

			<div class="col">
				<h6 class="mt-3"><strong>Precio Máximo</strong></h6>
				<div class="range-slider">
					<input class="range-slider__range" type="range" ng-model="$filterinlist.datafilter.price"  value="{%$filterinlist.datafilter.minprice.price%}" min="0" max="{%$filterinlist.datafilter.maxprice.price%}">
					<span class="range-slider__value">0</span>
				</div>
				<input type="text"   ng-model="$filterinlist.datafilter.price" name="minpriceselected">
			</div>
			<!--<div class="col-md-6">
				<h6 class="mt-3"><strong>Precio Mínimo</strong></h6>
				<select 
					class="form-control classic"
					name="propertytype"
					ng-options="option.price for option in $filterinlist.datafilter.minprice track by option.price"
					ng-model="$filterinlist.property"
	            >
				</select>
				<input type="text"   ng-model="$filterinlist.property.price" name="minpriceselected">
			</div>
			<div class="col-md-6">
				<h6 class="mt-3"><strong>Precio Máximo</strong></h6>
				<select 
					class="form-control classic"
					name="propertytype"
					ng-options="option.price for option in $filterinlist.datafilter.maxprice track by option.price"
					ng-model="$filterinlist.property"
	            >
				</select>
				<input type="text"  ng-model="$filterinlist.property.price" name="maxpriceselected">
			</div>-->
		</div>
		<div class="row with-forms">
			<div class="col-md-12">
				<h6 class="mt-4 mb-2"><strong>Equipamiento</strong></h6>
				<select 
					class="form-control classic"
					name="equipment"
					ng-options="option.name for option in $filterinlist.datafilter.equipment track by option.id"
					ng-model="$filterinlist.equipmentselected"
	            >
				</select>
				<input type="text"  ng-model="$filterinlist.equipmentselected.id" name="equipmentselected">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h6 class="mt-2"><strong>Habitaciones</strong></h6>
				<select 
					class="form-control classic"
					name="propertyhabs"
					ng-options="option.habs for option in $filterinlist.datafilter.propertyhabs track by option.habs"
					ng-model="$filterinlist.propertyhabs"
	            >
				</select>
				<input type="text"   ng-model="$filterinlist.propertyhabs.habs" name="propertyhabsselected">
			</div>
			<div class="col-md-6">
				<h6 class="mt-2"><strong>Baños</strong></h6>
				<select 
					class="form-control classic"
					name="propertybath"
					ng-options="option.bath for option in $filterinlist.datafilter.propertybath track by option.bath"
					ng-model="$filterinlist.propertybath"
	            >
				</select>
				<input type="text"   ng-model="$filterinlist.propertybath.bath" name="propertyhabsselected">
			</div>
		</div>

		<h3 class="sidebar-title text-primary mt-4"><strong>Fecha de publicación</strong></h3>
		<div class="row with-forms">
			<div class="col-md-12">
			<select class="classic">
				<option>Seleccionar fecha de publicación</option>
				<option value="Indiferente">Indiferente</option>
				<option value="Últimas 24 Horas">Últimas 24 Horas</option>
				<option value="Ultima Semana">Ultima Semana</option>
				<option value="Último mes">Último mes</option>
			</select>
			</div>
		</div>
		<div class="more-search-options d-xl-block d-lg-none d-md-none d-sm-block d-block">
			<h3 class="sidebar-title text-primary"><strong>Características</strong></h3>
			<div class="checkboxes">
				<div class="row">
					<div class="col-6" ng-repeat="characteristics in $filterinlist.datafilter.characteristics track by $index">
						<input 
							id="{%characteristics.name%}" 
							type="checkbox" 
							name="selectedCharacteristics[]" 
							ng-checked="$filterinlist.indexOf[characteristics]" 
							ng-click="$filterinlist.characteristicsSelection(characteristics, $filterinlist.datafilter.characteristics)"
						>
						<label for="{%characteristics.name%}">{%characteristics.name%}</label>
					</div>
				</div>
			</div>
		</div>
		<button class=" btn btn-outline-primary btn-md w-100 ">Aplicar filtros</button>
	</div>
</div>
<style>
	.sticky .widget select {
    position: relative;
    display: block;
    overflow: hidden;
    padding: 0 0 0 18px;
    height: 48px;
    margin-bottom: 20px;
    border: 1px solid #e5e5e5;
    background-color: #fcfcfc;
    color: #888;
    text-decoration: none;
    white-space: nowrap;
    font-weight: 500;
    border-radius: 30px;
    width: 100%;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
	}

	select.classic {
	    background-image: linear-gradient(45deg,transparent 50%,#272727 50%),linear-gradient(135deg,#272727 50%,transparent 50%);
	    background-position: calc(100% - 20px) calc(15px + 5px),calc(100% - 15px) calc(15px + 5px),100% 0;
	    background-size: 5px 5px,5px 5px;
	    background-repeat: no-repeat;
	}

	select {
	    border: 0;
	    border-radius: 0;
	    font-size: 14px;
	    width: 100%;
	    line-height: 30px;
	    padding: 0 15px;
	    color: #727272;
	    background: #fff;
	    z-index: 1;
	    width: 100%;
	    position: relative;
	    appearance: none;
	    -moz-appearance: none;
	    -webkit-appearance: none;
	    position: relative;
	    min-height: 45px;
	    box-shadow: none;
	    border: 1px solid #f3f3f3;
	    background: #fff;
	    border-radius: 30px;
	    width: 100%!important;
	    cursor: pointer;
	}

	.form-line-active input:focus, .form-line-active textarea:focus {
		border: 1px solid green !important;
		box-shadow: 0 0 3px green !important;
		-moz-box-shadow: 0 0 3px green !important;
		-webkit-box-shadow: 0 0 3px green !important;
	}

	input:focus, textarea:focus, select:focus {
		outline-offset: 0px !important;
		outline: none !important;
	}

	.more-search-options {
	    margin-top: 30px;
	}

	.sidebar-title {
	    font-size: 18px;
	    font-weight: 500;
	    color: #272727;
	    letter-spacing: 1px;
	    margin-bottom: 25px;
	    text-transform: uppercase;
	    position: relative;
	}

	.checkboxes {
	    list-style: none;
	    padding: 0;
	    margin-bottom: 30px;
	}

	.checkboxes input[type=checkbox] {
	    display: none;
	}

	.checkboxes label {
	    display: inline-block;
	    cursor: pointer;
	    width: 100%;
	    position: relative;
	    padding-left: 28px;
	    margin-right: 20px;
	    margin-bottom: 10px;
	    font-size: 15px;
	}

	.checkboxes label:before {
	    content: "";
	    display: inline-block;
	    position: absolute;
	    width: 17px;
	    height: 17px;
	    margin-top: 5px;
	    left: 0;
	    border: 1px solid #e5e5e5;
	    border-radius: 30px;
	    -webkit-transition: border .15s ease-in-out,color .15s ease-in-out;
	    -o-transition: border .15s ease-in-out,color .15s ease-in-out;
	    transition: border .15s ease-in-out,color .15s ease-in-out;
	}

	.checkboxes input[type=checkbox]:checked+label:before {
	    color: #4064d7;
	}

	.checkboxes input[type=checkbox]:checked+label:before {
	    content: "\e938";
	    font-family: lineicons!important;
	    color: #4064d7;
	    display: inline-block;
	    text-shadow: 1px 1px 1px rgba(0,0,0,.2);
	    font-size: 16px;
	    text-align: center;
	    line-height: 15px;
	    text-align: center;
	}

	.sidebarfilter-inner {
	    background-color: #fff;
	    color: #707070;
	    border-radius: 4px;
	    padding: 10px;
	    -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
	    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
	    -webkit-transition: .25s;
	    transition: .25s;
	}
</style>

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/fonts/line-icons.css') }}">
@endsection


<script>
    var rangeSlider = function(){
        var slider = $('.range-slider'),
            range = $('.range-slider__range'),
            value = $('.range-slider__value');
        
        slider.each(function(){
            value.each(function(){
              var value = $(this).prev().attr('value');
              $(this).html(value);
            });

            range.on('input', function(){
              $(this).next(value).html(this.value);
            });
        });
    };

    rangeSlider();

    /* GALERíA DE IMÁGENES*/

    $(document).ready(function() {
        
        $('#links').click(function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
      });

        $('.carousel').carousel({
        interval: false
      })
      $('a.page-scroll').on('click', function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
          scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1500);
        e.preventDefault();
      }); 
      $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
        
        $(".zoom").hover(function(){
        
        $(this).addClass('transition');
      }, function(){
            
        $(this).removeClass('transition');
      });
    });


    /* FIN GALERÍA DE IMÁGENES*/


    (function($) {
        $.fn.liquo = function(options) {
            // Override defaults, if provided
            var settings = $.extend({
                menu: null,
                start: "all",
                random: false
            }, options);
            // Throw error if menu not defined
            if (settings.menu == null) throw "Liquo: You must provide a valid menu selector.";
            // Allow chaining and process each DOM node
            return this.each(function() {
                // Define variables
                var $this = $(this); // Store reference to self
                var $menu = $(settings.menu);
                var $options = $menu.children("a[data-liquo]");
                var last = null;
                // Add liquo class to ul
                $this.addClass("liquo-gallery");
                // Add active class provided category if exists, otherwise add to "all"
                if (settings.start != "all" && $menu.children("a[data-liquo="+settings.start+"]").length > 0) {
                    // Set active class on navigation
                    $menu.children("a[data-liquo="+settings.start+"]").addClass("liquo-active");
                    // Hide everything except active elements
                    $this.find("li").not("[data-liquo="+settings.start+"]").addClass("inactive").hide(300);
                    // Set last to starting category
                    last = settings.start;
                } else {
                    // Add active to all
                    $menu.children("a[data-liquo=all]").addClass("liquo-active");
                }
                // Randomize if set to true
                if (settings.random) {
                    // Loop through each li element and sort randomly
                    $this.children("li").sort(function(a,b) {
                        return (Math.round(Math.random())-0.5);
                    }).detach().appendTo($this);

                }
                // Handle menu click functionality
                $($options).click(function(e) {
                    // Stop link functionality
                    e.preventDefault();
                    // Get category
                    var category = $(this).data("liquo");
                    // Change active classes
                    if (!$(this).hasClass("liquo-active")) {
                        // Remove currently active link
                        $menu.find(".liquo-active").removeClass("liquo-active");
                        // Add new active link
                        $(this).addClass("liquo-active");
                    }
                    // If category is set to all, show all elements, otherwise, show only given category
                    if (category == "all") {
                        // Show all elements
                        $this.find("li").show(300).removeClass("inactive");
                        // Set last to null
                        last = null;
                    } else if ($this.find("li[data-liquo="+category+"]").length > 0) {
                        // If first category clicked
                        if (last == null) {
                            // Hide everything except current category
                            $this.find("li").not("[data-liquo="+category+"]").addClass("inactive").hide(300);
                        } else if (category != last) {
                            // Hide last category elements
                            $this.find("li[data-liquo="+last+"]").addClass("inactive").fadeOut(300, function() {

                                // Show new category elements
                                $this.find("li[data-liquo="+category+"]").removeClass("inactive").stop().show(300);
                            });
                        }
                        // Update last with current category
                        last = category;
                    }
                });
            });
        }
    })(jQuery);
</script>