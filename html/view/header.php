<header>
    <div class="navbH">
        <div class="navDesktop hidden-xs hidden-sm">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" ui-sref="home"><img src="resources/images/logo.png" alt=""></a>
                        <div class="ribbon"></div>
                    </div>
                    <ul class="nav navbar-nav">
                        <li ui-sref-active="active"><a ui-sref="home">Home</a></li>
                        <li ui-sref-active="active"><a ui-sref="acadamic">Acadamics</a></li>
                        <li ui-sref-active="active"><a ui-sref="tips">Tips</a></li>
                        <li ui-sref-active="active"><a ui-sref="links">Links</a></li>
                        <li ui-sref-active="active"><a ui-sref="contactus">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a ui-sref="signup"> Sign Up</a></li>
                        <li class="signB"></li>
                        <li><a ui-sref="login"> Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="navMobile visible-xs visible-sm" >
            <nav class="navbar navbar-inverse">
                <div class="text-left">
                    <a class="navbar-brand" ui-sref="#">Abac Corner</a>
                </div>
                <div class="text-right">
                    <a href="#menu">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </nav>

            <header>
                <nav id="menu">
                    <ul>
                        <li><a ui-sref="home">Home</a></li>
                        <li><a ui-sref="acadamic">Academics</a></li>
                        <li><a ui-sref=="tips">Contact</a></li>
                        <li><a ui-sref=="links">Contact</a></li>
                        <li><a ui-sref=="contactus">Contact</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
</header>
<!--end header-->
