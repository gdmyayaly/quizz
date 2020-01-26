$(function() {
    "use strict";
    // ============================================================== 
    // Gender Js
    // ============================================================== 

    Morris.Donut({
        element: 'gender_donut',
        data: [
            { value: 60, label: 'femme' },
            { value: 40, label: 'homme'}

        ],

        labelColor: 'black',
        colors: [
            'grey',
            '#FF4080',

        ],
        options:{
            labels: {
                fontSize: '25px',
            }
        },

        formatter: function(x) { return x + "%" }
    });

    // ============================================================== 
    //  chart bar horizontal
    // ============================================================== 
    var ctx = document.getElementById("chartjs_bar_horizontal").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',

        data: {
            labels: ["Senegal", "Afrique", "Europe", "Amériques", "Asie", "Océanie"],
            datasets: [{
                data: [2000, 1850, 1500, 1600, 800, 600,],
                backgroundColor: [
                    "#FF4080",
                    "grey",
                    "grey",
                    "grey",
                    "grey",
                    "grey",
                ],
            }]
        },
        options: {
            responsive: true,
            hover: false,
            legend: {
                display: false,
                position: 'bottom',

                labels: {
                    fontColor: '#71748d',
                    fontFamily: 'Circular Std Book',
                    fontSize: 14,
                }
            },
            scales: {

                legend: {
                    display: false

                },
                yAxes: [{
                    gridLines: {
                        drawOnChartArea: false
                    },
                    ticks: {
                        fontSize: 14,
                        fontFamily: 'Circular Std Book',
                        fontColor: '#71748d',
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawOnChartArea: false
                    },
                    ticks: {
                        fontSize: 14,
                        fontFamily: 'Circular Std Book',
                        fontColor: '#71748d',
                    }
                }]



            }
        }
    });



});