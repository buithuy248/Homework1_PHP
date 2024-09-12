<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework5</title>
</head>
<body>
<?php
try {
    // Kết nối tới MySQL sử dụng PDO
    $pdo = new PDO("mysql:host=localhost;dbname=melody", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Sử dụng PDO thêm dữ liệu vào bảng 

    // Câu lệnh SELECT
    $sql_stmt = "SELECT * FROM my_contacts";

    // Thực thi câu lệnh SQL và lấy kết quả
    $stmt = $pdo->query($sql_stmt);

    // Kiểm tra và hiển thị dữ liệu
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'Full Names: ' . $row['full_names'] . '<br>';
            echo 'Gender: ' . $row['gender'] . '<br>';
            echo 'Contact No: ' . $row['contact_no'] . '<br>';
            echo 'Email: ' . $row['email'] . '<br>';
            echo 'City: ' . $row['city'] . '<br>';
            echo 'Country: ' . $row['country'] . '<br><br>';
        }
    } else {
        echo "Không có dữ liệu nào trong bảng.";
    }
} catch (PDOException $e) {
    // Thông báo lỗi nếu có ngoại lệ xảy ra
    die("Không thể kết nối đến cơ sở dữ liệu: " . $e->getMessage());
}
//Thêm dữ liệu vào bảng bằng PDO
try {
    // Kết nối tới MySQL sử dụng PDO
    $pdo = new PDO("mysql:host=localhost;dbname=melody", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh INSERT để thêm dữ liệu vào bảng
    $sql_stmt = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
                 VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
    
    // Chuẩn bị câu lệnh
    $stmt = $pdo->prepare($sql_stmt);

    // Thực thi câu lệnh với các giá trị
    $stmt->execute([
        ':full_names' => 'Alivagant',
        ':gender' => 'Female',
        ':contact_no' => '248',
        ':email' => 'aniverse@gmail.com',
        ':city' => 'Moscow',
        ':country' => 'Russia'
    ]);

    echo "Alivagant has been successfully added to your contacts list";
} catch (PDOException $e) {
    // Thông báo lỗi nếu có ngoại lệ xảy ra
    die("Adding record failed: " . $e->getMessage());
}
//Xóa dữ liệu trong bảng bằng PDO
try {
    // Kết nối tới MySQL sử dụng PDO
    $pdo = new PDO("mysql:host=localhost;dbname=melody", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh UPDATE để cập nhật dữ liệu trong bảng
    $sql_stmt = "UPDATE my_contacts 
                 SET contact_no = :contact_no, email = :email 
                 WHERE id = :id";
    
    // Chuẩn bị câu lệnh
    $stmt = $pdo->prepare($sql_stmt);

    // Thực thi câu lệnh với các giá trị
    $stmt->execute([
        ':contact_no' => '785',
        ':email' => 'poseidon@ocean.oc',
        ':id' => 5
    ]);

    echo "ID number 5 has been successfully updated";
} catch (PDOException $e) {
    // Thông báo lỗi nếu có ngoại lệ xảy ra
    die("Updating record failed: " . $e->getMessage());
}
//Xóa dữ liệu trong bảng bằng PDO
try {
    // Kết nối tới MySQL sử dụng PDO
    $pdo = new PDO("mysql:host=localhost;dbname=melody", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ID của người dùng cần xóa
    $id = 6;

    // Câu lệnh DELETE để xóa dữ liệu trong bảng
    $sql_stmt = "DELETE FROM my_contacts WHERE id = :id";

    // Chuẩn bị câu lệnh
    $stmt = $pdo->prepare($sql_stmt);

    // Thực thi câu lệnh với giá trị ID
    $stmt->execute([
        ':id' => $id
    ]);

    echo "ID number $id has been successfully deleted";
} catch (PDOException $e) {
    // Thông báo lỗi nếu có ngoại lệ xảy ra
    die("Deleting record failed: " . $e->getMessage());
}
?>
</html>