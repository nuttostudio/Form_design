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
          <div class="col-2 text-center"><h3><b>LOGO</b></h3></div>
          <div class="col-8 mt-2 p-0 text-center"><b>สหกรณ์ออมทรัพย์กรมทางหลวง จำกัดใบคำขอรับสวัสดิการสมาชิก</b></div>
          <div class="col-2 text-right mt-2">เริ่ม 1 ก.พ. 55</div>
        </div>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="row justify-content-end">
            <div class="col-1 pl-0 pr-0">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label text-right pr-0 pl-0">วันที่</label>
                <div class="col-sm-8 pl-2 pr-2">
                  <select class="form-control">
                    <option>1</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-2 pr-0">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label text-right">เดือน</label>
                <div class="col-sm-8 pl-0">
                  <select class="form-control">
                    <option>มกราคม</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label text-right pr-0 pl-0">พ.ศ.</label>
                <div class="col-sm-8 pl-2 pr-2">
                  <select class="form-control">
                    <option>2561</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-1"><b>เรื่อง</b></div>
            <div class="col-sm-11">ขอเงินสวัสดิการสงเคราะห์สมาชิกกรณีประสบภัยพิบัติ</div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-1"><b>เรียน</b></div>
            <div class="col-sm-11">ผู้จัดการสหกรณ์ออมทรัพย์กรมทางหลวง จำกัด</div>
          </div>
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label pr-0">ข้าพเจ้า</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="row">
                <div class="col-sm-4 mt-2">ตำแหน่ง</div>
                <div class="col-sm-8"><input type="text" class="form-control" name=""></div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="row">
                <div class="col-sm-3 mt-2 pr-1 pl-1">สังกัด</div>
                <div class="col-sm-9"><input type="text" class="form-control" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-2 mt-2">สมาชิกสหกรณ์เลขที่</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2">ได้รับผลกระทบจากภัยพิบัติ</div>
                <div class="col-sm-2 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">อุทกภัย</label>
                  </div>
                </div>
                <div class="col-sm-2 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">วาตภัย</label>
                  </div>
                </div>
                <div class="col-sm-2 mt-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">อัคคีภัย</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-5 mt-2">บ้านหลังที่เกิดเหตุภัยพิบัติโดยมีชื่อข้าพเจ้าอยู่ในทะเบียนบ้าน คือบ้านเลขที่</div>
                <div class="col-sm-1 pl-0"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">หมู่ที่</div>
                <div class="col-sm-1 pl-0"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2">ซอย</div>
                <div class="col-sm-3 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2">ถนน</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-1 -pl-1">แขวง/ตำบล</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">เขต/อำเภอ</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">จังหวัด</div>
                <div class="col-sm-2 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row">
                <div class="col-sm-1 mt-2 pr-0">รหัสไปรณีย์</div>
                <div class="col-sm-2"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-2 mt-2 pr-1 -pl-1">เบอร์โทรศัพท์บ้าน/มือถือ</div>
                <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                <div class="col-sm-1 mt-2 pr-0">เหตุเกิดเมื่อ</div>
                <div class="col-sm-3 pl-0 ml-0"><input type="text" class="form-control text-center" name=""></div>
                <div class="col-12 mt-3 ">ซึ่งทำให้บ้านที่อยู่อาศัยและทรัพย์สินในบ้านเสียหายเป็นรายการ ดังนี้ (ต้องสัมพันธ์กับรูปที่แนบมา)</div>
              </div>
            </div>
            <div class="col-12 form-group">
              <div class="row justify-content-center">
                <div class="col-sm-10 form-group">
                  <div class="row">
                    <div class="col-sm-1 text-right mt-2">1</div>
                    <div class="col-sm-5"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 pl-0 pr-0 mt-2">ราคาประมาณ</div>
                    <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 mt-2">บาท</div>
                  </div>
                </div>
                <div class="col-sm-10 form-group">
                  <div class="row">
                    <div class="col-sm-1 text-right mt-2">2</div>
                    <div class="col-sm-5"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 pl-0 pr-0 mt-2">ราคาประมาณ</div>
                    <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 mt-2">บาท</div>
                  </div>
                </div>
                <div class="col-sm-10 form-group">
                  <div class="row">
                    <div class="col-sm-1 text-right mt-2">3</div>
                    <div class="col-sm-5"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 pl-0 pr-0 mt-2">ราคาประมาณ</div>
                    <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 mt-2">บาท</div>
                  </div>
                </div>
                <div class="col-sm-10 form-group">
                  <div class="row">
                    <div class="col-sm-1 text-right mt-2">4</div>
                    <div class="col-sm-5"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 pl-0 pr-0 mt-2">ราคาประมาณ</div>
                    <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 mt-2">บาท</div>
                  </div>
                </div>
                <div class="col-sm-10 form-group">
                  <div class="row">
                    <div class="col-sm-1 text-right mt-2">5</div>
                    <div class="col-sm-5"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 pl-0 pr-0 mt-2">ราคาประมาณ</div>
                    <div class="col-sm-3"><input type="text" class="form-control" name=""></div>
                    <div class="col-sm-1 mt-2">บาท</div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-6 mt-3 md-3">
                  <div class="form-group row justify-content-center">
                    <label for="inputPassword" class="col-sm-3 col-form-label text-right"><b>ลงชื่อ</b></label>
                    <div class="col-sm-6 pl-0">
                      <input type="text" class="form-control" id="inputPassword">
                    </div>
                    <label for="inputPassword" class="col-sm-3 col-form-label"><b>สมาชิก</b></label>
                    <div class="col-sm-8 mt-2">
                      <input type="text" class="form-control text-center" id="inputPassword" placeholder="ชื่อและนามสกุล">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
           <table class="table table-bordered">
             <tr align="center">
               <th>หลักเกณฑ์ ใช้กับเหตุภัยพิบัติที่เกิดตั้งแต่  1  กุมภาพันธ์  2555  เป็นต้นไป</th>
               <th>เอกสารที่ต้องแนบพร้อมคำขอรับสวัสดิการ</th>
             </tr>
             <tr>
               <td>
                 <div class="row">
                   <div class="col-sm-12"><b><u>อัคคีภัย</u></b></div>
                   <div class="col-sm-12">
                     &nbsp;&nbsp;&nbsp;&nbsp;เป็นความเสียหายที่เกิดจากไฟไหม้บ้านเรือนที่อยู่อาศัย หรือ ไฟไหม้ทรัพย์สิน
                     ที่อยู่ในบ้าน ผู้ที่จะขอรับเงินสวัสดิการต้องเป็นเจ้าของกรรมสิทธิ์บ้าน หรือเจ้าของ
                     ทรัพย์สินที่อยู่ในบ้าน  เงินสวัสดิการฯ ที่จะให้  ดังนี้
                   </div>
                   <div class="col-sm-12">
                     <div class="row justify-content-center">
                       <div class="col-sm-10 row">
                         <div class="col-sm-4 pl-0 pr-0">-  เจ้าของกรรมสิทธิ์บ้าน</div>
                         <div class="col-sm-5 pr-0 pl-0">ให้ตามที่เสียหายจริงไม่เกิน</div>
                         <div class="col-sm-3 pr-0 pl-0">20,000.- บาท</div>
                       </div>
                       <div class="col-sm-10 row">
                         <div class="col-sm-4 pl-0 pr-0">-  ผู้อาศัย</div>
                         <div class="col-sm-5 pr-0 pl-0">ให้ตามที่เสียหายจริงไม่เกิน</div>
                         <div class="col-sm-3 pr-0 pl-0">10,000.- บาท</div>
                       </div>
                     </div>
                   </div>
                   <div class="col-sm-12"><b><u>ภัยพิบัติ</u></b></div>
                   <div class="col-sm-12">
                    &nbsp;&nbsp;&nbsp;&nbsp;เป็นความเสียหายที่เกิดจากน้ำท่วม,  พายุพัดพา,  แผ่นดินไหว,  ดินโคลนถล่มบ้านเรือนที่อยู่อาศัย  หรือทรัพย์สินที่อยู่ในบ้านจนได้รับความเสียหาย  หลักเกณฑ์ที่จะจ่ายเงินสวัสดิการฯ เป็นดังนี้<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;1.  สมาชิกที่ขอรับสวัสดิการฯ ต้องมีชื่ออยู่ในทะเบียนบ้าน (รวมบ้านพักกรมทางหลวง)
                    หลังที่ประสบภัยพิบัติไม่น้อยกว่า  30  วัน ก่อนวันเกิดเหตุภัยพิบัติ<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;2.  ให้เฉพาะบ้านหรือทรัพย์สินภายในบ้านของสมาชิกเท่านั้น (ไม่รวมอุปกรณ์
                    ที่ใช้ในการป้องกันน้ำท่วม)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;กรณีขอเป็นตัวบ้านเสียหายต้องแสดงหลักฐานกรรมสิทธิ์การเป็นเจ้าของบ้าน
                    ของสมาชิกหรือคู่สมรสด้วย<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;3.  เงินสวัสดิการให้ตามความเสียหายจริงไม่เกินรายละ 5,000.- บาท<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;4.  จ่ายปีละ  1  ครั้งต่อประเภทภัยพิบัติ<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;5.  ยื่นหนังสือพร้อมเอกสารการขอรับเงินสวัสดิการฯ ถึงสหกรณ์ฯ ภายใน 120  วัน 
                    นับตั้งแต่วันที่เกิดภัยพิบัติ<br>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">สำเนาทะเบียนบ้านที่ประสบภัย ซึ่งสมาชิกมีชื่ออยู่ พร้อมรับรองสำเนาถูกต้อง</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">หนังสือรับรองการเกิดภัยพิบัติอย่างใดอย่างหนึ่ง  ดังนี้</label>
                    </div>
                    <ul style="list-style:none;" class="mt-2">
                      <li>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">หนังสือรับรองการเกิดภัยพิบัติของส่วนราชการหรือองค์กรปกครองส่วนท้องถิ่น</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">หนังสือรับรองการเกิดภัยพิบัติของผู้บังคับบัญชาระดับ หัวหน้างานขึ้นไป โดยต้องมีหนังสือของทางราชการที่ประกาศเป็นพื้นที่ภัยพิบัติแนบด้วย</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">บัตรประจำตัวประชาชนหรือบัตรประจำตัวข้าราชการ</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">ภาพถ่ายบ้านหรือทรัพย์สินที่เสียหายจากภัยพิบัติ  โดยสมาชิกขอรับสวัสดิการฯ รับรองทุกภาพ (ภาพถ่ายที่แนบต้องสัมพันธ์กับรายการที่เสียหายของบ้านหรือทรัพย์สินในบ้านที่ระบุข้างต้น)</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">การรับเงิน</label>
                    </div>
                    <ul style="list-style:none;" class="mt-2">
                      <li>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">รับด้วยตนเอง</label>
                        </div>
                      </li>
                      <li class="form-inline">
                        <div class="form-check mt-2">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">โอนบัญชีเงินฝากสหกรณ์</label>
                          <input type="text" class="form-control ml-3" name="">
                        </div>
                      </li>
                      <li class="form-inline">
                        <div class="form-check mt-2">
                          <input type="checkbox" class="form-check-input " id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">โอนบัญชีธนาคาร</label>
                          <input type="text" class="form-control ml-3" name="">
                          <label class="form-check-label ml-2" for="exampleCheck1"><small>(แนบสำเนาบัญชีด้วย)</small></label>
                        </div>
                      </li>
                      <li class="form-inline">
                        <div class="form-check mt-2">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">ธนาณํติ ปณ</label>
                          <input type="text" class="form-control ml-3" name="">
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-5 mt-3"><h6>- ตรวจสอบหลักฐานแล้วครบถ้วนสมบูรณ์</h6></div>
          <div class="col-sm-5 mt-3"><h6>- อนุมัติตามเสนอ</h6></div>
          <div class="col-sm-5 mt-3"><h6>- เสนอเพื่อพิจารณาอนุมัติ</h6></div>
          <div class="col-sm-5 mt-3"><h6>- ดำเนินการตามระเบียบฯ ต่อไป</h6></div>
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