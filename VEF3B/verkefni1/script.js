(function () {

  "use strict"; 
  
  
/* DOM element */
	let elContainer = document.getElementById('container'); 	
  
  elContainer.addEventListener("click", function() {
    elContainer.className = "active";
}, false);  
  
})();