// 讓移入的該區域顯示在最上層
d3.selectAll("path").on("mouseover", function(){
  d3.select(this).raise();
});

let dataPark;
let dataSpacing;
let dataArea;



// 行政區資料
$.getJSON("json/CityCountyData.json")
.done(e=>{  // 成功
  dataArea=e;

  let option="";
  for(let i=0;i<dataArea[2].AreaList.length;i++){
    option+=`<option value="${dataArea[2].AreaList[i].AreaName}">${dataArea[2].AreaList[i].AreaName}</option>`;
  }
  $("#selectArea").append(option);


  // 停車場資料
  $.getJSON("api/get_data.php")
  .done(e=>{  // 成功
    dataPark=e;

    // 停車場即時空位資料
    $.getJSON("api/get_data2.php")
    .done(e=>{  // 成功
      dataSpacing=e;
      printTable("all");



      // 滑鼠移入地圖區域顯示提示視窗
      $("#map path").hover(function() {
        let mapArea=$(this).attr("data-area")
        let count=0;

        for(let i=0;i<dataPark.length;i++){
          if(dataPark[i].area==mapArea){count++;}
        }

        let content=`
          <p>${mapArea}</p>
          <p>停車場數量:${count}</p>
        `;

        $("#areaInfo").html(content).css({
          "top": $(this).offset().top - 50,
          "left": $(this).offset().left +100
        })
        $("#areaInfo").show()
      });


      // 滑鼠移入地圖區域隱藏提示視窗
      $("#map path").mouseout(function() {
          $("#areaInfo").hide()
      });


      // 點擊區域可快速搜尋
      $("#map path").click(function(){
        let mapArea=$(this).attr("data-area");
        $("#selectArea").val(mapArea);
        printTable(mapArea);

        $('html, body').animate({
          scrollTop: $("#tableBox").offset().top
        }, 1000);
      });



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


// 選擇地區改變table
$("#selectArea").change(function(){
  let selectArea=$(this).val();
  printTable(selectArea);
});

// 顯示table
function printTable(area){

  let table=`
    <table id="parkTable" class="table table-striped">
      <thead>
        <tr>
          <th width="55px">編號</th>
          <th>名稱</th>
          <th>地址</th>
          <th width="90px">概況</th>
          <th>收費資訊</th>
          <th>開放時間</th>
          <th width="90px">汽車總車位數</th>
          <th width="90px">機車總格位數</th>
          <th width="90px">剩餘空位(汽車)</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  `;

  $("#tableBox").html(table);
  let content="";
 
  if(area=="all"){
    for(let i=0;i<dataPark.length;i++){
      content+=createTable(i);
    }
  }else{
    for(let i=0;i<dataPark.length;i++){
      if(dataPark[i].area==area){
        content+=createTable(i);
      }
    }
  }

  $("#parkTable tbody").html(content);
  $('#parkTable').DataTable({
    "scrollX": true
  });
}


// 產生table
function createTable(index){
  let parkId=dataPark[index].id;
  let str="";
  let space;
  let spaceFull=false;

  // 汽車空位資料
  let result = dataSpacing.filter(data => data.id === parkId);
  if(result!=""){
    // console.log(result[0].availableCar);
    if(result[0].availableCar<0){
      space="無資料";
      spaceFull="";
    }else if(result[0].availableCar==0){
      space=`<span style="color:red;">${result[0].availableCar}</span>`;
      spaceFull="class='full'";
    }else{
      space=result[0].availableCar;
      spaceFull="";
    }
  }else{
    space="無資料";
    spaceFull="";
  }

  str=`
    <tr ${spaceFull}>
      <td>${dataPark[index].id}</td>
      <td>${dataPark[index].name}</td>+
      <td>${dataPark[index].address}</td>
      <td>${dataPark[index].summary}</td>
      <td>${dataPark[index].payEx}</td>
      <td>${dataPark[index].serviceTime}</td>
      <td>${dataPark[index].totalCar}</td>
      <td>${dataPark[index].totalMotor}</td>
      <td>${space}</td>
    </tr>
  `;
  return str;
}



// WOW.js
var wow = new WOW(
  {
    boxClass: 'wow', // 要套用WOW.js縮需要的動畫class(預設是wow) 
    animateClass: 'animated', // 要"動起來"的動畫(預設是animated, 因此如果你有其他動畫library要使用也可以在這裡調整) 
    offset: 0, // 距離顯示多遠開始顯示動畫 (預設是0, 因此捲動到顯示時才出現動畫)
    mobile: true, // 手機上是否要套用動畫 (預設是true) 
    live: true, // 非同步產生的內容是否也要套用 (預設是true, 非常適合搭配SPA)
    callback: function(box) { // 當每個要開始時, 呼叫這裡面的內容, 參數是要開始進行動畫特效的element DOM
    },
    scrollContainer: null   // 可以設定成只套用在某個container中捲動才呈現, 不設定就是整個視窗
  }
);
wow.init();

$(".btnBackUP").click(function() {
  $("html,body").animate({scrollTop:0}, 500);
});
$(".navbar-brand").click(function() {
  
  $("html,body").animate({scrollTop:0}, 500);
});

$("#nav_search").click(function() {
  $("#mapSession").show();
  $("#searachSession").show();
  $("#charSession").hide();
});
$("#nav_chart").click(function() {
  $("#mapSession").hide();
  $("#searachSession").hide();
  $("#charSession").show();
});
