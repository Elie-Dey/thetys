 
 
     
<?php 

echo '<script>

      var center = document.getElementsByClassName("center");
  for (let i = 0; i < center.length; i++) {
    center[i].addEventListener("click", function(e){
      for (let i = 0; i < center.length; i++) {
         center[i].classList.remove("active");
         e.target.classList.add("active");
      }
    })
  }
</script>';
?>

 
 <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </body>
</html>