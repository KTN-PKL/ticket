<div class="card-body">
    <center>
    <h4>Kontak Mitra</h4>
    <div class="pembungkus">
        <div class="lingkaran">
            <i  class="bi bi-person-rolodex" style="font-size:32px;color:#292D32"></i>
        </div>
    </div>
    </center>
</div>
<div class="card-body">
    <table>
        <tr>
            <td valign="top" style="width:50%"><h6>Nama Mitra</h6></td>
            <td valign="top"><h6>:</h6></td>
            <td valign="top"><h6 style="color: black">{{$masif->name}}</h6></td>
        </tr>
        <tr>
            <td valign="top"><h6>Nama Wisata</h6></td>
            <td valign="top"><h6>:</h6></td>
            <td valign="top"><h6 style="color: black">{{$masif->wisata}}</h6></td>
        </tr>
        <tr>
            <td valign="top"><h6>Whatsapp Mitra</h6></td>
            <td valign="top"><h6>:</h6></td>
            <td valign="top"><h6 style="color: black">62{{$masif->kontak}}</h6></td>
        </tr>
        <tr>
            <td valign="top"><h6>Email Mitra</h6></td>
            <td valign="top"><h6>:</h6></td>
            <td valign="top"><h6 style="color: black">{{$masif->email}}</h6></td>
        </tr>
    </table>

</div>
<a href="https://api.whatsapp.com/send?phone=62{{$masif->kontak}}&text=Kami%20dari%20admin%20ulinyuk.com" class="btn btn-success" target="_blank">Hubungi Sekarang</a>