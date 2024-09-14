                   /* functions for grid */
   const numOfstudent=50                
function AttendGrid(){
    const S_half= document.querySelector(".S_half");
for(let i=1 ;i<=numOfstudent;++i){
  const gridEle = document.createElement("input");
  gridEle.setAttribute("class","gridEmt");
  gridEle.setAttribute("id","gEmt"+i); 
  gridEle.setAttribute("type","checkbox")
  S_half.appendChild(gridEle);
  gridEle.innerHTML = i;
}

}
AttendGrid();

            // to inject date to the website

var now = new Date();
var datetime = now.toLocaleString();

// Insert date and time into HTML
document.getElementById("Date").innerHTML ="Date: "+ datetime;
