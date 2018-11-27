<main >
  <section >



    <menu class="box" ng-repeat="cat in categories" ng-init="filter[cat]={}">
      <h2>{%cat%} cat</h2>
      <div ng-repeat="value in getItems(cat, data)">
        <input type="checkbox" class="md-primary checkboxes one-in-row" ng-model="filter[cat][value]" ng-model="value">
          <label for="">({%(filtered | filter:value:true).length%})&nbsp;{%value%}</label>
      </div>
    </menu>



    <article class="box col-12">
      <h2>search</h2>
      <p>
        <input type="text" ng-model="searchText"  placeholder="Type here to search...">
      </p>
      <!--<h2>price</h2>
      <p>
        $ {% addProps('price',filtered) | number : 2 %}
      </p>-->
    </article>



    <article class="box">
      <h2>products</h2>
      <div ng-repeat="item in filtered=(data | filter:filterByPropertiesMatchingOR | filter:searchText)">
        <p class="small">{%item.name%} ~ {%item.color%} ~ {%item.size%} ~ {%item.price%}</p> 
      </div>
    </article>



  </section>
</main>

<style>
	* {
	  padding: 0;
	  margin: 0;
	  box-sizing: border-box;
	}

	h1 {
	  padding: 20px 0 10px 20px;
	}

	p {
	  padding: 10px 0; 
	}

	.box {
	  float:left;
	  padding: 20px;
	}

</style>