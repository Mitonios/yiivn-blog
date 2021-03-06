<?php
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo Url::base() ?>/css/blog.css">
    <!--<link rel="stylesheet" href="blog.css">-->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Trang chủ</a>
            <a class="nav-link" href="#">Liên hệ</a>
        </nav>
    </div>
</div>
<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Yiivn Blog</h1>
        <p class="lead blog-description">Trang blog thực hành sử dụng Yii2</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php echo $content ?>
        </div><!-- /.blog-main -->
        <div class="col-sm-3 offset-sm-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Tác giả</h4>
                <p>Chèn thông tin tác giả là bạn vào đây.</p>
            </div>
        </div><!-- /.blog-sidebar -->
    </div><!-- /.row -->
</div><!-- /.container -->
<footer class="blog-footer">
    <p>Blog được tạo bởi ai đó, vào năm nào đó, bạn tự nhận bản quyền về mình luôn</p>
</footer>
</body>
</html>

