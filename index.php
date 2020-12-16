<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>北七</title>

<style>
	body{ 
		margin:0;
		background-color:rgba(255,253,251,1);
	
	}
	.container{
		
		position:relative;
		margin:auto 0;
		width:960px;
	}
	.menu{
	position: fixed;
	width: 200px;
	left: 25px;
	top:50px;
	line-height:2.3;
	color: rgb(122,122,122);
	}
	
	.menu li {
	 list-style: none;
	}
	
	.menu_hide{
/*		background-color: cornflowerblue;*/
		line-height: 1.5;
		margin-left: 20px;
		display: none;
	}
	.hand{
		position:absolute;
		top:180px;
		left:727px;
	}
	
	.leftring{
		position:absolute;
		top:650px;
	}
	
	.rightring{
		position:absolute;
		right:0px;
		top:750px;

	}
	
	.section2{
		position:absolute;
		top:850px;
	}
	
	.footer{
		position:fixed;
		left:45%;
		bottom:0px;
	}
	
	.footer img {
		padding: 10px 2px;
	}
	
</style>
	
	
	
<script>
 $(document).ready(function(){
	 
//	 $("#menu1").mouseenter(function(){
//		 $("#menu_hide").slideDown(500);
//		 
//	 });
	 
 });
	 
	
</script>
	
	
</head>

<body>
	
<div class="container">
 <div class="menu" id="menu">
	<ul>
	 <li id="menu1">New Collection</li>
		<div class="menu_hide" id="menu_hide">
		 <li>Ring</li>
		 <li>Necklace</li>
		 <li>Earing</li>
		</div>
	 <li>Jewerly</li>
	 <li>Engagement</li>
	 <li>Watches</li>
	 <li>Gifts Selected</li>
	 <li>News</li>		
    </ul>	
  </div>
 <div class="banner"><img src="Images/A4.png"></div>
 <div class="hand"><img src="Images/A20.png"></div>
 <div class="leftring"><img src="Images/A11.png"></div>
 <div class="section2">
	 <img src="Images/A24.png">
	  
	
	
	
	
	
  </div>
 <div class="rightring"><img src="Images/A19.png"></div>
 
<!-- <div class="section3"></div>-->
 <div class="footer"> 
   <img src="Images/A25.png">
   <img src="Images/A26.png">
   <img src="Images/A27.png">
   <img src="Images/A28.png">
   <img src="Images/A29.png">
 </div>
</div>
</body>
</html>
