<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>账号绑定|资讯民大</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    @include('shared._errors')
    @include('shared._messages')
    <form method="POST" action="{{ route('students.store') }}" class="form-signin">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">账号绑定</h2>
        <div class="form-group">
            <input type="text" name="account" class="form-control" placeholder="学号" autofocus value="{{ old('account') }}">
        </div>
        <div class="text">
            <input type="password" name="password" class="form-control" placeholder="密码" value="{{ old('password') }}">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">绑&nbsp;定</button>

    </form>
    <div class="declare">
        <p>我们理解您的隐私的重要性，并对您的用户名和密码严格保密。</p>
    </div>

</div>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
