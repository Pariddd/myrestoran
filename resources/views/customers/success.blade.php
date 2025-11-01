@extends('customers.layouts.master')

@section('title', 'Pesanan Berhasil')

@section('content')

<div class="container-fluid py-5 d-flex justify-content-center"> 
  <div class="receipt border p-4 bg-white shadow" style="width: 450px; margin-top: 5rem">
    <h5 class="text-center mb-2">Pesanan berhasil dibuat!</h5>
    @if ($order->payment_method == 'tunai' && $order->status == 'pending')
        <p class="text-center">
            <span class="badge bg-danger fs-6 px-3 py-2">Menunggu Pembayaran</span>
        </p>
    @elseif($order->payment_method == 'qris' && $order->status == 'pending')
        <p class="text-center">
            <span class="badge bg-warning fs-6 px-3 py-2">Menunggu Konfirmasi Pembayaran</span>
        </p>
    @else
        <p class="text-center">
            <span class="badge bg-success fs-6 px-3 py-2">Pembayaran Berhasil, pesanan segera diproses</span>
        </p>
    @endif

    <hr>
    <h4 class="fw-bold text-center">Kode Bayar: <br> <span class="text-info">{{ $order->order_code }}</span></h4>
    <hr>
    <h5 class="mb-3 text-center">Detail Pesanan</h5>
    <table class="table table-borderless">
      <tbody>
        @foreach ($orderItems as $orderItem)
            <tr>
              <td>{{ Str::limit($orderItem->item->name, 25)}} ({{ $orderItem->quantity }}) </td>
              <td class="text-end">Rp {{ number_format($orderItem->total_price, 0, ',','.') }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <table class="table table-borderless">
      <tbody>
        <tr>
          <td>Subtotal</td>
          <td class="text-end">Rp {{ number_format($order->subtotal, 0, ',','.') }}</td>
        </tr>
        <tr>
          <td>Pajak (10%)</td>
          <td class="text-end">Rp {{ number_format($order->tax, 0, ',','.') }}</td>
        </tr>
        <tr>
          <th>Total</th>
          <th class="text-end fw_bold">Rp {{ number_format($order->grand_total, 0, ',','.') }}</th>
      </tbody>
    </table>

    @if ($order->payment_method == 'tunai')
       <p class="small text-center">Tunjukkan kode bayar ini ke kasir untuk pembayaran</p>
    @elseif($order->payment_method == 'qris')
        <p class="small text-center">Pembayaran Sukses, pesanan akan segera diproses!</p>
    @endif
    <hr>
    <a href="{{ route('menu') }}" class="btn btn-info w-100">Kembali ke menu</a>
  </div>
</div>

@endsection