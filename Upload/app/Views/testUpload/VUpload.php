<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
</head>
<body>

    <form action="/upload" method="post" enctype="multipart/form-data">

        <label for="file">File</label>

        <input id="file" name="file" type="file" />

        <button>Upload</button>
 
    </form>

</body>
</html>