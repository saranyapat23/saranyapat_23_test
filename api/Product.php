<?php
    include('../config.db.php');
    $table = "CREATE TABLE Product(
    pro_id INT(5) AUTO_INCREMENT COMMENT 'รหัสสินค้า',
    pro_name VARCHAR(20) COMMENT 'ชื่อสินค้า', pro_category INT(100) COMMENT 'ประเภทสินค้า',
    pro_detail varchar(100) COMMENT 'รายละเอียดเพิ่มเติม' ,pro_num DOUBLE COMMENT 'จำนวน' ,
    pro_price DOUBLE COMMENT 'ราคา' ,
    PRIMARY KEY(pro_id)

    )";

    if($conn ->query($table ) === TRUE) {
    echo "เสร็จสิ้น";
    }else{
    echo "เกิดข้อผิดพลาด" .$conn ->error;
    };

$conn ->close();//ปิดการเชื่อต่อฐานข้อมูล

