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
