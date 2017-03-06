<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
  /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
  
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
         	<!-- BEGIN PRODUCTS -->
  
		<div class="col-md-3 col-sm-6">   		
<span class="thumbnail">      			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>     			
<div class="ratings">                   
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>              
</div>      			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<hr class="line">    			
<div class="row">   				
<div class="col-md-6 col-sm-6">    					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">    
<a href="buyerBidPro.html" class="btn btn-success right"> BUY ITEM</a> 					
      				</div>				
      			</div>
    		</span>
  		</div>
		
		
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="http://placehold.it/500x400" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>     				
</div>      			
</div>   		
</span>  		
</div>  		


<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">				
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>     			
<hr class="line">      			
<div class="row">      				
<div class="col-md-6 col-sm-6">     					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>      			
</div>    		
</span>  		
</div>

  		
<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>     			
<hr class="line">     			
<div class="row">    				
<div class="col-md-6 col-sm-6">      					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">    					
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>     			
</div>    		
</span> 		
</div>		

<!-- 2nd row -->

<div class="row">
  
		<div class="col-md-3 col-sm-6">   		
<span class="thumbnail">      			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>     			
<div class="ratings">                   
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>              
</div>      			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<hr class="line">    			
<div class="row">   				
<div class="col-md-6 col-sm-6">    					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">     					
<button class="btn btn-success right" > BUY ITEM</button>
      				</div>				
      			</div>
    		</span>
  		</div>
		
		
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="http://placehold.it/500x400" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>     				
</div>      			
</div>   		
</span>  		
</div>  		


<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">				
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>     			
<hr class="line">      			
<div class="row">      				
<div class="col-md-6 col-sm-6">     					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>      			
</div>    		
</span>  		
</div>

  		
<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>     			
<hr class="line">     			
<div class="row">    				
<div class="col-md-6 col-sm-6">      					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">    					
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>     			
</div>    		
</span> 		
</div>		
	
</div>


<!-- 3rd row -->

<div class="row">
  
		<div class="col-md-3 col-sm-6">   		
<span class="thumbnail">      			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>     			
<div class="ratings">                   
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>              
</div>      			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<hr class="line">    			
<div class="row">   				
<div class="col-md-6 col-sm-6">    					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">     					
<button class="btn btn-success right" > BUY ITEM</button>
      				</div>				
      			</div>
    		</span>
  		</div>
		
		
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="http://placehold.it/500x400" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>     				
</div>      			
</div>   		
</span>  		
</div>  		


<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">				
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>     			
<hr class="line">      			
<div class="row">      				
<div class="col-md-6 col-sm-6">     					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>      			
</div>    		
</span>  		
</div>

  		
<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>     			
<hr class="line">     			
<div class="row">    				
<div class="col-md-6 col-sm-6">      					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">    					
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>     			
</div>    		
</span> 		
</div>		
</div>

<!-- 4th row -->

<div class="row">
  
		<div class="col-md-3 col-sm-6">   		
<span class="thumbnail">      			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>     			
<div class="ratings">                   
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>              
</div>      			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<hr class="line">    			
<div class="row">   				
<div class="col-md-6 col-sm-6">    					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">     					
<button class="btn btn-success right" > BUY ITEM</button>
      				</div>				
      			</div>
    		</span>
  		</div>
		
		
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="http://placehold.it/500x400" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>     				
</div>      			
</div>   		
</span>  		
</div>  		


<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">				
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>     			
<hr class="line">      			
<div class="row">      				
<div class="col-md-6 col-sm-6">     					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>      			
</div>    		
</span>  		
</div>

  		
<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>     			
<hr class="line">     			
<div class="row">    				
<div class="col-md-6 col-sm-6">      					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">    					
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>     			
</div>    		
</span> 		
</div>		
</div>
<!-- 3rd row -->

<div class="row">
  
		<div class="col-md-3 col-sm-6">   		
<span class="thumbnail">      			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>     			
<div class="ratings">                   
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>              
</div>      			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<hr class="line">    			
<div class="row">   				
<div class="col-md-6 col-sm-6">    					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">     					
<button class="btn btn-success right" > BUY ITEM</button>
      				</div>				
      			</div>
    		</span>
  		</div>
		
		
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="http://placehold.it/500x400" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>     				
</div>      			
</div>   		
</span>  		
</div>  		


<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">				
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>     			
<hr class="line">      			
<div class="row">      				
<div class="col-md-6 col-sm-6">     					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>      			
</div>    		
</span>  		
</div>

  		
<div class="col-md-3 col-sm-6">    		
<span class="thumbnail">     			
<img src="http://placehold.it/500x400" alt="...">      			
<h4>Product Tittle</h4>      			
<div class="ratings">                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                   
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star"></span>                    
<span class="glyphicon glyphicon-star-empty"></span>               
</div>     			
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>     			
<hr class="line">     			
<div class="row">    				
<div class="col-md-6 col-sm-6">      					
<p class="price">$29,90</p>      				
</div>      				
<div class="col-md-6 col-sm-6">    					
<button class="btn btn-success right" > BUY ITEM</button>      				
</div>     			
</div>    		
</span> 		
</div>		
</div>
<!-- END PRODUCTS -->
	
</div>

    </div>
  </div>
  
 

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
