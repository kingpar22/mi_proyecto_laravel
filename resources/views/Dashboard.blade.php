@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<section class="cards">
    <div class="card">
        <h4>Pagos Internet</h4>
        <div class="big-number">$2,800.00</div>
        <small>Pendiente - 37 pagos</small>
    </div>
    <div class="card">
        <h4>Clientes</h4>
        <div class="big-number">443</div>
        <small>Total</small>
    </div>
    <div class="card">
        <h4>Tickets</h4>
        <div class="big-number">0</div>
        <small>Pendientes</small>
    </div>
</section>

<section class="traffic">
    <div class="traffic-box">
        <h4>Tráfico</h4>
        <div>0 GiB</div>
        <small>Total Descarga</small>
    </div>
    <div class="traffic-box">
        <h4>&nbsp;</h4>
        <div>0 GiB</div>
        <small>Total Subida</small>
    </div>
</section>

<section class="chart-section">
    <h4>Historial de Finanzas</h4>
    <div class="chart">
        <div class="bar" style="height:60%"></div>
        <div class="bar" style="height:50%"></div>
        <div class="bar" style="height:65%"></div>
        <div class="bar" style="height:80%"></div>
        <div class="bar" style="height:88%"></div>
        <div class="bar" style="height:95%"></div>
    </div>
</section>
@endsection