// File Preview
document.getElementById('fileInput').addEventListener('change', function(){
  const file = this.files[0];
  const reader = new FileReader();

  reader.onload = function(e){
    document.getElementById('preview').textContent = e.target.result;
  };
  reader.readAsText(file);
});

// AJAX Live Results
function loadResults(){
 fetch("get_results.php")
  .then(response => response.json())
  .then(data => drawChart(data));
}

function drawChart(data){
 let bars = document.getElementById("bars");
 bars.innerHTML = "";
 data.forEach((value,index)=>{
   bars.innerHTML += `<div style="background:blue;color:white;margin:5px;width:${value*40}px">
      Option ${index+1}: ${value}
   </div>`;
 });
}

setInterval(loadResults, 2000);
loadResults();
