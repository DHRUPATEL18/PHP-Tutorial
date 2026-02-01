<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Number</title>
    <script>
        function check(type){
            number = document.getElementById("num").value;
            if(number == ""){
                alert("Please enter a number");
                return false;
            }
            else{                
                const xhr = new XMLHttpRequest();

                xhr.onload = function() {
                  if (xhr.status == 200){
                    console.log('Response received: ', xhr.responseText);
                    document.getElementById("ans").innerHTML = xhr.responseText;
                  }
                  else {
                    console.error('Error fetching data');
                  } 
                }

                xhr.open("GET", type+"logic.php?num="+number, true);
                xhr.send();
            }
            
        }        
        function MagicNumber() {
            check('Magic');
        }

        function ArmstrongNumber() {
            check('Armstrong');
        }
    </script>
</head>
<body>
    <form name="f1" method="post">
        Number: <input type="text" name="num" id="num" /><br>        
        <span id="ans">Ans : </span><br>
        <input type="button" name="submit" value="Check Magic Number" style="margin-top:10px;" onclick="MagicNumber()"/>
        <input type="button" name="submit" value="Check Armstrong Number" style="margin-top:10px;" onclick="ArmstrongNumber()"/>

    </form>
</body>
</html>