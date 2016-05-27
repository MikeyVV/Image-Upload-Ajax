<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload file using Ajax</title>
    <meta charset="utf-8">
</head>
<body>

<form enctype="multipart/form-data" method="post" name="fileinfo">
    <input id="photos" type="file" name="file[]" required multiple/>
    <input type="submit" value="Upload files!"/>
</form>
<div></div>

</body>
<script>

    var form = document.forms.namedItem("fileinfo");
    var photos = document.getElementById('photos');
    form.addEventListener('submit', function (ev) {
        var oData = new FormData(form);
        var oReq = new XMLHttpRequest();
        oReq.open("POST", "system/upload.php", true);
        oReq.send(oData);
        ev.preventDefault();
    }, false);


</script>
</html>
