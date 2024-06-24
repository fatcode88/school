<?php
include('./conn.php');
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE student_id='$id'";
$conn->exec($sql);
echo "<br> Data deleted succ";
header('Refresh:3 URL=./select_st.php');
