<div class="column m-l-10 m-t-10 is-2 has-shadow">
  <aside class="menu">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a>Dashboard</a></li>
      <li><a>Customers</a></li>
    </ul>
    <p class="menu-label">Trains</p>
    <ul class="menu-list">
    <li><a>Trains</a></li>
      <li><a>Schedule Trains</a></li>
      <li><a href="{{ route('station.index') }}">Stations</a></li>
    </ul>
    <p class="menu-label">
      Transactions
    </p>
    <ul class="menu-list">
      <li><a>Payments</a></li>
      <li><a href="{{ route('booking.index') }}">Booking</a></li>
      <li><a>Customer Tickets</a></li>
    </ul>
  </aside>
</div>
