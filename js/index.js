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
          <th class="cent" width="50px">詳細資訊</th>
          <th width="80px">名稱</th>
          <th width="100px">地址</th>
          <th class="cent" width="70px">汽車總車位數</th>
          <th class="cent" width="70px">機車總格位數</th>
          <th class="cent" width="70px">剩餘汽車位</th>
          <th width="90px">概況</th>
          <th width="80px">開放時間</th>
          <th width="100px">收費資訊</th>
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
    // console.log("aaaa:"+result[0].availableCar);
    if(result[0].availableCar<0){
      space="";
      spaceFull="";
    }else if(result[0].availableCar==0){
      space=`<span style="color:red;">${result[0].availableCar}</span>`;
      spaceFull="class='full'";
    }else{
      space=parseInt(result[0].availableCar);
      spaceFull="";
    }
  }else{
    space="";
    spaceFull="";
  }

  let totalCar=parseInt(dataPark[index].totalCar);
  let totalMotor=parseInt(dataPark[index].totalMotor);

  str=`
    <tr ${spaceFull}>
      <td class="cent"><a class="btn" href="detail.php?id=${dataPark[index].id}">查看</a></td>
      <td>${dataPark[index].name}</td>
      <td>${dataPark[index].address}</td>
      <td class="cent">${totalCar}</td>
      <td class="cent">${totalMotor}</td>
      <td class="cent">${space}</td>
      <td>${dataPark[index].summary}</td>
      <td>${dataPark[index].serviceTime}</td>
      <td>${dataPark[index].payEx}</td>
    </tr>
  `;
  return str;
}
