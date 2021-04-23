<?php
                session_start();
        $dbname="TMA103";
        session_register("dbname");
        include("../../modules/course_home/course_home.php");
        ?>