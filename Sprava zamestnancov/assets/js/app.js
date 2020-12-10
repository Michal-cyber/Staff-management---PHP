function Search() {
    let nameElement, Value;
    
    let input = document.getElementById('search'),
      filter = input.value,
      ul = document.getElementById('list'),
      li = ul.getElementsByTagName("li");
     
        for(let i = 0; i < li.length; i++) {
          nameElement = li[i].getElementsByTagName("strong")[0];
          Value = nameElement.textContent || nameElement.innerText;
          if(Value.indexOf(filter) > -1) { 
            li[i].style.display = "";
          } else {
            li[i].style.display ="none";    
          }
        }    
    }

window.onload = function() { 

      let dataPoints = [];
      
      const chart = new CanvasJS.Chart("chartContainer", { 
        title:{
          text: "Chart with ages of employees"
        },
        data: [{
          type: "line",
          indexLabel: "{y}",
          indexLabelPlacement: "inside",
          dataPoints: dataPoints
        }]
      });
      
      $.get("_inc/employees.xml", function (data) {
        data = $(data).find("employee");
        // from zero
        for(let i = 0; i < data.find("age").text().length; i++) {
          for(let j = 1; j < data.find("age").text().length; j++) {
            if( parseInt( $(data[j]).find("age").text() ) < parseInt( $(data[j - 1]).find("age").text() ) ) {
              let tmp = data[j];
              data[j] = data[j - 1];
              data[j - 1] = tmp;   
            } 
          }
        }

        data.each(function () {
          let $dataPoint = jQuery(this);
          let label = $dataPoint.find("first_name").text() + " " + $dataPoint.find("last_name").text();
          let y = $dataPoint.find("age").text();         
          dataPoints.push({ label: label, y: parseFloat(y) });
        });
        chart.render();

      });   
  } 

 