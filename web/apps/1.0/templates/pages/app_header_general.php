<style>
.navbar { margin-bottom:0px; }
.navbar-white { background-color:#fff;border-color:#e7e7e7;color:#000; }
.navbar-brand, .nav>li>a { color:#000; }
.list-group>a { color:#000;text-decoration:none; }
.bg-grey { background-color:#f5f5f5; }
.mtop15p { margin-top:15px; }
</style>
<nav class="navbar navbar-white">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><b><i>ConstructionAdda</i></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>initializer/start">Home</a></li>
		<li><a href="<?php echo $_SESSION["PROJECT_URL"]; ?>initializer/realEstate">Real Estate</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>