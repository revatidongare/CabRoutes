<?php
 if(isset($_POST['PICKUP'])) {
        
        $pick_id = $_POST['PICKUP'];
      // include("config.php");
        $conn = mysqli_connect("localhost", "root", "", "cabroute");
        // echo $pick_id;
        // exit();
      $sql = "SELECT * FROM `subpickup` WHERE `id` = $pick_id";
      $res = mysqli_query($conn, $sql);
      $conn=null;
      if(mysqli_num_rows($res) > 0) {
        echo "<option value=''>------- Select --------</option>";
        while($row = mysqli_fetch_object($res)) {
          echo "<option value='".$row->subid."'>".$row->sublocation."</option>";
        }
      }else{
          echo "<option value=''>!!!!!!!!!! NO DATA !!!!!!!!!!</option>";
      }
     }


     if(isset($_POST['DROP']) ) {

      $drop_id = $_POST['DROP'];
      // include("config.php");
      $conn = mysqli_connect("localhost", "root", "", "cabroute");

      $sql = "SELECT * FROM `subdrop` WHERE `id` = $drop_id";
      $res = mysqli_query($conn, $sql);
      $conn=null;

      if(mysqli_num_rows($res) > 0) {
            echo "<option value=''>------- Select --------</option>";
        while($row = mysqli_fetch_object($res)) {
          echo "<option value='".$row->subid."'>".$row->sublocation."</option>";
        }
      }else{
          echo "<option value=''>!!!!!!!!!! NO DATA !!!!!!!!!!</option>";
      }
     }

     ?>