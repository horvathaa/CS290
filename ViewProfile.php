<?php include("_header.php"); ?>
<style>
#header {
    background-color:#6AC6AF;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:600px;
    width:100px;
    float:left;
    padding:5px;
}
#section {
    width:950px;
    height:600px;
    float:left;
    padding:10px;
}
#footer {
    background-color:#6AC6AF;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
</style>
<!--colors?
    darker teal #6AC6AF
    tealish#BADFC0
    greyish teal#A7BFB1
-->

<!--<body background="">
-->


<body bgcolor="#F7A810">
<h1>
Your Profile
</h1>


<legend>Profile</legend>

<div id="profileImage" style="float: left; width: 450px; height: 450px;">
</div>

<div id="ClassifiedImage" style="float: right; width: 450px; height: 450px;">
</div>

<div id="name"> Name:<?PHP /*query database to get their name, gender, etc */ ?> Test Example</div>

<br>
<div id="gender"> Gender: Female </div>

<div id="major"> Major: Computer Science </div>

<div id="year"> Year in school: Junior </div>
<br>
<div id="description"> Description/Bio: Hi, my name is Test Example and I love computer scinece I guess.</div>


</body>
