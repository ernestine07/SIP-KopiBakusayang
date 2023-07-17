<title>Laporan Keuangan</title>

<x-dashboard-layout>
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
          <div class="section__content section__content--p30">
              <div class="container-fluid">
                  <div class="header-wrap">
                      <div class="header-button">
                          <div class="account-wrap">
                              <div class="account-item clearfix js-item-menu">
                                  <div class="content">
                                      <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                  </div>
                                  <div class="account-dropdown js-dropdown">
                                      <div class="info clearfix">
                                          <div class="content">
                                              <h5 class="name">
                                                  <a href="#">{{Auth::user()->name}}</a>
                                                  <a href="#">{{Auth::user()->role->nama_role}}</a>
                                              </h5>
                                              <span class="email">{{Auth::user()->email}}</span>
                                          </div>
                                      </div>
                                      <div class="account-dropdown__body">
                                          <div class="account-dropdown__item">
                                              <a href="#">
                                                  <form action="/" method="POST">
                                                      @csrf                                                    
                                                      <button type="submit" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                                                      <i class="zmdi zmdi-money-box"></i>
                                                          Logout
                                                      </button>
                                                  </form>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
          <div class="row">
            <div class="col">
              {{-- <div class="card card-primary card-outline"> --}}
                <div class="card-header">
                  <h3>Laporan Keuangan</h3>
                </div>
                {{-- @if (Auth::User()->role->nama_role=='Admin')
                <div class="card-footer">
                  <a href="{{ route('laporan.index') }}" class="btn btn-sm btn-danger">
                    Tutup
                  </a>
                </div>
                @endif --}}
                <div class="card-body">
                  <div class="row">
                    <div class="col col-lg-4 col-md-4">
                      <h4 class="text-center">Ringkasan Transaksi</h4>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td>Total Keuangan</td>
                              <td>Rp. {{ number_format($total, 2) }}</td>
                            </tr>
                            <tr>
                              <td>Total Transaksi</td>
                              <td>{{ $totaltransaksi }} Transaksi</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="col col-lg-8 col-md-8">
                      <h4 class="text-center">Rincian Transaksi</h4>
                      <div class="table-responsive table-data">
                        <table class="table table-stripped" id="data_user">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Invoice</th>
                              <th>Subtotal</th>
                              <th>Diskon</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($laporan as $item)
                            <tr>
                              <td>
                                {{ $loop->iteration }}
                              </td>
                              <td>
                              {{ $item->no_invoice }}
                              </td>
                              <td>
                                {{$item->subtotal}}
                              </td>
                              <td>
                              {{ $item->diskon }}
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>                
              {{-- </div> --}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</x-dashboard-layout>
