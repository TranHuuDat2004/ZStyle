<div class="main">
        <div class="header-main">
          <div class="header-left">
            <div class="header-bar">
              <i class="fa fa-angle-left icon-bar" aria-hidden="true"></i>
            </div>
            <form action="" class="header-form">
              <div class="header-input">
                <input type="text" placeholder="Tìm kiếm " />
                <div class="header-input-icon">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
              </div>
            </form>
          </div>
          <div class="header-right">
            <div class="header-bell">
              <i class="fa fa-bell" aria-hidden="true"></i>
            </div>
            <div class="header-auth">
              <div class="header-avatar">
                <img src="../layout/assets/images/avatar.png" alt="" />
              </div>
              <div class="header-name">Chào, ZStyle</div>
            </div>
          </div>
        </div>
        <div class="dashboard">
          <div class="container">
<div class="dashboard-content active" data-tab="1">
              <h2 class="heading-primary">Dashboard</h2>
              <div class="dashboard-title">Tổng quan</div>
              <div class="dashboard-list">
                <div class="dashboard-card">
                  <div class="dashboard-card-quantity">
                    <div class="dashboard-card-name">Khách truy cập</div>
                    <span><?=count(getusertable())?></span>
                  </div>
                  <div class="dashboard-card-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="52"
                      height="28"
                      viewBox="0 0 52 28"
                      fill="none">
                      <path
                        d="M51.6859 12.9354C46.7901 5.2201 37.0979 0 26 0C14.9021 0 5.20718 5.22375 0.314118 12.9361C0.1076 13.2661 0 13.6306 0 14.0004C0 14.3701 0.1076 14.7346 0.314118 15.0646C5.20989 22.7799 14.9021 28 26 28C37.0979 28 46.7928 22.7762 51.6859 15.0639C51.8924 14.7339 52 14.3694 52 13.9996C52 13.6299 51.8924 13.2654 51.6859 12.9354ZM26 24.5C23.4288 24.5 20.9154 23.8842 18.7776 22.7304C16.6397 21.5767 14.9735 19.9368 13.9895 18.0182C13.0056 16.0996 12.7482 13.9884 13.2498 11.9516C13.7514 9.91475 14.9895 8.04383 16.8076 6.57538C18.6257 5.10693 20.9421 4.1069 23.4638 3.70175C25.9856 3.29661 28.5995 3.50454 30.9749 4.29926C33.3503 5.09399 35.3807 6.4398 36.8091 8.16651C38.2376 9.89323 39 11.9233 39 14C39.0009 15.3791 38.6652 16.7447 38.0122 18.019C37.3591 19.2932 36.4016 20.451 35.1943 21.4261C33.9869 22.4013 32.5535 23.1747 30.9759 23.7021C29.3983 24.2295 27.7074 24.5007 26 24.5ZM26 7C25.2264 7.00873 24.4579 7.10169 23.7151 7.27635C24.3273 7.94841 24.6212 8.77544 24.5432 9.60746C24.4653 10.4395 24.0208 11.2214 23.2903 11.8114C22.5598 12.4014 21.5917 12.7604 20.5616 12.8234C19.5315 12.8863 18.5075 12.649 17.6755 12.1545C17.2017 13.5644 17.2872 15.0588 17.92 16.4274C18.5528 17.796 19.7011 18.9698 21.2032 19.7837C22.7053 20.5976 24.4855 21.0105 26.2934 20.9644C28.1012 20.9183 29.8457 20.4154 31.2812 19.5266C32.7166 18.6377 33.7709 17.4077 34.2955 16.0096C34.8201 14.6115 34.7887 13.1157 34.2056 11.7327C33.6226 10.3498 32.5173 9.14932 31.0453 8.30033C29.5733 7.45134 27.8088 6.99656 26 7Z"
                        fill="#46694F" />
                    </svg>
                  </div>
                </div>
                <div class="dashboard-card">
                  <div class="dashboard-card-quantity">
                    <div class="dashboard-card-name">Đơn hàng</div>
                    <span><?=count(getdonhangtable())?></span>
                  </div>
                  <div class="dashboard-card-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="30"
                      height="28"
                      viewBox="0 0 30 28"
                      fill="none">
                      <path
                        d="M23.5714 8.75V7C23.5714 3.14016 19.7263 0 15 0C10.2737 0 6.42857 3.14016 6.42857 7V8.75H0V23.625C0 26.0413 2.39846 28 5.35714 28H24.6429C27.6015 28 30 26.0413 30 23.625V8.75H23.5714ZM10.7143 7C10.7143 5.07008 12.6368 3.5 15 3.5C17.3632 3.5 19.2857 5.07008 19.2857 7V8.75H10.7143V7ZM21.4286 13.5625C20.541 13.5625 19.8214 12.9749 19.8214 12.25C19.8214 11.5251 20.541 10.9375 21.4286 10.9375C22.3162 10.9375 23.0357 11.5251 23.0357 12.25C23.0357 12.9749 22.3162 13.5625 21.4286 13.5625ZM8.57143 13.5625C7.68382 13.5625 6.96429 12.9749 6.96429 12.25C6.96429 11.5251 7.68382 10.9375 8.57143 10.9375C9.45904 10.9375 10.1786 11.5251 10.1786 12.25C10.1786 12.9749 9.45904 13.5625 8.57143 13.5625Z"
                        fill="#46694F" />
                    </svg>
                  </div>
                </div>
                <div class="dashboard-card">
                  <div class="dashboard-card-quantity">
                    <div class="dashboard-card-name">Sản phẩm</div>
                    <span><?=count(getproduct())?></span>
                  </div>
                  <div class="dashboard-card-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="44"
                      height="28"
                      viewBox="0 0 44 28"
                      fill="none">
                      <path
                        d="M43.3934 5.27734L30.0095 0C28.6278 1.52031 25.5689 2.58125 22.0012 2.58125C18.4336 2.58125 15.3746 1.52031 13.9929 0L0.60906 5.27734C0.0660074 5.49609 -0.153964 6.02109 0.114126 6.45312L4.04611 12.7148C4.32107 13.1469 4.98098 13.3219 5.52403 13.1086L9.41477 11.5938C10.1434 11.3094 10.9958 11.7305 10.9958 12.3812V26.25C10.9958 27.218 11.9788 28 13.1955 28H30.7932C32.0099 28 32.9929 27.218 32.9929 26.25V12.3758C32.9929 11.7305 33.8453 11.3039 34.5739 11.5883L38.4647 13.1031C39.0077 13.3219 39.6676 13.1469 39.9426 12.7094L43.8815 6.45312C44.1564 6.02109 43.9365 5.49062 43.3934 5.27734Z"
                        fill="#46694F" />
                    </svg>
                  </div>
                </div>
                <div class="dashboard-card">
                  <div class="dashboard-card-quantity">
                    <div class="dashboard-card-name">Doanh thu</div>
                    <span><?=number_format(tongdoanhthu()[0]['tongdoanhthu'],0,'.',',')?></span>
                  </div>
                  <div class="dashboard-card-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="31"
                      height="34"
                      viewBox="0 0 31 34"
                      fill="none">
                      <path
                        d="M0 26.8858V29.7183C0 32.0599 5.20703 33.9638 11.625 33.9638C18.043 33.9638 23.25 32.0599 23.25 29.7183V26.8858C20.7494 28.8161 16.1781 29.7183 11.625 29.7183C7.07188 29.7183 2.50059 28.8161 0 26.8858ZM19.375 8.49094C25.793 8.49094 31 6.58711 31 4.24547C31 1.90383 25.793 0 19.375 0C12.957 0 7.75 1.90383 7.75 4.24547C7.75 6.58711 12.957 8.49094 19.375 8.49094ZM0 19.9272V23.3501C0 25.6917 5.20703 27.5956 11.625 27.5956C18.043 27.5956 23.25 25.6917 23.25 23.3501V19.9272C20.7494 22.1826 16.1721 23.3501 11.625 23.3501C7.07793 23.3501 2.50059 22.1826 0 19.9272ZM25.1875 20.6569C28.6568 19.9205 31 18.554 31 16.9819V14.1494C29.5953 15.2373 27.5307 15.9802 25.1875 16.4379V20.6569ZM11.625 10.6137C5.20703 10.6137 0 12.9885 0 15.9205C0 18.8525 5.20703 21.2274 11.625 21.2274C18.043 21.2274 23.25 18.8525 23.25 15.9205C23.25 12.9885 18.043 10.6137 11.625 10.6137ZM24.9029 14.3484C28.5357 13.6319 31 12.2256 31 10.6137V7.78115C28.8506 9.44618 25.1572 10.3417 21.2701 10.554C23.0562 11.5026 24.3701 12.7762 24.9029 14.3484Z"
                        fill="#46694F" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="statistical-main">
                <div class="statistical-left">
                  <h2 class="title">Tỉ lệ sản phẩm danh mục</h2>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                  <canvas id="myChart" style="width:100%;max-width:450px; margin-bottom:50px"></canvas>

                  <script>
                  <?php
                    $catalog=getcatalog();
                    $i=0;
                    $htmlx='';
                    $htmly='';
                    $htmlbar='';
                    foreach ($catalog as $item) {
                        $i++;
                        if($i==1){
                          $htmlx.='const xValues = ["'.$item['name'].'",';
                          $htmly.='const yValues = ['.countproduct($item['id']).',';
                        }else{
                          if($i==count($catalog)){
                            $htmlx.='"'.$item['name'].'"];';
                            $htmly.=countproduct($item['id']).'];';
                          }else{
                            $htmlx.=' "'.$item['name'].'",';
                            $htmly.=countproduct($item['id']).',';
                          }
                        }
                    }
                    echo $htmlx;
                    echo $htmly;
                  ?>
                  const barColors = [
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#1e7145"
                  ];
                  new Chart("myChart", {
                    type: "doughnut",
                    data: {
                      labels: xValues,
                      datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                      }]
                    },
                    options: {
                      title: {
                        display: true,
                        text: ""
                      }
                    }
                  });
                  </script>
                </div>
                <div class="statistical-right">
                  <h2 style="margin-bottom:0" class="title">Lượt xem</h2>
                  <script src="https://www.gstatic.com/charts/loader.js"></script>

                  <div id="myChart1" style="width:100%; max-width:600px; height:300px;"></div>

                  <script>
                  google.charts.load('current', {'packages':['corechart']});
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {

                  // Set Data
                  const data = google.visualization.arrayToDataTable([
  
                    ['Contry', 'view'],
                    <?php
                        $luotview=luotview();
                        $i=0;
                        foreach ($luotview as $item) {
                          $i++;
                          if($i==count($luotview)){
                            echo "['".$item['name_catalog']."',".$item['tongview']."]";
                          }else{
                            echo "['".$item['name_catalog']."',".$item['tongview']."], ";
                          }
                        }
                      ?>
                  ]);

                  // Set Options
                  const options = {
                    title:''
                  };

                  // Draw
                  const chart = new google.visualization.BarChart(document.getElementById('myChart1'));
                  chart.draw(data, options);

                  }
                  </script>



                    
                </div>
              </div>
              <section class="dashboard-list-pro">
                <div class="container">
                  <div class="">
                    <h2 class="title mt-0">Doanh thu thống kê theo tháng (triệu đồng)</h2>
                    
                   
                    <canvas id="myChart2" style="width:100%;"></canvas>

                    <script>
                    const xValues2 = ["Tháng 1", "Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"];
                    <?php
                      $doanhthu=doanhthu();
                      $i=0;
                      $htmly='';
                      foreach ($doanhthu as $item) {
                          $i++;
                          if($i==1){
                            $htmly.='const yValues2 = ['.($item['doanhthu_thang']/1000000).',';
                          }else{
                            if($i==count($doanhthu)){
                              $htmly.=($item['doanhthu_thang']/1000000).'];';
                            }else{
                              $htmly.=($item['doanhthu_thang']/1000000).',';
                            }
                          }
                      }
                      echo $htmly;
                    ?>
                    const barColors2 = ["rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)", "rgba(0,0,255)"];

                    new Chart("myChart2", {
                      type: "bar",
                      data: {
                        labels: xValues2,
                        datasets: [{
                          backgroundColor: barColors2,
                          data: yValues2
                        }]
                      },
                      options: {
                        legend: {display: false},
                        title: {
                          display: true,
                          text: ""
                        }
                      }
                    });
                    </script>
                    
            </div>




            