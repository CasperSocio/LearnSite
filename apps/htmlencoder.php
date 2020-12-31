<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTML Encoder</title>
	<?php require('../components/headContent.html');?>
</head>
<body>

<?php include('../components/header.html'); ?>

<div class="row" id="wrapper">
    <div class="col-2"></div>
    <div class="col-8 content">

        <h1>HTML Encoder</h1>
        <p class="meta">Converts text to escaped HTML code</p>
        <p>Input the text you want to encode:</p>
        <textarea id="htmlCodeInput" rows="10">Type here...</textarea>
        <button id="submitHtmlBtn" style="margin-top:.6rem;">Encode</button>

        <div style="margin-top:3rem;">
            <h3>Result</h3>
            <div id="htmlEncodeResult" style="overflow-wrap:break-word;"><p>Result is displayed here</p></div>
        </div>

        <p style="font-size:.8rem; margin-top:6rem;">View the complete ASCII table at <a href="https://www.ascii-code.com/">ascii-code.com</a></p>

    </div>
    <div class="col-2"></div>
</div>

<script src="../js/html-encoder.js"></script>
</body>
</html>