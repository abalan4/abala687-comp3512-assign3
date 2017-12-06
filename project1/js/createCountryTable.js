                            $.getJSON("service-topCountries.php", function(json) {
                                console.log(json); 
                                for(var i=0; i<json.length; i++){
                                $('#sample select').append("<option value=" + i + ">" + json[i].CountryCode + "</option>");
                                    }
                                    
                            });
                            
                            function popInfo() {
                                 $.getJSON("service-topCountries.php", function(json) {
                                     var myList = document.getElementById("mySelect").value;
                                     var cName = json[myList].CountryName;
                                     var cCount = json[myList].Count;
                                     document.getElementById("de").innerHTML = "Country: " + cName + "<br>" + "Number of Visits: " + cCount;
                                 });
                            }
                            
                            $.getJSON("service-totals.php", function(json2) {
                                console.log(json2);
                                $("#test").append(json2[0].Count);
                            });
              