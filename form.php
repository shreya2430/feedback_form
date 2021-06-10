<?php
include("connection.php");

?>




<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Form</title>
</head>
<style>
    body {
        background-image: url("https://html.sammy-codes.com/images/background.jpg")
    }

    table {

        color: black;
        font-size: large;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        background-color: palegreen;
        caption-side: block-start;
        flood-color: aqua;
        
        
        margin-right: 120px;
 
        position:fixed;right:70px;
    }
    
    #bt1 {
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: solid;
        font-size: 20px;
        margin: 4px 2px;
        /*cursor: pointer;*/
    }

    h1 {
        text-align: center;
        font-display: block;
        font-family: Cambria, Cochin, Georgia, Times, Times New Roman, serif;
        background-color: cornsilk;
    }

    div.parent {
        position: relative;
        height: 200px;
    }

    div.absolute {
        position: fixed;
        width: 10%;
        bottom: 10px;
        text-align: center;
        background-color: palegreen;
    }

    h4 {
        text-align: center;
    }
    span{
        color:red;
    }
</style>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<body>

<!--
    <form style ="text-align: center;">
    <fieldset>
        <legend style ="text-align: center;">Personal Info</legend>
        <table style="text-align:center;">
            <tr>
        <td>NAME<td>
        <input type="text" required></td></tr>
        <br><br>


        
        <tr><td><label>alphabet</label>
        <detailist id='alpha' >
            <select name="alpha" id='alpha'>
            <option value="al">alpha</option>
            <option value="be">beta</option>
            <option value="a">gamma</option>
            <option value="de">delta</option>
        </detailist></td></tr>
    
<br><br>
<tr><td>
        <label>branch<span>*</span></label>
        <select name ="branch" id="branch">
<option>cse</option>
<option>it</option>
<option>ece</option>
<option>eee</option>
        </select></td></tr>
        <br><br>
      <tr> <td> <input type="submit"></td>
       <td> <input type="reset"></td></tr>
    </table>
    </fieldset> -->

       <h1>FEEDBACK FORM</h1>
       <ol><li><b>What should I improve in this ?</b></li></ol>

    <!--<legend >Personal Info</legend>!-->
   
        <table align= "right" border="1">
           <form>
            
         
        <tb>
                   
                      
            <tr>
                <td>First Name<span>*</span>
                <td><input type="text" required name = "fn"></td>

            </tr>
            <tr>
                <td>Last Name
                <td><input type="text"></td name="ln"> </td>
            </tr>
            <tr>
                <td> Email Address
                <td><input type="email" name="email"> </td></td>
            </tr>
            <tr>
                <td> Mobile number
                <td> <input type="number" pattern="[0-9]{3}"  name="mobile"></td></td>
            </tr>
            <tr>
                <td> Gender</td>
                <td> <input type="radio" name="r1" value="Male">Male<input type="radio" name="r1"value="Female">Female <input type="radio" name="r1" value="other">other </td>
            </tr>
        
            <tr>
                <td>DOB
                <td><input type="date" name = "dob"></td></td>

            </tr>

            <tr><td>
                Year<td>
               <input list="Year"name="yr" id="browser" name =" year">
               <datalist id="Year">
               <option value=1>
               <option value=2>
               <option value=3>
               <option value=4>
               
               </datalist></td></tr><br><br>

            <tr><td>
             Branch<td>
            <input list="branch"name="br" id="browser" name =" branch">
            <datalist id="branch">
            <option value="Computer science  engineering">
            <option value="Mechnaical engineering">
            <option value=" Electrical engineering">
            <option value="Civil engineering">
            <option value="Electronics and communication engineering ">
            </datalist></td></tr><br><br>

            <tr>
                <td>Your Review<span>*</span> </td>
                <td><textarea cols="20" rows="5" required name="review"></textarea></td>
            </tr>
            
            <tr id="bt1">
                 <td> <input type="submit"></td>
                    <td> <input type="reset"></td>

                
            </tr>
        
        </form>


    
</tb>
</table>
    <!--
    <div class="absolute">
        <p><strong>Get a chance to win amazing prizes.</strong></p>
    </div>-->

</body>

</html>

<?php


$fn=$_GET['fn'];
$ln=$_GET['ln'];
$em=$_GET['email'];
$mbl=$_GET['mobile'];
$gen=$_GET['r1'];
$dob=$_GET['dob'];
$yr=$_GET['year'];
$branch=$_GET['branch'];
$review=$_GET['review'];




$query="INSERT INTO feedback_form VALUES ('$fn','$ln','$em','$mbl','$gen','$dob','$yr','$branch','$review')";
$data=mysqli_query($conn,$query);

if ($data)
{
	
	echo "ok";
}
else
{
	echo "data not inserted  into database";
}
	

?>

