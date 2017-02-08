<form  method="post" enctype="multipart/form-data" id="registrationForm" name="registrationForm" action="" style="padding-top: 10px">
                        <h3>ลงขายสินค้า</h3>
                        <div class="form-group">
                            <label for="username">ตั้งชื่อสินค้า</label>
                            <input type="text" class="form-control" id="mem_user" name="mem_user" placeholder="ชื่อสินค้า" style="width: 300px">
                        </div>
                        <label for="password">เลือกหมวหมู่ให้ตรงกับสิ่งที่ต้องการขาย</label><div class="form-group">
                            
                            <select style="height: 43px">

                			<option value="">ประเภทอสังหาริมทรัพย์</option>
                			<option value="house">บ้าน</option>
                			<option value="townhouse">ทาวน์เฮ้าส์</option>
                			<option value="condo">คอนโดมิเนียม</option>
                			<option value="land">ที่ดิน</option>
                			<option value="factory">โรงงาน โกดัง</option>
                			<option value="build">อาคารพาณิชย์</option>
                			<option value="hotel">โรงแรม รีสอร์ท</option>
                			</select>
                        </div>
                        <div class="form-group">
                            <label for="repassword">ระบุราคา (ที่เหมาะสม)</label>
                            <input type="password" class="form-control" id="repass" name="repass" placeholder="ระบุราคา" style="width: 300px">
                        </div>
                        <div class="form-group">
                            <label for="name">รายละเอียดสินค้า</label>
                            <input type="text" class="form-control" id="mem_name"  name="mem_name" placeholder="ข้อมูลสินค้า(ขนาด (เมตร,ตารางเมตร))" style="width: 300px; height: 150px">
                        </div>
                        <div class="form-group">
                            <label for="pathmap">ตำแหน่งใน Google map</label>
                            <input type="text" class="form-control" id="mem_email"  name="mem_email" placeholder="เพื่อความแม่นยำ" style="width: 300px">
                        </div>
                        <div class="form-group">
                            <label for="locatate">ระบุพื้นที่ของสินค้า</label>
                            <select style="height: 43px"><?php include("province.php") ?></select>
                            <select style="height: 43px"><?php include("district.php") ?></select>
                        </div>
                        <div class="form-group">
                            <label for="pathmap">เบอร์โทร</label>
                            <input type="text" class="form-control" id="mem_email"  name="mem_email" placeholder="08x-xxx-xxxx" style="width: 300px">
                        </div>
                        <div class="form-group">
                            <label for="image member">รูปสินค้า</label>
                            <input type="file" id="mem_image" name="mem_image" style="height: 43px">
                        </div>
                        <div class="form-group">
                        <label for="locatate">คลิกปุ่ม "ลงขาย" เพื่อยอมรับ<a href="">ข้อกำหนดและเงื่อนไขการลงประกาศ</a></label><br>
                        <input type="submit" class="btn" value="ลงขาย" style="background: #FF8C00; color: #ffffff; height: 43px">
                        <input type="reset" class="btn" value="reset" style="background: #FF8C00; color: #ffffff; height: 43px">
                        </div>
                    </form>
               