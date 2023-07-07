<?php
include_once "../model/pdo.php";
include_once "../model/danhmuc.php";
include_once "../model/sanpham.php";
include_once "../model/taikhoan.php";
include_once "../model/cart.php";
include_once "../views/global.php";
include "../views/head.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

if(isset($_GET['img'])){
    $img_s = $_GET['img'];
}
function callAPI($method, $url, $data){
    $curl = curl_init();
    switch ($method){
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
          if ($data)
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'APIKEY: 111111111111111111111',
       'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
 }

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop = loadall_sanpham_top();
$sql1= "select * from sanpham where 1 order by luotxem desc limit 0,4";
$dstop_limit= pdo_query($sql1);

if ((isset($_GET['act'])) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];


                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "../views/chiTiet.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dsdm = loadall_danhmuc();
            $dssp = loadall_sanpham($kyw, $iddm);
            if(isset($_GET['id'])){
                $list_id = explode(',',$_GET['id']);
                $id_conditions = array();
                foreach ($list_id as $value) {
                $id_conditions[] = "id = $value";
                }
                $id_clause = implode(" OR ", $id_conditions);
                $sql = "SELECT * FROM sanpham WHERE $id_clause";
                $dssp = loadall_sanpham_by_img( $sql);
            }

            include "../views/sanPham.php";
            break;
        case 'search_by_image':

            $target_dir = "search_by_image/";
            $file_extension = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
            $file_name = uniqid(rand(), true) . "." . $file_extension;
            $target_file = $target_dir . basename($file_name);
            var_dump($target_dir);
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){

            }else {

            }

            $uri = 'localhost:5000/search_by_image?img=' . $file_name;
            $get_data = callAPI('GET', $uri, false);
            $response = json_decode($get_data, true);

            $keep = $response['result'];
            $map = array();
            $cnt = 0;
            foreach ($keep as $p) {
                $map[$p] = $cnt;
                $cnt = $cnt + 1;
            }

            $dssp = loadall_sanpham_with_keep($keep);

            function cmp($a, $b) {
                global $map;
                $x = $map[$a['img']];
                $y = $map[$b['img']];
                if($x == $y) {
                    return 0;
                } else if ($x > $y) {
                    return 1;
                }
                return -1;
            }

            usort($dssp, "cmp");

            $file_display_image = $target_file;

            include "../views/sanPham.php";
            break;
        case 'profile':
            include "../views/profile.php";
            break;
            //giỏ hàng
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $giamoi = $_POST['giamoi'];
                $soluong = $_POST['soluong'];
                $thanhtien = $soluong * intval($giamoi);
                $spadd = [$id, $name, $img, $giamoi, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
//                var_dump($_SESSION['mycart']);
            }
            header("Location: ../views/index.php?act=viewcart");
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("Location: ../views/index.php?act=viewcart");
            break;
        case 'thanhtoan':
            // if(isset($_POST['muahang'])){
            //     if($_SESSION['mycart']=''){
            //         $thongbao="Bạn chưa thêm sản phẩm nào vào giỏ hàng";
            //     }else{
            //         include "../views/thanhtoan.php";
            //     }
            // }
            include "../views/thanhtoan.php";
            break;
        case 'hoadon':
            //bill
            // if(isset($_POST['mua'])&&($_POST['mua'])){
            if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
            else $id = 0;
            $name = $_POST['name'];
            $tel = $_POST['tell'];
            $email = $_POST['email'];
            $dress = $_POST['dress'];
            $pttt = $_POST['pttt'];
            $ngaydathang = date('d/m/Y H:i:s:a');
            $tongdh = tongdh();

            $idbill = insert_bill($iduser, $name, $dress, $tel, $email, $pttt, $ngaydathang, $tongdh);

            //insert into cart : $session['mycart'] & idbill
            foreach ($_SESSION['mycart'] as $cart) {
                insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
            }
            //xóa session cart
            $_SESSION['cart'] = [];
            // }   
            // $name=$_POST['name'];
            // $tel=$_POST['tell'];
            // $email=$_POST['email'];
            // $dress=$_POST['dress'];
            // $pttt=$_POST['pttt'];
            // $ngaydathang=date('d/m/Y H:i:s:a');
            // $tongdh=tongdh();
            // $idbill=insert_bill($name,$dress,$tel,$email,$pttt,$ngaydathang,$tongdh);
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "../views/hoadon.php";
            break;
        case 'mybill':
            $listbill = loadall_mybill($_SESSION['user']['id']);
            include "../views/mybill.php";
            break;
        case 'viewcart':
            include "../views/giohang.php";
            break;
        case 'editPass':
            include "../views/editPass.php";
            break;
            // case 'thanhtoan':
            //     include "thanhtoan.php";
            // break;
        case 'edit_name':
            if (isset($_POST['suatk']) && ($_POST['suatk'])) {
                $user = $_POST['user'];
                $id = $_POST['id'];
                function update_user($id, $user)
                {
                    $sql = "update taikhoan set user='" . $user . "' where id=" . $id;
                    pdo_execute($sql);
                }
                function checkuser($user)
                {
                    $sql = "select * from taikhoan where user='" . $user . "'";
                    $sp = pdo_query_one($sql);
                    return $sp;
                }
                $_SESSION['user'] = checkuser($user);

                // header('loaction: index.php?act=edit_name');
            }
            include "editName.php";
            break;
        case 'edit_dress':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $dress = $_POST['dress'];
                $id = $_POST['id'];

                update_dress($id, $dress);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location:index.php?edit_dress');
            }
            include "editAddress.php";
            break;
        case 'lienhe':

            include "lienHe.php";
            break;
        case 'gioithieu':

            include "gioiThieu.php";
            break;
        case 'tintuc':

            include "tinTuc.php";
            break;
        default:
            include "../views/home.php";
            break;
    }
} else {
    include "../views/home.php";
}
include "../views/footer.php";
