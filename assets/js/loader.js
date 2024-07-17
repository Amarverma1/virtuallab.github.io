
  var myVar;
  
  function myFunction() {
    myVar = setTimeout(showPage, 1000);
  }
  
  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  }
  

  // script.js
document.addEventListener('DOMContentLoaded', function() {
     console.log("DOM fully loaded and parsed");
     // Your script logic here
 });
 