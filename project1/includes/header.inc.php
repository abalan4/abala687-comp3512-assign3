  <header class="mdl-layout__header">
    
    
    <div class="mdl-layout__header-row">
     <h1 class="mdl-layout-title"><span>CRM</span> Admin</h1>
 
        <script type="text/javascript">

//Displays the Search icon in the top right, can click to show and hide.
            
            function sendToPage(){
                var input = document.getElementById("search").value;
               
                if (input !== 'undefined'){
                    location.href = "/project1/browse-employees.php?lnameFilter=" + document.getElementById("search").value;
                    return false;
                }
                
                else {
                    alert('Invalid Input.');
                }
                    }
                    
                function myFunction() {
                var x = document.getElementById("searchBox");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                    }
                }    
                    
                    
        </script>
</head>
             
      <div class="mdl-layout-spacer"></div>
      
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                  
<label id="tt2" class="material-icons mdl-badge mdl-badge--overlap" data-badge="5">account_box</label>  
<div class="mdl-tooltip" for="tt2">Messages</div>                     
                 
<label id="tt3" class="material-icons mdl-badge mdl-badge--overlap" data-badge="4">notifications</label> 
 <div class="mdl-tooltip" for="tt3">Notifications</div>           
                  
        <img src="/project1/images/search.png" onclick="myFunction()">
             
             <div id=searchBox>
                <input type="text" method="put" id="search" placeholder="Search" value="">
                <input type='submit' onclick="sendToPage();" />
             </div>
        
        
      </div>
    </div>
  </header>