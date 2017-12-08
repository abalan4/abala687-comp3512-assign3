                            $.getJSON("service-countryVisits.php", function(json2) {
                                console.log(json2);
                                $("#test").append(json2[0].Count);
                            });
              