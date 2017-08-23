@extends('isnaya/template/main')

@section('title','Formatos')

@section('contenido') 
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
             <div class="col-md-6" style="padding-right:50px;">
                  <div id="piechart_3d" style="width: 500px; height: 500px;"></div>

            </div>
            <div class="col-md-3">
                  <div class="radio">
                    <label><input id="btn-1" type="radio" name="optradio">Listar por Clientes</label>
                  </div>

                  <div class="row">
                    <div id="listar-reporte">
                      
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                  <div class="radio">
                    <label><input id="btn-2" type="radio" name="optradio">Listar por Fecha y cliente</label>
                  </div>

                  <div class="row">
                    <div id="listar-fecha">
                      
                    </div>
                  </div>
            </div>

      </div>

  </div>
          @section('script')
               <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
           @foreach($pVendidos as $productos)
            
           ['{{date('F', strtotime($productos->fecha))}},{{$productos->descripcion}}',{{$productos->total}}],
           
           
            
          @endforeach
          ]);

        var options = {
          title: 'Productos mas vendidos por mes',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
            <script>
              var btn1 = $("#btn-1");
              btn1.on("click",function(){
                  $(document).ready(function(){
                      listarReporte();
                  });                
                  var listarReporte = function(){
                    $.ajax({
                      type:'get',
                      url:'listar-reportes',
                      success: function(data){
                        $('#listar-reporte').empty().html(data);
                      }

                    });
                  }
              });

                var btn2 = $("#btn-2");
              btn2.on("click",function(){
                  $(document).ready(function(){
                      listarReporteFecha();
                  });
                  
                  var listarReporteFecha = function(){
                    $.ajax({
                      type:'get',
                      url:'reportes-fecha',
                      success: function(data){
                        $('#listar-fecha').empty().html(data);
                      }

                    });
                  }
              });
            </script>
          @endsection
@endsection
          