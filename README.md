# 🚀 Ozi Dependencies: Hero Widgets


> A collection of **40+ production-ready Hero Sections** for your PHP applications. Drop-in, responsive, and fully customizable.

## 📦 Overview

Stop building the same hero section from scratch. Ozi Dependencies provides a robust library of modern UI components, pre-styled and scoped to avoid conflicts with your existing CSS.

**Version**: `2.2.0`
**Components**: `50`

---

## ⚡ Quick Start

1. **Require the file** in your project.
2. **Call the function**. That's it.

```php
<?php 
require "dependencies/widgets/hero_section.php";

// Render the standard hero
heroSection1(); 
?>
```

---

## 🎨 Component Gallery

Choose the perfect style for your specific use case.

### Modern & Corporate
| Widget | Style | Best For |
| :--- | :--- | :--- |
| `heroSection1()` | **Standard Split** | General landing pages. Image on right, text on left. |
| `heroSection9()` | **Geometric** | Corporate/Bold. Sharp diagonal split layout. |
| `heroSection13()` | **Wave Divider** | Friendly/App. Clean layout with organic shape divider. |
| `heroSection19()` | **Neumorphism** | Soft UI. Subtle depth with extruded shadows. |
| `heroSection27()` | **Rounded Split** | Modern. Clean layout with organic rounded image. |
| `heroSection30()` | **Glassmorphism** | Ultra-modern. Frosted glass card with glowing background effects. |

### Creative & Vibrant
| Widget | Style | Best For |
| :--- | :--- | :--- |
| `heroSection2()` | **Centered Splash** | Bold announcements. Full background image with overlay. |
| `heroSection3()` | **Gradient Modern** | SaaS/Tech. Gradient background with floating illustration. |
| `heroSection6()` | **Glassmorphism** | Creative/Portfolio. Frosted glass card effect. |
| `heroSection11()` | **Aurora Gradient** | Modern SaaS. Smooth moving mesh gradients. |
| `heroSection12()` | **Neo-Brutalism** | Bold/Trendy. High contrast, thick borders. |
| `heroSection28()` | **Shape Reveal** | Interactive. Hover over shapes to reveal content. |
| `heroSection31()` | **Morphing Blobs** | Organic. CSS-only floating liquid shapes. |
| `heroSection32()` | **Floating Particles** | Atmospheric. Rising ambient particles (CSS). |
| `heroSection40()` | **Low Poly** | Abstract. Geometric polygon background art. |

### Media & Visuals
| Widget | Style | Best For |
| :--- | :--- | :--- |
| `heroSection7()` | **Cinematic** | Photography/Film. Fullscreen visual. |
| `heroSection15()` | **Masonry Grid** | Photography/Portfolio. Image collage layout. |
| `heroSection16()` | **Editorial** | Blog/News. Magazine style with overlay text. |
| `heroSection20()` | **Fullscreen Slider** | E-commerce. Carousel look with active indicators. |
| `heroSection21()` | **Video Text Mask** | High Impact. Video playing *inside* the massive text. |
| `heroSection22()` | **Parallax Scroll** | Depth. Background moves slower than foreground. |
| `heroSection26()` | **Before/After** | Services. Interactive slider comparison. |
| `heroSection35()` | **Cinematic Scroll** | Immersive. Auto-scrolling horizontal gallery with parallax feel. |
| `heroSection37()` | **Asymmetric Mag** | Art/Culture. Overlapping grid layout. |

### Specialized & Functional
| Widget | Style | Best For |
| :--- | :--- | :--- |
| `heroSection4()` | **SaaS Lead Gen** | Startups. Includes email capture form. |
| `heroSection5()` | **Cyberpunk** | Gaming. Dark mode, neon effects, glitches. |
| `heroSection8()` | **3D Perspective** | Modern Agencies. Interactive 3D tilted card. |
| `heroSection10()` | **Minimalist** | Fashion/Luxury. Massive typography. |
| `heroSection14()` | **App Showcase** | Mobile Apps. Large phone mockup. |
| `heroSection17()` | **Split Panel** | Interactive Choice. 50/50 hover expansion. |
| `heroSection18()` | **Retro Pixel** | 8-bit Games. Pixel art aesthetics. |
| `heroSection23()` | **Real Estate** | Search. Large background with search bar. |
| `heroSection24()` | **Event Countdown** | Conferences. Live ticking timer. |
| `heroSection25()` | **Social Proof** | Trust. Focused large testimonial quote. |
| `heroSection29()` | **Typewriter** | SaaS/Personal. Typing text effect loop. |
| `heroSection33()` | **Glitch Text** | Edgy brands. RGB split text effect. |
| `heroSection34()` | **Isometric Grid** | Tech. 3D rotated card grid background. |
| `heroSection36()` | **3D Perspective Pricing** | Futuristic. Interactive rotating 3D cards with neon aesthetics. |
| `heroSection38()` | **Ribbon/Badge** | Sales/Events. Corner ribbon and dashed border. |
| `heroSection39()` | **Modern Chat Interaction** | SaaS/Support. Sequential animated chat bubbles in a phone mockup. |
| `heroSection49()` | **Illustrated Split** | SaaS/Product. Clean split layout with title, buttons, and illustration. |

### Buttonless & Visual Focus
*Distraction-free heroes perfect for statements, atmospheric intros, or portfolios.*

| Widget | Style | Best For |
| :--- | :--- | :--- |
| `heroSection41()` | **Manifesto** | Brand Statements. Massive high-contrast typography. |
| `heroSection43()` | **Atmosphere** | Vibe. Animated gradient mesh background. |
| `heroSection45()` | **Editorial Quote** | Magazines. Magazine-style centered serif quote. |
| `heroSection47()` | **Visual Gallery** | Art/Photos. Interactive 3-column image reveal. |

### Left-Side Image Layouts
*Alternative flow where the visual leads on the left.*

| Widget | Style | Best For |
| :--- | :--- | :--- |
| `heroSection42()` | **Classic Reverse** | Corporate. Standard split with image on left. |
| `heroSection44()` | **Product Feature** | E-commerce. Product shot left, features right. |
| `heroSection46()` | **Bio Profile** | Personal. Circular avatar left, bio card right. |
| `heroSection48()` | **Overlapping Card** | Modern. Text card floating over left-aligned image. |
| `heroSection50()` | **Finale Split** | Premium. Unique diagonal clip-path split. |

---

## 🛠 Configuration

We highly recommend using **PHP 8 Named Arguments** for readability. You only need to pass the parameters you want to change.

```php
heroSection1(
    title: "Launch Your Big Idea",
    subTitle: "We help you scale faster than ever before.",
    btnColor: "#FF5733",
    bg: "#f9f9f9"
);
```

### Common Parameters
Almost every widget accepts these core parameters:

| Parameter | Type | Description |
| :--- | :--- | :--- |
| `$title` | `string` | The main headline text. |
| `$subTitle` | `string` | Secondary description text. |
| `$btnText` | `string` | Label for the Call-to-Action button. |
| `$btnLink` | `string` | URL destination for the button. |
| `$bg` | `string` | Background color (hex) or Image URL. |

---

## 📝 License
Free to use in personal and commercial projects.
