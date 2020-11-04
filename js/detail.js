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
    // console.log(dataPark);

    // 停車場即時空位資料
    $.getJSON("api/get_data2.php")
    .done(e=>{  // 成功
      dataSpacing=e;
      // console.log(dataSpacing);


      let index="";
      for(let i=0;i<dataPark.length;i++){
        if(dataPark[i].id==pId){
          index=i;
        }
      }
      // console.log("index:"+index);
      // console.log(dataPark[index].name);

      // 汽車空位資料
      let result = dataSpacing.filter(data => data.id === pId);
      if(result!=""){
        if(result[0].availableCar<0){
          space="無即時資料";
        }else{
          space=result[0].availableCar;
        }
      }else{
        space="無即時資料";
      }


      $("#parkName").html(dataPark[index].name);
      let str=`
          <tr><td>編號</td><td>${dataPark[index].id}</td></tr>
          <tr><td>概況</td><td>${dataPark[index].summary}</td></tr>
          <tr><td>地址</td><td>${dataPark[index].address}</td></tr>
          <tr><td>電話</td><td>${dataPark[index].tel}</td></tr>
          <tr><td>收費資訊</td><td>${dataPark[index].payEx}</td></tr>
          <tr><td>開放時間</td><td>${dataPark[index].serviceTime}</td></tr>
          <tr><td>汽車總車位數</td><td>${dataPark[index].totalCar}</td></tr>
          <tr><td>機車總格位數</td><td>${dataPark[index].totalMotor}</td></tr>
          <tr><td>剩餘汽車位</td><td>${space}</td></tr>
      `;

      $("#detailTable").html(str);

      let mapIframe=`
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=https://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=${dataPark[index].address}&z=16&output=embed></iframe>
      `;
      $("#googleMap").html(mapIframe);

      

    }).fail(e=>{  console.log("It's fail!",e); });
  }).fail(e=>{ console.log("It's fail!",e); });
}).fail(e=>{  console.log("It's fail!",e); });