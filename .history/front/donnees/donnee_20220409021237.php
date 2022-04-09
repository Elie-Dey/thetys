
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html lang='en' class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/rozklad/pen/qVObdP" />


<style class="cp-pen-styles">body {
  background-color: #f3f5f7;
  font-family: 'Helvetica Neue', Arial, sans-serif;
}

.card {
  background-color: #fff;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 300px;
  height: 375px;
  border-radius: 10px;
  overflow: hidden;
}

.card .about {
  height: 150px;
  padding: 20px;
  box-sizing: border-box;
}

.card .about h3,
.card .about .lead {
  font-weight: 300;
  margin: 0;
}

.card .about h3 {
  font-size: 24px;
}

.card .about .lead {
  color: #aaa;
}

.tooltip-placeholder {
  background-color: #fff;
  border-radius: 4px;
  font-family: monospace;
  color: #aaa;
  font-size: 10px;
  position: fixed;
  padding: 4px 0;
  display: none;
  z-index: 2;
}

</style></head><body>
<div class="card">
  <!-- Custom information -->
  <div class="about">
    <h3>Chart.js</h3>
    <p class="lead">Radar chart, shadows, custom hover</p>
    
    <!-- Tooltip placeholder -->
    <div id="tooltip" class="tooltip-placeholder"></div>
  </div>
  
  <!-- Canvas for Chart.js -->
  <canvas id="canvas" width="300" height="200"></canvas>
</div>

<div class="card">
  <!-- Custom information -->
  <div class="about">
    <h3>Chart.js</h3>
    <p class="lead">Radar chart, shadows, custom hover</p>
    
    <!-- Tooltip placeholder -->
    <div id="tooltip" class="tooltip-placeholder"></div>
  </div>
  
  <!-- Canvas for Chart.js -->
  <canvas id="canvas" width="300" height="200"></canvas>
</div>
<div class="card">
  <!-- Custom information -->
  <div class="about">
    <h3>Chart.js</h3>
    <p class="lead">Radar chart, shadows, custom hover</p>
    
    <!-- Tooltip placeholder -->
    <div id="tooltip" class="tooltip-placeholder"></div>
  </div>
  
  <!-- Canvas for Chart.js -->
  <canvas id="canvas" width="300" height="200"></canvas>
</div>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js'></script>
<script >var canvas = document.getElementById("canvas");

var gradientBlue = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
gradientBlue.addColorStop(0, 'rgba(85, 85, 255, 0.9)');
gradientBlue.addColorStop(1, 'rgba(151, 135, 255, 0.8)');

var gradientHoverBlue = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
gradientHoverBlue.addColorStop(0, 'rgba(65, 65, 255, 1)');
gradientHoverBlue.addColorStop(1, 'rgba(131, 125, 255, 1)');

var gradientRed = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
gradientRed.addColorStop(0, 'rgba(255, 85, 184, 0.9)');
gradientRed.addColorStop(1, 'rgba(255, 135, 135, 0.8)');

var gradientHoverRed = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
gradientHoverRed.addColorStop(0, 'rgba(255, 65, 164, 1)');
gradientHoverRed.addColorStop(1, 'rgba(255, 115, 115, 1)');

var redArea = null;
var blueArea = null;

var shadowed = {
	beforeDatasetsDraw: function(chart, options) {
    chart.ctx.shadowColor = 'rgba(0, 0, 0, 0.25)';
    chart.ctx.shadowBlur = 40;
  },
  afterDatasetsDraw: function(chart, options) {
  	chart.ctx.shadowColor = 'rgba(0, 0, 0, 0)';
    chart.ctx.shadowBlur = 0;
  }
};

Chart.plugins.register({
  afterEvent: function(chart, e) {
 		// Hardcoded hover areas
    
    // Red chart
    chart.ctx.beginPath();
    chart.ctx.moveTo(91, 69);
    chart.ctx.lineTo(152, 80);
    chart.ctx.lineTo(192, 75);
    chart.ctx.lineTo(213, 138);
    chart.ctx.lineTo(148, 168);
    chart.ctx.lineTo(105, 126);
    chart.ctx.fill();
    chart.ctx.closePath();
    
    if (chart.ctx.isPointInPath(e.x, e.y)) {
    	var dataset = window.chart.data.datasets[0];
      dataset.backgroundColor = gradientHoverRed;
      window.chart.update();
      canvas.style.cursor = 'pointer';
    } else {
    	var dataset = window.chart.data.datasets[0];
      dataset.backgroundColor = gradientRed;
      window.chart.update();
      canvas.style.cursor = 'default';
    }
    
    // Blue chart
    chart.ctx.beginPath();
    chart.ctx.moveTo(85, 61);
    chart.ctx.lineTo(149, 66);
    chart.ctx.lineTo(224, 63);
    chart.ctx.lineTo(179, 112);
    chart.ctx.lineTo(152, 177);
    chart.ctx.lineTo(121, 117);
    chart.ctx.fill();
    chart.ctx.closePath();
    
    if (chart.ctx.isPointInPath(e.x, e.y)) {
    	var dataset = window.chart.data.datasets[1];
      dataset.backgroundColor = gradientHoverBlue;
      window.chart.update();
      canvas.style.cursor = 'pointer';
    } else {
    	var dataset = window.chart.data.datasets[1];
      dataset.backgroundColor = gradientBlue;
      window.chart.update();
      canvas.style.cursor = 'default';
    }
  }
});

window.chart = new Chart(document.getElementById("canvas"), {
    type: "radar",
    data: {
        labels: ["STA", "STR", "AGI", "VIT", "CHA", "INT"],
        datasets: [{
            label: "Donté Panlin",
            data: [25, 59, 90, 81, 60, 82],
            fill: true,
            backgroundColor: gradientRed,
            borderColor: 'transparent',
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointHoverBackgroundColor: "transparent",
            pointHoverBorderColor: "transparent",
            pointHitRadius: 50,
        }, {
            label: "Mireska Sunbreeze",
            data: [40, 100, 40, 90, 40, 90],
            fill: true,
            backgroundColor: gradientBlue,
            borderColor: "transparent",
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointHoverBackgroundColor: "transparent",
            pointHoverBorderColor: "transparent",
            pointHitRadius: 50,
        }]
    },
    options: {
    	legend: {
      	display: false,
      },
      tooltips: {
      	enabled: false,
        custom: function(tooltip) {
        		var tooltipEl = document.getElementById('tooltip');
          	if (tooltip.body) {
            	tooltipEl.style.display = 'block';
              if (tooltip.body[0].lines && tooltip.body[0].lines[0]) {
              	tooltipEl.innerHTML = tooltip.body[0].lines[0];
              }
            } else {
            	setTimeout(function() {
            		tooltipEl.style.display = 'none';
              }, 500);
            }
        },
      },
      gridLines: {
        display: false
      },
      scale: {
         ticks: {
         		maxTicksLimit: 1,
            display: false,
         }
      }
    },
    plugins: [shadowed]
});
//# sourceURL=pen.js
</script>
</body></html>