<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_buy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
</head>
<div class="top-navbar">
    <nav class="nav-links">
        <div><a href="contact.html">ติดต่อเรา</a></div>
        <div class="dropdown">
            <img src="image/user.png" alt="Logo" class="nav-logo">
            <div class="dropdown-menu">
                <a href="profile.html">โปรไฟล์</a>
                <a href="order-history.html">ประวัติคำสั่งซื้อ</a>
                <a href="claim.html">เคลมสินค้า</a>
                <a href="logout.html">ออกจากระบบ</a>
            </div>
        </div>
        <a href="index.html">
            <img src="image/united-states-of-america.png" alt="Logo" class="nav-logo">
        </a>
    </nav>
</div>


<!-- Navbar ชั้นล่าง -->
<div class="main-navbar">
    <nav class="nav-links">
        <div><a href="index.html">หน้าแรก</a></div>
        <div><a href="reservation_car.html">จองคิวรถ</a></div>
        <a href="index.html">
            <img src="image/Logo.png" alt="Logo" class="nav-logo1">
        </a>
        <div><a href="shopping.php" style="color: E88B71;">ซื้อ/เช่าอุปกรณ์ทางการแพทย์</a></div>
    </nav>

    <div class="cart-icon">
        <a href="cart.html">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
</div>


<!--search-->
<body>
    <div class="search-section">
        <div class="search-container">
            <input type="text" placeholder="ค้นหา..." class="search-input">
            <button class="search-button">
                <i class="fas fa-search"></i> <!-- ไอคอนแว่นขยาย -->
            </button>
        </div>
        <div class="filter-icon">
            <i class="fas fa-bars"></i> <!-- ไอคอน Filter -->
        </div>
    </div>


<!-- Sidebar -->
<div class="filter-sidebar" id="filterSidebar">
    <div class="sidebar-header">
        <h2>ระบุความต้องการของคุณ</h2>
        <button class="close-sidebar">&times;</button>
    </div>
    <div class="sidebar-content">
        <label for="job-type">ประเภทสินค้า:</label>
           <select id="job-type" class="filter-select">
            <option value=""selected hidden>ทั้งหมด</option>
            <option value="hospital_reservation">อุปกรณ์วัดและตรวจสุขภาพ</option>
            <option value="event_reservation">อุปกรณ์ช่วยการเคลื่อนไหว</option>
            <option value="hospital_reservation">อุปกรณ์สำหรับฟื้นฟูและกายภาพบำบัด</option>
            <option value="event_reservation">อุปกรณ์สุขอนามัย</option>
            <option value="hospital_reservation">อุปกรณ์ช่วยหายใจและระบบทางเดินหายใจ</option>
            <option value="event_reservation">อุปกรณ์ปฐมพยาบาล</option>
        </select>
        <label for="car-level">ราคา:</label>
        <select id="car-level" class="filter-select">
            <option value="" selected hidden>เรียงลำดับราคา</option>
            <option value="first">มากไปน้อย</option>
            <option value="basic">น้อยไปมาก</option>
        </select>
        <label for="car-level">เรียงลำดับสินค้า:</label>
        <select id="car-level" class="filter-select">
            <option value="" selected hidden>ทั้งหมด</option>
            <option value="first">สินค้าขายดีที่สุด</option>
            <option value="basic">เกี่ยวข้องที่สุด</option>
        </select>
        <label for="">ช่วงราคาสินค้า:</label>
                <div class="price-range">
                    <input type="number" id="minPrice" placeholder="ต่ำสุด" min="0" max="1000000" value="0">
                    <input type="range" id="minPriceRange" min="0" max="1000000" step="100" value="0" oninput="updateMinPrice()">
                    <input type="range" id="maxPriceRange" min="0" max="1000000" step="100" value="1000000" oninput="updateMaxPrice()">
                    <input type="number" id="maxPrice" placeholder="สูงสุด" min="0" max="1000000" value="1000000">
                </div>
    </div>
</div>


<section class="product-container">
    <div class="product">
        <a href="product_details.html?product=wheelchair">
            <img src="image/รถเข็น.jpg" alt="รถเข็น" />
            <p>รถเข็นผู้ป่วย (ST-YK9063 Double Cross Wheelchair)</p>
        </a>
        <p class="cost">฿ 5,900</p>
    </div>

    <div class="product">
        <a href="product_details.html?product=oxygen">
            <img src="image/ถังอ๊อก.jpg" alt="ถังอ๊อกซิเจน" />
            <p>ชุดถังอ๊อกซิเจนทางการแพทย์ แบบอลูมิเนียม USA 0.5Q/MD</p>
        </a>
        <p class="cost">฿ 5,500</p>
    </div>

    <div class="product">
        <a href="product_details.html?product=bed">
            <img src="image/เตียงไฟฟ้า.jpg" alt="เตียงไฟฟ้า" />
            <p>เตียงไฟฟ้า (ICU Hospital Bed ST-EHDA2)</p>
        </a>
        <p class="cost">฿ 13,000</p>
    </div>
</section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const dropdown = document.querySelector(".dropdown");
            const menu = document.querySelector(".dropdown-menu");

            dropdown.addEventListener("click", (e) => {
                e.stopPropagation(); // หยุดการกระจายอีเวนต์
                menu.style.display = menu.style.display === "block" ? "none" : "block";
            });

            // ซ่อนเมนูเมื่อคลิกที่อื่น
            document.addEventListener("click", () => {
                menu.style.display = "none";
            });
        });
        document.addEventListener("DOMContentLoaded", () => {
            const filterIcon = document.querySelector(".filter-icon");
            const sidebar = document.getElementById("filterSidebar");
            const closeSidebar = document.querySelector(".close-sidebar");

            // เปิด Sidebar
            filterIcon.addEventListener("click", () => {
                sidebar.classList.add("open");
            });

            // ปิด Sidebar
            closeSidebar.addEventListener("click", () => {
                sidebar.classList.remove("open");
            });

            // ปิด Sidebar เมื่อคลิกนอก Sidebar
            document.addEventListener("click", (e) => {
                if (!sidebar.contains(e.target) && !filterIcon.contains(e.target)) {
                    sidebar.classList.remove("open");
                }
            });
        });
        function updateMaxPrice() {
            var maxPriceRange = document.getElementById('maxPriceRange');
            var maxPriceInput = document.getElementById('maxPrice');
            var minPriceRange = document.getElementById('minPriceRange');
    
            maxPriceInput.value = maxPriceRange.value;
            if (parseInt(maxPriceRange.value) < parseInt(minPriceRange.value)) {
                minPriceRange.value = maxPriceRange.value;
                document.getElementById('minPrice').value = maxPriceRange.value;
            }
        }

    </script>
</body>
</html>