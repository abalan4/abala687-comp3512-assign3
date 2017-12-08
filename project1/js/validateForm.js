function Check(input) {
    input.value = input.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
}

function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    $( "div.status").html("Email not valid");
    }
    else
    {
    $( "div.status").html("Email valid");
    }
}

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