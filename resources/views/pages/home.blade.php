@extends('layouts.default')
@section('title','Finger Print System')

@section('content')


 <html>

<body>
<div class="containe">
    <div class="cont">
	<div class="image">
  <img src="img/logo.png" width="180" height="140">
      
</div>
</div>
 <div class="posi"> 

 	
         
            <h4><b>Finger Print Based Attendance And Door Lock-Unlock System</b></h4>    
            <hr width="50%">
           

<div class="contwrite">

<h6>"Finger Print Based Attendance And Door Lock-Unlock System" is used to secure a room from unverified persons.The whole system is monitored by an admin with this website.This system is used for verified persons who have entrance permission to the room.When anyone presses finger the door will be opened if the fingerprint is verified.At the same time the attendance of the person will be stored in the database of web server.If the fingerprint is not verified the door will not be opened.</h6>


<button class="button">How to Enroll New Finger</button>

</div>

<div class="contbutton">

<button class="button">How to Enroll New Finger</button>

</div>



<div class="contpic">
<div class="image">
  <img src="img/infra.jpg" width="400" height="400">
      
</div>
</div>








 </div>
        
</div>
</body>






















<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
   
} 
.posi
{
	text-align:center;
}

.containe
{
display:block;
color:	#696969;
margin-left:90px;
margin-right:90px;
border-radius:5px;
background-color: white;
margin-top:30px;
}

.cont
{
display:block;
color:  #696969;
margin-left:90px;
margin-right:90px;
border-radius:0px;
background-color: #A9A9A9;
margin-top:30px;
}



.contpic
{
display:block;
color:  #696969;
margin-left:700px;
margin-right: 150px;
border-radius:0px;
background-color:white;
margin-top:-450px;
}

.contwrite
{
display:block;
color:  #696969;
margin-left:150px;
margin-right: 800px;
border-radius:0px;
background-color:white;
margin-top:30px;
}
.contbutton
{
display:block;
color:  #696969;
margin-left:150px;
margin-right: 800px;
border-radius:0px;
background-color:white;
margin-top:30px;
}









h4 {
    font-family: "Courier New", Courier, monospace;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    font-size:30px;
}

h6 {
    font-family: "Courier New", Courier, monospace;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    font-size:20px;
}
img {
    border-radius: 8px;
}
























</style>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</html>
@stop
 

