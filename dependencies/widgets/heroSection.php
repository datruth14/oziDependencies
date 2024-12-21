
  
  <?php
   //ozi script hero section widget, follow this intruction to use it on your application
   //install the widget as described in the doccumentation
   //call the widget inside the component file you wish to use it.
   //you can't call widgets inside a comp_files directory, only on main components
   //to use just call the hero section style you wish to use alongside the hero section EG
   //hsOneStyle();
   //hsOne();
   //then pass in the required parameters as described in the doccumentation 

  




   //hero section one
   //hero section one
   //hero section one


   //this is a hero section one style widget for your application
   //this is a hero section one style widget for your application
   //this is a hero section one style widget for your application
   function hsOneStyle($bg ="#f4f4f4",$titleColor="#000",$subTitleColor="#000",$btnTextColor="",$btnColor="",$btnOnPressColor="",$btnTextOnpressColor=""){
        ?>
          <style>
            body {
              margin: 0;
              font-family: Arial, sans-serif;
            }
        
            .hero {
              display: flex;
              align-items: center;
              justify-content: space-between;
              padding: 20px;
              background: <?php echo $bg;?>;
              height: 100vh;
              box-sizing: border-box;
            }
        
            .hero-text {
              flex: 1;
              padding: 20px;
            }
        
            .hero-text h1 {
              font-size: 3rem;
              margin-bottom: 20px;
              color: <?php echo $titleColor;?>;

            }
        
            .hero-text p {
              font-size: 1.2rem;
              margin-bottom: 20px;
              color: <?php echo $subTitleColor;?>;

            }
        
            .hero-text a {
              text-decoration: none;
              color: <?php echo $btnTextColor;?>;
              background-color: <?php echo $btnColor;?>;
              padding: 10px 20px;
              border-radius: 5px;
              font-size: 1rem;
            }
        
            .hero-text a:hover {
              background-color: <?php echo $btnOnPressColor;?>;
              color: <?php echo $btnTextOnpressColor;?>;
            }
        
            .hero-image {
              flex: 1;
              display: flex;
              justify-content: center;
              align-items: center;
            }
        
            .hero-image img {
              max-width: 100%;
              height: auto;
              border-radius: 10px;
            }
        
            @media (max-width: 768px) {
              .hero {
                flex-direction: column;
                text-align: center;
              }
        
              .hero-text h1 {
                font-size: 2rem;
              }
        
              .hero-text p {
                font-size: 1rem;
              }
        
              .hero-image {
                margin-top: 20px;
              }
            }
          </style>
        <?php 
   }




   //this is a hero section one widget for your application
   //this is a hero section one widget for your application
   //this is a hero section one widget for your application
   function hsOne($title="Welcome to Our Website",$subTitle="Your journey to excellence starts here. Discover endless opportunities and make your dreams come true.",$btnIcon="fas fa-paper-plane",$btnText="Get Started",$btnOnPressScreen="",$heroImage="https://via.placeholder.com/600x400"){
    ?>
     <div class="hero">
        <div class="hero-text">
          <h1><?php echo $title;?></h1>
          <p><?php echo $subTitle;?></p>
          <a href="<?php echo $btnOnPressScreen;?>"><i class="<?php echo $btnIcon;?>"></i> <?php echo $btnText;?></a>
        </div>
        <div class="hero-image">
          <img src="<?php echo $heroImage;?>" alt="Hero Image">
        </div>
      </div>
    <?php
   }


//end of hero section one 
//end of hero section one 
//end of hero section one 
//end of hero section one 
//end of hero section one 
//end of hero section one 
//end of hero section one 









