<?php
if(session_status()>=0){
    session_start();
    session_unset();
    ?>
    <script>
    alert("Logout succesfull");
 </script>
<?php
}
header("refresh:0.3;url=index.php");
?>
