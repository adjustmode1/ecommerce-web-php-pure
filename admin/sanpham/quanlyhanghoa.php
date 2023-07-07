<?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}
?>
<div class="main-content">
    <div class="row">
        <div class="col-md-6 col-sm-8 clearfix">
            <ul class="user-info pull-left pull-none-xsm">
                <li class="profile-info dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img
                                src="https://demo.neontheme.com/assets/images/thumb-1@2x.png" alt="" class="img-circle"
                                width="44"/>
                        <?= $hoten ?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-4 clearfix hidden-xs">
            <ul class="list-inline links-list pull-right">
                <li class="sep"></li>
                <li><a href="#">
                        Đăng xuất <i class="entypo-logout right"></i> </a></li>
            </ul>
        </div>
    </div>
    <hr/>
    <div>
        <form action="index.php?act=qlsp" method="post">
            <input type="text" name="kyw" placeholder="Nhập sản phẩm cần tìm">
            <select name="iddm" style="height: 23px">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>

            </select>
            <input type="submit" name="listok" value="Tìm" class="btn-blue">
        </form>

    </div>
    <ol class="breadcrumb bc-3">
        <li><a href="£"><i class="fa fa-home"></i>Trang Admin</a></li>
        <li class="active"><strong>Quản lý hàng hóa</strong></li>
    </ol>
    <h3>Quản lý hàng hóa</h3>
    <div class="content">
        <table class="table table-bordered table-striped datatable" id="table-2">
            <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá cũ</th>
                <th>Giá mới</th>
                <th>Hình</th>
                <th>Lượt xem</th>
                <th>Ngày tạo</th>
                <th>Ngày sửa</th>
                <th>Xử lý</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img width='30px' height='30px' src='" . $hinhpath . "'>";
                } else {
                    $hinh = "no photo";
                } ?>
                <tr class="thao">
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $giacu; ?></td>
                    <td><?php echo $giamoi; ?></td>
                    <td><?php echo $hinh; ?></td>
                    <td><?php echo $luotxem; ?></td>
                    <td><?php echo $ngaytao; ?></td>
                    <td><?php echo $ngaysua; ?></td>
                    <td><a href="<?php echo $suasp; ?>" class="btn btn-info btn-sm btn-icon icon-left"> <i
                                    class="entypo-pencil"></i>
                            Sửa
                        </a>
                        <a href="<?php echo $xoasp; ?>" class="btn btn-danger btn-sm btn-icon icon-left"> <i
                                    class="entypo-cancel"></i>
                            Xóa
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <br/> <a href="index.php?act=addsp" class="btn btn-primary"> <i class="entypo-plus"></i>
        Thêm
    </a> <br/> <br/>
    <div class="pagination"></div>
</div>
<script type="text/javascript">
    function getPageList(totalPages, page, maxLength) {
        function range(start, end) {
            return Array.from(Array(end - start + 1), (_, i) => i + start);
        }

        var sideWidth = maxLength < 9 ? 1 : 2;
        var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
        var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

        if (totalPages <= maxLength) {
            return range(1, totalPages);
        }

        if (page <= maxLength - sideWidth - 1 - rightWidth) {
            return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
        }

        if (page >= totalPages - sideWidth - 1 - rightWidth) {
            return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
        }

        return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
    }

    $(function () {
        var numberOfItems = $(".content .thao").length;
        var limitPerPage = 5; //How many card items visible per a page
        var totalPages = Math.ceil(numberOfItems / limitPerPage);
        var paginationSize = 7; //How many page elements visible in the pagination
        var currentPage;

        function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $(".content .thao").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

            $(".pagination li").slice(1, -1).remove();

            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
                    .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                    .attr({
                        href: "javascript:void(0)"
                    }).text(item || "...")).insertBefore(".next-page");
            });

            $(".previous-page").toggleClass("disable", currentPage === 1);
            $(".next-page").toggleClass("disable", currentPage === totalPages);
            return true;
        }

        $(".pagination").append(
            $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"
            }).text("Trước")),
            $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"
            }).text("Sau"))
        );

        $(".content").show();
        showPage(1);

        $(document).on("click", ".pagination li.current-page:not(.active)", function () {
            return showPage(+$(this).text());
        });

        $(".next-page").on("click", function () {
            return showPage(currentPage + 1);
        });

        $(".previous-page").on("click", function () {
            return showPage(currentPage - 1);
        });
    });
</script>
<!--End New============-->
