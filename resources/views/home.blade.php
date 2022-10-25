 @extends('layouts.app')
@section('title',' Carte de commerçant')
@section('content')



        <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            
            <div class="search">
         </div>
        </div>
        </div>
        </div>
<br>
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-info">
        <div class="inner">
        <h3> {{ $count }}</h3>
        <p>Dossiers</p>
        </div>
        <div class="icon">
        <i class="ion ion-folder"></i>
        </div>
        <a href="{{ route('dossiers.index') }}" class="small-box-footer">Plus d'informations  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-success">
        <div class="inner">
        <h3>{{ $countd }}</h3>
        <p>Demandes Déposées</p>
        </div>
        <div class="icon">
        <i class="ion ion-document
        "></i>
        </div>
        <a href="{{ route('demandes.index') }}" class="small-box-footer">Plus d'informations  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-secondary">
        <div class="inner">
        <h3>{{ $countu }}</h3>
        <p>Agents</p>
        </div>
        <div class="icon">
        <i class="ion ion-person"></i>
        </div>
        <a href="{{ route('users.index') }}" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <div class="col-lg-3 col-6">    
        <div class="small-box bg-danger">
        <div class="inner">
        <h3>4</h3>
        <p>Statistiques</p>
        </div>
        <div class="icon">
        <i class="ion ion-pie-graph"></i>
        </div>
        <a href="" class="small-box-footer">Plus d'informations  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        </div>
        <br>
        
<br>
        
                      
          <div class="card card-primary">
          <div class="card-header">
              
          <h3 class="card-title"><div class="text-center"> &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Graphique</div> </h3>
          <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
          </button>
          </div>
          </div>
          <div class="card-body">
             
          <div class="chart">
            <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"> </canvas> </div>          
          </div>  
          </div>      
          </div>


         
           
            
          
          
          



   <script src="dist/js/pages/dashboard3.js"></script>
   <script src="dist/js/adminlte.js"></script>
   

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Jan', 'Fev', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil', 'Aout', 'Sept', 'Oct', 'Nov', 'Dec'],
          datasets: [{
              label: 'Nb des dossiers par mois',
              data: [12, 19, 3, 5, 2, 3, 4, 7, 10, 18, 11, 14],
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
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
  </script>
  <script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
  


 
    
</section> 

@endsection


