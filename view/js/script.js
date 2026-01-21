window.onload = function(){
  var pass = document.getElementsByName("password")[0];

  pass.onblur = function(){
    var value = pass.value;
    var hasLetter = /[a-zA-Z]/.test(value);
    var hasNumber = /[0-9]/.test(value);

    if(value != "" && (!hasLetter || !hasNumber)){
      alert("Password should have both letters and numbers");
      pass.value = "";
    }
  }
}
