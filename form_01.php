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
        <div class="row">
          <div class="col-2"><h3><b>LOGO</b></h3></div>
          <div class="col-8 mt-2 p-0"><b>แบบขอรับเงินค่าพิธีทางศสนาและเงินสวัดดิการเกี่ยวกับการถึงแก่กรรมของสมาชิก สอ.ทล. จำกัด</b></div>
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
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-1 col-form-label pr-0">1. เนื่องจาก</label>
                <div class="col-sm-3 text-center mt-2">
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
                <div class="col-sm-5 pl-0">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <div class="col-sm-3 mt-2">
                  สมาชิก สอ.ทล. จำกัด
                </div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-2 mt-2">เลขทะเบียนสมาชิก</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2">สังกัด</div>
                <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2">ได้ถึงแก่กรรมเมื่อวันที่</div>
                <div class="col-sm-2"><input type="date" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">เนื่องจาก</div>
                <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2">(สาเหตุการตาย)</div>
                <div class="col-sm-3 mt-2">
                  ข้าพเจ้า&nbsp;&nbsp;
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
                <div class="col-sm-3"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-2 mt-2">เลขประจำตัวประชาชน</div>
                <div class="col-sm-4"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2">เบอร์โทรศัพท์</div>
                <div class="col-sm-4"><input type="tal" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">ที่อยู่</div>
                <div class="col-sm-11"><input type="text" class="form-control" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">เป็น</div>
                <div class="col-sm-2 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ผู้รับโอนประโยชน์</label>
                  </div>
                </div>
                <div class="col-sm-1 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">คู่สมรส</label>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <div class="col-sm-6 form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">บุตร (ระบุจำนวนบุตร)</label>
                  </div>
                  <div class="col-sm-3 pl-0 pr-0">
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="col-sm-3 mt-2">
                    คน
                  </div>
                </div>
                <div class="col-sm-1 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">บิดา</label>
                  </div>
                </div>
                <div class="col-sm-1 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">มารดา</label>
                  </div>
                </div>
                <div class="col-sm-12 mt-3 mb-3">
                  ของสมาชิกผู้ถึงแก่กรรม มีความประสงค์จะขอรับเงินค่าพิธีทางศาสนา และเงินสวัสดิการเกี่ยวกับการถึงแก่กรรมของสมาชิกตามระเบียบของ สอ.ทล. จำกัด
                </div>
                <div class="col-sm-12 mb-3">2. ข้าพเจ้าได้แนบเอกสารต่าง ๆ ดังต่อไปนี้มาด้วย เพื่อประกอบการพิจารณา</div>
                <div class="col-sm-12 mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">บัตรข้าราชการ / ลูกจ้างประจำหรือบัตรประจำตัวประชาชน</label>
                  </div>
                </div>
                <div class="col-sm-12 mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาทะเบียนบ้านที่ประทับการถึงแก่กรรม(ตาย) และรับรองสำเนาถูกต้องแล้ว</label>
                  </div>
                </div>
                <div class="col-sm-12 mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาใบมรณะบัตรที่รับรองสำเนาถูกต้องแล้ว</label>
                  </div>
                </div>
                <div class="col-sm-12 mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">สำเนาทะเบียนสมรส (ถ้ามี) ที่รับรองสำเนาถูกต้องแล้ว</label>
                  </div>
                </div>
                <div class="col-sm-12 mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">หนังสือตั้งผู้รับโอนประโยชน์</label>
                  </div>
                </div>
                <div class="col-sm-12 mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">อื่นๆ</label>
                  </div>
                </div>
                <div class="col-sm-12 mb-3">
                  3. ข้าพเจ้าขอรับรองว่า ข้าพเจ้ามีสิทธิได้รับเงินค่าพิธีทางศาสนาและเงินสวัสดิการเกี่ยวกับการถึงแก่กรรมของสมาชิก ตามระเบียบ
                  ว่าด้วยการให้สวัดิการเกี่ยวกับการถึงแก่กรรมของสมาชิก และถ้าปรากฎต่อไปว่าข้าพเจ้าเป็นผู้ไม่มีสิทธิแต่อย่างใดตามระเบียบ
                  ข้าพเจ้ายินยอมคืนเงินดังกล่าวที่ได้รับไปโดยไม่มีสิทธิตลอดจนชดใช้ค่าเสียหายต่างๆ ที่เกิดขึ้นทั้งสิ้นแก่สหกรณ์ฯ ภายใน 30 วัน
                  นับจากวันที่ทางสหกรณ์ฯ แจ้งให้ข้าพเจ้าทราบตามที่อยู่ข้างต้น
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-6">
              <div class="form-group row justify-content-center">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right">ลงชื่อ</label>
                <div class="col-sm-6 pl-0">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <label for="inputPassword" class="col-sm-3 col-form-label">ผู้ยื่นคำขอ</label>
                <div class="col-sm-8 mt-2">
                  <input type="text" class="form-control text-center" id="inputPassword" placeholder="ชื่อและนามสกุล">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right">ลงชื่อ</label>
                <div class="col-sm-6 pl-0">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <label for="inputPassword" class="col-sm-3 col-form-label">พยาน</label>
                <div class="col-sm-8 mt-2">
                  <input type="text" class="form-control text-center" id="inputPassword" placeholder="ชื่อและนามสกุล">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 mt-3 mb-3">
              <b>หมายเหตุ </b>หากผู้ขอรับเงินเป็นรบุตรให้ระบุจำนวนบุตรที่ชอบด้วยด้วยกฎหมายว่ามีจำนวนทั้งสิ้นกี่คนด้วย
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