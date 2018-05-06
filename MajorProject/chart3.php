<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <canvas id="myChart" width="100"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [ "Unpaid challans","Paid challans"],
        datasets: [{
            label: '# of Votes',
            data: [130,100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1,
            borderColor:'#fff',
            hoverBorderWidth:2,
            hoverBorderColor:'#ddd',            
        }]
    },
    options:{
        title:{
            display:true,
            text:'Issue status',
            fontSize:30,
            position:'top',
        },
        legend:{
            position:'right',
        }, 
        layout:{
            padding:{
                left:0,
                right:0,
                top:0,
                bottom:0,
            }
        }
    }
});
</script>
        </div>
    </body>
</html>
