//Hides existing username error when user begins to type new email.
function disappearErr(){
    $("#errDiv").hide();
};

//This function checks the input on the register form. Replaces any input besides alphabetical input for firstname, lastname etc.
function Check(input) {
    input.value = input.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
}

//This regular expression checks to see if the user has entered a correctly formatted email. On success displays message stating its valid.
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

//Compares inputted passwords to see if they match, if they match the style of the box changes to green, red otherwise. 
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