@extends('layouts.checkout')
@section('title')
    Checkout
@endsection
@section('content')
      <!-- Main -->
      <main>
        <section class="section-details-header">

        </section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <div class="breadcrumb-item">
                                    Paket Travel
                                </div>
                                <div class="breadcrumb-item">
                                    Details
                                </div>
                                <div class="breadcrumb-item active">
                                    Check Out
                                </div>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 col-lg-0">
                        <div class="card card-details">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h1>Who is Going</h1>
                            <p>Trip to {{ $item->travel_package->title }},{{ $item->travel_package->location }}</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Foto</td>
                                        <td>Nama</td>
                                        <td>Kewarganegaraan</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/avatar-1.png') }}" height="60">
                                        </td>
                                        <td class="align-middle">Agus Rifqi</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">Tidak Ada</td>
                                        <td class="align-middle">Aktif</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{ url('frontend/images/ic_foods.png') }}" height="23">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/avatar-2.png') }}" height="60">
                                        </td>
                                        <td class="align-middle">Galih</td>
                                        <td class="align-middle">SG</td>
                                        <td class="align-middle">30 Hari</td>
                                        <td class="align-middle">Aktif</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{ url('frontend/images/ic_foods.png') }}" height="23">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline">
                                <label for="inputUsername" class="sr-only" >Nama</label>
                                <Input type="text" class="form-control mr-sm-2 mb-2" id="inputUsername" placeholder="Username" name="inputUsername"></Input>
                                <label for="Visa" class="sr-only">Visa</label>
                                <Select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="Visa" selected>Visa</option>
                                    <option value="30 Hari">30 Hari</option>
                                    <option value="N/A">N/A</option>
                                </Select>
                                <label for="doePassport"class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm 2">
                                    <input type="text" class="form-control datepicker" id ="doePassport" placeholder="DOE Passport">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2 px-4 ml-2">
                                    Tambah
                                </button>
                            </form>
                            <h3 class="mt-2 mb-0">Catatan</h3>
                            <p class="disclaimer mb-0">
                                You Are Only able to invite member that has registered in Nomads
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">          
                            <h2>Checkout Informations</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">
                                        Members
                                    </th>
                                    <td width="50%" class="text-right">
                                        2 Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Additonal VISA
                                    </th>
                                    <td width="50%" class="text-right">
                                        Rp. 200.000
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Trip Price
                                    </th>
                                    <td width="50%" class="text-right">
                                        Rp. 80.000 / Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Sub Total
                                    </th>
                                    <td width="50%" class="text-right">
                                        Rp. 280.000
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Jumlah(+Unik)
                                    </th>
                                    <td width="50%" class="text-right text-total">
                                       <span class="text-blue">Rp. 280.000,</span>
                                       <span class="text-orange">22</span>
                                    </td>
                                </tr>
                            </table>
                            <hr/>
                            <h2>Cara Pembayaran</h2>
                            <p class="payment-instructions">
                                Silahkan Lakukan Pembayaran Sebelum Melanjutkan Pendaftaran
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PSHT Rayon Ceger</h3>
                                        <p>123-456-789-3
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PSHT Rayon Ceger</h3>
                                        <p>123-456-789-0
                                            <br>
                                            Bank Mandiri
                                        </p>
                                    
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                        <div class="join-container">
                            <a href="{{ url('/checkout/success') }}" class="btn btn-block btn-join-now mt-3 py-2">Bayar Sekarang</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ url('/') }}" class="text-muted">Batalkan</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush


@push('addon-script')
<script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(".datepicker").datepicker({
                uiLibrary :"bootstrap4",
                icons : {
                    rightIcon : "<img src='{{ url("frontend/images/kalender.png") }}' height = '20'/>"
                }
            });
        });
    </script>
@endpush