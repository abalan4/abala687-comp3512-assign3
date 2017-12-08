                            $.getJSON("service-topAdoptedBooks.php", function(json3) {
                                console.log(json3);
                                
                                for (i = 0; i < 10; i++) { 
                                var item = "itm" + i;
                                $("#" + item).append("<td><img src=" + "'book-images/thumb/" + json3[i].ISBN10 + ".jpg'" + "></td>"  + "<td>" + "<a href='/project1/single-book.php?ISBN10=" + json3[i].ISBN10 + "'>" + json3[i].Title + "</td>" + "<td>" + json3[i].mySum +"</td>");
                                }        
                            });