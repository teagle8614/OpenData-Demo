let dataPark;
let dataSpacing;
let dataArea;


// 行政區資料
$.getJSON("json/CityCountyData.json")
.done(e=>{  // 成功
  dataArea=e;

  // 停車場資料
  $.getJSON("api/get_data.php")
  .done(e=>{  // 成功
    dataPark=e;

    // 停車場即時空位資料
    $.getJSON("api/get_data2.php")
    .done(e=>{  // 成功
      dataSpacing=e;

      let areaArray=new Array();
      let countParkArray=new Array();
      let backgroundColorArray=new Array();
      let borderColorArray=new Array();

      for(let i=0;i<dataArea[2].AreaList.length;i++){
        areaArray.push(dataArea[2].AreaList[i].AreaName);
        // console.log(areaArray[1]);
      }


      for(let i=0;i<areaArray.length;i++){
        let areaIndex=areaArray[i];
        let result = dataPark.filter(data => data.area === areaIndex);
        countParkArray.push(result.length);
        // console.log(countParkArray);

        let num=i%5;
        switch(num){
          case 1:
            backgroundColorArray.push('rgba(255, 99, 132, 0.2)');
            borderColorArray.push('rgba(255, 99, 132, 1)');
            break;
          case 2:
            backgroundColorArray.push('rgba(54, 162, 235, 0.2)');
            borderColorArray.push('rgba(54, 162, 235, 1)');
            break;
          case 3:
            backgroundColorArray.push('rgba(255, 206, 86, 0.2)');
            borderColorArray.push('rgba(255, 206, 86, 1)');
            break;
          case 4:
            backgroundColorArray.push('rgba(75, 192, 192, 0.2)');
            borderColorArray.push('rgba(75, 192, 192, 1)');
            break;
          case 0:
            backgroundColorArray.push('rgba(153, 102, 255, 0.2)');
            borderColorArray.push('rgba(153, 102, 255, 1)');
            break;
        }
      }


      let ctx = document.getElementById('myChart').getContext('2d');
      let myChart = new Chart(ctx, {
          type: 'horizontalBar',
          data: {
              labels: areaArray,
              datasets: [{
                  label: '停車場總數',
                  data: countParkArray,
                  backgroundColor: backgroundColorArray,
                  borderColor: borderColorArray,
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });


    }).fail(e=>{  console.log("It's fail!",e); });
  }).fail(e=>{ console.log("It's fail!",e); });
}).fail(e=>{  console.log("It's fail!",e); });
