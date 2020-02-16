<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <input type="text"  name="table" placeholder="表名" value="schools">
    <br>
    <textarea name="field" id="" placeholder="字段" cols="30" rows="10">province_id=2</textarea>
    <br>
    <input type="submit">
</form>

<pre>
    {!! $result !!}
</pre>
</body>
</html>
