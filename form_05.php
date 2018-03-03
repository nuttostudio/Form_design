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
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
          <div class="col-2 text-right">เริ่มใช้ ส.ค. 2556</div>
        </div>
        <div class="row justify-content-center">
          <div class="col-2"><h3><b>LOGO</b></h3></div>
          <div class="col-4 mt-2 p-0 text-center"><b><p>สหกรณ์ออมทรัพย์กรมทางหลวง จำกัด</p><p>ใบลาออกจากการเป็นสมาชิก</p></b></div>
        </div>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="row justify-content-end">
            <div class="col-4">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right">เขียนที่</label>
                <div class="col-sm-9 pl-0">
                  <input type="text" class="effect-1" id="inputPassword">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right">วันที่</label>
                <div class="col-sm-9 pl-0">
                  <input type="date" class="effect-1 text-center" id="inputPassword">
                  <span class="focus-border"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-1"><b>เรียน</b></div>
            <div class="col-sm-11">คณะกรรมการดำเนินการ  สอ.ทล.จำกัด</div>
          </div>
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-7">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label "><b>ข้าพเจ้า</b></label>
                <div class="col-sm-4 mt-2 pl-0">
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
                <div class="col-sm-6 pl-0">
                  <input type="text" class="effect-1" id="inputPassword">
                  <span class="focus-border"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="row">
                <div class="col-sm-3 mt-2 pl-0 pr-0 text-center">สมาชิกเลขที่</div>
                <div class="col-sm-9">
                  <input type="text" class="effect-1" name="">
                  <span class="focus-border"></span>
                </div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">สังกัด</div>
                <div class="col-sm-4">
                  <input type="text" class="effect-1 focus-border" name="">
                  <span class="focus-border"></span>
                </div>
                <div class="col-sm-2 mt-2 pr-0">วัน/เดือน/ปีเกิด(พ.ศ.)</div>
                <div class="col-sm-3 pl-0 ml-0">
                  <input type="date" class="effect-1 text-center" name="">
                  <span class="focus-border"></span>
                </div>
                <div class="col-sm-2 mt-2 pr-0 pl-0"><b>(อายุไม่ต่ำกว่า 20 ปีบริบูรณ์)</b></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">สถานภาพ</div>
                <div class="col-sm-2 mt-2">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">โสด</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">สมรส</label>
                  </div>
                </div>
                <div class="col-sm-1 mt-2 pr-0">(ชื่อคู่สมรส)</div>
                <div class="col-sm-6 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-sm-2 mt-2 pr-0 pl-0">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">หม้าย</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">หย่า</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2 pr-0"><b>ที่อยู่ปัจจุบัน</b></div>
                <div class="col-sm-1 mt-2">บ้านเลขที่</div>
                <div class="col-sm-1 pr-0 pl-1"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2">หมู่บ้าน</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">หมู่ที่</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">ซอย</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">ถนน</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">แขวง/ตำบล</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">เขต/อำเภอ</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">จังหวัด</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2 pr-0">รหัสไปรษณีย์</div>
                <div class="col-sm-1 pr-0"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2 pr-0 text-right">เบอร์โทรศัพท์(มือถือ)</div>
                <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2 pr-0">เบอร์โทรศัพท์(บ้าน)</div>
                <div class="col-sm-3 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-3 mt-2"><b>ที่อยู่สำหรับการติดต่อและส่งเอกสาร</b></div>
                <div class="col-sm-9 mt-2">
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">ที่เดียวกับที่อยู่ปัจจุบัน</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">ที่ทำงาน</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label mr-2" for="inlineRadio2">อื่นๆ</label>
                  <input type="text" class="form-control" placeholder="ระบุ" name="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1 mt-2">บ้านเลขที่</div>
              <div class="col-sm-1 pr-0 pl-0"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-1 mt-2 pr-0">หมู่บ้าน</div>
              <div class="col-sm-1 pr-0 pl-0"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-1 mt-2 pr-0">หมู่ที่</div>
              <div class="col-sm-1 pl-0 pr-0"><input type="text" class="form-control text-center" name=""></div>
              <div class="col-sm-1 mt-2 pr-0">ซอย</div>
              <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              <div class="col-sm-1 mt-2 pr-0">ถนน</div>
              <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1 pr-0 mt-2">แขวง/ตำบล</div>
              <div class="col-sm-2 pr-0 pl-0"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-1 mt-2 pr-0">เขต/อำเภอ</div>
              <div class="col-sm-2 pr-0 pl-0"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-1 mt-2 pr-0">จังหวัด</div>
              <div class="col-sm-2 pl-0 pr-0"><input type="text" class="form-control text-center" name=""></div>
              <div class="col-sm-1 mt-2 pl-0 pr-0 text-center">รหัสไปรษณีย์</div>
              <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              <div class="col-sm-12 mt-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ได้รับทราบข้อความในข้อบังคับ  สอ.ทล.จำกัด และเห็นชอบในวัตถุประสงค์ของ สอ.ทล.จำกัด จึงขอสมัครเข้าเป็นสมาชิกสมทบและให้ถ้อยคำเพิ่มเติม ต่อ สอ.ทล.จำกัด ดังต่อไปนี้
              </div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-3 mt-2 pr-0"><b>1. ข้าพเจ้าสมัครสมาชิกสมทบ</b></div>
              <div class="col-sm-1 mt-2 pl-0"><b>ประเภท</b></div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-11">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">พนักงานราชการ</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">ลูกจ้างชั่วคราว</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">เป็น / เคยเป็นข้าราชการหรือลูกจ้างประจำกรมทางหลวง</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-1 mt-2">สังกัด</div>
              <div class="col-sm-3 pr-0 pl-0"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-1 mt-2 pr-0">(รหัสสังกัด)</div>
              <div class="col-sm-1 pr-0 pl-0"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-1 pr-0 pl-0 text-center mt-2">อัตราเงินเดือน</div>
              <div class="col-sm-3 pr-0 pl-0"><input type="text" class="form-control" name=""></div>
              <div class="col-sm-1 mt-2">บาท</div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-11">
                <b><u>เฉพาะพนักงานราชการ / ลูกจ้างชั่วคราว</u></b>  (โปรดระบุการส่งหุ้นรายเดือน ขั้นต่ำ 100 บาท สูงสุดไม่เกิน  1 ใน 3 ของเงินเดือน) 
              </div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-2 mt-2">ประสงค์ส่งค่าหุ้นเดือนละ</div>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-sm-1 mt-2">บาท</div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-11">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">บุคคลในครอบครัว  เกี่ยวข้องเป็น</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">คู่สมรส</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">บิดา / มารดา</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">บุตร</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">พี่น้องร่วมบิดามารดาเดียวกัน</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-2 mt-2">ของสมาชิกสามัญ ชื่อ</div>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-sm-1 mt-2">สกุล</div>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-sm-1 pl-0 pr-0 mt-2 text-center">เลขสมาชิก</div>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="">
              </div>
            </div>
          </div>
          <div class="col-12 form-group">
            <div class="row">
              <div class="col-sm-5 mt-2 pr-0">2.  ข้าพเจ้าจะปฏิบัติตามข้อบังคับ ระเบียบ และมติของ สอ.ทล.จำกัด ทุกประการ</div>
            </div>
            <div class="row">
              <div class="col-sm-5 mt-2 pr-0">3.  ข้าพเจ้าขอรับรองว่าข้อความซึ่งได้แสดงไว้ในใบสมัครเป็นความจริงทุกประการ</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mt-3 mb-3">
            <div class="row">
              <div class="col-sm-12">
                <b><u>เอกสารประกอบใบสมัครสมาชิกสมทบ</u></b>
              </div>
              <div class="col-sm-12">
                1.  สำเนาบัตรประชาชน หรือ สำเนาบัตรข้าราชการ และสำเนาทะเบียนบ้านผู้สมัคร
              </div>
              <div class="col-sm-12">
                2.  สำเนาการเปลี่ยนชื่อ – นามสกุล
              </div>
              <div class="col-sm-12">
                3.  สำเนาทะเบียนสมรส (ถ้ามี)           
              </div>
              <div class="col-sm-12">
                4.  กรณี  บุคคลในครอบครัว ( คู่สมรส  บุตร  บิดา  มารดา  พี่น้อง ) แนบหลักฐาน สำเนาบัตรประชาชน และสำเนาทะเบียนบ้านของสมาชิกสามัญ
              </div>
              <div class="col-sm-12">
                5.  กรณี  พนักงานราชการ / ลูกจ้างชั่วคราว  แนบหลักฐาน สำเนาสัญญาจ้าง หรือคำสั่ง ซึ่งผู้บังคับบัญชา (ระดับ ผอ.แขวงขึ้นไป) ลงนามรับรองทุกหน้า
              </div>
              <div class="col-sm-12">
                6.  กรณี  เป็น / เคยเป็นข้าราชการหรือลูกจ้างประจำ  แนบหลักฐาน สลิปเงินเดือน / หลักฐานรับเงินบำนาญ หรือเงินบำเหน็จ  หรือหนังสือรับรองแสดงว่าเป็น / เคยเป็นข้าราชการหรือลูกจ้างประจำกรมทางหลวง
              </div>
              <div class="col-sm-12">
                7.  ค่าธรรมเนียมแรกเข้า  20  บาท  ค่าหุ้น  10  บาท  รวม  30  บาท
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-3 mb-3">
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
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td>
                <div class="row">
                  <div class="col-sm-12"><h5><b>สำหรับสหกรณ์ฯ</b></h5></div>
                  <div class="col-sm-6 mt-2">เห็นสมควรรับสมัครเป็นสมาชิกสมทบได้</div>
                  <div class="col-sm-4"><input type="text" class="form-control" name=""></div>
                  <div class="col-sm-2 mt-2">เจ้าหน้าที่</div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-2 mt-5">อนุมัติ</div>
                  <div class="col-sm-4 mt-5"><input type="text" class="form-control" name=""></div>
                  <div class="col-sm-3 mt-5">ผู้จัดการหรือผู้ที่ได้รับมอบหมาย</div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-sm-12 mt-4"><h6>คณะกรรมการดำเนินการประชุม</h6></div>
                  <div class="col-sm-2 mt-3">ครั้งที่</div>
                  <div class="col-sm-3 mt-1"><input type="text" class="form-control" name=""></div>
                  <div class="col-sm-1 mt-3 pl-0 pr-0 text-center">วันที่</div>
                  <div class="col-sm-4 mt-1"><input type="date" class="form-control text-center" name=""></div>
                </div>
              </td>
            </tr>
          </table>
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