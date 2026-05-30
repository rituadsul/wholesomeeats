<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wholesome Eats — Parel, Mumbai</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root {
    --g50: #eaf3de;
    --g100: #c0dd97;
    --g200: #97c459;
    --g300: #78b030;
    --g400: #639922;
    --g500: #4e7d17;
    --g600: #3b6d11;
    --g700: #27500a;
    --g800: #1a3807;
    --g900: #0f2103;
    --cream: #faf9f4;
    --white: #ffffff;
    --text-dark: #1a2e0a;
    --text-mid: #3b6d11;
    --text-muted: #6b8a52;
    --border: rgba(99,153,34,0.18);
    --border-med: rgba(99,153,34,0.3);
    --shadow-sm: 0 2px 8px rgba(39,80,10,0.08);
    --shadow-md: 0 4px 20px rgba(39,80,10,0.12);
    --shadow-lg: 0 8px 40px rgba(39,80,10,0.16);
    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 18px;
    --radius-xl: 28px;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--text-dark);
    min-height: 100vh;
  }

  /* NAV */
  nav {
    background: var(--white);
    border-bottom: 1px solid var(--border);
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: var(--shadow-sm);
  }
  .nav-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .logo {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
  }
  .logo-icon {
    width: 40px;
    height: 40px;
    background: var(--g400);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
  }
  .logo-text {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: 700;
    color: var(--g700);
    line-height: 1;
  }
  .logo-sub {
    font-size: 11px;
    color: var(--text-muted);
    font-weight: 400;
    letter-spacing: 0.04em;
  }
  .nav-links {
    display: flex;
    align-items: center;
    gap: 2rem;
    list-style: none;
  }
  .nav-links a {
    text-decoration: none;
    color: var(--text-muted);
    font-size: 14px;
    font-weight: 500;
    transition: color 0.2s;
  }
  .nav-links a:hover, .nav-links a.active { color: var(--g500); }
  .nav-links a.active {
    font-weight: 600;
    border-bottom: 2px solid var(--g400);
    padding-bottom: 2px;
  }
  .nav-right {
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .btn-cart {
    background: var(--g400);
    color: white;
    border: none;
    border-radius: var(--radius-md);
    padding: 9px 18px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: background 0.2s, transform 0.1s;
  }
  .btn-cart:hover { background: var(--g500); }
  .btn-cart:active { transform: scale(0.98); }
  .cart-badge {
    background: white;
    color: var(--g500);
    border-radius: 50%;
    width: 20px;
    height: 20px;
    font-size: 11px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .btn-login {
    background: transparent;
    border: 1.5px solid var(--border-med);
    color: var(--g600);
    border-radius: var(--radius-md);
    padding: 8px 16px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: border-color 0.2s, background 0.2s;
  }
  .btn-login:hover { background: var(--g50); border-color: var(--g300); }

  /* HERO */
  .hero {
    background: linear-gradient(135deg, var(--g700) 0%, var(--g500) 55%, var(--g300) 100%);
    padding: 5rem 2rem 4rem;
    position: relative;
    overflow: hidden;
  }
  .hero::before {
    content: '';
    position: absolute;
    top: -80px; right: -80px;
    width: 320px; height: 320px;
    background: rgba(255,255,255,0.04);
    border-radius: 50%;
  }
  .hero::after {
    content: '';
    position: absolute;
    bottom: -60px; left: 10%;
    width: 200px; height: 200px;
    background: rgba(255,255,255,0.03);
    border-radius: 50%;
  }
  .hero-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 1;
  }
  .hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,255,255,0.15);
    color: rgba(255,255,255,0.9);
    border-radius: 100px;
    padding: 5px 14px;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.05em;
    margin-bottom: 1.2rem;
    border: 1px solid rgba(255,255,255,0.2);
  }
  .hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 700;
    color: white;
    line-height: 1.15;
    margin-bottom: 1rem;
  }
  .hero-desc {
    color: rgba(255,255,255,0.8);
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 2rem;
    max-width: 440px;
  }
  .hero-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }
  .btn-primary {
    background: white;
    color: var(--g600);
    border: none;
    border-radius: var(--radius-md);
    padding: 13px 28px;
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: box-shadow 0.2s, transform 0.1s;
    box-shadow: var(--shadow-md);
  }
  .btn-primary:hover { box-shadow: var(--shadow-lg); transform: translateY(-1px); }
  .btn-outline-white {
    background: transparent;
    color: white;
    border: 1.5px solid rgba(255,255,255,0.5);
    border-radius: var(--radius-md);
    padding: 12px 24px;
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s;
  }
  .btn-outline-white:hover { background: rgba(255,255,255,0.1); }

  .hero-stats {
    display: flex;
    gap: 2rem;
    margin-top: 2.5rem;
  }
  .hero-stat {
    text-align: center;
  }
  .hero-stat-val {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    color: white;
  }
  .hero-stat-label {
    font-size: 12px;
    color: rgba(255,255,255,0.6);
    font-weight: 400;
    margin-top: 2px;
  }

  .hero-cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }
  .hero-card {
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: var(--radius-lg);
    padding: 1.2rem;
    backdrop-filter: blur(8px);
  }
  .hero-card-icon {
    font-size: 28px;
    margin-bottom: 8px;
  }
  .hero-card-title {
    color: white;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 3px;
  }
  .hero-card-sub {
    color: rgba(255,255,255,0.6);
    font-size: 12px;
  }
  .hero-card.featured {
    grid-column: 1 / -1;
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 1.2rem;
  }
  .hero-card.featured .hero-card-icon {
    font-size: 36px;
    margin-bottom: 0;
  }

  /* MAIN CONTENT */
  .main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 3rem 2rem;
  }

  /* SECTION HEADER */
  .section-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    margin-bottom: 1.8rem;
  }
  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--g800);
  }
  .section-sub {
    font-size: 14px;
    color: var(--text-muted);
    margin-top: 4px;
  }
  .see-all {
    color: var(--g500);
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .see-all:hover { color: var(--g600); }

  /* BESTSELLERS */
  .bestsellers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
    gap: 16px;
    margin-bottom: 3.5rem;
  }
  .item-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    border: 1px solid var(--border);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: box-shadow 0.25s, transform 0.2s;
    cursor: pointer;
  }
  .item-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
  }
  .item-img-wrap {
    height: 140px;
    background: var(--g50);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 48px;
    position: relative;
  }
  .bestseller-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: var(--g400);
    color: white;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.06em;
    padding: 3px 8px;
    border-radius: 100px;
    text-transform: uppercase;
  }
  .veg-dot {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 20px;
    height: 20px;
    border: 2px solid #3b6d11;
    border-radius: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .veg-dot::after {
    content: '';
    width: 10px;
    height: 10px;
    background: #3b6d11;
    border-radius: 50%;
  }
  .nonveg-dot {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 20px;
    height: 20px;
    border: 2px solid #c0392b;
    border-radius: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .nonveg-dot::after {
    content: '';
    width: 10px;
    height: 10px;
    background: #c0392b;
    border-radius: 50%;
  }
  .item-body {
    padding: 12px 14px 14px;
  }
  .item-name {
    font-weight: 600;
    font-size: 14px;
    color: var(--text-dark);
    margin-bottom: 4px;
    line-height: 1.3;
  }
  .item-desc {
    font-size: 12px;
    color: var(--text-muted);
    line-height: 1.5;
    margin-bottom: 10px;
    min-height: 36px;
  }
  .item-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .item-price {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    font-weight: 700;
    color: var(--g600);
  }
  .item-price span {
    font-size: 12px;
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    color: var(--text-muted);
  }
  .btn-add {
    width: 32px;
    height: 32px;
    background: var(--g400);
    color: white;
    border: none;
    border-radius: var(--radius-sm);
    font-size: 20px;
    line-height: 1;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s, transform 0.1s;
  }
  .btn-add:hover { background: var(--g500); }
  .btn-add:active { transform: scale(0.92); }

  /* MENU CATEGORIES */
  .category-tabs {
    display: flex;
    gap: 10px;
    overflow-x: auto;
    padding-bottom: 6px;
    margin-bottom: 2rem;
    scrollbar-width: none;
  }
  .category-tabs::-webkit-scrollbar { display: none; }
  .cat-tab {
    background: var(--white);
    border: 1.5px solid var(--border-med);
    color: var(--text-muted);
    border-radius: 100px;
    padding: 8px 18px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .cat-tab:hover { border-color: var(--g300); color: var(--g500); background: var(--g50); }
  .cat-tab.active {
    background: var(--g400);
    color: white;
    border-color: var(--g400);
    box-shadow: 0 3px 12px rgba(99,153,34,0.3);
  }

  /* MENU SECTION */
  .menu-section { margin-bottom: 3rem; }
  .menu-category-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 1.2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--border);
  }
  .menu-cat-icon {
    width: 42px;
    height: 42px;
    background: var(--g50);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    border: 1px solid var(--border);
  }
  .menu-cat-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--g800);
  }
  .menu-cat-count {
    font-size: 13px;
    color: var(--text-muted);
  }
  .menu-items-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }
  .menu-row {
    background: var(--white);
    border-radius: var(--radius-md);
    border: 1px solid var(--border);
    padding: 14px 16px;
    display: flex;
    align-items: center;
    gap: 14px;
    transition: box-shadow 0.2s;
  }
  .menu-row:hover { box-shadow: var(--shadow-sm); }
  .menu-row-icon {
    width: 52px;
    height: 52px;
    background: var(--g50);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    flex-shrink: 0;
  }
  .menu-row-info { flex: 1; min-width: 0; }
  .menu-row-name {
    font-size: 14px;
    font-weight: 600;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 3px;
  }
  .tag-best {
    font-size: 10px;
    background: var(--g50);
    color: var(--g600);
    border: 1px solid var(--border-med);
    border-radius: 4px;
    padding: 1px 6px;
    font-weight: 600;
  }
  .menu-row-desc {
    font-size: 12px;
    color: var(--text-muted);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .menu-row-right {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 8px;
    flex-shrink: 0;
  }
  .menu-row-price {
    font-family: 'Playfair Display', serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--g600);
  }

  /* ORDER PANEL */
  .layout-with-cart {
    display: grid;
    grid-template-columns: 1fr 340px;
    gap: 2.5rem;
    align-items: start;
  }
  .cart-panel {
    background: var(--white);
    border-radius: var(--radius-xl);
    border: 1px solid var(--border);
    box-shadow: var(--shadow-md);
    position: sticky;
    top: 88px;
    overflow: hidden;
  }
  .cart-header {
    background: var(--g400);
    padding: 1.2rem 1.4rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .cart-header-title {
    color: white;
    font-size: 16px;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .cart-items {
    padding: 1rem;
  }
  .cart-empty {
    text-align: center;
    padding: 2.5rem 1rem;
  }
  .cart-empty-icon { font-size: 48px; margin-bottom: 12px; }
  .cart-empty-text { color: var(--text-muted); font-size: 14px; }
  .cart-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 0;
    border-bottom: 1px solid var(--border);
  }
  .cart-item:last-child { border-bottom: none; }
  .cart-item-name {
    flex: 1;
    font-size: 13px;
    font-weight: 500;
    color: var(--text-dark);
    line-height: 1.3;
  }
  .cart-qty-ctrl {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .qty-btn {
    width: 26px;
    height: 26px;
    border: 1.5px solid var(--border-med);
    background: transparent;
    color: var(--g500);
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    transition: background 0.15s;
  }
  .qty-btn:hover { background: var(--g50); }
  .qty-num {
    font-size: 14px;
    font-weight: 700;
    color: var(--text-dark);
    min-width: 16px;
    text-align: center;
  }
  .cart-item-price {
    font-size: 13px;
    font-weight: 600;
    color: var(--g600);
    min-width: 48px;
    text-align: right;
  }
  .cart-summary {
    border-top: 1px solid var(--border);
    padding: 1rem 1rem 0;
  }
  .summary-row {
    display: flex;
    justify-content: space-between;
    font-size: 13px;
    color: var(--text-muted);
    margin-bottom: 8px;
  }
  .summary-row.total {
    font-size: 16px;
    font-weight: 700;
    color: var(--text-dark);
    padding-top: 8px;
    border-top: 1px solid var(--border);
    margin-top: 4px;
  }
  .summary-row.total span:last-child { color: var(--g600); }
  .order-type-selector {
    padding: 1rem;
    border-top: 1px solid var(--border);
  }
  .order-type-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--text-muted);
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-bottom: 8px;
  }
  .order-type-options {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 6px;
  }
  .order-type-btn {
    padding: 8px 4px;
    border: 1.5px solid var(--border-med);
    border-radius: var(--radius-sm);
    background: transparent;
    color: var(--text-muted);
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    text-align: center;
    transition: all 0.15s;
  }
  .order-type-btn.active {
    background: var(--g50);
    border-color: var(--g400);
    color: var(--g600);
    font-weight: 700;
  }
  .order-type-btn:hover:not(.active) { background: var(--g50); }
  .cart-cta {
    padding: 1rem;
  }
  .btn-order {
    width: 100%;
    background: var(--g400);
    color: white;
    border: none;
    border-radius: var(--radius-md);
    padding: 14px;
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s, transform 0.1s;
    box-shadow: 0 4px 16px rgba(99,153,34,0.35);
  }
  .btn-order:hover { background: var(--g500); }
  .btn-order:active { transform: scale(0.98); }
  .payment-options {
    display: flex;
    justify-content: center;
    gap: 10px;
    padding: 0.8rem 1rem;
    flex-wrap: wrap;
  }
  .pay-chip {
    background: var(--g50);
    border: 1px solid var(--border);
    color: var(--text-muted);
    border-radius: 100px;
    padding: 4px 10px;
    font-size: 11px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  /* FEATURES BAR */
  .features-bar {
    background: var(--g700);
    padding: 2.5rem 2rem;
    margin: 0;
  }
  .features-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
  }
  .feature-item {
    text-align: center;
  }
  .feature-icon {
    font-size: 32px;
    margin-bottom: 8px;
  }
  .feature-title {
    color: white;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 4px;
  }
  .feature-sub {
    color: rgba(255,255,255,0.55);
    font-size: 12px;
  }

  /* REVIEWS */
  .reviews-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-bottom: 3rem;
  }
  .review-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    border: 1px solid var(--border);
    padding: 1.2rem 1.4rem;
    box-shadow: var(--shadow-sm);
  }
  .review-stars {
    color: #f59f00;
    font-size: 14px;
    margin-bottom: 8px;
    letter-spacing: 2px;
  }
  .review-text {
    font-size: 14px;
    color: var(--text-dark);
    line-height: 1.6;
    margin-bottom: 14px;
    font-style: italic;
  }
  .review-author {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .review-avatar {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: var(--g100);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: 700;
    color: var(--g700);
  }
  .review-name { font-size: 13px; font-weight: 600; color: var(--text-dark); }
  .review-item { font-size: 12px; color: var(--text-muted); }

  /* COUPONS */
  .coupons-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-bottom: 3.5rem;
  }
  .coupon-card {
    background: var(--g700);
    border-radius: var(--radius-lg);
    overflow: hidden;
    position: relative;
    padding: 1.4rem;
  }
  .coupon-card::before {
    content: '';
    position: absolute;
    right: -30px; top: 50%;
    transform: translateY(-50%);
    width: 60px; height: 60px;
    background: var(--cream);
    border-radius: 50%;
  }
  .coupon-card::after {
    content: '';
    position: absolute;
    left: -30px; top: 50%;
    transform: translateY(-50%);
    width: 60px; height: 60px;
    background: var(--cream);
    border-radius: 50%;
  }
  .coupon-type {
    font-size: 11px;
    font-weight: 700;
    color: var(--g100);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 6px;
  }
  .coupon-discount {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: white;
    line-height: 1;
    margin-bottom: 6px;
  }
  .coupon-desc {
    font-size: 12px;
    color: rgba(255,255,255,0.65);
    margin-bottom: 14px;
  }
  .coupon-code-wrap {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.12);
    border: 1.5px dashed rgba(255,255,255,0.35);
    border-radius: 8px;
    padding: 6px 12px;
    cursor: pointer;
    position: relative;
    z-index: 1;
  }
  .coupon-code {
    font-size: 13px;
    font-weight: 700;
    color: white;
    letter-spacing: 0.1em;
  }
  .coupon-copy { font-size: 11px; color: rgba(255,255,255,0.5); }

  /* FOOTER */
  footer {
    background: var(--g900);
    padding: 3rem 2rem 2rem;
    margin-top: 4rem;
  }
  .footer-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 3rem;
    margin-bottom: 2.5rem;
  }
  .footer-brand .logo-text { color: var(--g100); font-size: 22px; }
  .footer-brand .logo-sub { color: var(--g300); }
  .footer-brand p {
    color: rgba(255,255,255,0.45);
    font-size: 13px;
    line-height: 1.7;
    margin-top: 1rem;
    max-width: 240px;
  }
  .footer-col h4 {
    color: var(--g100);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 1rem;
  }
  .footer-col ul { list-style: none; }
  .footer-col ul li { margin-bottom: 8px; }
  .footer-col ul li a {
    color: rgba(255,255,255,0.45);
    text-decoration: none;
    font-size: 13px;
    transition: color 0.2s;
  }
  .footer-col ul li a:hover { color: var(--g100); }
  .footer-bottom {
    max-width: 1200px;
    margin: 0 auto;
    border-top: 1px solid rgba(255,255,255,0.08);
    padding-top: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .footer-bottom p { color: rgba(255,255,255,0.3); font-size: 12px; }
  .outlet-badge {
    background: rgba(99,153,34,0.2);
    border: 1px solid rgba(99,153,34,0.3);
    color: var(--g100);
    border-radius: 6px;
    padding: 4px 12px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.04em;
  }

  /* UTILS */
  .divider { height: 1px; background: var(--border); margin: 3rem 0; }
  .mb-2 { margin-bottom: 2rem; }
  .mt-3 { margin-top: 3rem; }

  @media (max-width: 960px) {
    .layout-with-cart { grid-template-columns: 1fr; }
    .cart-panel { position: static; }
    .hero-inner { grid-template-columns: 1fr; }
    .hero-cards { display: none; }
    .features-inner { grid-template-columns: repeat(2, 1fr); }
    .reviews-grid, .coupons-grid { grid-template-columns: 1fr 1fr; }
    .footer-inner { grid-template-columns: 1fr 1fr; }
    .menu-items-list { grid-template-columns: 1fr; }
  }
  @media (max-width: 600px) {
    .nav-links { display: none; }
    .bestsellers-grid { grid-template-columns: 1fr 1fr; }
    .reviews-grid, .coupons-grid, .features-inner { grid-template-columns: 1fr; }
    .footer-inner { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-inner">
    <a class="logo" href="#">
      <div class="logo-icon">🍜</div>
      <div>
        <div class="logo-text">Wholesome Eats</div>
        <div class="logo-sub">📍 Parel, Mumbai</div>
      </div>
    </a>
    <ul class="nav-links">
      <li><a href="#menu" class="active">Menu</a></li>
      <li><a href="#offers">Offers</a></li>
      <li><a href="#reviews">Reviews</a></li>
      <li><a href="#track">Track Order</a></li>
    </ul>
    <div class="nav-right">
      <button class="btn-login">Sign In</button>
      <button class="btn-cart" onclick="toggleCart()">
        🛒 Cart
        <span class="cart-badge" id="cart-count">0</span>
      </button>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">
    <div>
      <div class="hero-tag">⭐ &nbsp;#1 Comfort Food in Parel</div>
      <h1>Fresh, Wholesome &amp; Delivered Hot</h1>
      <p class="hero-desc">Ramen bowls, momos, pastas, maggi, refreshing beverages — made fresh in our Parel kitchen and delivered to your door in 35 minutes.</p>
      <div class="hero-actions">
        <button class="btn-primary" onclick="scrollToMenu()">Order Now</button>
        <button class="btn-outline-white" onclick="document.getElementById('bestsellers').scrollIntoView({behavior:'smooth'})">View Bestsellers</button>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hero-stat-val">4.8★</div>
          <div class="hero-stat-label">Avg Rating</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-val">35 min</div>
          <div class="hero-stat-label">Delivery</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-val">30+</div>
          <div class="hero-stat-label">Menu Items</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-val">₹69+</div>
          <div class="hero-stat-label">Starts From</div>
        </div>
      </div>
    </div>
    <div class="hero-cards">
      <div class="hero-card featured">
        <div class="hero-card-icon">🍜</div>
        <div>
          <div class="hero-card-title">Classic Masala Ramen</div>
          <div class="hero-card-sub">Bestseller · ₹149</div>
        </div>
      </div>
      <div class="hero-card">
        <div class="hero-card-icon">🥟</div>
        <div class="hero-card-title">Steamed Momos</div>
        <div class="hero-card-sub">From ₹89</div>
      </div>
      <div class="hero-card">
        <div class="hero-card-icon">🍟</div>
        <div class="hero-card-title">Loaded Fries</div>
        <div class="hero-card-sub">From ₹79</div>
      </div>
      <div class="hero-card">
        <div class="hero-card-icon">☕</div>
        <div class="hero-card-title">Cold Coffee</div>
        <div class="hero-card-sub">₹109</div>
      </div>
      <div class="hero-card">
        <div class="hero-card-icon">🍝</div>
        <div class="hero-card-title">Masala Maggi</div>
        <div class="hero-card-sub">₹69</div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES BAR -->
<div class="features-bar">
  <div class="features-inner">
    <div class="feature-item">
      <div class="feature-icon">⚡</div>
      <div class="feature-title">35-Minute Delivery</div>
      <div class="feature-sub">Hot &amp; fresh to your door</div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">🥬</div>
      <div class="feature-title">Fresh Ingredients</div>
      <div class="feature-sub">Sourced fresh every morning</div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">💳</div>
      <div class="feature-title">Easy Payments</div>
      <div class="feature-sub">UPI, Card, Cash, Wallet</div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">🔖</div>
      <div class="feature-title">Great Deals</div>
      <div class="feature-sub">Coupons &amp; combos daily</div>
    </div>
  </div>
</div>

<!-- MAIN -->
<div class="main">

  <!-- BESTSELLERS -->
  <div id="bestsellers">
    <div class="section-header">
      <div>
        <div class="section-title">⭐ Bestsellers</div>
        <div class="section-sub">What everyone's ordering right now</div>
      </div>
      <a href="#" class="see-all">See all →</a>
    </div>
    <div class="bestsellers-grid" id="bestsellers-grid"></div>
  </div>

  <!-- MENU WITH CART -->
  <div id="menu">
    <div class="section-header">
      <div>
        <div class="section-title">Full Menu</div>
        <div class="section-sub">6 categories · 30+ items</div>
      </div>
    </div>

    <div class="category-tabs" id="cat-tabs"></div>

    <div class="layout-with-cart">
      <!-- MENU LIST -->
      <div id="menu-list"></div>

      <!-- CART PANEL -->
      <div class="cart-panel">
        <div class="cart-header">
          <div class="cart-header-title">🛒 Your Order</div>
          <span style="color:rgba(255,255,255,0.7);font-size:13px;" id="cart-item-count">0 items</span>
        </div>
        <div class="cart-items" id="cart-items-list">
          <div class="cart-empty">
            <div class="cart-empty-icon">🍃</div>
            <div class="cart-empty-text">Your cart is empty.<br>Add items to get started!</div>
          </div>
        </div>
        <div class="cart-summary" id="cart-summary" style="display:none;">
          <div class="summary-row"><span>Subtotal</span><span id="s-subtotal">₹0</span></div>
          <div class="summary-row"><span>GST (5%)</span><span id="s-gst">₹0</span></div>
          <div class="summary-row"><span id="delivery-label">Delivery</span><span id="s-delivery">₹30</span></div>
          <div class="summary-row total"><span>Total</span><span id="s-total">₹0</span></div>
        </div>
        <div class="order-type-selector">
          <div class="order-type-label">Order Type</div>
          <div class="order-type-options">
            <button class="order-type-btn active" onclick="setOrderType('delivery', this)">🛵 Delivery</button>
            <button class="order-type-btn" onclick="setOrderType('takeaway', this)">🏃 Takeaway</button>
            <button class="order-type-btn" onclick="setOrderType('dine_in', this)">🪑 Dine In</button>
          </div>
        </div>
        <div class="cart-cta" id="cart-cta" style="display:none;">
          <button class="btn-order" onclick="placeOrder()">Place Order →</button>
          <div class="payment-options">
            <div class="pay-chip">📱 UPI</div>
            <div class="pay-chip">💳 Card</div>
            <div class="pay-chip">💵 Cash</div>
            <div class="pay-chip">👛 Wallet</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- COUPONS -->
  <div id="offers" class="mt-3">
    <div class="section-header">
      <div>
        <div class="section-title">🏷️ Today's Offers</div>
        <div class="section-sub">Apply at checkout for instant savings</div>
      </div>
    </div>
    <div class="coupons-grid">
      <div class="coupon-card">
        <div class="coupon-type">Flat Discount</div>
        <div class="coupon-discount">₹30 OFF</div>
        <div class="coupon-desc">On orders above ₹199 · Valid today</div>
        <div class="coupon-code-wrap" onclick="copyCode('WELCOME30')">
          <span class="coupon-code">WELCOME30</span>
          <span class="coupon-copy">Copy</span>
        </div>
      </div>
      <div class="coupon-card" style="background: var(--g600);">
        <div class="coupon-type">% Off</div>
        <div class="coupon-discount">20% OFF</div>
        <div class="coupon-desc">On your first order · New users only</div>
        <div class="coupon-code-wrap" onclick="copyCode('NEWBITE20')">
          <span class="coupon-code">NEWBITE20</span>
          <span class="coupon-copy">Copy</span>
        </div>
      </div>
      <div class="coupon-card" style="background: var(--g500);">
        <div class="coupon-type">Weekend Special</div>
        <div class="coupon-discount">₹50 OFF</div>
        <div class="coupon-desc">On orders above ₹349 · Sat &amp; Sun only</div>
        <div class="coupon-code-wrap" onclick="copyCode('WEEKEND50')">
          <span class="coupon-code">WEEKEND50</span>
          <span class="coupon-copy">Copy</span>
        </div>
      </div>
    </div>
  </div>

  <!-- REVIEWS -->
  <div id="reviews">
    <div class="section-header">
      <div>
        <div class="section-title">💬 What Customers Say</div>
        <div class="section-sub">4.7 ★ average across 500+ reviews</div>
      </div>
    </div>
    <div class="reviews-grid">
      <div class="review-card">
        <div class="review-stars">★★★★★</div>
        <div class="review-text">"The Masala Ramen is absolutely divine — rich broth, perfect noodles. Been ordering 3 times a week!"</div>
        <div class="review-author">
          <div class="review-avatar">PR</div>
          <div>
            <div class="review-name">Priya R.</div>
            <div class="review-item">Classic Masala Ramen</div>
          </div>
        </div>
      </div>
      <div class="review-card">
        <div class="review-stars">★★★★★</div>
        <div class="review-text">"Tandoori Momos taste exactly like street food but delivered clean and hot. Amazing value for money!"</div>
        <div class="review-author">
          <div class="review-avatar">AK</div>
          <div>
            <div class="review-name">Arjun K.</div>
            <div class="review-item">Tandoori Momos</div>
          </div>
        </div>
      </div>
      <div class="review-card">
        <div class="review-stars">★★★★☆</div>
        <div class="review-text">"Loaded Cheese Fries + Cold Coffee combo is unbeatable. Delivery was quick too. Will order again!"</div>
        <div class="review-author">
          <div class="review-avatar">SM</div>
          <div>
            <div class="review-name">Sneha M.</div>
            <div class="review-item">Loaded Cheese Fries</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- /main -->

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-brand">
      <div class="logo">
        <div class="logo-icon" style="background:var(--g500)">🍜</div>
        <div>
          <div class="logo-text">Wholesome Eats</div>
          <div class="logo-sub">📍 Parel, Mumbai</div>
        </div>
      </div>
      <p>Comfort food made fresh daily. Noodles, momos, snacks &amp; drinks that feel like home. Open 10 AM – 11 PM.</p>
    </div>
    <div class="footer-col">
      <h4>Menu</h4>
      <ul>
        <li><a href="#">Noodles &amp; Pasta</a></li>
        <li><a href="#">Momos</a></li>
        <li><a href="#">Snacks &amp; Fries</a></li>
        <li><a href="#">Maggi &amp; Bites</a></li>
        <li><a href="#">Beverages</a></li>
        <li><a href="#">Coffee</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Help</h4>
      <ul>
        <li><a href="#">Track My Order</a></li>
        <li><a href="#">Cancel Order</a></li>
        <li><a href="#">Refund Policy</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Partner with Us</a></li>
        <li><a href="#">Careers</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2024 Wholesome Eats. All rights reserved.</p>
    <div class="outlet-badge">Outlet #777196074</div>
  </div>
</footer>

<script>
const menuData = [
  {
    id: 1, name: "Noodles & Pasta", icon: "🍜", items: [
      { id: 101, name: "Classic Masala Ramen", price: 149, best: true, veg: true, desc: "Rich masala broth with wheat noodles & toppings" },
      { id: 102, name: "Veg Ramen Bowl", price: 129, best: false, veg: true, desc: "Mild vegetable broth with fresh toppings" },
      { id: 103, name: "Spicy Chicken Ramen", price: 169, best: false, veg: false, desc: "Fiery chicken broth with tender chicken slices" },
      { id: 104, name: "Arrabbiata Pasta", price: 139, best: true, veg: true, desc: "Spicy tomato sauce with penne pasta" },
      { id: 105, name: "White Sauce Pasta", price: 149, best: false, veg: true, desc: "Creamy béchamel with penne & herbs" },
      { id: 106, name: "Pesto Chicken Pasta", price: 179, best: false, veg: false, desc: "Basil pesto with grilled chicken chunks" }
    ]
  },
  {
    id: 2, name: "Momos", icon: "🥟", items: [
      { id: 201, name: "Steamed Veg Momos (6 pcs)", price: 89, best: true, veg: true, desc: "Soft steamed dumplings with spicy chutney" },
      { id: 202, name: "Fried Veg Momos (6 pcs)", price: 99, best: false, veg: true, desc: "Crispy fried veg dumplings" },
      { id: 203, name: "Steamed Chicken Momos (6 pcs)", price: 109, best: true, veg: false, desc: "Juicy chicken filling in soft wrappers" },
      { id: 204, name: "Fried Chicken Momos (6 pcs)", price: 119, best: false, veg: false, desc: "Golden fried chicken momos" },
      { id: 205, name: "Tandoori Momos (6 pcs)", price: 129, best: false, veg: true, desc: "Char-grilled smoky momos with mint chutney" },
      { id: 206, name: "Paneer Momos (6 pcs)", price: 119, best: false, veg: true, desc: "Cottage cheese stuffed steamed momos" }
    ]
  },
  {
    id: 3, name: "Snacks & Fries", icon: "🍟", items: [
      { id: 301, name: "Classic Salted Fries", price: 79, best: true, veg: true, desc: "Thin cut crispy fries with sea salt" },
      { id: 302, name: "Peri Peri Fries", price: 89, best: false, veg: true, desc: "Crispy fries tossed in peri peri spice" },
      { id: 303, name: "Loaded Cheese Fries", price: 109, best: true, veg: true, desc: "Fries topped with melted cheese sauce" },
      { id: 304, name: "Masala Fries", price: 89, best: false, veg: true, desc: "Indian-spiced crispy fries" },
      { id: 305, name: "Garlic Bread (4 pcs)", price: 69, best: false, veg: true, desc: "Toasted bread with herbed garlic butter" }
    ]
  },
  {
    id: 4, name: "Maggi & Quick Bites", icon: "🍝", items: [
      { id: 401, name: "Classic Masala Maggi", price: 69, best: true, veg: true, desc: "The OG maggi with extra masala" },
      { id: 402, name: "Cheese Maggi", price: 89, best: false, veg: true, desc: "Maggi loaded with melted cheese" },
      { id: 403, name: "Egg Maggi", price: 89, best: false, veg: false, desc: "Maggi with a perfectly cooked egg" },
      { id: 404, name: "Veggie Loaded Maggi", price: 89, best: false, veg: true, desc: "Maggi packed with fresh vegetables" }
    ]
  },
  {
    id: 5, name: "Beverages", icon: "🍋", items: [
      { id: 501, name: "Classic Lemonade", price: 59, best: true, veg: true, desc: "Fresh squeezed lemon with a pinch of salt" },
      { id: 502, name: "Mint Lemonade", price: 69, best: false, veg: true, desc: "Cool minty lemonade blend" },
      { id: 503, name: "Virgin Mojito", price: 79, best: true, veg: true, desc: "Lime, mint & soda freshness" },
      { id: 504, name: "Watermelon Lemonade", price: 79, best: false, veg: true, desc: "Fresh watermelon with lemon" },
      { id: 505, name: "Cold Brew Lemonade", price: 99, best: false, veg: true, desc: "Cold brew tea with tangy lemon" },
      { id: 506, name: "Mango Lassi", price: 79, best: false, veg: true, desc: "Thick creamy mango yogurt drink" }
    ]
  },
  {
    id: 6, name: "Coffee & Hot Drinks", icon: "☕", items: [
      { id: 601, name: "Espresso", price: 59, best: false, veg: true, desc: "Double shot Italian espresso" },
      { id: 602, name: "Cappuccino", price: 89, best: true, veg: true, desc: "Espresso with foamed milk" },
      { id: 603, name: "Café Latte", price: 99, best: false, veg: true, desc: "Smooth espresso with steamed milk" },
      { id: 604, name: "Cold Coffee", price: 109, best: true, veg: true, desc: "Chilled blended coffee delight" },
      { id: 605, name: "Hazelnut Latte", price: 119, best: false, veg: true, desc: "Espresso with hazelnut syrup & milk" },
      { id: 606, name: "Masala Chai", price: 49, best: false, veg: true, desc: "Spiced Indian tea with ginger & cardamom" }
    ]
  }
];

let cart = {};
let orderType = 'delivery';

function getFoodEmoji(name) {
  const n = name.toLowerCase();
  if (n.includes('ramen') || n.includes('noodle')) return '🍜';
  if (n.includes('pasta') || n.includes('arrabbiata') || n.includes('pesto')) return '🍝';
  if (n.includes('momo')) return '🥟';
  if (n.includes('fries') || n.includes('garlic bread')) return '🍟';
  if (n.includes('maggi')) return '🍜';
  if (n.includes('lemonade') || n.includes('mojito') || n.includes('lassi')) return '🥤';
  if (n.includes('cold coffee') || n.includes('coffee') || n.includes('latte') || n.includes('espresso') || n.includes('cappuccino')) return '☕';
  if (n.includes('chai')) return '🍵';
  return '🥘';
}

function renderBestsellers() {
  const allItems = menuData.flatMap(c => c.items.filter(i => i.best)).slice(0, 6);
  const grid = document.getElementById('bestsellers-grid');
  grid.innerHTML = allItems.map(item => `
    <div class="item-card">
      <div class="item-img-wrap">
        ${getFoodEmoji(item.name)}
        <span class="bestseller-badge">⭐ Best</span>
        ${item.veg ? '<div class="veg-dot"></div>' : '<div class="nonveg-dot"></div>'}
      </div>
      <div class="item-body">
        <div class="item-name">${item.name}</div>
        <div class="item-desc">${item.desc}</div>
        <div class="item-footer">
          <div class="item-price">₹${item.price}</div>
          <button class="btn-add" onclick="addToCart(${item.id}, '${item.name.replace(/'/g,"\\'")}', ${item.price})">+</button>
        </div>
      </div>
    </div>
  `).join('');
}

function renderCategoryTabs() {
  const tabs = document.getElementById('cat-tabs');
  tabs.innerHTML = `<button class="cat-tab active" onclick="scrollToCategory(0, this)">🍽️ All</button>` +
    menuData.map((c, i) => `<button class="cat-tab" onclick="scrollToCategory(${c.id}, this)">${c.icon} ${c.name}</button>`).join('');
}

function scrollToCategory(id, btn) {
  document.querySelectorAll('.cat-tab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  if (id === 0) {
    document.getElementById('menu-list').scrollIntoView({ behavior: 'smooth' });
  } else {
    const el = document.getElementById('cat-' + id);
    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

function renderMenu() {
  const list = document.getElementById('menu-list');
  list.innerHTML = menuData.map(cat => `
    <div class="menu-section" id="cat-${cat.id}">
      <div class="menu-category-header">
        <div class="menu-cat-icon">${cat.icon}</div>
        <div>
          <div class="menu-cat-name">${cat.name}</div>
          <div class="menu-cat-count">${cat.items.length} items</div>
        </div>
      </div>
      <div class="menu-items-list">
        ${cat.items.map(item => `
          <div class="menu-row">
            <div class="menu-row-icon">${getFoodEmoji(item.name)}</div>
            <div class="menu-row-info">
              <div class="menu-row-name">
                ${item.veg ? '<span style="color:#3b6d11;font-size:12px;">●</span>' : '<span style="color:#c0392b;font-size:12px;">●</span>'}
                ${item.name}
                ${item.best ? '<span class="tag-best">⭐ Best</span>' : ''}
              </div>
              <div class="menu-row-desc">${item.desc}</div>
            </div>
            <div class="menu-row-right">
              <div class="menu-row-price">₹${item.price}</div>
              <button class="btn-add" onclick="addToCart(${item.id}, '${item.name.replace(/'/g,"\\'")}', ${item.price})">+</button>
            </div>
          </div>
        `).join('')}
      </div>
    </div>
  `).join('');
}

function addToCart(id, name, price) {
  if (cart[id]) {
    cart[id].qty++;
  } else {
    cart[id] = { name, price, qty: 1 };
  }
  updateCartUI();
  showToast('Added to cart!');
}

function updateCartQty(id, delta) {
  if (!cart[id]) return;
  cart[id].qty += delta;
  if (cart[id].qty <= 0) delete cart[id];
  updateCartUI();
}

function updateCartUI() {
  const items = Object.entries(cart);
  const totalQty = items.reduce((s, [, v]) => s + v.qty, 0);
  document.getElementById('cart-count').textContent = totalQty;
  document.getElementById('cart-item-count').textContent = totalQty + ' item' + (totalQty !== 1 ? 's' : '');

  const listEl = document.getElementById('cart-items-list');
  if (items.length === 0) {
    listEl.innerHTML = `<div class="cart-empty"><div class="cart-empty-icon">🍃</div><div class="cart-empty-text">Your cart is empty.<br>Add items to get started!</div></div>`;
    document.getElementById('cart-summary').style.display = 'none';
    document.getElementById('cart-cta').style.display = 'none';
    return;
  }

  listEl.innerHTML = items.map(([id, item]) => `
    <div class="cart-item">
      <div class="cart-item-name">${item.name}</div>
      <div class="cart-qty-ctrl">
        <button class="qty-btn" onclick="updateCartQty(${id}, -1)">−</button>
        <span class="qty-num">${item.qty}</span>
        <button class="qty-btn" onclick="updateCartQty(${id}, 1)">+</button>
      </div>
      <div class="cart-item-price">₹${item.price * item.qty}</div>
    </div>
  `).join('');

  const subtotal = items.reduce((s, [, v]) => s + v.price * v.qty, 0);
  const gst = Math.round(subtotal * 0.05);
  const delivery = orderType === 'delivery' ? 30 : 0;
  const total = subtotal + gst + delivery;

  document.getElementById('s-subtotal').textContent = '₹' + subtotal;
  document.getElementById('s-gst').textContent = '₹' + gst;
  document.getElementById('s-delivery').textContent = delivery > 0 ? '₹' + delivery : 'FREE';
  document.getElementById('delivery-label').textContent = orderType === 'delivery' ? 'Delivery' : orderType === 'takeaway' ? 'Takeaway' : 'Dine In';
  document.getElementById('s-total').textContent = '₹' + total;

  document.getElementById('cart-summary').style.display = 'block';
  document.getElementById('cart-cta').style.display = 'block';
}

function setOrderType(type, btn) {
  orderType = type;
  document.querySelectorAll('.order-type-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  updateCartUI();
}

function toggleCart() {
  document.getElementById('menu').scrollIntoView({ behavior: 'smooth' });
}

function scrollToMenu() {
  document.getElementById('menu').scrollIntoView({ behavior: 'smooth' });
}

function placeOrder() {
  const items = Object.entries(cart);
  if (items.length === 0) return;
  const total = items.reduce((s, [, v]) => s + v.price * v.qty, 0);
  const gst = Math.round(total * 0.05);
  const delivery = orderType === 'delivery' ? 30 : 0;
  showToast('🎉 Order placed! Arriving in ~35 mins');
  cart = {};
  updateCartUI();
}

function copyCode(code) {
  navigator.clipboard.writeText(code).then(() => showToast('Coupon ' + code + ' copied!')).catch(() => showToast('Code: ' + code));
}

function showToast(msg) {
  const existing = document.getElementById('toast');
  if (existing) existing.remove();
  const t = document.createElement('div');
  t.id = 'toast';
  t.textContent = msg;
  t.style.cssText = `position:fixed;bottom:28px;left:50%;transform:translateX(-50%);background:var(--g700);color:white;padding:10px 24px;border-radius:100px;font-size:14px;font-weight:500;z-index:9999;box-shadow:0 4px 20px rgba(0,0,0,0.2);animation:fadeIn 0.25s ease;`;
  document.body.appendChild(t);
  setTimeout(() => t.remove(), 2400);
}

const style = document.createElement('style');
style.textContent = `@keyframes fadeIn{from{opacity:0;transform:translateX(-50%) translateY(10px)}to{opacity:1;transform:translateX(-50%) translateY(0)}}`;
document.head.appendChild(style);

renderBestsellers();
renderCategoryTabs();
renderMenu();
</script>
</body>
</html>