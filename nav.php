<div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">T-COMMUNICATION</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <?php 
                            $count=0;
                            if(isset($_SESSION['cart']))
                            {
                                $count=count($_SESSION['cart']);
                            }
                            ?>
                    <a class="nav-link" href="cart.php">cart <span style='color:blue;'><?php echo $count; ?></span><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item">
                        <button onclick="myFunction()" class="dropbtn">categories</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a  href="phone.php">PHONE </a>
                            <a  href="laptop.php">LAPTOP</a>
                            <a  href="tab.php">IPADS & TABLET</a>
                            <a  href="#access">ACCESSORIES</a>
                        </div>
                </li>
                </ul>
                <div class="navbar-text">
                    <p class="right-p"><i class="fas fa-phone" aria-hidden="true"></i>09056229251</p>
                </div>
            </div>
        </nav>
        </div>