<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>

    <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <span class="nav__logo-circle">RD</span>

               <span class="nav__logo-name">Reuben G. Dawe</span>
            </a>

            <div class="nav__menu" id="nav-menu">
               <span class="nav__title">Menu</span>

               <h3 class="nav__name">Reuben Dawe</h3>

               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="#home" class="nav__link active-link">Welcome</a>
                  </li>

                  <li class="nav__item">
                     <a href="#about" class="nav__link">Bio</a>
                  </li>

                  <li class="nav__item">
                     <a href="#projects" class="nav__link">Portfolio</a>
                  </li>

                  <li class="nav__item">
                     <a href="#contact" class="nav__link nav__link-button">Reach Out</a>
                  </li>
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__buttons">
               <!-- Theme button -->
               <i class="ri-moon-fill change-theme" id="theme-button"></i>

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-4-line"></i>
               </div>
            </div>
         </nav>
      </header>
