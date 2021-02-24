<? if(isset($_POST['pickup_select'])) {
        
        $id = $_POST['pickup_select'];
      // include("config.php");
        $conn = mysqli_connect("localhost", "root", "", "cabroute");

      $sql = "SELECT * FROM `subpickup` WHERE `id`= '$id' ";
      $res = mysqli_query($conn, $sql);
      $conn=null;
      if(mysqli_num_rows($res) > 0) {
        echo "<option value=''>------- Select --------</option>";
        while($row = mysqli_fetch_object($res)) {
          echo "<option value='".$row->id."'>".$row->location."</option>";
        }
      }else{
          echo "<option value=''>!!!!!!!!!! NO DATA !!!!!!!!!!</option>";
      }
     }
     if(isset($_POST['drop_select']) ) {

      $drop_id = $_POST['drop_select'];
      // include("config.php");
      $conn = mysqli_connect("localhost", "root", "", "cabroute");

      $sql = "SELECT * FROM `subdrop` WHERE `id`='$drop_id'";
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