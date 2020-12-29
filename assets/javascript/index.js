// javascript for fatching data from API (World) 
function fetch(){
  $.get("https://api.covid19api.com/summary", 
    function (data){
    // console.log(data['Countries'].length);
    var tbvalb = document.getElementById('tbvalb')
      for(var i=1; i<(data['Countries'].length); i++){
    var x = tbvalb.insertRow();
    x.insertCell(0);
    tbvalb.rows[i].cells[0].innerHTML = data ['Countries'][i-1]['Country'];         
    x.insertCell(1);
    tbvalb.rows[i].cells[1].innerHTML = data ['Countries'][i-1]['TotalConfirmed'];        
    x.insertCell(2);
    tbvalb.rows[i].cells[2].innerHTML = data ['Countries'][i-1]['TotalRecovered'];        
    x.insertCell(3);
    tbvalb.rows[i].cells[3].innerHTML = data ['Countries'][i-1]['TotalDeaths'];        
    x.insertCell(4);
    tbvalb.rows[i].cells[4].innerHTML = data ['Countries'][i-1]['NewConfirmed'];    
    x.insertCell(5);
    tbvalb.rows[i].cells[5].innerHTML = data ['Countries'][i-1]['NewRecovered'];        
    x.insertCell(6);
    tbvalb.rows[i].cells[6].innerHTML = data ['Countries'][i-1]['NewDeaths'];     
    }
  }     
  );
}

