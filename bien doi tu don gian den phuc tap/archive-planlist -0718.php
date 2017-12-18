<?php
    include("functions/connect.php");
?>


<?php
/*
Template Name: プラン一覧
*/
?>
<?php //get_header(); ?>
<?php get_header(); ?>
<main id="main-content">
  <div class="bread-crumbs">
    <ul class="clearfix inner">
      <li><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
      <li>プラン一覧</li>
    </ul>
  </div>
  
  <?php get_sidebar("search"); ?>
  
  <div class="archive-plan-content wrap">
    <section class="inner">
      <h2 class="home-h2-ttl">おすすめプラン</h2>
      <p class="archive-plan-display">全<span>36<span>件中&nbsp;1～10件目を表示</p>
      <div class="plan-list clearfix">





<?php
$so_du_lieu=10;
    $tv="select count(*) from san_pham";
    $tv_1= mysql_query($tv);
    $tv_2=mysql_fetch_array($tv_1);
    $so_trang=ceil($tv_2[0]/$so_du_lieu);

    if(!isset($_GET['trang']))
    {
      $vtbd=0;
    }
    else{
      $vtbd=($_GET['trang']-1)*$so_du_lieu;
    }
$tv="select id, hinh_anh, tour_name,plan_id,noi_dung,M_PLACE_to_place_id,div_2,fee_min,fee_max,date_txt,number_min from san_pham order by id desc limit $vtbd,$so_du_lieu";
$tv_1= mysql_query($tv);
echo "<table>";
  echo "<tr>";
  while ($tv_2=mysql_fetch_array($tv_1))
    {
      $link_anh="../images/tours/".$tv_2['hinh_anh'];
      $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
      echo "<article>";
            echo "<div class='plan-list-in pc-none'>";
            //echo "<img src="images/home/img01.jpg" alt="成田国際空港～東京23区東部エリア 送迎プラン">";
            //echo '<img src="../images/tours/t2_1.jpg">';
            echo "<img src='$link_anh'>";
            echo "</div>";
            echo "<h3 class='plan-list-ttl'>";
            echo "<span class='plan-num pc-none'>";
            echo $tv_2['plan_id'];
            echo "</span>";
            echo $tv_2['tour_name'];
            echo "</h3>";
            echo "<div class='clearfix'>";
              echo "<figure class='plan-list-in left sp-none'>";
        
              //echo "<img src="images/home/img01.jpg" alt="成田国際空港～東京23区東部エリア 送迎プラン">";
              //echo '<img src="../images/tours/t2_1.jpg">';
              echo "<img src='$link_anh'>";
              echo "</figure>";
              echo "<div class='plan-list-in right'>";
                echo "<div class='plan-list-in-text'>";
                  echo "<p class='plan-num sp-none'>";
                  echo $tv_2['plan_id'];
                  echo "</p>";
                  echo "<p>";
                  echo $tv_2['noi_dung'];
                  echo "</p>";

                   echo "<div class='clearfix'>";
                    echo "<ul class='plan-list-flag'>";
                      echo "<li>".$tv_2['M_PLACE_to_place_id']."</li>";
                      echo "<li>".$tv_2['div_2']."</li>";
                      echo "<li>".$tv_2['fee_min']."～".$tv_2['fee_max']."円 / 1台</li>";
                    echo "</ul>";
                    echo "<dl class='plan-list-caut clearfix'>";
                      echo "<dt>実施期間</dt>";
                      echo "<dd>".$tv_2['date_txt']."</dd>";
                      echo "<dt>最少催行人数</dt>";
                      echo "<dd>".$tv_2['number_min']."名様</dd>";
                    echo "</dl>";
                  echo "</div>";
                echo "</div>";
                /*<a href="<?php bloginfo('url'); ?>/pickup-taxi" class="plan-list-more">プラン詳細を見る</a>*/
                echo "<a href='http://localhost/airport-tourisum/pickup-taxi/' class='plan-list-more'>プラン詳細を見る</a>";   
                // day la dia chi tuyet doi, nho thay doi khi dua len server               
              echo "</div>";
            echo "</div>";
        echo "</article>";
}
  echo "</tr>";
  // phan trang. code gioi han khi nguoi dung nhap so trang ko dung de lam sau
  // gioi han so trang hien thi se lam sau
  echo "<tr>";
    echo "<div class='phan_trang' align='center'>";
      if(isset($_GET['trang']) && $_GET['trang'] !=1)
      {
        $prevPage= $_GET['trang'] - 1;
        $link="?thamso=xuat_plan&trang=".$prevPage;
        echo "<a class='prev page-numbers' href='$link'>«PREV</a>";
      }
      for($i=1;$i<=$so_trang;$i++)
      {
        if(isset($_GET['trang'])&&$_GET['trang']==$i)
        {
          //$active = "active";
          $active="page-numbers current";
        }
        else{
          $active= "";
        }
        $link="?thamso=xuat_plan&trang=".$i;
        echo "<a class='page-numbers ".$active."' href='$link'>"; // mot tag co the co nhieu thuoc tinh class (noi chuoi, cong don cac thuoc tinh)
        echo $i; echo " ";
        echo "</a>";
      }
       if(isset($_GET['trang']) && $_GET['trang'] <$so_trang)
      {
          $nextPage= $_GET['trang'] + 1;
          $link="?thamso=xuat_plan&trang=".$nextPage;
          echo "<a class='next page-numbers' href='$link'>»NEXT</a>";
      }
    echo "</div>";
  echo "</tr>";
echo "</table>";
?>

        
</div>
      
      <!-- <div class="pager">
        <a class="prev page-numbers" href="＃">«PREV</a>
        <a class='page-numbers' href='＃'>1</a>
        <span class='page-numbers current'>2</span>
        <a class='page-numbers' href='＃'>3</a>
        <a class="next page-numbers" href="<?php //bloginfo('url'); ?>">»NEXT</a>
      </div> -->
      
</section>
</div>
</main>
<?php get_footer(); ?>