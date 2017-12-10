                            /*This script is used with the service-countryVisits.php page and displays the country name and visits when the page
                            receives a query in the form of id=CA*/
                            $.getJSON("service-countryVisits.php", function(json2) {
                                console.log(json2);
                                $("#div infor4").append(json2[0].Count);
                            });
              