@extends('layouts.app')

@section('sidebar')
    <div class="sidebar d-flex gap-2 flex-column bg-light">
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
            <i class="bi bi-list fs-1"></i>
        </div>
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center ">
            <i class="bi bi-people-fill fs-1 "></i>
        </div>
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
            <i class="bi bi-projector fs-1"></i></i>
        </div>
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
            <i class="bi bi-gift-fill fs-1"></i>
        </div>
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
            <i class="bi bi-controller fs-1"></i>
        </div>
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
            <i class="bi bi-book fs-1"></i>
        </div>
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
            <i class="bi bi-tv fs-1"></i>
        </div>
        <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
            <i class="bi bi-badge-vr-fill fs-1"></i>
        </div>
    </div>
@endsection

@section('header')
    <div class="header row p-2 justify-content-between" style='background-color: white;'>
        <div class="col-md-2 ms-3 text-center">
            <img src="https://fdesign.vn/wp-content/uploads/2022/07/logo-moi-cua-viettel.jpg" alt=""
                style='width: 120px'>
        </div>
        <div class="col-6 p-2 d-flex justify-content-center">
            <div class="frag d-flex align-items-center ps-2 px-3">
                <input type="text" placeholder="Search..." class="search-input ps-3 p-2"
                    style='width: 600px; border: none;'>
                <button class="search-button p-1">
                    <i class="bi bi-search-heart fs-4"></i>
                </button>
            </div>
        </div>
        <div class="col-3 d-flex gap-4 justify-content-start align-items-center p-0">
            <div class="avatar d-flex gap-2 justify-content-center algin-items-center p-1">
                <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/d/d1/Viettel_FC_2021.svg/800px-Viettel_FC_2021.svg.png"
                    style='width: 50px; height: 50px' alt="">
                <span class='d-flex justify-content-center align-items-center'>Viettel</span>
            </div>
            <div class="chart p-1">
                Chart
            </div>
            <div class="order p-1">
                <span>Orders</span>
            </div>
        </div>
    </div>
@endsection

@section('proposal')
    <div class="shopping d-flex justify-content-between gap-3 p-2">
        <div class="category" style='background-color: white;'>
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Traditional Wear</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Western Wear</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Swim & Beachwear</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Winter & Seasonsal Wear</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Beauty & Grooming</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Juwellery</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Presonal care Appliacnes</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">International Brands</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Foot Wear</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Watchces</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
            <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
                <span class="p-2 d-flex align-items-center" style="width: 200px">Accessories</span>
                <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
            </div>
            <hr class="m-0">
        </div>
        <div class="proposal d-flex flex-column gap-2 p-0" style="width: 700px;">
            <div class="big">
                <img src="https://cdn.tgdd.vn/Files/2021/01/19/1321281/viettel-bat-ngo-doi-sang-giao-dien-moi-va-doi-ca-s.jpg"
                    alt="" style="width: 700px; height: 300px">
            </div>
            <div class="small d-flex justify-content-between">
                <img src="https://static.topcv.vn/company_logos/La4FThz9bK80HBEcetgo0tKMmtV2yuLw_1655452011____b1411ec6b33e5e191f0f8e904585fc25.jpg"
                    alt="" style="width: 225px; height: 200px">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9zxJre0UJzkv68586xjI4mEq8eySfYEZP1w&usqp=CAU"
                    alt="" style="width: 225px; height: 200px">
                <img src="https://dothogiatien.com.vn/wp-content/uploads/2021/12/ly-su-viettel.jpg" alt=""
                    style="width: 225px; height: 200px">
            </div>

        </div>
        <div class="personal d-flex flex-column justify-content-between">
            <div class="ps1 p-2" style='background-color: white; width: 300px; height: 250px'>
                <span class='fs-5'><strong> Recently Viewed</strong></span>
                <img class='' style='width: 280px; height: 200px'
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-F1DmV0NiXOfMSCGdpckicFPSCMJIQgvblg&usqp=CAU"
                    alt="">
            </div>
            <div class="ps1 p-2" style='background-color: white; width: 300px; height: 250px'>
                <span class='fs-5'><strong>Suggestion for You</strong></span>
                <img style='width: 280px; height: 200px'
                    src="https://i.pinimg.com/736x/c4/62/92/c462924de424d1a808d24d1d7a4fb55a.jpg" alt="">
            </div>
        </div>
    </div>
@endsection

@section('dealsOfDay')
    <div class="dealOfDay row p-2">
        <div class="col-3">
            <img class='' style='width: 320px; height: 300px'
                src="https://tmbranding.vn/upload/images/Brand-Story/viettel-thay-doi-nhan-dien-thuong-hieu-3.jpg"
                alt="">
        </div>
        <div class="col-3">
            <img class='' style='width: 320px; height: 300px'
                src="https://tmbranding.vn/upload/images/Brand-Story/viettel-thay-doi-nhan-dien-thuong-hieu-3.jpg"
                alt="">
        </div>
        <div class="col-3">
            <img class='' style='width: 320px; height: 300px'
                src="https://tmbranding.vn/upload/images/Brand-Story/viettel-thay-doi-nhan-dien-thuong-hieu-3.jpg"
                alt="">
        </div>
        <div class="col-3">
            <img class='' style='width: 320px; height: 300px'
                src="https://tmbranding.vn/upload/images/Brand-Story/viettel-thay-doi-nhan-dien-thuong-hieu-3.jpg"
                alt="">
        </div>
    </div>
@endsection
