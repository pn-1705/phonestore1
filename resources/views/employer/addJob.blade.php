@extends('user.layout')

@section('title', 'Việc làm')


@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="manage-job-posting-post-jobs cb-section bg-manage">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage">Đăng Tuyển Dụng</h1>
                    </div>
                    <div class="right-heading"><a href="https://careerbuilder.vn/vi/employers/faq" target="_blank" class="support">Hướng dẫn</a></div>
                </div>
                <form name="frmEditJob" id="frmEditJob" method="post" action="https://careerbuilder.vn/vi/employers/postjobs/savejob">
                    <div class="main-tabslet">
                        <ul class="tabslet-tab">
                            <li class="active"> <a href="javascript:void(0);">Thông Tin Tuyển Dụng</a></li>
                            <li> <a href="javascript:void(0)" onclick="is_Filter_Form();">Thông Tin Liên Hệ</a></li>
                            <li> <a href="javascript:void(0)" onclick="is_Filter_Form();">Thiết Lập Độ Phù Hợp Ứng Viên</a></li>
                        </ul>

                        <div class="tabslet-content active" id="tab-1">
                            <input name="ispublic" type="hidden" value="0">
                            <input name="emp_id" type="hidden" value="35A99252">
                            <input name="job_id" type="hidden" value="35A4E900">
                            <input type="hidden" id="jobsamp_id" name="jobsamp_id" value="">
                            <input type="hidden" id="lang" name="lang" value="">
                            <input name="intSave" id="intSave" type="hidden" value="1">
                            <input name="job_source" id="job_source" type="hidden" value="1">
                            <input name="work_location_0" id="work_location_0" type="hidden" value="">
                            <input name="work_location_1" id="work_location_1" type="hidden" value="">
                            <input name="work_location_2" id="work_location_2" type="hidden" value="">
                            <div class="main-application-information">
                                <h2 class="title-application">Thông tin tuyển dụng</h2>
                                <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text">
                                                <input type="text" id="job_title" class="keyword form-text" name="job_title" value="" onblur="loadTagKey()" placeholder="Chức danh tuyển dụng" autocomplete="off">
                                                <span class="form-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="noti mt-20"><em class="material-icons">info</em>
                                                <div class="toolip">
                                                    Lưu ý: Chức danh nên mô tả chính xác vị trí tuyển dụng cần tuyển. Đây là một phần quan trọng thu hút người tìm việc ứng tuyển và hệ thống gợi ý hồ sơ phù hợp.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group form-text">
                                                <input type="text" id="job_code" name="job_code" maxlength="12" value="" placeholder="Mã công việc">
                                                <span class="form-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex mt-20 align-center">
                                                <div class="noti"> <em class="material-icons">info</em>
                                                    <div class="toolip">
                                                        Quý khách có thể chọn <strong>Mẫu Quảng Cáo Tuyển  Dụng</strong> có sẵn của chúng tôi.
                                                    </div>
                                                </div>
                                                <ul class="list-link">
                                                    <li>
                                                        <a href="javascript:void(0);" id="job_template" class="btn-use-templates">Sử dụng mẫu có sẵn</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" onclick="chooseFromListJob('nhavophong3.1697429348');" class="btn-created-job-list">Chọn từ danh sách việc làm đã tạo</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-select-chosen">
                                                <label>Ngành nghề <font style="color: red">*</font></label>
                                                <select name="INDUSTRY_ID[]" data-placeholder="Chọn" id="select_industry_db" class="chosen-select-max-three" multiple="" style="display: none;">
                                                    <optgroup label="Bán hàng / Tiếp thị">
                                                        <option value="4">Tiếp thị / Marketing</option>
                                                        <option value="30">Bán lẻ / Bán sỉ</option>
                                                        <option value="31">Bán hàng / Kinh doanh</option>
                                                        <option value="37">Tiếp thị trực tuyến</option>
                                                    </optgroup>
                                                    <optgroup label="Chăm sóc sức khỏe">
                                                        <option value="7">Dược phẩm</option>
                                                        <option value="56">Y tế / Chăm sóc sức khỏe</option>
                                                    </optgroup>
                                                    <optgroup label="Dịch vụ">
                                                        <option value="9">Tư vấn</option>
                                                        <option value="12">Dịch vụ khách hàng</option>
                                                        <option value="20">Phi chính phủ / Phi lợi nhuận</option>
                                                        <option value="24">Luật / Pháp lý</option>
                                                        <option value="32">Bưu chính viễn thông</option>
                                                        <option value="33">Vận chuyển / Giao nhận /  Kho vận</option>
                                                        <option value="44">Lao động phổ thông</option>
                                                        <option value="51">An Ninh / Bảo Vệ</option>
                                                    </optgroup>
                                                    <optgroup label="Giáo dục / Đào tạo">
                                                        <option value="13">Giáo dục / Đào tạo</option>
                                                        <option value="57">Thư viện</option>
                                                    </optgroup>
                                                    <optgroup label="Hàng tiêu dùng">
                                                        <option value="10">Hàng gia dụng / Chăm sóc cá nhân</option>
                                                        <option value="21">Thực phẩm &amp; Đồ uống</option>
                                                    </optgroup>
                                                    <optgroup label="Hành chính / Nhân sự">
                                                        <option value="3">Hành chính / Thư ký</option>
                                                        <option value="17">Quản lý điều hành</option>
                                                        <option value="22">Nhân sự</option>
                                                        <option value="38">Biên phiên dịch</option>
                                                    </optgroup>
                                                    <optgroup label="Kế toán / Tài chính">
                                                        <option value="2">Kế toán / Kiểm toán</option>
                                                        <option value="19">Ngân hàng</option>
                                                        <option value="23">Bảo hiểm</option>
                                                        <option value="46">Chứng khoán</option>
                                                        <option value="59">Tài chính / Đầu tư</option>
                                                    </optgroup>
                                                    <optgroup label="Khách sạn / Du lịch">
                                                        <option value="29">Nhà hàng / Khách sạn</option>
                                                        <option value="34">Du lịch</option>
                                                        <option value="60">Hàng không</option>
                                                    </optgroup>
                                                    <optgroup label="Khoa học">
                                                        <option value="5">Nông nghiệp</option>
                                                        <option value="36">Thống kê</option>
                                                        <option value="49">Thủy sản / Hải sản</option>
                                                        <option value="50">Lâm Nghiệp</option>
                                                        <option value="52">Chăn nuôi / Thú y</option>
                                                        <option value="53">Thủy lợi</option>
                                                        <option value="54">Trắc địa / Địa Chất</option>
                                                        <option value="61">Hàng hải</option>
                                                        <option value="69">Công nghệ sinh học</option>
                                                        <option value="70">Công nghệ thực phẩm / Dinh dưỡng</option>
                                                    </optgroup>
                                                    <optgroup label="Kỹ thuật">
                                                        <option value="14">Cơ khí / Ô tô / Tự động hóa</option>
                                                        <option value="16">Môi trường</option>
                                                        <option value="26">Dầu khí</option>
                                                        <option value="41">Hóa học</option>
                                                        <option value="48">Điện / Điện tử / Điện lạnh</option>
                                                        <option value="65">Khoáng sản</option>
                                                        <option value="71">Bảo trì / Sửa chữa</option>
                                                    </optgroup>
                                                    <optgroup label="Máy tính / Công nghệ thông tin">
                                                        <option value="1">CNTT - Phần mềm</option>
                                                        <option value="63">CNTT - Phần cứng / Mạng</option>
                                                    </optgroup>
                                                    <optgroup label="Truyền thông / Media">
                                                        <option value="11">Mỹ thuật / Nghệ thuật / Thiết kế</option>
                                                        <option value="15">Giải trí</option>
                                                        <option value="66">Truyền hình / Báo chí / Biên tập</option>
                                                        <option value="67">Quảng cáo / Đối ngoại / Truyền Thông</option>
                                                        <option value="68">Tổ chức sự kiện</option>
                                                    </optgroup>
                                                    <optgroup label="Sản xuất">
                                                        <option value="18">Xuất nhập khẩu</option>
                                                        <option value="25">Sản xuất / Vận hành sản xuất</option>
                                                        <option value="35">Đồ gỗ</option>
                                                        <option value="39">Dệt may / Da giày / Thời trang</option>
                                                        <option value="42">Quản lý chất lượng (QA/QC)</option>
                                                        <option value="43">Thu mua / Vật tư</option>
                                                        <option value="58">An toàn lao động</option>
                                                        <option value="64">In ấn / Xuất bản</option>
                                                    </optgroup>
                                                    <optgroup label="Xây dựng">
                                                        <option value="6">Kiến trúc</option>
                                                        <option value="8">Xây dựng</option>
                                                        <option value="28">Bất động sản</option>
                                                        <option value="47">Nội ngoại thất</option>
                                                    </optgroup>
                                                    <optgroup label="Nhóm ngành khác">
                                                        <option value="27">Ngành khác</option>
                                                        <option value="45">Mới tốt nghiệp / Thực tập</option>
                                                    </optgroup>
                                                </select><div class="chosen-container chosen-container-multi" title="" id="select_industry_db_chosen" style="width: 0px;"><ul class="chosen-choices">
                                                        <li class="search-field">
                                                            <input class="chosen-search-input default" type="search" autocomplete="off" value="Chọn" style="width: 60.975px;">
                                                        </li>
                                                    </ul>
                                                    <div class="chosen-drop">
                                                        <ul class="chosen-results"></ul>
                                                    </div></div>
                                                <span class="form-error error_select_industry_db_1"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="post_job_location">
                                        <div class="item_post_job_location">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group form-select">
                                                        <label>
                                                            Nơi làm việc <font style="color: red">*</font>
                                                            <a class="btn-add-location ml-5" href="javascript:void(0);" onclick="addWorkLocation();">
                                                                + Thêm Địa Điểm
                                                                <div class="toolip">
                                                                    - Bổ sung thông tin địa điểm làm việc cho  vị trí đăng tuyển<br>
                                                                    - Vị trí đăng tuyển của bạn sẽ được hiển thị trên bản đồ việc làm dành cho ứng viên trên thiết bị di động, qua đó gia tăng hiệu quả tuyển dụng

                                                                </div>
                                                            </a>
                                                        </label>
                                                        <select name="LOCATION_ID[]" onchange="loadWorkLocation(this)" class="select_location">
                                                            <option value="">Chọn</option>
                                                            <optgroup label="Việt Nam">
                                                                <option value="4">Hà Nội</option>
                                                                <option value="8">Hồ Chí Minh</option>
                                                                <option value="76">An Giang</option>
                                                                <option value="64">Bà Rịa - Vũng Tàu</option>
                                                                <option value="781">Bạc Liêu</option>
                                                                <option value="281">Bắc Cạn</option>
                                                                <option value="240">Bắc Giang</option>
                                                                <option value="241">Bắc Ninh</option>
                                                                <option value="75">Bến Tre</option>
                                                                <option value="650">Bình Dương</option>
                                                                <option value="56">Bình Định</option>
                                                                <option value="651">Bình Phước</option>
                                                                <option value="62">Bình Thuận</option>
                                                                <option value="78">Cà Mau</option>
                                                                <option value="26">Cao Bằng</option>
                                                                <option value="71">Cần Thơ</option>
                                                                <option value="50">Dak Lak</option>
                                                                <option value="1042">Dak Nông</option>
                                                                <option value="511">Đà Nẵng</option>
                                                                <option value="900">Điện Biên</option>
                                                                <option value="1064">Đồng Bằng Sông Cửu Long</option>
                                                                <option value="61">Đồng Nai</option>
                                                                <option value="67">Đồng Tháp</option>
                                                                <option value="59">Gia Lai</option>
                                                                <option value="19">Hà Giang</option>
                                                                <option value="351">Hà Nam</option>
                                                                <option value="39">Hà Tĩnh</option>
                                                                <option value="320">Hải Dương</option>
                                                                <option value="31">Hải Phòng</option>
                                                                <option value="780">Hậu Giang</option>
                                                                <option value="18">Hòa Bình</option>
                                                                <option value="321">Hưng Yên</option>
                                                                <option value="901">Khác</option>
                                                                <option value="58">Khánh Hòa</option>
                                                                <option value="77">Kiên Giang</option>
                                                                <option value="60">Kon Tum</option>
                                                                <option value="1071">KV Bắc Trung Bộ</option>
                                                                <option value="1069">KV Đông Nam Bộ</option>
                                                                <option value="1070">KV Nam Trung Bộ</option>
                                                                <option value="1072">KV Tây Nguyên</option>
                                                                <option value="23">Lai Châu</option>
                                                                <option value="25">Lạng Sơn</option>
                                                                <option value="20">Lào Cai</option>
                                                                <option value="63">Lâm Đồng</option>
                                                                <option value="72">Long An</option>
                                                                <option value="350">Nam Định</option>
                                                                <option value="38">Nghệ An</option>
                                                                <option value="30">Ninh Bình</option>
                                                                <option value="68">Ninh Thuận</option>
                                                                <option value="210">Phú Thọ</option>
                                                                <option value="57">Phú Yên</option>
                                                                <option value="52">Quảng Bình</option>
                                                                <option value="510">Quảng Nam</option>
                                                                <option value="55">Quảng Ngãi</option>
                                                                <option value="33">Quảng Ninh</option>
                                                                <option value="53">Quảng Trị</option>
                                                                <option value="79">Sóc Trăng</option>
                                                                <option value="22">Sơn La</option>
                                                                <option value="66">Tây Ninh</option>
                                                                <option value="36">Thái Bình</option>
                                                                <option value="280">Thái Nguyên</option>
                                                                <option value="37">Thanh Hóa</option>
                                                                <option value="54">Thừa Thiên- Huế</option>
                                                                <option value="73">Tiền Giang</option>
                                                                <option value="1065">Toàn quốc</option>
                                                                <option value="74">Trà Vinh</option>
                                                                <option value="27">Tuyên Quang</option>
                                                                <option value="70">Vĩnh Long</option>
                                                                <option value="211">Vĩnh Phúc</option>
                                                                <option value="29">Yên Bái</option>
                                                            </optgroup>
                                                            <optgroup label="Campuchia">
                                                                <option value="1098">Banteay Meanchey</option>
                                                                <option value="1096">Battambang</option>
                                                                <option value="1092">Kampong Chhnang</option>
                                                                <option value="1090">Kampong Speu</option>
                                                                <option value="1085">Kampot</option>
                                                                <option value="1088">Kandal</option>
                                                                <option value="1084">Kep</option>
                                                                <option value="1091">Koh Kong</option>
                                                                <option value="1093">Kratie</option>
                                                                <option value="1104">Otdar Meanchey</option>
                                                                <option value="1103">Pailin</option>
                                                                <option value="1041">Phnompenh</option>
                                                                <option value="1099">Preah Vihear</option>
                                                                <option value="1089">Prey Veng</option>
                                                                <option value="1097">Siem Reap</option>
                                                                <option value="1100">Stung Treng</option>
                                                                <option value="1087">Svay Rieng</option>
                                                                <option value="1082">Tbong Khmum</option>
                                                            </optgroup>
                                                            <optgroup label="Hoa Kỳ">
                                                                <option value="1034">Chicago</option>
                                                                <option value="1077">Florida</option>
                                                                <option value="1033">Miami</option>
                                                                <option value="1039">San Diego</option>
                                                            </optgroup>
                                                            <optgroup label="Hồng Kông">
                                                                <option value="1079">Hồng Kông</option>
                                                            </optgroup>
                                                            <optgroup label="Khác">
                                                                <option value="1318">Khác</option>
                                                            </optgroup>
                                                            <optgroup label="Lào">
                                                                <option value="1106">Attapeu</option>
                                                                <option value="1107">Bokeo</option>
                                                                <option value="1109">Champasak</option>
                                                                <option value="1110">Houaphanh</option>
                                                                <option value="1111">Khammouane</option>
                                                                <option value="1113">Luang Prabang</option>
                                                                <option value="1115">Phongsaly</option>
                                                                <option value="1059">Vientiane</option>
                                                                <option value="1120">Xiangkhouang</option>
                                                            </optgroup>
                                                            <optgroup label="Malaysia">
                                                                <option value="1019">Kuala Lumpur</option>
                                                                <option value="1078">Malaysia</option>
                                                            </optgroup>
                                                            <optgroup label="Myanmar">
                                                                <option value="1320">Yangon</option>
                                                            </optgroup>
                                                            <optgroup label="Nhật Bản">
                                                                <option value="1043">Hokkaido</option>
                                                                <option value="1001">Tokyo</option>
                                                                <option value="1002">Yokohama</option>
                                                            </optgroup>
                                                            <optgroup label="Qatar">
                                                                <option value="1055">Qatar</option>
                                                            </optgroup>
                                                            <optgroup label="Quốc tế">
                                                                <option value="1073">Quốc tế</option>
                                                            </optgroup>
                                                            <optgroup label="Singapore">
                                                                <option value="1040">Singapore</option>
                                                            </optgroup>
                                                            <optgroup label="Ukraine">
                                                                <option value="1053">Kharkiv</option>
                                                            </optgroup>
                                                        </select>
                                                        <span class="form-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group form-select-chosen">
                                                        <label>Địa chỉ làm việc</label>
                                                        <select name="work_location[]" class="chosen-select work_location" multiple="" data-placeholder="Địa điểm làm việc" disabled="" style="display: none;">
                                                            <option value="">Chọn địa điểm làm việc</option>
                                                        </select><div class="chosen-container chosen-container-multi chosen-disabled" title="" style="width: 0px;"><ul class="chosen-choices">
                                                                <li class="search-field">
                                                                    <input class="chosen-search-input default" type="search" autocomplete="off" value="Địa điểm làm việc" disabled="" style="width: 148.45px;">
                                                                </li>
                                                            </ul>
                                                            <div class="chosen-drop">
                                                                <ul class="chosen-results"></ul>
                                                            </div></div>
                                                        <span class="form-error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-flex align-center">
                                                    <div class="form-group form-checkbox mt-5">
                                                        <input class="input_margin" id="hidden_worklocation_" type="checkbox" name="hidden_worklocation[]" value="1">

                                                        <label for="hidden_worklocation_">Bảo mật địa điểm làm việc</label>
                                                    </div>
                                                    <a class="btn-add-location ml-40 mt-5 add-location-more" href="javascript:void(0)"><em class="material-icons">add_circle </em>Thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-editor" id="div_jobdesc">
                                        <label>Mô Tả Công Việc <font style="color: red">*</font></label>
                                        <textarea cols="80" rows="5" id="job_desc" name="job_desc" class="editor" style="visibility: hidden; display: none;"></textarea><div id="cke_job_desc" class="cke_1 cke cke_reset cke_chrome cke_editor_job_desc cke_ltr cke_browser_webkit" dir="ltr" lang="vi" role="application" aria-labelledby="cke_job_desc_arialbl"><span id="cke_job_desc_arialbl" class="cke_voice_label">Bộ soạn thảo văn bản có định dạng, job_desc</span><div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_9" class="cke_voice_label">Thanh công cụ</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_9" onmousedown="return false;"><span id="cke_10" class="cke_toolbar" aria-labelledby="cke_10_label" role="toolbar"><span id="cke_10_label" class="cke_voice_label">Kiểu cơ bản</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_11" class="cke_button cke_button__bold  cke_button_off" href="javascript:void('Đậm')" title="Đậm" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_11_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(0,event);" onfocus="return CKEDITOR.tools.callFunction(1,event);" onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_11_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Đậm</span></a><a id="cke_12" class="cke_button cke_button__italic  cke_button_off" href="javascript:void('Nghiêng')" title="Nghiêng" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_12_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(3,event);" onfocus="return CKEDITOR.tools.callFunction(4,event);" onclick="CKEDITOR.tools.callFunction(5,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_12_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Nghiêng</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_13" class="cke_toolbar" aria-labelledby="cke_13_label" role="toolbar"><span id="cke_13_label" class="cke_voice_label">Đoạn</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_14" class="cke_button cke_button__numberedlist  cke_button_off" href="javascript:void('Chèn/Xoá Danh sách có thứ tự')" title="Chèn/Xoá Danh sách có thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(6,event);" onfocus="return CKEDITOR.tools.callFunction(7,event);" onclick="CKEDITOR.tools.callFunction(8,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -576px;background-size:auto;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Chèn/Xoá Danh sách có thứ tự</span></a><a id="cke_15" class="cke_button cke_button__bulletedlist  cke_button_off" href="javascript:void('Chèn/Xoá Danh sách không thứ tự')" title="Chèn/Xoá Danh sách không thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(9,event);" onfocus="return CKEDITOR.tools.callFunction(10,event);" onclick="CKEDITOR.tools.callFunction(11,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -528px;background-size:auto;">&nbsp;</span><span id="cke_15_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Chèn/Xoá Danh sách không thứ tự</span></a></span><span class="cke_toolbar_end"></span></span></span></span><div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 200px;"><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" style="width: 1300px; height: 100%;" title="Bộ soạn thảo văn bản có định dạng, job_desc" tabindex="0" allowtransparency="true"></iframe></div></div></div>
                                        <span class="form-error"></span>
                                        <div class="note">
                                            <p>Nhỏ hơn 10 000 kí tự</p>
                                            <div class="note-right" style="display: none">
                                                <p>
                                                    Hệ thống có sẵn file mô tả cho vị trí <ins> </ins>
                                                </p>
                                                <a href="javascript:void(0);" onclick="suggest(1);">
                                                    Sử dụng
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12"><label>Video Giới Thiệu Công Việc</label></div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-text">
                                                <input type="text" placeholder="Link video youtube" id="strVideoRecruiment" name="strVideoRecruiment[]" onblur="checkYoutubeValid(4);">
                                            </div>
                                            <span class="error error_strVideoRecruiment"> </span>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="preview"><a class="btn-preview" href="javascript:void(0);" onclick="checkYoutubeValid(3)">Xem trước</a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12"><label>Video Giới Thiệu Công Việc</label></div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-text">
                                                <input type="text" placeholder="Link video youtube" id="strVideoRecruiment2" name="strVideoRecruiment[]" onblur="checkYoutubeValid(6);">
                                            </div>
                                            <span class="error error_strVideoRecruiment"> </span>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="preview"><a class="btn-preview" href="javascript:void(0);" onclick="checkYoutubeValid(5)">Xem trước</a></div>
                                        </div>
                                    </div>
                                    <div class="form-group form-editor" id="div_jobreq">
                                        <label>Yêu cầu công việc <font style="color: red">*</font></label>

                                        <textarea cols="80" rows="5" id="job_req" name="job_req" class="editor" style="visibility: hidden; display: none;"></textarea><div id="cke_job_req" class="cke_2 cke cke_reset cke_chrome cke_editor_job_req cke_ltr cke_browser_webkit" dir="ltr" lang="vi" role="application" aria-labelledby="cke_job_req_arialbl"><span id="cke_job_req_arialbl" class="cke_voice_label">Bộ soạn thảo văn bản có định dạng, job_req</span><div class="cke_inner cke_reset" role="presentation"><span id="cke_2_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_23" class="cke_voice_label">Thanh công cụ</span><span id="cke_2_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_23" onmousedown="return false;"><span id="cke_24" class="cke_toolbar" aria-labelledby="cke_24_label" role="toolbar"><span id="cke_24_label" class="cke_voice_label">Kiểu cơ bản</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_25" class="cke_button cke_button__bold  cke_button_off" href="javascript:void('Đậm')" title="Đậm" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(13,event);" onfocus="return CKEDITOR.tools.callFunction(14,event);" onclick="CKEDITOR.tools.callFunction(15,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_25_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Đậm</span></a><a id="cke_26" class="cke_button cke_button__italic  cke_button_off" href="javascript:void('Nghiêng')" title="Nghiêng" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(16,event);" onfocus="return CKEDITOR.tools.callFunction(17,event);" onclick="CKEDITOR.tools.callFunction(18,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_26_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Nghiêng</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_27" class="cke_toolbar" aria-labelledby="cke_27_label" role="toolbar"><span id="cke_27_label" class="cke_voice_label">Đoạn</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_28" class="cke_button cke_button__numberedlist  cke_button_off" href="javascript:void('Chèn/Xoá Danh sách có thứ tự')" title="Chèn/Xoá Danh sách có thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(19,event);" onfocus="return CKEDITOR.tools.callFunction(20,event);" onclick="CKEDITOR.tools.callFunction(21,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -576px;background-size:auto;">&nbsp;</span><span id="cke_28_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Chèn/Xoá Danh sách có thứ tự</span></a><a id="cke_29" class="cke_button cke_button__bulletedlist  cke_button_off" href="javascript:void('Chèn/Xoá Danh sách không thứ tự')" title="Chèn/Xoá Danh sách không thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(22,event);" onfocus="return CKEDITOR.tools.callFunction(23,event);" onclick="CKEDITOR.tools.callFunction(24,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url(https://static.careerbuilder.vn/ckeditor445/plugins/icons.png?t=E8PB);background-position:0 -528px;background-size:auto;">&nbsp;</span><span id="cke_29_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Chèn/Xoá Danh sách không thứ tự</span></a></span><span class="cke_toolbar_end"></span></span></span></span><div id="cke_2_contents" class="cke_contents cke_reset" role="presentation" style="height: 200px;"><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" style="width: 1300px; height: 100%;" title="Bộ soạn thảo văn bản có định dạng, job_req" tabindex="0" allowtransparency="true"></iframe></div></div></div>
                                        <span class="form-error"></span>
                                        <div class="note">
                                            <p>Nhỏ hơn 10 000 kí tự</p>
                                            <div class="note-right" style="display: none">
                                                <p>
                                                    Hệ thống có sẵn file mô tả cho vị trí <ins> </ins>
                                                </p>
                                                <a href="javascript:void(0);" onclick="suggest(2);">
                                                    Sử dụng
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="job_desc_tmp" id="job_desc_tmp" value="">
                                    <input type="hidden" name="job_req_tmp" id="job_req_tmp" value="">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Mức lương <font style="color: red">*</font></label>
                                            <div class="form-salary d-flex align-center">
                                                <div class="form-group form-select">
                                                    <select name="job_salaryunit" id="job_salaryunit">
                                                        <option value="vnd">VNĐ</option>
                                                        <option value="usd">USD</option>
                                                    </select>
                                                </div>
                                                <div class="form-group form-text">
                                                    <input type="text" name="salary_from" id="salary_from" maxlength="12" value="" onblur="checkAlertSalary();" placeholder="Tối Thiểu *">
                                                </div>
                                                <div class="form-group form-text">
                                                    <input type="text" name="salary_to" id="salary_to" maxlength="12" value="" onblur="checkAlertSalary();" placeholder="Tối Đa *">
                                                </div>
                                                <span class="form-error" id="error_salary" style="width: 100%;max-width: none;flex: 1;"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex align-center salaryOnPostJob">
                                            <div class="form-group form-checkbox mt-5">
                                                <input type="checkbox" id="0-2" name="JOB_ISSECURITY" value="0" checked="checked">
                                                <label for="0-2"><span>Hiển thị trên tin tuyển dụng để thu hút ứng viên hơn</span></label>
                                            </div>
                                            <div class="noti"> <em class="material-icons">info</em>
                                                <div class="toolip">
                                                    <p class="width_62 fl_left"><b>Lưu ý:</b></p>

                                                    <br>- 72% ứng viên chia sẻ rằng thông tin lương ảnh hưởng đến quyết định ứng tuyển của họ.
                                                    <br>- Bạn có thể quyết định “hiển thị thông tin lương” để thu hút thêm nhiều hồ sơ ứng tuyển vào vị trí tuyển dụng.
                                                    <p style="color:black ; font-weight: bold;">- Bạn nên nhập cả hai mức lương tối thiểu và tối đa cho vị trí cần đăng tuyển.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="salary-suggest">
                                        <div class="box-title">
                                            <p> Mức lương đề xuất của công việc</p>
                                            <a>Rút Gọn</a>
                                        </div>
                                        <div class="box-suggest" style="">
                                        </div>
                                    </div>

                                    <div class="formality">
                                        <div class="form-group">
                                            <p class="title-label">Hình thức <font style="color: red">*</font></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="form-group form-checkbox">
                                                    <input type="checkbox" class="require-one-job-type input_margin" id="job_type1" name="job_type1" value="1">
                                                    <label for="job_type1">Nhân viên chính thức</label>
                                                </div>
                                                <span class="form-error" id="last_jobtype"></span>
                                            </div>
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="form-group form-checkbox">
                                                    <input type="checkbox" class="require-one-job-type input_margin" id="job_type2" name="job_type2" value="1">
                                                    <label for="job_type2">Bán thời gian</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="form-group form-checkbox">
                                                    <input type="checkbox" class="require-one-job-type input_margin" id="job_type3" name="job_type3" value="1">
                                                    <label for="job_type3">Thời vụ - Nghề tự do </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="form-group form-checkbox">
                                                    <input type="checkbox" class="require-one-job-type input_margin" id="job_type4" name="job_type4" value="1">
                                                    <label for="job_type4">Thực tập</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group form-date">
                                                <label>Hạn nhận hồ sơ <font style="color: red">*</font></label>
                                                <input type="text" name="JOB_LASTDATE" id="JOB_LASTDATE" class="dates_cus_select_postjob required" value="" readonly="">
                                                <div class="icon"><em class="material-icons">event</em></div>
                                                <span class="form-error error_job_lastdate"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="title-application">Phúc lợi</h2>
                                <div class="checkbox-wrap">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_2" name="BENEFIT_ID[]" value="2" checked="checked">
                                                <label for="BENEFIT_ID_2"> <em class="fa fa-medkit"></em>Chế độ bảo hiểm</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_3" name="BENEFIT_ID[]" value="3" checked="checked">
                                                <label for="BENEFIT_ID_3"> <em class="fa fa-plane"></em>Du Lịch</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_8" name="BENEFIT_ID[]" value="8" checked="checked">
                                                <label for="BENEFIT_ID_8"> <em class="fa fa-usd"></em>Chế độ thưởng</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_9" name="BENEFIT_ID[]" value="9" checked="checked">
                                                <label for="BENEFIT_ID_9"> <em class="fa fa-user-md"></em>Chăm sóc sức khỏe</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_10" name="BENEFIT_ID[]" value="10" checked="checked">
                                                <label for="BENEFIT_ID_10"> <em class="fa fa-graduation-cap"></em>Đào tạo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_11" name="BENEFIT_ID[]" value="11" checked="checked">
                                                <label for="BENEFIT_ID_11"> <em class="fa fa-line-chart"></em>Tăng lương</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_1" name="BENEFIT_ID[]" value="1">
                                                <label for="BENEFIT_ID_1"> <em class="fa fa-laptop"></em>Laptop</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_4" name="BENEFIT_ID[]" value="4">
                                                <label for="BENEFIT_ID_4"> <em class="fa fa-money"></em>Phụ cấp</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_5" name="BENEFIT_ID[]" value="5">
                                                <label for="BENEFIT_ID_5"> <em class="fa fa-taxi"></em>Xe đưa đón</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_6" name="BENEFIT_ID[]" value="6">
                                                <label for="BENEFIT_ID_6"> <em class="fa fa-fighter-jet"></em>Du lịch nước ngoài</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_7" name="BENEFIT_ID[]" value="7">
                                                <label for="BENEFIT_ID_7"> <em class="fa fa-black-tie"></em>Đồng phục</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_12" name="BENEFIT_ID[]" value="12">
                                                <label for="BENEFIT_ID_12"> <em class="fa fa-credit-card"></em>Công tác phí</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_13" name="BENEFIT_ID[]" value="13">
                                                <label for="BENEFIT_ID_13"> <em class="fa fa-money"></em>Phụ cấp thâm niên</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_14" name="BENEFIT_ID[]" value="14">
                                                <label for="BENEFIT_ID_14"> <em class="fa fa-briefcase"></em>Nghỉ phép năm</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="" id="BENEFIT_ID_15" name="BENEFIT_ID[]" value="15">
                                                <label for="BENEFIT_ID_15"> <em class="fa fa-heartbeat"></em>CLB thể thao</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="title-application">Yêu cầu chung</h2>
                                <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <p class="title-label">Giới tính</p>
                                            </div>
                                            <div class="d-flex gender-wrap">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="rnamnu" name="JOB_GENDER" value="0" checked="checked">
                                                    <label for="rnamnu">Nam/Nữ</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="rnam" name="JOB_GENDER" value="1">
                                                    <label for="rnam">Nam</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="rnu" name="JOB_GENDER" value="2">
                                                    <label for="rnu">Nữ</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <p class="title-label">Tuổi</p>
                                            </div>
                                            <div class="d-flex form-age align-center">
                                                <div class="form-group form-text">
                                                    <label>Từ</label>
                                                    <input type="text" maxlength="2" name="JOB_FROMAGE" id="JOB_FROMAGE" onkeyup="change_age(this);" onblur="chckage();">
                                                </div>
                                                <div class="form-group form-text">
                                                    <label>Đến</label>
                                                    <input type="text" maxlength="2" name="JOB_TOAGE" id="JOB_TOAGE" onkeyup="change_age(this);" onblur="chckage();">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-select">
                                                <label>Kinh nghiệm <font style="color: red">*</font></label>
                                                <select class="" name="JOB_ISEXPERIENCE" id="JOB_ISEXPERIENCE" onchange="loadExperience(this.value);">
                                                    <option value="">Chọn Kinh nghiệm</option>
                                                    <option value="2">Không yêu cầu kinh nghiệm</option>
                                                    <option value="1">Có kinh nghiệm</option>
                                                    <option value="0">Chưa có kinh nghiệm</option>
                                                </select>
                                                <span class="form-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" id="JOB_EXPERIENCE" style="display: none;">
                                            <div class="form-group">
                                                <p class="title-label">năm</p>
                                            </div>
                                            <div class="d-flex form-age align-center">
                                                <div class="form-group form-text">
                                                    <label>Từ</label>
                                                    <input name="JOB_FROMEXPERIENCE" id="JOB_FROMEXPERIENCE" onkeyup="change_number(this);" onblur="chcknumber();">
                                                </div>
                                                <div class="form-group form-text">
                                                    <label>Đến</label>
                                                    <input name="JOB_TOEXPERIENCE" id="JOB_TOEXPERIENCE" onkeyup="change_number(this);" onblur="chcknumber();">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-select">
                                                <label>Cấp bậc <font style="color: red">*</font></label>
                                                <select name="LEVEL_ID" id="LEVEL_ID">
                                                    <option value="">Chọn Cấp bậc</option>
                                                    <option value="1">Sinh viên/ Thực tập sinh</option>
                                                    <option value="2">Mới tốt nghiệp</option>
                                                    <option value="3">Nhân viên</option>
                                                    <option value="4">Trưởng nhóm / Giám sát</option>
                                                    <option value="5">Quản lý</option>
                                                    <option value="6">Phó Giám đốc</option>
                                                    <option value="7">Giám đốc </option>
                                                    <option value="8">Tổng giám đốc</option>
                                                    <option value="9">Chủ tịch / Phó Chủ tịch</option>
                                                </select>
                                                <span class="form-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-select">
                                                <label>Bằng cấp</label>
                                                <select name="DEGREE_ID" id="DEGREE_ID">
                                                    <option value="0">Không yêu cầu bằng cấp</option>
                                                    <option value="1">Trung học</option>
                                                    <option value="2">Trung cấp</option>
                                                    <option value="3">Cao đẳng</option>
                                                    <option value="4">Đại học</option>
                                                    <option value="5">Sau đại học</option>
                                                    <option value="6">Khác</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <p class="title-label">Ngôn Ngữ Trình Bày Hồ Sơ</p>
                                            </div>
                                            <div class="list-profile-requirement" id="div_lang_req">
                                                <div class="checkbox-group">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" id="language_require_1" name="LANGUAGE_REQUIRE[]" value="1" class="chk_lang_req">
                                                        <label for="language_require_1">Tiếng Anh</label>
                                                    </div>
                                                    <div class="form-group form-checkbox" id="lang_priority_1" style="display:none;">
                                                        <input type="checkbox" id="language_priority_1" name="LANGUAGE_PRIORITY[]" value="1" checked="checked" class="chk_lang_pri unique">
                                                        <label for="language_priority_1">Ưu tiên</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox-group">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" id="language_require_2" name="LANGUAGE_REQUIRE[]" value="2" class="chk_lang_req">
                                                        <label for="language_require_2">Tiếng Việt</label>
                                                    </div>
                                                    <div class="form-group form-checkbox" id="lang_priority_2" style="display:none;">
                                                        <input type="checkbox" id="language_priority_2" name="LANGUAGE_PRIORITY[]" value="2" checked="checked" class="chk_lang_pri unique">
                                                        <label for="language_priority_2">Ưu tiên</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox-group">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" id="language_require_3" name="LANGUAGE_REQUIRE[]" value="3" class="chk_lang_req">
                                                        <label for="language_require_3">Tiếng Pháp</label>
                                                    </div>
                                                    <div class="form-group form-checkbox" id="lang_priority_3" style="display:none;">
                                                        <input type="checkbox" id="language_priority_3" name="LANGUAGE_PRIORITY[]" value="3" checked="checked" class="chk_lang_pri unique">
                                                        <label for="language_priority_3">Ưu tiên</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox-group">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" id="language_require_4" name="LANGUAGE_REQUIRE[]" value="4" class="chk_lang_req">
                                                        <label for="language_require_4">Tiếng Trung</label>
                                                    </div>
                                                    <div class="form-group form-checkbox" id="lang_priority_4" style="display:none;">
                                                        <input type="checkbox" id="language_priority_4" name="LANGUAGE_PRIORITY[]" value="4" checked="checked" class="chk_lang_pri unique">
                                                        <label for="language_priority_4">Ưu tiên</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox-group">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" id="language_require_5" name="LANGUAGE_REQUIRE[]" value="5" class="chk_lang_req">
                                                        <label for="language_require_5">Tiếng Nhật</label>
                                                    </div>
                                                    <div class="form-group form-checkbox" id="lang_priority_5" style="display:none;">
                                                        <input type="checkbox" id="language_priority_5" name="LANGUAGE_PRIORITY[]" value="5" checked="checked" class="chk_lang_pri unique">
                                                        <label for="language_priority_5">Ưu tiên</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox-group">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" id="language_require_6" name="LANGUAGE_REQUIRE[]" value="6" class="chk_lang_req">
                                                        <label for="language_require_6">Tiếng Hàn Quốc</label>
                                                    </div>
                                                    <div class="form-group form-checkbox" id="lang_priority_6" style="display:none;">
                                                        <input type="checkbox" id="language_priority_6" name="LANGUAGE_PRIORITY[]" value="6" checked="checked" class="chk_lang_pri unique">
                                                        <label for="language_priority_6">Ưu tiên</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="strPhoto" name="strPhoto" value="avt_kutech_1697429798.jpg">
                                <input type="hidden" id="strPhotoDelete" name="strPhotoDelete" value="">
                                <input type="hidden" id="checkYouTube" name="checkYouTube" value="false">
                                <h2 class="title-application">Video và hình ảnh <span class="txt_required mar_left10">(Không bắt buộc)</span> </h2>
                                <div class="form-wrap video-wrap">
                                    <div class="noti">
                                        <p> <em class="material-icons">info </em>Link video youtube</p>
                                        <div class="toolip">
                                            Nhập thêm video và hình ảnh giới thiệu về công ty sẽ thu hút ứng viên nộp đơn ứng tuyển. <br>Video và hình ảnh này sẽ được sử dụng chung cho tất cả
                                            <a class="line_bot fancybox" href="https://static.careerbuilder.vn/themes/kiemviecv32/employersnews/images/graphics/ex1.gif">thông tin tuyển dụng</a>
                                            và
                                            <a class="line_bot fancybox" href="https://static.careerbuilder.vn/themes/kiemviecv32/employersnews/images/graphics/ex2.gif">trang giới thiệu về công ty</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text">
                                                <input type="text" placeholder="Link video youtube" id="strVideo" name="strVideo" onblur="checkYoutubeValid(0);" value="">
                                            </div>
                                            <span class="error error_strVideo"> </span>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="noti toollips">
                                                <p> <em class="material-icons">info </em></p>
                                                <div class="toolip">
                                                    Ví dụ: https://www.youtube.com/watch?v=egYcmuk3dso
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview"><a class="btn-preview" href="javascript:void(0);" onclick="checkYoutubeValid(1)">Xem trước</a></div>

                                    <div class="main-image">
                                        <div class="form-group">
                                            <p class="title-label">Hình ảnh <br><span class="note2">(Tối đa 5 ảnh)</span></p>
                                        </div>
                                        <div class="list-image" id="list-image">
                                            <div class="image-item">
                                                <img src="https://images.careerbuilder.vn//employer_photo/305490/avt_kutech_1697429798.jpg">
                                                <a class="btn-del-img  company-btn-del-img" href="javascript:void(0);" data-src="avt_kutech_1697429798.jpg" title="Xóa ảnh"><em class="material-icons">clear</em></a>
                                            </div>
                                        </div>
                                        <div class="upload-img">
                                            <input type="file" id="filephoto" onchange="return ajaxPhotoUpload();">
                                            <label for="filephoto" class=""><em class="material-icons">folder_open</em>Tải Ảnh từ máy tính</label>
                                            <div class="noti"> <em class="material-icons">info </em>
                                                <div class="toolip">
                                                    <div class="clear note2 pad_top8">- Hỗ trợ định dạng .jpg, .gif, .png; dung lượng mỗi ảnh không vượt quá 1mb</div>
                                                    <div class="clear note2">- Chiều cao mỗi ảnh phải &gt;135px và &lt; 1,500px</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-video">
                                        <div class="form-group form-checkbox">
                                            <input type="checkbox" id="isdisplay" name="isdisplay" value="1" checked="checked">
                                            <label for="isdisplay"><strong>Hiển thị video và ảnh cho tuyển dụng này</strong></label>
                                            <span id="loading" class="img_loading" style="display:none"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/css/images/graphics/loading.gif"></span>
                                        </div>
                                    </div>
                                </div>

                                <script type="text/javascript">
                                    $( document ).ready(function() {
                                        checkYoutubeValid();
                                        eventAfterAjax();
                                        deletePhotoCompany();
                                    });


                                    var is_execute_profile = false;
                                    function ajaxPhotoUpload()
                                    {
                                        $('#filephoto').prop('disabled', true);
                                        var strPhoto = $("#strPhoto").val();
                                        if(is_execute_profile)
                                            return false;
                                        is_execute_profile = true;

                                        var file = $('#filephoto')[0].files;

                                        var formdata = false;
                                        if (window.FormData) {
                                            formdata = new FormData();
                                        }
                                        formdata.append("filephoto", file[0]);
                                        $('#filephoto').val('');
                                        $.ajax({
                                            url: 'https://careerbuilder.vn/vi/employers/postjobs/uploadphoto',
                                            type: "POST",
                                            data: formdata,
                                            processData: false,
                                            contentType: false,
                                            dataType: 'json',
                                            success: function (data) {
                                                is_execute_profile = false;
                                                if(typeof(data.error) != 'undefined')
                                                {
                                                    if(data.error != '')
                                                    {
                                                        show_noti(2, data.error);
                                                    }
                                                    else
                                                    {
                                                        $("#list-image").append('<div class="image-item"><img src="' + data.path + '"><a class="btn-del-img company-btn-del-img" href="javascript:void(0);" data-src="' + data.msg + '" title="Xóa ảnh\"><em class="material-icons">clear</em></a></div>');
                                                        $('#isdisplay').prop('disabled', false);
                                                        if(strPhoto != '') strPhoto += ',';
                                                        strPhoto += data.msg;
                                                        $("#strPhoto").val(strPhoto);
                                                    }
                                                }
                                                eventAfterAjax();
                                            }
                                        });

                                        return false;
                                    }
                                    function eventAfterAjax()
                                    {
                                        $("#loading").hide();
                                        var num = $("#strPhoto").val().split(",").length;
                                        if(num >= 5){
                                            $('#filephoto').prop('disabled', true);
                                        }else{
                                            $('#filephoto').prop('disabled', false);
                                        }
                                    }


                                    function deletePhotoCompany()
                                    {
                                        $(document).on('click', ".company-btn-del-img", function(){
                                            var name = $(this).data('src');
                                            $(this).closest('.image-item').remove();
                                            var strPhoto = $("#strPhoto").val();
                                            var strPhotoDelete = $("#strPhotoDelete").val();
                                            // Add in hidden delete
                                            if(strPhotoDelete != '')
                                                strPhotoDelete += ',';
                                            strPhotoDelete += name;
                                            $("#strPhotoDelete").val(strPhotoDelete);
                                            // Remove in hidden upload
                                            var posName = strPhoto.indexOf(name);
                                            var posTemp = strPhoto.indexOf(',');
                                            if(posName == 0){
                                                if(posTemp > 0)
                                                    name += ',';
                                            }else{
                                                name = ','+name;
                                            }
                                            $("#strPhoto").val(strPhoto.replace(name,''));
                                            // Check exist image and video
                                            checkYoutubeValid(2);
                                            if($("#strPhoto").val() == '' && $("#checkYouTube").val() == 'false' ){
                                                $('#isdisplay').prop('checked', false);
                                                $('#isdisplay').prop('disabled', true);
                                            }
                                            $('#filephoto').prop('disabled', false);
                                        });
                                    }

                                    /* XÓA KHI UPDATE SAU */
                                    function ajaxPhotoDelete(name)
                                    {
                                        var strPhoto = $("#strPhoto").val();
                                        var strPhotoDelete = $("#strPhotoDelete").val();
                                        // Add in hidden delete
                                        if(strPhotoDelete != '')
                                            strPhotoDelete += ',';
                                        strPhotoDelete += name;
                                        $("#strPhotoDelete").val(strPhotoDelete);
                                        // Remove in hidden upload
                                        var posName = strPhoto.indexOf(name);
                                        var posTemp = strPhoto.indexOf(',');
                                        if(posName == 0){
                                            if(posTemp > 0)
                                                name += ',';
                                        }else{
                                            name = ','+name;
                                        }
                                        $("#strPhoto").val(strPhoto.replace(name,''));
                                        // Check exist image and video
                                        checkYoutubeValid(2);
                                        if($("#strPhoto").val() == '' && $("#checkYouTube").val() == 'false' ){
                                            $('#isdisplay').prop('checked', false);
                                            $('#isdisplay').prop('disabled', true);
                                        }
                                        $('#filephoto').prop('disabled', false);
                                    }
                                    /* XÓA KHI UPDATE SAU */


                                    /* type 0: check message error, 1: check message error and show video, 2: check */

                                    function checkYoutubeLink(){
                                        var video1 = $('#strVideo').val();
                                        url = url.replace(/^\s+|\s+$/g, "");
                                        var video2 = $('#strVideo').val();
                                        url = url.replace(/^\s+|\s+$/g, "");
                                    }

                                    function checkYoutubeValid(type)
                                    {
                                        var url = $('#strVideo').val();
                                        url = url.replace(/^\s+|\s+$/g, "");

                                        if(type == 3 || type == 4){
                                            url = $('#strVideoRecruiment').val();
                                            url = url.replace(/^\s+|\s+$/g, "");
                                        }
                                        if(type == 5 || type == 6){
                                            url = $('#strVideoRecruiment2').val();
                                            url = url.replace(/^\s+|\s+$/g, "");
                                        }

                                        if(url != '')
                                        {
                                            var pos = url.indexOf('youtube.com/watch?v=');
                                            // Check youtube link valid before check video valid on server
                                            if(pos < 0){
                                                if(type != 2){
                                                    if(type == 3 || type == 4){
                                                        $('#eVideoRecruiment').remove();
                                                        $('#strVideoRecruiment').after('<span class="form-error" id="eVideoRecruiment">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                    }else if(type == 5 || type == 6){
                                                        $('#eVideoRecruiment2').remove();
                                                        $('#strVideoRecruiment2').after('<span class="form-error" id="eVideoRecruiment2">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                    }else{
                                                        $('#eVideo').remove();
                                                        $('#strVideo').after('<span class="form-error" id="eVideo">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                    }
                                                }
                                                // Check exist image and video
                                                if($("#strPhoto").val() == ''){
                                                    $('#isdisplay').prop('checked', false);
                                                    $('#isdisplay').prop('disabled', true);
                                                }
                                                $('#checkYouTube').val('false');
                                                return false;
                                            }

                                            $.ajax({
                                                type: "POST",
                                                url: domain+'employers/postjobs/checklinkyoutube',
                                                dataType: 'JSON',
                                                data: 'link=' + url,
                                                success: function(rs)
                                                {
                                                    if(rs == '0'){
                                                        // Message error when input link youtube
                                                        if(type != 2)
                                                        {
                                                            if(type == 3 || type == 4){
                                                                $('#eVideoRecruiment').remove();
                                                                $('#strVideoRecruiment').after('<span class="form-error" id="eVideoRecruiment">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                            }else if(type == 5 || type == 6){
                                                                $('#eVideoRecruiment2').remove();
                                                                $('#strVideoRecruiment2').after('<span class="form-error" id="eVideoRecruiment2">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                            }else{
                                                                $('#eVideo').remove();
                                                                $('#strVideo').after('<span class="form-error" id="eVideo">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                            }
                                                        }
                                                        // Check exist image and video
                                                        if($("#strPhoto").val() == ''){
                                                            $('#isdisplay').prop('checked', false);
                                                            $('#isdisplay').prop('disabled', true);
                                                        }
                                                        $('#checkYouTube').val('false');
                                                        return false;
                                                    }else{
                                                        if(type != 2){
                                                            $('#eVideo').remove();
                                                            $('#eVideoRecruiment').remove();
                                                            $('#eVideoRecruiment2').remove();
                                                            $('#isdisplay').prop('disabled', false);
                                                            if(type == 1 || type == 3 || type == 5){
                                                                $.fancybox.open({
                                                                    'closeExisting': true,
                                                                    'src': url.replace(new RegExp("watch\\?v=", "i"), 'embed/') + '?autoplay=1&rel=0',
                                                                    'type': 'iframe'
                                                                });
                                                            }
                                                        }
                                                        $('#checkYouTube').val('true');
                                                        return true;
                                                    }
                                                }
                                            });
                                        }
                                        else
                                        {
                                            /* Don't input link youtube */
                                            $('#eVideo').remove();
                                            $('#eVideoRecruiment').remove();
                                            // check button view
                                            if(type == 1){
                                                $('#strVideo').after('<span class="form-error" id="eVideo">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                            }
                                            if(type == 5){
                                                $('#strVideoRecruiment2').after('<span class="form-error" id="eVideoRecruiment2">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                            }
                                            if(type == 3){
                                                $('#strVideoRecruiment').after('<span class="form-error" id="eVideoRecruiment">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                            }
                                            // Check exist image and video
                                            if($("#strPhoto").val() == ''){
                                                $('#isdisplay').prop('checked', false);
                                                $('#isdisplay').prop('disabled', true);
                                            }
                                            $('#checkYouTube').val('false');
                                            return false;
                                        }
                                    }



                                </script>

                                <h2 class="title-application">Thông tin khác <span><span class="txt_required mar_left10">(Không bắt buộc)</span></span></h2>
                                <div class="form-wrap other-information-wrap">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p>Giới thiệu về môi trường làm việc, thời gian thử việc, cơ hội huấn luyện, đồng nghiệp,....</p>
                                            <a class="btnlink btn-show-additional" href="javascript:;">+ Bổ sung</a>
                                            <div class="form-wrap other-additional-wrap">
                                                <div class="form-group form-text mt-20">
                                                    <label for="">Thử việc</label>
                                                    <input type="text" id="JOB_PROBATIONTIME" name="JOB_PROBATIONTIME" maxlength="70" value="" placeholder="Nhập nội dung">
                                                    <div class="note"><p>Tối đa 70 kí tự</p></div>
                                                </div>
                                                <div class="form-group form-text mt-20">
                                                    <label for="">Thời gian làm việc</label>
                                                    <input type="text" id="JOB_WORKTIME" name="JOB_WORKTIME" maxlength="70" value="" placeholder="Nhập nội dung">
                                                    <div class="note"><p>Tối đa 70 kí tự</p></div>
                                                </div>
                                                <div class="form-group form-textarea">
                                                    <label for="">Cơ hội huấn luyện</label>
                                                    <textarea id="JOB_TRAINOPPORTUNITY" name="JOB_TRAINOPPORTUNITY" placeholder="Nhập nội dung"></textarea>
                                                    <div class="note"><p>Tối đa 300 kí tự</p></div>
                                                </div>
                                                <div class="form-group form-textarea">

                                                    <label for="">Đồng nghiệp</label>
                                                    <textarea id="JOB_COLLEAGUE" name="JOB_COLLEAGUE" placeholder="Nhập nội dung"></textarea>
                                                    <div class="note"><p>Tối đa 300 kí tự</p></div>
                                                </div>
                                                <div class="form-group form-textarea">
                                                    <label for="">Phúc lợi</label>
                                                    <textarea id="JOB_BENEFIT" name="JOB_BENEFIT" placeholder="Nhập nội dung"></textarea>
                                                    <div class="note"><p>Tối đa 300 kí tự</p></div>
                                                </div>
                                                <div class="form-group form-textarea">
                                                    <label for="">Phụ cấp khác</label>
                                                    <textarea name="JOB_ADDSALARY" id="JOB_ADDSALARY" placeholder="Nhập nội dung"></textarea>
                                                    <div class="note"><p>Tối đa 300 kí tự</p></div>
                                                </div>
                                                <div class="form-group form-textarea">

                                                    <label for="">Ngày nghỉ</label>
                                                    <textarea id="JOB_ANNUALLEAVE" name="JOB_ANNUALLEAVE" placeholder="Nhập nội dung"></textarea>
                                                    <div class="note"><p>Tối đa 300 kí tự</p></div>
                                                </div>
                                            </div>
                                            <div class="form-group form-qs mt-20">
                                                <label for="">Tên resume tag
                                                    <span class="btnlink">(Resume tag name là gì ? )
                                                    <div class="toolip">
                                                        -Là các cụm từ xuất hiện trong hồ sơ ứng viên phù hợp cho nhu cầu tuyển dụng của quý công ty.<br>
- Dựa vào resume tag name hệ thống sẽ tìm và gợi ý những hồ sơ ứng viên phù hợp với tag name mà quý công ty đã tạo. <br>
- Lựa chọn các tag name phù hợp với vị trí tuyển dụng của quý công ty.<br>
- Bạn được phép tạo tối đa 10 tag name cho một vị trí tuyển dụng.
                                                    </div>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="form-group form-text form-submit">
                                                <input type="text" class="auto_suggest" id="synonym" name="synonym" autocomplete="off" onkeydown="if (event.keyCode == 13) addWord();">
                                                <a class="btn-submit-add" href="javascript:void(0)" onclick="return addWord()">Thêm Tag</a>
                                            </div>
                                            <div class="list-tag" id="list-tag">
                                            </div>
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" value="1" name="JOB_WFH" id="JOB_WFH" class="input_margin">
                                                <label for="JOB_WFH">Work from home</label>
                                            </div>
                                            <div class="form-group mt-0 form-note-workfromhome">
                                                Tick chọn nếu vị trí tuyển dụng này cho phép ứng viên có thể chọn chế độ làm việc tại nhà trong thời điểm hiện tại (Work from home) mà không nhất thiết phải có mặt tại văn phòng công ty. Hệ thống sẽ phân loại và đánh dấu đăng tuyển này vào danh mục tìm kiếm loại công việc là “Work from Home”.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-submit form-continue">
                                    <button class="btn-gradient btn-submit" id="btn_submit_form_postjobs" type="button" onclick="is_Filter_Form();">
                                        Tiếp tục
                                    </button>
                                    <button class="btn-gradient btn-post" id="btn_submit_form_postjobs_finish" type="button" onclick="is_Filter_Form3();">
                                        Lưu
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tabslet-content" id="tab-2">
                            <div class="main-application-information">
                                <h2 class="title-application">Thông tin liên hệ</h2>
                                <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="checkprofile" id="checkprofile" value="1">
                                                <label for="checkprofile">Ẩn thông tin công ty: tên công ty và giới thiệu về công ty</label>
                                                <a class="btnlink preview-company" href="javascript:void(0)" onclick="popupProfileAjax(); return false;">(Xem lại thông tin công ty đã tạo)</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="input_margin" onclick="change_security(this);" name="hide_contact" id="hide_contact" value="1">
                                                <label for="hide_contact">Ẩn thông tin liên hệ: tên công ty, địa chỉ, người liên hệ</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" name="JOB_CONTACT_COMPANY" id="JOB_CONTACT_COMPANY" value="KUTECH" placeholder="Tên công ty *">
                                            </div>
                                            <div id="security_client" style="display: none;">
                                                <div class="form-group form-checkbox">
                                                    <input type="radio" name="Hide_Job" id="JOB_CONTACT_SECRECY" checked="checked" value="0">
                                                    <label for="JOB_CONTACT_SECRECY">Bảo mật</label>
                                                </div>
                                                <div class="form-group form-checkbox">
                                                    <input type="radio" class="input_margin" name="Hide_Job" value="1" id="JOB_CONTACT_CLIENT">
                                                    <label for="JOB_CONTACT_CLIENT">CareerBuilder's client</label>
                                                </div>
                                            </div>
                                            <input name="company_profile" id="company_profile" type="hidden" value="35A99252">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" id="JOB_CONTACT_ADDRESS" name="JOB_CONTACT_ADDRESS" value="159 Tô Hiệu" placeholder="Địa chỉ *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" name="JOB_CONTACT_NAME" id="JOB_CONTACT_NAME" value="Viet Nam" placeholder="Người liên hệ *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" class="width_295" name="JOB_CONTACT_EMAIL" id="JOB_CONTACT_EMAIL" maxlength="150" value="nhavophong3@gmail.com" placeholder="Email 1 *">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 d-flex align-center">
                                            <div class="noti"><em class="material-icons">info</em>
                                                <div class="toolip">
                                                    <p>(Email sẽ được bảo mật)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" name="JOB_CONTACT_EMAIL2" id="JOB_CONTACT_EMAIL2" maxlength="150" value="" placeholder="Email 2">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 d-flex align-center">
                                            <div class="noti"><em class="material-icons">info</em>
                                                <div class="toolip">
                                                    <p>(Email sẽ được bảo mật)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-select">
                                                <select name="receivemail">
                                                    <option value="0">Tiếng Việt</option>
                                                    <option value="1">Tiếng Anh</option>
                                                    <option value="2">Không nhận email thông báo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 d-flex align-center">
                                            <div class="noti"><em class="material-icons">info</em>
                                                <div class="toolip">
                                                    <p>Nhận email thông báo khi có ứng viên nộp đơn trực tuyến.</p>
                                                    <p>Khi nhấn chọn chức năng này, Quý công ty sẽ nhận được email thông báo từ hệ thống mỗi khi có ứng viên nộp đơn trực tuyến vào các vị trí công việc tương ứng mà Quý công ty đang đăng tuyển trên hệ thống.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="JOB_RECEIVEEMAIL_RESUME" checked="checked" value="1" id="records1">
                                                <label for="records1">Nhận hồ sơ gợi ý phù hợp với vị trí tuyển dụng</label>
                                            </div>
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="input_margin" name="JOB_APPLYONLINE" id="JOB_APPLYONLINE" value="1">
                                                <label for="JOB_APPLYONLINE">Thiết lập thư trả lời tự động khi có ứng viên nộp đơn ứng tuyển</label>
                                                <div class="noti"><em class="material-icons">info</em>
                                                    <div class="toolip">
                                                        <p>Hệ thống sẽ tự động gửi Thư tự động trả lời cho các ứng viên nộp hồ sơ trực tuyến. Thư này sẽ không đính kèm trong quảng cáo đăng tuyển của quý khách.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-standard" id="MailReply">
                                        <div class="row">
                                            <div class="col-lg-7">

                                                <input name="job_id" type="hidden" value="35A4E900">
                                                <input name="savetype" type="hidden" value="1">
                                                <input name="emp_id" type="hidden" value="305490">
                                                <div class="form-wrap">
                                                    <div class="form-group form-select">
                                                        <label for="">Thư trả lời</label>
                                                        <select name="slAutoReply" id="slAutoReply">
                                                            <option value="0">Chọn</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-text">
                                                        <label for="">Tiêu đề</label>
                                                        <input type="text" placeholder="Nhập tiêu đề" name="reply_title" id="reply_title" value="">
                                                        <span class="error"></span>
                                                        <span class="noted">Tối đa 70 kí tự</span>
                                                    </div>
                                                    <div class="form-group form-textarea">
                                                        <label>Nội dung thư</label>
                                                        <div class="d-flex">
                                                            <p>Smart Fields</p>
                                                            <select name="addfield" id="addfield" onchange="addSmartField('reply_content', this.value);">
                                                                <option value="">Chọn</option>
                                                                <option value="[firstname]">[firstname]</option>
                                                                <option value="[lastname]">[lastname]</option>
                                                                <option value="[job-title]">[job-title]</option>
                                                                <option value="[contact-name]">[contact-name]</option>
                                                            </select>
                                                            <a class="see-sample" href="javascript:void(0);" id="view_sample">Xem mẫu</a>
                                                        </div>
                                                        <textarea name="reply_content" id="reply_content"></textarea>
                                                        <span class="error"></span>
                                                        <span class="noted"> Ít nhất 30 ký tự, Nhiều nhất 3000 ký tự</span>
                                                    </div>
                                                    <div class="form-group form-radio">
                                                        <div class="group">
                                                            <input type="radio" class="input_margin" name="replyto" value="1" id="edit-email-1">
                                                            <label for="edit-email-1">Chỉ riêng vị trí tuyển dụng này</label>
                                                        </div>
                                                        <div class="group">
                                                            <input type="radio" class="input_margin" name="replyto" value="0" id="edit-email-2">
                                                            <label for="edit-email-2">Tất cả các tuyển dụng</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs-posting-modal jobs-posting-17-modal" id="LetterAbout" style="display: none">
                                        <div class="modal-head">
                                            <p class="title">Thư trả lời tự động mẫu</p>
                                        </div>
                                        <div class="modal-body">
                                            <div class="preview-reply-letter">
                                                <div class="title">
                                                    <p>Tiêu đề: Thanks you for applying</p>
                                                </div>
                                                <div class="full-content">
                                                    Dear <strong>[firstname] [lastname]</strong>,<br>We have received your resume submission for the <strong>[job-title]</strong> position. We appreciate your interest and look forward to reviewing your resume.<br>
                                                    We will contact you within seven days if your qualifications meet the requirements of the position.<br>
                                                    Thanks you again for applying!<br><br>Best regards,<br><strong>[contact-name]</strong>
                                                </div>
                                            </div>
                                            <div class="form-group form-submit">
                                                <button class="btn-gradient" type="button" name="save" id="btn_preview_sample" onclick="createMail('35A4E900');">Trở lại</button>
                                                <a class="btn-cancel" href="javascript:void(0);" data-fancybox-close="">Bỏ qua</a>
                                            </div>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $('#slAutoReply').change(function(){
                                                var reply_id = $('#slAutoReply').val();
                                                if(reply_id > 0){
                                                    $.ajax({
                                                        type: "POST",
                                                        url: domain + 'employers/postjobs/detailreply',
                                                        data: 'reply_id=' + reply_id,
                                                        dataType: 'json',
                                                        success: function(obj)
                                                        {
                                                            $("#reply_title").val(obj.AUTOREPLY_TITLE);
                                                            $("#reply_content").val(obj.AUTOREPLY_CONTENT);
                                                            $("#reply0").attr("checked", true);
                                                            $("#reply1").attr("checked", false);
                                                        }
                                                    });
                                                }
                                            });
                                            $('#view_sample').click(function(){
                                                $.fancybox.close('all');
                                                $.fancybox.open({'src' : '#LetterAbout','type' : 'inline'});
                                            });
                                        });
                                    </script>

                                </div>
                                <div class="form-group form-submit form-continue form-back-continue">
                                    <button class="btn-gradient btn-save" href="javascript:void(0);" onclick="is_Filter_Form2()">
                                        Tiếp tục
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tabslet-content" id="tab-3">
                        </div>
                    </div><input type="hidden" name="inputchange" id="inputchange" value="0"></form>

            </div>
        </div>
    </section>
@endsection

