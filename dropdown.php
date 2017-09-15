<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  float:left;
  cursor: pointer;
  border-radius: 50px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.dropdown {
    position: relative;
    width:20%;
    display: inline-block;
    float: right;
    
}

.dropdown-content {
    display: none;
    background-color: #f9f9f9;
    min-width: 160px;
    position: absolute;
    margin-left: 50px;

    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Edit Profile</button>
  <div class="dropdown-content">
    <a href="password.php">Change Password</a>
    <a href="mobile.php">Change What's No.</a>
    <a href="choice.php">Change Intrested Hubs</a>
  </div>
</div>


</body>
</html>