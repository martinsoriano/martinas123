 <html>
   <head>
      
      <style>
         span {
            color: green;
         }
      </style>
      
      <script>
         function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").Value = "";
               return;
            }else {
               var xmlhttp = new XMLHttpRequest();
					
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("txtHint").Value = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "ajax1.php=" + str, true);
               xmlhttp.send();
            }
         }
      </script>
      
   </head>
   <body>
      
      <p><b>Search your favourite tutorials:</b></p>
      
      <form>
         <input type = "text" onkeyup = "showHint(this.value)">
      </form>
      
      <p>Entered Course name: <input id="ajax1.php"></input></p>

 
   
   </body>
</html>