<html lang="en">
    <html lang="en">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style_buy.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
            <title>Document</title>
        </head>
        <body>
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
                    <div><a href="shopping.html">ซื้อ/เช่าอุปกรณ์ทางการแพทย์</a></div>
                </nav>
        
                <div class="cart-icon">
                    <a href="cart.html">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
<body>
    <section class="address">
        <p>ที่อยู่ในการจัดส่ง</p>
        <p>ภาดาเดช ปนิสสวัสดิ์ (+66)927906150 46/180 หมู่4 หมุ่บ้านนิศาขล ต.อ้อมใหญ่ อ.สามพราน จ.นครปฐม 73160</p>
        <a href="#" class="change-button">เปลี่ยนที่อยู่</a>
    </section>
    
    <section class="order-section">
        <div class="left-section">
            <div class="product">
                <div class="product-left">
                    <img src="image/รถเข็น.jpg" alt="Wheelchair">
                </div>
                <div class="product-center">
                    <p class="product-name">รถเข็นผู้ป่วย(ST-YK9063 Double Cross Wheelchair)</p>
                    <p class="price">฿ 5,900</p>
                </div>
            </div>
            <div class="note">
                <label for="note">หมายเหตุ</label>
                <textarea id="note" placeholder="เพิ่มข้อความ"></textarea>
            </div>
        </div>
    
        <div class="right-section">
            <div class="product-right">
                <table class="product-table">
                    <tr>
                        <th>จำนวน</th>
                        <th>ราคารวม</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>฿ 5,900</td>
                    </tr>
                </table>
            </div>
    
            <div class="options">
                <div class="purchase-type">
                    <p>ประเภทการสั่งซื้อ :</p>
                    <label><input type="button" name="purchase" value="เช่า" id="purchase-rent"></label>
                    <label><input type="button" name="purchase" value="ซื้อ" id="purchase-buy"></label>
                </div>
                <div class="installment">
                    <p>ระยะเวลาเช่าสินค้า :</p>
                    <div class="installment-control">
                        <div class="add-mont">
                            <button class="decrease" disabled>-</button>
                            <input type="number" class="quantity-input" value="1" min="1" disabled>
                            <button class="increase" disabled>+</button>
                        </div>                                                                 
                        <span>เดือน</span>
                    </div>
                </div>
                
                <div class="payment-method">
                    <p>วิธีชำระเงิน :</p>
                    <button type="button" id="payment-qr" class="payment-button">QR Promptpay</button>
                    <button type="button" id="payment-credit" class="payment-button">บัตรเครดิต</button>
                </div>
            </div>
            <div class="summary">
                <p>รวมคำสั่งซื้อ <span>฿ 5,900</span></p>
                <p>ค่าจัดส่ง <span>฿ 120</span></p>
                <p>ยอดชำระทั้งหมด <span>฿ 6,020</span></p>
            </div>
            <a href="QRpayment.html" class="order-button2">สั่งสินค้า</a>
        </div>
    </section>
    
      
      
</body>
<script>
// ฟังก์ชันปรับสถานะของปุ่มเพิ่ม/ลด
function updateQuantityState() {
    const rentSelected = document.getElementById('purchase-rent').style.border === "2px solid rgb(45, 86, 150)";
    const buySelected = document.getElementById('purchase-buy').style.border === "2px solid rgb(45, 86, 150)";
    const isDisabled = !rentSelected; // ปิดใช้งานเมื่อไม่ได้เลือก "เช่า"

    document.querySelector('.quantity-input').disabled = isDisabled;
    document.querySelector('.decrease').disabled = isDisabled;
    document.querySelector('.increase').disabled = isDisabled;
}

// ประเภทการสั่งซื้อ
document.getElementById('purchase-rent').addEventListener('click', function () {
    document.getElementById('purchase-rent').style.border = "2px solid #2D5696";
    document.getElementById('purchase-buy').style.border = "none";
    updateQuantityState(); // อัปเดตสถานะปุ่มเพิ่ม/ลด
});

document.getElementById('purchase-buy').addEventListener('click', function () {
    document.getElementById('purchase-buy').style.border = "2px solid #2D5696";
    document.getElementById('purchase-rent').style.border = "none";
    updateQuantityState(); // อัปเดตสถานะปุ่มเพิ่ม/ลด
});
// วิธีชำระเงิน
document.getElementById('payment-qr').addEventListener('click', function () {
    document.getElementById('payment-qr').style.border = "2px solid #2D5696";
    document.getElementById('payment-credit').style.border = "none";
});

document.getElementById('payment-credit').addEventListener('click', function () {
    document.getElementById('payment-credit').style.border = "2px solid #2D5696";
    document.getElementById('payment-qr').style.border = "none";
});


// ค้นหาปุ่มและ input ที่เกี่ยวข้อง
const decreaseButton = document.querySelector('.decrease');
const increaseButton = document.querySelector('.increase');
const quantityInput = document.querySelector('.quantity-input');
const purchaseRent = document.getElementById('purchase-rent');
const purchaseBuy = document.getElementById('purchase-buy');

// ฟังก์ชั่นเปิด/ปิดการใช้งานปุ่มและล้างค่าจำนวน
function updateQuantityState(enabled) {
    if (enabled) {
        decreaseButton.disabled = false;
        increaseButton.disabled = false;
        quantityInput.disabled = false; // เปิดให้พิมพ์ได้
    } else {
        decreaseButton.disabled = true;
        increaseButton.disabled = true;
        quantityInput.disabled = true; // ปิดการพิมพ์
        quantityInput.value = ""; // ล้างค่าในช่องเมื่อปิดการใช้งาน
    }
}

// กำหนดค่าเริ่มต้น (ปิดการใช้งาน)
updateQuantityState(false);

// ฟังก์ชั่นเพิ่มจำนวน
increaseButton.addEventListener('click', function () {
    let currentQuantity = parseInt(quantityInput.value || 0);
    if (currentQuantity < 36) { // ตรวจสอบว่าไม่ให้เกิน 36
        quantityInput.value = currentQuantity + 1; // เพิ่มจำนวนทีละ 1
    }
});

// ฟังก์ชั่นลดจำนวน
decreaseButton.addEventListener('click', function () {
    let currentQuantity = parseInt(quantityInput.value || 0);
    if (currentQuantity > 1) { // ตรวจสอบว่าไม่ให้ลดจำนวนต่ำกว่า 1
        quantityInput.value = currentQuantity - 1; // ลดจำนวนทีละ 1
    }
});

// ตรวจสอบค่าที่ผู้ใช้พิมพ์
quantityInput.addEventListener('input', function () {
    let value = parseInt(quantityInput.value || 0);
    if (value > 36) {
        quantityInput.value = 36; // จำกัดค่าสูงสุด
    } else if (value < 1) {
        quantityInput.value = 1; // จำกัดค่าต่ำสุด
    }
});

// จัดการเมื่อเลือก "เช่า" หรือ "ซื้อ"
purchaseRent.addEventListener('click', function () {
    updateQuantityState(true); // เปิดการใช้งานปุ่มเพิ่มลด
    purchaseRent.style.border = "2px solid #2D5696";
    purchaseBuy.style.border = "none";
});

purchaseBuy.addEventListener('click', function () {
    updateQuantityState(false); // ปิดการใช้งานปุ่มเพิ่มลด
    purchaseBuy.style.border = "2px solid #2D5696";
    purchaseRent.style.border = "none";
});

</script>
</html>