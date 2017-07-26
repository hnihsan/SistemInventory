


<div class="sidebar" data-color="purple" data-image="{{url('/img/sidebar-5.jpg')}}">

<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                SuperChamp Team
            </a>
        </div>

        <ul class="nav">
            <li class="{{$sideHome or ''}}">
                <a href="{{url('/')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="{{$sideBarang or ''}}">
                <a href="{{url('/Barang')}}">
                    <i class="pe-7s-note2"></i>
                    <p>Barang</p>
                </a>
            </li>
            <li class="{{$sidePengadaan or ''}}">
                <a href="{{url('Pengadaan')}}">
                    <i class="pe-7s-news-paper"></i>
                    <p>Pengadaan</p>
                </a>
            </li>
            <li class="{{$sidePengeluaran or ''}}">
                <a href="icons.html">
                    <i class="pe-7s-science"></i>
                    <p>Pengeluaran</p>
                </a>
            </li>
            <li>
                <a href="#" >
                    <i class="pe-7s-map-marker"></i>
                    Laporan
                    <b class="caret"></b>
                </a>
                <ul >
                  <li class="{{$sideKartuBarang or ''}}"><a href="#">Kartu Barang</a></li>
                  <li class="{{$sideLapAll or ''}}"><a href="#">Laporan Keseluruhan Barang</a></li>
                </ul>
            </li>
        </ul>
  </div>
</div>
