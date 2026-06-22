<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wholesome Eats — Parel, Mumbai</title>
<meta name="description" content="Honest, wholesome food made fresh in Parel, Mumbai. Snacks, momos, pasta, ramen & refreshing drinks. Order on Zomato or Swiggy, or call 7977196074.">

<!-- Open Graph / Link Preview -->
<meta property="og:type" content="restaurant.menu">
<meta property="og:site_name" content="Wholesome Eats">
<meta property="og:title" content="Wholesome Eats — Parel, Mumbai">
<meta property="og:description" content="Honest, wholesome food made fresh in Parel, Mumbai. Snacks, momos, pasta, ramen & refreshing drinks. Order on Zomato or Swiggy, or call 7977196074.">
<meta property="og:image" content="https://YOUR-DOMAIN.com/images/ramen.png">
<meta property="og:image:width" content="1080">
<meta property="og:image:height" content="1350">
<meta property="og:url" content="https://YOUR-DOMAIN.com/">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Wholesome Eats — Parel, Mumbai">
<meta name="twitter:description" content="Honest, wholesome food made fresh in Parel, Mumbai. Snacks, momos, pasta, ramen & refreshing drinks.">
<meta name="twitter:image" content="https://YOUR-DOMAIN.com/images/ramen.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="icon" type="image/jpeg" href="images/logo.jpg">
<link rel="apple-touch-icon" href="images/logo.jpg">
<meta name="format-detection" content="telephone=no">
<style>
  :root{
    --green:#27643B;
    --green-dark:#1b4a2b;
    --white:#ffffff;
    --off:#f7f6f1;
    --ink:#16241b;
    --muted:#5d6b62;
    --line:rgba(39,100,59,0.15);
  }
  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    font-family:'DM Sans',sans-serif;
    background:var(--off);
    color:var(--ink);
  }
  h1,h2,h3{font-family:'Bricolage Grotesque',sans-serif;}

  /* NAV */
  nav{
    position:sticky; top:0; z-index:100;
    background:var(--white);
    border-bottom:1px solid var(--line);
  }
  .nav-inner{
    max-width:1100px; margin:0 auto;
    display:flex; align-items:center; justify-content:space-between;
    padding:0.7rem 1.5rem;
  }
  .brand{display:flex; align-items:center; gap:10px; text-decoration:none;}
  .brand img{height:42px; width:42px; border-radius:10px; object-fit:cover;}
  .brand-name{font-family:'Bricolage Grotesque',sans-serif; font-weight:800; font-size:1.05rem; color:var(--green-dark); letter-spacing:-0.01em;}
  .brand-tag{font-size:0.65rem; color:var(--muted); letter-spacing:0.08em; text-transform:uppercase;}
  .nav-cta{
    display:flex; gap:8px;
  }
  .nav-cta a{
    text-decoration:none;
    font-size:0.78rem; font-weight:600;
    padding:8px 14px;
    border-radius:100px;
    transition:transform .15s ease;
  }
  .nav-cta a:hover{ transform:translateY(-1px); }
  .nav-call{ background:var(--green); color:#fff; display:inline-flex; align-items:center; gap:6px; }
  .nav-call:hover{ background:var(--green-dark); }

  /* HERO */
  .hero{
    background:var(--green);
    color:#fff;
    padding:3.2rem 1.5rem 3rem;
    position:relative;
    overflow:hidden;
  }
  .hero::after{
    content:'';
    position:absolute; right:-60px; top:-60px;
    width:240px; height:240px; border-radius:50%;
    background:rgba(255,255,255,0.06);
  }
  .hero-inner{
    max-width:1100px; margin:0 auto;
    position:relative; z-index:1;
    display:grid; grid-template-columns: 1.1fr 0.9fr; gap:2.5rem;
    align-items:center;
  }
  .eyebrow{
    display:inline-block;
    font-size:0.7rem; letter-spacing:0.12em; text-transform:uppercase;
    color:rgba(255,255,255,0.75);
    border:1px solid rgba(255,255,255,0.3);
    border-radius:100px; padding:5px 12px;
    margin-bottom:1rem;
  }
  .hero h1{
    font-size:clamp(2rem, 4vw, 2.9rem);
    font-weight:800;
    line-height:1.08;
    letter-spacing:-0.02em;
    margin-bottom:0.9rem;
  }
  .hero h1 em{ font-style:italic; color:#cfe6cf; }
  .hero p{
    color:rgba(255,255,255,0.85);
    font-size:0.98rem; line-height:1.6; max-width:420px; margin-bottom:1.6rem;
  }
  .hero-actions{ display:flex; gap:10px; flex-wrap:wrap; }
  .btn{
    text-decoration:none;
    display:inline-flex; align-items:center; gap:8px;
    font-weight:600; font-size:0.88rem;
    padding:11px 20px;
    border-radius:100px;
    transition:transform .15s ease, opacity .15s ease;
  }
  .btn:hover{ transform:translateY(-2px); }
  .btn-white{ background:#fff; color:var(--green-dark); }
  .btn-outline{ background:transparent; border:1.5px solid rgba(255,255,255,0.5); color:#fff; }
  .hero-img{
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 50px rgba(0,0,0,0.25);
    aspect-ratio:4/5;
  }
  .hero-img img{ width:100%; height:100%; object-fit:cover; display:block; }

  /* ORDER BAR */
  .orderbar{
    max-width:1100px; margin:-1.6rem auto 0; position:relative; z-index:5;
    padding:0 1.5rem;
  }
  .orderbar-inner{
    background:#fff;
    border-radius:16px;
    box-shadow:0 12px 30px rgba(22,36,27,0.12);
    padding:1rem 1.3rem;
    display:flex; align-items:center; justify-content:space-between;
    gap:1rem; flex-wrap:wrap;
  }
  .orderbar-text{ font-size:0.85rem; color:var(--muted); }
  .orderbar-text strong{ color:var(--ink); }
  .order-links{ display:flex; gap:10px; }
  .order-links a{
    text-decoration:none;
    font-size:0.82rem; font-weight:700;
    padding:9px 16px;
    border-radius:100px;
    color:#fff;
  }
  .lk-zomato{ background:#E23744; }
  .lk-swiggy{ background:#FC8019; }
  .order-links a:hover{ opacity:0.88; }

  /* SECTION */
  .section{ max-width:1100px; margin:0 auto; padding:3.2rem 1.5rem 0.5rem; }
  .section-head{ margin-bottom:1.6rem; }
  .section-head .eyebrow-dark{
    font-size:0.7rem; letter-spacing:0.12em; text-transform:uppercase;
    color:var(--green); font-weight:700; margin-bottom:0.4rem; display:block;
  }
  .section-head h2{
    font-size:clamp(1.6rem,3vw,2.1rem);
    font-weight:800; letter-spacing:-0.02em; color:var(--ink);
  }

  /* CATEGORY GROUP */
  .cat-group{ margin-bottom:2.6rem; }
  .cat-title{
    display:flex; align-items:baseline; gap:10px;
    margin-bottom:1rem;
    border-bottom:2px solid var(--green);
    padding-bottom:8px;
  }
  .cat-title h3{
    font-size:1.25rem; font-weight:800; color:var(--green-dark); letter-spacing:-0.01em;
  }
  .cat-title span{ font-size:0.75rem; color:var(--muted); }

  .items-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:14px;
  }
  .item{
    background:#fff;
    border:1px solid var(--line);
    border-radius:14px;
    padding:16px 18px;
    transition:transform .15s ease, box-shadow .15s ease;
  }
  .item:hover{ transform:translateY(-3px); box-shadow:0 10px 24px rgba(22,36,27,0.08); }
  .item-name{ font-weight:700; font-size:0.96rem; margin-bottom:5px; color:var(--ink); }
  .item-desc{ font-size:0.82rem; color:var(--muted); line-height:1.5; }
  .item-note{ font-size:0.75rem; color:var(--green); font-weight:700; margin-top:4px; display:inline-block; }

  /* FEATURED PHOTOS STRIP */
  .gallery{
    max-width:1100px; margin:3rem auto 0; padding:0 1.5rem;
    display:grid; grid-template-columns:repeat(3,1fr); gap:14px;
  }
  .gallery img{
    width:100%; height:220px; object-fit:cover; border-radius:16px;
    box-shadow:0 8px 20px rgba(22,36,27,0.1);
  }

  /* CONTACT / FOOTER */
  footer{
    background:var(--green-dark);
    color:#fff;
    margin-top:3.5rem;
    padding:3rem 1.5rem 2rem;
  }
  .footer-inner{
    max-width:1100px; margin:0 auto;
    display:grid; grid-template-columns:1.2fr 1fr 1fr; gap:2rem;
  }
  .footer-brand{ display:flex; align-items:center; gap:10px; margin-bottom:0.8rem; }
  .footer-brand img{ height:38px; width:38px; border-radius:9px; object-fit:cover; }
  .footer-brand span{ font-family:'Bricolage Grotesque',sans-serif; font-weight:800; font-size:1.05rem; }
  footer p{ color:rgba(255,255,255,0.7); font-size:0.85rem; line-height:1.6; }
  .footer-col h4{ font-size:0.8rem; letter-spacing:0.08em; text-transform:uppercase; color:rgba(255,255,255,0.55); margin-bottom:0.9rem; }
  .footer-col a, .footer-col p{
    display:block; color:rgba(255,255,255,0.85); text-decoration:none; font-size:0.88rem; margin-bottom:0.6rem;
  }
  .footer-col a:hover{ color:#fff; }
  .lic{ font-size:0.72rem; color:rgba(255,255,255,0.6); margin-top:1.6rem; text-align:center; }

  @media (max-width:760px){
    .hero-inner{ grid-template-columns:1fr; }
    .hero-img{ order:-1; aspect-ratio:16/10; }
    .items-grid{ grid-template-columns:1fr; }
    .gallery{ grid-template-columns:1fr 1fr; }
    .footer-inner{ grid-template-columns:1fr; gap:1.6rem; }
    .orderbar-inner{ flex-direction:column; align-items:flex-start; }
  }
  @media (max-width:480px){
    .gallery{ grid-template-columns:1fr; }
    .nav-cta a{ font-size:0.72rem; padding:7px 11px; }
  }
</style>
</head>
<body>

<nav>
  <div class="nav-inner">
    <a href="#" class="brand">
      <img src="images/logo.jpg" alt="Wholesome Eats logo">
      <div>
        <div class="brand-name">Wholesome Eats</div>
        <div class="brand-tag">Parel, Mumbai</div>
      </div>
    </a>
    <div class="nav-cta">
      <a href="tel:+917977196074" class="nav-call"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>7977196074</a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="hero-inner">
    <div>
      <span class="eyebrow">Parel · Mumbai</span>
      <h1>Honest food,<br><em>made wholesome.</em></h1>
      <p>Snacks, momos, pasta, ramen and refreshers — cooked fresh and packed with flavour. Order in minutes.</p>
      <div class="hero-actions">
        <a href="#menu" class="btn btn-white">View Menu</a>
        <a href="tel:+917977196074" class="btn btn-outline">Call to Order</a>
      </div>
    </div>
    <div class="hero-img">
      <img src="images/ramen.png" alt="Spicy ramen bowl">
    </div>
  </div>
</section>

<div class="orderbar">
  <div class="orderbar-inner">
    <div class="orderbar-text">Prefer the app? <strong>Order online via Zomato or Swiggy.</strong></div>
    <div class="order-links">
      <a class="lk-zomato" href="https://zomato.onelink.me/xqzv/j5w1adlq" target="_blank" rel="noopener">Order on Zomato</a>
      <a class="lk-swiggy" href="https://www.swiggy.com/menu/1256415?source=sharing" target="_blank" rel="noopener">Order on Swiggy</a>
    </div>
  </div>
</div>

<section class="section" id="menu">
  <div class="section-head">
    <span class="eyebrow-dark">Our Menu</span>
    <h2>Tasty Treats</h2>
  </div>

  <div class="cat-group">
    <div class="cat-title"><h3>Snacks</h3><span>4 items</span></div>
    <div class="items-grid">
      <div class="item">
        <div class="item-name">Golden Classic Fries</div>
        <div class="item-desc">Crispy, golden perfection — your favorite fries, hot and salted just right.</div>
      </div>
      <div class="item">
        <div class="item-name">Peri Peri French Fries</div>
        <div class="item-desc">Crispy golden fries topped with bold peri peri sauce — tangy, spicy, and full of flavour.</div>
      </div>
      <div class="item">
        <div class="item-name">Classic Masala Maggi</div>
        <div class="item-desc">The all-time favorite — classic Maggi noodles with our signature spicy masala twist.</div>
      </div>
      <div class="item">
        <div class="item-name">Chilli Garlic Fusion Maggi</div>
        <div class="item-desc">Fiery and flavorful Maggi tossed in a bold chilli garlic sauce for the perfect kick.</div>
      </div>
    </div>
  </div>

  <div class="cat-group">
    <div class="cat-title"><h3>Momos · Dumplings</h3><span>4 items</span></div>
    <div class="items-grid">
      <div class="item">
        <div class="item-name">Veg Steam Momos <span class="item-note">6 pcs</span></div>
        <div class="item-desc">Soft steamed momos packed with fresh, finely chopped vegetables, served with our tangy chutney.</div>
      </div>
      <div class="item">
        <div class="item-name">Veg Fried Momos <span class="item-note">6 pcs</span></div>
        <div class="item-desc">Golden fried momos filled with a flavorful veggie mix, crispy outside, bursting with taste.</div>
      </div>
      <div class="item">
        <div class="item-name">Paneer Steam Momos <span class="item-note">6 pcs</span></div>
        <div class="item-desc">Steamed momos stuffed with spiced paneer and fresh herbs, served with our zesty red chutney.</div>
      </div>
      <div class="item">
        <div class="item-name">Paneer Fried Momos <span class="item-note">6 pcs</span></div>
        <div class="item-desc">Fried to perfection, with a crunchy shell and a rich paneer filling inside.</div>
      </div>
    </div>
  </div>

  <div class="cat-group">
    <div class="cat-title"><h3>Pasta</h3><span>2 items</span></div>
    <div class="items-grid">
      <div class="item">
        <div class="item-name">Red Sauce Penne Pasta</div>
        <div class="item-desc">Pasta tossed in a rich, tangy tomato based sauce with a touch of herbs.</div>
      </div>
      <div class="item">
        <div class="item-name">Red Sauce Spaghetti Pasta</div>
        <div class="item-desc">Pasta tossed in a rich, tangy tomato based sauce with a touch of herbs.</div>
      </div>
    </div>
  </div>

  <div class="cat-group">
    <div class="cat-title"><h3>Ramen</h3><span>4 items</span></div>
    <div class="items-grid">
      <div class="item">
        <div class="item-name">Veg Classic Ramen</div>
        <div class="item-desc">Mild, savory veg ramen with soft noodles and a comforting, saucy finish.</div>
      </div>
      <div class="item">
        <div class="item-name">Veg Creamy Cheese Ramen</div>
        <div class="item-desc">Creamy, cheesy ramen blended with Korean spices for a rich and indulgent bite.</div>
      </div>
      <div class="item">
        <div class="item-name">Veg Kimchi Ramen</div>
        <div class="item-desc">Korean style kimchi ramen tossed in a thick, flavorful sauce. Bold and tangy.</div>
      </div>
      <div class="item">
        <div class="item-name">Veg Shin Spicy Ramen</div>
        <div class="item-desc">Classic Korean spicy ramen with rich chilli garlic flavor. Perfect balance of heat.</div>
      </div>
    </div>
  </div>

  <div class="cat-group">
    <div class="cat-title"><h3>Drinks · Beverages</h3><span>3 items</span></div>
    <div class="items-grid">
      <div class="item">
        <div class="item-name">Fresh Lime Soda</div>
        <div class="item-desc">A fizzy burst of lime with a tangy twist — cool, refreshing, and crisp.</div>
      </div>
      <div class="item">
        <div class="item-name">Cold Coffee</div>
        <div class="item-desc">Chilled coffee blended with rich chocolate — smooth, bold, and refreshing.</div>
      </div>
      <div class="item">
        <div class="item-name">Blue Lagoon Mocktail</div>
        <div class="item-desc">A vibrant, citrusy blue mocktail. Non-alcoholic.</div>
      </div>
    </div>
  </div>
</section>

<div class="gallery">
  <img src="images/penne.jpeg" alt="Red sauce penne pasta">
  <img src="images/spaghetti.jpeg" alt="Red sauce spaghetti pasta">
  <img src="images/ramen.png" alt="Ramen bowl">
</div>

<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-brand">
        <img src="images/logo.jpg" alt="Wholesome Eats logo">
        <span>Wholesome Eats</span>
      </div>
      <p>Honest, wholesome food made fresh daily in Parel, Mumbai. Snacks, momos, pasta, ramen and more.</p>
    </div>
    <div class="footer-col">
      <h4>Contact</h4>
      <a href="tel:+917977196074"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-2px; margin-right:4px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>7977196074</a>
      <p>Parel, Mumbai</p>
    </div>
    <div class="footer-col">
      <h4>Order Online</h4>
      <a href="https://zomato.onelink.me/xqzv/j5w1adlq" target="_blank" rel="noopener">Zomato →</a>
      <a href="https://www.swiggy.com/menu/1256415?source=sharing" target="_blank" rel="noopener">Swiggy →</a>
    </div>
  </div>
  <div class="lic">FSSAI Lic. No. <span style="color:#fff !important;">21525003000849</span> · © 2026 Wholesome Eats</div>
</footer>

</body>
</html>