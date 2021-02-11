<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/normalize.css">

    <title>Document</title>
</head>
<body>
<div id="container">
    <div class="titre"><span>CONNECT</span></div>
    <form action="add/" method="post" enctype="multipart/form-data">
        <input type="email" class="input_write" name="email" placeholder="Email" required="required" autocomplete="off">
        <input type="text" class="input_write" name="username" placeholder="Username" required="required" autocomplete="off">
        <input type="password" class="input_write" name="password" placeholder="Password" required="required">
        <input type="file" id="file_img" required="required" autocomplete="off" name="image"/>
        <label for="file_img" class="input_image"><span>IMAGE</span></label>
        <input type="submit" class="input_clic" value="LOGIN">
        <a href="../" class="change">Login now</a>
    </form>
</div>

</body>
</html>
