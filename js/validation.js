function checkName(){
    var b = /\d+\.?\d*/
    var x = document.getElementById("usernamesignup").value;
    if (x.match(b)){
        return true;
    }
    else{
        alert("price must be integer");
        return false;
    }
}

function passwordChanged() {
    var strength = document.getElementById("checkpwd");
    var pwd = document.getElementById("passwordsignup");
    var pwdconf = document.getElementById("passwordsignup_confirm");
    var confpwd = document.getElementById('matchpwd');


    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*).*$", "g");
    var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{6,}).*", "g");
    
    if (pwd.value.length==0) {
    strength.innerHTML = "Type Password";
    pwdconf.disabled = true;
    }
    
    else if (false == enoughRegex.test(pwd.value)) {
    strength.innerHTML = "More Characters";
    pwdconf.disabled = true;
    }
    
    else if (strongRegex.test(pwd.value)) {
    strength.innerHTML = '<span style="color:green">Strong!</span>';
    pwdconf.disabled = false;


    } 

    else if (mediumRegex.test(pwd.value)) {
    strength.innerHTML = '<span style="color:orange">Medium! its good</span>';
    pwdconf.disabled = false;


    } 
    else {
    strength.innerHTML = '<span style="color:red">Weak!</span>';
    pwdconf.disabled = true;
    }
}

function passwordMatch(){
    var pwd = document.getElementById("passwordsignup");
    var pwdconf = document.getElementById("passwordsignup_confirm");
    var matchpwd = document.getElementById("matchpwd");

    if(pwd.value != pwdconf.value){
        matchpwd.innerHTML = '<span style="color:red">Password didnot match!</span>';
    }
    else{
        matchpwd.innerHTML = '<span style="color:green">Password Matched!</span>';

    }
}
