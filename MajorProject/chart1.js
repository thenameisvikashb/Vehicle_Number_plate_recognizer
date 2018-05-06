var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["JAN","FAB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"],
        datasets: [{
            label: 'Status of Traffic control',
            data: [210,150,125,135,120,150,250,320,310,120,180,110],
            backgroundColor: [                
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(255, 159, 64, 0.7)',
                'rgb(153, 219, 125,0.7)',
                'rgb(216, 142, 110,0.7)',
                'rgb(46, 219, 181,0.7)',
                'rgb(30, 44, 153,0.7)',
                'rgb(120, 9, 137)',
                'rgb(199, 224, 74,0.7)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgb(153, 219, 125,0.7)',
                'rgb(216, 142, 110,0.7)',
                'rgb(46, 219, 181,0.7)',
                'rgb(30, 44, 153,0.7)',
                'rgb(120, 9, 137,0.7)',
                'rgb(199, 224, 74,0.7)',
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
            text:'Issue type',
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