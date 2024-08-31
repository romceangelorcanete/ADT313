<h1>Hands-on-Activity 2</h1>



<?php





$table = array(
    "header" =>array(
        "StudentID",

        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course",
        "YearLevel"
    ),
    "body"=> array(
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ), 
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),        
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" =>"Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" =>"YearLevel"
        )
        ),

    )

?>


<table border= "1">
      <thead>
        <?php
        for ($header = 0; $header <= count ($table["header"]) -1; $header++){
            echo "<th>".$table["header"][$header]."</th>";
        }
?>
        <thead>
        <body>
            <?php 
            for($row = 0; $row <= count ($table["body"]) -1; $row++){
                echo "<tr>";
                echo "<td>".$row."</td>";
                echo "<td>".$table["body"][$row]["firstname"]."</td>";
                echo "<td>".$table["body"][$row]["middlename"]."</td>";
                echo "<td>".$table["body"][$row]["lastname"]."</td>";
                echo "<td>".$table["body"][$row]["course"]."</td>";
                echo "<td>".$table["body"][$row]["section"]."</td>";
                echo "<td>".$table["body"][$row]["yearlevel"]."</td>";

                echo "</tr>";
            }
            ?>

        </body>
</table>

