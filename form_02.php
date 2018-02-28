<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
 <?php 
 include'menu.php';
 ?>
 <div class="content-wrapper">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="row justify-content-end">
          <div class="col-2">ปรับปรุง ม.ค.2558</div>
        </div>
        <div class="row justify-content-center">
          <div class="col-2"><h3><b>LOGO</b></h3></div>
          <div class="col-4 mt-2 p-0 text-center"><b><p>สหกรณ์ออมทรัพย์กรมทางหลวง จำกัด</p><p>ใบคำขอรับสวัสดิการสมาชิก</p></b></div>
        </div>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="row justify-content-end">
            <div class="col-4">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right">เขียนที่</label>
                <div class="col-sm-9 pl-0">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right">วันที่</label>
                <div class="col-sm-9 pl-0">
                  <input type="date" class="form-control text-center" id="inputPassword">
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-1"><b>เรียน</b></div>
            <div class="col-sm-11">ผู้จัดการสหกรณ์ออมทรัพย์กรมทางหลวง จำกัด</div>
          </div>
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-1 col-form-label pr-0">ข้าพเจ้า</label>
                <div class="col-sm-4 text-center mt-2">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">นาย</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">นาง</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">นางสาว</label>
                  </div>
                </div>
                <div class="col-sm-7 pl-0">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="row">
                <div class="col-sm-5 mt-2">สมาชิกเลขที่</div>
                <div class="col-sm-7"><input type="text" class="form-control" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">สังกัด</div>
                <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2">เลขที่บัตรประชาชน</div>
                <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2 pr-0">ที่อยู่บ้านเลขที่</div>
                <div class="col-sm-1 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">หมู่ที่</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2">ซอย</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">ถนน</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">แขวง/ตำบล</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">เขต/อำเถอ</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2">จังหวัด</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">รหัสไปรษณีย์</div>
                <div class="col-sm-1 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-sm-2 mt-2 pr-0">เบอร์โทรศัพท์บ้าน/มือถือ</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-12 mt-3 "><b>มีความประสงค์ขอรับสวัสดิการ</b></div>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm-6">
              <div class="row form-group">
                <div class="col-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการมงคลสมรส</b></label>
                  </div>
                </div>
                <div class="col-sm-4 mt-3">วันเดือนปี จดทะเบียนสมรส</div>
                <div class="col-sm-7 mt-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-12 mt-2"><b><u>เอกสารประกอบ</u></b></div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชน</label>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาใบทะเบียนสมรส</label>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการเกื้อกูลสมาชิกอาวุโส อายุครบ 61 ปี ขึ้นไป</b></label>
                  </div>
                </div>
                <div class="col-sm-4 mt-3 form-inline">เกิดวันที่
                  <select class="form-control ml-3">
                    <option>1</option>
                  </select>
                </div>
                <div class="col-sm-4 mt-3 form-inline">เดือน
                  <select class="form-control ml-3">
                    <option>มกราคม</option>
                  </select>
                </div>
                <div class="col-sm-4 mt-3 form-inline">ปี
                  <select class="form-control ml-3">
                    <option>2561</option>
                  </select>
                </div>
                <div class="col-sm-2 pr-0 mt-3">
                  ปัจจุบันอายุ
                </div>
                <div class="col-sm-2 mt-2">
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-1 mt-3">ปี</div>
                <div class="col-sm-12 mt-2"><b><u>เอกสารประกอบ</u></b></div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชน</label>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการสงเคราะห์สมาชิกเจ็บป่วย</b></label>
                  </div>
                </div>
                <div class="col-sm-4 mt-3">เข้ารักษาตัวเป็นผู้ป่วยใน</div>
                <div class="col-sm-1 mt-3 pr-0 pl-0"> จำนวน</div>
                <div class="col-sm-4 mt-2">
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-3 pr-0 pl-0 mt-3">คืน</div>
                <div class="col-sm-1 mt-3 pr-0">
                  ตั้งแต่
                </div>
                <div class="col-sm-4 mt-2">
                  <input type="date" class="form-control text-center" name="">
                </div>
                <div class="col-sm-1 mt-3 pr-0 pl-0">ถึงวันที่</div>
                <div class="col-sm-4 mt-2">
                  <input type="date" class="form-control text-center" name="">
                </div>
                <div class="col-sm-12 mt-2"><b><u>เอกสารประกอบ</u></b></div>
                <div class="col-sm-12 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชน</label>
                  </div>
                </div>
                <div class="col-sm-12 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ใบรับรองแพทย์ระบุการเข้ารับการรักษาตัวใน รพ. หรือ <br>ใบสรุปค่าใชจ่ายในการเป็นผู้ป่ วยในของ รพ.</label>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการสาหรับการอุปสมบทหรือประกอบพิธีฮัจญ</b></label>
                  </div>
                </div>
                <div class="col-sm-12 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชน</label>
                  </div>
                </div>
                <div class="col-sm-12 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ใบอนุญาตให้ลาอุปสมสบตามระเบียบราชการ หรือใบสุทธิแสดงว่าอุปสมบท</label>
                  </div>
                </div>
                <div class="col-sm-12 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"> ใบอนุญาตให้ลาไปประกอบพิธีฮัจญ์ตามระเบียบราชการ <br>หรือหลักฐานแสดงว่าไปประกอบพิธีฮัจญ์</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row form-group">
                <div class="col-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการเงินรับขวัญบุตรสมาชิก</b></label>
                  </div>
                </div>
                <div class="col-sm-4 mt-3">วันเดือนปี เกิดของบุตร</div>
                <div class="col-sm-7 mt-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-12 mt-2"><b><u>เอกสารประกอบ</u></b></div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชน</label>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาใบสูติบัตร</label>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการเงินบำเหน็จให้แก่สมาชิกสามัญ</b></label>
                  </div>
                </div>
                <div class="col-sm-3 mt-4">เป็นสมาชิกเมื่อ</div>
                <div class="col-sm-8 mt-3"><input type="date" class="form-control text-center" name=""></div>
                <div class="col-sm-3 mt-3 pr-0">รวมอายุการเป็นสมาชิก</div>
                <div class="col-sm-2 mt-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-3">ปี</div>
                <div class="col-sm-2 mt-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-3 pr-0 pl-0">เดือน</div>
                <div class="col-sm-2 mt-3 pr-0 pl-0">(นับถึง 30 ก.ย.)</div>
                <div class="col-sm-12 mt-2"><b><u>เอกสารประกอบ</u></b></div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชน</label>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการเงินบำเหน็จให้แก่สมาชิกสามัญ</b></label>
                  </div>
                </div>
                <div class="col-sm-3 mt-4">เป็นสมาชิกเมื่อ</div>
                <div class="col-sm-2 mt-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">บิดา</label>
                  </div>
                </div>
                <div class="col-sm-2 mt-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">มารดา</label>
                  </div>
                </div>
                <div class="col-sm-4 mt-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">คู่สมรสของสมาชิกสามัญ</label>
                  </div>
                </div>
                <div class="col-sm-3 mt-3 pr-0">รวมอายุการเป็นสมาชิก</div>
                <div class="col-sm-8 mt-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-12 mt-2"><b><u>เอกสารประกอบ</u></b></div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชนของสมาชิก</label>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาทะเบียนบ้านของสมาชิก</label>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาใบมรณะภาพ</label>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12 mt-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><b>สวัสดิการสมาชิกผู้สำเร็จการศึกษา</b></label>
                  </div>
                </div>
                <div class="col-sm-12 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาบัตรประชาชน</label>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาใบสำเร็จการศึกษา หรือ</label>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาใบปริญญาบัตร</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="row form-group">
              <div class="col-sm-12"><h6><b><u>รับเงินโดย</u></b></h6></div>
              <div class="col-sm-1 mt-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">เงินสด</label>
                </div>
              </div>
              <div class="col-sm-3 mt-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">โอนเข้าบัญชีสหกรณ์ ประเภท</label>
                </div>
              </div>
              <div class="col-sm-2 mt-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">ออมทรัพย์</label>
                </div>
              </div>
              <div class="col-sm-2 mt-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">ออมทรัยพ์พิเศษ</label>
                </div>
              </div>
              <div class="col-sm-1 mt-2">เลขที่บัญชี</div>
              <div class="col-sm-3 mt-1"><input type="text" class="form-control" name=""></div>
            </div>
            <div class="row form-group">
              <div class="col-sm-2 mt-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">โอนเข้าบัญชีธนาคาร</label>
                </div>
              </div>
              <div class="col-sm-1 mt-2 pl-0">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">กรุงไทย</label>
                </div>
              </div>
              <div class="col-sm-3 mt-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">ไทยพาณิชย์ ประเภทออมทรัพย์</label>
                </div>
              </div>
              <div class="col-sm-1 mt-2 ">เลขที่บัญชี</div>
              <div class="col-sm-3 mt-1"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-2 mt-2"><small>(พร้อมสำเนาหน้าสมุดบัญชี)</small></div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-6 mt-3 md-3">
              <div class="form-group row justify-content-center">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right"><b>ลงชื่อ</b></label>
                <div class="col-sm-6 pl-0">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <label for="inputPassword" class="col-sm-3 col-form-label"><b>ผู้ขอรับสวัดการ</b></label>
                <div class="col-sm-8 mt-2">
                  <input type="text" class="form-control text-center" id="inputPassword" placeholder="ชื่อและนามสกุล">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
              <div class="card">
                <div class="card-body">
                  <div class="row form-group">
                    <div class="col-sm-12">สำหรับเจ้าหน้าที่</div>
                    <div class="col-sm-2 pr-0 mt-2">เรียน</div>
                    <div class="col-sm-10 mt-2 pl-0">ผู้จัดการ</div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                      <div class="col-sm-12">&nbsp;&nbsp;&nbsp;ได้ตรวจสอบหลักฐานถูกต้องเรียบร้อยแล้ว จึงเสนอเพื่อ</div>
                      <div class="row">
                        <div class="col-sm-5 pl-0 pr-0 mt-2">ขออนุมัติจ่ายเงินสวัสดิการ</div>
                        <div class="col-sm-7"><input type="text" class="form-control" name=""></div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2 pl-0 pr-0 mt-2">เป็นเงิน</div>
                        <div class="col-sm-3 pl-0 mt-1"><input type="text" class="form-control text-right" name=""></div>
                        <div class="col-sm-1 mt-2 pr-0 pl-0">บาท</div>
                        <div class="col-sm-6 pl-0 mt-1">
                          <input type="text" class="form-control text-center" name="">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4"></div>
                    <divc class="col-sm-8 mt-4">
                      <div class="row">
                        <div class="col-sm-3 mt-2"><b>ลงชื่อ</b></div>
                        <div class="col-sm-9"><input type="text" class="form-control" name=""></div>
                      </div>
                    </divc>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="card">
                <div class="card-body">
                  <div class="col-sm-12">อนุมัติการจ่ายเงินสวัสดิการ ตามเสนอ</div>
                  <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8 mt-5">
                      <div class="row">
                        <div class="col-sm-3 pl-0 mt-2 text-right"><b>ลงชื่อ</b></div>
                        <div class="col-sm-9 pl-0"><input type="text" class="form-control" name=""></div>
                        <div class="col-sm-12 mt-2"><input type="text" class="form-control" name=""></div>
                        <div class="col-sm-12 mt-2 text-center"><b>ผู้จัดการ หรือ ผู้ที่ได้รับมอบหมาย</b></div> 
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>