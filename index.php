<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload file using Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .img-preview {
            max-height: 33%;
            margin-left: 0.3vw;
        }
    </style>
</head>
<body>

<form enctype="multipart/form-data" method="post" name="fileinfo">
    <input id="photos" type="file" name="file[]" required multiple/>
    <input type="submit" value="Stash the file!"/>
</form>
<div id="show-img"></div>
</body>
<script>

    var form = document.forms.namedItem("fileinfo");
    var photos = document.getElementById('photos');
    form.addEventListener('submit', function (ev) {
        var oData = new FormData(form);
        var oReq = new XMLHttpRequest();
        oReq.open("POST", "system/upload.php", true);
        oReq.onload = function () {
            if (oReq.status == 200) {
                for (var item = 0; item < photos.files.length; item++) {
                    document.getElementById("show-img").innerHTML = document.getElementById("show-img").innerHTML + "<img class='img-preview' src='photos/" + photos.files[item].name + "'>";
                }
            }
        };
        oReq.send(oData);
        ev.preventDefault();
    }, false);


</script>
</html>
