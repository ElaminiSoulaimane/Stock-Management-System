<style>
  .submenu-toggle:hover{
  background-color: darkorange !important;
}
.submenu-toggle{
  color: #ffff !important;
}
i{
  color: #ffff !important;
}
</style>
<ul >
  <li>
    <a href="admin.php" class="submenu-toggle">
      <i class="glyphicon glyphicon-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>User Management</span>
    </a>
    <ul class="nav submenu">
      <li><a href="group.php">Manage Groups</a> </li>
      <li><a href="users.php">Manage Users</a> </li>
   </ul>
  </li>
  <li>
    <a href="categorie.php" class="submenu-toggle" >
      <i class="glyphicon glyphicon-indent-left"></i>
      <span>Categories</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Products</span>
    </a>
    <ul class="nav submenu" class="submenu-toggle">
       <li><a href="product.php">Manage Products</a> </li>
       <li><a href="add_product.php">Add Products</a> </li>
   </ul>
  </li>
  <li>
    <a href="media.php"  class="submenu-toggle">
      <i class="glyphicon glyphicon-picture"></i>
      <span>Media Files</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-credit-card"></i>
       <span>Sales</span>
      </a>
      <ul class="nav submenu" class="submenu-toggle">
         <li><a href="sales.php">Manage Sales</a> </li>
         <li><a href="add_sale.php">Add Sale</a> </li>
     </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle" class="submenu-toggle">
      <i class="glyphicon glyphicon-duplicate"></i>
       <span>Sales Report</span>
      </a>
      <ul class="nav submenu" class="submenu-toggle">
        <li><a href="sales_report.php">Sales by dates </a></li>
        <li><a href="monthly_sales.php">Monthly sales</a></li>
        <li><a href="daily_sales.php">Daily sales</a> </li>
      </ul>
  </li>
</ul>