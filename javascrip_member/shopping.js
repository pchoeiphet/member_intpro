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