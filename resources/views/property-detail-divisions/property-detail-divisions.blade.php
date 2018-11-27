
<div class="container">
	<div class="row">				
		<div class="col-md-12 mb-3 p-0">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<i class="far fa-images"></i> Galería <small><strong>({%$parent.$propertymain.data.photos.length%})</strong></small>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<div class="row">
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-1 "  ng-repeat="photos in $parent.$propertymain.data.photos"
				            	>
					                <a href="{%photos.img%}" data-toggle="modal" data-target="#{%photos.id%}">
					                    <img ng-src="{%photos.img%}" class="zoom img-fluid " style="object-fit: cover; ">
					                </a>
									<div class="modal fade" id="{%photos.id%}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">{%$index+1%}/{%$parent.$parent.$propertymain.data.photos.length%}</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
					                    			<img ng-src="{%photos.img%}" class=" img-fluid ">
												</div>
											</div>
											
										</div>
									</div>
					            </div>
					       	</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--- END COL -->		
	</div><!--- END ROW -->			
</div>

<script type="text/javascript" src="{{ asset('js/image-gallery.js') }}"></script>
<style>
	/*ACCORDION*/
		.template_faq {
		    background: #edf3fe none repeat scroll 0 0;
		}
		.panel-group {
		    background: #fff none repeat scroll 0 0;
		    border-radius: 3px;
		    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
		    margin-bottom: 0;
		    padding: 15px;
		}
		#accordion .panel {
		    border: medium none;
		    border-radius: 0;
		    box-shadow: none;
		    margin: 0 0 15px 10px;
		}
		#accordion .panel-heading {
		    border-radius: 30px;
		    padding: 0;
		}
		#accordion .panel-title a {
		    background: #3490dc none repeat scroll 0 0;
		    border: 1px solid transparent;
		    border-radius: 30px;
		    color: #fff;
		    display: block;
		    font-size: 18px;
		    font-weight: 600;
		    padding: 12px 20px 12px 50px;
		    position: relative;
		    transition: all 0.3s ease 0s;
		}
		#accordion .panel-title a.collapsed {
		    background: #fff none repeat scroll 0 0;
		    border: 1px solid #ddd;
		    color: #3490dc;
		}
		#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
		    background: #3490dc none repeat scroll 0 0;
		    border: 1px solid transparent;
		    border-radius: 50%;
		    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
		    color: #fff;
		    content: "";
		    font-family: fontawesome;
		    font-size: 25px;
		    height: 55px;
		    left: -20px;
		    line-height: 55px;
		    position: absolute;
		    text-align: center;
		    top: -5px;
		    transition: all 0.3s ease 0s;
		    width: 55px;
		}
		#accordion .panel-title a.collapsed::after {
		    background: #fff none repeat scroll 0 0;
		    border: 1px solid #ddd;
		    box-shadow: none;
		    color: #3490dc;
		    content: "";
		}
		#accordion .panel-body {
		    background: transparent none repeat scroll 0 0;
		    border-top: medium none;
		    padding: 20px 25px 10px 9px;
		    position: relative;
		}
		#accordion .panel-body p {
		    border-left: 1px dashed #8c8c8c;
		    padding-left: 25px;
		}
	/*FIN ACCORDION*/

	/*accordion images*/
		#demo {
			height:100%;
			position:relative;
			overflow:hidden;
		}


		.green{
			background-color:#6fb936;
		}
	    .thumb{
	        margin-bottom: 20px;
	    }
	    
	    .page-top{
	        margin-top:150px;
	    }
		img.zoom {
			width: 100%;
			height: 100%;
			-webkit-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
		}
		    
		.transition {
			-webkit-transform: scale(1.2); 
			-moz-transform: scale(1.2);
			-o-transform: scale(1.2);
			transform: scale(1.2);

		}
		.modal-header {
			border-bottom: none;
		}
		.modal-title {
		    color:#000;
		}
		.modal-footer{
		  display:none;  
		}
	/*fin acordion images*/
</style>