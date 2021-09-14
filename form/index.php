<?php include 'header.php'; ?> 

<script>
        function clickHere(){ 
            var genderleng = document.myform.gender.length;
            var checkResult = " ";
            for(i=0; i<genderleng; i++){
                var checkValue = document.myform.gender[i].checked;
                if(checkValue){
                    var checkResult = document.myform.gender[i].value;
                }
                checkResult += checkResult + ", ";
            }
            var showData = "Your gender is : " + checkResult;
            document.getElementById('output').innerHTML = showData;
        }
    </script>
 
 <div id="output"></div>
  <form method="post" name="myform" id="myform" onsubmit="clickHere(); ">
    <table>
        <tr>
            
        <td>Gender : </td>
            <td>
                <input type="checkbox" name="gender[]" value="Male"/>Male:
                <input type="checkbox" name="gender[]" value="Female"/>Female:
                <input type="checkbox" name="gender[]" value="Others"/>Others:
                <input type="checkbox" name="gender[]" value="1Others"/>1Others:
                <input type="checkbox" name="gender[]" value="2Others"/>2Others:
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="button" value="Submit" onclick="clickHere()"/>
                <input type="reset" value="Clear"/>
            </td>
        </tr>
    </table>
  </form>
                
            

<?php include 'footer.php'; ?>