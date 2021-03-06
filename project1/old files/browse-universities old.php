<?php
define('DBHOST', '');
define('DBNAME', 'book');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=book;charset=utf8mb4;');

/*This function checks the querystring to make sure a state was entered correctly*/
function checkStates(){
$states = array(
    'AL'=>'Alabama', 'AK'=>'Alaska', 'AZ'=>'Arizona', 'AR'=>'Arkansas', 'CA'=>'California', 'CO'=>'Colorado', 'CT'=>'Connecticut', 'DE'=>'Delaware', 'DC'=>'District of Columbia', 'FL'=>'Florida', 'GA'=>'Georgia', 'HI'=>'Hawaii', 'ID'=>'Idaho', 'IL'=>'Illinois', 'IN'=>'Indiana', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'ME'=>'Maine', 'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri', 'MT'=>'Montana', 'NE'=>'Nebraska', 'NV'=>'Nevada', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NM'=>'New Mexico', 'NY'=>'New York', 'NC'=>'North Carolina', 'ND'=>'North Dakota', 'OH'=>'Ohio', 'OK'=>'Oklahoma', 'OR'=>'Oregon', 'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'SD'=>'South Dakota', 'TN'=>'Tennessee', 'TX'=>'Texas', 'UT'=>'Utah', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WA'=>'Washington', 'WV'=>'West Virginia', 'WI'=>'Wisconsin', 'WY'=>'Wyoming',
);

foreach($states as $s){
    
    if ($s == $_GET['state']){
        $num = '404';
    }
}

if ($num != '404'){
$_GET['state'] = 'reset';
}
}

function checkUniversity(){

    if (!is_numeric($_GET['university']) || ($_GET['university'] > '484613') || ($_GET['university'] < '100654') || !isset($_GET['university'])) {
        $_GET['university'] = '126182';
    }
}


function displayUniversities(){
    try {
        
        if ($_GET['state'] == "reset"){
          $uniState = $_GET['state'];
          
                            $srt = null;
                            $db = new UniversityGateway($connection);
                            $result = $db->findAllSorted($srt);
                            foreach ($result as $row){
                                 echo '<a href="' . $_SERVER["SCRIPT_NAME"] . '?employee=' . $row['EmployeeID'] . '" class="';
        }
                            //     $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                            //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            //     $sql = "select * from Universities order by Name limit 20";
                            
                            //     $result = $pdo->query($sql);
                                
                            // while ($row = $result->fetch()) {
                            // echo '<a href="' . $_SERVER["SCRIPT_NAME"] . '?university=' . $row['UniversityID'] . "&state=" . $row['State'] . '" class="';
                            
                            //     echo 'item">';
                            //     echo "<li>" . $row['Name'] . '</a>' . "</li>";
                                
                                
                                
                            // }
                            // $pdo = null;
                            //     }
        
        
        else{
                                $uniState = $_GET['state'];
                                $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "select * from Universities where State =" . "'$uniState'" . "order by Name limit 20";
                            
                                $result = $pdo->query($sql);
                                
                                if ($_GET['state'] != reset){
                                echo "Universities in: " . $_GET['state'];}; 
                            while ($row = $result->fetch()) {
                            
                            echo '<a href="' . $_SERVER["SCRIPT_NAME"] . '?university=' . $row['UniversityID'] . "&state=" . $row['State'] . '" class="';
                            
                                echo 'item">';
                                echo "<li>" . $row['Name'] . '</a>' . "</li>";
                                
                                
                            } 
                            }
                            $pdo = null;
                                }
                            catch (PDOException $e) {
                                die( $e->getMessage() );
                                }
    
};

function displayUniInfo(){
                                
                                try {
                                if (isset($_GET['university']) && $_GET['university'] > 0) {
                                    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $sql = 'select * from Universities where UniversityID=' . $_GET['university'];
                                    $result = $pdo->query($sql);
                                
                                
                                while ($row = $result->fetch()) {
                                    echo "<h4>" . $row['Name'] . "</h4>";
                                    echo $row['Address'] . "<br/>";
                                    echo $row['City'] . ", ";
                                    echo $row['State'] . " " . $row['Zip'] . "<br/>";
                                    echo $row['Website']. "<br/>";
                                    echo $row['Longitude'] . " ";
                                    echo $row['Latitude'];
                                    }
                                    $pdo = null;
                                    }
                                    }
                                catch (PDOException $e) {
                                    die( $e->getMessage() );
                                }
                                
};



function getStates(){
	
			try {
                                   
                                    
                                    {
                                            $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
                                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $sql = 'SELECT * from States';
                                            $result = $pdo->query($sql);
                                             echo '"<option value=' . "reset" . ">" . "Remove filter" . "</option>";
                                            while ($row = $result->fetch()) {
                                   
                                       
                                    echo "<option value='" . $row['StateName'] . "'" . ">" . $row['StateName'] . "</option>";
                                
                                
                                            }
                                            $pdo = null;
                                        }
                                    }
                                    catch (PDOException $e) {
                                        die($e->getMessage());
                                    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRM Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">
    
    
    <script   src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>
       
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    
</head>

<body>
    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Universities</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="demo-list-item mdl-list">
                    <div class="four wide field">
                               
                               
                               <form action="browse-universities.php?university=<?php echo $_GET['university'] . "&state=" . $_GET['state'] ?>" method="get">
                              <select name="state">
                                <?php
                                checkStates();
                                checkUniversity();
                                
                                getStates();
                                ?>
                              </select>
                              <br>
                              <input type="submit">
                            </form>
                               
                    </div>  
                         <?php 
                           /* programmatically loop though univesity and display each
                              name as <li> element. */
                             
                           
                           displayUniversities();
                           
                         ?>            

                    </ul>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->
              
              
              
              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">

                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">University Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                          
                        
                          <div class="mdl-tabs__panel is-active" id="address-panel">
                              
                           <?php   
                             /* display requested uni's information */
                             displayUniInfo();
                             
                           ?>
                           
         
                          </div>
                          <div class="mdl-tabs__panel" id="todo-panel">
                              
         
                          </div>
                          
                          <div class="mdl-tabs__panel" id="messages-panel">
                                                     
                            
                          </div>
                        </div>                         
                    </div>    
  
                 
              </div>  <!-- / mdl-cell + mdl-card -->   
            
            </div>  <!-- / mdl-grid -->    

        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>