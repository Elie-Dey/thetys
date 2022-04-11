<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    .nav-item {
  text-decoration: none;
  color: #505b67;
  margin-left: 10px;
}
.active {
  color: #4460f1;
}
</style>

<script>

      var center = document.getElementsByClassName("center");
  for (let i = 0; i < center.length; i++) {
    center[i].addEventListener("click", function(e){
      for (let i = 0; i < center.length; i++) {
         center[i].classList.remove('active');
         e.target.classList.add('active');
      }
    })
  }
</script>
<body>
    

<ul class="nav-tab-ul">
    <li id="Profile">
        <a class="center nav-item active" href="">Profile</a>
    </li>
    <li id="Change-Password">
        <a class="center nav-item" href="">Change password</a>
    </li>
    <li id="Notifications">
        <a class="center nav-item" href="">Notifications</a>
    </li>
    <li id="My-Cards">
        <a class="center nav-item" href="">My Cards</a>
    </li>
</ul>
</body>
</html>