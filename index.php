<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="machine.css">
    <link rel="stylesheet" href="health-machine.html">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>moving-machine</title>
</head>
<body>
<div class="container">
<br><br>
<div class="container">
  <h2>MOVING MOTOR MACHINE</h2>    
  <br><br>        
  <table class="table">
    <thead>
      <tr>
        <th>MOTOR NUMBER</th>
        <th>SWITCH ON</th>
        <th>SWITCH OFF</th>
        <th>CURRENT SPEED</th>
        <th>SPEED CHANGE</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr id="1">
        <td><h4 name="motorNO">motor001</h4></td>
        <td><button id="1" onclick="setdefault(this.id)" type="button" class="btn btn-success">ON</button></td>
        <td><button id="1" onclick="offMotor(this.id)" type="button" class="btn btn-danger">OFF</button></td>
        <td><input id="default1" name="speed" type="text" value="0"></td>
        <td><button id="1" onclick='inc(this.id)' type="button" class="btn btn-success">increase</button></td>
        <td><button id="1" onclick='dec(this.id)' type="button" class="btn btn-success">decrease</button></td> 
      </tr>
      <tr id="2">
        <td><h4 name="motorNO">motor002</h4></td>
        <td><button id="2" onclick="setdefault(this.id)" type="button" class="btn btn-success">ON</button></td>
        <td><button id="2" onclick="offMotor(this.id)" type="button" class="btn btn-danger">OFF</button></td>
        <td><input id="default2" name="speed" type="text" value="0"></td>
        <td><button id="2" onclick='inc(this.id)' type="button" class="btn btn-success">increase</button></td>
        <td><button id="2" onclick='dec(this.id)' type="button" class="btn btn-success">decrease</button></td>
      </tr>
    </tbody>
  </table>
    <br><br>
<button onclick="myFunction()" type="button" class="btn btn-success">ADD MOTOR</button>
<button  onclick="location.href = 'health-machine.html';" type="button" class="btn btn-success">CHECK HEALTH OF MOTOR</button>
</div>
</div>
</body>
<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var last=table.rows.length;
    var motorNo=last+1;
    var defaultSpeed=5;
    var row = table.insertRow(last);
    row.id=motorNo;
    var cell1 = row.insertCell(0);
    cell1.id=motorNo;
    if(motorNo>=10){
      var motor=document.createElement("h4");
      motor.setAttribute("name", "motorNo");
      motor.innerHTML="motor0"+motorNo;
      cell1.appendChild(motor);
    }
    else if(motorNo>99){
      var motor=document.createElement("h4");
      motor.setAttribute("name", "motorNo");
      motor.innerHTML="motor"+motorNo;
      cell1.appendChild(motor);
    }
    else {
      var motor=document.createElement("h4");
      motor.setAttribute("name", "motorNo");
      motor.innerHTML="motor00"+motorNo;
      cell1.appendChild(motor);
    }

    var cell2 = row.insertCell(1);
    cell2.id=motorNo;
    id=motorNo;
    var butt2=document.createElement("button");
    butt2.setAttribute("class", "btn btn-success");
    butt2.setAttribute("style", "padding: 6px 12px;");
    butt2.setAttribute("type", "button");
   butt2.setAttribute("onclick", "setdefault("+id+")");
    butt2.innerHTML='ON';
    butt2.id = motorNo;
    cell2.appendChild(butt2);

    var cell3 = row.insertCell(2);
    cell3.id=motorNo;
    var butt3=document.createElement("button");
    butt3.setAttribute("class", "btn btn-danger");
    butt3.setAttribute("style", "padding: 6px 12px;");
    butt3.setAttribute("onclick", "offMotor("+id+")");
    butt3.setAttribute("type", "button");
    butt3.innerHTML='OFF';
    butt3.id = motorNo;
    cell3.appendChild(butt3);

    var cell4 = row.insertCell(3);
    cell4.id=motorNo;
    var input=document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("value", "0");
    input.setAttribute("name", "speed");
    input.id = 'default'+motorNo;
    cell4.appendChild(input);

    var cell5 = row.insertCell(4);
    cell5.id=motorNo;
    var butt5=document.createElement("button");
    butt5.id = motorNo;              
    butt5.setAttribute("class", "btn btn-success");
    butt5.setAttribute("style", "padding: 6px 12px;");
    butt5.setAttribute("type", "button");
    butt5.setAttribute("onclick", "inc("+id+")");
    butt5.innerHTML='increase';
    cell5.appendChild(butt5);

    var cell6 = row.insertCell(5);
    cell6.id=motorNo;
    var butt6=document.createElement("button");
    butt6.id = motorNo;
    butt6.setAttribute("class", "btn btn-success");
    butt6.setAttribute("style", "padding: 6px 12px;");
    butt6.setAttribute("onclick", "dec("+id+")");
    butt6.setAttribute("type", "button");
    butt6.innerHTML='decrease';
    cell6.appendChild(butt6);
//////////////////////////////////////////////////////

 //   cell2.innerHTML= '<button onclick="ON(this.id)" type="button" class="btn btn-success">ON</button>';
 //   cell3.innerHTML= '<button type="button" class="btn btn-danger">OFF</button>';
  //   cell4.innerHTML= '<input type="text" value="5">';
 //   cell5.innerHTML= '<button  type="button" class="btn btn-success">increase</button>'
 //   cell6.innerHTML= '<button id="moz"  type="button" class="btn btn-success">decrease</button>';
}
function inc(id){
  var arg='default'+id;
  var val=document.getElementById(arg);
  if(val.value>=5){
  val.value++;
  }
}
function dec(id){
  var arg='default'+id;
  var val=document.getElementById(arg);
  if(val.value>5){
    val.value--;
  }
  else
    val.value===0;
}
function setdefault(starting){
  var id='default'+starting;
  var elem=document.getElementById(id);
  elem.value=5;

}
function offMotor(off){
  var id='default'+off;
  var elem= document.getElementById(id);
  elem.value=0;
}
setInterval( function() {
      $('#updated').load('index.php');
      //$('#friendstochatwith').load('checkloggedinchat.php?username=<?php echo $username; ?>&otherchatuser=<?php echo $otherchatuser; ?>');
   }, 10000);
</script>
</html>


<?php

$host='localhost';
$user='root';
$pass='@tarzan123#';
$db='motor-move';
$conn=mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$motorNo = mysqli_real_escape_string($conn, $_REQUEST[motorNo]);

$speed = mysqli_real_escape_string($conn, $_REQUEST[speed]);

echo $motorNo;

$sql = "INSERT INTO record(motorNo, speed ,time) VALUES ('$motorNo', '$speed', 	NOW() )";

if(mysqli_query($conn, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

mysql_close($conn);


?>