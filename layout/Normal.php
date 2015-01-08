<?php
// Copyright 2015 The Smpe Authors. All rights reserved.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>StarterKit - Smpe</title>
    <link href="<?php echo Smpe_Url::theme('/style.css')?>" rel="stylesheet">
    <script src="<?php echo Smpe_Url::pub('/src/jquery/jquery.js')?>"></script>
</head>
<body>
<nav>
    <h1>StarterKit</h1>
</nav>
<?php $this->view();?>
<footer class="footer">
    <p>Starter template built for <a href="https://github.com/smpe/Smpe">Smpe</a>.</p>
    <p><a href="#">Back to top</a></p>
</footer>
</body>
</html>
