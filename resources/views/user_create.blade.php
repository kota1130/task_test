<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ユーザー登録画面</title>
<!-- Bootstrap読み込み（スタイリングのため） -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <form method="post">
      <h1>ユーザー登録画面</h1>
      <div class="form-group">
        <label>ログインID</label>
        <input type="text" class="form-control" name="login_id" required />
      </div>

      <div class="form-group">
        <label>メールアドレス</label>
        <input type="email"  class="form-control" name="mail_address" required />
      </div>

      <div class="form-group">
        <label>パスワード</label>
        <input type="password" class="form-control" name="password" required />
      </div>

      <div class="row">
        <div class="form-group col-sm-6">
        <label>姓</label>
        <input type="text"  class="form-control" name="last_name" required />
        </div>
        <div class="form-group col-sm-6">
        <label>名</label>
        <input type="text"  class="form-control" name="first_name" required />
        </div>
      </div>

      <p><b>性別</b></p>
      <div class="radio-inline">
        <label>
        <input type="radio"  name="sex" value=1 required /><b>男</b>
        </label>
      </div>

      <div class="radio-inline">
        <label>
        <input type="radio"  name="sex" value=2 required /><b>女</b>
        </label>
      </div>

      <div class="radio-inline">
        <label>
        <input type="radio"  name="sex" value=3 required /><b>未設定</b>
        </label>
      </div>

      <div>
        <button type="submit" class="btn btn-primary" name="signup">ユーザー登録</button>
      </div>
    </form>
  </div>
</body>
</html>