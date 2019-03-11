@extends('layouts.app')
@section('content')
  <section id="inputProposal">
    <div class="d-flex justify-content-between">
      <h4 class="my-3">قرارداد نمونه</h4>
      <div>
        <i class="fal fa-file-edit header-icon"></i>
        <i class="fal fa-file-contract header-icon"></i>
      </div>
    </div>
    <div class="container-fluid bg-four mt-3 p-3 border-round">
      <h5 class="mt-1 mb-3">ویرایش قرارداد</h5>
      <form action="" method="post">
        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="title">عنوان طرح</label>
          <div class="col-md-3">
            <input type="text" id="title" required=""
                   class="form-control" name="title">
          </div>
          <label class="col-md-2 text-right  col-form-label  " for="titleType">نوع طرح</label>
          <div class="col-md-3">
            <input type="text" id="titleType" required=""
                   class="form-control" name="title_type">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="outsideNumber">شماره قرارداد بیرونی</label>
          <div class="col-md-3">
            <input type="number" id="insideNumber" required=""
                   class="form-control" name="_number">
          </div>
          <label class="col-md-2 text-right col-form-label" for="insideNumber">شماره قرارداد داخلی</label>
          <div class="col-md-3">
            <input type="number" id="insideNumber" required=""
                   class="form-control" name="inside_number">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="employer">کارفرما</label>
          <div class="col-md-3">
            <input type="text" id="employer" required=""
                   class="form-control" name="employer">
          </div>
          <label class="col-md-2 text-right  col-form-label" for="projectExecutives">مجریان طرح</label>
          <div class="col-md-3">
            <input type="text" id="projectExecutives" required=""
                   class="form-control" name="project_executives">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="amount">مبلغ طرح (ریال) </label>
          <div class="col-md-3">
            <input type="text" id="amount" required=""
                   class="form-control" name="amount">
          </div>
          <label class="col-md-2 text-right  col-form-label" for="colleges">همکاران طرح</label>
          <div class="col-md-3">
            <input type="text" id="colleges"
                   class="form-control" name="colleges">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="college">دانشکده مربوطه</label>
          <div class="col-md-3">
            <input type="text" id="college" required=""
                   class="form-control" name="college">
          </div>
          <label class="col-md-2 text-right  col-form-label" for="field">گروه مربوطه</label>
          <div class="col-md-3">
            <input type="text" id="field" required=""
                   class="form-control" name="field">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label " for="startDay">زمان شروع</label>
          <div class="col-md-3">
            <input type="text" id="startDay" required=""
                   class="form-control j-date"
                   name="start_day">
          </div>

          <label class="col-md-2 text-right col-form-label " for="finishDay">زمان خاتمه قرارداد</label>
          <div class="col-md-3">
            <input type="text" id="finishDay" required=""
                   class="form-control j-date"
                   name="finish_day">
          </div>

        </div>
        <div class="form-group row">
          <label class="col-md-2  col-form-label " for="term">مدت قرارداد</label>
          <div class="col-md-3">
            <input type="text" id="term" required=""
                   class="form-control start-day pwt-datepicker-input-element"
                   name="term">
          </div>

          <label class="col-md-2 text-right  col-form-label " for="type">مشارکتی یا انفرادی</label>
          <div class="col-md-3">
            <input type="text" id="type" required=""
                   class="form-control"
                   name="type">
          </div>

        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="status"> وضعیت طرح</label>
          <div class="col-md-3">
            <input type="text" id="status" required=""
                   class="form-control" name="status">
          </div>
        </div>
        <div class="row">
          <label class="col-md-2 col-form-label  " for="documents">اسناد</label>
          <div class="col-md-3">
            <div id="fileInputsContainer" class="d-flex flex-column">
              <div class="d-flex">
                <input type="file" id="documents" required=""
                       class="form-control-file" name="documents[]">
                <button class="btn btn-sm btn-light" onclick="addDocumentInput()">سند جدید</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 ">
            <button class="my-2 btn  btn-app" type="submit">
              <i class="fal fa-edit mr-1"></i>
              ویرایش قرارداد
            </button>
          </div>
        </div>

      </form>
    </div>
  </section>

  <section id="proposalDocuments">
    <div class="d-flex justify-content-between">
      <h4 class="mt-4">اسناد قرارداد نمونه</h4>
    </div>
    <div class="container-fluid bg-four mt-3 p-3 border-round">
      <h5 class="mt-1 mb-3">ویرایش اسناد قرارداد نمونه</h5>
      <div class="col-md-4">
        <div class="d-flex flex-column">
          <div class="d-flex mt-2 justify-content-between">
            <span class="mr-4">سند شماره یک</span>
            <div class="d-flex">
              <a href="#" class="btn btn-light btn-sm mr-1">بارگیری <i class="fal fa-download"></i></a>
              <form class="form-inline" action="" method=""
                    onsubmit="return confirm('آیا از حذف این سند مطمئن هستید؟')">
                @csrf
                <button type="submit" class="btn btn-sm btn-app">حذف
                </button>
              </form>

            </div>
          </div>

          <div class="d-flex mt-2 justify-content-between">
            <span class="mr-4">سند شماره دو</span>
            <div class="d-flex">
              <a href="#" class="btn btn-light btn-sm mr-1">بارگیری <i class="fal fa-download"></i></a>
              <form class="form-inline" action="" method=""
                    onsubmit="return confirm('آیا از حذف این سند مطمئن هستید؟')">
                @csrf
                <button type="submit" class="btn btn-sm btn-app">حذف
                </button>
              </form>

            </div>
          </div>

          <div class="d-flex mt-2 justify-content-between">
            <span class="mr-4">سند شماره سه</span>
            <div class="d-flex">
              <a href="#" class="btn btn-light btn-sm mr-1">بارگیری <i class="fal fa-download"></i></a>
              <form class="form-inline" action="" method=""
                    onsubmit="return confirm('آیا از حذف این سند مطمئن هستید؟')">
                @csrf
                <button type="submit" class="btn btn-sm btn-app">حذف
                </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="allProposal">
    <h4 class="my-3"> قرارداد نمونه</h4>
    <div class="container-fluid mt- mb-5 p-3 bg-white border-round">
      <div class="d-flex mb-2">
        <h5 class="py-2 ">محتوای قرارداد :</h5>
        <form class="form-inline ml-auto" action="{{}}" method="POST"
              onsubmit="return confirm('آیا از حذف قرارداد مطمئن هستید؟')">
          @csrf
          <button type="submit" class="btn btn-app ml-auto">
            <i class="fal fa-times"></i>
            حدف قرارداد
          </button>
        </form>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered ">

          <thead class="text-center   ">
          <tr>
            <th>ردیف</th>
            <th>عنوان طرح</th>
            <th>شماره قرارداد بیرونی</th>
            <th>شماره قرارداد داخلی</th>
            <th>نوع طرح</th>
            <th> کارفرما</th>
            <th>مجریان طرح</th>
            <th>دانشکده مربوطه</th>
            <th>گروه مربوطه</th>
            <th>زمان شروع</th>
            <th>مدت قراداد</th>
            <th>تاریخ خاتمه قرارداد</th>
            <th>مشارکتی/انفرادی</th>
            <th>مبلغ طرح</th>
            <th>وضعیت</th>
          </tr>
          </thead>
          <tbody class=" text-center">
          <tr class="status-finished">
            <th scope="row">1</th>
            <td>پیاده سازی نرم افزار کلود</td>
            <td>98668</td>
            <td>154894</td>
            <td>سازمانی</td>
            <td>بویر</td>
            <td>عباسی مهر</td>
            <td>فناوری اطلاعات</td>
            <td>نرم افزار</td>
            <td>97/12/25</td>
            <td>یک سال</td>
            <td>98/12/25</td>
            <td>انفرادی</td>
            <td>45،000،000</td>
            <td>
              در حال اجرا
            </td>
          </tr>

          </tbody>

        </table>
      </div>
    </div>
  </section>
@endsection