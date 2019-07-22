
@if (!Auth::check())
    <!-- 注册窗口 -->
  <div id="register" class="modal fade" style="z-index: 10000;" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-title">
          <h1 class="text-center">注册</h1>
        </div>
        <div class="modal-body">
          <form class="form-group" action="">
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/user.png"/>
                <lable  for="">请输入手机号：</lable>
              </div>
              <input class="form-control" type="email" placeholder="例如:123@123.com">
            </div>
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/password.png"/>
                <lable  for="">密码</lable>
              </div>
              <input class="form-control" type="password" placeholder="至少6位字母或数字">
            </div>
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/password.png"/>
                <lable  for="">请再次输入密码</lable>
              </div>
              <input class="form-control" type="password" placeholder="至少6位字母或数字">
            </div>
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/verfication.png"/>
                <lable  for="">验证码</lable>
              </div>
              <input class="form-control" type="email" placeholder=" ">
            </div>
            <div class="text-right">
              <button class="btn btn-primary indexLogin" type="submit">注册</button>
<!--              <button class="btn btn-danger" data-dismiss="modal">取消</button>-->
            </div>
            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login">已有账号？点我登录</a>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- 登录窗口 -->
  <div id="login" class="modal fade" style="z-index: 10000;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-title">
          <h1 class="text-center">登录</h1>
        </div>
        <div class="modal-body">
          <form class="form-group" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/user.png"/>
                <lable  for="">用户名</lable>
              </div>
              <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required autofocus>

                    @if ($errors->has('tel'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tel') }}</strong>
                        </span>
                    @endif
    
            </div>
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/password.png"/>
                <lable  for="">密码</lable>
              </div>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div>
              <div class="form-control-left">
                <a href="" data-toggle="modal" data-dismiss="modal" data-target="#register">还没有账号？点我注册</a>
              </div>
              <div class="form-control-right text-right">
                <a href="" data-toggle="modal" data-dismiss="modal" data-target="#forgot">忘记密码？</a>
              </div>
            </div>
              <div>
            </div>

              <button class="btn btn-primary indexLogin" type="submit">登录</button>
<!--              <button class="btn btn-danger" data-dismiss="modal">取消</button>-->
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- 忘记密码窗口 -->
  <div id="forgot" class="modal fade" style="z-index: 10000;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-title">
          <h1 class="text-center">找回密码</h1>
        </div>
        <div class="modal-body">
          <form class="form-group" action="">
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/user.png"/>
                <lable  for="">请输入手机号或邮箱</lable>
              </div>
              <input class="form-control" type="text" placeholder=" ">
            </div>
            <div class="form-group">
              <div class="form-group-title">
                <img src="images/verfication.png"/>
                <lable  for="">请输入手机号或邮箱</lable>
              </div>
              <input class="form-control" type="password" placeholder=" ">
            </div>
            <div>
              <button class="btn btn-primary indexLogin" type="submit">发送</button>
              <!--              <button class="btn btn-danger" data-dismiss="modal">取消</button>-->
            </div>
            <div>
              <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login" >想起来了？立即登录</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endif

  
