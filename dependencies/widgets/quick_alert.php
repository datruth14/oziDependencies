<?php
/** Installation Guide (How To Use FAB Widget)
 * After Downloading this widget, 
 * move it into your project file in (assets/widgets/qrcode.php)
 * require it in between  the /*=== WIDGETS ==============/* Comment inside your project file in system_config.php 
 * save and call the widget quick_alert() inside any of your componets root files (components/index.php etc)  and add the required parameters as follows::
 * Sample ::: <?php quick_alert("Message");?>
 * or sample 2 ::: <?php quick_alert2("Title","description","Icon");?>
 * icon 1: "success"
 * icon 2: "warning"
 * icon 3: "info"
 * icon 3: "error"
 * leave empty to see default values or update parameters as it suites you
 * thank you for chosing ozi...
 */


//this will called in your script when you need to send an alert
function quick_alert($basic ="Basic Alert"){
    echo "<script>alert('".$basic."');</script>";
}

//this is a sweet alet component built with ozi script component
function quick_alert2($h1 ="Basic Alert",$p="",$icon="success"){
    echo 
    "<script>
    responsealert('".$h1."','".$p."','".$icon."');
    </script>";
}






function quick_alert3($message="Demo Message",$redirect=""){
?>

  <style>
    .alert-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.9);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .alert-box {
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 300px;
      width: 90%;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .alert-box p {
      margin: 0 0 20px;
      line-height: 1.3;
      color: gold;
    }

    .alert-box button {
      padding: 5px 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .alert-box button:hover {
      background-color: #0056b3;
    }
  </style>


  <div id="customAlert" class="alert-overlay" style="display: none;">
    <div class="alert-box">
      <p id="alertMessage"></p>
      <button onclick="redirectToSamePage()">OK</button>
    </div>
  </div>

  <script>
    function showAlert(message) {
      const alertBox = document.getElementById("customAlert");
      const alertMessage = document.getElementById("alertMessage");
      alertMessage.textContent = message;
      alertBox.style.display = "flex";
    }

    function redirectToSamePage() {
      const alertBox = document.getElementById("customAlert");
      alertBox.style.display = "none";

      // Redirect to the same page (reload)
      window.location.href = '<?php echo $redirect ;?>';
    }
    
    showAlert('<?php echo $message;?>');
  </script>
<?php
}


