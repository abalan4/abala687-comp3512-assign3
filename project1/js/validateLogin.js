function checkInput()
{
    var pass = document.getElementById('pass');
    var confirmedPass = document.getElementById('confirmedPass');
    var message = document.getElementById('confirmMessage');
    
    function changeColour(){
        
        var correct = "#16ce16";
        var incorrect = "#ff0000";
        
        if(pass.value == confirmedPass.value){
            confirmedPass.style.backgroundColor = correct;
        }
        else{
            confirmedPass.style.backgroundColor = incorrect;
        }
    }
    changeColour();
} 