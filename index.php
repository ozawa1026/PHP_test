<table>
  <?php
  for ( $i = 1; $i <= 9; $i++ ) {
  for ( $j = 1; $j <= 9; $j++ ) {
  print '<td>' . $i*$j . '</td>';
  }
  print '</tr>' ;
  }
  ?>
</table>

<style>
table {
border-collapse: collapse;
}
th, td {
border: solid;
}
</style>