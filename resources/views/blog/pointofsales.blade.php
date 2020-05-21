<!DOCTYPE html>
    <head>
     <title> Inpedia Hotel </title>
    </head>

  </html>
<body>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .topnav a.active {
          background-color: #4CAF50;
          color: white;
        }
        
        </style>
        </head>
        
    <div class="topnav">
        <a href="pointofsales">Dashboard</a>
        <a href="roomlist">product</a>
        <a href="reservasi">sales</a>
        <a href="report">report</a>
        <a href="/datatamu/tambah">transaction</a>
        <a href="operatornonlte">Back</a>


        
        
    </div>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 70px
          margin: auto;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active, .dot:hover {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }
        </style>
        </head>
        <body>
        
        <div class="slideshow-container">
        
        <div class="mySlides fade">
          <img src="POS.png" style="width:1360px; height:442px">
          <div class="text">Caption Text</div>
        </div>
        
        <div class="mySlides fade">
          <img src="karyawan.png" style="width:1360px; height:442px">
          <div class="text">Caption Two</div>
        </div>
        
        <div class="mySlides fade">
          <img src="craust4.jpg" style="width:1360px; height:442px">
          <div class="text">Caption Three</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
        
        </body>
    
<br>
<br>
<br>
<div id="chartPembayaran"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chartPembayaran', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Transaction Chart'
    },
    subtitle: {
        text: 'Inpedia Hotel Indonesia'
    },
    xAxis: {
        categories: [
            '2000',
            '2020',
            '2122',
            '3000'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Transaction'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: '2000',
        data: [7]

    }, {
        name: '2020',
        data: [1]

    },{
        name: '2122',
        data: [1]

    },
    {
        name: '3000',
        data: [1]

    }]
});
</script>
<p> &copy; inpediahotel.com </p>
</body>

</html>