<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改标签</title>
</head>
<body>
<center>
    <form action="<?php echo e(url('wechat/edit_tag')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="tag_id" value="<?php echo e($id); ?>">
        标签名:<input type="text" name="name" value="<?php echo e($name); ?>">
        <input type="submit" value="提交">
    </form>
</center>

</body>
</html><?php /**PATH D:\wnnp\www\zxc\resources\views/Wechat/edtag.blade.php ENDPATH**/ ?>