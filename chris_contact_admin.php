<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/resetC.css"/>
        <link rel="stylesheet" href="css/mainC.css"/>
        <title>Contact us admin</title>        
    </head>
    <body>
        
        <h1>Contact us tickets</h1>
        
        <?
            include('chris_connection.php');
        ?>
        
        <?php
            //Selects all entires from database
            //Orders the results returned by the queryNo
            $query = 'SELECT * FROM contact_response ORDER BY queryNo';
            //Exectues the query referenced in $query on the database 
            //Database refrenced in $dbc and created in connection.php
            $results = $dbc->query($query);
            //Returns how many rows are returned in $results
            //Used to check if any data was returned
            $rows = $results->rowCount();  
        ?>

        <?php 
            //Check if query returned any data
            if ($rows == 0){
                //If there are no rows display message to user
                echo("<p>Sorry there are no results</p>");
            } else {
                //Add Table heading
                echo "<table>
                    <thead>
                        <tr>
                            <th>Query No.</th>
                            <th>Name</th>
                            <th>Email address</th>
                            <th>Type of Query</th>
                            <th>Query Description</th>
                        </tr>
                    </thead>";
                //Foreach loop that iteractes through all the reults displays in a table
                foreach ($results as $queries){
                    echo '<tr>';
                        echo '<td>' . $queries['queryNo'] . '</td>';
                        echo '<td>' . $queries['name'] . '</td>';
                        echo '<td>' . $queries['emailAddress'] . '</td>';
                        echo '<td>' . $queries['queryType'] . '</td>';
                        echo '<td>' . $queries['query'] . '</td>';
                    echo '</tr>';
                }
                //Close off Database connection
                $dbc = null;
            }
        ?>
        </table>
    </body>
</html>