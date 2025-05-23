
<?php 

//creating qrcode genarator component
//creating qrcode genarator component
//creating qrcode genarator component
function qrcodeGen($url='ozi.com.ng',$width='300',$height="300"){
 ?>

      <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>

      <center><br><Br><Br>
        <div id="qrcode"></div>
      </center>

      <script>
      const qrcode = new QRCode(document.getElementById('qrcode'), {
        text: '<?php echo $url ;?>',
        width: <?php echo $width ;?>,
        height: <?php echo $height ;?>,
        colorDark : '#000',
        colorLight : '#fff',
        correctLevel : QRCode.CorrectLevel.H
      });
      </script>

<?php
}
//creating qrcode genarator component
//creating qrcode genarator component
//creating qrcode genarator component





//creating qrScanner Widgets
//creating qrScanner Widgets
//creating qrScanner Widgets



//creating qrScanner Widgets
//creating qrScanner Widgets
//creating qrScanner Widgets
//creating qrScanner Widgets
function qrScanner($redirect = "./?s=deligates&&data=", $width = "250", $height = "250") {
    ?>
   <script src="https://unpkg.com/html5-qrcode"></script>
    <style>
        #reader {
            width: <?php echo htmlspecialchars($width); ?>px;
            height: <?php echo htmlspecialchars($height); ?>px;
            border: 1px solid #ccc;
        }
        #result {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            color:white;
        }
        .error {
            color: red;
        }
    </style>

    <div id="reader"></div>
    <p id="result"></p>

    <script>
        const targetUrl = <?php echo json_encode($redirect); ?>;

        function onScanSuccess(decodedText) {
            document.getElementById("result").innerText = "Scanned: " + decodedText;
            window.location.href = targetUrl + encodeURIComponent(decodedText);
        }

        function onScanFailure(error) {
            console.warn(`QR Code scan error: ${error}`);
        }

        const scannerConfig = {
            fps: 10,
            qrbox: {
                width: Math.min(<?php echo $width; ?>, <?php echo $height; ?>) * 0.6,
                height: Math.min(<?php echo $width; ?>, <?php echo $height; ?>) * 0.9
            },
            rememberLastUsedCamera: true,
            showTorchButtonIfSupported: true,
            disableFlip: false
        };

        async function startScannerWithBackCamera() {
            try {
                const devices = await Html5Qrcode.getCameras();
                if (devices.length === 0) {
                    document.getElementById("result").innerText = "No camera available.";
                    return;
                }

                const backCamera = devices.find(device => device.label.toLowerCase().includes("back")) || devices[0];
                const scanner = new Html5Qrcode("reader");

                await scanner.start(backCamera.id, scannerConfig, onScanSuccess, onScanFailure);
            } catch (error) {
                document.getElementById("result").innerHTML = `<span class="error">Error: ${error.message}</span>`;
            }
        }

        startScannerWithBackCamera();
    </script>
    <?php
}
//creating qrScanner Widgets
//creating qrScanner Widgets
//creating qrScanner Widgets
?>
