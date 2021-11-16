<?php
    $link = new mysqli('localhost', 'root', '', 'demo') or die("Kết nối thất bại!");
    include 'top.php';
?>
<h1>Nội dung tiêu đề </h1>
    <div id="noi dung"><!--định dạng cho nội dung website-->
        Phần content (nội dung website)
<!-- <?php
    $link = new mysqli('localhost', 'root', '', 'demo');
    if (!$link) {
        echo "Kết nối thất bại !";
    } else {
        echo "Kết nối thành công !";
    }
?> -->
<?php
    include 'right.php';
    include 'botton.php';
?>