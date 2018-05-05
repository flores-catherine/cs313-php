function clicked() {
    alert("Clicked!");
    
}

function changeColor() {
    var chosen = document.getElementById("colorInput").value;
    var x = document.getElementsByClassName("styled");
    x[0].style.backgroundColor=chosen;
//    alert(x);
//    x.style.color='chosen';
    //style.color = chosen;
//    threeDivs.style.color=chosen;
}
