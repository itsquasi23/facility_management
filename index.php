<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phần mềm quản lý cơ sở vật chất</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/tailwind.css">
</head>
<body>

  <?php include 'assets/components/navbar.php'?>

  <div class="p-1">

    <h1 class="text-3xl font-semibold">Phần mềm Quản lý Cơ sở Vật chất</h1>

    <!-- Thống kê nhanh -->
    <div class="grid grid-cols-4 gap-1 my-1">
      <div class="my-container p-1">
        <h2 class="text-2xl font-medium">45</h2>
        <p>Phòng học (C, D, E)</p>
      </div>
      <div class="my-container p-1">
        <h2 class="text-2xl font-medium">38</h2>
        <p>Nhân viên</p>
      </div>
      <div class="my-container p-1">
        <h2 class="text-2xl font-medium">500+</h2>
        <p>Thiết bị</p>
      </div>
      <div class="my-container p-1">
        <h2 class="text-2xl font-medium">12</h2>
        <p>Yêu cầu bảo trì</p>
      </div>
    </div>

    <h2 class="text-2xl font-semibold my-1">Lịch sử gần đây</h2>

    <div class="my-container p-1 my-1" id="device-table">Chưa có dữ liệu...</div>
    <a class="my-button" href="lichsu.html">Xem toàn bộ lịch sử</a>

  </div>

</body>
</html>
