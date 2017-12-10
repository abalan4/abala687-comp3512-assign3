                            //This script gets the JSON object and appends each of the objects in the JSON array to create the select list of top 15 countries.
                            $.getJSON("service-topCountries.php", function(json) {
                                console.log(json); 
                                for(var i=0; i<json.length; i++){
                                $('#sample select').append("<option value=" + i + ">" + json[i].CountryCode + "</option>");
                                    }
                                    
                            });
                            
                            //This script populates the data and shows the country name and count dynamically as the user clicks on codes from the select list.
                            function popInfo() {
                                 $.getJSON("service-topCountries.php", function(json) {
                                     var myList = document.getElementById("mySelect").value;
                                     var cName = json[myList].CountryName;
                                     var cCount = json[myList].Count;
                                     document.getElementById("de").innerHTML = "Country: " + cName + "<br>" + "Number of Visits: " + cCount;
                                 });
                            }
                            