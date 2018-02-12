<?php
	include_once 'db.php';
	include_once 'inc_menu.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intitial-scale-1">
	<title>College</title>
	<style>
			/* Force scrollbars onto browser window */
			* {
				margin:0;
				padding:0;
				/*background-color: pink;*/
			}
			body {
			margin-bottom: 200%;
			/*background-color: red;*/
			}


			/* Box styles */
			.myBox {
			border: none;
			padding: 5px;
			font: 24px/36px sans-serif;
			width: 200px;
			height: 200px;
			overflow: scroll;
			}

			/* Scrollbar styles */
			::-webkit-scrollbar {
			width: 12px;
			height: 12px;
			}

			::-webkit-scrollbar-track {
			border-radius: 10px;
			width: 2px;
			border: 1px dotted pink;
			}

			::-webkit-scrollbar-thumb {
			background: pink; 
			border-radius: 10px;
			}

			::-webkit-scrollbar-thumb:hover {
			background: hotpink;  
			}

			.text-left { margin-top: 10px; }
			.mamama {
					width: 300px; 
				}
				
			.ma {
				width: 200px; 
				position: absolute;
			}
			.ma img:hover {
				opacity: .8;
				transition: .3s ease-in-out;
			}
			h2 {margin-left: 380px;}

			.space {
				width: 153%;
				height: 1px;
				background-color: #e0e0e0;
				margin-top: 400px;
				float: left;
				margin-bottom: 20px; 
			}
			#myBtn {
					  display: none;
					  position: fixed;
					  bottom: 20px;
					  right: 30px;
					  z-index: 99;
					  font-size: 14px;
					  border: none;
					  outline: none;
					  background-color: blue;
					  color: white;
					  cursor: pointer;
					  padding: 10px;
					  border-radius: 4px;
					  transition: .3s ease-in-out;
					}

					#myBtn:hover {
					  background-color: red;
					  transition: .3s ease-in-out;
					}

	</style>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php include_once 'inc_menu.php' ?>
		<div class="row">
			<div class="col-md-8">

			        	<h2 class="text-center">Brand Archetype WEB 4</h2>
			        	<div class="row" style="margin-top: 20px; margin-left: -50px;">


			        		<div class="mama0">
					       		<div class="mamama" style="margin-left: 10px; float: left ">
					       			<h1 class="text-left text-danger">Best 1</h4>
				       					<p class="text-left">13580242 | 13580251</p>
					       			<a href="img/15_2.jpg" target="_blank"><img src="img/15_2.jpg" class="img-responsive img-thumbnail" ></a>
					       		</div>

					       
				       		<div class="mamama" style="margin-left: 160px; float: left">
				       			<h1 class="text-left text-danger">Best 2</h4>
				       				<p class="text-left">13580232 | 13580248</p>
				       				<a href="img/04_2.jpg" target="_blank"><img src="img/04_2.jpg" class="img-responsive img-thumbnail" ></a>
				       		</div>
				     
				       		<div class="mamama" style="margin-left: 940px; margin-bottom: 100px;" >
					       			<h1 class="text-left text-danger" >Best 3</h4>
				       				<p class="text-left">13580222 | 13580244</p>
				       				<a href="img/18_2.jpg" target="_blank"><img src="img/18_2.jpg" class="img-responsive img-thumbnail" ></a>
				       		</div>	
				       	</div> <!-- mama0 -->

				       	<!-- MAMA 0 -->




			       		<div class="mama1" style="margin-bottom: 320px;">

					       	<div class="ma" style="margin-left: 80px;">
					       		<a href="img/01_2.jpg" target="_blank"><img src="img/01_2.jpg" class="img-responsive img-thumbnail" ></a>
					       		<p class="text-left">C01</p>
					       		<p class="text-left">13580209 | 13580250</p>
					       		</div>
				          		
				       		<div class="ma" style="margin-left: 390px;">
				       			<a href="img/02_2.jpg" target="_blank"><img src="img/02_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C02</p>
				       			<p class="text-left">13580182 | 13580190</p>
				       		</div>

				       		<div class="ma" style="margin-left: 700px;">
				       			<a href="img/03_2.jpg" target="_blank"><img src="img/03_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C03</p>
				       			<p class="text-left">13580180 | 13580246</p>
				       		</div>	

				       		<div class="ma" style="margin-left: 1000px;">
				       			<a href="img/04_2.jpg" target="_blank"><img src="img/04_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left"><u><strong>Best 2</strong></u> C04</p>
				       			<p class="text-left">13580232 | 13580248</p>
				       		</div>	
				       		
				       	</div> <!-- mama1 -->

				       	<!-- MAMA 1 -->




				       	<div class="mama2" style="margin-top: 490px;">


					       	<div class="ma" style="margin-left: 80px;">
					       		<a href="img/05_2.jpg" target="_blank"><img src="img/05_2.jpg" class="img-responsive img-thumbnail" ></a>
					       		<p class="text-left">C05</p>
					       		<p class="text-left">13580200 | 13580217</p>
					       		</div>
				          		
				       		<div class="ma" style="margin-left: 390px;">
				       			<a href="img/06_2.jpg" target="_blank"><img src="img/06_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C06</p>
				       			<p class="text-left">13580218 | 13580231</p>
				       		</div>

				       		<div class="ma" style="margin-left: 700px;">
				       			<a href="img/07_2.jpg" target="_blank"><img src="img/07_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C07</p>
				       			<p class="text-left">13580194</p>
				       		</div>	


				       		<div class="ma" style="margin-left: 1000px;">
				       			<a href="img/08_2.jpg" target="_blank"><img src="img/08_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C08</p>
				       			<p class="text-left">13580191 | 13580212</p>
				       		</div>	
				       		
				       	</div> <!-- mama2 -->

				       	<!-- MAMA 2 -->



				       		<div class="mama3" style="margin-top: 880px;">


					       	<div class="ma" style="margin-left: 80px;">
					       		<a href="img/09_2.jpg" target="_blank"><img src="img/09_2.jpg" class="img-responsive img-thumbnail" ></a>
					       		<p class="text-left">C09</p>
					       		<p class="text-left">13580183 | 13580210</p>
					       		</div>

				       		<div class="ma" style="margin-left: 390px;">
				       			<a href="img/10_2.jpg" target="_blank"><img src="img/10_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C10</p>
				       			<p class="text-left">13580221 | 13580584</p>
				       		</div>

				       		<div class="ma" style="margin-left: 700px;">
				       			<a href="img/11_2.jpg" target="_blank"><img src="img/11_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C11</p>
				       			<p class="text-left">13580230 | 13580238</p>
				       		</div>	

				       		<div class="ma" style="margin-left: 1000px;">
				       			<a href="img/12_2.jpg" target="_blank"><img src="img/12_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C12</p>
				       			<p class="text-left">13580211 | 13580214</p>
				       		</div>	
				       		
				       	</div> <!-- mama3 -->

				       	<!-- MAMA 3 -->




				       	<div class="mama4" style="margin-top: 1270px;">


					       	<div class="ma" style="margin-left: 80px;">
					       		<a href="img/13_2.jpg" target="_blank"><img src="img/13_2.jpg" class="img-responsive img-thumbnail" ></a>
					       		<p class="text-left">C13</p>
					       		<p class="text-left">13580206 | 13580228</p>
					       		</div>


				       		<div class="ma" style="margin-left: 390px;">
				       			<a href="img/14_2.jpg" target="_blank"><img src="img/14_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C14</p>
				       			<p class="text-left">13580198 | 13580245</p>
				       		</div>




				       		<div class="ma" style="margin-left: 700px;">
				       			<a href="img/15_2.jpg" target="_blank"><img src="img/15_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left"><u><strong>Best 1</strong></u> C15</p>
				       			<p class="text-left">13580242 | 13580251</p>
				       		</div>	


				       		<div class="ma" style="margin-left: 1000px;">
				       			<a href="img/16_2.jpg" target="_blank"><img src="img/16_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C16</p>
				       			<p class="text-left">13580207 | 13580234</p>
				       		</div>	
				       		
				       	</div> <!-- mama4 -->

				       	<!-- MAMA 4 -->



				       	<div class="mama5" style="margin-top: 1660px;">

					       	<div class="ma" style="margin-left: 80px;">
					       		<a href="img/17_2.jpg" target="_blank"><img src="img/17_2.jpg" class="img-responsive img-thumbnail" ></a>
					       		<p class="text-left">C17</p>
					       		<p class="text-left">13580184 | 13580203</p>
					       		</div>


				       		<div class="ma" style="margin-left: 390px;">
				       			<a href="img/18_2.jpg" target="_blank"><img src="img/18_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left"><u><strong>Best 3</strong></u> C18</p>
				       			<p class="text-left">13580222 | 13580244</p>
				       		</div>


				       		<div class="ma" style="margin-left: 700px;">
				       			<a href="img/19_2.jpg" target="_blank"><img src="img/19_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C19</p>
				       			<p class="text-left">13580201| 13580241</p>
				       		</div>	


				       		<div class="ma" style="margin-left: 1000px;">
				       			<a href="img/20_2.jpg" target="_blank"><img src="img/20_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C20</p>
				       			<p class="text-left">13580187 | 13580192</p>
				       		</div>	
				       		
				       	</div> <!-- mama5 -->

				       	<!-- MAMA 5 -->




				       	<div class="mama6" style="margin-top: 2050px;">




					       	<div class="ma" style="margin-left: 80px;">
					       		<a href="img/21_2.jpg" target="_blank"><img src="img/21_2.jpg" class="img-responsive img-thumbnail" ></a>
					       		<p class="text-left">C21</p>
					       		<p class="text-left">13580186 | 13580585</p>
					       		</div>
				          		


				       		<div class="ma" style="margin-left: 390px;">
				       			<a href="img/22_2.jpg" target="_blank"><img src="img/22_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C22</p>
				       			<p class="text-left">13580199 | 13580213</p>
				       		</div>


				       		<div class="ma" style="margin-left: 700px; margin-bottom: 50px;">
				       			<a href="img/23_2.jpg" target="_blank"><img src="img/23_2.jpg" class="img-responsive img-thumbnail" ></a>
				       			<p class="text-left">C23</p>
				       			<p class="text-left">13580219 | 13580220</p>
				       		</div>	

				       		
				       	</div> <!-- mama6 -->

				       	<!-- MAMA 6 -->


			        </div> <!-- row -->

			        
			        <div class="space"></div>

			        <table class="table table-bordered" style="margin-left: 180px;">
			        	<h3 class="text-center" style="margin-left: 400px;">Vote</h3>
						<thead>
							<tr>
								<td>No.</td>
								<td>Liked</td>
								<td>Disliked</td>

							</tr>
						</thead>

						<tbody>
					        <tr>
					        	<td>C01</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C02</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C03</td>
					            <td>C12 -13580211 , 13580214</td>
					            <td>-</td>
					        </tr>
					        <tr>
					        	<td><mark><strong>2</strong></mark> | C04</td>
					        	<td>C05 -13580200 , 13580217 
					        		<br>C08 -13580191 , 13580212 
					        		<br>C17 -13580184 , 13580203 
					        	</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C05</td>
					             <td>C03 -13580180 , 13580246
					             <br>C11 -13580230 , 13580238
					             <br>C15 -13580242 , 13580251</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C06</td>
					             <td>-</td>
					            <td>C12 -13580211 , 13580214 
					            	<br> C19 -13580201 , 13580241</td>
					           
					        </tr>
					        <tr>
					        	<td>C07</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C08</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C09</td>
					              <td>C23 -13580219 , 13580220</td>
					            <td>-</td>
					        </tr>
					        <tr>
					        	<td>C10</td>
					           	<td>C04 -13580232 , 13580248
					            	<br>C19 -13580201 , 13580241  </td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C11</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C12</td>
					             <td>C06 -13580218 , 13580231</td>
					            <td>-</td>
					        </tr>
					        <tr>
					        	<td>C13</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C14</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td><mark><strong>1</strong></mark> | C15</td>
					              <td>C02 -13580182 , 13580190 
					             	<br>C10 -13580221 , 13580584 
					             	<br>C13 -13580206 , 13580228
					             	<br>C14 -13580198 , 13580245 
					             	<br>C18 -13580222 , 13580244 
					                <br>C20 -13580187 , 13580192  </td>
					            <td>-</td>
					        </tr>
					        <tr>
					        	<td>C16</td>
					             <td>C21 -13580186 , 13580585</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td>C17</td>
					            <td>-</td>
					            <td>-</td>
					        </tr>
					        <tr>
					            <td><mark><strong>3</strong></mark> | C18</td>
					           <td>C01 -13580209 , 13580250 
					            	<br>C09 -13580183 , 13580210 
					            	<br>C07 -13580194 
					            	<br>C22 -13580199, 13580213</td>
					            <td>-</td>
					        </tr>
					        <tr>
					        	<td>C19</td>
					        	<td>-</td>
					            <td>C22 -13580199 , 13580213 </td>
					            
					        </tr>
					        <tr>
					            <td>C20</td>
					    		<td>-</td>
					            <td>C13 -13580206 , 13580228</td>
					        </tr>
					        <tr>
					            <td>C21</td>
					            <td>C16 -13580207 , 13580234</td>
					            <td>C06 -13580231 , 13580218</td>
					        </tr>
					        <tr>
					        	<td>C22</td>
					        	<td>-</td>
					           <td>C04 -13580232 , 13580248<br>
					            	C08 -13580191 , 13580212<br>
					            	C09 -13580183 , 13580210<br>
					            	C11 -13580230 , 13580238<br> 
					            	C15 -13580242 , 13580251<br> 
					            	C23 -13580219 , 13580220</td>
					            </tr>
					        <tr>
					            <td>C23</td>
					            <td>-</td>
					             <td>13580200 , 13580217 
					             	<br> 13580182 , 13580190
					             	 <br> 13580180 , 13580246
					             	<br> 13580207 , 13580234 
					             	<br> 13580187 , 13580192 
					             	<br> 13580198 , 13580245 
					             	<br> 13580184 , 13580203
					             	 <br> 13580209 , 13580250
					             	 <br> 13580186 , 13580585
					             	  <br> 13580221 , 13580584
					             	   <br> 13580222 , 13580244 <br> 13580194</td>
					        </tr>
					        

					    </tbody>

					</table>

					<button onclick="topFunction()"  id="myBtn" title="Go to top" type="button" class="btn btn-danger center-block" >Top</button>
			    	



				</form>
			</div>
		</div>

	</div>

	<script type="js/jquery.min.js"></script>
	<script type="js/bootstrap.min.js"></script>

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("myBtn").style.display = "block";
		    } else {
		        document.getElementById("myBtn").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}
	</script>
</body>
</html>