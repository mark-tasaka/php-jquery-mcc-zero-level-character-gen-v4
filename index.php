<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Zero Level Character Generator Mutant Crawl Classics</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2020">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Zero Level Character Generator Mutant Crawl Classics" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Mutant Crawl Classics Zero Level Character Generator (Version 4) has been designed primarily with PHP and jQuery. Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of writing a program with high cohesion and low coupling. In this way, this program simulates Object-Oriented design. JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.</p>

        <br/>
        <br/>
            
  

			
		<form action="" id ="zeroCharForm2"  target="_blank" method="post">


<div class="content1b">

<span class="formIputDescription1b">Name:</span>	
<select id="characterName" name="theCharacterName" class="">	
<option value="0" selected>Random</option>
<option value="1">No Names</option>
</select>

			
<span class="formIputDescription1b">Sex:</span>	
<select id="sex" name="theSex" class="">	
<option value="1" selected>Random</option>
<option value="2">Female</option>
<option value="3">Male</option>
<option value="4">Other</option>
<option value="5">Blank</option>
</select>


<span class="formIputDescription1b">Hit Points:</span>	
<select id="hitPoints" name="theHitPoints" class="">	
<option value="1" selected>1d4</option>
<option value="2">Max</option>
</select>

<br/>
<br/>

<span class="formIputDescription1b">Ability Score Generation:</span>	
<select id="abilityScore" name="theAbilityScore" class="">	
<option value="1" selected>3d6 (Old School)</option>
<option value="2">4d6, drop the lowest</option>
<option value="3">2d6 + 6</option>
<option value="4">1d10 + 8</option>
<option value="5">5d6, use the 3 highest</option>
</select>

<br/>
<br/>

	  
<div class="formIputDescription1b">
<span class="footnote3"><input type="checkbox" id="checkBoxAlignment" value="1" name="theCheckBoxAlignment">Use Archaic Alignments based on Genotypes</span>
</div>

<br/>





<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>

</div>
</form>


            <br/>
            <br/>
            <br/>
            <br/>
            

            
            
                
                
		<script>
		$("#generate_characters2").click(function(){
         
		 $("#zeroCharForm2").attr('action', "zeroLv4/levelZeroCharacters.php");
		 
	 });

		 </script>

                    
                
                
      
                
 
                
    </section>


</body>
</html>