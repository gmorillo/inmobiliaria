
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
					                <a href="{%photos.img%}" class="fancybox" rel="ligthbox">
					                    <img ng-src="{%photos.img%}" class="zoom img-fluid " style="object-fit: cover; ">
					                </a>
					            </div>
					       	</div>
						</div>
					</div>
				</div>
				<!--<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingSeven">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								<i class="far fa-images"></i> Comedor <small>(8)</small>
							</a>
						</h4>
					</div>
					<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
						<div class="panel-body">
							<div class="row">
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/europe/switzerland/the-ritz-carlton-geneva/dining/50486299-rcg_living_room_wide_v1.png?$XlargeViewport100pct$" class="fancybox" rel="ligthbox">
					                    <img  src="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/europe/switzerland/the-ritz-carlton-geneva/dining/50486299-rcg_living_room_wide_v1.png?$XlargeViewport100pct$" class="zoom img-fluid "   style="    object-fit: cover;">
					                   
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/guest-rooms/rcp_rc_ste_living_v2.png?$XlargeViewport100pct$"  class="fancybox" rel="ligthbox">
					                    <img  src="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/guest-rooms/rcp_rc_ste_living_v2.png?$XlargeViewport100pct$" class="zoom img-fluid"   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://www.luxe-et-passions.com/tl_files/Revetmontagne/RITZ%20CARLTON%20GENEVE/1069_077.png.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://www.luxe-et-passions.com/tl_files/Revetmontagne/RITZ%20CARLTON%20GENEVE/1069_077.png.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					         	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/property/RCPHILA_00202.png?$XlargeViewport100pct$" class="fancybox" rel="ligthbox">
					                    <img  src="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/property/RCPHILA_00202.png?$XlargeViewport100pct$" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					    		<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://homeworlddesign.com/wp-content/uploads/2018/01/Fiskebar-in-the-Ritz-Carlton-Hotel-De-La-Paix-Geneva-12.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://homeworlddesign.com/wp-content/uploads/2018/01/Fiskebar-in-the-Ritz-Carlton-Hotel-De-La-Paix-Geneva-12.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					        	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://www.b3designers.co.uk/media/3433/fiskebar-high-res-52.jpg?quality=20" class="fancybox" rel="ligthbox">
					                    <img  src="http://www.b3designers.co.uk/media/3433/fiskebar-high-res-52.jpg?quality=20" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					       	</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<i class="far fa-images"></i> Salon <small>(8)</small>
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<div class="row">
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/europe/switzerland/the-ritz-carlton-geneva/dining/50486299-rcg_living_room_wide_v1.png?$XlargeViewport100pct$" class="fancybox" rel="ligthbox">
					                    <img  src="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/europe/switzerland/the-ritz-carlton-geneva/dining/50486299-rcg_living_room_wide_v1.png?$XlargeViewport100pct$" class="zoom img-fluid "   style="    object-fit: cover;">
					                   
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/guest-rooms/rcp_rc_ste_living_v2.png?$XlargeViewport100pct$"  class="fancybox" rel="ligthbox">
					                    <img  src="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/guest-rooms/rcp_rc_ste_living_v2.png?$XlargeViewport100pct$" class="zoom img-fluid"   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://www.luxe-et-passions.com/tl_files/Revetmontagne/RITZ%20CARLTON%20GENEVE/1069_077.png.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://www.luxe-et-passions.com/tl_files/Revetmontagne/RITZ%20CARLTON%20GENEVE/1069_077.png.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					         	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://st.hzcdn.com/simgs/f241223300d09325_4-9754/contemporary-living-room.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/property/RCPHILA_00202.png?$XlargeViewport100pct$" class="fancybox" rel="ligthbox">
					                    <img  src="https://ritzcarlton-h.assetsadobe.com/is/image/content/dam/the-ritz-carlton/hotels/usa-and-canada/pennsylvania/philadelphia/property/RCPHILA_00202.png?$XlargeViewport100pct$" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					    		<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://homeworlddesign.com/wp-content/uploads/2018/01/Fiskebar-in-the-Ritz-Carlton-Hotel-De-La-Paix-Geneva-12.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://homeworlddesign.com/wp-content/uploads/2018/01/Fiskebar-in-the-Ritz-Carlton-Hotel-De-La-Paix-Geneva-12.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					        	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://www.b3designers.co.uk/media/3433/fiskebar-high-res-52.jpg?quality=20" class="fancybox" rel="ligthbox">
					                    <img  src="http://www.b3designers.co.uk/media/3433/fiskebar-high-res-52.jpg?quality=20" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					       	</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<i class="far fa-images"></i> Habitaciones <small>(8)</small>
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							<div class="row">
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://f22bfca7a5abd176cefa-59c40a19620c1f22577ade10e9206cf5.ssl.cf1.rackcdn.com/u/the-principal-madrid-deluxe-room-R-r2.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://f22bfca7a5abd176cefa-59c40a19620c1f22577ade10e9206cf5.ssl.cf1.rackcdn.com/u/the-principal-madrid-deluxe-room-R-r2.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                   
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://www.theprincipalmadridhotel.com/wp-content/uploads/2016/04/11_Room_Premium-700x586.jpg"  class="fancybox" rel="ligthbox">
					                    <img  src="https://www.theprincipalmadridhotel.com/wp-content/uploads/2016/04/11_Room_Premium-700x586.jpg" class="zoom img-fluid"   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://d321ocj5nbe62c.cloudfront.net/imageRepo/3/0/73/360/163/12_Room_Superior_R.jpg?format=jpg&width=450&quality=75" class="fancybox" rel="ligthbox">
					                    <img  src="https://d321ocj5nbe62c.cloudfront.net/imageRepo/3/0/73/360/163/12_Room_Superior_R.jpg?format=jpg&width=450&quality=75" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://images.trvl-media.com/hotels/2000000/1760000/1759300/1759287/b13dd75b_z.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://images.trvl-media.com/hotels/2000000/1760000/1759300/1759287/b13dd75b_z.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					         	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://x.cdrst.com/foto/hotel-sf/ad2e/granderesp/manifiesto-boutique-design-by-abalu-general-4d115b5.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://x.cdrst.com/foto/hotel-sf/ad2e/granderesp/manifiesto-boutique-design-by-abalu-general-4d115b5.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					    		<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					        	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://mktroad.com/wp/wp-content/uploads/2010/11/19.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://mktroad.com/wp/wp-content/uploads/2010/11/19.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					       	</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFive">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<i class="far fa-images"></i> Terraza <small>(8)</small>
							</a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
						<div class="panel-body">
							<div class="row">
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://f22bfca7a5abd176cefa-59c40a19620c1f22577ade10e9206cf5.ssl.cf1.rackcdn.com/u/the-principal-madrid-deluxe-room-R-r2.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://f22bfca7a5abd176cefa-59c40a19620c1f22577ade10e9206cf5.ssl.cf1.rackcdn.com/u/the-principal-madrid-deluxe-room-R-r2.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                   
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://www.theprincipalmadridhotel.com/wp-content/uploads/2016/04/11_Room_Premium-700x586.jpg"  class="fancybox" rel="ligthbox">
					                    <img  src="https://www.theprincipalmadridhotel.com/wp-content/uploads/2016/04/11_Room_Premium-700x586.jpg" class="zoom img-fluid"   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://d321ocj5nbe62c.cloudfront.net/imageRepo/3/0/73/360/163/12_Room_Superior_R.jpg?format=jpg&width=450&quality=75" class="fancybox" rel="ligthbox">
					                    <img  src="https://d321ocj5nbe62c.cloudfront.net/imageRepo/3/0/73/360/163/12_Room_Superior_R.jpg?format=jpg&width=450&quality=75" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://images.trvl-media.com/hotels/2000000/1760000/1759300/1759287/b13dd75b_z.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://images.trvl-media.com/hotels/2000000/1760000/1759300/1759287/b13dd75b_z.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					         	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://x.cdrst.com/foto/hotel-sf/ad2e/granderesp/manifiesto-boutique-design-by-abalu-general-4d115b5.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://x.cdrst.com/foto/hotel-sf/ad2e/granderesp/manifiesto-boutique-design-by-abalu-general-4d115b5.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					    		<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					        	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://mktroad.com/wp/wp-content/uploads/2010/11/19.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://mktroad.com/wp/wp-content/uploads/2010/11/19.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					       	</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingEight">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								<i class="far fa-images"></i> Otras imágenes <small>(8)</small>
							</a>
						</h4>
					</div>
					<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
						<div class="panel-body">
							<div class="row">
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://f22bfca7a5abd176cefa-59c40a19620c1f22577ade10e9206cf5.ssl.cf1.rackcdn.com/u/the-principal-madrid-deluxe-room-R-r2.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://f22bfca7a5abd176cefa-59c40a19620c1f22577ade10e9206cf5.ssl.cf1.rackcdn.com/u/the-principal-madrid-deluxe-room-R-r2.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                   
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://www.theprincipalmadridhotel.com/wp-content/uploads/2016/04/11_Room_Premium-700x586.jpg"  class="fancybox" rel="ligthbox">
					                    <img  src="https://www.theprincipalmadridhotel.com/wp-content/uploads/2016/04/11_Room_Premium-700x586.jpg" class="zoom img-fluid"   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://d321ocj5nbe62c.cloudfront.net/imageRepo/3/0/73/360/163/12_Room_Superior_R.jpg?format=jpg&width=450&quality=75" class="fancybox" rel="ligthbox">
					                    <img  src="https://d321ocj5nbe62c.cloudfront.net/imageRepo/3/0/73/360/163/12_Room_Superior_R.jpg?format=jpg&width=450&quality=75" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://images.trvl-media.com/hotels/2000000/1760000/1759300/1759287/b13dd75b_z.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://images.trvl-media.com/hotels/2000000/1760000/1759300/1759287/b13dd75b_z.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					         	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="https://x.cdrst.com/foto/hotel-sf/ad2e/granderesp/manifiesto-boutique-design-by-abalu-general-4d115b5.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="https://x.cdrst.com/foto/hotel-sf/ad2e/granderesp/manifiesto-boutique-design-by-abalu-general-4d115b5.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					            <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					    		<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://retaildesignblog.net/wp-content/uploads/2013/05/Hotel-Silken-Puerta-America-Madrid-02.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					        	<div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 p-0">
					                <a href="http://mktroad.com/wp/wp-content/uploads/2010/11/19.jpg" class="fancybox" rel="ligthbox">
					                    <img  src="http://mktroad.com/wp/wp-content/uploads/2010/11/19.jpg" class="zoom img-fluid "   style="    object-fit: cover;">
					                </a>
					            </div>
					       	</div>
						</div>
					</div>
				</div>-->
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