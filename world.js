document.addEventListener("DOMContentLoaded", function(){
    var result = document.getElementById("result");
    var userInput;
    
    
    document.getElementById("lookup").addEventListener("click", function()
    {
        userInput = document.getElementById("country").value;
        alert(userInput);
        var httpRequest = new XMLHttpRequest();
        var url = "world.php";
        httpRequest.onreadystatechange = function (){
            if (httpRequest.readyState === httpRequest.DONE) 
        {
            if (httpRequest.status === 200) 
            {
                var response = httpRequest.responseText;
                result.innerHTML = response;
            } 
            else 
            {
                alert('400 Error Detected. \n There was a problem with the request.');
            }
        }
        };
        httpRequest.open('GET', url + "?country=" + userInput);
        httpRequest.send();
    
    });
    
    

    
    
    
})