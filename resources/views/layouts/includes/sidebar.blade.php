<div style="min-height: 125px;display: flex;padding: 0px 10px 0px 0px;">
    <div class="col-md-2 d-flex align-items-center justify-content-center" style="margin-right: 10px;">
        <div class="current-block d-flex align-items-center" style="position: relative" data-bs-toggle="modal"
            data-bs-target="#manageBlock">
            <div class="d-flex align-items-center" style="flex-direction: row; flex:1">
                <div class="icon-blocks">
                    <span class="count-block">1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-home feather-size-18">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>

                <div style="padding: 20px 0px 20px 5px; flex:1">
                    <i style="font-size: 12px;">Đang quản lý</i>
                    <h4
                        style="font-size: 14px; color: #15a05c; padding:0px; margin:0px; white-space: nowrap;max-width: 150px; overflow: hidden; text-overflow: ellipsis; ">
                        <i>Nhà trọ phan văn</i>
                    </h4>
                </div>
            </div>
            <button class="shadow" id="add-block"
                style="position: absolute;
                    right: -14px;
                    top: 29px;
                    border-radius: 100%;
                    height: 35px;
                    width: 35px;
                    text-align: center;
                    padding: 0px;
                    background-color: #7dc343;
                    color: #fff;
                    border: 1px solid #7dc443;
                    z-index: 10;"
                data-bs-toggle="modal" data-bs-target="#addBlock">
                <span data-bs-toggle="tooltip" data-bs-placement="top" title=""
                    data-bs-original-title="Thêm mới nhà cho thuê">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </span>
            </button>
        </div>
    </div>
    <div class="col-md-10"
        style="align-items: center; justify-content: space-between; display: flex; position: relative;">
        <div style="display: flex; flex-wrap: nowrap; overflow-x: auto; position: relative;">
            <a href="#" class="item-menu active">
                <div class="icon text-center">
                    <img width="55px" src="{{ asset('assets/img/thu_tien.png') }}">
                </div>
                <div class="key">
                    <span class="title"><b>Quản lý phòng</b></span>
                </div>
            </a>
            <a href="#" class="item-menu">
                <div class="icon text-center">
                    <img width="55px" src="{{ asset('assets/img/thu_tien.png') }}">
                </div>
                <div class="key">
                    <span class="title"><b>Tất cả hóa đơn</b></span>
                </div>
            </a>
            <a href="#" class="item-menu">
                <div class="icon text-center">
                    <img width="55px" src="{{ asset('assets/img/report_customer_use.png') }}">
                </div>
                <div class="key">
                    <span class="title"><b>Tất cả hợp đồng</b></span>
                </div>
            </a>
            <a href="#" class="item-menu">
                <div class="icon text-center">
                    <img width="55px" src="{{ asset('assets/img/ghi_chu.png') }}">
                </div>
                <div class="key">
                    <span class="title"><b>Quản lý dịch vụ</b></span>
                </div>
            </a>
            <a href="#" class="item-menu">
                <div class="icon text-center">
                    <img width="55px" src="{{ asset('assets/img/danh_sach_lien_he.png') }}">
                </div>
                <div class="key">
                    <span class="title"><b>Tất cả khách thuê</b></span>
                </div>
            </a>
            <a href="#" class="item-menu">
                <div class="icon text-center">
                    <img width="55px" src="{{ asset('assets/img/thu_tien.png') }}">
                </div>
                <div class="key">
                    <span class="title"><b>Thu/Chi - Tổng kết</b></span>
                </div>
            </a>
            <a href="#" class="item-menu">
                <div class="icon text-center">
                    <img width="55px" src="{{ asset('assets/img/setting.png') }}">
                </div>
                <div class="key">
                    <span class="title"><b>Cài đặt</b></span>
                </div>
            </a>
        </div>
    </div>
</div>
