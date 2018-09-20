<!DOCTYPE html>

<!-- TODO make new container with perfect margin -->

<header>

  <?php
  if ($current_page!='home2') {
    echo "<nav class=\"white z-depth-3\" role=\"navigation\">";
  } else {
    echo "<nav class=\"head2 z-depth-3\" role=\"navigation\">";
  }
  ?>

    <div class="nav-wrapper container">
      <a href="index.php?page=template" class="brand-logo">
        <!-- CHANGE LOGO IMAGE -->
        <img src="img/logos/bi_LOGO.png" class="responsive-img" />
      </a>

      <!-- LARGE ONLY -->
      <ul class="right hide-on-med-and-down height-inherit">
        <li>
          <!-- Home Dropdown Trigger -->
          <a class='dropdown-trigger ' href='#' data-target='home-dropdown'>Home</a>
          <!-- Home Dropdown Structure -->
          <ul id='home-dropdown' class='dropdown-content'>
            <li><a href="index.php?page=home">Home 1</a></li>
            <li><a href="index.php?page=home2">Home 2</a></li>
          </ul>
        </li>
        <li>
          <!-- Products Dropdown Trigger -->
          <a class='dropdown-trigger ' href='#' data-target='products-dropdown'>Products & Services</a>
          <!-- Products Dropdown Structure -->
          <ul id='products-dropdown' class='dropdown-content'>
            <a href="index.php?page=products">Products & Services</a>
            <li><a href="index.php?page=bb">BolderBlack</a></li>
            <li><a href="index.php?page=bb">BolderBlack</a></li>
            <li><a href="index.php?page=bb">BolderBlack</a></li>
          </ul>
        </li>
        <li><a href="index.php?page=facility">Facility</a></li>
        <li><a href="index.php?page=investors">Investors</a></li>
        <li><a href="index.php?page=about">About Us</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
        <!-- SOCIAL BUTTONS -->
        <li class="socialContainer height-inherit">
          <li class="height-inherit ">
            <a href="https://www.facebook.com/Waste-To-Energy-Partners-LLC-1716756815280120/?ref=page_internal"
            class="valign-wrapper height-inherit socialLink"
            target="_blank">
              <img src="img/social/facebook.png" class="responsive-img socialImg" />
            </a>
          </li>
          <li class="height-inherit ">
            <a href="https://www.linkedin.com/company/bolder-industries"
            class="valign-wrapper height-inherit socialLink"
            target="_blank">
              <img src="img/social/linkedIn.png" class="responsive-img socialImg" />
            </a>
          </li>
        </li> <!-- end social -->
      </ul>

      <!-- MOBILE ONLY -->
      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=products">Products & Services</a></li>
        <li><a href="index.php?page=facility">Facility</a></li>
        <li><a href="index.php?page=investors">Investors</a></li>
        <li><a href="index.php?page=about">About Us</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
        <!-- SOCIAL -->
        <li class="socialContainer"><a class="center"
          target="_blank"
          href="https://www.facebook.com/Waste-To-Energy-Partners-LLC-1716756815280120/?ref=page_internal">
          <img src="img/social/facebook.png" class="responsive-img socialLink" />
          <img src="img/social/linkedIn.png" class="responsive-img socialLink" />
        </a></li>

      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <!-- END OF MOBILE ONLY -->
    </div>
  </nav>

</header>
