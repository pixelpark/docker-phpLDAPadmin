<?php
// $Header$

define('LIBDIR',sprintf('%s/',realpath('../lib/')));
define('LANGDIR',sprintf('%s/',realpath(LIBDIR.'../locale/')));

?>

<table>
  <tr>
    <th>LIBDIR</th>
    <td><?php echo LIBDIR ?></td>
  </tr>
  <tr>
    <th>LANGDIR</th>
    <td><?php echo LANGDIR ?></td>
  </tr>
</table>

