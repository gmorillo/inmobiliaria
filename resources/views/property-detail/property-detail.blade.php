<h2 class="my-3 mt-5">Detalles</h2><hr>
<div class=" font-weight-light mt-4">
  	<div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 px-2" ng-repeat="detail in $propertydetail.priceBunddle.property.detail">
        <ul class="list-unstyled ">
          <li class="list-item" ><i class="fas fa-check-square text-success"></i> {%detail.name%}</li>
        </ul>
      </div>
    </div>
</div>