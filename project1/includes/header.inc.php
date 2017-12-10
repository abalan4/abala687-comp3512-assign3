  <header class="mdl-layout__header">
    
    
    <div class="mdl-layout__header-row">
     <h1 class="mdl-layout-title"><span>CRM</span> Admin</h1>
 
        <script type="text/javascript">

//Displays the Search icon in the top right, can click to show.
        
    
        var searchBox = 
        '<form action="/project1/browse-employees.php?" method="get">\
            <div class="container-1">\
            <input type="text" id="search" name="lnameFilter" placeholder="Search" />\
            <button type="submit" formmethod="get" value="Submit">Search</button>\
            </div>\
        </form>'; 
    
    function searchField(theSearch) {
  theSearch.outerHTML = searchBox;
}
</script>

</head>
             
      <div class="mdl-layout-spacer"></div>
      
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
          
    <a href="logout.php"><label id="tt4" class="material-icons mdl-badge mdl-badge--overlap">https</label></a> 
    <div class="mdl-tooltip" for="tt4">logout</div>           
                      
    <label id="tt2" class="material-icons mdl-badge mdl-badge--overlap" data-badge="5">account_box</label>  
    <div class="mdl-tooltip" for="tt2">Messages</div>                     
                     
    <label id="tt3" class="material-icons mdl-badge mdl-badge--overlap" data-badge="4">notifications</label> 
     <div class="mdl-tooltip" for="tt3">Notifications</div>           
                
             <p>
              <img src="/project1/images/search.png" onclick="searchField(this)" >
            </p>
      </div>
    </div>
  </header>