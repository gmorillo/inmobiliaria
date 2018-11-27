
<style>
	/* =======================================
 header
========================================*/
.header {
  position: relative;
  width: 100%;	
  height: 250px;	
}
.header .center {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 90%;
	transform:translate(-50%,-50%);
	z-index: 5; 
  padding: 1rem;
}
.header .left {
  position: absolute;
	top: 50%;
	left: 50%;
	width: 90%;
	transform:translate(-50%,-50%);
	z-index: 5; 
  padding: 1rem;
}
.header .right {
  position: absolute;
	top: 50%;
	left: 50%;
	width: 90%;
	transform:translate(-50%,-50%);
	z-index: 5; 
  padding: 1rem;
}
.header .scroll {
  position: absolute;
  top: 95%;
  left: 50%;
  transform:translate(-50%,-50%);
  color: #fff;
  font-size: 1.5rem;
}
/*=== Large devices (desktops, 992px and up) ===*/
@media (min-width: 992px) {
.header .center {
  width: 50%;
}
.header .left {
  position: absolute;
  top: 20%;
  left: 10%;
  width: 40%;
  height: 60%;
  transform:translate(0, 0);
  padding: 1rem;
}
.header .right {
  position: absolute;
  top: 20%;
  left: 50%;
  width: 40%;
  height: 60%;
  transform:translate(0, 0);
  padding: 1rem;
}
}

/* =======================================
 header#1
========================================*/
#header1 {
	background: #355c7d;
  background:
    /* gradient overlay */
    linear-gradient(
      to bottom,
      rgba(0, 78, 255, 0.6),
      rgba(1, 188, 245, 0.5)
    ),
    /* bottom image */
    url('https://cdn.stocksnap.io/img-thumbs/960w/VPYPAS4FVT.jpg') no-repeat left top;
  background-size: cover;  
	z-index: 0; 
}
#header1 .caption {
	text-align: center;
  color: #fff;
}
#header1 .caption .title {
	margin-bottom: 1.5rem;
} 
#header1 .caption .text {
	margin-bottom: 1.5rem;
}
#header1 .caption .action {
	margin-bottom: 1rem;
	padding-left: 3rem;
	padding-right: 3rem;
	border-radius: 15px;
}
  
</style>
<header class="header mb-5" id="header1">
	<div class="center">
		<div class="caption">
			<!--<h2 class="title display-3">Header title</h2>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
			<button class="action btn btn-primary">click me</button>	
			<button class="action btn btn-Light">click me</button>	-->
		</div>	
	</div>
	<!-- scroll-down 
	<i class="scroll fa fa-angle-double-down"></i>-->
</header>


