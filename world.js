document.addEventListener("DOMContentLoaded", function(){
    
    var userInput;
    
    document.getElementById("lookup").addEventListener("click", function()
    {
        userInput = document.getElementById("country").value;
        alert(userInput);
    });
    
    function fetch_AJAX_Request() 
    {
        if (httpRequest.readyState === XMLHttpRequest.DONE) 
        {
            if (httpRequest.status === 200) 
            {
                var response = httpRequest.responseText;
                document.getElementById("result").innerHTML = response;
            } 
            else 
            {
                alert('400 Error Detected. \n There was a problem with the request.');
            }
        }
    }
    
    var httpRequest = new XMLHttpRequest();
    var url = "world.php";
    httpRequest.onreadystatechange = fetch_AJAX_Request();
    httpRequest.open('GET', url + "?country=" + userInput);
    httpRequest.send();
    
    
    
})