<?php
$title = "LiuJianTao的WordPress版权保护系统";
include "header.php";
?>
<body>
<div class="container projects">
<div class="projects-header page-header">
        <h2>WordPress版权保护系统</h2>
        <p>由LiuJianTao开发的WordPress版权保护系统</p>
</div>
<form action="" method="post">
<div class="input-group">
  <span class="input-group-addon">要保护的内容</span>
  <input type="text" name="info1" id="info1" class="form-control" placeholder="要保护的内容">
</div>
<div class="input-group">
  <span class="input-group-addon">您的博客地址</span>
  <input type="text" name="blog" id="blog" class="form-control" placeholder="您的博客地址">
</div>
<div class="input-group">
  <center><input type="submit" name="submit" class="form-control" value="下一步" /></center>
</div>
</form>
</div>
<?php
$blog=$_POST['blog'];
$info1=$_POST['info1'];
$li="<span class='fan'>下方显示的内容</span>";
function mb_strrev($info) {
    $len = mb_strlen($info, 'UTF-8');
    $string = '';
    for ($i = $len - 1; $i >= 0; $i--) {
       $string .= mb_substr($info, $i, 1, 'UTF-8');                                                         
    }
    return $string;
}
$info2 = mb_strrev($info1);
include "footer.php";
?>
<center><h2>使用帮助</h2></center>
<center><p><a href="http://www.liujiantao.me/suibi/archives/90.html" target="_blank">博客完整教程</a></p></center>
<center><h5><span class="label label-info"><a href="http://<?php echo $blog ?>/wp-admin/theme-editor.php" target="_blank">点此添加</a>外观-编辑-style.css在最后一行加入下列代码：.fan{unicode-bidi:bidi-override; direction: rtl;}</span></h5></center>
<center><h5><span class="label label-info"><a href="http://<?php echo $blog ?>/wp-admin/post-new.php" target="_blank">点此开始</a>选择“文本”</span></h5></center>
<center><h5><span class="label label-info">将下方显示内容加入到span标签中</span></h5></center>
<center><h5><span class="label label-info">例：<?php echo htmlspecialchars($li) ?></span></h5></center>
<?php
			if($info1 == ""){
			echo "<center>请先填写要保护的内容！</center>";
			exit();
			}
			if($blog == ""){
			echo "<center>您没有填写博客地址！</center>";
			exit();
			}
			echo "<center>".$info2."</center>";
?>
</body>