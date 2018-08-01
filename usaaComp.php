<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="usaaComp.css">


<body>

<!-- Top Section (Header) -->
<section class="topSection">
<nav class="nav">
  <a href="#">FAQ</a>
  <a href="#">Generic Schedule</a>
  <a href="#">Generic Text</a>
</nav>
<img class="recycle-back" src="recycle-back.png">

<article class="headerText">
  <span>Text <strong>Everyday, Everything, Everywhere</strong><br>and your generic text <strong>fully-funded Text</strong?</span>
</article>

<article class="inputSection">
<input type="email" placeholder="email address">
<select>
  <option value="Select your district">Select your district</option>
</select>
<input type="button" value="Go">
</article>

<article class="inputSection">
<input type="checkbox" checked="checked">
<span>
I'd like to receive updates from Generic Text about this program
</span>

</article>
</section>

<!-- Mid section -->
<section class="midSection">
 <article class="midSectionLeftSide">
  <p class="midSectionLeftSideText">There are currently<br>
  <span class="midSectionLeftSideTextDynamicNumber" id="dynamic_figure"></span><br>
    <span>Pledges from the 10</span><br>
  <span>Districts of city, St</span>
  </p>

  
 </article>
  <article>
  <table>
  <th>LEADERBOARD</th>
  <tr>
  <td>District 1</td>
  <td><div id="pledgeProgressBar0"></div></td>
  <td>112 Pledges</td>
  </tr>
  

  <tr>
  <td>District 2</td>
  <td><div id="pledgeProgressBar1"></div></td>
  <td>98 Pledges</td>
  </tr>
 
  <tr>
  <td>District 3</td>
  <td><div id="pledgeProgressBar2"></div></td>
  <td>119 Pledges</td>
  </tr>

  <tr>
  <td>District 4</td>
  <td><div id="pledgeProgressBar3"></div></td>
  <td>126 Pledges</td>
  </tr>

  <tr>
  <td>District 5</td>
  <td><div id="pledgeProgressBar4"></div></td>
  <td>129 Pledges</td>
  </tr>

  <tr>
  <td>District 6</td>
  <td><div id="pledgeProgressBar5"></div></td>
  <td>44 Pledges</td>
  </tr>
 
  <tr>
  <td>District 7</td>
  <td><div id="pledgeProgressBar6"></div></td>
  <td>118 Pledges</td>
  </tr>

  <tr>
  <td>District 8</td>
  <td><div id="pledgeProgressBar7"></div></td>
  <td>125 Pledges</td>
  </tr>
  
  <tr>
  <td>District 9</td>
  <td><div id="pledgeProgressBar8"></div></td>
  <td>101 pledges</td>
  </tr>
   
  <tr>
  <td>District 10</td>
  <td><div id="pledgeProgressBar9"></div></td>
  <td>27 pledges</td>
  </tr>
  </table>

 </article>
</section>

<!-- footer -->
<footer>
   &copy; 2015 Generic Text
</footer>

<script>

loadNumber();

function loadNumber(){
	var pledges=[112,98,119,126,129,44,118,125,101,27];
	for(var j = 0; j<pledges.length; j++){
		loadProgressBar("pledgeProgressBar" + j, pledges[j]);
	}
	
	var progress = 0;
	var pledge = 1423 // This can come from a service call
		var interval  = setInterval(
		     function(){document.getElementById("dynamic_figure").innerHTML = progress; 
		     progress++;
		    if(progress == pledge + 1 ){
				clearInterval(interval);
			}
		}, 5);
			
}


function loadProgressBar(pledgeId, pledge){
    var element = document.getElementById(pledgeId); 
    var width = 1;
    var interval = setInterval(
    function() {
        if (width >= pledge) {
            clearInterval(interval);
        } else {
            width++; 
            element.style.width = width + 'px'; 
        }
   }
, 20);
	
}

</script>

</body>
</html>


