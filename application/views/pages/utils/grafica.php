<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Flot Charts</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
  <!-- overlayScrollbars -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>libs/lte/css/adminlte.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- Bar chart -->
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Usuarios con mas colaboraciones
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>

                  </div>
                </div>
                <div class="card-body">
                  <div id="bar-chart" style="height: 100%;">
                    <canvas id="graphCanvas"></canvas>
                  </div>
                </div>
                <!-- /.card-body-->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url(); ?>libs/js/bootstrap.js"></script>
  <!-- overlayScrollbars -->
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>libs/lte/js/adminlte.js"></script>
  <script src="<?= base_url(); ?>libs/graficas/chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script>
  $(function () {
    var bar_data = {
      data : [[0,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[0,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
   
  })
  
</script> -->
  <script>
    $(document).ready(function() {
      showGraph();
    });


    function showGraph() {
      {
        $.post("http://localhost/gestor/grafica/top",
          function(data) {
            var name = [];
            var marks = [];
            var obj = JSON.parse(data);
            for (var i in obj) {
              name.push(obj[i].username);
              marks.push(obj[i].cantidad);
            }
            console.log(data)
            var chartdata = {
              labels: name,
              datasets: [{
                label: 'Archivos compartidos',
                backgroundColor: '#49e2ff',
                borderColor: '#46d5f1',
                hoverBackgroundColor: '#CCCCCC',
                hoverBorderColor: '#666666',
                data: marks,
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
              }]
            };

            var graphTarget = $("#graphCanvas");

            var barGraph = new Chart(graphTarget, {
              type: 'horizontalBar',
              data: chartdata,
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }],
                  xAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
            });
          });
      }
    }
  </script>
</body>

</html>