<?php
/**
 * Ozi Script Hero Section Widgets
 * 
 * This file contains reusable Hero Section widgets for your application.
 * Usage:
 * 1. Include this file in your page.
 * 2. Call the desired hero section function with the appropriate parameters.
 */

// Global styles for all widgets
?>
<!-- Font Awesome Dependency -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    /* Reset for all hero sections to ensure full bleed */
    body { margin: 0; padding: 0; box-sizing: border-box; }
</style>
<?php

/**
 * Hero Section 1: Standard Split
 */
function heroSection1(
    $title = "Welcome to Our Website",
    $subTitle = "Your journey to excellence starts here. Discover endless opportunities.",
    $btnIcon = "fas fa-paper-plane",
    $btnText = "Get Started",
    $btnLink = "",
    $heroImage = "https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80",
    $bg = "#f4f4f4",
    $titleColor = "#000",
    $subTitleColor = "#333",
    $btnTextColor = "#fff",
    $btnColor = "#007bff",
    $btnOnPressColor = "#0056b3",
    $btnTextOnpressColor = "#fff"
) {
    $bgStyle = (strpos($bg, 'http') !== false || strpos($bg, 'url(') !== false) 
        ? "background-image: url('$bg'); background-size: cover; background-position: center;" 
        : "background: $bg;";
    ?>
    <style>
        .hero-1-container { display: flex; align-items: center; justify-content: space-between; padding: 50px; <?php echo $bgStyle; ?> min-height: 80vh; font-family: 'Segoe UI', sans-serif; }
        .hero-1-text { flex: 1; padding-right: 40px; }
        .hero-1-text h1 { font-size: 3.5rem; margin-bottom: 20px; color: <?php echo $titleColor; ?>; margin-top: 0; line-height: 1.2; }
        .hero-1-text p { font-size: 1.25rem; margin-bottom: 30px; color: <?php echo $subTitleColor; ?>; line-height: 1.6; }
        .hero-1-btn { text-decoration: none; color: <?php echo $btnTextColor; ?>; background-color: <?php echo $btnColor; ?>; padding: 12px 30px; border-radius: 6px; font-size: 1.1rem; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease; font-weight: 600; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .hero-1-btn:hover { background-color: <?php echo $btnOnPressColor; ?>; color: <?php echo $btnTextOnpressColor; ?>; transform: translateY(-2px); }
        .hero-1-image { flex: 1; display: flex; justify-content: center; align-items: center; }
        .hero-1-image img { max-width: 100%; height: auto; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); }
        @media (max-width: 900px) { .hero-1-container { flex-direction: column; padding: 40px 20px; text-align: center; } .hero-1-text { padding-right: 0; margin-bottom: 40px; } }
    </style>
    <div class="hero-1-container">
        <div class="hero-1-text">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="<?php echo $btnLink; ?>" class="hero-1-btn"><i class="<?php echo $btnIcon; ?>"></i> <?php echo $btnText; ?></a>
        </div>
        <div class="hero-1-image"><img src="<?php echo $heroImage; ?>" alt="Hero"></div>
    </div>
    <?php
}

/**
 * Hero Section 2: Centered Splash
 */
function heroSection2(
    $title = "Explore the Unknown", 
    $subTitle = "Adventure awaits. Go where you feel most alive.", 
    $btnText = "Start Journey", 
    $btnLink = "#",
    $bgImage = "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?auto=format&fit=crop&w=1950&q=80", 
    $overlayColor = "rgba(0,0,0,0.6)", 
    $textColor = "#fff", 
    $btnColor = "#ff5722", 
    $btnHoverColor = "#e64a19"
) {
    ?>
    <style>
        .hero-2-container { position: relative; height: 90vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color: <?php echo $textColor; ?>; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; font-family: 'Segoe UI', sans-serif; }
        .hero-2-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: <?php echo $overlayColor; ?>; z-index: 1; }
        .hero-2-content { position: relative; z-index: 2; max-width: 800px; padding: 20px; }
        .hero-2-content h1 { font-size: 4rem; margin-bottom: 20px; margin-top: 0; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); }
        .hero-2-content p { font-size: 1.5rem; margin-bottom: 40px; font-weight: 300; }
        .hero-2-btn { display: inline-block; padding: 15px 40px; background-color: <?php echo $btnColor; ?>; color: #fff; text-decoration: none; font-size: 1.2rem; border-radius: 50px; transition: transform 0.3s, background 0.3s; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; }
        .hero-2-btn:hover { background-color: <?php echo $btnHoverColor; ?>; transform: scale(1.05); }
        @media (max-width: 768px) { .hero-2-content h1 { font-size: 2.5rem; } .hero-2-content p { font-size: 1.1rem; } }
    </style>
    <div class="hero-2-container">
        <div class="hero-2-overlay"></div>
        <div class="hero-2-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="<?php echo $btnLink; ?>" class="hero-2-btn"><?php echo $btnText; ?></a>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 3: Modern Gradient & Illustration
 */
function heroSection3(
    $title = "Modern Solutions", 
    $subTitle = "Building the future of digital experience.", 
    $btnPrimaryText = "Get Started", 
    $btnSecondaryText = "Learn More", 
    $image = "https://cdni.iconscout.com/illustration/premium/thumb/web-development-2974925-2477356.png",
    $bgGradient = "linear-gradient(135deg, #667eea 0%, #764ba2 100%)", 
    $textColor = "#fff", 
    $btnColor = "#fff", 
    $btnTextColor = "#764ba2"
) {
    if (strpos($image, 'http') === false) $image = "https://via.placeholder.com/500?text=Gradient+Hero";
    ?>
    <style>
        .hero-3-container { display: flex; min-height: 85vh; align-items: center; background: <?php echo $bgGradient; ?>; color: <?php echo $textColor; ?>; padding: 0 8%; font-family: 'Segoe UI', sans-serif; overflow: hidden; }
        .hero-3-left { flex: 1; max-width: 600px; z-index: 2; }
        .hero-3-left h1 { font-size: 3.8rem; line-height: 1.1; margin-bottom: 25px; margin-top: 0; font-weight: 800; }
        .hero-3-left p { font-size: 1.2rem; margin-bottom: 35px; opacity: 0.9; line-height: 1.6; max-width: 90%; }
        .hero-3-btn-group { display: flex; gap: 15px; }
        .hero-3-btn { padding: 15px 35px; border-radius: 8px; font-weight: bold; text-decoration: none; transition: all 0.3s ease; display: inline-block; }
        .hero-3-btn.primary { background-color: <?php echo $btnColor; ?>; color: <?php echo $btnTextColor; ?>; box-shadow: 0 4px 15px rgba(0,0,0,0.2); }
        .hero-3-btn.secondary { border: 2px solid <?php echo $textColor; ?>; color: <?php echo $textColor; ?>; background: transparent; }
        .hero-3-btn:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.15); }
        .hero-3-right { flex: 1; display: flex; justify-content: center; position: relative; }
        .hero-3-right img { max-width: 120%; animation: hero3Float 6s ease-in-out infinite; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2)); }
        @keyframes hero3Float { 0% { transform: translateY(0px); } 50% { transform: translateY(-20px); } 100% { transform: translateY(0px); } }
        @media (max-width: 900px) { .hero-3-container { flex-direction: column-reverse; padding: 60px 20px; text-align: center; } .hero-3-left { margin: 0 auto; } .hero-3-btn-group { justify-content: center; } .hero-3-left h1 { font-size: 2.5rem; } .hero-3-right img { max-width: 80%; margin-bottom: 40px; } }
    </style>
    <div class="hero-3-container">
        <div class="hero-3-left">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <div class="hero-3-btn-group">
                <a href="#" class="hero-3-btn primary"><?php echo $btnPrimaryText; ?></a>
                <a href="#" class="hero-3-btn secondary"><?php echo $btnSecondaryText; ?></a>
            </div>
        </div>
        <div class="hero-3-right"><img src="<?php echo $image; ?>" alt="Illustration"></div>
    </div>
    <?php
}

/**
 * Hero Section 4: SaaS / Startup with Email Capture
 */
