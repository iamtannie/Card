<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardViewTyl</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .card {
      background-color :rgb(251, 255, 255);
      box-shadow: 0 4px 8px 0 rgba(99, 96, 255, 0.2);
      width: 30%;
      float: left;
    }
    .card1 {
      background-color :rgb(251, 255, 255);
      box-shadow: 0 4px 8px 0 rgba(99, 96, 255, 0.2);
      width: 30%;
      float: right;
    }
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(156, 171, 255, 0.2);
    }
    .card1:hover {
      box-shadow: 0 8px 16px 0 rgba(156, 171, 255, 0.2);
    }
    .container {
      padding: 2px 16px;
    }
    span{
      padding-left: 20px;
    }
    h3{
      padding-left: 20px;
      padding-top: 15px;
    }
    #lat{
      margin-left: 20px;
      margin-top: 15px;
    }
    </style>

<body>
   
  <div class="container">  
       <h2><b>Card</b></h2>
         <div class="card">
            <img src="https://www.google.com/maps/vt/data=9ghSZ8nErj8ZpLa62QmQs4wma7hgLd3CKhIr-1RChIP1h2PNolqU-BC8nyMJuyEZ9_soozmqdsiMBCgbE29yag9ZRnyt1iZIqZgXj6_O-DSdeUNNibf27fYMHIygbd4272ikRvwnwH7BQPiTmEC9rkyZW7g0N0vopaGL9jK8iRg" alt="Avatar" style="width:100%">
              <h3>Weather</h3>
              <span id="name">Name: </span>
              <span id="sys_country">Country: </span>
              <span id="main_temp">Temp: </span>
              <span id="main_temp_max">Temp max: </span>
              <span id="main_temp_min">Temp min: </span>
              <span id="humidity">Humidity: </span>
              <span id="sys_sunrise">Sunrise: </span>
              <span id="sys_sunset">Sunset: </span>
              <span id="wind_deg">Wind deg: </span>
              <span id="wind_speed">Wind speed: </span>
              <span id="clouds">Cloud: </span>
         </div>
   
  <div class="card1" >
     <img src="https://www.google.com/maps/vt/data=9ghSZ8nErj8ZpLa62QmQs4wma7hgLd3CKhIr-1RChIP1h2PNolqU-BC8nyMJuyEZ9_soozmqdsiMBCgbE29yag9ZRnyt1iZIqZgXj6_O-DSdeUNNibf27fYMHIygbd4272ikRvwnwH7BQPiTmEC9rkyZW7g0N0vopaGL9jK8iRg" alt="Avatar" style="width:100%">
            <input type="text" id="la" placeholder="lat" size="10">
            <input type="text" id="lo" placeholder="lon" size="10">
            <button id="search" class="btn-lm btn-primary" >Search</button>
            <button id="reset" class="btn-lm btn-danger" >Reset</button>
          <h3>Weather</h3>
          <span id="name1">Name: </span><br>
          <span id="sys_country1">Country: </span><br>
          <span id="main_temp1">Temp: </span><br>
          <span id="main_temp_max1">Temp max: </span><br>
          <span id="main_temp_min1">Temp min: </span><br>
          <span id="humidity1">Humidity: </span><br>
          <span id="sys_sunrise1">Sunrise: </span><br>
          <span id="sys_sunset1">Sunset: </span><br>
          <span id="wind_deg1">Wind deg: </span><br>
          <span id="wind_speed1">Wind speed: </span><br>
          <span id="clouds1">Cloud: </span><br>
  
      </div>      
  </div>   
 


 <script>
   function loadweather(){ 
     var url ="http://api.openweathermap.org/data/2.5/weather?lat=7.376078&lon=99.743488&appid=a28d46fac268c82a0dc8eabda7fd2b94";
           $.getJSON(url)
            .done((data)=>{
              console.log(data)
                $("#name").append(data.name);
                $("#main_temp").append(data.main.temp);
                $("#main_temp_max").append(data.main.temp_max);
                $("#main_temp_min").append(data.main.temp_min);
                $("#humidity").append(data.main.humidity);
                $("#sys_country").append(data.sys.country);
                $("#sys_sunrise").append(data.sys.sunrise);
                $("#sys_sunset").append(data.sys.sunset);
                $("#wind_deg").append(data.wind.deg);
                $("#wind_speed").append(data.wind.speed);
                $("#clouds").append(data.clouds.all);
                      })         
           .fail((xhr, status, err)=>{
                    console.log("error")
                });
          }
            
   function searchweather(){ 
           var url ="http://api.openweathermap.org";
           var a = $("#la").val();
           var b = $("#lo").val();

           url = url + "/data/2.5/weather?lat=" + a + "&lon=" + b +"&appid=a28d46fac268c82a0dc8eabda7fd2b94"; 
        
            $.getJSON(url)
            .done((data)=>{
              console.log(data)
                $("#name1").append(data.name);
                $("#main_temp1").append(data.main.temp);
                $("#main_temp_max1").append(data.main.temp_max);
                $("#main_temp_min1").append(data.main.temp_min);
                $("#humidity1").append(data.main.humidity);
                $("#sys_country1").append(data.sys.country);
                $("#sys_sunrise1").append(data.sys.sunrise);
                $("#sys_sunset1").append(data.sys.sunset);
                $("#wind_deg1").append(data.wind.deg);
                $("#wind_speed1").append(data.wind.speed);
                $("#clouds1").append(data.clouds.all);
                      })         
           .fail((xhr, status, err)=>{
                    console.log("error")
                });
          }
   
    function reset(){
             $("#la").val("");
             $("#lo").val("");
             $.removeData();
    }
        $(()=>{
            loadweather();
            $("#search").click(searchweather);
            $("#reset").click(reset);  
     });
   </script>        
        
    
</body>
</html>