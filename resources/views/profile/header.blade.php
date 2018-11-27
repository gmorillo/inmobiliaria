<div class="dashborad-box">
	<h4 class="title">Administración</h4>
	<div class="section-body">
		<div class="row">
			<div class="col-sm-4">
				<div class="item">
					<div class="icon"><span class="fas fa-home text-primary"></span></div>
					<div class="info">
						<h6 class="number">{%$profileheader.datos.totalProperties%}</h6>
						<p class="type">Publicaciones</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item">
					<div class="icon"><span class="fas fa-thumbs-up text-primary"></span></div>
					<div class="info">
						<h6 class="number">{%$profileheader.datos.totalVisit%}</h6>
						<p class="type">Visitas</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item">
					<div class="icon"><span class="fas fa-envelope text-primary"></span></div>
					<div class="info">
						<h6 class="number">{%$profileheader.datos.totalContact%}</h6>
						<p class="type">Correos</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.dashborad-box {
	    padding: 30px;
	    margin-bottom: 30px;
	    -webkit-box-shadow: 0 0 20px rgba(38,38,38,.2);
	    box-shadow: 0 0 20px rgba(38,38,38,.2);
	}
	.dashborad-box .title {
	    position: relative;
	    padding-bottom: 15px;
	    margin-bottom: 15px;
	}
	.dashborad-box .item {
	    margin-bottom: 20px;
	}
	.dashborad-box .item .icon {
	    float: left;
	    width: 50px;
	    position: relative;
	}
	.dashborad-box .item .icon:before {
	    position: absolute;
	    content: '';
	    top: 0;
	    right: 0;
	    height: 100%;
	    width: 1px;
	    background: #d7d7d7;
	}
	.dashborad-box .item .icon span {
	    color: #4064d7;
	}
	.dashborad-box .item .icon span {
	    font-size: 32px;
	    color: #4064d7;
	}
	.fas .fa-map-marker-alt:before {
	    content: "\f3c5";
	}
	.dashborad-box .item .info {
	    padding-left: 20px;
	    float: left;
	}
	.dashborad-box .item .info .number {
	    font-size: 16px;
	    font-weight: 700;
	    margin: 0;
	    color: #272727;
	}
	.dashborad-box .item .info .type {
		font-size: 14px;
	    color: #888;
	}

	.dashborad-box .item:after {
	    display: table;
	    content: "";
	    clear: both;
	}
</style>

