                        //This script gets the JSON totals from the service-totals.php page and appends to the table including the icon, description and number.
                        $.getJSON("service-totals.php", function(json2) {
                                
                                $("#item1").append("<td><img src=" + "'" + "/project1/images/ic_visibility_black_24dp_1x.png" + "'" + "></td>"  + "<td>" + json2[0].Count + "</td>" + "<td>Total number of visits in June</td>");
                                $("#item2").append("<td><img src=" + "'" + "/project1/images/ic_public_black_24dp_1x.png" + "'" + "></td>"  + "<td>" + json2[1].Count + "</td>" + "<td>Unique country views</td>");
                                $("#item3").append("<td><img src=" + "'" + "/project1/images/ic_face_black_24dp_1x.png" + "'" + "></td>"  + "<td>" + json2[2].Count + "</td>" + "<td>Total number of employee To-Do's in June 2017</td>");
                                $("#item4").append("<td><img src=" + "'" + "/project1/images/ic_announcement_black_24dp_1x.png" + "'" + "></td>"  + "<td>" + json2[3].Count + "</td>" + "<td>Total employee messages in June 2017</td>");
                                     
                            });