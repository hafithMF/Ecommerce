<style>
  .header-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .search-bar {
    position: relative;
    flex: 1;
  }

  .search-bar input {
    width: 100%;
    padding: 0.6rem 1rem 0.6rem 2.5rem;
    border-radius: 999px;
    border: 1px solid #ccc;
    font-size: 0.95rem;
    background-color: #f7f7f7;
    transition: all 0.3s ease;
  }

  .search-bar input:focus {
    outline: none;
    background-color: #fff;
    border-color: #000;
  }

  .search-bar svg {
    position: absolute;
    top: 50%;
    left: 0.9rem;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    stroke: #888;
  }

  .cart-icon {
    position: relative;
    font-size: 1.4rem;
    color: #000;
  }

  .cart-icon .count {
    position: absolute;
    top: -6px;
    right: -10px;
    background: #000;
    color: #fff;
    border-radius: 999px;
    font-size: 12px;
    padding: 2px 6px;
  }
</style>

<div class="header-actions">
  <form action="{{ route('clientProductSearch') }}" method="GET" class="search-bar">
    <input type="search" name="product" placeholder="Search" id="searchInput" onfocus="Onfocus(this)" onblur="Onblur(this)">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
    </svg>
  </form>

  <a href="{{ route('clientCarts') }}" class="cart-icon text-decoration-none">
    <span class="count" id="cartCount">{{ count((array) session('cart')) }}</span>
    <i class="bi bi-cart2"></i>
  </a>
</div>
