
<?php
    echo "<div id='demo'></div>";
?>
<script type="text/JavaScript">
  
// Function is called, return 
// value will end up in x
var x = myFunction(11, 10);   
document.getElementById("demo").innerHTML = x;
  
// Function returns the product of a and b
function myFunction(a, b) {
    return a * b;             
}
</script>