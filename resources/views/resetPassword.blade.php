@extends('layouts.layout')

@section('title')
{{'بازیابی رمز عبور'}}
@endsection
@section('content')

<br/><br/>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">رمز عبور خود را فراموش کرده اید؟</h2>
                  <p>در این قسمت میتوانید با وارد نمودن ایمیل خود، رمز عبور جدید دریافت نمایید</p>
                  <div class="panel-body">

                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="/resetPassMethod">
                        @csrf
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="ایمیل" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="بازیابی گذرواژه" type="submit">
                      </div>

                      <input type="hidden" class="hide" name="token" id="token" value="">
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>

@endsection
