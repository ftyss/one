<html>
<head>
    <title></title>
</head>
<body>
<center>
    <h1>公众号标签管理</h1>
    <a href="{{url('/wechat/addtag')}}">增加标签</a>
    <a href="{{url('/wechat/get_user_list')}}">粉丝列表</a>
    <br>
    <br>
    <br>
    <table border="1">
        <tr>
            <td>tag_id</td>
            <td>tag_name</td>
            <td>标签下粉丝数</td>
            <td>操作</td>
        </tr>
        @foreach($info as $v)
        <tr>
            <td>{{$v['id']}}</td>
            <td>{{$v['name']}}</td>
            <td>{{$v['count']}}</td>
            <td>
                <a href="{{url('wechat/deltag',['id'=>$v['id']])}}">删除</a> | 
                <a href="{{url('wechat/edtag',['id'=>$v['id']])}}">修改</a> |
                <a href="{{url('/wechat/user_tag')}}?tagid={{$v['id']}}">粉丝列表</a> |
                <a href="{{url('/wechat/get_user_list')}}?tagid={{$v['id']}}">粉丝打标签</a> |
                <a href="{{url('/wechat/pushtag')}}?tagid={{$v['id']}}">推送消息</a>
            </td>
        </tr>
        @endforeach
    </table>
</center>
</body>
</html>