function heroSection4(
    $title = "Grow Your Audience", 
    $subTitle = "The ultimate platform for creators to monetize their content.", 
    $placeholder = "Enter your email address",
    $btnText = "Get Early Access", 
    $image = "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1600&q=80",
    $accentColor = "#2563EB"
) {
    ?>
    <style>
        .hero-4-container { background: white; padding: 80px 5%; display: flex; align-items: center; gap: 50px; font-family: 'Inter', system-ui, sans-serif; min-height: 80vh; }
        .hero-4-content { flex: 1; max-width: 550px; }
        .hero-4-content h1 { font-size: 3.5rem; font-weight: 900; color: #111827; letter-spacing: -0.02em; margin: 0 0 20px 0; line-height: 1.1; }
        .hero-4-content p { font-size: 1.25rem; color: #4B5563; margin: 0 0 30px 0; line-height: 1.6; }
        .hero-4-form { display: flex; gap: 10px; max-width: 450px; }
        .hero-4-input { flex: 1; padding: 14px 20px; border: 2px solid #E5E7EB; border-radius: 8px; font-size: 1rem; outline: none; transition: border-color 0.2s; }
        .hero-4-input:focus { border-color: <?php echo $accentColor; ?>; }
        .hero-4-btn { background: <?php echo $accentColor; ?>; color: white; border: none; padding: 14px 24px; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: background 0.2s; white-space: nowrap; }
        .hero-4-btn:hover { filter: brightness(90%); }
        .hero-4-image { flex: 1; position: relative; }
        .hero-4-image img { width: 100%; border-radius: 12px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); transform: perspective(1000px) rotateY(-5deg); transition: transform 0.5s ease; }
        .hero-4-image:hover img { transform: perspective(1000px) rotateY(0deg); }
        .hero-4-badge { display: inline-block; background: #EFF6FF; color: <?php echo $accentColor; ?>; padding: 4px 12px; border-radius: 20px; font-size: 0.875rem; font-weight: 600; margin-bottom: 20px; }
        @media (max-width: 900px) { .hero-4-container { flex-direction: column; text-align: center; } .hero-4-form { margin: 0 auto; flex-direction: column; } .hero-4-image img { transform: none; margin-top: 40px; } }
    </style>
    <div class="hero-4-container">
        <div class="hero-4-content">
            <span class="hero-4-badge">New Feature Release 🚀</span>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <form class="hero-4-form" onsubmit="event.preventDefault(); alert('Subscribed!');">
                <input type="email" class="hero-4-input" placeholder="<?php echo $placeholder; ?>" required>
                <button type="submit" class="hero-4-btn"><?php echo $btnText; ?></button>
            </form>
            <p style="font-size: 0.875rem; color: #9CA3AF; margin-top: 15px;">No credit card required. Cancel anytime.</p>
        </div>
        <div class="hero-4-image">
            <img src="<?php echo $image; ?>" alt="App Interface">
        </div>
    </div>
    <?php
}

/**
 * Hero Section 5: Cyberpunk / Neon Dark Mode
 */
function heroSection5(
    $title = "CYBER<br>FUTURE", 
    $subTitle = "Experience the next generation of digital reality.", 
    $btnText = "ENTER SYSTEM", 
    $bgImage = "https://images.unsplash.com/photo-1515630278258-407f66498911?auto=format&fit=crop&w=1920&q=80",
    $neonColor = "#0ff"
) {
    ?>
    <style>
        .hero-5-container { background: #000; position: relative; height: 100vh; overflow: hidden; display: flex; align-items: center; justify-content: center; font-family: 'Courier New', monospace; }
        .hero-5-bg { position: absolute; inset: 0; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; opacity: 0.4; filter: contrast(120%) grayscale(50%); }
        .hero-5-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(0, 255, 255, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 255, 255, 0.1) 1px, transparent 1px); background-size: 30px 30px; transform: perspective(500px) rotateX(60deg); margin-bottom: -100px; opacity: 0.3; }
        .hero-5-content { position: relative; z-index: 10; text-align: center; border: 1px solid <?php echo $neonColor; ?>; padding: 60px; background: rgba(0,0,0,0.7); box-shadow: 0 0 20px <?php echo $neonColor; ?>, inset 0 0 20px <?php echo $neonColor; ?>; backdrop-filter: blur(5px); }
        .hero-5-content h1 { font-size: 5rem; color: #fff; text-shadow: 2px 2px 0px #ff00ff, -2px -2px 0px <?php echo $neonColor; ?>; margin: 0; line-height: 0.9; letter-spacing: 5px; text-transform: uppercase; }
        .hero-5-content p { color: <?php echo $neonColor; ?>; font-size: 1.2rem; margin: 20px 0 40px; letter-spacing: 2px; text-transform: uppercase; }
        .hero-5-btn { background: transparent; color: #fff; border: 2px solid #fff; padding: 15px 40px; font-size: 1.2rem; font-family: inherit; cursor: pointer; position: relative; transition: 0.2s; text-transform: uppercase; font-weight: bold; }
        .hero-5-btn:hover { background: #fff; color: #000; box-shadow: 0 0 30px #fff; }
        .hero-5-glitch { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: repeating-linear-gradient(0deg, transparent 0px, transparent 2px, rgba(0,255,0,0.1) 2px, rgba(0,255,0,0.1) 4px); pointer-events: none; }
        @media (max-width: 768px) { .hero-5-content h1 { font-size: 3rem; } .hero-5-content { padding: 30px; width: 90%; } }
    </style>
    <div class="hero-5-container">
        <div class="hero-5-bg"></div>
        <div class="hero-5-grid"></div>
        <div class="hero-5-glitch"></div>
        <div class="hero-5-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <button class="hero-5-btn"><?php echo $btnText; ?></button>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 6: Glassmorphism / Frosted Glass
 */
function heroSection6(
    $title = "Crystal Clear Vision", 
    $subTitle = "Experience the aesthetics of glassmorphism. Beautiful blur effects that add depth and hierarchy.", 
    $btnText = "View Portfolio", 
    $bgImage = "https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-6-container { background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center; justify-content: flex-start; padding: 0 10%; font-family: 'Segoe UI', sans-serif; }
        .hero-6-card { background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 50px; border-radius: 20px; max-width: 500px; color: white; box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37); }
        .hero-6-card h1 { margin: 0 0 20px; font-size: 3rem; font-weight: 700; text-shadow: 0 2px 5px rgba(0,0,0,0.2); }
        .hero-6-card p { font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px; opacity: 0.9; }
        .hero-6-btn { background: rgba(255, 255, 255, 0.9); color: #333; border: none; padding: 12px 30px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s; text-decoration: none; display: inline-block; }
        .hero-6-btn:hover { background: #fff; transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        @media (max-width: 768px) { .hero-6-container { justify-content: center; padding: 20px; } .hero-6-card { padding: 30px; text-align: center; } }
    </style>
    <div class="hero-6-container">
        <div class="hero-6-card">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="#" class="hero-6-btn"><?php echo $btnText; ?></a>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 7: Cinematic / Fullscreen Video Style
 */
function heroSection7(
    $title = "CINEMATIC", 
    $subTitle = "Capture the moment. Relive the memory.", 
    $bgImage = "https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-7-container { position: relative; height: 100vh; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding-bottom: 80px; box-sizing: border-box; font-family: 'Helvetica Neue', sans-serif; }
        .hero-7-gradient { position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, transparent 60%); }
        .hero-7-content { position: relative; z-index: 2; color: white; width: 100%; text-align: center; }
        .hero-7-content h1 { font-size: 6vw; margin: 0; letter-spacing: 0.2em; font-weight: 900; text-transform: uppercase; animation: fadeIn 2s ease-out; }
        .hero-7-content p { font-size: 1.2rem; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(255,255,255,0.7); margin-top: 10px; }
        .hero-7-scroll { margin-top: 40px; animation: bounce 2s infinite; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes bounce { 0%, 20%, 50%, 80%, 100% {transform: translateY(0);} 40% {transform: translateY(-10px);} 60% {transform: translateY(-5px);} } 
    </style>
    <div class="hero-7-container">
        <div class="hero-7-gradient"></div>
        <div class="hero-7-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <div class="hero-7-scroll">↓</div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 8: 3D Perspective Card
 */
function heroSection8(
    $title = "3D Dimensions", 
    $subTitle = "Step into a new dimension of web design with CSS transforms.", 
    $image = "https://images.unsplash.com/photo-1535223289827-42f1e9919769?auto=format&fit=crop&w=1000&q=80"
) {
    ?>
    <style>
        .hero-8-container { background: #f0f2f5; min-height: 100vh; display: flex; align-items: center; justify-content: center; overflow: hidden; perspective: 1500px; font-family: sans-serif; }
        .hero-8-card { display: flex; background: white; width: 900px; border-radius: 20px; box-shadow: 0 50px 100px -20px rgba(0,0,0,0.3); transform: rotateY(10deg) rotateX(5deg); transition: transform 0.5s ease; overflow: hidden; }
        .hero-8-card:hover { transform: rotateY(0deg) rotateX(0deg); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25); }
        .hero-8-text { flex: 1; padding: 60px; display: flex; flex-direction: column; justify-content: center; }
        .hero-8-text h1 { font-size: 3rem; color: #1a202c; margin: 0 0 20px; }
        .hero-8-text p { color: #4a5568; font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px; }
        .hero-8-image { flex: 1; min-height: 400px; background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center; }
        .hero-8-btn { align-self: flex-start; background: #1a202c; color: white; padding: 12px 25px; text-decoration: none; border-radius: 6px; transition: 0.2s; }
        .hero-8-btn:hover { background: #2d3748; }
        @media (max-width: 900px) { .hero-8-card { flex-direction: column; width: 90%; transform: none; } .hero-8-image { min-height: 300px; } }
    </style>
    <div class="hero-8-container">
        <div class="hero-8-card">
            <div class="hero-8-text">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $subTitle; ?></p>
                <a href="#" class="hero-8-btn">Explore 3D</a>
            </div>
            <div class="hero-8-image"></div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 9: Geometric Diagonal Split
 */
function heroSection9(
    $title = "Sharp Design", 
    $subTitle = "Precision and geometry combine to create a striking layout.", 
    $image = "https://images.unsplash.com/photo-1445233566136-a2a4e2c38bc2?auto=format&fit=crop&w=1950&q=80",
    $primaryColor = "#2C3E50"
) {
    ?>
    <style>
        .hero-9-container { position: relative; height: 100vh; overflow: hidden; background: #fff; display: flex; font-family: 'Arial', sans-serif; }
        .hero-9-left { width: 55%; background: <?php echo $primaryColor; ?>; display: flex; align-items: center; padding-left: 10%; clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%); z-index: 2; position: relative; }
        .hero-9-right { position: absolute; top: 0; right: 0; width: 60%; height: 100%; background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center; z-index: 1; }
        .hero-9-content { color: white; max-width: 500px; padding-right: 50px; }
        .hero-9-content h1 { font-size: 4rem; margin: 0 0 20px; font-weight: 800; }
        .hero-9-content p { font-size: 1.2rem; opacity: 0.9; line-height: 1.5; margin-bottom: 40px; }
        .hero-9-btn { background: #E74C3C; color: white; padding: 15px 30px; text-decoration: none; font-weight: bold; border-radius: 4px; letter-spacing: 1px; }
        @media (max-width: 900px) { .hero-9-container { flex-direction: column; } .hero-9-left { width: 100%; height: 60%; clip-path: none; padding: 50px 20px; box-sizing: border-box; justify-content: center; } .hero-9-right { position: relative; width: 100%; height: 40%; } }
    </style>
    <div class="hero-9-container">
        <div class="hero-9-left">
            <div class="hero-9-content">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $subTitle; ?></p>
                <a href="#" class="hero-9-btn">DISCOVER</a>
            </div>
        </div>
        <div class="hero-9-right"></div>
    </div>
    <?php
}

/**
 * Hero Section 10: Ultra Minimal
 */
function heroSection10(
    $title = "Essential.", 
    $subTitle = "Less is more. Minimalism is not a lack of something. It's simply the perfect amount of something.", 
    $image = "https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1000&q=80"
) {
    ?>
    <style>
        .hero-10-container { display: grid; grid-template-columns: 1fr 1fr; height: 100vh; font-family: 'Times New Roman', serif; background: #fffdf9; }
        .hero-10-text { display: flex; flex-direction: column; justify-content: center; padding: 0 15%; }
        .hero-10-text h1 { font-size: 6rem; margin: 0; color: #111; letter-spacing: -2px; line-height: 0.9; }
        .hero-10-text p { font-family: 'Arial', sans-serif; margin-top: 40px; font-size: 14px; letter-spacing: 2px; text-transform: uppercase; color: #666; width: 80%; line-height: 1.8; }
        .hero-10-image { height: 100%; position: relative; overflow: hidden; }
        .hero-10-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 2s ease; }
        .hero-10-image:hover img { transform: scale(1.1); }
        .hero-10-line { width: 60px; height: 4px; background: #111; margin-top: 30px; }
        @media (max-width: 768px) { .hero-10-container { grid-template-columns: 1fr; grid-template-rows: 1fr 1fr; } .hero-10-text { padding: 40px; } .hero-10-text h1 { font-size: 4rem; } }
    </style>
    <div class="hero-10-container">
        <div class="hero-10-text">
            <h1><?php echo $title; ?></h1>
            <div class="hero-10-line"></div>
            <p><?php echo $subTitle; ?></p>
        </div>
        <div class="hero-10-image">
            <img src="<?php echo $image; ?>" alt="Minimal">
        </div>
    </div>
    <?php
}

/**
 * Hero Section 11: Aurora / Mesh Gradient
 */
function heroSection11(
    $title = "Aurora Nights", 
    $subTitle = "Soft, flowing gradients for a calm and modern aesthetic.", 
    $btnText = "Explore",
    $startColor = "#ff9a9e",
    $endColor = "#fecfef"
) {
    ?>
    <style>
        .hero-11-container { position: relative; height: 100vh; background: linear-gradient(45deg, <?php echo $startColor; ?> 0%, <?php echo $endColor; ?> 99%, <?php echo $startColor; ?> 100%); display: flex; align-items: center; justify-content: center; overflow: hidden; font-family: 'Segoe UI', sans-serif; }
        .hero-11-blob { position: absolute; filter: blur(80px); opacity: 0.8; animation: moveBlob 20s infinite alternate; }
        .hero-11-blob:nth-child(1) { top: -10%; left: -10%; width: 50vw; height: 50vw; background: purple; animation-duration: 25s; }
        .hero-11-blob:nth-child(2) { bottom: -10%; right: -10%; width: 50vw; height: 50vw; background: blue; animation-duration: 30s; }
        .hero-11-content { position: relative; z-index: 10; text-align: center; color: white; padding: 40px; background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 30px; border: 1px solid rgba(255,255,255,0.2); }
        .hero-11-content h1 { font-size: 4rem; margin: 0 0 20px; font-weight: 300; letter-spacing: -2px; }
        .hero-11-content p { font-size: 1.25rem; margin-bottom: 30px; opacity: 0.9; }
        .hero-11-btn { padding: 15px 40px; background: white; color: #333; border: none; border-radius: 50px; font-size: 1rem; font-weight: bold; cursor: pointer; transition: transform 0.3s; }
        .hero-11-btn:hover { transform: scale(1.1); }
        @keyframes moveBlob { 0% { transform: translate(0, 0) scale(1); } 100% { transform: translate(20px, -20px) scale(1.1); } }
    </style>
    <div class="hero-11-container">
        <div class="hero-11-blob"></div>
        <div class="hero-11-blob"></div>
        <div class="hero-11-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <button class="hero-11-btn"><?php echo $btnText; ?></button>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 12: Neo-Brutalism
 */
function heroSection12(
    $title = "MAKE IT POP.", 
    $subTitle = "Bold borders, high contrast, and raw layout.", 
    $btnText = "CLICK ME",
    $bgColor = "#ffcc00",
    $accentColor = "#000"
) {
    ?>
    <style>
        .hero-12-container { background: <?php echo $bgColor; ?>; min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; border: 20px solid <?php echo $accentColor; ?>; box-sizing: border-box; font-family: 'Courier New', monospace; padding: 20px; }
        .hero-12-box { background: #fff; border: 4px solid <?php echo $accentColor; ?>; padding: 40px; box-shadow: 15px 15px 0px <?php echo $accentColor; ?>; max-width: 800px; text-align: left; transform: rotate(-1deg); transition: 0.2s; }
        .hero-12-box:hover { transform: rotate(0deg); box-shadow: 10px 10px 0px <?php echo $accentColor; ?>; }
        .hero-12-box h1 { font-size: 5rem; line-height: 0.9; margin: 0 0 20px; font-weight: 900; text-transform: uppercase; }
        .hero-12-box p { font-size: 1.5rem; font-weight: bold; margin-bottom: 30px; }
        .hero-12-btn { background: <?php echo $accentColor; ?>; color: #fff; border: none; padding: 20px 40px; font-size: 1.5rem; font-weight: 900; cursor: pointer; box-shadow: 5px 5px 0px #fff; transition: 0.1s; display: inline-block; text-decoration: none; }
        .hero-12-btn:hover { transform: translate(2px, 2px); box-shadow: 3px 3px 0px #fff; }
        @media (max-width: 768px) { .hero-12-box h1 { font-size: 3rem; } .hero-12-container { border-width: 10px; } }
    </style>
    <div class="hero-12-container">
        <div class="hero-12-box">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="#" class="hero-12-btn"><?php echo $btnText; ?></a>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 13: Curved Wave Divider
 */
function heroSection13(
    $title = "Smooth Flows", 
    $subTitle = "Organic shapes connect your content seamlessly.", 
    $btnText = "Learn More",
    $bgColor = "#4facfe"
) {
    ?>
    <style>
        .hero-13-container { position: relative; min-height: 90vh; background: <?php echo $bgColor; ?>; color: white; display: flex; align-items: center; justify-content: center; text-align: center; font-family: 'Verdana', sans-serif; padding-bottom: 150px; }
        .hero-13-content { max-width: 700px; padding: 20px; z-index: 2; }
        .hero-13-content h1 { font-size: 3.5rem; margin-bottom: 20px; }
        .hero-13-content p { font-size: 1.2rem; line-height: 1.6; margin-bottom: 40px; }
        .hero-13-btn { background: white; color: <?php echo $bgColor; ?>; padding: 15px 35px; border-radius: 30px; text-decoration: none; font-weight: bold; transition: box-shadow 0.3s; }
        .hero-13-btn:hover { box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
        .hero-13-wave { position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; }
        .hero-13-wave svg { position: relative; display: block; width: calc(100% + 1.3px); height: 150px; transform: rotateY(180deg); }
        .hero-13-wave .shape-fill { fill: #ffffff; }
    </style>
    <div class="hero-13-container">
        <div class="hero-13-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="#" class="hero-13-btn"><?php echo $btnText; ?></a>
        </div>
        <div class="hero-13-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 14: Mobile App Showcase
 */
function heroSection14(
    $title = "Your App Name", 
    $subTitle = "Download the app today and experience the difference.", 
    $appStoreLink = "#",
    $playStoreLink = "#",
    $appImage = "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=800&q=80"
) {
    ?>
    <style>
        .hero-14-container { display: flex; align-items: center; justify-content: space-between; padding: 50px 10%; background: #f8f9fa; min-height: 100vh; font-family: 'Helvetica', sans-serif; overflow: hidden; }
        .hero-14-text { flex: 1; padding-right: 50px; }
        .hero-14-text h1 { font-size: 3rem; color: #333; margin-bottom: 20px; font-weight: bold; }
        .hero-14-text p { font-size: 1.1rem; color: #666; margin-bottom: 40px; max-width: 500px; }
        .hero-14-badges { display: flex; gap: 15px; }
        .hero-14-badges a { display: inline-block; padding: 10px 20px; background: #000; color: #fff; border-radius: 5px; text-decoration: none; font-size: 0.9rem; }
        .hero-14-image { flex: 1; display: flex; justify-content: center; position: relative; }
        .hero-14-image img { max-width: 300px; border-radius: 40px; box-shadow: 0 30px 60px rgba(0,0,0,0.2); border: 8px solid #000; }
        .hero-14-circle { position: absolute; width: 500px; height: 500px; border-radius: 50%; background: #e9ecef; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); }
        @media (max-width: 900px) { .hero-14-container { flex-direction: column; text-align: center; } .hero-14-text { padding-right: 0; margin-bottom: 50px; } .hero-14-badges { justify-content: center; } .hero-14-image img { max-width: 250px; } }
    </style>
    <div class="hero-14-container">
        <div class="hero-14-text">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <div class="hero-14-badges">
                <a href="<?php echo $appStoreLink; ?>"> App Store</a>
                <a href="<?php echo $playStoreLink; ?>">▶ Google Play</a>
            </div>
        </div>
        <div class="hero-14-image">
            <div class="hero-14-circle"></div>
            <img src="<?php echo $appImage; ?>" alt="App Screenshot">
        </div>
    </div>
    <?php
}

/**
 * Hero Section 15: Masonry Grid Gallery
 */
function heroSection15(
    $title = "Visual Stories", 
    $subTitle = "Capture moments. Create memories. Share your world.", 
    $btnText = "View Gallery",
    $images = [
        "https://images.unsplash.com/photo-1516483638261-f4dbaf036963?w=500",
        "https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?w=500",
        "https://images.unsplash.com/photo-1552519507-da8b1227cccf?w=500",
        "https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=500"
    ]
) {
    ?>
    <style>
        .hero-15-container { display: flex; align-items: center; padding: 50px; min-height: 100vh; background: #111; color: #fff; font-family: sans-serif; }
        .hero-15-text { flex: 1; padding: 50px; }
        .hero-15-text h1 { font-size: 4rem; margin-bottom: 20px; line-height: 1; }
        .hero-15-text p { font-size: 1.2rem; color: #aaa; margin-bottom: 40px; }
        .hero-15-btn { color: #fff; border: 1px solid #fff; padding: 15px 30px; text-decoration: none; transition: 0.3s; }
        .hero-15-btn:hover { background: #fff; color: #000; }
        .hero-15-grid { flex: 1.5; display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; height: 80vh; overflow: hidden; }
        .hero-15-grid img { width: 100%; height: 100%; object-fit: cover; border-radius: 10px; opacity: 0.7; transition: 0.5s; }
        .hero-15-grid img:hover { opacity: 1; transform: scale(1.02); }
        .hero-15-grid img:nth-child(even) { transform: translateY(40px); }
        @media (max-width: 900px) { .hero-15-container { flex-direction: column; } .hero-15-text { text-align: center; } .hero-15-grid { width: 100%; height: auto; } }
    </style>
    <div class="hero-15-container">
        <div class="hero-15-text">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="#" class="hero-15-btn"><?php echo $btnText; ?></a>
        </div>
        <div class="hero-15-grid">
            <?php foreach($images as $img): ?>
                <img src="<?php echo $img; ?>" alt="Gallery">
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 16: Editorial Magazine
 */
function heroSection16(
    $title = "The New Age of Fashion", 
    $subTitle = "By Sarah Jenkins | Oct 24, 2025", 
    $bgImage = "https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-16-container { position: relative; height: 100vh; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; font-family: 'Times New Roman', serif; }
        .hero-16-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.3); }
        .hero-16-content { position: relative; z-index: 2; background: #fff; padding: 60px 80px; max-width: 600px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.2); }
        .hero-16-content:before { content: ""; position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; border: 1px solid #ccc; pointer-events: none; }
        .hero-16-content h1 { font-size: 3rem; margin: 0 0 20px; font-style: italic; color: #111; }
        .hero-16-content p { font-family: 'Arial', sans-serif; font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase; color: #888; }
        .hero-16-line { width: 50px; height: 2px; background: #000; margin: 30px auto; }
        @media (max-width: 600px) { .hero-16-content { width: 85%; padding: 40px 20px; } .hero-16-content h1 { font-size: 2rem; } }
    </style>
    <div class="hero-16-container">
        <div class="hero-16-overlay"></div>
        <div class="hero-16-content">
            <p>Editor's Choice</p>
            <div class="hero-16-line"></div>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 17: Split Panel Interaction
 */
function heroSection17(
    $leftTitle = "For Designers", 
    $rightTitle = "For Developers", 
    $leftBtn = "Design", 
    $rightBtn = "Code",
    $leftImg = "https://images.unsplash.com/photo-1558655146-d09347e0c7a8?w=800",
    $rightImg = "https://images.unsplash.com/photo-1587620962725-abab7fe55159?w=800"
) {
    ?>
    <style>
        .hero-17-container { display: flex; height: 100vh; overflow: hidden; font-family: 'Arial', sans-serif; }
        .hero-17-split { flex: 1; position: relative; transition: all 0.5s ease-in-out; display: flex; align-items: center; justify-content: center; text-align: center; background-size: cover; background-position: center; color: white; position: relative; }
        .hero-17-split:before { content: ""; position: absolute; inset: 0; background: rgba(0,0,0,0.5); transition: 0.5s; }
        .hero-17-split:hover { flex: 2; }
        .hero-17-split:hover:before { background: rgba(0,0,0,0.3); }
        .hero-17-content { position: relative; z-index: 2; white-space: nowrap; }
        .hero-17-content h1 { font-size: 3rem; margin-bottom: 20px; }
        .hero-17-btn { padding: 15px 40px; border: 2px solid #fff; color: #fff; text-decoration: none; font-weight: bold; text-transform: uppercase; transition: 0.3s; }
        .hero-17-btn:hover { background: #fff; color: #000; }
        .hero-17-left { background-image: url('<?php echo $leftImg; ?>'); }
        .hero-17-right { background-image: url('<?php echo $rightImg; ?>'); }
        @media (max-width: 768px) { .hero-17-container { flex-direction: column; } .hero-17-split:hover { flex: 1; } }
    </style>
    <div class="hero-17-container">
        <div class="hero-17-split hero-17-left">
            <div class="hero-17-content">
                <h1><?php echo $leftTitle; ?></h1>
                <a href="#" class="hero-17-btn"><?php echo $leftBtn; ?></a>
            </div>
        </div>
        <div class="hero-17-split hero-17-right">
            <div class="hero-17-content">
                <h1><?php echo $rightTitle; ?></h1>
                <a href="#" class="hero-17-btn"><?php echo $rightBtn; ?></a>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 18: Retro Pixel Art
 */
function heroSection18(
    $title = "LEVEL UP", 
    $subTitle = "Insert coin to start your adventure.", 
    $btnText = "PLAY NOW",
    $bgColor = "#2c003e"
) {
    ?>
    <style>
        .hero-18-container { background: <?php echo $bgColor; ?>; min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; font-family: 'Courier New', monospace; color: #fff; text-align: center; }
        .hero-18-title { font-size: 5rem; text-shadow: 4px 4px 0px #ff00ff, -4px -4px 0px #00ffff; margin-bottom: 20px; letter-spacing: 10px; animation: blink 1s infinite; }
        .hero-18-desc { font-size: 1.5rem; margin-bottom: 50px; color: #00ff00; text-transform: uppercase; }
        .hero-18-btn { background: #ff0000; color: white; border: 4px solid #fff; padding: 20px 40px; font-size: 1.5rem; cursor: pointer; text-shadow: 2px 2px 0 #000; box-shadow: 0 8px 0 #8b0000, 0 15px 20px rgba(0,0,0,0.4); text-transform: uppercase; transition: 0.1s; position: relative; top: 0; }
        .hero-18-btn:active { top: 8px; box-shadow: 0 0 0 #8b0000, 0 0 5px rgba(0,0,0,0.4); }
        .hero-18-pixel { width: 100px; height: 100px; background: #fff; position: absolute; opacity: 0.1; animation: float 5s infinite; }
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
    </style>
    <div class="hero-18-container">
        <div class="hero-18-pixel" style="top: 20%; left: 20%;"></div>
        <div class="hero-18-pixel" style="bottom: 20%; right: 20%; background: blue;"></div>
        <h1 class="hero-18-title"><?php echo $title; ?></h1>
        <p class="hero-18-desc"><?php echo $subTitle; ?></p>
        <button class="hero-18-btn"><?php echo $btnText; ?></button>
    </div>
    <?php
}

/**
 * Hero Section 19: Neumorphism (Soft UI)
 */
function heroSection19(
    $title = "Soft UI Design", 
    $subTitle = "Subtle depth and clean aesthetics.", 
    $btnText = "Get Started",
    $bgColor = "#e0e5ec"
) {
    ?>
    <style>
        .hero-19-container { background: <?php echo $bgColor; ?>; min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Arial', sans-serif; color: #4d4d4d; }
        .hero-19-card { width: 600px; padding: 60px; border-radius: 50px; background: <?php echo $bgColor; ?>; box-shadow: 20px 20px 60px #bebebe, -20px -20px 60px #ffffff; text-align: center; }
        .hero-19-card h1 { font-size: 3rem; margin-bottom: 20px; color: #555; }
        .hero-19-card p { margin-bottom: 40px; line-height: 1.6; }
        .hero-19-btn { padding: 15px 40px; border-radius: 30px; border: none; background: <?php echo $bgColor; ?>; box-shadow: 5px 5px 10px #bebebe, -5px -5px 10px #ffffff; color: #555; font-weight: bold; font-size: 1rem; cursor: pointer; transition: 0.2s; outline: none; }
        .hero-19-btn:active { box-shadow: inset 5px 5px 10px #bebebe, inset -5px -5px 10px #ffffff; }
        .hero-19-circle { width: 150px; height: 150px; border-radius: 50%; background: <?php echo $bgColor; ?>; box-shadow: inset 5px 5px 10px #bebebe, inset -5px -5px 10px #ffffff; margin: 0 auto 40px; display: flex; align-items: center; justify-content: center; font-size: 3rem; color: #777; }
    </style>
    <div class="hero-19-container">
        <div class="hero-19-card">
            <div class="hero-19-circle">S</div>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <button class="hero-19-btn"><?php echo $btnText; ?></button>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 20: Fullscreen Slider Theme
 */
function heroSection20(
    $title = "Featured Collection", 
    $subTitle = "Discover the latest trends in our summer 2025 release.", 
    $btnText = "Shop Now",
    $image = "https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-20-container { position: relative; height: 100vh; background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center; display: flex; align-items: center; padding-left: 10%; font-family: 'Segoe UI', sans-serif; color: #fff; }
        .hero-20-overlay { position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, transparent 100%); }
        .hero-20-content { position: relative; z-index: 2; max-width: 500px; animation: slideIn 1s ease-out; }
        .hero-20-content h1 { font-size: 4rem; margin-bottom: 20px; line-height: 1.1; }
        .hero-20-content p { font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9; }
        .hero-20-btn { padding: 15px 40px; background: #fff; color: #000; text-decoration: none; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s; }
        .hero-20-btn:hover { background: #000; color: #fff; }
        .hero-20-indicators { position: absolute; bottom: 50px; left: 10%; display: flex; gap: 10px; z-index: 2; }
        .hero-20-dot { width: 50px; height: 4px; background: rgba(255,255,255,0.3); cursor: pointer; }
        .hero-20-dot.active { background: #fff; }
        @keyframes slideIn { from { opacity: 0; transform: translateX(-50px); } to { opacity: 1; transform: translateX(0); } }
    </style>
    <div class="hero-20-container">
        <div class="hero-20-overlay"></div>
        <div class="hero-20-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="#" class="hero-20-btn"><?php echo $btnText; ?></a>
        </div>
        <div class="hero-20-indicators">
            <div class="hero-20-dot active"></div>
            <div class="hero-20-dot"></div>
            <div class="hero-20-dot"></div>
        </div>
    </div>
    <?php


}

/**
 * Hero Section 21: Video Text Mask
 */
function heroSection21(
    $title = "NATURE", 
    $subTitle = "The world is full of magical things patiently waiting for our wits to grow sharper.", 
    $videoUrl = "https://assets.mixkit.co/videos/preview/mixkit-forest-stream-in-the-sunlight-529-large.mp4"
) {
    ?>
    <style>
        .hero-21-container { display: flex; align-items: center; justify-content: center; height: 100vh; background: #000; font-family: 'Arial Black', sans-serif; overflow: hidden; position: relative; }
        .hero-21-video { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.6; }
        .hero-21-content { position: relative; z-index: 2; text-align: center; }
        .hero-21-title { font-size: 15vw; color: white; margin: 0; background: url('<?php echo $videoUrl; ?>'); background-size: cover; -webkit-background-clip: text; color: rgba(255,255,255,0.1); background-clip: text; }
        .hero-21-subtitle { color: white; font-size: 1.5rem; letter-spacing: 2px; text-transform: uppercase; font-weight: normal; margin-top: -20px; font-family: 'Arial', sans-serif; }
    </style>
    <div class="hero-21-container">
        <video class="hero-21-video" autoplay muted loop src="<?php echo $videoUrl; ?>"></video>
        <div class="hero-21-content">
            <h1 class="hero-21-title"><?php echo $title; ?></h1>
            <p class="hero-21-subtitle"><?php echo $subTitle; ?></p>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 22: Parallax Scroll
 */
function heroSection22(
    $title = "Parallax Effect", 
    $subTitle = "Scrolling creates a sense of depth and immersion.", 
    $btnText = "Get Started",
    $bgImage = "https://images.unsplash.com/photo-1542281286-9e0a56e2e1a0?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-22-container { height: 100vh; background-image: url('<?php echo $bgImage; ?>'); background-attachment: fixed; background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; color: white; font-family: 'Verdana', sans-serif; position: relative; }
        .hero-22-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.4); }
        .hero-22-content { position: relative; z-index: 2; text-align: center; padding: 40px; background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 10px; }
        .hero-22-content h1 { font-size: 4rem; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 3px; }
        .hero-22-btn { margin-top: 30px; display: inline-block; padding: 15px 40px; background: #fff; color: #000; text-decoration: none; font-weight: bold; transition: 0.3s; }
        .hero-22-btn:hover { background: #000; color: #fff; }
    </style>
    <div class="hero-22-container">
        <div class="hero-22-overlay"></div>
        <div class="hero-22-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <a href="#" class="hero-22-btn"><?php echo $btnText; ?></a>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 23: Real Estate Search
 */
function heroSection23(
    $title = "Find Your Dream Home", 
    $subTitle = "Search thousands of listings in your area.", 
    $bgImage = "https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-23-container { height: 90vh; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; font-family: 'Segoe UI', sans-serif; position: relative; }
        .hero-23-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.2)); }
        .hero-23-content { position: relative; z-index: 2; width: 80%; max-width: 900px; text-align: center; }
        .hero-23-content h1 { font-size: 3.5rem; margin-bottom: 10px; text-shadow: 2px 2px 5px rgba(0,0,0,0.5); }
        .hero-23-search { display: flex; background: white; padding: 10px; border-radius: 8px; margin-top: 30px; box-shadow: 0 10px 25px rgba(0,0,0,0.3); }
        .hero-23-input { flex: 1; border: none; padding: 15px; font-size: 1.1rem; outline: none; }
        .hero-23-btn { background: #2ecc71; color: white; border: none; padding: 15px 40px; font-size: 1.1rem; font-weight: bold; border-radius: 6px; cursor: pointer; transition: 0.2s; }
        .hero-23-btn:hover { background: #27ae60; }
        @media (max-width: 768px) { .hero-23-search { flex-direction: column; } .hero-23-btn { width: 100%; margin-top: 10px; } }
    </style>
    <div class="hero-23-container">
        <div class="hero-23-overlay"></div>
        <div class="hero-23-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
            <form class="hero-23-search" onsubmit="event.preventDefault(); alert('Search started!');">
                <input type="text" class="hero-23-input" placeholder="City, Zip, or Address...">
                <button type="submit" class="hero-23-btn">Search</button>
            </form>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 24: Event Countdown
 */
function heroSection24(
    $title = "Conference 2025", 
    $date = "December 31, 2025 00:00:00",
    $bgImage = "https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-24-container { height: 100vh; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; font-family: 'Arial', sans-serif; text-align: center; position: relative; }
        .hero-24-overlay { position: absolute; inset: 0; background: rgba(50, 20, 100, 0.8); }
        .hero-24-content { position: relative; z-index: 2; }
        .hero-24-title { font-size: 4rem; margin-bottom: 40px; font-weight: 700; letter-spacing: 2px; }
        .hero-24-timer { display: flex; gap: 30px; justify-content: center; flex-wrap: wrap; }
        .hero-24-box { background: rgba(255,255,255,0.1); padding: 20px 30px; border-radius: 10px; min-width: 100px; border: 1px solid rgba(255,255,255,0.2); flex: 1; }
        .hero-24-number { font-size: 3rem; font-weight: bold; display: block; }
        .hero-24-label { font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; opacity: 0.8; }
        @media (max-width: 768px) {
            .hero-24-title { font-size: 2.5rem; margin-bottom: 20px; }
            .hero-24-timer { gap: 10px; padding: 0 10px; }
            .hero-24-box { min-width: 70px; padding: 15px 10px; }
            .hero-24-number { font-size: 2rem; }
            .hero-24-label { font-size: 0.7rem; }
        }
    </style>
    <div class="hero-24-container">
        <div class="hero-24-overlay"></div>
        <div class="hero-24-content">
            <div class="hero-24-title"><?php echo $title; ?></div>
            <div class="hero-24-timer" id="timer-24">
                <div class="hero-24-box"><span class="hero-24-number">00</span><span class="hero-24-label">Days</span></div>
                <div class="hero-24-box"><span class="hero-24-number">00</span><span class="hero-24-label">Hours</span></div>
                <div class="hero-24-box"><span class="hero-24-number">00</span><span class="hero-24-label">Mins</span></div>
                <div class="hero-24-box"><span class="hero-24-number">00</span><span class="hero-24-label">Secs</span></div>
            </div>
            <script>
                (function(){
                    const target = new Date("<?php echo $date; ?>").getTime();
                    const boxes = document.querySelectorAll('#timer-24 .hero-24-number');
                    setInterval(() => {
                        const now = new Date().getTime();
                        const dist = target - now;
                        if(dist < 0) return;
                        boxes[0].innerText = Math.floor(dist / (1000 * 60 * 60 * 24));
                        boxes[1].innerText = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        boxes[2].innerText = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
                        boxes[3].innerText = Math.floor((dist % (1000 * 60)) / 1000);
                    }, 1000);
                })();
            </script>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 25: Social Proof / Testimonial
 */
function heroSection25(
    $quote = "This product completely changed the way we work. It's simply amazing.",
    $author = "Jane Doe",
    $role = "CEO, TechCorp",
    $avatar = "https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=400&q=80",
    $bg = "#F3F4F6"
) {
    ?>
    <style>
        .hero-25-container { background: <?php echo $bg; ?>; min-height: 80vh; display: flex; align-items: center; justify-content: center; font-family: 'Georgia', serif; padding: 40px; text-align: center; }
        .hero-25-content { max-width: 900px; position: relative; }
        .hero-25-quote { font-size: 3rem; font-style: italic; color: #111; line-height: 1.3; margin-bottom: 40px; }
        .hero-25-meta { display: flex; flex-direction: column; align-items: center; font-family: 'Arial', sans-serif; }
        .hero-25-avatar { width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 4px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .hero-25-author { font-weight: bold; font-size: 1.2rem; color: #333; }
        .hero-25-role { color: #666; font-size: 0.9rem; }
        .hero-25-mark { font-size: 8rem; position: absolute; top: -50px; left: -50px; color: rgba(0,0,0,0.05); font-family: sans-serif; pointer-events: none; }
    </style>
    <div class="hero-25-container">
        <div class="hero-25-content">
            <span class="hero-25-mark">“</span>
            <div class="hero-25-quote"><?php echo $quote; ?></div>
            <div class="hero-25-meta">
                <img src="<?php echo $avatar; ?>" alt="Avatar" class="hero-25-avatar">
                <div class="hero-25-author"><?php echo $author; ?></div>
                <div class="hero-25-role"><?php echo $role; ?></div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 26: Before / After Slider (CSS)
 */
function heroSection26(
    $title = "Transformation", 
    $text = "Slide to see the difference.", 
    $beforeImg = "https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?w=800&q=80&fit=crop",
    $afterImg = "https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=800&q=80&fit=crop"
) {
    ?>
    <style>
        .hero-26-container { background: #222; min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; font-family: sans-serif; }
        .hero-26-slider { position: relative; width: 800px; height: 500px; overflow: hidden; border: 4px solid #fff; border-radius: 10px; cursor: col-resize; }
        .hero-26-img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
        .hero-26-overlay { position: absolute; top: 0; left: 0; bottom: 0; width: 50%; overflow: hidden; border-right: 4px solid white; resize: horizontal; max-width: 100%; min-width: 0%; box-sizing: border-box; z-index: 10; cursor: col-resize; }
        /* Note: Pure CSS resize is tricky for touch, JS enhancement recommended for prod, simplified here for pure styling demo */
        .hero-26-text { text-align: center; margin-bottom: 30px; }
        .hero-26-text h1 { margin: 0 0 10px; font-size: 2.5rem; }
    </style>
    <div class="hero-26-container">
        <div class="hero-26-text">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $text; ?></p>
        </div>
        <div class="hero-26-slider">
            <img src="<?php echo $afterImg; ?>" class="hero-26-img" alt="After">
            <div class="hero-26-overlay" style="width: 50%; resize: horizontal; opacity: 1;">
                <img src="<?php echo $beforeImg; ?>" style="width: 800px; height: 500px; object-fit: cover;" alt="Before">
            </div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 27: Rounded Split Layout
 */
function heroSection27(
    $title = "Modern & Clean", 
    $desc = "A balanced split layout with rounded organic shapes and plenty of whitespace.", 
    $btnText = "Get Started",
    $image = "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-27-container { display: flex; align-items: center; justify-content: space-between; min-height: 90vh; font-family: 'Segoe UI', sans-serif; padding: 50px 10%; background: #fdfdfd; gap: 50px; }
        .hero-27-content { flex: 1; max-width: 500px; }
        .hero-27-content h1 { font-size: 3.5rem; color: #2d3436; margin-bottom: 20px; font-weight: 800; line-height: 1.1; }
        .hero-27-content p { font-size: 1.2rem; color: #636e72; line-height: 1.7; margin-bottom: 40px; }
        .hero-27-btn { padding: 15px 40px; background: #6c5ce7; color: white; text-decoration: none; border-radius: 50px; font-weight: bold; transition: 0.3s; box-shadow: 0 10px 20px rgba(108, 92, 231, 0.3); }
        .hero-27-btn:hover { background: #5649b9; transform: translateY(-3px); }
        .hero-27-image-wrapper { flex: 1; position: relative; }
        .hero-27-image { width: 100%; height: 500px; object-fit: cover; border-radius: 30px 0 30px 0; box-shadow: 20px 20px 0 #dfe6e9; }
        @media (max-width: 900px) { .hero-27-container { flex-direction: column; text-align: center; } .hero-27-image { height: 300px; } }
    </style>
    <div class="hero-27-container">
        <div class="hero-27-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $desc; ?></p>
            <a href="#" class="hero-27-btn"><?php echo $btnText; ?></a>
        </div>
        <div class="hero-27-image-wrapper">
            <img src="<?php echo $image; ?>" class="hero-27-image" alt="Hero">
        </div>
    </div>
    <?php
}


/**
 * Hero Section 28: Shape Reveal Hover
 */
function heroSection28(
    $title = "Shape Reveal",
    $bgImage = "https://images.unsplash.com/photo-1550684848-fac1c5b4e853?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-28-container { height: 100vh; background: #111; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; font-family: sans-serif; }
        .hero-28-text { position: relative; z-index: 2; color: white; font-size: 5rem; font-weight: 900; pointer-events: none; mix-blend-mode: difference; }
        .hero-28-shape { width: 400px; height: 400px; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; border-radius: 50%; position: absolute; animation: floatShape 10s infinite alternate; transition: 0.2s; filter: brightness(1.2); }
        .hero-28-container:hover .hero-28-shape { transform: scale(1.5); }
        @keyframes floatShape { 0% { top: 10%; left: 10%; } 25% { top: 50%; left: 70%; } 50% { top: 80%; left: 20%; } 75% { top: 20%; left: 60%; } 100% { top: 10%; left: 10%; } }
    </style>
    <div class="hero-28-container">
        <div class="hero-28-shape"></div>
        <div class="hero-28-text"><?php echo $title; ?></div>
    </div>
    <?php
}

/**
 * Hero Section 29: Typewriter Effect
 */
function heroSection29(
    $staticText = "We Build", 
    $typeText = "Amazing Websites.", 
    $btnText = "Hire Us",
    $bgColor = "#2c3e50"
) {
    ?>
    <style>
        .hero-29-container { height: 100vh; background: <?php echo $bgColor; ?>; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; font-family: 'Courier New', monospace; }
        .hero-29-wrapper { display: inline-flex; align-items: baseline; font-size: 3rem; font-weight: bold; }
        .hero-29-static { margin-right: 15px; }
        .hero-29-type { overflow: hidden; border-right: .15em solid orange; white-space: nowrap; margin: 0; letter-spacing: -2px; animation: typing 3.5s steps(30, end), blink-caret .75s step-end infinite; }
        .hero-29-btn { margin-top: 40px; padding: 15px 30px; background: orange; color: white; border: none; font-size: 1.2rem; cursor: pointer; border-radius: 5px; font-weight: bold; }
        @keyframes typing { from { width: 0 } to { width: 100% } }
        @keyframes blink-caret { from, to { border-color: transparent } 50% { border-color: orange; } }
        @media (max-width: 768px) {
            .hero-29-wrapper { flex-direction: column; font-size: 2rem; text-align: center; }
            .hero-29-static { margin-right: 0; margin-bottom: 15px; }
            .hero-29-type { font-size: 1.5rem; white-space: normal; border-right: none; animation: none; }
            /* Typewriter hard to maintain on multiline mobile, simplifying to just text or smaller single line */
            /* a better approach for mobile typewriter is just smaller font */
            .hero-29-wrapper { flex-direction: column; font-size: 1.8rem; }
            .hero-29-type { white-space: nowrap; font-size: 1.8rem; border-right: .15em solid orange; animation: typing 3.5s steps(30, end), blink-caret .75s step-end infinite; }
        }
        @media (max-width: 480px) {
            .hero-29-wrapper { font-size: 1.2rem; }
            .hero-29-type { font-size: 1.2rem; }
        }
    </style>
    <div class="hero-29-container">
        <div class="hero-29-wrapper">
            <span class="hero-29-static"><?php echo $staticText; ?></span>
            <span class="hero-29-type"><?php echo $typeText; ?></span>
        </div>
        <button class="hero-29-btn"><?php echo $btnText; ?></button>
    </div>
    <?php
}

/**
 * Hero Section 30: Modern Glassmorphism
 */
function heroSection30(
    $title = "Future Vision", 
    $desc = "Experience the next generation of digital interfaces. sleek, fast, and beautiful.",
    $btnText = "Explore Now",
    $bgImage = "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-30-container { height: 100vh; background-image: url('<?php echo $bgImage; ?>'); background-size: cover; background-position: center; font-family: 'Poppins', sans-serif; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }
        .hero-30-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.3); }
        .hero-30-card { position: relative; z-index: 2; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); padding: 60px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.2); text-align: center; color: white; max-width: 600px; box-shadow: 0 25px 45px rgba(0,0,0,0.2); transform: translateY(0); transition: 0.5s; }
        .hero-30-card:hover { transform: translateY(-10px); box-shadow: 0 35px 60px rgba(0,0,0,0.3); }
        .hero-30-card h1 { font-size: 4rem; margin-bottom: 20px; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.2); letter-spacing: -1px; line-height: 1.1; }
        .hero-30-card p { font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9; line-height: 1.6; }
        .hero-30-btn { padding: 18px 45px; background: white; color: #333; text-decoration: none; border-radius: 50px; font-weight: bold; transition: 0.3s; display: inline-block; box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .hero-30-btn:hover { background: #333; color: white; transform: scale(1.05); }
        .hero-30-glow { position: absolute; width: 300px; height: 300px; background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0) 70%); top: -100px; left: -100px; border-radius: 50%; z-index: 1; pointer-events: none; opacity: 0.6; animation: floatGlow 10s infinite alternate; }
        @keyframes floatGlow { 0% { transform: translate(0, 0); } 100% { transform: translate(50px, 50px); } }
        @media (max-width: 768px) {
            .hero-30-card { padding: 40px 20px; margin: 20px; }
            .hero-30-card h1 { font-size: 2.5rem; }
        }
    </style>
    <div class="hero-30-container">
        <div class="hero-30-overlay"></div>
        <div class="hero-30-glow"></div>
        <div class="hero-30-card">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $desc; ?></p>
            <a href="#" class="hero-30-btn"><?php echo $btnText; ?></a>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 31: Morphing Background
 */
function heroSection31(
    $title = "Morphing Blobs", 
    $bgColor = "#ee5522"
) {
    ?>
    <style>
        .hero-31-container { height: 100vh; background: <?php echo $bgColor; ?>; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative; color: white; font-family: sans-serif; }
        .hero-31-shape { position: absolute; width: 60vh; height: 60vh; background: linear-gradient(120deg, #ff9966, #ff5e62); border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; opacity: 0.8; animation: morph 10s infinite alternate; }
        .hero-31-content { position: relative; z-index: 2; text-align: center; }
        .hero-31-content h1 { font-size: 5rem; margin: 0; }
        @keyframes morph { 0% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; transform: rotate(0deg); } 100% { border-radius: 70% 30% 30% 70% / 60% 40% 60% 40%; transform: rotate(360deg); } }
    </style>
    <div class="hero-31-container">
        <div class="hero-31-shape"></div>
        <div class="hero-31-content"><h1><?php echo $title; ?></h1></div>
    </div>
    <?php
}

/**
 * Hero Section 32: Floating Particles (CSS Only)
 */
function heroSection32(
    $title = "Particles",
    $bg = "#111"
) {
    ?>
    <style>
        .hero-32-container { height: 100vh; background: <?php echo $bg; ?>; position: relative; overflow: hidden; color: white; display: flex; align-items: center; justify-content: center; font-family: sans-serif; }
        .hero-32-particle { position: absolute; width: 10px; height: 10px; background: rgba(255,255,255,0.5); border-radius: 50%; bottom: -20px; animation: rise 10s infinite linear; }
        .hero-32-particle:nth-child(1) { left: 10%; animation-duration: 8s; width: 15px; height: 15px; }
        .hero-32-particle:nth-child(2) { left: 30%; animation-duration: 12s; width: 6px; height: 6px; }
        .hero-32-particle:nth-child(3) { left: 70%; animation-duration: 15s; width: 20px; height: 20px; }
        .hero-32-particle:nth-child(4) { left: 90%; animation-duration: 9s; }
        @keyframes rise { 0% { bottom: -20px; transform: translateX(0); opacity: 1; } 100% { bottom: 100vh; transform: translateX(50px); opacity: 0; } }
    </style>
    <div class="hero-32-container">
        <div class="hero-32-particle"></div><div class="hero-32-particle"></div>
        <div class="hero-32-particle"></div><div class="hero-32-particle"></div>
        <h1><?php echo $title; ?></h1>
    </div>
    <?php
}

/**
 * Hero Section 33: Diagonal Glitch
 */
function heroSection33(
    $title = "GLITCH", 
    $image = "https://images.unsplash.com/photo-1599839575945-a9e5af0c3fa5?w=1200&q=80"
) {
    ?>
    <style>
        .hero-33-container { height: 100vh; background: #000; display: flex; align-items: center; justify-content: center; overflow: hidden; font-family: 'Arial Black', sans-serif; position: relative; }
        .hero-33-img { position: absolute; top:0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.6; }
        .hero-33-text { font-size: 8rem; color: white; position: relative; z-index: 2; animation: glitchSkew 3s infinite linear alternate-reverse; }
        .hero-33-text::before, .hero-33-text::after { content: attr(data-text); position: absolute; left: 0; top: 0; width: 100%; height: 100%; background: #000; overflow: hidden; clip: rect(0,900px,0,0); }
        .hero-33-text::before { left: 2px; text-shadow: -2px 0 #ff00c1; animation: glitch-anim-1 2s infinite linear alternate-reverse; }
        .hero-33-text::after { left: -2px; text-shadow: -2px 0 #00fff9; animation: glitch-anim-2 3s infinite linear alternate-reverse; }
        @keyframes glitch-anim-1 { 0% { clip: rect(20px, 9999px, 80px, 0); } 100% { clip: rect(60px, 9999px, 10px, 0); } }
        @keyframes glitch-anim-2 { 0% { clip: rect(50px, 9999px, 30px, 0); } 100% { clip: rect(10px, 9999px, 90px, 0); } }
    </style>
    <div class="hero-33-container">
        <img src="<?php echo $image; ?>" class="hero-33-img">
        <div class="hero-33-text" data-text="<?php echo $title; ?>"><?php echo $title; ?></div>
    </div>
    <?php
}

/**
 * Hero Section 34: Isometric 3D Grid
 */
function heroSection34(
    $title = "Isometric View",
    $color = "#444"
) {
    ?>
    <style>
        .hero-34-container { height: 100vh; background: #eee; overflow: hidden; position: relative; display: flex; align-items: center; padding-left: 100px; font-family: sans-serif; }
        .hero-34-grid { position: absolute; right: -20%; top: -20%; display: grid; grid-template-columns: repeat(4, 200px); gap: 20px; transform: rotateX(45deg) rotateZ(-45deg); opacity: 0.5; }
        .hero-34-card { width: 200px; height: 300px; background: <?php echo $color; ?>; border-radius: 20px; box-shadow: 10px 10px 30px rgba(0,0,0,0.2); transition: 0.3s; }
        .hero-34-card:hover { transform: translate(-10px, -10px); background: #222; }
        .hero-34-content { position: relative; z-index: 2; width: 40%; }
        .hero-34-content h1 { font-size: 3.5rem; margin-bottom: 20px; }
    </style>
    <div class="hero-34-container">
        <div class="hero-34-content">
            <h1><?php echo $title; ?></h1>
            <p>A unique perspective for your projects.</p>
        </div>
        <div class="hero-34-grid">
            <?php for($i=0; $i<12; $i++) echo "<div class='hero-34-card'></div>"; ?>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 35: Horizontal Gallery Scroll
 */
/**
 * Hero Section 35: Cinematic Infinite Scroll
 */
function heroSection35(
    $title = "Moments Captured",
    $images = [
        "https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=1000&q=80",
        "https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=1000&q=80",
        "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1000&q=80",
        "https://images.unsplash.com/photo-1533174072545-e8d4aa97edf9?auto=format&fit=crop&w=1000&q=80",
        "https://images.unsplash.com/photo-1516455207990-7a41ce80f7ee?auto=format&fit=crop&w=1000&q=80"
    ]
) {
    ?>
    <style>
        .hero-35-container { padding: 0; background: #000; overflow: hidden; font-family: 'Playfair Display', serif; display: flex; flex-direction: column; justify-content: center; min-height: 80vh; position: relative; }
        .hero-35-title { text-align: center; color: white; font-size: 5rem; margin-bottom: 50px; position: relative; z-index: 2; mix-blend-mode: exclusion; pointer-events: none; }
        .hero-35-scroll-wrapper { white-space: nowrap; overflow: hidden; display: flex; }
        .hero-35-track { display: flex; animation: scrollMarquee 40s linear infinite; gap: 30px; padding: 0 15px; }
        .hero-35-item { flex: none; width: 500px; height: 350px; border-radius: 10px; overflow: hidden; position: relative; transition: 0.5s; filter: grayscale(100%); opacity: 0.7; }
        .hero-35-item:hover { filter: grayscale(0%); opacity: 1; transform: scale(1.05); z-index: 2; box-shadow: 0 20px 50px rgba(255,255,255,0.2); }
        .hero-35-item img { width: 100%; height: 100%; object-fit: cover; }
        @keyframes scrollMarquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        /* Clone visuals for infinite loop illusion */
        @media (max-width: 768px) { 
            .hero-35-title { font-size: 3rem; margin-bottom: 30px; }
            .hero-35-item { width: 300px; height: 200px; }
        }
    </style>
    <div class="hero-35-container">
        <h1 class="hero-35-title"><?php echo $title; ?></h1>
        <div class="hero-35-scroll-wrapper">
            <div class="hero-35-track">
                <?php foreach(array_merge($images, $images) as $img): ?>
                    <div class="hero-35-item"><img src="<?php echo $img; ?>" loading="lazy"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 36: 3D Perspective Pricing
 */
function heroSection36(
    $title = "Futuristic Pricing",
    $subTitle = "Next-generation plans for next-generation builders.",
    $bg = "#0a0a0c"
) {
    ?>
    <style>
        .hero-36-container { 
            min-height: 100vh; 
            background: <?php echo $bg; ?>; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            font-family: 'Inter', sans-serif; 
            padding: 100px 20px;
            box-sizing: border-box;
            color: white;
            position: relative;
            overflow: hidden;
            perspective: 2000px;
        }

        /* Ambient Background Glows */
        .hero-36-glow { 
            position: absolute; 
            width: 600px; 
            height: 600px; 
            background: radial-gradient(circle, rgba(108, 92, 231, 0.15) 0%, transparent 70%); 
            filter: blur(80px); 
            z-index: 1;
            pointer-events: none;
        }

        .hero-36-header { 
            text-align: center; 
            margin-bottom: 80px; 
            position: relative; 
            z-index: 10; 
        }
        .hero-36-header h1 { 
            font-size: clamp(2.5rem, 5vw, 4rem); 
            font-weight: 900; 
            margin-bottom: 15px; 
            background: linear-gradient(135deg, #fff 30%, #a29bfe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-36-header p { font-size: 1.2rem; color: #888; max-width: 600px; margin: 0 auto; }

        .hero-36-scene {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            transform-style: preserve-3d;
            position: relative;
            z-index: 5;
            padding-bottom: 40px;
        }

        .hero-36-card {
            width: 300px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 30px;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            transform-style: preserve-3d;
        }

        /* Initial 3D Rotation */
        .hero-36-card.left { transform: rotateY(25deg) translateZ(-50px); }
        .hero-36-card.center { transform: translateZ(50px); z-index: 2; border-color: rgba(108, 92, 231, 0.5); }
        .hero-36-card.right { transform: rotateY(-25deg) translateZ(-50px); }

        .hero-36-card:hover {
            transform: translateZ(150px) rotateY(0deg) !important;
            background: rgba(255, 255, 255, 0.06);
            border-color: #6c5ce7;
            box-shadow: 0 30px 60px rgba(0,0,0,0.5), 0 0 40px rgba(108, 92, 231, 0.2);
            z-index: 100;
        }

        .hero-36-card.featured::before {
            content: 'POPULAR';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%) translateZ(20px);
            background: #6c5ce7;
            color: white;
            padding: 4px 12px;
            font-size: 0.7rem;
            font-weight: 900;
            border-radius: 20px;
            letter-spacing: 1px;
        }

        .hero-36-card h3 { font-size: 1.5rem; margin-bottom: 10px; opacity: 0.7; }
        .hero-36-price { font-size: 3.5rem; font-weight: 800; margin-bottom: 30px; }
        .hero-36-price span { font-size: 1rem; opacity: 0.5; font-weight: 400; }

        .hero-36-features { list-style: none; padding: 0; margin: 0 0 40px; text-align: left; }
        .hero-36-features li { padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.05); font-size: 0.9rem; color: #ccc; }
        .hero-36-features li i { color: #6c5ce7; margin-right: 10px; }

        .hero-36-btn {
            display: block;
            width: 100%;
            padding: 16px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 12px;
            font-weight: bold;
            transition: 0.3s;
        }
        .hero-36-card:hover .hero-36-btn { background: #6c5ce7; border-color: #6c5ce7; }

        @media (max-width: 1024px) {
            .hero-36-scene { flex-direction: column; gap: 30px; transform: none; }
            .hero-36-card { transform: none !important; width: 100%; max-width: 400px; }
            .hero-36-container { perspective: none; }
        }
    </style>
    <div class="hero-36-container">
        <div class="hero-36-glow" style="top: 10%; left: -5%;"></div>
        <div class="hero-36-glow" style="bottom: 10%; right: -5%;"></div>

        <div class="hero-36-header">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
        </div>

        <div class="hero-36-scene">
            <!-- Basic -->
            <div class="hero-36-card left">
                <h3>Starter</h3>
                <div class="hero-36-price">$19<span>/mo</span></div>
                <ul class="hero-36-features">
                    <li><i class="fas fa-check"></i> 5 Projects</li>
                    <li><i class="fas fa-check"></i> Community Support</li>
                    <li><i class="fas fa-check"></i> 2GB Analytics</li>
                </ul>
                <a href="#" class="hero-36-btn">Choose Starter</a>
            </div>

            <!-- Pro -->
            <div class="hero-36-card center featured">
                <h3>Pro</h3>
                <div class="hero-36-price">$49<span>/mo</span></div>
                <ul class="hero-36-features">
                    <li><i class="fas fa-check"></i> Unlimited Projects</li>
                    <li><i class="fas fa-check"></i> 24/7 Priority Support</li>
                    <li><i class="fas fa-check"></i> Advanced Insights</li>
                </ul>
                <a href="#" class="hero-36-btn">Go Professional</a>
            </div>

            <!-- Enterprise -->
            <div class="hero-36-card right">
                <h3>Elite</h3>
                <div class="hero-36-price">$99<span>/mo</span></div>
                <ul class="hero-36-features">
                    <li><i class="fas fa-check"></i> custom Solutions</li>
                    <li><i class="fas fa-check"></i> Dedicated Manager</li>
                    <li><i class="fas fa-check"></i> On-premise Scaling</li>
                </ul>
                <a href="#" class="hero-36-btn">Contact Elite</a>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 37: Asymmetric Magazine
 */
function heroSection37(
    $title = "Culture & Art",
    $img1 = "https://images.unsplash.com/photo-1549281899-f75600a24107?w=800",
    $img2 = "https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=800"
) {
    ?>
    <style>
        .hero-37-container { display: flex; padding: 100px 5%; align-items: center; font-family: 'Georgia', serif; background: #fff8f0; }
        .hero-37-text { flex: 1; margin-right: -50px; z-index: 2; background: white; padding: 50px; box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .hero-37-grid { flex: 1.5; display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 20px; }
        .hero-37-grid img { width: 100%; height: 100%; object-fit: cover; }
    </style>
    <div class="hero-37-container">
        <div class="hero-37-text">
            <h1><?php echo $title; ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="hero-37-grid">
            <img src="<?php echo $img1; ?>">
            <img style="margin-top: 50px;" src="<?php echo $img2; ?>">
        </div>
    </div>
    <?php
}

/**
 * Hero Section 38: Ribbon / Badge Theme
 */
function heroSection38(
    $title = "Grand Opening",
    $badgeText = "50% OFF"
) {
    ?>
    <style>
        .hero-38-container { height: 80vh; background: #fff; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; border: 10px solid #d35400; box-sizing: border-box; font-family: sans-serif; }
        .hero-38-ribbon { position: absolute; top: 40px; right: -40px; background: #d35400; color: white; width: 200px; text-align: center; padding: 10px; transform: rotate(45deg); font-weight: bold; box-shadow: 0 5px 10px rgba(0,0,0,0.2); }
        .hero-38-box { text-align: center; border: 2px dashed #d35400; padding: 60px; }
        .hero-38-box h1 { font-size: 4rem; color: #d35400; margin: 0; }
    </style>
    <div class="hero-38-container">
        <div class="hero-38-ribbon"><?php echo $badgeText; ?></div>
        <div class="hero-38-box">
            <h1><?php echo $title; ?></h1>
            <p>Don't miss out on our special event.</p>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 39: Chat Interface Simulation
 */
/**
 * Hero Section 39: Modern Chat Interaction
 */
function heroSection39(
    $title = "Instant Connections",
    $subTitle = "Engage your visitors with real-time support simulations.",
    $bg = "linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%)"
) {
    ?>
    <style>
        .hero-39-container { min-height: 90vh; background: <?php echo $bg; ?>; display: flex; align-items: center; justify-content: center; font-family: 'Inter', sans-serif; padding: 50px; box-sizing: border-box; overflow: hidden; }
        .hero-39-content { display: flex; align-items: center; justify-content: space-between; max-width: 1100px; width: 100%; gap: 60px; }
        .hero-39-text { flex: 1; }
        .hero-39-text h1 { font-size: 3.5rem; font-weight: 800; color: #1a202c; margin-bottom: 20px; line-height: 1.1; }
        .hero-39-text p { font-size: 1.2rem; color: #4a5568; margin-bottom: 40px; }
        
        /* Modern Phone Frame */
        .hero-39-phone { 
            flex: 0 0 320px; 
            height: 620px; 
            background: #000; 
            border-radius: 45px; 
            padding: 12px; 
            box-shadow: 0 50px 100px rgba(0,0,0,0.2); 
            position: relative; 
            border: 2px solid rgba(255,255,255,0.1);
        }
        .hero-39-screen { 
            background: #fff; 
            width: 100%; 
            height: 100%; 
            border-radius: 35px; 
            overflow: hidden; 
            display: flex; 
            flex-direction: column; 
            position: relative; 
        }
        .hero-39-notch { 
            position: absolute; 
            top: 0; 
            left: 50%; 
            transform: translateX(-50%); 
            width: 150px; 
            height: 25px; 
            background: #000; 
            border-bottom-left-radius: 15px; 
            border-bottom-right-radius: 15px; 
            z-index: 10; 
        }
        
        .hero-39-chat-header { padding: 40px 20px 15px; background: #f8f9fa; border-bottom: 1px solid #edf2f7; text-align: center; }
        .hero-39-avatar { width: 40px; height: 40px; background: #3182ce; border-radius: 50%; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center; color: white; }
        
        .hero-39-msg-area { flex: 1; padding: 20px; display: flex; flex-direction: column; gap: 12px; }
        
        .hero-39-msg { 
            padding: 12px 16px; 
            border-radius: 18px; 
            font-size: 0.9rem; 
            max-width: 85%; 
            animation: hero39FadeIn 0.5s ease forwards; 
            opacity: 0; 
            transform: translateY(10px);
        }
        
        .hero-39-msg.left { background: #edf2f7; color: #1a202c; align-self: flex-start; border-bottom-left-radius: 4px; }
        .hero-39-msg.right { background: #3182ce; color: white; align-self: flex-end; border-bottom-right-radius: 4px; }
        
        @keyframes hero39FadeIn {
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Sequence Timing */
        .hero-39-msg:nth-child(1) { animation-delay: 0.5s; }
        .hero-39-msg:nth-child(2) { animation-delay: 1.5s; }
        .hero-39-msg:nth-child(3) { animation-delay: 3s; }
        .hero-39-msg:nth-child(4) { animation-delay: 4.5s; }
        
        @media (max-width: 900px) {
            .hero-39-content { flex-direction: column; text-align: center; gap: 40px; }
            .hero-39-phone { transform: scale(0.9); }
            .hero-39-text h1 { font-size: 2.5rem; }
        }
    </style>
    <div class="hero-39-container">
        <div class="hero-39-content">
            <div class="hero-39-text">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $subTitle; ?></p>
            </div>
            <div class="hero-39-phone">
                <div class="hero-39-notch"></div>
                <div class="hero-39-screen">
                    <div class="hero-39-chat-header">
                        <div class="hero-39-avatar"><i class="fas fa-robot"></i></div>
                        <div style="font-size: 0.8rem; font-weight: bold; color: #4a5568;">Support Agent</div>
                    </div>
                    <div class="hero-39-msg-area">
                        <div class="hero-39-msg left">Hi! Need help with your site?</div>
                        <div class="hero-39-msg right">Yes, I want a premium look.</div>
                        <div class="hero-39-msg left">Our 50+ heroes are ready!</div>
                        <div class="hero-39-msg right">Let's get started! 🚀</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 40: Low Poly / Polygon
 */
function heroSection40(
    $title = "Low Poly Art",
    $bg = "linear-gradient(135deg, #1e3c72 0%, #2a5298 100%)"
) {
    ?>
    <style>
        .hero-40-container { height: 100vh; background: <?php echo $bg; ?>; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; color: white; font-family: sans-serif; clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%); }
        .hero-40-poly { position: absolute; width: 0; height: 0; border-left: 100px solid transparent; border-right: 100px solid transparent; border-bottom: 200px solid rgba(255,255,255,0.05); }
        .hero-40-content { position: relative; z-index: 2; text-align: center; }
        .hero-40-content h1 { font-size: 4rem; text-transform: uppercase; letter-spacing: 5px; border-bottom: 2px solid white; display: inline-block; padding-bottom: 10px; }
        @media (max-width: 768px) {
            .hero-40-container { clip-path: polygon(0 0, 100% 0, 100% 95%, 50% 100%, 0 95%); }
            .hero-40-content h1 { font-size: 2.5rem; letter-spacing: 2px; }
            .hero-40-poly { opacity: 0.3; }
        }
    </style>
    <div class="hero-40-container">
        <div class="hero-40-poly" style="top: 10%; left: 20%; transform: rotate(45deg);"></div>
        <div class="hero-40-poly" style="bottom: 20%; right: 10%; transform: rotate(-15deg) scale(2);"></div>
        <div class="hero-40-content">
            <h1><?php echo $title; ?></h1>
            <p>Abstract geometric design.</p>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 41: Manifesto (Buttonless)
 */
function heroSection41(
    $title = "WE CREATE THE FUTURE.", 
    $subTitle = "No compromises. Just pure innovation driven by passion and code.", 
    $bg = "#000",
    $textColor = "#fff"
) {
    ?>
    <style>
        .hero-41-container { min-height: 80vh; background: <?php echo $bg; ?>; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 50px; box-sizing: border-box; font-family: 'Arial Black', sans-serif; }
        .hero-41-title { font-size: 6rem; color: <?php echo $textColor; ?>; line-height: 0.9; margin: 0 0 30px; letter-spacing: -3px; text-transform: uppercase; }
        .hero-41-subtitle { font-family: 'Georgia', serif; font-size: 1.5rem; color: rgba(255,255,255,0.7); max-width: 600px; line-height: 1.6; }
        @media (max-width: 768px) { 
            .hero-41-title { font-size: 3rem; letter-spacing: -1px; } 
            .hero-41-subtitle { font-size: 1.1rem; }
            .hero-41-container { padding: 30px; }
        }
    </style>
    <div class="hero-41-container">
        <h1 class="hero-41-title"><?php echo $title; ?></h1>
        <p class="hero-41-subtitle"><?php echo $subTitle; ?></p>
    </div>
    <?php
}

/**
 * Hero Section 42: Visual Storytelling (No Button)
 */
function heroSection42(
    $title = "Visual Storytelling", 
    $subTitle = "Let the image lead the narrative. A perfect balance of visual impact.", 
    $image = "https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-42-container { display: flex; min-height: 80vh; font-family: 'Segoe UI', sans-serif; }
        .hero-42-image { flex: 1.2; background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center; min-height: 400px; }
        .hero-42-content { flex: 0.8; display: flex; flex-direction: column; justify-content: center; padding: 80px; background: #fff; }
        .hero-42-content h1 { font-size: 3.5rem; margin-bottom: 20px; color: #2d3436; font-weight: 800; }
        .hero-42-content p { font-size: 1.25rem; color: #636e72; line-height: 1.6; margin: 0; }
        @media (max-width: 900px) { .hero-42-container { flex-direction: column; } .hero-42-content { padding: 50px 30px; } .hero-42-image { height: 400px; } }
    </style>
    <div class="hero-42-container">
        <div class="hero-42-image"></div>
        <div class="hero-42-content">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subTitle; ?></p>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 43: Atmosphere (Buttonless)
 */
function heroSection43(
    $title = "Atmosphere", 
    $subTitle = "Breathe in the digital air."
) {
    ?>
    <style>
        .hero-43-container { height: 100vh; background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); background-size: 400% 400%; animation: gradientBG 15s ease infinite; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; font-family: sans-serif; }
        .hero-43-title { font-size: 5rem; font-weight: 100; letter-spacing: 10px; margin: 0; text-transform: uppercase; }
        .hero-43-subtitle { font-size: 1.2rem; opacity: 0.8; margin-top: 20px; letter-spacing: 3px; }
        @keyframes gradientBG { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
        @media (max-width: 768px) {
            .hero-43-title { font-size: 3rem; letter-spacing: 5px; text-align: center; }
            .hero-43-subtitle { font-size: 1rem; text-align: center; }
        }
    </style>
    <div class="hero-43-container">
        <h1 class="hero-43-title"><?php echo $title; ?></h1>
        <p class="hero-43-subtitle"><?php echo $subTitle; ?></p>
    </div>
    <?php
}

/**
 * Hero Section 44: Product Feature (Left-Image)
 */
function heroSection44(
    $title = "NextGen Tech", 
    $features = ["Aerospace Grade", "Quantum Processor", "Holographic Display"],
    $image = "https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=800&q=80"
) {
    ?>
    <style>
        .hero-44-container { padding: 100px 5%; background: #f8f9fa; display: flex; align-items: center; justify-content: center; font-family: 'Arial', sans-serif; gap: 50px; }
        .hero-44-img-box { flex: 1; max-width: 500px; display: flex; justify-content: center; }
        .hero-44-img-box img { width: 100%; max-width: 400px; transform: rotate(-10deg); filter: drop-shadow(20px 20px 30px rgba(0,0,0,0.2)); transition: 0.5s; }
        .hero-44-img-box:hover img { transform: rotate(0deg) scale(1.05); }
        .hero-44-content { flex: 1; max-width: 500px; }
        .hero-44-content h1 { font-size: 3rem; margin-bottom: 30px; color: #333; }
        .hero-44-list { list-style: none; padding: 0; }
        .hero-44-list li { margin-bottom: 15px; font-size: 1.2rem; display: flex; align-items: center; color: #555; }
        .hero-44-list li::before { content: '✓'; color: #27ae60; font-weight: bold; margin-right: 15px; font-size: 1.5rem; }
        @media (max-width: 768px) { .hero-44-container { flex-direction: column; text-align: center; } .hero-44-list li { justify-content: center; } }
    </style>
    <div class="hero-44-container">
        <div class="hero-44-img-box">
            <img src="<?php echo $image; ?>" alt="Product">
        </div>
        <div class="hero-44-content">
            <h1><?php echo $title; ?></h1>
            <ul class="hero-44-list">
                <?php foreach($features as $f) echo "<li>$f</li>"; ?>
            </ul>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 45: Editorial Quote (Buttonless)
 */
function heroSection45(
    $quote = "Design is not just what it looks like and feels like. Design is how it works.", 
    $author = "Steve Jobs"
) {
    ?>
    <style>
        .hero-45-container { padding: 150px 20px; background: #fff; display: flex; flex-direction: column; align-items: center; text-align: center; font-family: 'Times New Roman', serif; border-top: 10px solid #000; border-bottom: 2px solid #ccc; }
        .hero-45-quote { font-size: 4vw; line-height: 1.2; max-width: 80%; margin-bottom: 40px; color: #111; font-style: italic; }
        .hero-45-author { font-size: 1.2rem; font-family: 'Arial', sans-serif; letter-spacing: 2px; text-transform: uppercase; color: #888; position: relative; }
        .hero-45-author::before { content: ''; display: block; width: 50px; height: 2px; background: #000; margin: 0 auto 20px; }
        @media (max-width: 768px) { 
            .hero-45-quote { font-size: 1.8rem; margin-bottom: 20px; }
            .hero-45-container { padding: 80px 20px; }
        }
    </style>
    <div class="hero-45-container">
        <div class="hero-45-quote">“<?php echo $quote; ?>”</div>
        <div class="hero-45-author"><?php echo $author; ?></div>
    </div>
    <?php
}

/**
 * Hero Section 46: Bio / Profile (Left-Image)
 */
function heroSection46(
    $name = "Sarah Jenkins", 
    $role = "Lead Architect", 
    $bio = "Designing sustainable future spaces with over 15 years of international experience.",
    $image = "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=800&q=80"
) {
    ?>
    <style>
        .hero-46-container { background: #2c3e50; min-height: 80vh; display: flex; align-items: center; justify-content: center; color: white; gap: 50px; font-family: sans-serif; padding: 50px; }
        .hero-46-img { width: 300px; height: 300px; object-fit: cover; border-radius: 50%; border: 10px solid rgba(255,255,255,0.1); }
        .hero-46-content { max-width: 500px; }
        .hero-46-name { font-size: 3rem; margin: 0 0 10px; color: #f1c40f; }
        .hero-46-role { font-size: 1.5rem; color: #bdc3c7; margin-bottom: 20px; font-weight: normal; }
        .hero-46-bio { font-size: 1.1rem; line-height: 1.6; opacity: 0.9; }
        @media (max-width: 768px) { .hero-46-container { flex-direction: column; text-align: center; } .hero-46-img { width: 200px; height: 200px; } }
    </style>
    <div class="hero-46-container">
        <img src="<?php echo $image; ?>" class="hero-46-img" alt="Profile">
        <div class="hero-46-content">
            <h1 class="hero-46-name"><?php echo $name; ?></h1>
            <h2 class="hero-46-role"><?php echo $role; ?></h2>
            <p class="hero-46-bio"><?php echo $bio; ?></p>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 47: Visual Gallery (Buttonless)
 */
function heroSection47() {
    // 3 Fixed nice images for demo
    $imgs = [
        "https://images.unsplash.com/photo-1501504905252-473c47e087f8?w=600",
        "https://images.unsplash.com/photo-1502082553048-f009c37129b9?w=600",
        "https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=600"
    ];
    ?>
    <style>
        .hero-47-container { display: flex; height: 80vh; background: #111; overflow: hidden; }
        .hero-47-col { flex: 1; height: 100%; transition: 0.5s; position: relative; cursor: pointer; border-right: 1px solid #222; }
        .hero-47-col:hover { flex: 3; }
        .hero-47-bg { width: 100%; height: 100%; object-fit: cover; opacity: 0.6; transition: 0.5s; }
        .hero-47-col:hover .hero-47-bg { opacity: 1; }
        .hero-47-caption { position: absolute; bottom: 20px; left: 20px; color: white; font-family: sans-serif; font-size: 1.5rem; opacity: 0; transition: 0.3s; transform: translateY(20px); font-weight: bold; text-shadow: 0 2px 4px rgba(0,0,0,0.8); }
        .hero-47-col:hover .hero-47-caption { opacity: 1; transform: translateY(0); }
        @media (max-width: 768px) {
            .hero-47-container { flex-direction: column; height: auto; }
            .hero-47-col { height: 250px; border-bottom: 1px solid #222; border-right: none; }
            .hero-47-col:hover { flex: 1; } /* Disable expansion effect on mobile */
            .hero-47-caption { opacity: 1; transform: translateY(0); font-size: 1.2rem; }
            .hero-47-bg { opacity: 0.8; }
        }
    </style>
    <div class="hero-47-container">
        <div class="hero-47-col"><img src="<?php echo $imgs[0]; ?>" class="hero-47-bg"><div class="hero-47-caption">Discover</div></div>
        <div class="hero-47-col"><img src="<?php echo $imgs[1]; ?>" class="hero-47-bg"><div class="hero-47-caption">Explore</div></div>
        <div class="hero-47-col"><img src="<?php echo $imgs[2]; ?>" class="hero-47-bg"><div class="hero-47-caption">Create</div></div>
    </div>
    <?php
}

/**
 * Hero Section 48: Overlapping Card (Left-Image)
 */
function heroSection48(
    $title = "Urban Design", 
    $text = "Intersection of nature and concrete.",
    $image = "https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-48-container { height: 100vh; display: flex; align-items: center; position: relative; font-family: 'Helvetica', sans-serif; background: #e0e0e0; }
        .hero-48-image-area { position: absolute; top: 0; left: 0; width: 60%; height: 100%; background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center; }
        .hero-48-card { position: relative; z-index: 2; margin-left: 50%; max-width: 500px; background: white; padding: 80px; box-shadow: 0 30px 60px rgba(0,0,0,0.1); }
        .hero-48-card h1 { margin: 0 0 20px; font-size: 3rem; color: #222; }
        .hero-48-card p { color: #666; font-size: 1.2rem; line-height: 1.6; }
        @media (max-width: 900px) { .hero-48-image-area { width: 100%; height: 50%; } .hero-48-container { flex-direction: column; justify-content: flex-end; } .hero-48-card { margin: -100px 20px 50px; width: auto; max-width: none; } }
    </style>
    <div class="hero-48-container">
        <div class="hero-48-image-area"></div>
        <div class="hero-48-card">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $text; ?></p>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 49: Illustrated Feature Split
 */
function heroSection49(
    $title = "Accelerate Your Workflow",
    $subTitle = "The ultimate platform for modern developers to build, deploy, and scale with ease and precision.",
    $primaryBtnText = "Start for Free",
    $secondaryBtnText = "Book a Demo",
    $illustration = "https://static.thenounproject.com/png/business-growth-chart-icon-3134662-512.png",
    $bg = "linear-gradient(135deg, #6366f1 0%, #a855f7 100%)"
) {
    ?>
    <style>
        .hero-49-container { 
            min-height: 90vh; 
            background: <?php echo $bg; ?>; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-family: 'Inter', sans-serif; 
            padding: 80px 5%;
            box-sizing: border-box;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        /* Subtle Background Patterns */
        .hero-49-container::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 40px 40px;
            pointer-events: none;
        }

        .hero-49-content { 
            max-width: 1200px; 
            width: 100%; 
            display: flex; 
            align-items: center; 
            justify-content: space-between; 
            gap: 60px;
            position: relative;
            z-index: 2;
        }

        .hero-49-text { flex: 1; }
        .hero-49-text h1 { 
            font-size: clamp(2.5rem, 5vw, 4rem); 
            font-weight: 800; 
            line-height: 1.1; 
            margin-bottom: 25px;
            text-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .hero-49-text p { 
            font-size: 1.25rem; 
            line-height: 1.6; 
            color: rgba(255,255,255,0.9); 
            margin-bottom: 40px; 
            max-width: 550px;
        }

        .hero-49-btns { display: flex; gap: 20px; }
        .hero-49-btn { 
            padding: 16px 32px; 
            border-radius: 12px; 
            font-weight: 700; 
            text-decoration: none; 
            transition: 0.3s;
            font-size: 1.1rem;
        }
        .hero-49-btn.primary { background: white; color: #6366f1; box-shadow: 0 10px 25px rgba(0,0,0,0.15); }
        .hero-49-btn.primary:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(0,0,0,0.2); }
        .hero-49-btn.secondary { background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px); }
        .hero-49-btn.secondary:hover { background: rgba(255,255,255,0.2); }

        .hero-49-image { flex: 1; display: flex; justify-content: flex-end; }
        .hero-49-image img { 
            max-width: 100%; 
            height: auto; 
            filter: drop-shadow(0 20px 50px rgba(0,0,0,0.2));
            animation: hero49Float 6s infinite ease-in-out;
        }

        @keyframes hero49Float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @media (max-width: 1024px) {
            .hero-49-content { flex-direction: column; text-align: center; }
            .hero-49-text { display: flex; flex-direction: column; align-items: center; }
            .hero-49-image { justify-content: center; order: -1; margin-bottom: 40px; }
            .hero-49-image img { max-width: 80%; }
        }

        @media (max-width: 600px) {
            .hero-49-btns { flex-direction: column; width: 100%; }
            .hero-49-btn { text-align: center; }
            .hero-49-container { padding: 60px 20px; }
        }
    </style>
    <div class="hero-49-container">
        <div class="hero-49-content">
            <div class="hero-49-text">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $subTitle; ?></p>
                <div class="hero-49-btns">
                    <a href="#" class="hero-49-btn primary"><?php echo $primaryBtnText; ?></a>
                    <a href="#" class="hero-49-btn secondary"><?php echo $secondaryBtnText; ?></a>
                </div>
            </div>
            <div class="hero-49-image">
                <img src="<?php echo $illustration; ?>" alt="Illustration">
            </div>
        </div>
    </div>
    <?php
}

/**
 * Hero Section 50: The Pinnacle (No Button)
 */
function heroSection50(
    $title = "The Pinnacle", 
    $text = "Reach new heights with our premium consulting services.", 
    $bg = "#000",
    $image = "https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1950&q=80"
) {
    ?>
    <style>
        .hero-50-container { height: 100vh; display: flex; background: <?php echo $bg; ?>; font-family: 'Futura', sans-serif; color: white; overflow: hidden; }
        .hero-50-left { flex: 1.5; position: relative; clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%); }
        .hero-50-img { width: 100%; height: 100%; object-fit: cover; transition: 5s ease; }
        .hero-50-left:hover .hero-50-img { transform: scale(1.1); }
        .hero-50-right { flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 50px; }
        .hero-50-right h1 { font-size: 5rem; line-height: 0.9; margin: 0 0 30px; color: #fff; }
        .hero-50-right p { font-size: 1.2rem; color: #aaa; margin-bottom: 50px; max-width: 400px; }
        @media (max-width: 800px) { 
            .hero-50-container { flex-direction: column; height: auto; min-height: 100vh; } 
            .hero-50-left { clip-path: none; height: 300px; flex: none; width: 100%; } 
            .hero-50-right { padding: 40px 20px; text-align: center; align-items: center; }
            .hero-50-right h1 { font-size: 3rem; }
        }
    </style>
    <div class="hero-50-container">
        <div class="hero-50-left">
            <img src="<?php echo $image; ?>" class="hero-50-img">
        </div>
        <div class="hero-50-right">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $text; ?></p>
        </div>
    </div>
    <?php
}


