<?php


$query1 = $pdo->prepare(countAllShowcases());
$query1->execute();
$res1 = $query1->fetch();

if ($res1['count(*)'] == 0) {

}
else {
  $query2 = $pdo->prepare(getAllShowcases());
  $query2->execute();
  $res2 = $query2->fetchAll();

  foreach ($res2 as $row) {
    $showcase_assignment_id[] = $row["Auftrag_Id"];
    $details[] = $row["Details"];
  }

}


?>
