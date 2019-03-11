@extends('layouts.app')
@section('content')

    <section id="manage">
      <div class="container-fluid" style="border-radius: 2rem">
        <h4>مدیریت قرار داد ها</h4>
        <div class="row mt-3">
          <div class="col-md-3">
            <div class="card text-center bg-one text-white">
              <div class="card-body">
                <h3 class="pb-3">قرارداد ها</h3>
                <h1 class="display-3">
                  <i class="fal fa-file-contract"></i>
                </h1>
              </div>
              <a href="{{route('contracts')}}" class="card-footer">ورود</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center bg-two text-white">
              <div class="card-body">
                <h3 class="pb-3">تفاهم نامه ها</h3>
                <h1 class="display-3">
                  <i class="fal fa-handshake"></i>
                </h1>
              </div>
              <a href="{{route('memorandums')}}" class="card-footer">ورود</a>
            </div>

          </div>
          <div class="col-md-3">
            <div class="card text-center bg-three text-white">
              <div class="card-body">
                <h3 class="pb-3">پروپوزال ها</h3>
                <h2 class="display-3">
                  <i class="fal fa-sticky-note"></i>
                </h2>
              </div>
              <a href="{{route('proposals')}}" class="card-footer">ورود</a>
            </div>
          </div>
          <div class="col-md-3 ml-auto mr-auto">
            <div class="card text-center bg-five text-white">
              <div class="card-body">
                <h3 class="pb-3">گزارش گیری</h3>
                <h1 class="display-3">
                  <i class="fal fa-chart-bar"></i>
                </h1>
              </div>
              <a href="{{route('report')}}" class="card-footer">ورود</a>
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="card text-center bg-three text-white">
              <div class="card-body">
                <h3 class="pb-3">بازدید ها</h3>
                <h2 class="display-3">
                  <i class="fal fa-eye"></i>
                </h2>
              </div>
              <a href="{{route('visits')}}" class="card-footer">ورود</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="changePassword" class="p-3">
      <h4 class="mt-2">مدیریت کاربران</h4>
      <div class="container-fluid bg-four mt-3 p-5 border-round">

        <div class="row">
          <div class="col-md-6">

            <h5 class="pb-3" style="text-align: right">تغییر رمز عبور</h5>

            <form class="">
              <div class="form-group row  ">
                <label for="currentPassword" class="col-sm-4 col-form-label">رمز فعلی</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="currentPassword">
                </div>
              </div>
              <div class="form-group row  ">
                <label for="newPassword" class="col-sm-4 col-form-label">رمز جدید</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="newPassword">
                </div>
              </div>
              <div class="form-group row  ">
                <label for="newPasswordConfirm" class="col-sm-4 col-form-label">تکرار رمز جدید</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="newPasswordConfirm">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mr-auto">
                  <a href="#" class="btn btn-app w-50">تغییر</a>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">

            <h5 class="pb-3" style="text-align: right">اضافه کردن کاربر جدید به سیستم</h5>

            <form id="newUserForm" action="{{}}" method="post">
              <div class="form-group row  ">
                <label for="username" class="col-sm-4 col-form-label">نام کاربری</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="username">
                </div>
              </div>
              <div class="form-group row  ">
                <label for="newUserPassword" class="col-sm-4 col-form-label">رمز</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="newUserPassword" autocomplete="new-password">
                </div>
              </div>
              <div class="form-group row  ">
                <label for="newUserPasswordConfirm" class="col-sm-4 col-form-label">تکرار رمز </label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="newUserPasswordConfirm">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mr-auto">
                  <a href="#" class="btn  btn-app w-50">ثبت</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection