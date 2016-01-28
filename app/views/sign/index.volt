<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">登录/注册</h1>
  </div>
</div>
<div class="row" style="margin:0 auto;align:center;">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Login
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
            <form class="form-horizontal" action="sign/verifly" method="post">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="username">用户名</label>
                <div class="col-sm-10">
                  <?php echo Phalcon\Tag::textField(array(
                  "username",
                  "class"=>"form-control"
                  )
                  );
                  echo Phalcon\Tag::linkTo("sign/register","马上注册");
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="password">密码</label>
                <div class="col-sm-10">
                  <?php
                  echo Phalcon\Tag::passwordField(array(
                    "password",
                    "class"=>"form-control"
                  ));
                  echo Phalcon\Tag::linkTo("sign/forget","忘记密码惹..");
                  ?>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="type" value="login">Sign in</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.col-lg-6 (nested) -->
        </div>
        <!-- /.row (nested) -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
