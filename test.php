<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .screen {
        height: 500px;
        width: 500px;
        background-color: azure;
        padding: 20px;
    }
  </style>
</head>
<body>
<div id="a" onclick="copyDivToClipboard()"> 

<p style="font-size: 40px;"><b>hello world</b></p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic soluta ipsam beatae! Aperiam natus aut cumque molestias, corrupti repellat expedita temporibus, voluptate dolores eveniet, fugiat dignissimos nisi accusantium doloremque dolore?</p>

</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function copyDivToClipboard() {
        var range = document.createRange();
        range.selectNode(document.getElementById("a"));
        window.getSelection().removeAllRanges(); // clear current selection
        window.getSelection().addRange(range); // to select text
        document.execCommand("copy");
        window.getSelection().removeAllRanges();// to deselect
    }
</script>

</body>
</html>